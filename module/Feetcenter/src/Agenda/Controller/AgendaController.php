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
                 $visitas = \VisitaQuery::create()->filterByVisitaStatus('terminado')->orderByVisitaFechainicio(\Criteria::DESC)->findOne();
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
