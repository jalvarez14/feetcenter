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

class RolController extends AbstractActionController
{
    public function indexAction()
    {
        $collection = \RolQuery::create()->find();
        
        //Le damos formato a nuesto listado
        $arr = array();
        foreach ($collection as $entity){
            $tmp['idrol'] = $entity->getIdRol();
            $tmp['rol_nombre'] = $entity->getRolNombre();
            $tmp['rol_descripcion'] = $entity->getRolDescripcion();
            $tmp['rol_recursos'] = '';
            $recursos = $entity->getRolrecursos();
            $count_recursos = $recursos->count();
            $count = 0;
            foreach ($recursos as $recurso){
                $count++;
                $tmp['rol_recursos'].=$recurso->getRecurso()->getRecursoNombre();
                if($count<$count_recursos){
                    $tmp['rol_recursos'].=', ';
                }
                
            }
            $arr[]=$tmp;
        }
       
        return new ViewModel(array(
            'collection'   => $arr,
            'successMessages' => $this->flashMessenger()->getSuccessMessages(),
        ));
        
        return new ViewModel();
    }
    
    public function nuevoAction()
    {
        
        $session = new \Shared\Session\AouthSession();
        if(in_array($session->getIdrol(),array(6))){ 
            $this->getResponse()->setStatusCode(404);
            return; 
        }
        
        $request = $this->getRequest();
        
        $form = new \Catalogos\Form\RolForm();
        //Recursos Collection
        $recursos_collection = \RecursoQuery::create()->find()->toArray(null, false, \BasePeer::TYPE_FIELDNAME);
        if ($request->isPost()){
            
            $post_data = $request->getPost();
                     
            foreach ($post_data as $k => $v){
                if(empty($v)){
                    unset($post_data[$k]);
                }
            }
            
            //Le ponemos los datos a nuestro formulario
            $form->setData($post_data);
            
            //Validamos nuestro formulario
            if ($form->isValid()) {
                
                $entity = new \Rol();

                foreach ($form->getData() as $key => $value) {
                    $entity->setByName($key, $value, \BasePeer::TYPE_FIELDNAME);
                }
                
                //Guardamos en nuestra base de datos
                $entity->save();
                
                //Verificamos si asignaron recursos al rol y guardamos en base de datos
                if(isset($post_data['recursos'])){
                    foreach ($post_data['recursos'] as $recurso){
                        $rol_recurso = new \Rolrecurso();
                        $rol_recurso->setIdrecurso($recurso);
                        $rol_recurso->setIdrol($entity->getIdrol());
                        $rol_recurso->save();
                    }
                }

                //Agregamos un mensaje
                $this->flashMessenger()->addSuccessMessage('Registro guardado exitosamente!');
                
                //Redireccionamos a nuestro list
                return $this->redirect()->toRoute('catalogos/rol');

            }
        }
        return new ViewModel(array(
            'recursos' => $recursos_collection,
            'form' => $form,
        ));

    }
    
    public function eliminarAction(){
        
        $session = new \Shared\Session\AouthSession();
        if(in_array($session->getIdrol(),array(6))){ 
            $this->getResponse()->setStatusCode(404);
            return; 
        }
        
        $request = $this->getRequest();
        
        if($request->isPost()){
             
            $id = $this->params()->fromRoute('id');
            
            //Verificamos que el Id lugar que se quiere modificar exista
            if(!\RolQuery::create()->filterByIdrol($id)->exists()){
                $id =0;
            }
            
            //Si es incorrecto redireccionavos al action nuevo
            if (!$id) {
                return $this->redirect()->toRoute('catalogos/insumo');
            }
            
            //Instanciamos nuestro lugar
            $entity = \RolQuery::create()->findPk($id);
            
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
        $session = new \Shared\Session\AouthSession();
        if(in_array($session->getIdrol(),array(6))){ 
            $this->getResponse()->setStatusCode(404);
            return; 
        }
        
        $request = $this->getRequest();
        
        //Cachamos el valor desde nuestro params
        $id = (int) $this->params()->fromRoute('id');
        //Verificamos que el Id lugar que se quiere modificar exista
        if(!\RolQuery::create()->filterByIdrol($id)->exists()){
            $id =0;
        }
        //Si es incorrecto redireccionavos al action nuevo
        if (!$id) {
            return $this->redirect()->toRoute('catalogos/rol');
        }

            //Instanciamos nuestro lugar
            $entity = \RolQuery::create()->findPk($id);
            $recursos_collection = \RecursoQuery::create()->find()->toArray(null, false, \BasePeer::TYPE_FIELDNAME);
            $recursos = $entity->getRolrecursos()->toArray(null, false, \BasePeer::TYPE_FIELDNAME);

            //Instanciamos nuestro formulario
            $form = new \Catalogos\Form\RolForm();

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
                    
                    //Los recursos
                    $rol_recurso = $entity->getRolrecursos();
                    $rol_recurso->delete();
                    
                    if (isset($post_data['recursos'])) {
                        foreach ($post_data['recursos'] as $recurso) {
                            $rol_recurso = new \Rolrecurso();
                            $rol_recurso->setIdrecurso($recurso);
                            $rol_recurso->setIdrol($entity->getIdrol());
                            $rol_recurso->save();
                        }
                    }

                    //Agregamos un mensaje
                    $this->flashMessenger()->addSuccessMessage('Registro guardado exitosamente!');

                    //Redireccionamos a nuestro list
                    return $this->redirect()->toRoute('catalogos/rol');

                }else{
                    
                }  
            }
            
            return new ViewModel(array(
                'id'  => $id,
                'form' => $form,
                'recursos' => $recursos_collection,
                'recursos_checked' => $recursos,
            ));
        

    }

}
