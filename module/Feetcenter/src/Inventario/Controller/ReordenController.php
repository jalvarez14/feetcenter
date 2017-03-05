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

class ReordenController extends AbstractActionController
{
    public function indexAction()
    {
         
        $collection = array();
        
        $productos = \ProductoQuery::create()->find();
        foreach ($productos as $producto){
            $tmp['id'] = $producto->getIdproducto();
            $tmp['tipo'] = 'producto';
            $tmp['nombre'] = $producto->getProductoNombre();
            $tmp['descripcion'] = !is_null($producto->getProductoDescripcion()) ? $producto->getProductoDescripcion() : 'N/D';
            $collection[] = $tmp;
        }
        
        $insumos = \InsumoQuery::create()->find();
        foreach ($insumos as $insumo){
            $tmp['id'] = $insumo->getIdInsumo();
            $tmp['tipo'] = 'insumo';
            $tmp['nombre'] = $insumo->getInsumoNombre();
            $tmp['descripcion'] = !is_null($insumo->getInsumoDescripcion()) ? $insumo->getInsumoDescripcion(): 'N/D';
            $collection[] = $tmp;
        }
        
        $servicios = \ServicioQuery::create()->find();
        foreach ($servicios as $servicio){
            $tmp['id'] = $servicio->getIdservicio();
            $tmp['tipo'] = 'servicio';
            $tmp['nombre'] = $servicio->getServicioNombre();
            $tmp['descripcion'] = !is_null($servicio->getServicioDescripcion()) ? $servicio->getServicioDescripcion(): 'N/D';
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
            
            $id   = $this->params()->fromQuery('id');
            $type = $this->params()->fromQuery('type');

            $reorden_array = array();
            if($sesion->getIdrol() == 1 ){
                $clinicas = \ClinicaQuery::create()->find()->toArray(null,false,\BasePeer::TYPE_FIELDNAME);
                if($type == 'insumo'){
                    $insumos_clinica = \InsumoclinicaQuery::create()->filterByIdinsumo($id)->find();
                    foreach ($insumos_clinica as $insumo_clinica){
                        $idclinica = $insumo_clinica->getIdclinica();
                        $tmp['id'] = $insumo_clinica->getIdinsumoclinica();
                        $tmp['nombre_clinica'] = $insumo_clinica->getClinica()->getClinicaNombre();
                        $tmp['min'] = $insumo_clinica->getInsumoclinicaMinimo();
                        $tmp['max'] = $insumo_clinica->getInsumoclinicaMaximo();
                        $tmp['reorden'] = $insumo_clinica->getInsumoclinicaReorden();
                        $reorden_array[$idclinica] = $tmp;
                        $servicio = false;
                    }
                }else if($type == 'producto'){
                    $productos_clinica = \ProductoclinicaQuery::create()->filterByIdproducto($id)->find();
                    foreach ($productos_clinica as $producto_clinica){
                        $idclinica = $producto_clinica->getIdclinica();
                        $tmp['id'] = $producto_clinica->getIdproductoclinica();
                        $tmp['nombre_clinica'] = $producto_clinica->getClinica()->getClinicaNombre();
                        $tmp['min'] = $producto_clinica->getProductoclinicaMinimo();
                        $tmp['max'] = $producto_clinica->getProductoclinicaMaximo();
                        $tmp['reorden'] = $producto_clinica->getProductoclinicaReorden();
                        $reorden_array[$idclinica] = $tmp;
                        $servicio = false;
                    }
                }else if($type == 'servicio'){
                    $servicios_clinica = \ServicioclinicaQuery::create()->filterByIdservicio($id)->find();
                    $servicio_clinica = new \Servicioclinica();
                    foreach ($servicios_clinica as $servicio_clinica){
                        $idclinica = $servicio_clinica->getIdclinica();
                        $tmp['id'] = $servicio_clinica->getIdservicioclinica();
                        $tmp['nombre_clinica'] = $servicio_clinica->getClinica()->getClinicaNombre();
                        $tmp['precio'] = $servicio_clinica->getServicioclinicaPrecio();
                        $reorden_array[$idclinica] = $tmp;
                        $servicio = true;
                    }
                }
                
            }else{
                $clinicas = \ClinicaQuery::create()->filterByIdclinica($sesion->getIdClinica())->find()->toArray(null,false,\BasePeer::TYPE_FIELDNAME);
                if($type == 'insumo'){
                    $insumos_clinica = \InsumoclinicaQuery::create()->filterByIdinsumo($id)->filterByIdclinica($sesion->getIdClinica())->find();
                    foreach ($insumos_clinica as $insumo_clinica){
                        $idclinica = $insumo_clinica->getIdclinica();
                        $tmp['id'] = $insumo_clinica->getIdinsumoclinica();
                        $tmp['nombre_clinica'] = $insumo_clinica->getClinica()->getClinicaNombre();
                        $tmp['min'] = $insumo_clinica->getInsumoclinicaMinimo();
                        $tmp['max'] = $insumo_clinica->getInsumoclinicaMaximo();
                        $tmp['reorden'] = $insumo_clinica->getInsumoclinicaReorden();
                        $reorden_array[$idclinica] = $tmp;
                        $servicio = false;
                    }
                }else if($type == 'producto'){
                    $productos_clinica = \ProductoclinicaQuery::create()->filterByIdproducto($id)->filterByIdclinica($sesion->getIdClinica())->find();
                    foreach ($productos_clinica as $producto_clinica){
                        $idclinica = $producto_clinica->getIdclinica();
                        $tmp['id'] = $producto_clinica->getIdproductoclinica();
                        $tmp['nombre_clinica'] = $producto_clinica->getClinica()->getClinicaNombre();
                        $tmp['min'] = $producto_clinica->getProductoclinicaMinimo();
                        $tmp['max'] = $producto_clinica->getProductoclinicaMaximo();
                        $tmp['reorden'] = $producto_clinica->getProductoclinicaReorden();
                        $reorden_array[$idclinica] = $tmp;
                        $servicio = false;
                    }
                }else if($type == 'servicio'){
                    $servicios_clinica = \ServicioclinicaQuery::create()->filterByIdservicio($id)->filterByIdclinica($sesion->getIdClinica())->find();
                    $servicio_clinica = new \Servicioclinica();
                    foreach ($servicios_clinica as $servicio_clinica){
                        $idclinica = $servicio_clinica->getIdclinica();
                        $tmp['id'] = $servicio_clinica->getIdservicioclinica();
                        $tmp['nombre_clinica'] = $servicio_clinica->getClinica()->getClinicaNombre();
                        $tmp['precio'] = $servicio_clinica->getServicioclinicaPrecio();
                        $reorden_array[$idclinica] = $tmp;
                        $servicio = true;
                    }
                }
            }
           
            $viewModel = new ViewModel();
            $viewModel->setVariables(array(
                'type' => $type,
                'id' => $id,
                'servicio' => $servicio,
                'clinicas' => $clinicas,
                'reorden_array' => $reorden_array
            ));
            $viewModel->setTerminal(true);
            return $viewModel;
        }
        
        if($request->isPost()){
            $post_data = $request->getPost();
            
            $type = $post_data['type'];
            $id   = $post_data['id'];
            
            if($type=='insumo'){
                //Comenzamos a itinerar
                foreach ($post_data['reorden'] as $key => $value){
                    $insumo_clinica = \InsumoclinicaQuery::create()->filterByIdinsumo($id)->filterByIdclinica($key)->findOne();
                    $insumo_clinica->setInsumoclinicaMinimo($value['min'])
                                   ->setInsumoclinicaMaximo($value['max'])
                                   ->setInsumoclinicaReorden($value['reorden'])
                                   ->save();
                }
            }elseif($type=='producto'){
                //Comenzamos a itinerar
                foreach ($post_data['reorden'] as $key => $value){
                    $producto_clinica = \ProductoclinicaQuery::create()->filterByIdproducto($id)->filterByIdclinica($key)->findOne();
                    $producto_clinica->setProductoclinicaMinimo($value['min'])
                                   ->setProductoclinicaMaximo($value['max'])
                                   ->setProductoclinicaReorden($value['reorden'])
                                   ->save();
                }
                
            }elseif($type=='servicio') {
                foreach ($post_data['reorden'] as $key => $value){
                    $servicio_clinica = \ServicioclinicaQuery::create()->filterByIdservicio($id)->filterByIdclinica($key)->findOne();
                    $servicio_clinica->setServicioclinicaPrecio($value['precio'])
                                     ->save();
                }
            }
            
             //Agregamos un mensaje
            $this->flashMessenger()->addSuccessMessage('Registro guardado exitosamente!');
                
            return $this->getResponse()->setContent(\Zend\Json\Json::encode(array('response' => true)));
            
           
        }
    }
}
