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

class ProductoController extends AbstractActionController
{
    public function indexAction()
    {
        $collection = \ProductoQuery::create()->find()->toArray(null, false, \BasePeer::TYPE_FIELDNAME);

        
        return new ViewModel(array(
            'collection'   => $collection,
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
        
        $form = new \Catalogos\Form\ProductoForm();
        
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
                
                $entity = new \Producto();

                foreach ($form->getData() as $key => $value) {
                    $entity->setByName($key, $value, \BasePeer::TYPE_FIELDNAME);
                }
                $entity->setProductoGeneraingreso($post_data['producto_generaingreso']);
                $entity->setProductoGeneracomision($post_data['producto_generacomision']);
                
                if($entity->getProductoGeneracomision()){
                    $entity->setProductoTipocomision($post_data['producto_tipocomision']);
                    $entity->setProductoGeneracomision($post_data['producto_comision']);
                }
                
                //Guard amos en nuestra base de datos
                $entity->save();
                
                //Los archivos
                if(isset($_FILES['producto_foto']) && !empty($_FILES['producto_foto']['name'])){
                        
                        $upload_folder ='/img/productos/';
                        $tipo_archivo = $_FILES['producto_foto']['type']; $tipo_archivo = explode('/', $tipo_archivo); $tipo_archivo = $tipo_archivo[1];  
                        $nombre_archivo = 'producto_foto_'.$entity->getIdproducto().'.'.$tipo_archivo;
                        $tmp_archivo = $_FILES['producto_foto']['tmp_name'];
                        $archivador = $upload_folder.$nombre_archivo;
                        if(!move_uploaded_file($tmp_archivo, $_SERVER["DOCUMENT_ROOT"].$archivador)) {
                            return $this->getResponse()->setContent(\Zend\Json\Json::encode(array('response' => false, 'msg' => 'Ocurrio un error al subir el archivo. No pudo guardarse.', 'status' => 'error')));
                        } 
                        $entity->setProductoFotografia($archivador);
                        $entity->save();
                }
                
                //Guard amos en nuestra base de datos
                
                
                
                //Tambien lo guardamos todas las clinicas
                $clinicas = \ClinicaQuery::create()->find()->toArray(null,false,  \BasePeer::TYPE_FIELDNAME);
                foreach ($clinicas as $clinica){
                    $producto_clinica = new \Productoclinica();
                    $producto_clinica->setIdproducto($entity->getIdproducto())
                                 ->setIdclinica($clinica['idclinica']) //Corresponde a la clinica matriz
                                 ->setProductoclinicaExistencia(0)
                                 ->setProductoclinicaMinimo(0)
                                 ->setProductoclinicaMaximo(0)
                                 ->setProductoclinicaReorden(0)
                                 ->save();
                }

                //Agregamos un mensaje
                $this->flashMessenger()->addSuccessMessage('Registro guardado exitosamente!');
                
                //Redireccionamos a nuestro list
                return $this->redirect()->toRoute('catalogos/producto');

            }
        }
        return new ViewModel(array(
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
            if(!\ProductoQuery::create()->filterByIdproducto($id)->exists()){
                $id =0;
            }
            
            //Si es incorrecto redireccionavos al action nuevo
            if (!$id) {
                return $this->redirect()->toRoute('catalogos/producto');
            }
            
            //Instanciamos nuestro lugar
            $entity = \ProductoQuery::create()->findPk($id);
            
            $entity->delete();
            
            //Agregamos un mensaje
            $this->flashMessenger()->addSuccessMessage('Registro eliminado exitosamente!');

            //Redireccionamos a nuestro list
            return $this->getResponse()->setContent(\Zend\Json\Json::encode(array('response' => true)));

        }
        
        if($this->params()->fromQuery('html')){
            
            $idproducto = $this->params()->fromQuery('idproducto');
            //Guardamos en un arreglo todos los productoclinica que correspondan a ese producto
            $producto_clinica_array = array();
            $producto_clinica = \ProductoclinicaQuery::create()->filterByIdproducto($idproducto)->select('idproductoclinica')->find()->toArray();
            
            $viewModel = new ViewModel();
            $viewModel->setTerminal(true);
             
            $can_delete = \VisitadetalleQuery::create()->filterByIdproductoclinica($producto_clinica)->exists();
            
            if($can_delete){
                $msj = 'Lo sentimos, no es posible eliminar el producto ya que este cuenta con registros en el modulo de ventas';
                return $this->getResponse()->setContent($msj);
            }else{
                return $viewModel;
            }
            
            
            
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
        if(!\ProductoQuery::create()->filterByIdproducto($id)->exists()){
            $id =0;
        }
        //Si es incorrecto redireccionavos al action nuevo
        if (!$id) {
            return $this->redirect()->toRoute('catalogos/producto');
        }

            //Instanciamos nuestro lugar
            $entity = \ProductoQuery::create()->findPk($id);
            
            //Instanciamos nuestro formulario
            $form = new \Catalogos\Form\ProductoForm();

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
                    
                    $entity->setProductoGeneraingreso($post_data['producto_generaingreso']);
                    $entity->setProductoGeneracomision($post_data['producto_generacomision']);

                    if($entity->getProductoGeneracomision()){
                        $entity->setProductoTipocomision($post_data['producto_tipocomision']);
                        $entity->setProductoGeneracomision($post_data['producto_comision']);
                    }else{
                        $entity->setProductoTipocomision(NULL);
                        $entity->setProductoGeneracomision(NULL);
                    }
                    
                    if(isset($_FILES['producto_foto']) && !empty($_FILES['producto_foto']['name'])){
                            $upload_folder ='/img/productos/';
                            $tipo_archivo = $_FILES['producto_foto']['type']; $tipo_archivo = explode('/', $tipo_archivo); $tipo_archivo = $tipo_archivo[1];  
                            $nombre_archivo = 'producto_foto_'.$entity->getIdproducto().'.'.$tipo_archivo;
                            $tmp_archivo = $_FILES['producto_foto']['tmp_name'];
                            $archivador = $upload_folder.$nombre_archivo;
                            if(!move_uploaded_file($tmp_archivo, $_SERVER["DOCUMENT_ROOT"].$archivador)) {
                                return $this->getResponse()->setContent(\Zend\Json\Json::encode(array('response' => false, 'msg' => 'Ocurrio un error al subir el archivo. No pudo guardarse.', 'status' => 'error')));
                            } 
                            $entity->setProductoFotografia($archivador);
                    }else{
                        //Si fue eliminado
                        if(isset($post_data['producto_foto_submit']) && isset($post_data['producto_foto_submit']) == 'delete'){
                            if(!is_null($entity->getProductoFotografia())){
                                unlink($_SERVER['DOCUMENT_ROOT'].$entity->getProductoFotografia());
                            }
                            $entity->setProductoFotografia(NULL);
                        }
                        
                    }
                    
                    //Guardamos en nuestra base de datos
                    $entity->save();
                    

                    //Agregamos un mensaje
                    $this->flashMessenger()->addSuccessMessage('Registro guardado exitosamente!');

                    //Redireccionamos a nuestro list
                    return $this->redirect()->toRoute('catalogos/producto');
                    
                }else{
                    
                }  
            }
            
            return new ViewModel(array(
                'entity' => $entity->toArray(\BasePeer::TYPE_FIELDNAME),
                'id'  => $id,
                'form' => $form,
            ));
        

    }

}
