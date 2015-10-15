<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Login\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class LoginController extends AbstractActionController
{
    public function indexAction()
    {
        
        //Nuesta session
        $session = new \Shared\Session\AouthSession();
        
        if($session->isActive()){
            return $this->redirect()->toRoute('agenda');
        }
        
        //Instanciamos nuestro formulario
        $form = new \Login\Form\LoginForm();
    
        return new ViewModel(array(
            'form' => $form,
            'errorMessages' => $this->flashMessenger()->getErrorMessages(),
        ));
    }
    
    public function inAction()
    {
        
        $request = $this->getRequest();
        $response = $this->getResponse();
        
        //Instanciamos nuestro formulario
        $form = new \Login\Form\LoginForm();
        
        //Nuesta session
        $session = new \Shared\Session\AouthSession();
           
        if($request->isPost()){
            
            $post_data = $request->getPost();
            
            $post_data['empleadoacceso_password'] = md5($post_data['empleadoacceso_password']);
            
            //Verificamos si los datos de acceso son correctos
            if(\EmpleadoaccesoQuery::create()->filterByEmpleadoaccesoUsername($post_data['empleadoacceso_username'])->filterByEmpleadoaccesoPassword($post_data['empleadoacceso_password'])->exists()){

                $empleado_acceso = \EmpleadoaccesoQuery::create()->filterByEmpleadoaccesoUsername($post_data['empleadoacceso_username'])->filterByEmpleadoaccesoPassword($post_data['empleadoacceso_password'])->findOne();
               
                //Verificamos que ese usario ya este asiganod alguna clinica
                if(\ClinicaempleadoQuery::create()->filterByIdempleado($empleado_acceso->getIdempleado())->exists() || $empleado_acceso->getIdrol()==1){
                    $clinica_empleado = \ClinicaempleadoQuery::create()->filterByIdempleado($empleado_acceso->getIdempleado())->findOne();
                   
                    if($empleado_acceso->getIdrol() == 1){
                        $idclinica = NULL;
                    }else{
                        $idclinica = $clinica_empleado->getIdclinica();
                    }
                    

                    //Verificamos que el usuario no este logueado actualmente
                    if(!$empleado_acceso->getEmpleadoaccesoEnsesion()){
                        //Creamos nuestra session
                        $session->Create(array(
                            'idempleadoacceso' => $empleado_acceso->getIdempleadoacceso(),
                            'idempleado' => $empleado_acceso->getIdempleado(),
                            'idclinica' => $idclinica,
                            'idrol' => $empleado_acceso->getIdrol(),
                            'rol' => $empleado_acceso->getRol()->getRolNombre(),
                            'empleadoacceso_username' => $empleado_acceso->getEmpleadoaccesoUsername(),
                            'empleado_nombre' => $empleado_acceso->getEmpleado()->getEmpleadoNombre(),
                            'empleado_foto' => $empleado_acceso->getEmpleado()->getEmpleadoFoto(),

                        ));               
                        
                        $empleado_acceso->setEmpleadoaccesoEnsesion(1);
                        $empleado_acceso->save();
                        
                        

                        return $this->redirect()->toRoute('agenda');
                    }else{
                        
                        $this->flashMessenger()->addErrorMessage('El usuario ya ha iniciado sesión en otro dispositivo');
                        return $this->redirect()->toRoute('login');
                    }

                }else{
                    $this->flashMessenger()->addErrorMessage('No es posible iniciar sesion con este usuario ya que no ha sido asignado a ninguna clinica');
                    return $this->redirect()->toRoute('login');
                }
                
            }else{
                $this->flashMessenger()->addErrorMessage('Nombre de usuario y/o contraseña incorrecta');
                return $this->redirect()->toRoute('login');
            }

        }

    }
    
    public function outAction() {
         
         $AouthSession = new \Shared\Session\AouthSession();
         $empleado_acesso = \EmpleadoaccesoQuery::create()->findPk(\Shared\Session\AouthSession::getIdempleadoacceso());
         $empleado_acesso->setEmpleadoaccesoEnsesion(0);
         $empleado_acesso->save();
         $AouthSession->Close();
         return $this->redirect()->toRoute('login');
    }
      
    
}
