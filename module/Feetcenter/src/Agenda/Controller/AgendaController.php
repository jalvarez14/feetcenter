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
            $clinicas = \ClinicaQuery::create()->filterByIdclinica($sesion->getIdClinica());
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
    
    
    public function nuevoeventoAction(){
        
        $sesion = new \Shared\Session\AouthSession();
        
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
            

            
            $viewModel = new ViewModel();
            $viewModel->setVariables(array(
                'form' => $form,
                'empleado' => $empleado,
                'fecha' => $visita_fecha,
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
            
            $entity->setPacienteFecharegistro(new \DateTime());
            $entity->save();
            
            return $this->getResponse()->setContent(\Zend\Json\Json::encode(array('result' => true,'data' => $entity->toArray(\BasePeer::TYPE_FIELDNAME))));

        }
        
    }
 
    
}
