<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Empleados\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class ComisionesController extends AbstractActionController
{
    
    public function filterbydatebyidempleadoAction(){
        
        $sesion = new \Shared\Session\AouthSession();
        
        $from = $this->params()->fromQuery('from');
        $to = $this->params()->fromQuery('to');
        
        $comisiones = \EmpleadocomisionQuery::create()->filterByIdempledo($sesion->getIdempleado())->filterByEmpleadocomisionFecha(array('min' => $from, 'max' => $to))->joinEmpleado()->withColumn('empleado_nombre')->orderBy('empleadocomision_fecha',  \Criteria::ASC)->find()->toArray(null,false,  \BasePeer::TYPE_FIELDNAME);
        
        return $this->getResponse()->setContent(json_encode($comisiones));
        
    }
    
    public function getempleadosAction(){
        
        //Cachamos nuestros parametros de la url
        $idclinica = $this->params()->fromQuery('idclinica');
        $from = $this->params()->fromQuery('from');
        $to = $this->params()->fromQuery('to');
        
        $empleados_clinica = \ClinicaempleadoQuery::create()->filterByIdclinica($idclinica)->select('idempleado')->joinEmpleado()->withColumn('empleado_nombre')->useEmpleadoQuery()->useEmpleadoaccesoQuery()->filterByIdrol(3)->endUse()->endUse()->groupBy('idempleado')->find()->toArray(null,false,  \BasePeer::TYPE_FIELDNAME);;

        return $this->getResponse()->setContent(json_encode($empleados_clinica));
        
    }
    
    public function comisionesbydateAction(){
        
        $idclinica = $this->params()->fromQuery('idclinica');
        $from = $this->params()->fromQuery('from');
        $to  = $this->params()->fromQuery('to');
        
        $comisiones = \EmpleadocomisionQuery::create()->filterByEmpleadocomisionFecha(array('min' => $from, 'max' => $to))->joinEmpleado()->withColumn('empleado_nombre')->orderBy('empleadocomision_fecha',  \Criteria::ASC)->find()->toArray(null,false,  \BasePeer::TYPE_FIELDNAME);
        
        $empleados = \ClinicaempleadoQuery::create()->filterByIdclinica($idclinica)->select('idempleado')->joinEmpleado()->withColumn('empleado_nombre')->useEmpleadoQuery()->useEmpleadoaccesoQuery()->filterByIdrol(3)->endUse()->endUse()->groupBy('idempleado')->find()->toArray(null,false,  \BasePeer::TYPE_FIELDNAME);
        
        return $this->getResponse()->setContent(json_encode(array('comisiones' => $comisiones, 'empleados' => $empleados)));
    }
        
    public function comisionesbyclinicaAction(){
        
        if($this->params()->fromQuery('idclinica')){

            $idclinica = $this->params()->fromQuery('idclinica');
            
            $comisiones = \EmpleadocomisionQuery::create()->filterByEmpleadocomisionFecha(new \DateTime())->joinEmpleado()->withColumn('empleado_nombre')->orderBy('empleadocomision_fecha',  \Criteria::DESC)->find()->toArray(null,false,  \BasePeer::TYPE_FIELDNAME);
            
            $empleados = \ClinicaempleadoQuery::create()->filterByIdclinica($idclinica)->select('idempleado')->joinEmpleado()->withColumn('empleado_nombre')->useEmpleadoQuery()->useEmpleadoaccesoQuery()->filterByIdrol(3)->endUse()->endUse()->groupBy('idempleado')->find()->toArray(null,false,  \BasePeer::TYPE_FIELDNAME);

                       
            return $this->getResponse()->setContent(json_encode(array('comisiones' => $comisiones, 'empleados' => $empleados)));

       
        }
    }
    public function indexAction()
    {
        
        $session  = new \Shared\Session\AouthSession();
        $idrol = $session->getIdrol();

        if($idrol == 1){ //Admnistrador
            $clinicas = \ClinicaQuery::create()->find();
            $idclinica = 1;
        }elseif($idrol == 2){ //Encargado
            $clinicas = \ClinicaQuery::create()->filterByIdclinica($session->getIdclinica())->find();
            $idclinica = $session->getIdclinica();
        }elseif($idrol == 3){ //Pedicurista
        
            //Obtenemos las comisiones del empleado en sesion
            $comisiones = \EmpleadocomisionQuery::create()->filterByIdempledo($session->getIdempleado())->groupBy('empleadocomision_fecha')->joinEmpleado()->withColumn('empleado_nombre')->orderBy('empleadocomision_fecha',  \Criteria::DESC)->find();

            $viewModel = new ViewModel();
            $viewModel->setTemplate('empleados/comisiones/index_pedicurista');
            $viewModel->setVariable('comisiones', $comisiones);
            return $viewModel;
        }
        
        return new ViewModel(array(
            'clinicas' => $clinicas,
            'idclinica' => $idclinica,
        ));
        
        
        
    }
}
