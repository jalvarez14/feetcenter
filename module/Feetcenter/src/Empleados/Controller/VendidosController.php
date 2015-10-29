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

class VendidosController extends AbstractActionController
{
    
    public function filterbyclinicaAction(){
        
        $idrol = $this->params()->fromQuery('idrol');
        $idclinica = $this->params()->fromQuery('idclinica');
        $from = $this->params()->fromQuery('from');
        $to = $this->params()->fromQuery('to');
        
        if($idrol !== 3){ //Para administradores
             
            $arrServicios = array();
            
            $empleados = \ClinicaempleadoQuery::create()->filterByIdclinica($idclinica)->joinEmpleado()->withColumn('empleado_nombre')->useEmpleadoQuery()->useEmpleadoaccesoQuery()->filterByIdrol(3)->endUse()->endUse()->groupBy('idempleado')->find();
            //Filtramos por clinica
            $servicios = \ServicioclinicaQuery::create()->filterByIdclinica($idclinica)->find();
            $servicio = new \Servicioclinica();
            foreach ($servicios as $servicio){
                $tmp['idservicioclinia'] = $servicio->getIdservicioclinica();
                $tmp['servicio_nombre'] = $servicio->getServicio()->getServicioNombre();
                //Comenzamos a itinerar sobre los empleados para conocer cuantos producto ha vendido cada empleado
                $tmp['empleados'] = array();
                $empleado = new \Clinicaempleado();
                foreach ($empleados as $empleado){
                    $emp['idempleado'] = $empleado->getIdempleado();
                    $emp['empleado_nombre'] = $empleado->getEmpleado()->getEmpleadoNombre();
                    $vendidos = \VisitadetalleQuery::create()->filterByIdservicioclinica($servicio->getIdservicioclinica())->useVisitaQuery()->filterByIdempleado($empleado->getIdempleado())->filterByVisitaCreadaen(array('min' => $from.' 00:00:00', 'max' => $to.' 23:59:59'))->filterByVisitaEstatuspago('pagada')->endUse()->count();
                    $emp['vendidos'] = $vendidos;
                    $tmp['empleados'][] = $emp;
                }
                $arrServicios[] = $tmp;
            }
            
            return $this->getResponse()->setContent(json_encode(array('servicios' => $arrServicios, 'empleados' => $empleados->toArray(null,false,\BasePeer::TYPE_FIELDNAME))));
        }else{
            
        }
        
    }
    
    public function indexAction()
    {
        $session = new \Shared\Session\AouthSession();
        
        if(!is_null($session->getIdClinica())){
            $clinicas = \ClinicaQuery::create()->filterByIdclinica($session->getIdclinica())->find();
        }else{
            $clinicas = \ClinicaQuery::create()->find();
        }

        return new ViewModel(array(
            'clinicas' => $clinicas,
            'session' => json_encode($session->getData()),
        ));
    }
}
