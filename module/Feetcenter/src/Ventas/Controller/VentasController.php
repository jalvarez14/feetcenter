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
    
    public $friendlyMonth = array(
        '01' => 'Enero',
        '02' => 'Febrero',
        '03' => 'Marzo',
        '04' => 'Abril',
        '05' => 'Mayo',
        '06' => 'Junio',
        '07' => 'Julio',
        '08' => 'Agosto',
        '09' => 'Septiembre',
        '10' => 'Octubre',
        '11' => 'Noviembre',
        '12' => 'Diciembre',
    );
    
    public function serversideAction(){
        
        $request = $this->getRequest();
        
        if($request->isPost()){
            
            $post_data = $request->getPost();
            
            //Comenzamos hacer la query
            $query = new \VisitaQuery();
            
            //JOIN
            $query->joinClinica()->withColumn('clinica_nombre','visita_clinica');
            $query->joinPaciente()->withColumn('paciente_nombre','visita_cliente');
            $query->joinEmpleadoRelatedByIdempleado()->withColumn('empleado_nombre','visita_pedicurista');
            
            //WHERE
            $query->filterByIdempleado($post_data['empleados']);
            $query->filterByIdclinica($post_data['clinicas']);
            $query->filterByVisitaEstatuspago($post_data['estatus']);
            $query->filterByVisitaFechainicio(array('min' => $post_data['from'].' 00:00:00', 'max' => $post_data['to'].' 23:59:59'));
            $recordsFiltered = $query->count();
            
            $totales = array();
            $totales['visita_efectivo']  = 0;
            $totales['visita_tarjeta'] = 0;
            foreach ($query->find() as $visita){                
                //Efectivo
                foreach ($visita->getVisitapagos() as $pago){
                    if($pago->getVisitapagoTipo() == 'efectivo'){
                        $totales['visita_efectivo']+=(float)$pago->getVisitapagoCantidad();
                    }else{
                        $totales['visita_tarjeta']+=(float)$pago->getVisitapagoCantidad();
                    }
                }
   
            }
            
            //LIMIT
            $query->setOffset((int)$post_data['start']);
            $query->setLimit((int)$post_data['length']);
            
            //ORDER 
            $query->orderByVisitaFechainicio('desc');
            
            //SEARCH
            if(!empty($post_data['search']['value'])){
                
                $search_value = $post_data['search']['value'];
                $c = new \Criteria();
                
                $c1= $c->getNewCriterion('clinica_nombre', '%'.$search_value.'%', \Criteria::LIKE);
                $c2= $c->getNewCriterion('paciente_nombre', '%'.$search_value.'%', \Criteria::LIKE);
                $c3= $c->getNewCriterion('empleado_nombre', '%'.$search_value.'%', \Criteria::LIKE);
                $c4= $c->getNewCriterion('visita_estatuspago', '%'.$search_value.'%', \Criteria::LIKE);
                
                $c1->addOr($c2)->addOr($c3)->addOr($c4);

                $query->addAnd($c1);

            }
            
            
            //RESULT
            $data = array();
            $visita = new \Visita();
            foreach ($query->find() as $visita){
                
                
                $tmp = $visita->toArray(\BasePeer::TYPE_FIELDNAME);
                $tmp['DT_RowId'] = $visita->getIdvisita();
                $tmp['visita_fecha'] = $visita->getVisitaFechainicio('d-m-Y - H:i');
                $tmp['visita_efectivo']  = 0;
                $tmp['visita_tarjeta'] = 0;
                $tmp['visita_iva'] = $tmp['visita_total'] * 0.16;
                $tmp['visita_subtotal'] = $tmp['visita_total'] - $tmp['visita_iva'];
                
                //Efectivo
                foreach ($visita->getVisitapagos() as $pago){
                    if($pago->getVisitapagoTipo() == 'efectivo'){
                        $tmp['visita_efectivo']+=(float)$pago->getVisitapagoCantidad();
                    }else{
                        $tmp['visita_tarjeta']+=(float)$pago->getVisitapagoCantidad();
                    }
                }
                
                $tmp['opciones'] = '<a href="javascript:void(0)" modal="detalles">Ver detalles</a><a class="nota_remision" href="javascript:void(0)">Nota de remision</a><a href="javascript:void(0)" modal="cancelar">Cancelar</a>';
                
                $data[]=$tmp;
            }
            
            //El arreglo que regresamos
            $json_data = array(
                "draw"            => (int)$post_data['draw'],
                //"recordsTotal"    => 100,
                "recordsFiltered" => $recordsFiltered,
                "data"            => $data,
                "totales"         => $totales,
            );
            
            return $this->getResponse()->setContent(json_encode($json_data));
             

            
            
        }
    }
    public function generarnotaAction(){
        
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);
        
        if($this->params()->fromQuery('idvisita')){
            
            $idvisita =  $this->params()->fromQuery('idvisita');
            $visita = \VisitaQuery::create()->findPk($idvisita);
            
            $target = "nota_de_remision.pdf";
            
            $pdf = new \Shared\PdfCreator\NotaRemision('P', 'mm', 'A4');
            $pdf->AddPage();
            $pdf->addSociete( "FeetCenter",
                  "MARIA GUADALUPE MANGATO MIRANDA\n" .
                  "R.F.C. MAMG820213913\n" .
                  "REGIMEN DE INCORPORACION FISCAL\n".
                  strtoupper($visita->getClinica()->getClinicaDireccion())."\n".
                  "TEL: ".$visita->getClinica()->getClinicaTelefono());
            $pdf->fact_dev( "", $visita->getIdvisita());
            $pdf->addPageNumber($visita->getVisitaCreadaen('d'));
            $pdf->addDate(strtoupper($this->friendlyMonth[$visita->getVisitaCreadaen('m')]));
            $pdf->addClient($visita->getVisitaCreadaen('Y'));
            $pdf->addReglement(strtoupper($visita->getPaciente()->getPacienteNombre()));
            $direccion = '';
            if(!is_null($visita->getPaciente()->getPacienteCalle())){
                $direccion.=strtoupper($visita->getPaciente()->getPacienteCalle());
            }
            if(!is_null($visita->getPaciente()->getPacienteNumero())){
                $direccion.=' '.strtoupper($visita->getPaciente()->getPacienteNumero());
            }
            if(!is_null($visita->getPaciente()->getPacienteColonia())){
                $direccion.=' COLONIA ' .strtoupper($visita->getPaciente()->getPacienteColonia());
            }
            if(!is_null($visita->getPaciente()->getPacienteCodigopostal())){
                $direccion.=' CP ' .strtoupper($visita->getPaciente()->getPacienteCodigopostal());
            }
            $pdf->addEcheance($direccion);
            
            $ciudad = '';
            if(!is_null($visita->getPaciente()->getPacienteCiudad())){
                $ciudad.=strtoupper($visita->getPaciente()->getPacienteCiudad());
            }
            if(!is_null($visita->getPaciente()->getPacienteEstado())){
                $ciudad.=', '.strtoupper($visita->getPaciente()->getPacienteEstado());
            }
            
            $pdf->addNumTVA($ciudad);
            
            $cols=array( "CANT"    => 23,
             "DESCRIPCION"  => 119,
             "P. UNIT"     => 22,
             "TOTAL"      => 26);
            
            $pdf->addCols( $cols);
            
            $y    = 99;
            $detalle = new \Visitadetalle();
            foreach ($visita->getVisitadetalles() as $detalle){
                
                if(!is_null($detalle->getIdproductoclinica())){
                    $descripcion = strtoupper($detalle->getProductoclinica()->getProducto()->getProductoNombre());
                }elseif(!is_null($detalle->getIdservicioclinica())){
                    $descripcion = strtoupper($detalle->getServicioclinica()->getServicio()->getServicioNombre());
                }else{
                    $descripcion = strtoupper($detalle->getMembresia()->getMembresiaNombre());
                }
                
                $line = array(
                    "CANT" => (int)$detalle->getVisitadetalleCantidad(),
                    "DESCRIPCION" => utf8_decode($descripcion),
                    "P. UNIT" => $detalle->getVisitadetallePreciounitario(),
                    "TOTAL" => $detalle->getVisitadetalleSubtotal(),
                );
                $size = $pdf->addLine( $y, $line );
                $y   += $size + 2;
            }
            $pdf->addCadreTVAs($visita->getVisitaTotal());  
            $pdf->Output($_SERVER['DOCUMENT_ROOT'].'/img/ventas/'.$target,'F');
            $base64 = base64_encode(file_get_contents($_SERVER['DOCUMENT_ROOT'].'/'.'img/ventas/'.$target));
            return $this->getResponse()->setContent(json_encode($base64));
        }
        
    }
    
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
                        if(\PacientemembresiaQuery::create()->filterByIdpaciente($visita->getIdpaciente())->exists()){
                            $membresia_detalle = \PacientemembresiadetalleQuery::create()->findOneByIdvisitadetalle($detalle->getIdvisitadetalle());
                            $paciente_membresia = $membresia_detalle->getPacientemembresia();
                            $current_servicios = $paciente_membresia->getPacientemembresiaServiciosdisponibles();
                            $new_servicios = (int)$current_servicios + (int) $detalle->getVisitadetalleCantidad();
                            $paciente_membresia->setPacientemembresiaServiciosdisponibles($new_servicios)->setPacientemembresiaEstatus('activa')->save();
                            $membresia_detalle->delete();
                            //$visita->setVisitaFoliomembresia(NULL)->save();
                        }

                       
                        
                        
                    }elseif($dependencia == 'cupon'){
                        
                        if(\PacientemembresiaQuery::create()->filterByIdpaciente($visita->getIdpaciente())->filterByPacientemembresiaFechainicio($visita->getVisitaFechainicio())->exists()){
                            $membresia_detalle = \PacientemembresiadetalleQuery::create()->findOneByIdvisitadetalle($detalle->getIdvisitadetalle());
                            $paciente_membresia = $membresia_detalle->getPacientemembresia();
                            $current_cupones = $paciente_membresia->getPacientemembresiaCuponesdisponibles();
                            $new_cupones = (int)$current_cupones + (int) $detalle->getVisitadetalleCantidad();
                            $paciente_membresia->setPacientemembresiaCuponesdisponibles($new_cupones)->setPacientemembresiaEstatus('activa')->save();
                            $membresia_detalle->delete();
                            //$visita->setVisitaCuponmembresia(NULL)->save();
                        }

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
                    if(\PacientemembresiaQuery::create()->filterByIdpaciente($visita->getIdpaciente())->filterByPacientemembresiaEstatus('activa')->exists()){
                        $paciente_membresia = \PacientemembresiaQuery::create()->filterByIdpaciente($visita->getIdpaciente())->filterByPacientemembresiaEstatus('activa')->findOne();
                        $paciente_membresia->setPacientemembresiaEstatus('cancelada');
                        $paciente_membresia->save();
                    }
                    
                    
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
            if($session->getIdrol() != 1 && $session->getIdrol() != 6){
                
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
                
                if($session->getIdrol() == 1){
                    $viewModel = new ViewModel();
                    $viewModel->setTerminal(true);
                    return $viewModel;
                }elseif($session->getIdrol() == 6){
                    $this->getResponse()->setStatusCode(404);
                    return; 
                }
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
            
            $visitas_array = array();
            $visitas = \VisitaQuery::create()->orderByVisitaCreadaen('ASC')->joinEmpleadoRelatedByIdempleado()->withColumn('empleado_nombre')->joinPaciente()->withColumn('paciente_nombre')->joinClinica()->withColumn('clinica_nombre')->filterByIdclinica($post_data['clinicas'])->filterByVisitaEstatuspago($post_data['status'])->find();
            $visita = new \Visita();    
            foreach ($visitas as $visita){
                
                $tmp = $visita->toArray(\BasePeer::TYPE_FIELDNAME);
                $tmp['pagos'] = $visita->getVisitapagos()->toArray(null,false,\BasePeer::TYPE_FIELDNAME);
                $tmp['visita_efectivo']  = 0;
                $tmp['visita_tarjeta'] = 0;
                
                //Efectivo
                foreach ($visita->getVisitapagos() as $pago){
                    echo '<pre>';var_dump($pago->toArray());echo '</pre>';exit();
                }
                
                $visitas_array[] = $tmp;
            }
            return $this->getResponse()->setContent(json_encode($visitas_array));

        }
        
    }
    
    public function indexAction()
    {
        $session = new \Shared\Session\AouthSession();
         
        //Las clinicas
        $clinicas = \ClinicaQuery::create()->find();
        $empleados = \ClinicaempleadoQuery::create()->useEmpleadoQuery()->useEmpleadoaccesoQuery()->filterByIdrol(3)->endUse()->endUse()->groupBy('idempleado')->find();

        if(in_array($session->getIdrol(), array(2,3,4,5))){
            $empleados = \ClinicaempleadoQuery::create()->filterByIdclinica($session->getIdClinica())->useEmpleadoQuery()->useEmpleadoaccesoQuery()->filterByIdrol(3)->endUse()->endUse()->groupBy('idempleado')->find();
            $clinicas = \ClinicaQuery::create()->filterByIdclinica($session->getIdClinica())->find();
        }
        
        return new ViewModel(array(
            'empleados' => $empleados,
            'successMessages' => $this->flashMessenger()->getSuccessMessages(),
            'clinicas' => $clinicas,
            'session' => $session->getData(),
        ));
    }
}
