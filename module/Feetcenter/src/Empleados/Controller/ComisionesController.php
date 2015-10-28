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
    
    public function comisionesbyclinicaAction(){
        
        if($this->params()->fromQuery('idclinica')){
            
            $idclinica = $this->params()->fromQuery('idclinica');
            
            $comisiones = \EmpleadocomisionQuery::create()->joinEmpleado()->withColumn('empleado_nombre')->groupBy('empleadocomision_fecha')->orderBy('empleadocomision_fecha',  \Criteria::DESC)->filterByIdclinica($idclinica)->find()->toArray(null,false,  \BasePeer::TYPE_FIELDNAME);
            $empleados = \EmpleadocomisionQuery::create()->joinEmpleado()->withColumn('empleado_nombre')->select('idempledo')->groupBy('idempledo')->filterByIdclinica($idclinica)->find()->toArray(null,false,  \BasePeer::TYPE_FIELDNAME);
            
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
            $clinicas = \ClinicaQuery::create()->filterByIdclinica($sesion->getIdClinica())->find();
            $idclinica = $sesion->getIdClinica();
        }elseif($idrol == 3){ //Pedicurista
            
        }
        
        return new ViewModel(array(
            'clinicas' => $clinicas,
            'idclinica' => $idclinica,
        ));
        
        
        
    }
}
