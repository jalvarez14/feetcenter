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

class MetaempleadoController extends AbstractActionController
{
    
    
    
    
    public function indexAction()
    {

        
        $collection = \MetaempleadoQuery::create()->find()->toArray(null, false, \BasePeer::TYPE_FIELDNAME);

        
        return new ViewModel(array(
            'collection'   => $collection,
            'successMessages' => $this->flashMessenger()->getSuccessMessages(),
        ));
        
        return new ViewModel();
    }
    
    public function nuevoAction()
    {
        
        $request = $this->getRequest();
        $session = new \Shared\Session\AouthSession();
        if(in_array($session->getIdrol(),array(6))){ 
            $this->getResponse()->setStatusCode(404);
            return; 
        }
        $form = new \Catalogos\Form\MetaempleadoForm();
        
        //regresamoe el listado de las las clinicas para asignar meta
        $empleadosCollection = \EmpleadoQuery::create()->withColumn("empleado_nombre")->filterByIdempleado(1, \Criteria::NOT_EQUAL)->find()->toArray(null, false, \BasePeer::TYPE_FIELDNAME);
                
        $empleados = array();
        foreach ($empleadosCollection as $empleado){
             
                 array_push($empleados, $empleado);
               
        }
        
 

        if ($request->isPost()){
            
            $post_data = $request->getPost();
            
            $entity = new \Metaempleado();
            foreach ($post_data as $k => $v){
                $entity->setByName($k, $v, \BasePeer::TYPE_FIELDNAME);
            }
             $entity->save();
            //Le ponemos los datos a nuestro formulario
            $form->setData($post_data);
            
            //Validamos nuestro formulario
            if ($form->isValid()) {
                
                

                foreach ($form->getData() as $key => $value) {
                    $entity->setByName($key, $value, \BasePeer::TYPE_FIELDNAME);
                }
                
                //Guardamos en nuestra base de datos
                $entity->save();
                
               
                //Agregamos un mensaje
                $this->flashMessenger()->addSuccessMessage('Registro guardado exitosamente!');
                
                //Redireccionamos a nuestro list
                return $this->redirect()->toRoute('catalogos/metaempleado');

            }
        }
        
        return new ViewModel(array(
            'encargados' => $encargados,
            'form' => $form,
            'empleados' => $empleados,
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
            if(!\ClinicaQuery::create()->filterByIdclinica($id)->exists()){
                $id =0;
            }
            
            //Si es incorrecto redireccionavos al action nuevo
            if (!$id) {
                return $this->redirect()->toRoute('catalogos/clinica');
            }
            
            //Instanciamos nuestro lugar
            $entity = \ClinicaQuery::create()->findPk($id);
            
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
        $session = new \Shared\Session\AouthSession();
        if(in_array($session->getIdrol(),array(6))){ 
            $this->getResponse()->setStatusCode(404);
            return; 
        }
        //Cachamos el valor desde nuestro params
        $id = (int) $this->params()->fromRoute('id');
        //Verificamos que el Id lugar que se quiere modificar exista
        if(!\MetaempleadoQuery::create()->filterByIdmetaempleado($id)->exists()){
            $id =0;
        }
        //Si es incorrecto redireccionavos al action nuevo
        if (!$id) {
            return $this->redirect()->toRoute('catalogos/metaempleado');
        }

            //Instanciamos nuestro lugar
            $entity = \MetaempleadoQuery::create()->findPk($id);
            
            //Instanciamos nuestro formulario
            $form = new \Catalogos\Form\MetaempleadoForm();
            
            //regresamoe el listado de las las clinicas para asignar meta
        $empleadosCollection = \EmpleadoQuery::create()->withColumn("empleado_nombre")->filterByIdempleado(1, \Criteria::NOT_EQUAL)->find()->toArray(null, false, \BasePeer::TYPE_FIELDNAME);
                
        $empleados = array();
        foreach ($empleadosCollection as $empleado){
             
                 array_push($empleados, $empleado);
               
        }
                        
            //Le ponemos los datos de nuestro lugar a nuestro formulario
            $form->setData($entity->toArray(\BasePeer::TYPE_FIELDNAME));
            
            if ($request->isPost()) { //Si hicieron POST
                
                $post_data = $request->getPost();
               
               
            
            //$entity = new \Metaempleado();
            foreach ($post_data as $k => $v){
                $entity->setByName($k, $v, \BasePeer::TYPE_FIELDNAME);
            }
             $entity->save();
                
                //Le ponemos los datos a nuestro formulario
                $form->setData($post_data);
                
                //Validamos nuestro formulario
                if($form->isValid()){
                    
                    
                    
                    
                    //Agregamos un mensaje
                    $this->flashMessenger()->addSuccessMessage('Registro guardado exitosamente!');

                    //Redireccionamos a nuestro list
                    return $this->redirect()->toRoute('catalogos/metaempleado');

                }else{
                    
                }  
            }
            $idempleado2 = $entity->toArray();
          $idempleado= $idempleado2['Idempleado'];
          
            return new ViewModel(array(
                'id'  => $id,
                'form' => $form,
                'empleados' => $empleados,
                'encargados' => $encargados,
                'clinica_empleados' => $clinica_empleados_array,
                'clinica_encargados' => $clinica_encargados_array,
                'empleados' => $empleados,
                 'entidad' => $idempleado,
            ));
        

    }
}
