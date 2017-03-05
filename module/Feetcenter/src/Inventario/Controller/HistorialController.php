<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Inventario\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class HistorialController extends AbstractActionController
{
    
    public function filterbyclinicaAction(){
        
        $idrol = (int)$this->params()->fromQuery('idrol');
        $idclinica = $this->params()->fromQuery('idclinica');
        $fecha = date_create_from_format('j/m/Y', $this->params()->fromQuery('fecha'));
        $fecha = date_format($fecha, 'Y-m-d');

        
        $session = new \Shared\Session\AouthSession();
        if($idrol !== 3){ //Para administradores
            
            //Filtramos por producto
            $arrProductos = array();
            $productos = \ProductoclinicaQuery::create()->filterByIdclinica($idclinica)->find();
            $producto = new \Productoclinica();
            foreach ($productos as $producto){
                $tmp['idproductoclinica'] = $producto->getIdproductoclinica();
                $tmp['producto_nombre'] = $producto->getProducto()->getProductoNombre();
                //Comenzamos a itinerar sobre los empleados para conocer cuantos producto ha vendido cada empleado
                    $tmp['empleados'] = array();
                    $exist = \ProductoinventarioQuery::create()->filterByIdproductoclinica($producto->getIdproductoclinica())->filterByProductoinventarioFecha($fecha)->exists();
                    if($exist)
                    {
                    $historial = \ProductoinventarioQuery::create()->filterByIdproductoclinica($producto->getIdproductoclinica())->filterByProductoinventarioFecha($fecha)->orderByIdproductoinventario('desc')->findOne();

                    $tmp['inventario'] =  $historial->getProductoinventarioCantidad();
                    
                    }
                    else
                    {
                        $tmp['inventario']=0;
                    }
                
                $arrProductos[] = $tmp;
            }
            
            
            return $this->getResponse()->setContent(json_encode(array('productos' => $arrProductos )));
        }else{
            
            $arrServicios = array();
            $empleados = \ClinicaempleadoQuery::create()->filterByIdempleado($session->getIdempleado())->joinEmpleado()->withColumn('empleado_nombre')->find();
            

            //Filtramos por producto
            $arrProductos = array();
            $productos = \ProductoclinicaQuery::create()->filterByIdclinica($idclinica)->find();
            $producto = new \Productoclinica();
            foreach ($productos as $producto){
                $tmp['idproductoclinica'] = $producto->getIdproductoclinica();
                $tmp['producto_nombre'] = $producto->getProducto()->getProductoNombre();
                 $tmp['empleados'] = array();
                    $exist = \ProductoinventarioQuery::create()->filterByIdproductoclinica($producto->getIdproductoclinica())->filterByProductoinventarioFecha($fecha)->exists();
                    if($exist)
                    {
                    $historial = \ProductoinventarioQuery::create()->filterByIdproductoclinica($producto->getIdproductoclinica())->filterByProductoinventarioFecha($fecha)->orderByIdproductoinventario('desc')->findOne();

                    $tmp['inventario'] =  $historial->getProductoinventarioCantidad();
                    
                    }
                    else
                    {
                        $tmp['inventario']=0;
                    }
                
                
                $arrProductos[] = $tmp;
            }
           
            
            return $this->getResponse()->setContent(json_encode(array('productos' => $arrProductos)));
            
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

        return new ViewModel(array(
            'clinicas' => $clinicas,
            'productos'=> $productos,
            'session' => json_encode($session->getData()),
        ));
    }
}
