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

class ExistenciasController extends AbstractActionController
{
    public function indexAction()
    {
        
        $collection = array();
         
        $productoclinicas = \ProductoclinicaQuery::create()->filterByIdclinica(1)->withColumn('SUM(productoclinica_existencia)','total_existencias')->groupBy('idproducto')->find();
        foreach ($productoclinicas as $productoclinica){
            $tmp['id'] = $productoclinica->getIdproductoclinica();
            $tmp['tipo'] = 'producto';
            $tmp['nombre'] = $productoclinica->getProducto()->getProductoNombre();
            $tmp['existencias'] = (int)$productoclinica->getVirtualColumn('total_existencias');
            $collection[] = $tmp;
        }
        
        $insumoclinicas = \InsumoclinicaQuery::create()->filterByIdclinica(1)->withColumn('SUM(insumoclinica_existencia)','total_existencias')->groupBy('idinsumo')->find();
        foreach ($insumoclinicas as $insumoclinica){
            $tmp['id'] = $insumoclinica->getIdinsumoclinica();
            $tmp['tipo'] = 'insumo';
            $tmp['nombre'] = $insumoclinica->getInsumo()->getInsumoNombre();
            $tmp['existencias'] = (int)$insumoclinica->getVirtualColumn('total_existencias');
            $collection[] = $tmp;
        }

        return new ViewModel(array(
            'collection' => $collection,
            'successMessages' => $this->flashMessenger()->getSuccessMessages(),
        ));
    }
    
    public function nuevoAction(){
        
        $request = $this->request;
        $sesion = new \Shared\Session\AouthSession();
        
        if(in_array($sesion->getIdrol(),array(6))){ 
            $this->getResponse()->setStatusCode(404);
            return; 
        }
        
        if($this->params()->fromQuery('html')){
            
            $id = $this->params()->fromQuery('id');
            $type = $this->params()->fromQuery('type');
            
            $viewModel = new ViewModel();
            $viewModel->setTerminal(true);
            return $viewModel;
        }
        
        if($request->getPost()){
            $post_data = $request->getPost();
            
            if($post_data['type'] == 'insumo'){
                
                $insumo_clinica = \InsumoclinicaQuery::create()->findPk($post_data['id']);
                
                //Cremoa una nueva compra
                $compra = new \Compra();
                $compra->setIdProveedor(1) // Corresponde al proveedor feetcenter
                        ->setIdempleado($sesion->getIdempleado())
                        ->setCompraCreadaen(new \DateTime)
                        ->setCompraFecha(new \DateTime)
                        ->setCompraImporte(0)
                        ->setCompraStatus('pagada')
                        ->setCompraPagaren(new \DateTime)
                        ->save();
      
                $compra_detalle = new \Compradetalle();
                $compra_detalle->setIdcompra($compra->getIdcompra())
                               ->setCompradetalleCantidad($post_data['cantidad'])
                               ->setCompradetalleCostounitario(0)
                               ->setIdinsumoclinica($post_data['id'])
                               ->save();
                
                //Sumamos en insumoclinica
                $existencias_acuales = $insumo_clinica->getInsumoclinicaExistencia();
                $nueva_existencia = $existencias_acuales + $post_data['cantidad'];
                $insumo_clinica->setInsumoclinicaExistencia($nueva_existencia);
                $insumo_clinica->save();
                
                //Agregamos un mensaje
                $this->flashMessenger()->addSuccessMessage('Registro guardado exitosamente!');
                
                return $this->getResponse()->setContent(\Zend\Json\Json::encode(array('response' => true)));
                
            }else if($post_data['type'] == 'producto'){
                
                $producto_clinica = \ProductoclinicaQuery::create()->findPk($post_data['id']);
               
                //Cremoa una nueva compra
                $compra = new \Compra();
                $compra->setIdProveedor(1) // Corresponde al proveedor feetcenter
                        ->setIdempleado($sesion->getIdempleado())
                        ->setCompraCreadaen(new \DateTime)
                        ->setCompraFecha(new \DateTime)
                        ->setCompraImporte(0)
                        ->setCompraStatus('pagada')
                        ->setCompraPagaren(new \DateTime)
                        ->save();
                       
                $compra_detalle = new \Compradetalle();
                $compra_detalle->setIdcompra($compra->getIdcompra())
                               ->setCompradetalleCantidad($post_data['cantidad'])
                               ->setCompradetalleCostounitario(0)
                               ->setIdproductoclinica($post_data['id'])
                               ->save();
                
                //Sumamos en insumoclinica
                $existencias_acuales = $producto_clinica->getProductoclinicaExistencia();
                $nueva_existencia = $existencias_acuales + $post_data['cantidad'];
                $producto_clinica->setProductoclinicaExistencia($nueva_existencia);
                $producto_clinica->save();
                
                //Agregamos un mensaje
                $this->flashMessenger()->addSuccessMessage('Registro guardado exitosamente!');
                
                return $this->getResponse()->setContent(\Zend\Json\Json::encode(array('response' => true)));
            }

        }
                
        
    }

}
