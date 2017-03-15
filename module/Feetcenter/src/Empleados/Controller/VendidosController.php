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
        
        $idrol = (int)$this->params()->fromQuery('idrol');
        $idclinica = $this->params()->fromQuery('idclinica');
        $from = date_create_from_format('j/m/Y', $this->params()->fromQuery('from'));
        $desde = date_format($from, 'Y-m-d');
        $to = date_create_from_format('j/m/Y', $this->params()->fromQuery('to'));
        $hasta = date_format($to, 'Y-m-d');
        
        $session = new \Shared\Session\AouthSession();
        if($idrol !== 3){ //Para administradores
            $productos= $this->params()->fromQuery('productos');
            $servicios= $this->params()->fromQuery('servicios');
            $membresias= $this->params()->fromQuery('membresias');
            
            

            $arrServicios = array();
            $empleados = \ClinicaempleadoQuery::create()->filterByIdclinica($idclinica)->joinEmpleado()->withColumn('empleado_nombre')->useEmpleadoQuery()->useEmpleadoaccesoQuery()->filterByIdrol(3)->endUse()->endUse()->groupBy('idempleado')->find();
            //Filtramos por clinica
            $servicios = \ServicioclinicaQuery::create()->filterByIdclinica($idclinica)->filterByIdservicio($servicios)->find();
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
                    $vendidos = 0;
                    $vendidosQuery = \VisitadetalleQuery::create()->filterByIdservicioclinica($servicio->getIdservicioclinica())->useVisitaQuery()->filterByIdempleado($empleado->getIdempleado())->filterByVisitaFechafin(array('min' => $desde.' 00:00:00', 'max' => $hasta.' 23:59:59'))->filterByVisitaEstatuspago('pagada')->endUse()->find();
                    foreach($vendidosQuery as $vendido){
                        $vendidos+= (int)$vendido->getVisitadetalleCantidad();
                    }
                    $emp['vendidos'] = $vendidos;
                    $tmp['empleados'][] = $emp;
                }
                $arrServicios[] = $tmp;
            }
            
          
            //Filtramos por producto
            $arrProductos = array();
            $productos = \ProductoclinicaQuery::create()->filterByIdclinica($idclinica)->filterByIdproducto($productos)->find();
            $producto = new \Productoclinica();
            foreach ($productos as $producto){
                $tmp['idproductoclinica'] = $producto->getIdproductoclinica();
                $tmp['producto_nombre'] = $producto->getProducto()->getProductoNombre();
                //Comenzamos a itinerar sobre los empleados para conocer cuantos producto ha vendido cada empleado
                    $tmp['empleados'] = array();
                $empleado = new \Clinicaempleado();
                foreach ($empleados as $empleado){
                    $emp['idempleado'] = $empleado->getIdempleado();
                    $emp['empleado_nombre'] = $empleado->getEmpleado()->getEmpleadoNombre();    
                    $vendidos = 0;
                    $vendidosQuery = \VisitadetalleQuery::create()->filterByIdproductoclinica($producto->getIdproductoclinica())->useVisitaQuery()->filterByIdempleado($empleado->getIdempleado())->filterByVisitaFechafin(array('min' => $desde.' 00:00:00', 'max' => $hasta.' 23:59:59'))->filterByVisitaEstatuspago('pagada')->endUse()->find();
                    foreach($vendidosQuery as $vendido){
                        $vendidos+= (int)$vendido->getVisitadetalleCantidad();
                        
                    }
                    $emp['vendidos'] = $vendidos;
                    $tmp['empleados'][] = $emp;
                }
                $arrProductos[] = $tmp;
            }
            
            //Filtramos por producto
            $arrMembresias = array();
            $membresias = \MembresiaQuery::create()->filterByIdmembresia($membresias)->find();
            $membresia = new \Membresia();
            foreach ($membresias as $membresia){
                $tmp['idmembresia'] = $membresia->getIdmembresia();
                $tmp['membresia_nombre'] = $membresia->getMembresiaNombre();
                //Comenzamos a itinerar sobre los empleados para conocer cuantos producto ha vendido cada empleado
                $tmp['empleados'] = array();
                $empleado = new \Clinicaempleado();
                foreach ($empleados as $empleado){
                    $emp['idempleado'] = $empleado->getIdempleado();
                    $emp['empleado_nombre'] = $empleado->getEmpleado()->getEmpleadoNombre();    
                    $vendidos = 0;
                    $vendidosQuery = \VisitadetalleQuery::create()->filterByIdmembresia($membresia->getIdmembresia())->useVisitaQuery()->filterByIdempleado($empleado->getIdempleado())->filterByVisitaFechafin(array('min' => $desde.' 00:00:00', 'max' => $hasta.' 23:59:59'))->filterByVisitaEstatuspago('pagada')->endUse()->find();
                    $vendido = new \Visitadetalle();
                    foreach($vendidosQuery as $vendido){
                        $vendidos+= (int)$vendido->getVisitadetalleCantidad();
                    }
                    $emp['vendidos'] = $vendidos;
                    $tmp['empleados'][] = $emp;
                }
                $arrMembresias[] = $tmp;
            }
            
            return $this->getResponse()->setContent(json_encode(array('productos' => $arrProductos,'membresias' => $arrMembresias, 'servicios' => $arrServicios, 'empleados' => $empleados->toArray(null,false,\BasePeer::TYPE_FIELDNAME))));
        }else{
            
            $arrServicios = array();
            $empleados = \ClinicaempleadoQuery::create()->filterByIdempleado($session->getIdempleado())->joinEmpleado()->withColumn('empleado_nombre')->find();
            

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
                    $vendidos = 0;
                    $vendidosQuery = \VisitadetalleQuery::create()->filterByIdservicioclinica($servicio->getIdservicioclinica())->useVisitaQuery()->filterByIdempleado($empleado->getIdempleado())->filterByVisitaFechafin(array('min' => $desde.' 00:00:00', 'max' => $hasta.' 23:59:59'))->filterByVisitaEstatuspago('pagada')->endUse()->count();
                    foreach($vendidosQuery as $vendido){
                        $vendidos+= (int)$vendido->getVisitadetalleCantidad();
                    }
                    $emp['vendidos'] = $vendidos;
                    $tmp['empleados'][] = $emp;
                }
                $arrServicios[] = $tmp;
            }
            
            
            //Filtramos por producto
            $arrProductos = array();
            $productos = \ProductoclinicaQuery::create()->filterByIdclinica($idclinica)->find();
            $producto = new \Productoclinica();
            foreach ($productos as $producto){
                $tmp['idproductoclinica'] = $producto->getIdproductoclinica();
                $tmp['producto_nombre'] = $producto->getProducto()->getProductoNombre();
                //Comenzamos a itinerar sobre los empleados para conocer cuantos producto ha vendido cada empleado
                    $tmp['empleados'] = array();
                $empleado = new \Clinicaempleado();
                foreach ($empleados as $empleado){
                    $emp['idempleado'] = $empleado->getIdempleado();
                    $emp['empleado_nombre'] = $empleado->getEmpleado()->getEmpleadoNombre();    
                    $vendidos = 0;
                    $vendidosQuery = \VisitadetalleQuery::create()->filterByIdproductoclinica($producto->getIdproductoclinica())->useVisitaQuery()->filterByIdempleado($empleado->getIdempleado())->filterByVisitaFechafin(array('min' => $desde.' 00:00:00', 'max' => $hasta.' 23:59:59'))->filterByVisitaEstatuspago('pagada')->endUse()->count();
                    foreach($vendidosQuery as $vendido){
                        $vendidos+= (int)$vendido->getVisitadetalleCantidad();
                    }
                    $emp['vendidos'] = $vendidos;
                    $tmp['empleados'][] = $emp;
                }
                $arrProductos[] = $tmp;
            }
            //Filtramos por producto
            $arrMembresias = array();
            $membresias = \MembresiaQuery::create()->find();
            $membresia = new \Membresia();
            foreach ($membresias as $membresia){
                $tmp['idmembresia'] = $membresia->getIdmembresia();
                $tmp['membresia_nombre'] = $membresia->getMembresiaNombre();
                //Comenzamos a itinerar sobre los empleados para conocer cuantos producto ha vendido cada empleado
                $tmp['empleados'] = array();
                $empleado = new \Clinicaempleado();
                foreach ($empleados as $empleado){
                    $emp['idempleado'] = $empleado->getIdempleado();
                    $emp['empleado_nombre'] = $empleado->getEmpleado()->getEmpleadoNombre();    
                    $vendidos = 0;
                    $vendidosQuery = \VisitadetalleQuery::create()->filterByIdmembresia($membresia->getIdmembresia())->useVisitaQuery()->filterByIdempleado($empleado->getIdempleado())->filterByVisitaFechafin(array('min' => $desde.' 00:00:00', 'max' => $hasta.' 23:59:59'))->filterByVisitaEstatuspago('pagada')->endUse()->count();
                    foreach($vendidosQuery as $vendido){
                        $vendidos+= (int)$vendido->getVisitadetalleCantidad();
                    }
                    $emp['vendidos'] = $vendidos;
                    $tmp['empleados'][] = $emp;
                }
                $arrMembresias[] = $tmp;
            }
            
            return $this->getResponse()->setContent(json_encode(array('productos' => $arrProductos,'membresias' => $arrMembresias, 'servicios' => $arrServicios, 'empleados' => $empleados->toArray(null,false,\BasePeer::TYPE_FIELDNAME))));
            
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
        $productos = \ProductoQuery::create()->find();
        $servicios = \ServicioQuery::create()->find();
        $membresias = \MembresiaQuery::create()->find();

        return new ViewModel(array(
            'clinicas' => $clinicas,
            'productos'=> $productos,
            'servicios'=> $servicios,
            'membresias'=> $membresias,
            'session' => json_encode($session->getData()),
        ));
    }
}
