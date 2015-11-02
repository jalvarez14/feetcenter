<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Agenda\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class AgendaController extends AbstractActionController
{
    
    public function validarnuevofolioAction(){
        
        
        if($this->params()->fromQuery('folio')){
            $folio = $this->params()->fromQuery('folio');
           
            if(\PacientemembresiaQuery::create()->filterByPacientemembresiaFolio($folio)->exists()){
                return $this->getResponse()->setContent(json_encode(array('response' => false, 'msg' => 'Folio en uso')));
            }
            
             return $this->getResponse()->setContent(json_encode(array('response' => true)));
            
        }
    }
    
    public function validarmembresiaAction(){
        
        if ($this->params()->fromQuery('folio')){
            
            $folio = $this->params()->fromQuery('folio');
            
            if(\PacientemembresiaQuery::create()->filterByPacientemembresiaFolio($folio)->filterByPacientemembresiaEstatus('activa')->exists()){
                $paciente_membresia = \PacientemembresiaQuery::create()->filterByPacientemembresiaFolio($folio)->findOne();
                //Verificamos si existen cupones disponibles
                $cantidad = $this->params()->fromQuery('cantidad');
                if($paciente_membresia->getPacientemembresiaCuponesdisponibles()>=$cantidad){
                    return $this->getResponse()->setContent(json_encode(array('response' => true, 'idpacientemembresia' => $paciente_membresia->getIdpacientemembresia())));
                }else{
                     return $this->getResponse()->setContent(json_encode(array('response' => false, 'msg' => 'Sin cupones disponibles en la membresia')));
                }
            }else{
                return $this->getResponse()->setContent(json_encode(array('response' => false, 'msg' => 'Folio invalido')));
            }
            
            
           
        }
    }
    
    public function dayOfWeek($day){
        $days = array(
            1 => 'lunes',
            2 => 'martes',
            3 => 'miercoles',
            4 => 'jueves',
            5 => 'viernes',
            6=> 'sabado',
            7 => 'domingo'
        );
        
        return $days[$day];
    }
    
    public function indexAction()
    {

        $sesion = new \Shared\Session\AouthSession();
        $idrol = $sesion->getIdrol();
        
        //Administrador
        if($idrol == 1){
            $clinicas = \ClinicaQuery::create()->find();
            $idclinica = 1;
        }else{
            $clinicas = \ClinicaQuery::create()->filterByIdclinica($sesion->getIdClinica())->find();
            $idclinica = $sesion->getIdClinica();
        }
        
       
             
        return new ViewModel(array(
            'clinicas' => $clinicas,
            'idclinica' => $idclinica,
        ));
    }
    
    public function getserviciosbymembresiaAction(){
        
        if($this->params()->fromQuery('idclinica')){
            $idclinica = $this->params()->fromQuery('idclinica');
            
            $servicios_array = array();
            $servicios = \ServicioclinicaQuery::create()->filterByIdclinica($idclinica)->useServicioQuery()->filterByServicioDependencia('membresia')->endUse()->withColumn('servicio_nombre')->find();
            //Validamos si se tienen los insumos suficentes para realizar el servicio
            $servicio = new \Servicioclinica();
            $disponible = 1;
            foreach ($servicios as $servicio){
                //Requiere insumos
                if(\ServicioinsumoQuery::create()->filterByIdservicio($servicio->getServicio()->getIdservicio())->exists()){
                    $servicio_insumo = \ServicioinsumoQuery::create()->filterByIdservicio($servicio->getServicio()->getIdservicio())->find();
                    $insumo = new \Servicioinsumo();
                    foreach ($servicio_insumo as $insumo){
                        $insumo_clinica = \InsumoclinicaQuery::create()->filterByIdclinica($idclinica)->filterByIdinsumo($insumo->getInsumo()->getIdinsumo())->findOne();
                        $required = $insumo->getServicioinsumoCantidad();
                        $has = $insumo_clinica->getInsumoclinicaExistencia();
                        if($has<$required){
                            $disponible = 0;
                        }
                    }
                }
                $servicio_array = $servicio->toArray(\BasePeer::TYPE_FIELDNAME);
                $servicio_array['disponible'] = $disponible;
                $servicio_array['servicio_dependencia'] = $servicio->getServicio()->getServicioDependencia();
                if(!$servicio->getServicio()->getServicioGeneraingreso()){
                    $servicio_array['servicioclinica_precio'] = 0;
                }
                $servicios_array[] = $servicio_array;
            }
            
            return $this->getResponse()->setContent(json_encode($servicios_array));
            
        }
        
        
    }
    
    public function getPedicuristasbyclinicaAction(){
        
        $idclinica = $this->params()->fromRoute('id');       
        $empleados = \ClinicaempleadoQuery::create()->filterByIdclinica($idclinica)->useEmpleadoQuery()->useEmpleadoaccesoQuery()->filterByIdrol(3)->endUse()->endUse()->groupBy('idempleado')->find();
        
        //Damos formato
        $resources = array();
        $empleado = new \Clinicaempleado();
        foreach ($empleados as $empleado){
            $tmp['id'] = $empleado->getEmpleado()->getIdempleado();
            $tmp['name'] = $empleado->getEmpleado()->getEmpleadoNombre();
            if(is_null($empleado->getEmpleado()->getEmpleadoFoto())){
                $tmp['img'] = '/img/empleados/default.jpg';
            }else{
                $tmp['img'] = $empleado->getEmpleado()->getEmpleadoFoto();
            }
            $resources[] = $tmp;
        }
        return $this->response->setContent(json_encode($resources));


    }
    
    public function gethorariosbyclinicaAction(){
        
        $idclinica = $this->params()->fromRoute('id'); 
        $diadelasemana = $this->params()->fromQuery('dia');
                
        $array = array();
            
        $empleados = \ClinicaempleadoQuery::create()->filterByIdclinica($idclinica)->find();
            $empleado = new \Clinicaempleado();
            foreach ($empleados as $empleado){
                //Obtenemos su horario
                $idempleado = $empleado->getIdempleado();
                
                if(\EmpleadohorarioQuery::create()->filterByIdempleado($empleado->getIdempleado())->filterByEmpleadohorarioDia($this->dayOfWeek($diadelasemana))->exists()){
                    $empleado_horario = \EmpleadohorarioQuery::create()->filterByIdempleado($empleado->getIdempleado())->filterByEmpleadohorarioDia($this->dayOfWeek($diadelasemana))->findOne();
                    $tmp['entrada'] = $empleado_horario->getEmpleadohorarioEntrada('H:i:s');
                    $tmp['salida'] = $empleado_horario->getEmpleadohorarioSalida('H:i:s');
                    $tmp['descanso'] = $empleado_horario->getEmpleadohorarioDescanso();
                    $array[$idempleado] = $tmp;
                }else{
                    $array[$idempleado] = NULL;
                }
 
            }
            return $this->response->setContent(json_encode($array));
            
    }
    
    public function geteventosbyclinicaAction(){
        
        $idclinica = $this->params()->fromRoute('id'); 
        $dia = $this->params()->fromQuery('dia');
        
        $visitas = \VisitaQuery::create()->joinPaciente()->withColumn('paciente_nombre')->filterByIdclinica($idclinica)->filterByVisitaFechainicio(array('min' => $dia.' 00:00:00', 'max' => $dia. ' 23:59:59'))->find();
        
        return $this->response->setContent(json_encode($visitas->toArray(null,false,  \BasePeer::TYPE_FIELDNAME)));
    }
    
    public function getrecesosbyclinicaAction(){
        
        $idclinica = $this->params()->fromRoute('id'); 
        $dia = $this->params()->fromQuery('dia');
        
        $recesos = \EmpleadorecesoQuery::create()->filterByIdclinica($idclinica)->filterByEmpleadorecesoInicio(array('min' => $dia.' 00:00:00', 'max' => $dia. ' 23:59:59'))->find();
        return $this->response->setContent(json_encode($recesos->toArray(null,false,  \BasePeer::TYPE_FIELDNAME)));
    }

    public function nuevorecesoAction(){
        $sesion = new \Shared\Session\AouthSession();
        $request = $this->getRequest();
        if($request->isPost()){
             $post_data = $request->getPost();
             
             $empleado_receso = new \Empleadoreceso();
             $empleado_receso->setIdclinica($post_data['idclinica'])
                             ->setIdempleado($post_data['idempleado'])
                             ->setEmpleadorecesoFecha($post_data['visita_creadaen'])
                             ->setEmpleadorecesoInicio($post_data['visita_fechainicio'])
                             ->setEmpleadorecesoFin($post_data['visita_fechafin'])
                             ->save();
            return $this->getResponse()->setContent(\Zend\Json\Json::encode(array('result' => true,'data' => $empleado_receso->toArray(\BasePeer::TYPE_FIELDNAME))));
        }
    }
    
     public function editareventoAction(){
         
         $sesion = new \Shared\Session\AouthSession();
         $request = $this->getRequest();
         
         if($request->isPost()){
             $post_data = $request->getPost();
            
             $entity = \VisitaQuery::create()->findPk($post_data['idvisita']);
             
             foreach($post_data as $key => $value){
                if(\VisitaPeer::getTableMap()->hasColumn($key)){
                    $entity->setByName($key, $value, \BasePeer::TYPE_FIELDNAME);
                }
            }
            
            $entity->save();
            
            $entity->getVisitadetalles()->delete();
            
            //Ahora los detalles
            if(isset($post_data['vistadetalle'])){
                foreach ($post_data['vistadetalle'] as $detalle){
                    $visitadetalle = new \Visitadetalle();
                    $visitadetalle->setIdvisita($entity->getIdvisita())
                                  ->setVisitadetalleCargo($detalle['type'])
                                  ->setVisitadetallePreciounitario($detalle['price'])
                                  ->setVisitadetalleCantidad($detalle['cantidad'])
                                  ->setVisitadetalleSubtotal($detalle['subtotal']);
                    
                    if($detalle['type'] == 'producto'){
                        $visitadetalle->setIdproductoclinica($detalle['id']);
                        $visitadetalle->save();
                    }else if($detalle['type'] == 'servicio'){
                        $visitadetalle->setIdservicioclinica($detalle['id']);
                        $visitadetalle->save();
                        if($visitadetalle->getServicioclinica()->getServicio()->getServicioDependencia() == 'cupon'){
                            $paciente_membresia_detalle = new \Pacientemembresiadetalle();
                            $paciente_membresia_detalle->setIdpacientemembresia($detalle['idpacientemembresia'])
                                                       ->setIdvisitadetalle($visitadetalle->getIdvisitadetalle())
                                                       ->setPacientemembresiadetalleFecha(new \DateTime())
                                                       ->save();
                        }
                    }else{
                        $visitadetalle->setIdmembresia($detalle['id']);
                        $visitadetalle->save();
                    }
                    
                    

                }
            }
            
            $data = \VisitaQuery::create()->filterByIdvisita($entity->getIdvisita())->joinPaciente()->withColumn('paciente_nombre')->findOne()->toArray(\BasePeer::TYPE_FIELDNAME);      
            return $this->getResponse()->setContent(\Zend\Json\Json::encode(array('result' => true,'data' => $data)));
                     
             
         }
         if($this->params()->fromQuery('html')){
             
             $idvisita = $this->params()->fromQuery('idvisita');
             $entity = \VisitaQuery::create()->findPk($idvisita);
           
             //Instanciamos nuestro formulario
             $form = new \Agenda\Form\EventoForm($entity->getIdempleadocreador(), $entity->getIdclinica(), $entity->getIdempleado(), $entity->getVisitaCreadaen(), $entity->getVisitaFechainicio(), $entity->getVisitaFechafin());
             $form->get('idvisita')->setValue($entity->getIdvisita());
             $form->setAttribute('action', '/agenda/editareventovento/'.$entity->getIdvisita());
             $form->setAttribute('novalidate', true);
             $form->setAttribute('class', 'forms');
             $form->get('visita_estatuspago')->setValue($entity->getVisitaEstatuspago());
             
             $status = $entity->getVisitaStatus();
            
            if($status == 'confimada'){ 
                //Modificamos nuestro select del estatus
                $form->add(array(
                    'type' => 'Select',
                    'name' => 'visita_status',
                    'options' => array(
                       'value_options' => array(
                            'por confirmar' => 'Por confirmar',
                            'confimada' => 'Confimada',
                            'en servicio' => 'En servicio',
                            'cancelo' => 'Cancelo',
                            'no se presento' => 'No se presento',
                            'reprogramda' => 'Reprogramda',
                       ),
                    ),
                   'attributes' => array(
                       'class' => 'width-100',
                   ),
                ));
            }elseif($status == 'terminado'){
                $form->add(array(
                    'type' => 'Select',
                    'name' => 'visita_status',
                    'options' => array(
                       'value_options' => array(
                               'en servicio' => 'En servicio',
                                'terminado' => 'Terminado',
                       ),
                    ),
                   'attributes' => array(
                       'class' => 'width-100',
                   ),
                ));
            }elseif($status == 'en servicio'){
                $form->add(array(
                    'type' => 'Select',
                    'name' => 'visita_status',
                    'options' => array(
                       'value_options' => array(
                               'en servicio' => 'En servicio',
                                'terminado' => 'Terminado',
                       ),
                    ),
                   'attributes' => array(
                       'class' => 'width-100',
                   ),
                ));
            }else{
                $form->add(array(
                    'type' => 'Select',
                    'name' => 'visita_status',
                    'options' => array(
                       'value_options' => array(
                               'por confirmar' => 'Por confirmar',
                               'confimada' => 'Confimada',
                               'en servicio' => 'En servicio',
                       ),
                    ),
                   'attributes' => array(
                       'class' => 'width-100',
                   ),
                ));
            }
            
            //Le damos valor
            $form->get('visita_status')->setValue($entity->getVisitaStatus());
                        
            //Catalogo de productos
            $productos = \ProductoclinicaQuery::create()->joinProducto()->withColumn('producto_nombre')->withColumn('producto_precio')->filterByIdclinica($entity->getIdclinica())->find()->toArray(null,false,  \BasePeer::TYPE_FIELDNAME);

            //Catalogo de servicio
            $servicios_array = array();
            $servicios = \ServicioclinicaQuery::create()->filterByIdclinica($entity->getIdclinica())->useServicioQuery()->filterByServicioDependencia('membresia',  \Criteria::NOT_EQUAL)->endUse()->withColumn('servicio_nombre')->find();
            if(\VisitadetalleQuery::create()->filterByIdvisita($entity->getIdvisita())->filterByIdmembresia(NULL,\Criteria::NOT_EQUAL)->exists()){
                $servicios = \ServicioclinicaQuery::create()->filterByIdclinica($entity->getIdclinica())->useServicioQuery()->endUse()->withColumn('servicio_nombre')->find();
            }
            //Validamos si se tienen los insumos suficentes para realizar el servicio
            $servicio = new \Servicioclinica();

            foreach ($servicios as $servicio){
                $disponible = 1;
                //Requiere insumos
                if(\ServicioinsumoQuery::create()->filterByIdservicio($servicio->getServicio()->getIdservicio())->exists()){
                    $servicio_insumo = \ServicioinsumoQuery::create()->filterByIdservicio($servicio->getServicio()->getIdservicio())->find();
                    $insumo = new \Servicioinsumo();
                    foreach ($servicio_insumo as $insumo){
                        $insumo_clinica = \InsumoclinicaQuery::create()->filterByIdclinica($entity->getIdclinica())->filterByIdinsumo($insumo->getInsumo()->getIdinsumo())->findOne();
                        $required = $insumo->getServicioinsumoCantidad();
                        $has = $insumo_clinica->getInsumoclinicaExistencia();
                        if($has<$required){
                            $disponible = 0;
                        }
                    }
                }
                $servicio_array = $servicio->toArray(\BasePeer::TYPE_FIELDNAME);
                $servicio_array['disponible'] = $disponible;
                $servicio_array['servicio_dependencia'] = $servicio->getServicio()->getServicioDependencia();
                if(!$servicio->getServicio()->getServicioGeneraingreso()){
                    $servicio_array['servicioclinica_precio'] = 0;
                }
                $servicios_array[] = $servicio_array;
            }
            

             //Catalogo de membresias
            $membresias = \MembresiaQuery::create()->find()->toArray(null,false,  \BasePeer::TYPE_FIELDNAME);
            
            $empleados = \ClinicaempleadoQuery::create()->filterByIdclinica($entity->getIdclinica())->useEmpleadoQuery()->useEmpleadoaccesoQuery()->filterByIdrol(3)->endUse()->endUse()->groupBy('idempleado')->find();
            
            //El paciente
            $paciente = $entity->getPaciente();
            $paciente_array = $paciente->toArray(\BasePeer::TYPE_FIELDNAME);
            $paciente_array['visita_total'] = \VisitaQuery::create()->filterByIdpaciente($paciente->getIdpaciente())->filterByVisitaStatus('terminado')->count();
            $paciente_array['visita_ultima'] = '';
            if(\VisitaQuery::create()->filterByIdpaciente($paciente->getIdpaciente())->filterByVisitaStatus('terminado')->orderByVisitaFechainicio('desc')->exists()){
                 $visitas = \VisitaQuery::create()->filterByIdpaciente($paciente->getIdpaciente())->filterByVisitaStatus('terminado')->orderByVisitaFechainicio(\Criteria::DESC)->findOne();
                 $paciente_array['visita_ultima'] = $visitas->getVisitaFechainicio('d/m/Y - H:i:s');
            }
            $paciente_array['relacionados'] = \GrupopersonalQuery::create()->joinPacienteRelatedByIdpacienteagregado()->filterByIdpaciente($paciente->getIdpaciente())->withColumn('paciente_nombre')->withColumn('paciente_celular')->withColumn('paciente_telefono')->withColumn('idclinica')->find()->toArray(null,false,\BasePeer::TYPE_FIELDNAME);
            foreach ($paciente_array['relacionados'] as $key => $value){
                $cliniva = \ClinicaQuery::create()->findPk($value['idclinica']);
                $clinica_nombre = $cliniva->getClinicaNombre();
                $paciente_array['relacionados'][$key]['clinica_nombre'] = $clinica_nombre;
            }
            //Mmebresia
            $paciente_array['membresia'] = NULL;
            if(\PacientemembresiaQuery::create()->filterByIdpaciente($paciente->getIdpaciente())->filterByPacientemembresiaEstatus('activa')->exists()){
                $paciente_membresia = \PacientemembresiaQuery::create()->joinMembresia()->withColumn('membresia_nombre')->withColumn('membresia_servicios')->withColumn('membresia_cupones')->filterByIdpaciente($paciente->getIdpaciente())->filterByPacientemembresiaEstatus('activa')->findOne();
                $paciente_array['membresia'] = $paciente_membresia->toArray(\BasePeer::TYPE_FIELDNAME);
            }  
           
            $viewModel = new ViewModel();
            $viewModel->setVariables(array(
                'form' => $form,
                'visita' => $entity,
                'productos' => $productos,
                'servicios' => $servicios_array,
                'paciente' => json_encode($paciente_array),
                'empleados' => $empleados,
                'membresias' => $membresias,
            ));
            $viewModel->setTerminal(true);
            return $viewModel;
             
         }
     }
     
     public function pagarAction(){
         $sesion = new \Shared\Session\AouthSession();
         $request = $this->getRequest();
         
          if($request->isPost()){
              
              $post_data = $request->getPost();
              
              //Actualizamos la visita
              $visita = \VisitaQuery::create()->findPk($post_data['idvisita']);
              $visita->setVisitaStatus('terminado')
                     ->setVisitaEstatuspago('pagada')
                     ->setVisitaTotal($post_data['visita_total']);
              
              $visita->save();
              
              //Actualizamos lo detalles de la visita
              $visita->getVisitadetalles()->delete();
              
              /*
               * COMISIONES
               */
              
              $now = new \DateTime();
              $empleado = \EmpleadoQuery::create()->findpk($post_data['idempleado']);
              
              //Validamos si existe un registro del dia en curso del empleado
              if(\EmpleadocomisionQuery::create()->filterByIdclinica($post_data['idclinica'])->filterByIdempledo($empleado->getIdempleado())->filterByEmpleadocomisionFecha($now->format('Y-m-d'))->exists()){
                  $empleado_comision = \EmpleadocomisionQuery::create()->filterByIdclinica($post_data['idclinica'])->filterByIdempledo($empleado->getIdempleado())->filterByEmpleadocomisionFecha($now->format('Y-m-d'))->findOne();
              }else{
                  $empleado_comision = new \Empleadocomision();
                  $empleado_comision->setIdempledo($empleado->getIdempleado())
                                    ->setIdclinica($post_data['idclinica'])
                                    ->setEmpleadocomisionFecha($now)
                                    ->setEmpleadocomisionComisionproductos(0)
                                    ->setEmpleadocomisionComisionservicios(0)
                                    ->setEmpleadocomisionProductosvendidos(0)
                                    ->setEmpleadocomisionServiciosvendidos(0)
                                    ->setEmpleadocomisionAcumulado(0)
                                    ->save();
              }
              
              if(isset($post_data['vistadetallepay'])){
                foreach ($post_data['vistadetallepay'] as $detalle){
                    $visitadetalle = new \Visitadetalle();
                    $visitadetalle->setIdvisita($visita->getIdvisita())
                                  ->setVisitadetalleCargo($detalle['type'])
                                  ->setVisitadetallePreciounitario($detalle['price'])
                                  ->setVisitadetalleCantidad($detalle['cantidad'])
                                  ->setVisitadetalleSubtotal($detalle['subtotal']);
                    
                     
                    if($detalle['type'] == 'producto'){
                       
                        $visitadetalle->setIdproductoclinica($detalle['id']);
                        $visitadetalle->save();
                        
                        //Restamos el producto del inventario
                        $producto_clinica = \ProductoclinicaQuery::create()->findPk($detalle['id']);
                        $producto = $producto_clinica->getProducto();
                        $current_stock = $producto_clinica->getProductoclinicaExistencia();
                        $new_stock = $current_stock - $detalle['cantidad'];
                       
                        //Actualizamos inventario
                        $producto_clinica->setProductoclinicaExistencia($new_stock);
                        $producto_clinica->save();
                        
                        /*
                         * COMISIONES
                         */
                         
                         
                        //Primero se valida si el producto/servicio genera comision
                        if($producto->getProductoGeneracomision()){ 
                           
                            //Las comisiones del empleados e definen por su perfil?
                            if(!is_null($empleado->getEmpleadoTipocomisionproducto())){

                                $tipoComision = $empleado->getEmpleadoTipocomisionproducto();
                                if($tipoComision == 'porcentaje'){
                                    
                                    $comision = (($producto->getProductoPrecio() * $visitadetalle->getVisitadetalleCantidad()) * $empleado->getEmpleadoCantidadcomisionproducto())/100;
                                    
                                    //Servicios vendidos
                                    $current_vendidos = $empleado_comision->getEmpleadocomisionProductosvendidos();
                                    $new_vendidos = $current_vendidos +  $visitadetalle->getVisitadetalleCantidad();
                                    $empleado_comision->setEmpleadocomisionProductosvendidos($new_vendidos);
                                    
                                    //Comision servicios
                                    $current_productos = $empleado_comision->getEmpleadocomisionComisionproductos();
                                    $new_productos = $current_productos + $comision;
                                    $empleado_comision->setEmpleadocomisionComisionproductos($new_productos);
                                    
                                    //Acumulado
//                                    $current_acumulado = $empleado_comision->getEmpleadocomisionAcumulado();
//                                    $new_acumulado = $current_acumulado + $visitadetalle->getVisitadetalleSubtotal();
//                                    $empleado_comision->setEmpleadocomisionAcumulado($new_acumulado);
                                
                                    
                                }else if($tipoComision == 'cantidad'){
                                    
                                    $comision = $empleado->getEmpleadoCantidadcomisionproducto() * $visitadetalle->getVisitadetalleCantidad();
                                    
                                    //Productos vendidos
                                    $current_vendidos = $empleado_comision->getEmpleadocomisionProductosvendidos();
                                    $new_vendidos = $current_vendidos +  $visitadetalle->getVisitadetalleCantidad();
                                    $empleado_comision->setEmpleadocomisionProductosvendidos($new_vendidos);
                                    
                                    //Comision Productos
                                    $current_productos = $empleado_comision->getEmpleadocomisionComisionproductos();
                                    $new_productos = $current_productos + $comision;
                                    $empleado_comision->setEmpleadocomisionComisionproductos($new_productos);
                                    
                                    //Acumulado
//                                    $current_acumulado = $empleado_comision->getEmpleadocomisionAcumulado();
//                                    $new_acumulado = $current_acumulado + $visitadetalle->getVisitadetalleSubtotal();
//                                    $empleado_comision->setEmpleadocomisionAcumulado($new_acumulado);
                                    
                                }

                            }else{ //Las comisiones del empleado las define el servico/producto vendido
                                
                                $tipoComision = $producto->getProductoTipocomision();
                                if($tipoComision == 'porcentaje'){
                                    
                                    $comision = (($producto->getProductoPrecio() * $visitadetalle->getVisitadetalleCantidad()) * $producto->getProductoComision())/100;
                                    
                                    //productos vendidos
                                    $current_vendidos = $empleado_comision->getEmpleadocomisionProductosvendidos();
                                    $new_vendidos = $current_vendidos +  $visitadetalle->getVisitadetalleCantidad();
                                    $empleado_comision->setEmpleadocomisionProductosvendidos($new_vendidos);
                                    
                                    //Comision productos
                                    $current_productos = $empleado_comision->getEmpleadocomisionComisionproductos();
                                    $new_productos = $current_productos + $comision;
                                    $empleado_comision->setEmpleadocomisionComisionproductos($new_productos);
                                    
                                    //Acumulado
//                                    $current_acumulado = $empleado_comision->getEmpleadocomisionAcumulado();
//                                    $new_acumulado = $current_acumulado + $visitadetalle->getVisitadetalleSubtotal();
//                                    $empleado_comision->setEmpleadocomisionAcumulado($new_acumulado);
                                    
                                    
                                }else if($tipoComision == 'cantidad'){
                                    
                                    $comision = $producto->getProductoComision() * $visitadetalle->getVisitadetalleCantidad();
                                    
                                    //productos vendidos
                                    $current_vendidos = $empleado_comision->getEmpleadocomisionProductosvendidos();
                                    $new_vendidos = $current_vendidos +  $visitadetalle->getVisitadetalleCantidad();
                                    $empleado_comision->setEmpleadocomisionProductosvendidos($new_vendidos);
                                    
                                    //Comision productos
                                    $current_productos = $empleado_comision->getEmpleadocomisionComisionproductos();
                                    $new_productos = $current_productos + $comision;
                                    $empleado_comision->setEmpleadocomisionComisionproductos($new_productos);
                                    
                                    //Acumulado
//                                    $current_acumulado = $empleado_comision->getEmpleadocomisionAcumulado();
//                                    $new_acumulado = $current_acumulado + $visitadetalle->getVisitadetalleSubtotal();
//                                    $empleado_comision->setEmpleadocomisionAcumulado($new_acumulado);
                                    
                                }
                            }
                        }else{
                            //Solo cargamos, productos, servicios, membresias vendidas y acumulado
                            $current_vendidos = $empleado_comision->getEmpleadocomisionProductosvendidos();
                            $new_vendidos = $current_vendidos +  $visitadetalle->getVisitadetalleCantidad();
                            $empleado_comision->setEmpleadocomisionProductosvendidos($new_vendidos);
                            
                            //Acumulado
//                            $current_acumulado = $empleado_comision->getEmpleadocomisionAcumulado();
//                            $new_acumulado = $current_acumulado + $visitadetalle->getVisitadetalleSubtotal();
//                            $empleado_comision->setEmpleadocomisionAcumulado($new_acumulado);
                        }

                    }else if($detalle['type'] == 'servicio'){
                        
                        $visitadetalle->setIdservicioclinica($detalle['id']);
                        $visitadetalle->save();
                        
                        if($visitadetalle->getServicioclinica()->getServicio()->getServicioDependencia() == 'cupon'){
                            $paciente_membresia_detalle = new \Pacientemembresiadetalle();
                            $paciente_membresia_detalle->setIdpacientemembresia($detalle['idpacientemembresia'])
                                                       ->setIdvisitadetalle($visitadetalle->getIdvisitadetalle())
                                                       ->setPacientemembresiadetalleFecha(new \DateTime())
                                                       ->save();
                        }
                        
                        /*
                         * Descontamos los insumos del inventario
                         */
                         $servicio_clinica = $visitadetalle->getServicioclinica();
                         $serivicio = $servicio_clinica->getServicio();
                         $sevicio_insumos = $serivicio->getServicioinsumos();
                         
                         foreach ($sevicio_insumos as $sevicio_insumo){
                            
                             $insumo_clinica = \InsumoclinicaQuery::create()->filterByIdclinica($visita->getIdclinica())->filterByIdinsumo($sevicio_insumo->getIdinsumo())->findOne();
                             
                             $rest = ($sevicio_insumo->getServicioinsumoCantidad() * $visitadetalle->getVisitadetalleCantidad());
                             $current_stock = $insumo_clinica->getInsumoclinicaExistencia();
                             $new_stock = $current_stock - $rest;
                             
                             $insumo_clinica->setInsumoclinicaExistencia($new_stock)
                                            ->save();

                         }
                         
                         /*
                          * Si el servicio tiene dependencia con cupon
                          */
                         
                         if($serivicio->getServicioDependencia() == 'cupon'){
                             $paciente_membresia = \PacientemembresiaQuery::create()->findPk($detalle['idpacientemembresia']);
                             
                             
                             $current_cupones = $paciente_membresia->getPacientemembresiaCuponesdisponibles();
                             $new_cupones = $current_cupones - $detalle['cantidad'];
                             
                             $paciente_membresia->setPacientemembresiaCuponesdisponibles($new_cupones)->save();
                             
                             if($paciente_membresia->getPacientemembresiaCuponesdisponibles() == 0 && $paciente_membresia->getPacientemembresiaServiciosdisponibles() == 0){
                                 $paciente_membresia->setPacientemembresiaEstatus('terminada')->save();
                             }
                             
                         }
                         
                         /*
                         * COMISIONES
                         */
                         
                         
                        //Primero se valida si el producto/servicio genera comision
                        if($serivicio->getServicioGeneracomision()){ 
                           
                            //Las comisiones del empleados e definen por su perfil?
                            if(!is_null($empleado->getEmpleadoTipocomisionservicio())){

                                $tipoComision = $empleado->getEmpleadoTipocomisionservicio(); 
                                if($tipoComision == 'porcentaje'){
                                    
                                    $comision = (($servicio_clinica->getServicioclinicaPrecio() * $visitadetalle->getVisitadetalleCantidad()) * $empleado->getEmpleadoCantidadcomisionservicio())/100;
                                    
                                    //Servicios vendidos
                                    $current_vendidos = $empleado_comision->getEmpleadocomisionServiciosvendidos();
                                    $new_vendidos = $current_vendidos +  $visitadetalle->getVisitadetalleCantidad();
                                    $empleado_comision->setEmpleadocomisionServiciosvendidos($new_vendidos);
                                    
                                    //Comision servicios
                                    $current_servicios = $empleado_comision->getEmpleadocomisionComisionservicios();
                                    $new_servicios = $current_servicios + $comision;
                                    $empleado_comision->setEmpleadocomisionComisionservicios($new_servicios);
                                    
                                    //Acumulado
//                                    $current_acumulado = $empleado_comision->getEmpleadocomisionAcumulado();
//                                    $new_acumulado = $current_acumulado + $visitadetalle->getVisitadetalleSubtotal();
//                                    $empleado_comision->setEmpleadocomisionAcumulado($new_acumulado);
                                
                                    
                                }else if($tipoComision == 'cantidad'){
                                    
                                    $comision = $empleado->getEmpleadoCantidadcomisionservicio() * $visitadetalle->getVisitadetalleCantidad();
                                    
                                    //Servicios vendidos
                                    $current_vendidos = $empleado_comision->getEmpleadocomisionServiciosvendidos();
                                    $new_vendidos = $current_vendidos +  $visitadetalle->getVisitadetalleCantidad();
                                    $empleado_comision->setEmpleadocomisionServiciosvendidos($new_vendidos);
                                    
                                    //Comision servicios
                                    $current_servicios = $empleado_comision->getEmpleadocomisionComisionservicios();
                                    $new_servicios = $current_servicios + $comision;
                                    $empleado_comision->setEmpleadocomisionComisionservicios($new_servicios);
                                    
                                    //Acumulado
//                                    $current_acumulado = $empleado_comision->getEmpleadocomisionAcumulado();
//                                    $new_acumulado = $current_acumulado + $visitadetalle->getVisitadetalleSubtotal();
//                                    $empleado_comision->setEmpleadocomisionAcumulado($new_acumulado);
                                    
                                }

                            }else{ //Las comisiones del empleado las define el servico/producto vendido
                                
                                $tipoComision = $serivicio->getServicioTipocomision();
                                if($tipoComision == 'porcentaje'){
                                    
                                    $comision = (($servicio_clinica->getServicioclinicaPrecio() * $visitadetalle->getVisitadetalleCantidad()) * $serivicio->getServicioComision())/100;
                                    
                                    //Servicios vendidos
                                    $current_vendidos = $empleado_comision->getEmpleadocomisionServiciosvendidos();
                                    $new_vendidos = $current_vendidos +  $visitadetalle->getVisitadetalleCantidad();
                                    $empleado_comision->setEmpleadocomisionServiciosvendidos($new_vendidos);
                                    
                                    //Comision servicios
                                    $current_servicios = $empleado_comision->getEmpleadocomisionComisionservicios();
                                    $new_servicios = $current_servicios + $comision;
                                    $empleado_comision->setEmpleadocomisionComisionservicios($new_servicios);
                                    
                                    //Acumulado
//                                    $current_acumulado = $empleado_comision->getEmpleadocomisionAcumulado();
//                                    $new_acumulado = $current_acumulado + $visitadetalle->getVisitadetalleSubtotal();
//                                    $empleado_comision->setEmpleadocomisionAcumulado($new_acumulado);
                                    
                                    
                                }else if($tipoComision == 'cantidad'){
                                    
                                    $comision = $serivicio->getServicioComision() * $visitadetalle->getVisitadetalleCantidad();
                                    
                                    //Servicios vendidos
                                    $current_vendidos = $empleado_comision->getEmpleadocomisionServiciosvendidos();
                                    $new_vendidos = $current_vendidos +  $visitadetalle->getVisitadetalleCantidad();
                                    $empleado_comision->setEmpleadocomisionServiciosvendidos($new_vendidos);
                                    
                                    //Comision servicios
                                    $current_servicios = $empleado_comision->getEmpleadocomisionComisionservicios();
                                    $new_servicios = $current_servicios + $comision;
                                    $empleado_comision->setEmpleadocomisionComisionservicios($new_servicios);
                                    
                                    //Acumulado
//                                    $current_acumulado = $empleado_comision->getEmpleadocomisionAcumulado();
//                                    $new_acumulado = $current_acumulado + $visitadetalle->getVisitadetalleSubtotal();
//                                    $empleado_comision->setEmpleadocomisionAcumulado($new_acumulado);
                                    
                                }
                            }
                           
                        }else{
                            //Servicios vendidos
                            $current_vendidos = $empleado_comision->getEmpleadocomisionServiciosvendidos();
                            $new_vendidos = $current_vendidos +  $visitadetalle->getVisitadetalleCantidad();
                            $empleado_comision->setEmpleadocomisionServiciosvendidos($new_vendidos);
                            
                            //Acumulado
//                            $current_acumulado = $empleado_comision->getEmpleadocomisionAcumulado();
//                            $new_acumulado = $current_acumulado + $visitadetalle->getVisitadetalleSubtotal();
//                            $empleado_comision->setEmpleadocomisionAcumulado($new_acumulado);
                        }
                      
                    }else{
                        $visitadetalle->setIdmembresia($detalle['id']);
                        $visitadetalle->save();
                        
                        //Asignamos la membresia al paciente
                        $membresia_paciente = new \Pacientemembresia();
                        $membresia_paciente->setIdpaciente($post_data['idpaciente'])
                                           ->setIdclinica($post_data['idclinica'])
                                           ->setIdmembresia($detalle['id']);
                        
                        //Instanciamos nuestra membresia para obtener su informacion
                        $membresia = \MembresiaQuery::create()->findPk($detalle['id']);
                        
                        $membresia_paciente->setPacientemembresiaServiciosdisponibles($membresia->getMembresiaServicios())
                                           ->setPacientemembresiaCuponesdisponibles($membresia->getMembresiaCupones())
                                           ->setPacientemembresiaFolio($detalle['folio'])
                                           ->setPacientemembresiaEstatus('activa')
                                           ->setPacientemembresiaFechainicio(new \DateTime())
                                           ->save();
                        
                        
                         /*
                         * COMISIONES
                         */
                        
                        //Servicios vendidos
                        $current_vendidos = $empleado_comision->getEmpleadocomisionServiciosvendidos();
                        $new_vendidos = $current_vendidos +  $visitadetalle->getVisitadetalleCantidad();
                        $empleado_comision->setEmpleadocomisionServiciosvendidos($new_vendidos);
                         

                        //Acumulado
//                        $current_acumulado = $empleado_comision->getEmpleadocomisionAcumulado();
//                        $new_acumulado = $current_acumulado + $visitadetalle->getVisitadetalleSubtotal();
//                        $empleado_comision->setEmpleadocomisionAcumulado($new_acumulado)->save();
                 
                    }
                    
                    
                }
                

                //Acumulado
                $current_acumulado = $empleado_comision->getEmpleadocomisionAcumulado();
                $new_acumulado = $current_acumulado + $visita->getVisitaTotal();
                $empleado_comision->setEmpleadocomisionAcumulado($new_acumulado);
                
                $empleado_comision->save();
                /*
                 * Verificamos que si existe una membresia en la orden y ademas servicios con dependencia a membresia
                 * Esos servicios le sean descontados de la membresia que compraron
                 */
                //Si se compro alguna membresia
                
                if(\VisitadetalleQuery::create()->filterByIdvisita($visita->getIdvisita())->filterByIdmembresia(NULL,\Criteria::NOT_EQUAL)->exists()){
                    //Si tiene servicios que tieenen dependencia com mebresia
                    $visita_detalle = \VisitadetalleQuery::create()->filterByIdvisita($visita->getIdvisita())->filterByIdservicioclinica(NUll,  \Criteria::NOT_EQUAL)->find();    
                    
                    foreach ($visita_detalle as $detalle){
                       
                        if($detalle->getServicioclinica()->getServicio()->getServicioDependencia() == 'membresia'){
                           
                            //for($i=0; $i<(int)$detalle->getVisitadetalleCantidad();$i++){
                                 
                                //Insertamos en paciente membresia seguimiento
                                $paciente_membresia_segumiento = new \Pacientemembresiadetalle();
                                $paciente_membresia_segumiento->setIdpacientemembresia($membresia_paciente->getIdpacientemembresia())
                                                              ->setPacientemembresiadetalleFecha(new \DateTime())
                                                              ->setIdvisitadetalle($detalle->getIdvisitadetalle())
                                                              ->save();
                                
                                //Restamos de membresia paciente
                                $current_servicios = $membresia_paciente->getPacientemembresiaServiciosdisponibles();
                                $current_cupones = $membresia_paciente->getPacientemembresiaCuponesdisponibles();
                                $new_servicios = $current_servicios - (int)$detalle->getVisitadetalleCantidad();
                                $membresia_paciente->setPacientemembresiaServiciosdisponibles($new_servicios)->save();
                                if($new_servicios == 0 && $current_cupones == 0){
                                    $membresia_paciente->setPacientemembresiaEstatus('terminada')->save();
                                }
                            //}
                        }
                    }
                }
                
                
                /*
                 * Verificamos que si existe en la orden de compra servicios que dependen de membresia
                 */
                if(\VisitadetalleQuery::create()->filterByIdvisita($visita->getIdvisita())->filterByIdmembresia(NULL,\Criteria::NOT_EQUAL)->count() == 0){
                     //Si tiene servicios que tieenen dependencia com mebresia
                    $visita_detalle = \VisitadetalleQuery::create()->filterByIdvisita($visita->getIdvisita())->filterByIdservicioclinica(NUll,  \Criteria::NOT_EQUAL)->find();
                    //La membresia del paciente
                    $membresia_paciente = \PacientemembresiaQuery::create()->filterByIdpaciente($visita->getIdpaciente())->filterByPacientemembresiaEstatus('activa')->findOne();
                    foreach ($visita_detalle as $detalle){
                        if($detalle->getServicioclinica()->getServicio()->getServicioDependencia() == 'membresia'){
                            //for($i=0; $i<(int)$detalle->getVisitadetalleCantidad();$i++){
                                //Insertamos en paciente membresia seguimiento
                                $paciente_membresia_segumiento = new \Pacientemembresiadetalle();
                                $paciente_membresia_segumiento->setIdpacientemembresia($membresia_paciente->getIdpacientemembresia())
                                                              ->setPacientemembresiadetalleFecha(new \DateTime())
                                                              ->setIdvisitadetalle($detalle->getIdvisitadetalle())
                                                              ->save();
                                
                                //Restamos de membresia paciente
                                $current_servicios = $membresia_paciente->getPacientemembresiaServiciosdisponibles();
                                $current_cupones = $membresia_paciente->getPacientemembresiaCuponesdisponibles();
                                $new_servicios = $current_servicios - (int)$detalle->getVisitadetalleCantidad();
                                $membresia_paciente->setPacientemembresiaServiciosdisponibles($new_servicios)->save();
                                if($new_servicios == 0 && $current_cupones == 0){
                                    $membresia_paciente->setPacientemembresiaEstatus('terminada')->save();
                                }
                            //}
                        }
                    }
                }
                
                
                
            }
           
            //La informacion de pago
            if(isset($post_data['visitapago_tipo'])){
                foreach ($post_data['visitapago_tipo'] as $pago){
                   
                    $visitapago = new \Visitapago();
                    $visitapago->setIdvisita($visita->getIdvisita())
                                  ->setVisitapagoTipo($pago['type'])
                                  ->setVisitapagoCantidad($pago['cantidad'])
                                  ->setVisitapagoFecha(new \DateTime());

                    $visitapago->save();

                }
            }
            
            return $this->getResponse()->setContent(\Zend\Json\Json::encode(array('result' => true)));
         }
         
     }
     
    public function nuevoeventoAction(){
        
        $sesion = new \Shared\Session\AouthSession();
        $request = $this->getRequest();
        
        if($request->isPost()){
            $post_data = $request->getPost();
            
            foreach ($post_data as $k => $v){
                if(empty($v)){
                    unset($post_data[$k]);
                }
            }
            
            $entity = new \Visita();
            
            foreach($post_data as $key => $value){
                if(\VisitaPeer::getTableMap()->hasColumn($key)){
                    $entity->setByName($key, $value, \BasePeer::TYPE_FIELDNAME);
                }
            }
            $entity->setVisitaEstatuspago('no pagada');
            
            $entity->save();
            
            //Ahora los detalles
            if(isset($post_data['vistadetalle'])){
                foreach ($post_data['vistadetalle'] as $detalle){
                    $visitadetalle = new \Visitadetalle();
                    $visitadetalle->setIdvisita($entity->getIdvisita())
                                  ->setVisitadetalleCargo($detalle['type'])
                                  ->setVisitadetallePreciounitario($detalle['price'])
                                  ->setVisitadetalleCantidad($detalle['cantidad'])
                                  ->setVisitadetalleSubtotal($detalle['subtotal']);
                    
                    if($detalle['type'] == 'producto'){
                        $visitadetalle->setIdproductoclinica($detalle['id']);
                         $visitadetalle->save();
                    }elseif($detalle['type'] == 'servicio'){
                        $visitadetalle->setIdservicioclinica($detalle['id']);
                        $visitadetalle->save();
                        if($visitadetalle->getServicioclinica()->getServicio()->getServicioDependencia() == 'cupon'){
                            $paciente_membresia_detalle = new \Pacientemembresiadetalle();
                            $paciente_membresia_detalle->setIdpacientemembresia($detalle['idpacientemembresia'])
                                                       ->setIdvisitadetalle($visitadetalle->getIdvisitadetalle())
                                                       ->setPacientemembresiadetalleFecha(new \DateTime())
                                                       ->save();
                        } 

                    }else{
                        $visitadetalle->setIdmembresia($detalle['id']);
                        $visitadetalle->save();
                    }

                   

                }
            }
            
            $data = \VisitaQuery::create()->filterByIdvisita($entity->getIdvisita())->joinPaciente()->withColumn('paciente_nombre')->findOne()->toArray(\BasePeer::TYPE_FIELDNAME);      
            return $this->getResponse()->setContent(\Zend\Json\Json::encode(array('result' => true,'data' => $data)));
            
        }
        
        
        if($this->params()->fromQuery('html')){
            
            $idempleado = $this->params()->fromQuery('idempleado');
            $idclinica = $this->params()->fromQuery('idclinica');
            $empleado = \EmpleadoQuery::create()->findPk($idempleado);
            $visita_creadaen = new \DateTime();
            $visita_fechainicio = $this->params()->fromQuery('start');
            $visita_fecha = new \DateTime($visita_fechainicio);
            $visita_fechafin = $this->params()->fromQuery('end');
            
            //Instanciamos nuestro formulario
            $form = new \Agenda\Form\EventoForm($sesion->getIdempleado(), $idclinica, $idempleado, $visita_creadaen->format('Y-m-d H:i:s'), $visita_fechainicio,$visita_fechafin);
            $form->setAttribute('action', '/agenda/nuevoevento');
            $form->setAttribute('novalidate', true);
            $form->setAttribute('class', 'forms');
            
            //Modificamos nuestro select del estatus
            $form->add(array(
                'type' => 'Select',
                'name' => 'visita_status',
                'options' => array(
                   'value_options' => array(
                           'por confirmar' => 'Por confirmar',
                           'confimada' => 'Confimada',
                           'en servicio' => 'En servicio',
                   ),
                ),
               'attributes' => array(
                   'class' => 'width-100',
               ),
            ));
            
            //Catalogo de productos
            $productos = \ProductoclinicaQuery::create()->joinProducto()->withColumn('producto_nombre')->withColumn('producto_precio')->filterByIdclinica($idclinica)->find()->toArray(null,false,  \BasePeer::TYPE_FIELDNAME);

            //Catalogo de servicio
            $servicios_array = array();
            $servicios = \ServicioclinicaQuery::create()->filterByIdclinica($idclinica)->useServicioQuery()->filterByServicioDependencia('membresia',  \Criteria::NOT_EQUAL)->endUse()->withColumn('servicio_nombre')->find();
            
            //Validamos si se tienen los insumos suficentes para realizar el servicio
            $servicio = new \Servicioclinica();
            
            foreach ($servicios as $servicio){
                $disponible = 1;
                //Requiere insumos
                if(\ServicioinsumoQuery::create()->filterByIdservicio($servicio->getServicio()->getIdservicio())->exists()){
                    $servicio_insumo = \ServicioinsumoQuery::create()->filterByIdservicio($servicio->getServicio()->getIdservicio())->find();
                    $insumo = new \Servicioinsumo();
                    foreach ($servicio_insumo as $insumo){
                        $insumo_clinica = \InsumoclinicaQuery::create()->filterByIdclinica($idclinica)->filterByIdinsumo($insumo->getInsumo()->getIdinsumo())->findOne();
                        $required = $insumo->getServicioinsumoCantidad();
                        $has = $insumo_clinica->getInsumoclinicaExistencia();
                        if($has<$required){
                            $disponible = 0;
                        }
                    }
                }
                $servicio_array = $servicio->toArray(\BasePeer::TYPE_FIELDNAME);
                $servicio_array['disponible'] = $disponible;
                $servicio_array['servicio_dependencia'] = $servicio->getServicio()->getServicioDependencia();
                //Si el servicio NO genera ingresa modificamos su valor a $0.00;
                if(!$servicio->getServicio()->getServicioGeneraingreso()){
                    $servicio_array['servicioclinica_precio'] = 0;
                }
                
                $servicios_array[] = $servicio_array;
            }
            
            //Catalogo de membresias
            $membresias = \MembresiaQuery::create()->find()->toArray(null,false,  \BasePeer::TYPE_FIELDNAME);

            $viewModel = new ViewModel();
            $viewModel->setVariables(array(
                'form' => $form,
                'empleado' => $empleado,
                'fecha' => $visita_fecha,
                'productos' => $productos,
                'servicios' => $servicios_array,
                'membresias' => $membresias
            ));
            $viewModel->setTerminal(true);
            return $viewModel;
            
        }
        
        
    }
    
    public function findpacientesAction()
    {
        $query = $this->params()->fromQuery('q');
        
        $result = \PacienteQuery::create()->joinClinica()->withColumn('clinica_nombre')->filterByPacienteNombre('%'.$query .'%', \Criteria::LIKE)->find()->toArray(null,false,  \BasePeer::TYPE_FIELDNAME);
        
        //Damos el formato
        $result_array = array();
        foreach ($result as $r){
            $tmp['id'] = $r['idpaciente'];  
            $tmp['name'] = $r['paciente_nombre'].' - Celular: '.$r['paciente_celular'].' - Teléfono: '.$r['paciente_telefono'];
            $tmp['paciente_nombre'] = $r['paciente_nombre'];
            $tmp['clinica_nombre'] = $r['clinica_nombre'];
            $tmp['paciente_celular'] = $r['paciente_celular'];
            $tmp['paciente_telefono'] = $r['paciente_telefono'];
            //adicional
            $tmp['visita_total'] = \VisitaQuery::create()->filterByIdpaciente($r['idpaciente'])->filterByVisitaStatus('terminado')->count();
            $tmp['visita_ultima'] = '';
            if(\VisitaQuery::create()->filterByIdpaciente($r['idpaciente'])->filterByVisitaStatus('terminado')->orderByVisitaFechainicio('desc')->exists()){
                 $visitas = \VisitaQuery::create()->filterByIdpaciente($r['idpaciente'])->filterByVisitaStatus('terminado')->orderByVisitaFechainicio(\Criteria::DESC)->findOne();
                 $tmp['visita_ultima'] = $visitas->getVisitaFechainicio('d/m/Y - H:i:s');
            }
            //Los relacionados
            $tmp['relacionados'] = \GrupopersonalQuery::create()->joinPacienteRelatedByIdpacienteagregado()->filterByIdpaciente($r['idpaciente'])->withColumn('paciente_nombre')->withColumn('paciente_celular')->withColumn('paciente_telefono')->withColumn('idclinica')->find()->toArray(null,false,\BasePeer::TYPE_FIELDNAME);
            foreach ($tmp['relacionados'] as $key => $value){
                $cliniva = \ClinicaQuery::create()->findPk($value['idclinica']);
                $clinica_nombre = $cliniva->getClinicaNombre();
                $tmp['relacionados'][$key]['clinica_nombre'] = $clinica_nombre;
            }
            
            //Mmebresia
            $tmp['membresia'] = NULL;
            if(\PacientemembresiaQuery::create()->filterByIdpaciente($r['idpaciente'])->filterByPacientemembresiaEstatus('activa')->exists()){
                $paciente_membresia = \PacientemembresiaQuery::create()->joinMembresia()->withColumn('membresia_nombre')->withColumn('membresia_servicios')->withColumn('membresia_cupones')->filterByIdpaciente($r['idpaciente'])->filterByPacientemembresiaEstatus('activa')->findOne();
                $tmp['membresia'] = $paciente_membresia->toArray(\BasePeer::TYPE_FIELDNAME);
            }   
            $result_array[] = $tmp;
        }
        
        return $this->getResponse()->setContent(\Zend\Json\Json::encode($result_array));
        
        
    }

    public function quickaddpacienteAction(){

        $request = $this->getRequest();
        
        if($request->isPost()){
            $post_data = $request->getPost();
            $entity = new \Paciente();
            
            foreach($post_data as $key => $value){
                if(\PacientePeer::getTableMap()->hasColumn($key)){
                    $entity->setByName($key, $value, \BasePeer::TYPE_FIELDNAME);
                }
            }
            $entity->setIdpaciente(NULL);
            $entity->setPacienteFecharegistro(new \DateTime());
            $entity->save();
            
            return $this->getResponse()->setContent(\Zend\Json\Json::encode(array('result' => true,'data' => $entity->toArray(\BasePeer::TYPE_FIELDNAME))));

        }
        
    }
    
    public function quickaddvisitaAction(){
        
        $request = $this->getRequest();
        $sesion = new \Shared\Session\AouthSession();
        if($request->isPost()){
            $post_data = $request->getPost();
            
            $empleado = \EmpleadoQuery::create()->findOneByIdempleado($post_data['idempleado']);
            $disponibilidad = $this->checkDisponibilidad($empleado->getIdempleado(),$post_data['visita_fechainicio']);
            if(!$disponibilidad['result']){
                return $this->getResponse()->setContent(\Zend\Json\Json::encode($disponibilidad));
            }
            
            $entity = new \Visita();

            foreach($post_data as $key => $value){
                if(\VisitaPeer::getTableMap()->hasColumn($key)){
                    $entity->setByName($key, $value, \BasePeer::TYPE_FIELDNAME);
                }
            }
            $entity->setIdempleadocreador($sesion->getIdempleado());
            $entity->setVisitaTipo('servicio');
            $entity->setVisitaEstatuspago('no pagada');
            $entity->setVisitaCreadaen(new \DateTime());
            $entity->save();

            return $this->getResponse()->setContent(\Zend\Json\Json::encode(array('result' => true,'fecha'=> $entity->getVisitaFechainicio('d/m/Y'), 'empleado' => $entity->getEmpleadoRelatedByIdempleado()->getEmpleadoNombre())));
        }
    }
    
    public function checkDisponibilidad($idempleado, $fecha){
        $empleado = \EmpleadoQuery::create()->findOneByIdempleado($idempleado);
        $fecha = new \DateTime($fecha);
        $day_week = $this->dayWeekMap((int)$fecha->format('w'));
        $horarioDescanso = \EmpleadohorarioQuery::create()->filterByEmpleadohorarioDia($day_week)->filterByIdempleado($idempleado)->findOne();
        
        $disponible = true;
        //Verificamos que no descanse
        if($horarioDescanso->getEmpleadohorarioDescanso()){
            return array('result' => false,'msg' => 'No es posible agendar la cita debido a que el pedicurista descansa el dia seleccionado');
        }
        //Verificamos disponibilidad en cuanto a su horario
        $fecha_entrada = new \DateTime($fecha->format('Y-m-d').' '.$horarioDescanso->getEmpleadohorarioEntrada());
        $fecha_salida = new \DateTime($fecha->format('Y-m-d').' '.$horarioDescanso->getEmpleadohorarioSalida());
        if($fecha>=$fecha_entrada && $fecha<= $fecha_salida){
            
        }else{
            return array('result' => false,'msg' => 'No es posible agendar la cita debido a que el pedicurista NO se encuentra en horario laboral en la fecha/hora seleccionada');
        }
        //Verificamos la disponibilidad en cuanto a sus citas
        $visitas = \VisitaQuery::create()->filterByIdempleado($idempleado)->filterByVisitaFechainicio(array('min' => $fecha->format('Y-m-d').' '.'00:00:00', 'max' => $fecha->format('Y-m-d').' '.'23:59:59'))->find();
       
        foreach ($visitas as $visita){
            if($fecha >= new \DateTime($visita->getVisitaFechainicio()) && $fecha < new \DateTime($visita->getVisitaFechafin())){
                return array('result' => false,'msg' => 'No es posible agendar la cita debido a que el pedicurista no cuanta disponibilidad en la fecha/hora seleccionada');
            }
        }

        return array('result' => true);

    }
    
    public function dayWeekMap($day){
        $day_week = array(
            0 => 'domingo',
            1 => 'lunes',
            2 => 'martes',
            3 => 'miercoles',
            4 => 'jueves',
            5 => 'viernes',
            6 => 'sabado',
        );
        
        return $day_week[$day];
    }

    public function quickupdaterelacionadosAction(){
        $request = $this->getRequest();
        if($request->isPost()){
            $post_data = $request->getPost();
            
            $paciente = \PacienteQuery::create()->findPk($post_data['idpaciente']);
            
            $paciente->getGrupopersonalsRelatedByIdpaciente()->delete();
            
            //Ahora los pacientes
            if(isset($post_data['relacionados'])){
                foreach ($post_data['relacionados'] as $idpaciente){
                    $grupo_paciente = new \Grupopersonal();
                    $grupo_paciente->setIdpaciente($paciente->getIdpaciente())
                                   ->setIdpacienteagregado($idpaciente)
                                   ->save();
                }
            }
            
            return $this->getResponse()->setContent(\Zend\Json\Json::encode(array('result' => true)));
        }
        
    }
    
    public function dropeventAction(){
        $request = $this->getRequest();
        if($request->isPost()){
            $post_data = $request->getPost();

            $visita = \VisitaQuery::create()->findPk($post_data['idvisita']);
            $visita->setIdempleado($post_data['idempeleado']);
            $visita->setVisitaFechainicio($post_data['start']);
            $visita->setVisitaFechafin($post_data['end']);

            $visita->save();
            
            return $this->getResponse()->setContent(\Zend\Json\Json::encode(array('result' => true)));
        }
    }
    
    public function droprecesoAction(){
        $request = $this->getRequest();
        if($request->isPost()){
            $post_data = $request->getPost();

            $visita = \EmpleadorecesoQuery::create()->findPk($post_data['idempleadoreceso']);
            $visita->setIdempleado($post_data['idempeleado']);
            $visita->setEmpleadorecesoInicio($post_data['start']);
            $visita->setEmpleadorecesoFin($post_data['end']);

            $visita->save();
            
            return $this->getResponse()->setContent(\Zend\Json\Json::encode(array('result' => true)));
        }
    }
    
    public function resizerecesoAction(){
        $request = $this->getRequest();
        if($request->isPost()){
            $post_data = $request->getPost();

            $visita = \EmpleadorecesoQuery::create()->findPk($post_data['idempleadoreceso']);
            $visita->setIdempleado($post_data['idempeleado']);
            $visita->setEmpleadorecesoInicio($post_data['start']);
            $visita->setEmpleadorecesoFin($post_data['end']);

            $visita->save();
            
            return $this->getResponse()->setContent(\Zend\Json\Json::encode(array('result' => true)));
        }
    }
    
    public function resizeeventAction(){
        $request = $this->getRequest();
        if($request->isPost()){
            $post_data = $request->getPost();

            $visita = \VisitaQuery::create()->findPk($post_data['idvisita']);
            $visita->setVisitaFechainicio($post_data['start']);
            $visita->setVisitaFechafin($post_data['end']);

            $visita->save();
            
            return $this->getResponse()->setContent(\Zend\Json\Json::encode(array('result' => true)));
        }
    }
    
    
 
    
}
