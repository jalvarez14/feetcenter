<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Compras\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class ComprasController extends AbstractActionController
{
    public function indexAction()
    {
        $collection = \CompraQuery::create()->filterByIdproveedor(1,  \Criteria::NOT_EQUAL)->find();

        
        return new ViewModel(array(
            'collection'   => $collection,
            'successMessages' => $this->flashMessenger()->getSuccessMessages(),
        ));
        
        return new ViewModel();
    }
    
    public function filterbydateAction(){
        
        $request = $this->request;
         if($request->isPost()){
             $post_data = $request->getPost();
             
            $compras = \CompraQuery::create()->filterByIdproveedor(1,  \Criteria::NOT_EQUAL)->joinProveedor()->withColumn('proveedor_nombre')->filterByCompraFecha(array('min' => $post_data['from'],'max' => $post_data['to']))->find()->toArray(null,false,  \BasePeer::TYPE_FIELDNAME);
            
            //Dams formato a la fecha
            foreach ($compras as $key => $value){
                $fecha = new \DateTime($value['compra_fecha']);
                $compras[$key]['compra_fecha'] = $fecha->format('d/m/Y');
            }
            
            return $this->getResponse()->setContent(\Zend\Json\Json::encode($compras));
             
         }
    }
    
    public function nuevoAction()
    {
        $request = $this->getRequest();
        $session = new \Shared\Session\AouthSession();
        if(in_array($session->getIdrol(),array(6))){ 
            $this->getResponse()->setStatusCode(404);
            return; 
        }
        
        //Catalogo de proveedores
        $proveedores = \ProveedorQuery::create()->filterByIdproveedor(1,\Criteria::NOT_EQUAL)->find()->toArray(null,false,  \BasePeer::TYPE_FIELDNAME);
        
        //Catalogo de productos
        $productos = \ProductoQuery::create()->find()->toArray(null,false,  \BasePeer::TYPE_FIELDNAME);
        
        //Catalogo de insumos
        $insumos = \InsumoQuery::create()->find()->toArray(null,false,  \BasePeer::TYPE_FIELDNAME);
        
        if ($request->isPost()){
            
            //Testing (Aqui llamaremos a nuestra sesion)
            $idempelado = \Shared\Session\AouthSession::getIdempleado();
            
            $post_data = $request->getPost();
             
            foreach ($post_data as $k => $v){
                if(empty($v)){
                    unset($post_data[$k]);
                }
            }
            
            $entity = new \Compra();
            
            foreach($post_data as $key => $value){
                if(\CompraPeer::getTableMap()->hasColumn($key) && $key!='compra_fecha' && $key!='compra_pagaren'){
                    $entity->setByName($key, $value, \BasePeer::TYPE_FIELDNAME);
                }
            }
            
            //Setiamos el idempleado que creo la compra
            $entity->setIdempleado($idempelado);
            
            //Setiamos la fecha de creacion
            $currentDate = new \DateTime();
            $entity->setCompraCreadaen($currentDate);
            
            //Setiamos la fecha de la copra y fecha de pago
            $entity->setCompraFecha($post_data['compra_fecha_submit']);
            $entity->setCompraPagaren($post_data['compra_pagaren_submit']);
            
            
            $entity->save();
            
            //El comprobante
            if(isset($_FILES['compra_comprobante']) && !empty($_FILES['compra_comprobante']['name'])){
                //Si tiene una foto guurdada anteriormente
                $upload_folder ='/img/compras/';
                $tipo_archivo = $_FILES['compra_comprobante']['type']; $tipo_archivo = explode('/', $tipo_archivo); $tipo_archivo = $tipo_archivo[1];  
                $nombre_archivo = 'comprobante_compra_'.$entity->getIdcompra().'.'.$tipo_archivo;
                $tmp_archivo = $_FILES['compra_comprobante']['tmp_name'];
                $archivador = $upload_folder.$nombre_archivo;
                if(!move_uploaded_file($tmp_archivo, $_SERVER["DOCUMENT_ROOT"].$archivador)) {
                    return $this->getResponse()->setContent(\Zend\Json\Json::encode(array('response' => false, 'msg' => 'Ocurrio un error al subir el archivo. No pudo guardarse.', 'status' => 'error')));
                } 
                $entity->setCompraComprobante($archivador);
                $entity->save();
            }
           
            //Ahora los detalles
            
            //Los productos
            if(isset($post_data['producto'])){
                foreach($post_data['producto'] as $producto){
                    $productoclinica_entity = \ProductoclinicaQuery::create()->filterByIdclinica(1)->filterByIdproducto($producto['id'])->findOne();
                    $producto_entity = \ProductoQuery::create()->findPk($producto['id']);
                    //la compra detalle
                    $compra_detalle = new \Compradetalle();
                    $compra_detalle->setIdcompra($entity->getIdcompra());
                    $compra_detalle->setIdproductoclinica($productoclinica_entity->getIdproductoclinica());
                    $compra_detalle->setCompradetalleCantidad($producto['cantidad']);
                    $compra_detalle->setCompradetalleCostounitario($producto['costo']);
                    $compra_detalle->setCompradetalleSubtotal($producto['subtotal']);
                    $compra_detalle->save();
                    
                    //Modificamos el costo del producto
                    $producto_entity->setProductoCosto($producto['costo']);
                    $producto_entity->save();
                    
                    //Modificamos las existencias de producto clinica
                    $existencias = $productoclinica_entity->getProductoclinicaExistencia();
                    $nueva_existencia = $existencias + $producto['cantidad'];
                    $productoclinica_entity->setProductoclinicaExistencia($nueva_existencia);
                    $productoclinica_entity->save();

                }
            }
            
            //Los insumos
            if(isset($post_data['insumo'])){
                foreach($post_data['insumo'] as $insumo){
                     
                    $insumoclinica_entity = \InsumoclinicaQuery::create()->filterByIdclinica(1)->filterByIdinsumo($insumo['id'])->findOne();
                    $insumo_entity = \InsumoQuery::create()->findPk($insumo['id']);
                    
                    //la compra detalle
                    $compra_detalle = new \Compradetalle();
                    $compra_detalle->setIdcompra($entity->getIdcompra());
                    $compra_detalle->setIdinsumoclinica($insumoclinica_entity->getIdinsumoclinica());
                    $compra_detalle->setCompradetalleCantidad($insumo['cantidad']);
                    $compra_detalle->setCompradetalleCostounitario($insumo['costo']);
                    $compra_detalle->setCompradetalleSubtotal($insumo['subtotal']);
                     
                    $compra_detalle->save();
                    
                    //Modificamos el costo del producto
                    $insumo_entity->setInsumoCosto($insumo['costo']);
                    $insumo_entity->save();
                    
                    //Modificamos las existencias de producto clinica
                    $existencias = $insumoclinica_entity->getInsumoclinicaExistencia();
                    $nueva_existencia = $existencias + $insumo['cantidad'];
                    $insumoclinica_entity->setInsumoclinicaExistencia($nueva_existencia);
                    $insumoclinica_entity->save();
                }
            }

            //Agregamos un mensaje
            $this->flashMessenger()->addSuccessMessage('Registro guardado exitosamente!');
                
            //Redireccionamos a nuestro list
            return $this->redirect()->toRoute('compras');
            
            
            
            
            
        }
        
        
        return new ViewModel(array(
            'proveedores' => $proveedores,
            'productos' => $productos,
            'insumos' => $insumos,
        ));
    }

    public function eliminarAction(){
        
        $request = $this->getRequest();
        $session = new \Shared\Session\AouthSession();
        if(in_array($session->getIdrol(),array(6))){ 
            $this->getResponse()->setStatusCode(404);
            return; 
        }
        if($request->isPost()){
             
            $id = $this->params()->fromRoute('id');
            
            //Verificamos que el Id lugar que se quiere modificar exista
            if(!\CompraQuery::create()->filterByIdcompra($id)->exists()){
                $id =0;
            }
            
            //Si es incorrecto redireccionavos al action nuevo
            if (!$id) {
                return $this->redirect()->toRoute('compras');
            }
            
            //Instanciamos nuestro lugar
            $entity = \CompraQuery::create()->findPk($id);
            

            $entity->delete();
            
            //Agregamos un mensaje
            $this->flashMessenger()->addSuccessMessage('Registro eliminado exitosamente!');

            //Redireccionamos a nuestro list
            return $this->getResponse()->setContent(\Zend\Json\Json::encode(array('response' => true)));

        }
        
        if($this->params()->fromQuery('html')){
            $viewModel = new ViewModel();
            $viewModel->setTerminal(true);
            return $viewModel;
        }
        
    }
    
    public function editarAction(){
        
        $request = $this->getRequest();
        $session = new \Shared\Session\AouthSession();
        if(in_array($session->getIdrol(),array(6))){ 
            $this->getResponse()->setStatusCode(404);
            return; 
        }
        //Cachamos el valor desde nuestro params
        $id = (int) $this->params()->fromRoute('id');
        //Verificamos que el Id lugar que se quiere modificar exista
        if(!\CompraQuery::create()->filterByIdcompra($id)->exists()){
            $id =0;
        }
        //Si es incorrecto redireccionavos al action nuevo
        if (!$id) {
            return $this->redirect()->toRoute('compras');
        }
        
        $entity = \CompraQuery::create()->findPk($id);
        
        //Catalogo de proveedores
        $proveedores = \ProveedorQuery::create()->find()->toArray(null,false,  \BasePeer::TYPE_FIELDNAME);
        
        //Catalogo de productos
        $productos = \ProductoQuery::create()->find()->toArray(null,false,  \BasePeer::TYPE_FIELDNAME);
        
        //Catalogo de insumos
        $insumos = \InsumoQuery::create()->find()->toArray(null,false,  \BasePeer::TYPE_FIELDNAME);
        
        $compra_detalles = \CompradetalleQuery::create()->filterByIdcompra($entity->getIdcompra())->find();
        
        if ($request->isPost()){
            
            $post_data = $request->getPost();
            
            foreach ($post_data as $k => $v){
                if(empty($v)){
                    unset($post_data[$k]);
                }
            }
            
            foreach($post_data as $key => $value){
                if(\CompraPeer::getTableMap()->hasColumn($key) && $key!='compra_fecha' && $key!='compra_pagaren'){
                    $entity->setByName($key, $value, \BasePeer::TYPE_FIELDNAME);
                }
            }
            
            //Setiamos la fecha de la copra y fecha de pago
            $entity->setCompraFecha($post_data['compra_fecha_submit']);
            $entity->setCompraPagaren($post_data['compra_pagaren_submit']);
            
            $entity->save();
            
            //El comprobante
            if(isset($_FILES['compra_comprobante']) && !empty($_FILES['compra_comprobante']['name'])){
                //Si tiene una foto guurdada anteriormente
                $upload_folder ='/img/compras/';
                $tipo_archivo = $_FILES['compra_comprobante']['type']; $tipo_archivo = explode('/', $tipo_archivo); $tipo_archivo = $tipo_archivo[1];  
                $nombre_archivo = 'comprobante_compra_'.$entity->getIdcompra().'.'.$tipo_archivo;
                $tmp_archivo = $_FILES['compra_comprobante']['tmp_name'];
                $archivador = $upload_folder.$nombre_archivo;
                if(!move_uploaded_file($tmp_archivo, $_SERVER["DOCUMENT_ROOT"].$archivador)) {
                    return $this->getResponse()->setContent(\Zend\Json\Json::encode(array('response' => false, 'msg' => 'Ocurrio un error al subir el archivo. No pudo guardarse.', 'status' => 'error')));
                } 
                $entity->setCompraComprobante($archivador);
                $entity->save();
            }else{
                //Si fue eliminado
                if(isset($post_data['compra_comprobante_submit']) && isset($post_data['compra_comprobante_submit']) == 'delete'){
                    if(!is_null($entity->getCompraComprobante())){
                        unlink($_SERVER['DOCUMENT_ROOT'].$entity->getCompraComprobante());
                    }
                    $entity->setCompraComprobante(NULL);
                    $entity->save();
                }
            }
            
            //Ahora los detalles
            $compra_detalles->delete();
            
            if(isset($post_data['producto'])){
                foreach($post_data['producto'] as $producto){
                    $productoclinica_entity = \ProductoclinicaQuery::create()->filterByIdclinica(1)->filterByIdproducto($producto['id'])->findOne();
                    $producto_entity = \ProductoQuery::create()->findPk($producto['id']);
                    //la compra detalle
                    $compra_detalle = new \Compradetalle();
                    $compra_detalle->setIdcompra($entity->getIdcompra());
                    $compra_detalle->setIdproductoclinica($productoclinica_entity->getIdproductoclinica());
                    $compra_detalle->setCompradetalleCantidad($producto['cantidad']);
                    $compra_detalle->setCompradetalleCostounitario($producto['costo']);
                    $compra_detalle->setCompradetalleSubtotal($producto['subtotal']);
                    $compra_detalle->save();
                    
                    //Modificamos el costo del producto
                    $producto_entity->setProductoCosto($producto['costo']);
                    $producto_entity->save();
                    
                    //Modificamos las existencias de producto clinica
                    $existencias = $productoclinica_entity->getProductoclinicaExistencia();
                    $nueva_existencia = $existencias + $producto['cantidad'];
                    $productoclinica_entity->setProductoclinicaExistencia($nueva_existencia);
                    $productoclinica_entity->save();

                }
            }
            //Los insumos
            if(isset($post_data['insumo'])){
                foreach($post_data['insumo'] as $insumo){
                    $insumoclinica_entity = \InsumoclinicaQuery::create()->filterByIdclinica(1)->filterByIdinsumo($insumo['id'])->findOne();
                    $insumo_entity = \InsumoQuery::create()->findPk($insumo['id']);
                    //la compra detalle
                    $compra_detalle = new \Compradetalle();
                    $compra_detalle->setIdcompra($entity->getIdcompra());
                    $compra_detalle->setIdinsumoclinica($insumoclinica_entity->getIdinsumoclinica());
                    $compra_detalle->setCompradetalleCantidad($insumo['cantidad']);
                    $compra_detalle->setCompradetalleCostounitario($insumo['costo']);
                    $compra_detalle->setCompradetalleSubtotal($insumo['subtotal']);
                    $compra_detalle->save();
                    
                    //Modificamos el costo del producto
                    $insumo_entity->setInsumoCosto($insumo['costo']);
                    $insumo_entity->save();
                    
                    //Modificamos las existencias de producto clinica
                    $existencias = $insumoclinica_entity->getInsumoclinicaExistencia();
                    $nueva_existencia = $existencias + $insumo['cantidad'];
                    $insumoclinica_entity->setInsumoclinicaExistencia($nueva_existencia);
                    $insumoclinica_entity->save();
                }
            }
            
            //Agregamos un mensaje
            $this->flashMessenger()->addSuccessMessage('Registro guardado exitosamente!');
                
            //Redireccionamos a nuestro list
            return $this->redirect()->toRoute('compras');
            
        }
        
        return new ViewModel(array(
            'compra' => $entity,
            'compra_detalles' => $compra_detalles,
            'proveedores' => $proveedores,
            'productos' => $productos,
            'insumos' => $insumos,
        ));
        
    }
}
