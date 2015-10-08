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
 
    
}
