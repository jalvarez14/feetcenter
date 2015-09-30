<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Pacientes\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class SeguimientoController extends AbstractActionController
{
    
    public function verAction()
    {
        //Cachamos el id del paciente que nos enviar por la URL
        $id = $this->params()->fromRoute('id');
        
        $paciente = \PacienteQuery::create()->findPk($id);
        
        $seguimientos = $paciente->getPacienteseguimientos();
       
        $idrol = \Shared\Session\AouthSession::getIdrol();
        
        return new ViewModel(array(
            'idrol' => $idrol,
            'paciente' => $paciente,
            'seguimientos' => $seguimientos,
            'successMessages' => $this->flashMessenger()->getSuccessMessages(),
        ));
        
    }
    
    
    public function eliminarAction(){

        $request = $this->getRequest();
        
        if($request->isPost()){
             
            $id = $this->params()->fromRoute('id');
            
            //Verificamos que el Id lugar que se quiere modificar exista
            if(!\PacienteseguimientoQuery::create()->filterByIdpacienteseguimiento($id)->exists()){
                $id =0;
            }
            
            //Si es incorrecto redireccionavos al action nuevo
            if (!$id) {
                return $this->redirect()->toRoute('seguimiento/ver', array('id' => $entity->getIdpaciente()));
            }
            
            //Instanciamos nuestro lugar
            $entity = \PacienteseguimientoQuery::create()->findPk($id);
            
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
        $sesion = new \Shared\Session\AouthSession();
        $request = $this->request;

        $idpaciente = $this->params()->fromRoute('idpaciente');
        $paciente = \PacienteQuery::create()->findPk($idpaciente);
        
        $id = $this->params()->fromRoute('idpaciente');
        $entity = \PacienteseguimientoQuery::create()->findPk($id);
        
        
        if($request->isPost()){
            
            $post_data = $request->getPost();
            
            foreach ($post_data as $k => $v){
                if(empty($v)){
                    unset($post_data[$k]);
                }
            }
            
            //Recorremos nuestro formulario y seteamos los valores a nuestro objeto Lugar
            foreach ($post_data as $key => $value) {
                if (\PacienteseguimientoPeer::getTableMap()->hasColumn($key) && $key != 'pacienteseguimiento_fecha') {
                    $entity->setByName($key, $value, \BasePeer::TYPE_FIELDNAME);
                }
            }
            
            //La fecha de nacimiento
            if(isset($post_data['pacienteseguimiento_fecha_submit'])){
                $entity->setPacienteseguimientoFecha($post_data['pacienteseguimiento_fecha_submit']);
            }
            
            $entity->save();
            
            //Agregamos un mensaje
            $this->flashMessenger()->addSuccessMessage('Registro guardado exitosamente!');
                
            //Redireccionamos a nuestro list
            return $this->redirect()->toRoute('seguimiento/ver', array('id' => $entity->getIdpaciente()));
            
        }
        
        
        $canales = \CanalcomunicacionQuery::create()->find();

        $canales_array = array();
        foreach ($canales as $canal){
            $idcanal = $canal->getIdcanalcomunicacion();
            $canales_array[$idcanal] = $canal->getCanalcomunicacionNombre(); 
        }
        
        $form = new \Pacientes\Form\SeguimientoForm($canales_array);
        $form->setData($entity->toArray(\BasePeer::TYPE_FIELDNAME));
        
        $entity->save();
        
        return new ViewModel(array(
            'id' => $id,
            'paciente' => $paciente,
            'form' => $form,
        ));
        
    }
    
    public function nuevoAction()
    {
        $sesion = new \Shared\Session\AouthSession();
        $request = $this->request;
        
        if($request->isPost()){
            $post_data = $request->getPost();
            
            foreach ($post_data as $k => $v){
                if(empty($v)){
                    unset($post_data[$k]);
                }
            }
            
            $entity = new \Pacienteseguimiento();
            
            foreach($post_data as $key => $value){
                if(\PacienteseguimientoPeer::getTableMap()->hasColumn($key) && $key!='pacienteseguimiento_fecha'){
                    $entity->setByName($key, $value, \BasePeer::TYPE_FIELDNAME);
                }
            }
            
            //Las fechas
            $entity->setPacienteseguimientoFechacreacion(new \DateTime());
            $entity->setPacienteseguimientoFecha($post_data['pacienteseguimiento_fecha_submit']);
            
            if($sesion->getIdrol() == 1){
                $idclinica = 1;
            }else{
                $idclinica = $sesion->getIdClinica();
            }
            
            //el empleado y la fecha
            $entity->setIdempleado($sesion->getIdempleado());
            $entity->setIdclinica($idclinica);
            
            $entity->save();
            
            //Agregamos un mensaje
            $this->flashMessenger()->addSuccessMessage('Registro guardado exitosamente!');
                
            //Redireccionamos a nuestro list
            return $this->redirect()->toRoute('seguimiento/ver', array('id' => $entity->getIdpaciente()));
            
         
            
        }
        
        
        
        $idpaciente = $this->params()->fromRoute('id');
        
        $paciente = \PacienteQuery::create()->findPk($idpaciente);
        $canales = \CanalcomunicacionQuery::create()->find();

        $canales_array = array();
        foreach ($canales as $canal){
            $idcanal = $canal->getIdcanalcomunicacion();
            $canales_array[$idcanal] = $canal->getCanalcomunicacionNombre(); 
        }
        
        $form = new \Pacientes\Form\SeguimientoForm($canales_array);
        $form->get('idpaciente')->setValue($paciente->getIdpaciente());
        
        
        
        return new ViewModel(array(
            'paciente' => $paciente,
            'form' => $form,
        ));
        
        
    }
    
    public function indexAction()
    {
        $sesion = new \Shared\Session\AouthSession();
        $idrol = $sesion->getIdrol();
        
        //ADMIN
        if($sesion->getIdrol() == 1){
            //Filtros
            $clinicas = \ClinicaQuery::create()->find();
            $idclinica = 1;
        }elseif($sesion->getIdrol() == 2){//ENCARGADO
            //Filtros
             $clinicas = \ClinicaQuery::create()->find();
             $idclinica = $sesion->getIdClinica();
        }elseif($sesion->getIdrol() == 3){//PEDICURISTA (PENDIENTE)
             $clinicas = \ClinicaQuery::create()->find();
             $idclinica = $sesion->getIdClinica();
             
        }

        return new ViewModel(array(
            'idrol' => $idrol,
            'clinicas' => $clinicas,
            'idclinica' => $idclinica,    
            'successMessages' => $this->flashMessenger()->getSuccessMessages(),
        ));
    }
}
