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

class MembresiaController extends AbstractActionController
{
    public function indexAction()
    {
        $collection = \MembresiaQuery::create()->find();
       
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
        $form = new \Catalogos\Form\MembresiaForm();
        
        if ($request->isPost()){
            
            $post_data = $request->getPost();
            
            foreach ($post_data as $k => $v){
                if(empty($v)){
                    unset($post_data[$k]);
                }
            }
             
            //Le ponemos los datos a nuestro formulario
            $form->setData($post_data);
            

                $entity = new \Membresia();
            
                foreach($post_data as $key => $value){
                    if(\MembresiaPeer::getTableMap()->hasColumn($key)){
                        $entity->setByName($key, $value, \BasePeer::TYPE_FIELDNAME);
                    }
                }
                 
                //Guardamos en nuestra base de datos
                $entity->save();
      
                
                
                //Lo registramos en la sucursal matriz
                $clinicas = \ClinicaQuery::create()->find()->toArray(null,false,  \BasePeer::TYPE_FIELDNAME);
                foreach ($clinicas as $clinica){
                   $membresia_clinica = new \Membresiaclinica();
                   $membresia_clinica->setIdmembresia($entity->getIdmembresia())
                                     ->setIdclinica($clinica['idclinica']) //Corresponde a la clinica matriz
                                     ->setMembresiaclinicaPrecio(0)
                                     ->save();
                 }
                
                //Agregamos un mensaje
                $this->flashMessenger()->addSuccessMessage('Registro guardado exitosamente!');
                
                //Redireccionamos a nuestro list
                return $this->redirect()->toRoute('catalogos/membresias');

            
        }
        return new ViewModel(array(
            'form' => $form,
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
             
            //Cachamos el valor desde nuestro params
            $id = (int) $this->params()->fromRoute('id');
            //Verificamos que el Id lugar que se quiere modificar exista
            if(!\MembresiaQuery::create()->filterByIdmembresia($id)->exists()){
                $id =0;
            }
            //Si es incorrecto redireccionavos al action nuevo
            if (!$id) {
                return $this->redirect()->toRoute('catalogos/membresias');
            }
            
            //Instanciamos nuestro lugar
            $entity = \MembresiaQuery::create()->findPk($id);
            
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
        if(!\MembresiaQuery::create()->filterByIdmembresia($id)->exists()){
            $id =0;
        }
        //Si es incorrecto redireccionavos al action nuevo
        if (!$id) {
            return $this->redirect()->toRoute('catalogos/membresias');
        }

            //Instanciamos nuestro lugar
            $entity = \MembresiaQuery::create()->findPk($id);
            
            //Instanciamos nuestro formulario
            $form = new \Catalogos\Form\MembresiaForm();

            //Le ponemos los datos de nuestro lugar a nuestro formulario
            $form->setData($entity->toArray(\BasePeer::TYPE_FIELDNAME));
            
            if ($request->isPost()) { //Si hicieron POST
                
                $post_data = $request->getPost();
               
                //Le ponemos los datos a nuestro formulario
                $form->setData($post_data);
                
                //Validamos nuestro formulario
                if($form->isValid()){
                    
                    foreach($post_data as $key => $value){
                        if(\MembresiaPeer::getTableMap()->hasColumn($key)){
                            $entity->setByName($key, $value, \BasePeer::TYPE_FIELDNAME);
                        }
                    }
                    
                    //Guardamos en nuestra base de datos
                    $entity->save();

                    //Agregamos un mensaje
                    $this->flashMessenger()->addSuccessMessage('Registro guardado exitosamente!');

                    //Redireccionamos a nuestro list
                    return $this->redirect()->toRoute('catalogos/membresias');

                }else{
                    
                }  
            }
            
            return new ViewModel(array(
                'id'  => $id,
                'form' => $form,
            ));
        

    }

}
