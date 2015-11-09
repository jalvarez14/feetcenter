<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Reportes\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class ReportesController extends AbstractActionController
{

    public function filterclinicaAction(){
        
        $request = $this->getRequest();
        
        if($request->isPost()){
            
            $post_data = $request->getPost();
            
            /*
             * Servicios
             */
            $arrServicios = array();
            
            $clinicas = \ClinicaQuery::create()->filterByIdclinica($post_data['clinicas'])->find();
            
            $clinica = new \Clinica();
            foreach ($clinicas as $clinica){
                //Por cada clinica obtenemos los servicios
                $cli = $clinica->toArray(\BasePeer::TYPE_FIELDNAME);
                $cli['servicios'] = array();
                $clinica_servicios = \ServicioclinicaQuery::create()->filterByIdclinica($clinica->getIdclinica())->find();
                //Por cada servicio los buscamos en nuestra tabla de visitadetalle para obtener la cantidad de vendidos
                $servicio = new \Servicioclinica();
                foreach ($clinica_servicios as $servicio){
                    $serv = $servicio->getServicio()->toArray(\BasePeer::TYPE_FIELDNAME);
                    $vendidos = \VisitadetalleQuery::create()->select('total')->withColumn('SUM(visitadetalle_cantidad)','total')->filterByIdservicioclinica($servicio->getIdservicioclinica())->useVisitaQuery()->filterByVisitaEstatuspago('pagada')->filterByVisitaCreadaen(array('min' => $post_data['from'].' 00:00:00', 'max' => $post_data['to'].' 23:59:59'))->endUse()->findOne();
                    $serv['vendidos'] = (int)$vendidos;
                    $cli['servicios'][] = $serv;
                }
                $arrServicios[] = $cli;
                
            }
            
            /*
             * Productos
             */
            $arrProductos = array();
            
            $clinicas = \ClinicaQuery::create()->filterByIdclinica($post_data['clinicas'])->find();
            
            $clinica = new \Clinica();
            foreach ($clinicas as $clinica){
                //Por cada clinica obtenemos los servicios
                $cli = $clinica->toArray(\BasePeer::TYPE_FIELDNAME);
                $cli['productos'] = array();
                $clinica_productos = \ProductoclinicaQuery::create()->filterByIdclinica($clinica->getIdclinica())->find();
                //Por cada producto los buscamos en nuestra tabla de visitadetalle para obtener la cantidad de vendidos
                $producto = new \Productoclinica();
                foreach ($clinica_productos as $producto){
                    $prod = $producto->getProducto()->toArray(\BasePeer::TYPE_FIELDNAME);
                    $vendidos = \VisitadetalleQuery::create()->select('total')->withColumn('SUM(visitadetalle_cantidad)','total')->filterByIdproductoclinica($producto->getIdproductoclinica())->useVisitaQuery()->filterByVisitaEstatuspago('pagada')->filterByVisitaCreadaen(array('min' => $post_data['from'].' 00:00:00', 'max' => $post_data['to'].' 23:59:59'))->endUse()->findOne();
                    $prod['vendidos'] = (int)$vendidos;
                    $cli['productos'][] = $prod;
                }
                $arrProductos[] = $cli;
                
            }
            
            /*
             * Membresias
             */
            $arrMembresias = array();
            
            $clinicas = \ClinicaQuery::create()->filterByIdclinica($post_data['clinicas'])->find();
            
            $clinica = new \Clinica();
            foreach ($clinicas as $clinica){
                //Por cada clinica obtenemos los servicios
                $cli = $clinica->toArray(\BasePeer::TYPE_FIELDNAME);
                $cli['membresias'] = array();
                $membresias = \MembresiaQuery::create()->find();
                //Por cada producto los buscamos en nuestra tabla de visitadetalle para obtener la cantidad de vendidos
                $membresia = new \Membresia();
                foreach ($membresias as $membresia){
                    $mem = $membresia->toArray(\BasePeer::TYPE_FIELDNAME);
                    $vendidos = \VisitadetalleQuery::create()->select('total')->withColumn('SUM(visitadetalle_cantidad)','total')->filterByIdmembresia($membresia->getIdmembresia())->useVisitaQuery()->filterByVisitaEstatuspago('pagada')->filterByidclinica($clinica->getIdclinica())->filterByVisitaCreadaen(array('min' => $post_data['from'].' 00:00:00', 'max' => $post_data['to'].' 23:59:59'))->endUse()->findOne();
                    $mem['vendidos'] = (int)$vendidos;
                    $cli['membresias'][] = $mem;
                }
                $arrMembresias[] = $cli;
                
            }
            
            return $this->getResponse()->setContent(json_encode(array('productos' => $arrProductos,'membresias' => $arrMembresias, 'servicios' => $arrServicios, 'clinicas' => $clinicas->toArray(null,false,\BasePeer::TYPE_FIELDNAME))));
            
        }
        
    }
    
    public function clinicasAction()
    {
        
        $session = new \Shared\Session\AouthSession();
        $idrol = $session->getIdrol();
        
        $clinicas = \ClinicaQuery::create()->find();
        
        if($idrol != 1){
            $clinicas = \ClinicaQuery::create()->filterByIdclinica($session->getIdClinica())->find();
        }

        return new ViewModel(array(
            'clinicas' => $clinicas,
            'session' => $session->getData(),
        ));
    }
    
    public function filterempleadoAction(){
        
        $request = $this->getRequest();
        
        if($request->isPost()){
            
            $post_data = $request->getPost();
             
            $empleados = \EmpleadoQuery::create()->filterByIdempleado($post_data['empleados'])->find();
            
            /*
             * Servicios
             */
            
            $arrVendidos = array();

            $empleado = new \Empleado();
            
            $servicios_array = array();
            $servicios_clinica = \ServicioclinicaQuery::create()->groupByIdservicio()->find();
            foreach ($servicios_clinica as $servicio){
                $idservicio = $servicio->getIdservicio();
                $servicios_array[$idservicio] = array(
                    'servicio_nombre' => $servicio->getServicio()->getServicioNombre(),
                    'vendidos' => 0,
                );
            }
            
            /*
             * Membresias
             */
            
            $membresias_array = array();
            $membresias = \MembresiaQuery::create()->find();
            $membresia = new \Membresia();
            foreach ($membresias as $membresia){
                $idmembresia = $membresia->getIdmembresia();
                $membresias_array[$idmembresia] = array(
                    'membresia_nombre' => $membresia->getMembresiaNombre(),
                    'vendidos' => 0,
                );
            }
            
            /*
             * Productos
             */
            
            $productos_array = array();
            $productos_clinica = \ProductoclinicaQuery::create()->groupByIdproducto()->find();
            $producto = new \Productoclinica();
            foreach ($productos_clinica as $producto){
                $idproducto = $producto->getIdproducto();
                $productos_array[$idproducto] = array(
                    'producto_nombre' => $producto->getProducto()->getProductoNombre(),
                    'vendidos' => 0,
                );
            }

            foreach ($empleados as $empleado){
                $emp['idempleado'] = $empleado->getIdempleado();
                $emp['empleado_nombre'] = $empleado->getEmpleadoNombre();
                $emp['servicios'] = $servicios_array;
                $emp['membresias'] = $membresias_array;
                $emp['productos'] = $productos_array;
                //Sus visitas
                $visita_detalles_servicios = \VisitadetalleQuery::create()->filterByIdservicioclinica(NULL,\Criteria::NOT_EQUAL)->useVisitaQuery()->filterByVisitaEstatuspago('pagada')->filterByIdempleado($empleado->getIdempleado())->filterByVisitaCreadaen(array('min' => $post_data['from'].' 00:00:00', 'max' => $post_data['to'].' 23:59:59'))->endUse()->find();
                //Comenzamos a itnerar sobre los detalles
                $detalle = new \Visitadetalle();
                foreach ($visita_detalles_servicios as $detalle){
                    $idservicio = $detalle->getServicioclinica()->getIdservicio();
                    $cantidad = (int) $detalle->getVisitadetalleCantidad();
                    $emp['servicios'][$idservicio]['vendidos']+=$cantidad;
                }
                
                $visita_detalles_membresias = \VisitadetalleQuery::create()->filterByIdmembresia(NULL,\Criteria::NOT_EQUAL)->useVisitaQuery()->filterByVisitaEstatuspago('pagada')->filterByIdempleado($empleado->getIdempleado())->filterByVisitaCreadaen(array('min' => $post_data['from'].' 00:00:00', 'max' => $post_data['to'].' 23:59:59'))->endUse()->find();
                //Comenzamos a itnerar sobre los detalles
                $detalle = new \Visitadetalle();
                foreach ($visita_detalles_membresias as $detalle){
                    $idmembresia = $detalle->getIdmembresia();
                    $cantidad = (int) $detalle->getVisitadetalleCantidad();
                    $emp['membresias'][$idmembresia]['vendidos']+=$cantidad;
                }
                
                $visita_detalles_productos = \VisitadetalleQuery::create()->filterByIdproductoclinica(NULL,\Criteria::NOT_EQUAL)->useVisitaQuery()->filterByVisitaEstatuspago('pagada')->filterByIdempleado($empleado->getIdempleado())->filterByVisitaCreadaen(array('min' => $post_data['from'].' 00:00:00', 'max' => $post_data['to'].' 23:59:59'))->endUse()->find();
                //Comenzamos a itnerar sobre los detalles
                $detalle = new \Visitadetalle();
                foreach ($visita_detalles_productos as $detalle){
                    $idproducto = $detalle->getProductoclinica()->getIdproducto();
                    $cantidad = (int) $detalle->getVisitadetalleCantidad();
                    $emp['productos'][$idproducto]['vendidos']+=$cantidad;
                }
                
                $arrVendidos[] = $emp;

            }
            
            return $this->getResponse()->setContent(json_encode(array('vendidos' => $arrVendidos,'empleados' => $empleados->toArray(null,false,\BasePeer::TYPE_FIELDNAME))));

            
        }
        
    }
    public function empleadosAction(){
        
        $session = new \Shared\Session\AouthSession();
        $idrol = $session->getIdrol();
        
        $empleados = \ClinicaempleadoQuery::create()->useEmpleadoQuery()->useEmpleadoaccesoQuery()->filterByIdrol(3)->endUse()->endUse()->groupBy('idempleado')->find();
        
        if($idrol != 1){
            $empleados = \ClinicaempleadoQuery::create()->filterByIdclinica($session->getIdClinica())->useEmpleadoQuery()->useEmpleadoaccesoQuery()->filterByIdrol(3)->endUse()->endUse()->groupBy('idempleado')->find();
        }

        return new ViewModel(array(
            'empleados' => $empleados,
            'session' => $session->getData(),
        ));
    }
}
