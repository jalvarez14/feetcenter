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
                    }else{
                        $visitadetalle->setIdservicioclinica($detalle['id']);
                    }
                    
                    $visitadetalle->save();

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
            $servicios = \ServicioclinicaQuery::create()->joinServicio()->withColumn('servicio_nombre')->filterByIdclinica($entity->getIdclinica())->find()->toArray(null,false,  \BasePeer::TYPE_FIELDNAME);;

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
           

            $viewModel = new ViewModel();
            $viewModel->setVariables(array(
                'form' => $form,
                'visita' => $entity,
                'productos' => $productos,
                'servicios' => $servicios,
                'paciente' => json_encode($paciente_array),
                'empleados' => $empleados,
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

                    }else if($detalle['type'] == 'servicio'){
                        $visitadetalle->setIdservicioclinica($detalle['id']);
                    }else{
                        $visitadetalle->setIdmembresia($detalle['id']);
                    }
                    
                    $visitadetalle->save();
//                    if($detalle['type'] == 'producto'){
//                        $visitadetalle->setIdproductoclinica($detalle['id']);
//                        //Comisiones
//                        
//                        
//                        
//                        
//                    }else{
//                        $visitadetalle->setIdservicioclinica($detalle['id']);
//                        //Comisiones
//                        $servicioclinica = \ServicioclinicaQuery::create()->findPk($detalle['id']);
//                       
//                        if($servicioclinica->getServicio()->getServicioGeneracomision()){
//                            $fecha = new \DateTime();
//                            //Verificamos si ya tiene un registro del dia en cursos
//                            if(\EmpleadocomisionQuery::create()->filterByIdempledo($post_data['idempleado'])->filterByEmpleadocomisionFecha($fecha->format('y-m-d'))->exists()){
//                                $registro = \EmpleadocomisionQuery::create()->filterByIdempledo($post_data['idempleado'])->filterByEmpleadocomisionFecha($fecha->format('y-m-d'))->findOne();
//                                
//                                $vendidos = $registro->getEmpleadocomisionServiciosvendidos();
//                                $new_vendidos = $vendidos + $detalle['cantidad'];
//                                $registro->setEmpleadocomisionServiciosvendidos($new_vendidos);
//                                
//                                $tipo = $servicioclinica->getServicio()->getServicioTipocomision();
//                                if($tipo == 'cantidad'){
//                                    $comision = $servicioclinica->getServicio()->getServicioComision() * $detalle['cantidad'];
//                                }else{
//                                    $comision = ($servicioclinica->getServicio()->getServicioComision() / 100) * $servicioclinica->getServicioclinicaPrecio();
//                                }
//                                $comision_current = $registro->getEmpleadocomisionComisionservicios();
//                                $new_comision = $comision_current + $comision;
//                                $registro->setEmpleadocomisionComisionservicios($new_comision);
//                                
//                                $acumulado_current = $registro->getEmpleadocomisionAcumulado();
//                                $acumulado_new = $acumulado_current + $comision;
//                                $registro->setEmpleadocomisionAcumulado($acumulado_new);
//                                $registro->save();
//                                
//                                
//                            }else{
//                                //Creamos un primer registro del dia
//                                $empleado_comision = new \Empleadocomision();
//                                $empleado_comision->setIdempledo($post_data['idempleado'])
//                                                  ->setIdclinica($post_data['idclinica'])
//                                                  ->setEmpleadocomisionFecha($fecha->format('Y-m-d'))
//                                                  ->setEmpleadocomisionServiciosvendidos($detalle['cantidad']);
//                                
//                                $tipo = $servicioclinica->getServicio()->getServicioTipocomision();
//                                if($tipo == 'cantidad'){
//                                    $comision = $servicioclinica->getServicio()->getServicioComision() * $detalle['cantidad'];
//                                }else{
//                                    $comision = ($servicioclinica->getServicio()->getServicioComision() / 100) * $servicioclinica->getServicioclinicaPrecio();
//                                }
//                                
//                                $empleado_comision->setEmpleadocomisionComisionservicios($comision)
//                                                  ->setEmpleadocomisionAcumulado($comision);
//                                
//                                $empleado_comision->save();
//                                 
//                            }
//                           
//                        }
//                    }
                   
                  

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
                    }else{
                        $visitadetalle->setIdservicioclinica($detalle['id']);
                    }
                    
                    $visitadetalle->save();

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
            $servicios = \ServicioclinicaQuery::create()->joinServicio()->withColumn('servicio_nombre')->filterByIdclinica($idclinica)->find()->toArray(null,false,  \BasePeer::TYPE_FIELDNAME);;
            
            $viewModel = new ViewModel();
            $viewModel->setVariables(array(
                'form' => $form,
                'empleado' => $empleado,
                'fecha' => $visita_fecha,
                'productos' => $productos,
                'servicios' => $servicios,
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
