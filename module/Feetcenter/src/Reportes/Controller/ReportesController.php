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
                    $vendidos = \VisitadetalleQuery::create()->select('total')->withColumn('SUM(visitadetalle_cantidad)','total')->filterByIdservicioclinica($servicio->getIdservicioclinica())->useVisitaQuery()->filterByVisitaCreadaen(array('min' => $post_data['from'].' 00:00:00', 'max' => $post_data['to'].' 23:59:59'))->endUse()->findOne();
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
                    $vendidos = \VisitadetalleQuery::create()->select('total')->withColumn('SUM(visitadetalle_cantidad)','total')->filterByIdproductoclinica($producto->getIdproductoclinica())->useVisitaQuery()->filterByVisitaCreadaen(array('min' => $post_data['from'].' 00:00:00', 'max' => $post_data['to'].' 23:59:59'))->endUse()->findOne();
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
                    $vendidos = \VisitadetalleQuery::create()->select('total')->withColumn('SUM(visitadetalle_cantidad)','total')->filterByIdmembresia($membresia->getIdmembresia())->useVisitaQuery()->filterByidclinica($clinica->getIdclinica())->filterByVisitaCreadaen(array('min' => $post_data['from'].' 00:00:00', 'max' => $post_data['to'].' 23:59:59'))->endUse()->findOne();
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
}
