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

class EmpleadoController extends AbstractActionController
{
    public function indexAction()
    {
        $collection = \EmpleadoQuery::create()->find()->toArray(null, false, \BasePeer::TYPE_FIELDNAME);

        
        return new ViewModel(array(
            'collection'   => $collection,
            'successMessages' => $this->flashMessenger()->getSuccessMessages(),
        ));
        
        return new ViewModel();
    }
    
    public function nuevoAction()
    {
        
        $request = $this->getRequest();
        
        //Los roles
        $query = \RolQuery::create()->find()->toArray(null,false,  \BasePeer::TYPE_FIELDNAME);
        $roles = array();
        foreach ($query as $rol){
            $idrol = $rol['idrol'];
            $roles[$idrol] = $rol['rol_nombre'];
        }
        
        $form = new \Catalogos\Form\EmpleadoForm($roles);
        
        if ($request->isPost()){
            
            $post_data = $request->getPost();

            foreach ($post_data as $k => $v){
                if(empty($v)){
                    unset($post_data[$k]);
                }
            }
            
            
            //Le ponemos los datos a nuestro formulario
            unset($post_data['empleado_fechanacimiento']);
            $form->setData($post_data);
            
            //Validamos nuestro formulario
            if ($form->isValid()) {
                
                $entity = new \Empleado();
                
                //La fecha de creacion del empleado
                $entity->setEmpleadoRegistradoen(new \DateTime());
               
                //Recorremos nuestro formulario y seteamos los valores a nuestro objeto Lugar
                    foreach ($form->getData() as $key => $value){
                        if($key == 'empleado_password'){
                            $entity->setByName($key, md5($value), \BasePeer::TYPE_FIELDNAME);
                        }else{
                            $entity->setByName($key, $value, \BasePeer::TYPE_FIELDNAME);
                        }
                         
                    }
                
                //Fecha de nacimiento
                $entity->setEmpleadoFechanacimiento($post_data['empleado_fechanacimiento_submit']);
                
                $entity->save();
                
                //Los archivos
                if(isset($_FILES['empleado_comprobantedomiclio']) && !empty($_FILES['empleado_comprobantedomiclio']['name'])){
                        //Si tiene una foto guurdada anteriormente
                        $upload_folder ='/img/empleados/comprobantes/';
                        $tipo_archivo = $_FILES['empleado_comprobantedomiclio']['type']; $tipo_archivo = explode('/', $tipo_archivo); $tipo_archivo = $tipo_archivo[1];  
                        $nombre_archivo = 'comprobante_domicilio_'.$entity->getIdempleado().'.'.$tipo_archivo;
                        $tmp_archivo = $_FILES['empleado_comprobantedomiclio']['tmp_name'];
                        $archivador = $upload_folder.$nombre_archivo;
                        if(!move_uploaded_file($tmp_archivo, $_SERVER["DOCUMENT_ROOT"].$archivador)) {
                            return $this->getResponse()->setContent(\Zend\Json\Json::encode(array('response' => false, 'msg' => 'Ocurrio un error al subir el archivo. No pudo guardarse.', 'status' => 'error')));
                        } 
                        $entity->setEmpleadoComprobantedomiclio($archivador);
                }
                
                if(isset($_FILES['empleado_comprobanteidentificacion']) && !empty($_FILES['empleado_comprobanteidentificacion']['name'])){
                        $upload_folder ='/img/empleados/comprobantes/';
                        $tipo_archivo = $_FILES['empleado_comprobanteidentificacion']['type']; $tipo_archivo = explode('/', $tipo_archivo); $tipo_archivo = $tipo_archivo[1];  
                        $nombre_archivo = 'comprobante_identificacion_'.$entity->getIdempleado().'.'.$tipo_archivo;
                        $tmp_archivo = $_FILES['empleado_comprobanteidentificacion']['tmp_name'];
                        $archivador = $upload_folder.$nombre_archivo;
                        if(!move_uploaded_file($tmp_archivo, $_SERVER["DOCUMENT_ROOT"].$archivador)) {
                            return $this->getResponse()->setContent(\Zend\Json\Json::encode(array('response' => false, 'msg' => 'Ocurrio un error al subir el archivo. No pudo guardarse.', 'status' => 'error')));
                        } 
                        $entity->setEmpleadoComprobanteidentificacion($archivador);
                }
                
                if(isset($_FILES['empleado_foto']) && !empty($_FILES['empleado_foto']['name'])){
                        
                        $upload_folder ='/img/empleados/';
                        $tipo_archivo = $_FILES['empleado_foto']['type']; $tipo_archivo = explode('/', $tipo_archivo); $tipo_archivo = $tipo_archivo[1];  
                        $nombre_archivo = 'empleado_foto_'.$entity->getIdempleado().'.'.$tipo_archivo;
                        $tmp_archivo = $_FILES['empleado_foto']['tmp_name'];
                        $archivador = $upload_folder.$nombre_archivo;
                        if(!move_uploaded_file($tmp_archivo, $_SERVER["DOCUMENT_ROOT"].$archivador)) {
                            return $this->getResponse()->setContent(\Zend\Json\Json::encode(array('response' => false, 'msg' => 'Ocurrio un error al subir el archivo. No pudo guardarse.', 'status' => 'error')));
                        } 
                        $entity->setEmpleadoFoto($archivador);
                }
                                
                //Guardamos en nuestra base de datos
                $entity->save();
                
                //Agregamos un mensaje
                $this->flashMessenger()->addSuccessMessage('Registro guardado exitosamente!');
                
                //Redireccionamos a nuestro list
                return $this->redirect()->toRoute('catalogos/empleado');

            }
        }
        return new ViewModel(array(
            'form' => $form,
        ));

    }
    
