<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Feetcenter\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class MicuentaController extends AbstractActionController
{
    
    public function isValidMd5($md5)
    {
        return preg_match('/^[a-f0-9]{32}$/', $md5);
    }
    
    
    public function indexAction()
    {
        $request = $this->getRequest();
        
        //Obtenemos el usuario en sesion
        $session = new \Shared\Session\AouthSession();
        $idempleado = $session->getIdempleado();
        
        //Instanciamos nuestro lugar
        $entity = \EmpleadoQuery::create()->findPk($idempleado);

        //Los roles
        $roles = \RolQuery::create()->find()->toArray(null,false,  \BasePeer::TYPE_FIELDNAME);
            
        //Los datos de acceso
        $empleado_accesos = \EmpleadoaccesoQuery::create()->filterByIdempleado($entity->getIdempleado())->find()->toArray(null,false,  \BasePeer::TYPE_FIELDNAME);
        
        $form = new \Catalogos\Form\EmpleadoForm($roles);
        
        //Le ponemos los datos de nuestro lugar a nuestro formulario
        $form->setData($entity->toArray(\BasePeer::TYPE_FIELDNAME));
        
        foreach ($form->getElements() as $element){
            $element->setAttribute('disabled', 'disabled');
        }
        
        if ($request->isPost()) { //Si hicieron POST
                
                $post_data = $request->getPost();
                
                $empleado_accesos = \EmpleadoaccesoQuery::create()->filterByIdempleado($entity->getIdempleado())->find();
                
                $empleado_accesos->delete();
                    
                    //Guardamos los datos de acceso
                    foreach($post_data['accesos'] as $acceso){
                        if(!empty($acceso['username']) && !empty($acceso['password'])){
                            $empleado_acceso = new \Empleadoacceso();
                            $empleado_acceso->setIdempleado($entity->getIdempleado())
                                            ->setIdrol($acceso['idrol'])
                                            ->setEmpleadoaccesoUsername($acceso['username'])
                                            ->setEmpleadoaccesoEnsesion(0);
                            if(!$this->isValidMd5($acceso['password'])){
                                $empleado_acceso->setEmpleadoaccesoPassword(md5($acceso['password']));
                            }else{
                                $empleado_acceso->setEmpleadoaccesoPassword($acceso['password']);
                            }
                            $empleado_acceso->save();
                        }
                        
                }
                  
                    

                //Agregamos un mensaje
                $this->flashMessenger()->addSuccessMessage('Registro guardado exitosamente!');

                //Redireccionamos a nuestro list
                return $this->redirect()->toRoute('micuenta');

                
            }
        
        return new ViewModel(array(
            'id'  => $idempleado,
            'form' => $form,
            'entity' => $entity->toArray(\BasePeer::TYPE_FIELDNAME),
            'roles' => $roles,
            'empleado_accesos' => $empleado_accesos,
            'successMessages' => $this->flashMessenger()->getSuccessMessages(),
        ));

    }
}
