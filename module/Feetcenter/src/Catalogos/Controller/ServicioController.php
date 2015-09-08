<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Catalogos\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class ServicioController extends AbstractActionController
{
    public function indexAction()
    {
        $collection = \InsumoQuery::create()->find()->toArray(null, false, \BasePeer::TYPE_FIELDNAME);

        
        return new ViewModel(array(
            'collection'   => $collection,
            'successMessages' => $this->flashMessenger()->getSuccessMessages(),
        ));
        
        return new ViewModel();
    }
    
    public function nuevoAction()
    {
        
        $request = $this->getRequest();
        
        $form = new \Catalogos\Form\ServicioForm();
        //Insumos
        $insumos = \InsumoQuery::create()->find()->toArray(null,false,  \BasePeer::TYPE_FIELDNAME);
        
        if ($request->isPost()){
            
            $post_data = $request->getPost();
            
            foreach ($post_data as $k => $v){
                if(empty($v) && $v!="0" && $v!="1"){
                    unset($post_data[$k]);
                }
            }
            
            
            //Le ponemos los datos a nuestro formulario
            $form->setData($post_data);
      
            
            //Validamos nuestro formulario
            if ($form->isValid()) {
                
                $entity = new \Servicio();

                foreach ($form->getData() as $key => $value) {
                    $entity->setByName($key, $value, \BasePeer::TYPE_FIELDNAME);
                }
                
                $entity->setServicioGeneraingreso($post_data['servicio_generaingreso']);
                $entity->setServicioGeneracomision($post_data['servicio_generacomision']);
               
                if($entity->getServicioGeneracomision()){
                    $entity->setServicioTipocomision($post_data['servicio_tipocomision']);
                    $entity->setServicioComision($post_data['servicio_comision']);
                }
                
                //Guardamos en nuestra base de datos
                $entity->save();
                
                //Los insumos del servicio
                if(isset($post_data['insumo'])){
                    foreach ($post_data['insumo'] as $key => $value){
                        $servicio_insumo = new \Servicioinsumo();
                        $servicio_insumo->setIdservicio($entity->getIdservicio())
                                        ->setIdinsumo($key)
                                        ->setServicioinsumoCantidad($value)
                                        ->save();
                    }
                }
                
                //Agregamos un mensaje
                $this->flashMessenger()->addSuccessMessage('Registro guardado exitosamente!');
                
                //Redireccionamos a nuestro list
                return $this->redirect()->toRoute('catalogos/servicio');

            }
             echo '<pre>';var_dump($form->getMessages());echo'<pre>';exit();
        }
        
        return new ViewModel(array(
            'form' => $form,
            'insumos' => $insumos,
        ));

    }
    
    public function eliminarAction(){
        
        $request = $this->getRequest();
        
        if($request->isPost()){
             
            $id = $this->params()->fromRoute('id');
            
            //Verificamos que el Id lugar que se quiere modificar exista
            if(!\InsumoQuery::create()->filterByIdinsumo($id)->exists()){
                $id =0;
            }
            
            //Si es incorrecto redireccionavos al action nuevo
            if (!$id) {
                return $this->redirect()->toRoute('catalogos/insumo');
            }
            
            //Instanciamos nuestro lugar
            $entity = \InsumoQuery::create()->findPk($id);
            
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
    
    public function editarAction()
    {   
        $request = $this->getRequest();
        
        //Cachamos el valor desde nuestro params
        $id = (int) $this->params()->fromRoute('id');
        //Verificamos que el Id lugar que se quiere modificar exista
        if(!\InsumoQuery::create()->filterByIdinsumo($id)->exists()){
            $id =0;
        }
        //Si es incorrecto redireccionavos al action nuevo
        if (!$id) {
            return $this->redirect()->toRoute('catalogos/insumo');
        }

            //Instanciamos nuestro lugar
            $entity = \InsumoQuery::create()->findPk($id);
            
            //Instanciamos nuestro formulario
            $form = new \Catalogos\Form\InsumoForm();

            //Le ponemos los datos de nuestro lugar a nuestro formulario
            $form->setData($entity->toArray(\BasePeer::TYPE_FIELDNAME));
            
            if ($request->isPost()) { //Si hicieron POST
                
                $post_data = $request->getPost();
                
                //Le ponemos los datos a nuestro formulario
                $form->setData($post_data);
                
                //Validamos nuestro formulario
                if($form->isValid()){
                    
                    //Recorremos nuestro formulario y seteamos los valores a nuestro objeto Lugar
                    foreach ($form->getData() as $key => $value){
                        $entity->setByName($key, $value, \BasePeer::TYPE_FIELDNAME);
                    }
                    
                    //Guardamos en nuestra base de datos
                    $entity->save();

                    //Agregamos un mensaje
                    $this->flashMessenger()->addSuccessMessage('Registro guardado exitosamente!');

                    //Redireccionamos a nuestro list
                    return $this->redirect()->toRoute('catalogos/insumo');

                }else{
                    
                }  
            }
            
            return new ViewModel(array(
                'id'  => $id,
                'form' => $form,
            ));
        

    }

}
