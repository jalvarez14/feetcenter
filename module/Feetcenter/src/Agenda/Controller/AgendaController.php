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
 
    
}
