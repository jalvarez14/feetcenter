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
        
        $form = new \Catalogos\Form\ClinicaForm();
        
        //Los empleados
        
        //Obtenemos todos los empleados que si tienen asignado una clinica tanto para encargado como para empleado
        $empleado_clinica = \ClinicaempleadoQuery::create()->find()->toArray(null, false, \BasePeer::TYPE_FIELDNAME);
        $empladosconclinica = array();
        foreach ($empleado_clinica as $value){
            array_push($empladosconclinica, $value['idempleado']);
        }

        $empleado_collection = \EmpleadoQuery::create()->find()->toArray(null, false, \BasePeer::TYPE_FIELDNAME);
        $empleados = array();
        foreach ($empleado_collection as $empleado_entity){
             if(!in_array($empleado_entity['idempleado'], $empladosconclinica)){
                 array_push($empleados, $empleado_entity);
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
                
                //Deespues de guardar nuestra clinica guardamos nuestros encargados y empleados
                if(isset($post_data['clinica_encargado']) && !empty($post_data['clinica_encargado'])){
                    //Por cada encargado, los vamos a registrar tanto en encargado como en empleado, pero son su rol correspondiente
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
                        //Modificamos los permisos del usuario en caso
                        $empleado = \EmpleadoQuery::create()->findPk($encargado);
                        $empleado->setIdrol(2); // 2 Corresponde al id del rol de encargado
                        $empleado->save();
                    }
                }
                
                if(isset($post_data['clinica_empleado']) && !empty($post_data['clinica_empleado'])){
                    //Por cada encargado, los vamos a registrar tanto en encargado como en empleado, pero son su rol correspondiente
                    foreach ($post_data['clinica_empleado'] as $empleado){
                        
                        //Lo agregamos como empleado
                        $empleado_clinica = new \Clinicaempleado();
                        $empleado_clinica->setIdclinica($entity->getIdclinica());
                        $empleado_clinica->setIdempleado($empleado);
                        $empleado_clinica->save();
                        //Modificamos los permisos del usuario en caso
                        $empleado = \EmpleadoQuery::create()->findPk($empleado);
                        $empleado->setIdrol(3); // 2 Corresponde al id del rol de pedicurista
                        $empleado->save();
                    }
                }

                //Agregamos un mensaje
                $this->flashMessenger()->addSuccessMessage('Registro guardado exitosamente!');
                
                //Redireccionamos a nuestro list
                return $this->redirect()->toRoute('catalogos/clinica');

            }
        }
        return new ViewModel(array(
            'form' => $form,
            'empleados' => $empleados,
        ));
        
    }
}