    public function eliminarAction(){
        
        $request = $this->getRequest();
        
        if($request->isPost()){
             
            $id = $this->params()->fromRoute('id');
            
            //Verificamos que el Id lugar que se quiere modificar exista
            if(!\EmpleadoQuery::create()->filterByIdempleado($id)->exists()){
                $id =0;
            }
            
            //Si es incorrecto redireccionavos al action nuevo
            if (!$id) {
                return $this->redirect()->toRoute('catalogos/empleado');
            }
            
            //Instanciamos nuestro lugar
            $entity = \EmpleadoQuery::create()->findPk($id);
            

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
        if(!\EmpleadoQuery::create()->filterByIdempleado($id)->exists()){
            $id =0;
        }
        //Si es incorrecto redireccionavos al action nuevo
        if (!$id) {
            return $this->redirect()->toRoute('catalogos/insumo');
        }

            //Instanciamos nuestro lugar
            $entity = \EmpleadoQuery::create()->findPk($id);
            
            //Los roles
            $query = \RolQuery::create()->find()->toArray(null,false,  \BasePeer::TYPE_FIELDNAME);
            $roles = array();
            foreach ($query as $rol){
                $idrol = $rol['idrol'];
                $roles[$idrol] = $rol['rol_nombre'];
            }

            $form = new \Catalogos\Form\EmpleadoForm($roles);

            //Le ponemos los datos de nuestro lugar a nuestro formulario
            $form->setData($entity->toArray(\BasePeer::TYPE_FIELDNAME));
            
            if ($request->isPost()) { //Si hicieron POST
                
                $post_data = $request->getPost();
               
                
                
                foreach ($post_data as $k => $v){
                    if(empty($v)){
                        unset($post_data[$k]);
                    }
                }
                
                //Le ponemos los datos a nuestro formulario
                $form->setData($post_data);
                
                //Validamos nuestro formulario
                if($form->isValid()){
     
                    $empleado_comprobantedomicilio = $entity->getEmpleadoComprobantedomiclio();
                    $empleado_comprobanteidentificacion = $entity->getEmpleadoComprobanteidentificacion();
                    $empleado_foto = $entity->getEmpleadoFoto();
                    
                    //Recorremos nuestro formulario y seteamos los valores a nuestro objeto Lugar
                    foreach ($form->getData() as $key => $value){
                        if($key == 'empleado_password'){
                            $entity->setByName($key, md5($value), \BasePeer::TYPE_FIELDNAME);
                        }elseif ($key != 'empleado_fechanacimiento') {
                            $entity->setByName($key, $value, \BasePeer::TYPE_FIELDNAME);
                        }
                    }
                    $entity->setEmpleadoComprobantedomiclio($empleado_comprobantedomicilio);
                    $entity->setEmpleadoComprobanteidentificacion($empleado_comprobanteidentificacion);
                    $entity->setEmpleadoFoto($empleado_foto);
                    
                    //Fecha de nacimiento
                    $entity->setEmpleadoFechanacimiento($post_data['empleado_fechanacimiento_submit']);
                    
                    //Los archivos
                    if(isset($_FILES['empleado_comprobantedomiclio']) && !empty($_FILES['empleado_comprobantedomiclio']['name'])){
                            $upload_folder ='/img/empleados/comprobantes/';
                            $tipo_archivo = $_FILES['empleado_comprobantedomiclio']['type']; $tipo_archivo = explode('/', $tipo_archivo); $tipo_archivo = $tipo_archivo[1];  
                            $nombre_archivo = 'comprobante_domicilio_'.$entity->getIdempleado().'.'.$tipo_archivo;
                            $tmp_archivo = $_FILES['empleado_comprobantedomiclio']['tmp_name'];
                            $archivador = $upload_folder.$nombre_archivo;
                            if(!move_uploaded_file($tmp_archivo, $_SERVER["DOCUMENT_ROOT"].$archivador)) {
                                return $this->getResponse()->setContent(\Zend\Json\Json::encode(array('response' => false, 'msg' => 'Ocurrio un error al subir el archivo. No pudo guardarse.', 'status' => 'error')));
                            } 
                            $entity->setEmpleadoComprobantedomiclio($archivador);
                            
                    }else{
                       
                        //Si fue eliminado
                        if(isset($post_data['empleado_comprobantedomiclio_submit']) && isset($post_data['empleado_comprobantedomiclio_submit']) == 'delete'){
                             
                            if(!is_null($entity->getEmpleadoComprobantedomiclio())){
                                
                                unlink($_SERVER['DOCUMENT_ROOT'].$entity->getEmpleadoComprobantedomiclio());
                            }
                           
                            $entity->setEmpleadoComprobantedomiclio(NULL);
                        }
                        
                    }

                    if(isset($_FILES['empleado_comprobanteidentificacion']) && !empty($_FILES['empleado_comprobanteidentificacion']['name'])){
                        //Si tiene una foto guurdada anteriormente
                            if(!is_null($entity->getEmpleadoComprobanteidentificacion())){
                                unlink($_SERVER['DOCUMENT_ROOT'].$entity->getEmpleadoComprobanteidentificacion());
                            }
                            $upload_folder ='/img/empleados/comprobantes/';
                            $tipo_archivo = $_FILES['empleado_comprobanteidentificacion']['type']; $tipo_archivo = explode('/', $tipo_archivo); $tipo_archivo = $tipo_archivo[1];  
                            $nombre_archivo = 'comprobante_identificacion_'.$entity->getIdempleado().'.'.$tipo_archivo;
                            $tmp_archivo = $_FILES['empleado_comprobanteidentificacion']['tmp_name'];
                            $archivador = $upload_folder.$nombre_archivo;
                            if(!move_uploaded_file($tmp_archivo, $_SERVER["DOCUMENT_ROOT"].$archivador)) {
                                return $this->getResponse()->setContent(\Zend\Json\Json::encode(array('response' => false, 'msg' => 'Ocurrio un error al subir el archivo. No pudo guardarse.', 'status' => 'error')));
                            } 
                            $entity->setEmpleadoComprobanteidentificacion($archivador);
                    }else{
                        //Si fue eliminado
                        if(isset($post_data['empleado_comprobanteidentificacion_submit']) && isset($post_data['empleado_comprobanteidentificacion_submit']) == 'delete'){
                            if(!is_null($entity->getEmpleadoComprobanteidentificacion())){
                                unlink($_SERVER['DOCUMENT_ROOT'].$entity->getEmpleadoComprobanteidentificacion());
                            }
                            $entity->setEmpleadoComprobanteidentificacion(NULL);
                        }
                    }

                    if(isset($_FILES['empleado_foto']) && !empty($_FILES['empleado_foto']['name'])){
                            //Si tiene una foto guurdada anteriormente
                            if(!is_null($entity->getEmpleadoFoto())){
                                unlink($_SERVER['DOCUMENT_ROOT'].$entity->getEmpleadoFoto());
                            }
                            $upload_folder ='/img/empleados/';
                            $tipo_archivo = $_FILES['empleado_foto']['type']; $tipo_archivo = explode('/', $tipo_archivo); $tipo_archivo = $tipo_archivo[1];  
                            $nombre_archivo = 'empleado_foto_'.$entity->getIdempleado().'.'.$tipo_archivo;
                            $tmp_archivo = $_FILES['empleado_foto']['tmp_name'];
                            $archivador = $upload_folder.$nombre_archivo;
                            if(!move_uploaded_file($tmp_archivo, $_SERVER["DOCUMENT_ROOT"].$archivador)) {
                                return $this->getResponse()->setContent(\Zend\Json\Json::encode(array('response' => false, 'msg' => 'Ocurrio un error al subir el archivo. No pudo guardarse.', 'status' => 'error')));
                            } 
                            $entity->setEmpleadoFoto($archivador);
                    }else{
                        //Si fue eliminado
                        if(isset($post_data['empleado_foto_submit']) && isset($post_data['empleado_foto_submit']) == 'delete'){
                            if(!is_null($entity->getEmpleadoFoto())){
                                unlink($_SERVER['DOCUMENT_ROOT'].$entity->getEmpleadoFoto());
                            }
                            $entity->setEmpleadoFoto(NULL);
                        }
                        
                    }
                    
                    //Guardamos en nuestra base de datos
                    $entity->save();

                    //Agregamos un mensaje
                    $this->flashMessenger()->addSuccessMessage('Registro guardado exitosamente!');

                    //Redireccionamos a nuestro list
                    return $this->redirect()->toRoute('catalogos/empleado');

                }else{
                    
                }  
            }
            
            return new ViewModel(array(
                'id'  => $id,
                'form' => $form,
                'entity' => $entity->toArray(\BasePeer::TYPE_FIELDNAME),
            ));
        

    }

}
