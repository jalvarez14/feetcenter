<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Ventas\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class VentasController  extends AbstractActionController
{
    
    public function cancelarAction(){
        
        $request = $this->getRequest();
        if($request->isPost()){
            
            $post_data = $request->getPost();
            
            $visita = \VisitaQuery::create()->findPk($post_data['idvisita']);
            
            //Modificamos la visita
            $visita->setVisitaEstatuspago('cancelada')
                   ->setVisitaCanceladaen(new \DateTime())
                   ->setVisitaStatus('terminado');
            
            $visita->save();
            
            $empleado = $visita->getEmpleadoRelatedByIdempleado();
            $empleado_comision = \EmpleadocomisionQuery::create()->filterByIdclinica($visita->getIdclinica())->filterByIdempledo($visita->getIdempleado())->filterByEmpleadocomisionFecha($visita->getVisitaCreadaen('Y-m-d'))->findOne();
            
            //Itineramos sobre los detalles
            $detalle = new \VisitadetalleQuery();
            foreach ($visita->getVisitadetalles() as $detalle){
                //Si se trata de un producto regresamos a inventario
                if(!is_null($detalle->getIdproductoclinica())){
                    $producto_clinica = $detalle->getProductoclinica();
                    $producto = $producto_clinica->getProducto();
                    $current_stock = (int)$producto_clinica->getProductoclinicaExistencia();
                    $new_stock = $current_stock + (int)$detalle->getVisitadetalleCantidad();
                    $producto_clinica->setProductoclinicaExistencia($new_stock)->save();
                    
                   /*
                    * COMISIONES
                    */
                    
                    
                    //Validamos si el producto genera comision
                     if($producto->getProductoGeneracomision()){
                        //Las comisiones del empleados e definen por su perfil?
                        if(!is_null($empleado->getEmpleadoTipocomisionproducto())){
                            $tipoComision = $empleado->getEmpleadoTipocomisionproducto();
                            if($tipoComision == 'porcentaje'){
                                
                                $comision = (($producto->getProductoPrecio() * $detalle->getVisitadetalleCantidad()) * $empleado->getEmpleadoCantidadcomisionproducto())/100;
                                
                                //Servicios vendidos
                                $current_vendidos = $empleado_comision->getEmpleadocomisionProductosvendidos();
                                $new_vendidos = $current_vendidos -  $detalle->getVisitadetalleCantidad();
                                $empleado_comision->setEmpleadocomisionProductosvendidos($new_vendidos);

                                //Comision servicios
                                $current_productos = $empleado_comision->getEmpleadocomisionComisionproductos();
                                $new_productos = $current_productos - $comision;
                                $empleado_comision->setEmpleadocomisionComisionproductos($new_productos);
                                
                            }else if($tipoComision == 'cantidad'){
                                
                                $comision = $empleado->getEmpleadoCantidadcomisionproducto() * $detalle->getVisitadetalleCantidad();
                                    
                                //Productos vendidos
                                $current_vendidos = $empleado_comision->getEmpleadocomisionProductosvendidos();
                                $new_vendidos = $current_vendidos - $detalle->getVisitadetalleCantidad();
                                $empleado_comision->setEmpleadocomisionProductosvendidos($new_vendidos);

                                //Comision Productos
                                $current_productos = $empleado_comision->getEmpleadocomisionComisionproductos();
                                $new_productos = $current_productos - $comision;
                                $empleado_comision->setEmpleadocomisionComisionproductos($new_productos);
                                
                            }
                        }else{ //Las comisiones del empleado las define el servico/producto vendido
                                
                            $tipoComision = $producto->getProductoTipocomision();
                            if($tipoComision == 'porcentaje'){

                                $comision = (($producto->getProductoPrecio() * $detalle->getVisitadetalleCantidad()) * $producto->getProductoComision())/100;

                                //productos vendidos
                                $current_vendidos = $empleado_comision->getEmpleadocomisionProductosvendidos();
                                $new_vendidos = $current_vendidos -  $detalle->getVisitadetalleCantidad();
                                $empleado_comision->setEmpleadocomisionProductosvendidos($new_vendidos);

                                //Comision productos
                                $current_productos = $empleado_comision->getEmpleadocomisionComisionproductos();
                                $new_productos = $current_productos - $comision;
                                $empleado_comision->setEmpleadocomisionComisionproductos($new_productos);


                            }else if($tipoComision == 'cantidad'){

                                $comision = $producto->getProductoComision() * $detalle->getVisitadetalleCantidad();

                                //productos vendidos
                                $current_vendidos = $empleado_comision->getEmpleadocomisionProductosvendidos();
                                $new_vendidos = $current_vendidos -  $detalle->getVisitadetalleCantidad();
                                $empleado_comision->setEmpleadocomisionProductosvendidos($new_vendidos);

                                //Comision productos
                                $current_productos = $empleado_comision->getEmpleadocomisionComisionproductos();
                                $new_productos = $current_productos - $comision;
                                $empleado_comision->setEmpleadocomisionComisionproductos($new_productos);

                            }
                        }
                     }else{
                        //Descontamos de productos vendidos
                        $current_vendidos = $empleado_comision->getEmpleadocomisionProductosvendidos();
                        $new_vendidos = $current_vendidos -  $detalle->getVisitadetalleCantidad();
                        $empleado_comision->setEmpleadocomisionProductosvendidos($new_vendidos);
                         
                     }
                    
                    
                }
                elseif(!is_null($detalle->getIdservicioclinica())){
                    
                    $servicio_clinica = $detalle->getServicioclinica();
                    $dependencia = $servicio_clinica->getServicio()->getServicioDependencia();
                    //Si tiene dependencia con membresia
                    if($dependencia == 'membresia'){
                        
                        //Eliminamos de membresia detalle y sumamos a pacientemembresia
                        $membresia_detalle = \PacientemembresiadetalleQuery::create()->findOneByIdvisitadetalle($detalle->getIdvisitadetalle());
                        $paciente_membresia = $membresia_detalle->getPacientemembresia();
                        $membresia_detalle->delete();
                        
                        $current_servicios = $paciente_membresia->getPacientemembresiaServiciosdisponibles();
                        $new_servicios = (int)$current_servicios + (int) $detalle->getVisitadetalleCantidad();
                        $paciente_membresia->setPacientemembresiaServiciosdisponibles($new_servicios)->setPacientemembresiaEstatus('activa')->save();
                        
                    }elseif($dependencia == 'cupon'){
                        $membresia_detalle = \PacientemembresiadetalleQuery::create()->findOneByIdvisitadetalle($detalle->getIdvisitadetalle());
                        $paciente_membresia = $membresia_detalle->getPacientemembresia();
                        $membresia_detalle->delete();
                        
                        $current_cupones = $paciente_membresia->getPacientemembresiaCuponesdisponibles();
                        $new_cupones = (int)$current_cupones + (int) $detalle->getVisitadetalleCantidad();
                        $paciente_membresia->setPacientemembresiaCuponesdisponibles($new_cupones)->setPacientemembresiaEstatus('activa')->save();
                    }

                    /*
                     * Regresamos los insumos
                     */
                    $servicio = $servicio_clinica->getServicio();
                    $insumos = \ServicioinsumoQuery::create()->filterByIdservicio($servicio->getIdservicio())->find();
                    $insumo = new \Servicioinsumo();

                    foreach ($insumos as $insumo){
                        
                        $insumo_clinica = \InsumoclinicaQuery::create()->filterByIdinsumo($insumo->getIdinsumo())->filterByIdclinica($visita->getIdclinica())->findOne();
                        $current_insumos = (int)$insumo_clinica->getInsumoclinicaExistencia();
                        $new_insumos = $current_insumos + ((int)$insumo->getServicioinsumoCantidad() * $detalle->getVisitadetalleCantidad());
                        $insumo_clinica->setInsumoclinicaExistencia($new_insumos)->save();
                    }
                    
                    /*
                     * COMISIONES
                     */
                    
                    
                    //Primero se valida si el producto/servicio genera comision
                    if($servicio->getServicioGeneracomision()){
                        //Las comisiones del empleados e definen por su perfil?
                        if(!is_null($empleado->getEmpleadoTipocomisionservicio())){
                            
                            $tipoComision = $empleado->getEmpleadoTipocomisionservicio(); 
                            if($tipoComision == 'porcentaje'){

                                $comision = (($servicio_clinica->getServicioclinicaPrecio() * $detalle->getVisitadetalleCantidad()) * $empleado->getEmpleadoCantidadcomisionservicio())/100;

                                //Servicios vendidos
                                $current_vendidos = $empleado_comision->getEmpleadocomisionServiciosvendidos();
                                $new_vendidos = $current_vendidos -  $detalle->getVisitadetalleCantidad();
                                $empleado_comision->setEmpleadocomisionServiciosvendidos($new_vendidos);

                                //Comision servicios
                                $current_servicios = $empleado_comision->getEmpleadocomisionComisionservicios();
                                $new_servicios = $current_servicios - $comision;
                                $empleado_comision->setEmpleadocomisionComisionservicios($new_servicios);


                            }else if($tipoComision == 'cantidad'){

                                $comision = $empleado->getEmpleadoCantidadcomisionservicio() * $detalle->getVisitadetalleCantidad();

                                //Servicios vendidos
                                $current_vendidos = $empleado_comision->getEmpleadocomisionServiciosvendidos();
                                $new_vendidos = $current_vendidos -  $detalle->getVisitadetalleCantidad();
                                $empleado_comision->setEmpleadocomisionServiciosvendidos($new_vendidos);

                                //Comision servicios
                                $current_servicios = $empleado_comision->getEmpleadocomisionComisionservicios();
                                $new_servicios = $current_servicios - $comision;
                                $empleado_comision->setEmpleadocomisionComisionservicios($new_servicios);

                            }
                            
                        }else{ //Las comisiones del empleado las define el servico/producto vendido
                            
                            $tipoComision = $servicio->getServicioTipocomision();
                            if($tipoComision == 'porcentaje'){

                                $comision = (($servicio_clinica->getServicioclinicaPrecio() * $detalle->getVisitadetalleCantidad()) * $servicio->getServicioComision())/100;

                                //Servicios vendidos
                                $current_vendidos = $empleado_comision->getEmpleadocomisionServiciosvendidos();
                                $new_vendidos = $current_vendidos -  $detalle->getVisitadetalleCantidad();
                                $empleado_comision->setEmpleadocomisionServiciosvendidos($new_vendidos);

                                //Comision servicios
                                $current_servicios = $empleado_comision->getEmpleadocomisionComisionservicios();
                                $new_servicios = $current_servicios - $comision;
                                $empleado_comision->setEmpleadocomisionComisionservicios($new_servicios);



                            }else if($tipoComision == 'cantidad'){

                                $comision = $servicio->getServicioComision() * $detalle->getVisitadetalleCantidad();

                                //Servicios vendidos
                                $current_vendidos = $empleado_comision->getEmpleadocomisionServiciosvendidos();
                                $new_vendidos = $current_vendidos  -  $detalle->getVisitadetalleCantidad();
                                $empleado_comision->setEmpleadocomisionServiciosvendidos($new_vendidos);

                                //Comision servicios
                                $current_servicios = $empleado_comision->getEmpleadocomisionComisionservicios();
                                $new_servicios = $current_servicios - $comision;
                                $empleado_comision->setEmpleadocomisionComisionservicios($new_servicios);

                            }
                        }
                    }else{
                        
                        //Servicios vendidos
                        $current_vendidos = $empleado_comision->getEmpleadocomisionServiciosvendidos();
                        $new_vendidos = $current_vendidos -  $detalle->getVisitadetalleCantidad();
                        $empleado_comision->setEmpleadocomisionServiciosvendidos($new_vendidos);

                    }

                }
                elseif(!is_null($detalle->getIdmembresia())){
                    
                    //Eliminamos la membresia del paciente
                    $paciente_membresia = \PacientemembresiaQuery::create()->filterByIdpaciente($visita->getIdpaciente())->filterByPacientemembresiaFechainicio($visita->getVisitaFechainicio())->findOne();
                  
                    
                   /*
                    * COMISIONES
                    */
                    
                    //Servicios vendidos
                    $current_vendidos = $empleado_comision->getEmpleadocomisionServiciosvendidos();
                    $new_vendidos = $current_vendidos -  $detalle->getVisitadetalleCantidad();
                    $empleado_comision->setEmpleadocomisionServiciosvendidos($new_vendidos);
                    
                        
                    
                }
            }
            
            //Acumulado
            $current_acumulado = $empleado_comision->getEmpleadocomisionAcumulado();
            $new_acumulado = $current_acumulado - $visita->getVisitaTotal();
            $empleado_comision->setEmpleadocomisionAcumulado($new_acumulado);
            $empleado_comision->save();
            
            
            $this->flashMessenger()->addSuccessMessage('La venta ha sido cancelada satisfactoriamente!');
            return $this->getResponse()->setContent(json_encode(array('response' => true)));
            
        }
        
        
        if($this->params()->fromQuery('idvisita')){
            
            
            $session = new \Shared\Session\AouthSession();
            
            $idvisita = $this->params()->fromQuery('idvisita');
            $visita = \VisitaQuery::create()->findPk($idvisita);
            
            
            //Si no es administrador
            if($session->getIdrol() != 1){
                
                //Cargamos la configuracion
                $configuracion = \ConfiguracionQuery::create()->findOneByIdclinica($session->getIdClinica());
                $error = false;
                
                //Validamos que todavia se pueda cancelar de acuerdo a la fecha
                $now = new \DateTime();
                $visita_fecha = new \DateTime($visita->getVisitaCreadaen());
                $interval = $visita_fecha->diff($now);
                $interval_days = (int)$interval->format('%d');
                
                if($interval_days <= (int)$configuracion->getConfiguracionHastacuantosdias()){
                    
                    //Validmoas que aun tenga cancelaciones disponibles
                    $from = new \DateTime($now->format('Y').'-'.$now->format('m').'-1');
                    $to   = new \DateTime($now->format('Y').'-'.$now->format('m').'-'.$now->format('t').' 23:59:59');
                    
                    $cancelaciones = \VisitaQuery::create()->filterByIdclinica($session->getIdClinica())->filterByVisitaCanceladaen(NULL,\Criteria::NOT_EQUAL)->filterByVisitaCreadaen(array('min' => $from->format('Y-m-d'), 'max' => $to->format('Y-m-d')))->count();
                    
                    if($cancelaciones < (int)$configuracion->getConfiguracionNumerocancelaciones()){                
                       
                        if((float)$visita->getVisitaTotal() <= (float)$configuracion->getConfiguracionValormaximocancelacion()){
                            $viewModel = new ViewModel();
                            $viewModel->setTerminal(true);
                            return $viewModel;
                        }else{
                            return $this->getResponse()->setContent('Lo sentimos, no es posible cancelar esta venta debido a que el monto total es mayor al permitido para realizar un cancelación');
                        }
                    }else{
                        $msj = 'Lo sentimos, no es posible cancelar esta venta debido a que ya se alcanzo el limite de cancelaciones del mes en curso';
                        return $this->getResponse()->setContent($msj);
                    }

                }else{
                    $msj = 'Lo sentimos, no es posible cancelar esta venta debido a que ya ha trasncurrido el tiempo limite para su cancielacón';
                    return $this->getResponse()->setContent($msj);
                }
                
            }else{
                $viewModel = new ViewModel();
                $viewModel->setTerminal(true);
                return $viewModel;
            }
                       
        }else{
            return $this->getResponse()->setContent(false);
        }
    }
    
    public function detallesAction(){
        
        if($this->params()->fromQuery('idvisita')){
            
            $idvisita = $this->params()->fromQuery('idvisita');
            
            $visita = \VisitaQuery::create()->findPk($idvisita);
            
            $viewModel = new ViewModel();
            $viewModel->setTerminal(true);
            $viewModel->setVariable('visita', $visita);
            
            return $viewModel;  
            
            
        }else{
            return $this->getResponse()->setContent(false);
        }
        
    }


    public function filterAction(){
        
        $request = $this->getRequest();
        
        if($request->isPost()){
            
            $post_data = $request->getPost();
            
            $visitas = \VisitaQuery::create()->orderByVisitaCreadaen('desc')->joinEmpleadoRelatedByIdempleado()->withColumn('empleado_nombre')->joinPaciente()->withColumn('paciente_nombre')->joinClinica()->withColumn('clinica_nombre')->filterByIdclinica($post_data['clinicas'])->filterByVisitaEstatuspago($post_data['status'])->find()->toArray(null,false,  \BasePeer::TYPE_FIELDNAME);
            
            return $this->getResponse()->setContent(json_encode($visitas));

        }
        
    }
    
    public function indexAction()
    {
        $session = new \Shared\Session\AouthSession();
         
        //Las clinicas
        $clinicas = \ClinicaQuery::create()->find();
        
        if($session->getIdrol()!= 1){
            $clinicas = \ClinicaQuery::create()->filterByIdclinica($session->getIdClinica())->find();
        }
        
        return new ViewModel(array(
            'successMessages' => $this->flashMessenger()->getSuccessMessages(),
            'clinicas' => $clinicas,
            'session' => $session->getData(),
        ));
    }
}
