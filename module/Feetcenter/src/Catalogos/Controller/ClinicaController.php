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

class ClinicaController extends AbstractActionController
{
    
    public function checkempleadoAction(){
        if($this->params()->fromQuery('idempleado')){
            
            $now = new \DateTime();
            $idempleado = $this->params()->fromQuery('idempleado');
            $result = \VisitaQuery::create()->filterByIdempleado($idempleado)->filterByVisitaFechainicio(array('min' => $now))->toString();
           
            
            
            
            
            return $this->getResponse()->setContent(json_encode($result));
        }
    }
    
    
    public function indexAction()
    {

        
        $collection = \ClinicaQuery::create()->find()->toArray(null, false, \BasePeer::TYPE_FIELDNAME);

        
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
        
        $form = new \Catalogos\Form\ClinicaForm();
        
        //Los empleados(Encargados)
        $encargadosCollection = \EmpleadoaccesoQuery::create()->filterByIdrol(2)->joinEmpleado()->withColumn('empleado_nombre')->find()->toArray(null, false, \BasePeer::TYPE_FIELDNAME);
        $encargados_conclinica = \EncargadoclinicaQuery::create()->find()->toArray(null, false, \BasePeer::TYPE_FIELDNAME);
        $encargados_conclinica_array = array();
        foreach ($encargados_conclinica as $value){
            array_push($encargados_conclinica_array, $value['idempleado']);
        }
        $encargados = array();
        foreach ($encargadosCollection as $encargado){
             if(!in_array($encargado['idempleado'], $encargados_conclinica_array)){
                 array_push($encargados, $encargado);
             }  
        }
        
        //Los empleados(Pedicuristas)
        $empleadosCollection = \EmpleadoaccesoQuery::create()->filterByIdrol(array(3,5))->joinEmpleado()->withColumn('empleado_nombre')->find()->toArray(null, false, \BasePeer::TYPE_FIELDNAME);
        $empleados_conclinica = \ClinicaempleadoQuery::create()->find()->toArray(null, false, \BasePeer::TYPE_FIELDNAME);
        $empleados_conclinica_array = array();
        foreach ($empleados_conclinica as $value){
            array_push($empleados_conclinica_array, $value['idempleado']);
        }
       
        $empleados = array();
        foreach ($empleadosCollection as $empleado){
             if(!in_array($empleado['idempleado'], $empleados_conclinica_array)){
                 array_push($empleados, $empleado);
             }  
        }
        
 

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
                
                $entity = new \Clinica();

                foreach ($form->getData() as $key => $value) {
                    $entity->setByName($key, $value, \BasePeer::TYPE_FIELDNAME);
                }
                
                //Guardamos en nuestra base de datos
                $entity->save();
                
                //Asociamos nuestros productos,insumos y servicios a la nueva clinica
                //Productos
                $productos = \ProductoQuery::create()->find();
                foreach ($productos as $producto){
                    $producto_clinica = new \Productoclinica();
                    $producto_clinica->setIdproducto($producto->getIdproducto())
                                     ->setIdclinica($entity->getIdclinica())
                                     ->setProductoclinicaExistencia(0)
                                     ->setProductoclinicaMinimo(0)
                                     ->setProductoclinicaMaximo(0)
                                     ->setProductoclinicaReorden(0)
                                     ->save();
                }
                
                //Insumos
                $insumos = \InsumoQuery::create()->find();
                foreach ($insumos as $inusmo){
                    $insumo_clinica = new \Insumoclinica();
                    $insumo_clinica->setIdinsumo($inusmo->getIdinsumo())
                                     ->setIdclinica($entity->getIdclinica())
                                     ->setInsumoclinicaExistencia(0)
                                     ->setInsumoclinicaMinimo(0)
                                     ->setInsumoclinicaMaximo(0)
                                     ->setInsumoclinicaReorden(0)
                                     ->save();
                }
                
                //Servicios
                $servicios = \ServicioQuery::create()->find();
                $servicio = new \Servicio();
                foreach ($servicios as $servicio){
                    $servicio_clinica = new \Servicioclinica();
                    $servicio_clinica->setIdservicio($servicio->getIdservicio())
                                     ->setIdclinica($entity->getIdclinica())
                                     ->setServicioclinicaPrecio(0)
                                     ->save();
                }
                
                //Membresias
                $membresias = \MembresiaQuery::create()->find();
                $membresia = new \Membresia();
                foreach ($membresias as $membresia){
                    $membresia_clinica = new \Membresiaclinica();
                    $membresia_clinica->setIdmembresia($membresia->getIdmembresia())
                                      ->setIdclinica($entity->getIdclinica())
                                      ->setMembresiaclinicaPrecio(0)
                                      ->save();
                }
                
               
                //Deespues de guardar nuestra clinica guardamos nuestros encargados y empleados
                if(isset($post_data['clinica_encargado']) && !empty($post_data['clinica_encargado'])){
                    //Por cada encargado, los vamos a registrar tanto en encargado como en empleado, pero son su rol correspondiente
                    if(is_array($post_data['clinica_encargado'])){
                        foreach ($post_data['clinica_encargado'] as $encargado){
                            //Lo agregamos como encargado
                            $encargado_clinica = new \Encargadoclinica();
                            $encargado_clinica->setIdclinica($entity->getIdclinica());
                            $encargado_clinica->setIdempleado($encargado);
                            $encargado_clinica->save();
                            //Lo agregamos como empleado
                            $encargado_empleado = new \Clinicaempleado();
                            $encargado_empleado->setIdclinica($entity->getIdclinica());
                            $encargado_empleado->setIdempleado($encargado);
                            $encargado_empleado->save();
                        }
                    }else{
                        
                        //Lo agregamos como encargado
                        $encargado_clinica = new \Encargadoclinica();
                        $encargado_clinica->setIdclinica($entity->getIdclinica());
                        $encargado_clinica->setIdempleado($post_data['clinica_encargado']);
                        $encargado_clinica->save();
                        //Lo agregamos como empleado
                        $encargado_empleado = new \Clinicaempleado();
                        $encargado_empleado->setIdclinica($entity->getIdclinica());
                        $encargado_empleado->setIdempleado($post_data['clinica_encargado']);      
                        $encargado_empleado->save();
                    }
                }
                
                if(isset($post_data['clinica_empleado']) && !empty($post_data['clinica_empleado'])){
                    //Por cada encargado, los vamos a registrar tanto en encargado como en empleado, pero son su rol correspondiente
                    if(is_array($post_data['clinica_empleado'])){
                        foreach ($post_data['clinica_empleado'] as $empleado){
                            //Lo agregamos como empleado
                            $empleado_clinica = new \Clinicaempleado();
                            $empleado_clinica->setIdclinica($entity->getIdclinica());
                            $empleado_clinica->setIdempleado($empleado);
                            $empleado_clinica->save();
                        }
                    }else{
                        //Lo agregamos como empleado
                        $empleado_clinica = new \Clinicaempleado();
                        $empleado_clinica->setIdclinica($entity->getIdclinica());
                        $empleado_clinica->setIdempleado($post_data['clinica_empleado']);
                        $empleado_clinica->save();
                    }
                }
                
                //Lo valores popr defecto de la configuracion
                $configuracion = new \Configuracion();
                $configuracion->setIdclinica($entity->getIdclinica())
                              ->setConfiguracionNumerocancelaciones(3)
                              ->setConfiguracionValormaximocancelacion(500)
                              ->setConfiguracionHastacuantosdias(30)
                              ->save();

                //Agregamos un mensaje
                $this->flashMessenger()->addSuccessMessage('Registro guardado exitosamente!');
                
                //Redireccionamos a nuestro list
                return $this->redirect()->toRoute('catalogos/clinica');

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
        if(!\ClinicaQuery::create()->filterByIdclinica($id)->exists()){
            $id =0;
        }
        //Si es incorrecto redireccionavos al action nuevo
        if (!$id) {
            return $this->redirect()->toRoute('catalogos/insumo');
        }

            //Instanciamos nuestro lugar
            $entity = \ClinicaQuery::create()->findPk($id);
            
            //Instanciamos nuestro formulario
            $form = new \Catalogos\Form\ClinicaForm();
            
            //Los empleados(Encargados)
            $encargadosCollection = \EmpleadoaccesoQuery::create()->filterByIdrol(2)->joinEmpleado()->withColumn('empleado_nombre')->find()->toArray(null, false, \BasePeer::TYPE_FIELDNAME); 
            $encargados_conclinica = \EncargadoclinicaQuery::create()->find()->toArray(null, false, \BasePeer::TYPE_FIELDNAME);
            $encargados_conclinica_array = array();
            foreach ($encargados_conclinica as $value){
                array_push($encargados_conclinica_array, $value['idempleado']);
            }
            $encargados = array();
            foreach ($encargadosCollection as $encargado){
                 if(!in_array($encargado['idempleado'], $encargados_conclinica_array)){
                     array_push($encargados, $encargado);
                 }  
            }
            
            //Los empleados(Pedicuristas)
            $empleadosCollection = \EmpleadoaccesoQuery::create()->filterByIdrol(array(3,5))->joinEmpleado()->withColumn('empleado_nombre')->find()->toArray(null, false, \BasePeer::TYPE_FIELDNAME);
            $empleados_conclinica = \ClinicaempleadoQuery::create()->find()->toArray(null, false, \BasePeer::TYPE_FIELDNAME);
            $empleados_conclinica_array = array();
            foreach ($empleados_conclinica as $value){
                array_push($empleados_conclinica_array, $value['idempleado']);
            }
            
            $empleados = array();
            foreach ($empleadosCollection as $empleado){
                 if(!in_array($empleado['idempleado'], $empleados_conclinica_array)){
                     array_push($empleados, $empleado);
                 }  
            }
            
            //Los encargados asignados
            $clinica_encargados = \EncargadoclinicaQuery::create()->filterByIdclinica($entity->getIdclinica())->find();
  
            $clinica_encargados_array = array();
            $clinica_encargados_ids_array = array();
            foreach ($clinica_encargados as $clinica_encargado){
                $idempleado = $clinica_encargado->getIdEmpleado();
                $empleado = \EmpleadoQuery::create()->findPk($idempleado)->toArray(\BasePeer::TYPE_FIELDNAME);
                $clinica_encargados_ids_array[] = $empleado['idempleado'];
                $clinica_encargados_array[] = $empleado;
            }
            
            
            //Los empleados
            $clinica_empleados = $entity->getClinicaempleados();
            $clinica_empleados_array = array();
            foreach ($clinica_empleados as $clinica_empleado){
                $empleado = $clinica_empleado->getEmpleado()->toArray(\BasePeer::TYPE_FIELDNAME);
                if(!in_array($empleado['idempleado'], $clinica_encargados_ids_array)){
                     $clinica_empleados_array[] = $empleado;
                } 
            }
                        
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
                    
                    //Los empleados y los encargados
                    $clinica_encargados = \EncargadoclinicaQuery::create()->filterByIdclinica($entity->getIdclinica())->find();
                    $clinica_encargados->delete();
                    
                    if(isset($post_data['clinica_encargado']) && !empty($post_data['clinica_encargado'])){
                       
                        //Por cada encargado, los vamos a registrar tanto en encargado como en empleado, pero son su rol correspondiente
                        if(is_array($post_data['clinica_encargado'])){
                            foreach ($post_data['clinica_encargado'] as $encargado){
                                //Lo agregamos como encargado
                                $encargado_clinica = new \Encargadoclinica();
                                $encargado_clinica->setIdclinica($entity->getIdclinica());
                                $encargado_clinica->setIdempleado($encargado);
                                $encargado_clinica->save();
                                //Lo agregamos como empleado
                                $encargado_empleado = new \Clinicaempleado();
                                $encargado_empleado->setIdclinica($entity->getIdclinica());
                                $encargado_empleado->setIdempleado($encargado);
                                $encargado_empleado->save();
                            }
                        }else{
                            //Lo agregamos como encargado
                            $encargado_clinica = new \Encargadoclinica();
                            $encargado_clinica->setIdclinica($entity->getIdclinica());
                            $encargado_clinica->setIdempleado($post_data['clinica_encargado']);
                            
                            $encargado_clinica->save();
                             
                            //Lo agregamos como empleado
                            $encargado_empleado = new \Clinicaempleado();
                            $encargado_empleado->setIdclinica($entity->getIdclinica());
                            $encargado_empleado->setIdempleado($post_data['clinica_encargado']);
                            $encargado_empleado->save();
                        }
                    }
                    
                    $clinica_empleados = $entity->getClinicaempleados();
                    $clinica_empleados->delete();
                    
                    if(isset($post_data['clinica_empleado']) && !empty($post_data['clinica_empleado'])){
                        //Por cada encargado, los vamos a registrar tanto en encargado como en empleado, pero son su rol correspondiente
                        if(is_array($post_data['clinica_empleado'])){
                            foreach ($post_data['clinica_empleado'] as $empleado){
                                //Lo agregamos como empleado
                                $empleado_clinica = new \Clinicaempleado();
                                $empleado_clinica->setIdclinica($entity->getIdclinica());
                                $empleado_clinica->setIdempleado($empleado);
                                $empleado_clinica->save();
                            }
                        }else{
                            //Lo agregamos como empleado
                            $empleado_clinica = new \Clinicaempleado();
                            $empleado_clinica->setIdclinica($entity->getIdclinica());
                            $empleado_clinica->setIdempleado($post_data['clinica_empleado'])    ;
                            $empleado_clinica->save();
                        }
                    }

                    //Agregamos un mensaje
                    $this->flashMessenger()->addSuccessMessage('Registro guardado exitosamente!');

                    //Redireccionamos a nuestro list
                    return $this->redirect()->toRoute('catalogos/clinica');

                }else{
                    
                }  
            }
            
            
            return new ViewModel(array(
                'id'  => $id,
                'form' => $form,
                'empleados' => $empleados,
                'encargados' => $encargados,
                'clinica_empleados' => $clinica_empleados_array,
                'clinica_encargados' => $clinica_encargados_array,
            ));
        

    }
}
