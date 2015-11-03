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

class PacientesController extends AbstractActionController
{
    
    public function editarAction(){
        
        $request = $this->request;
        $sesion = new \Shared\Session\AouthSession();
        $idrol = $sesion->getIdrol();
        
        $idpaciente = $this->params()->fromRoute('id');
        
        //Verificamos que el Id lugar que se quiere modificar exista
        if(!\PacienteQuery::create()->filterByIdpaciente($idpaciente)->exists()){
            $idpaciente =0;
        }
        
        //Si es incorrecto redireccionavos al action nuevo
        if (!$idpaciente) {
            //Redireccionamos a nuestro list
            return $this->redirect()->toRoute('pacientes');
        }
        
        //Instanciamos nuestro entidad
        $entity = \PacienteQuery::create()->findPk($idpaciente);

        if ($request->isPost()) { //Si hicieron POST
            
            $post_data = $request->getPost();
            
            foreach ($post_data as $k => $v){
                if(empty($v)){
                    unset($post_data[$k]);
                }
            }
            
            foreach($post_data as $key => $value){
                if(\PacientePeer::getTableMap()->hasColumn($key) && $key!='paciente_fechanacimiento'){
                    $entity->setByName($key, $value, \BasePeer::TYPE_FIELDNAME);
                }
            }
            
            //Setiamos las fechas
            
             $entity->setPacienteFecharegistro(new \DateTime());
             
             
            if(isset($post_data['paciente_fechanacimiento_submit'])){
                $entity->setPacienteFechanacimiento('paciente_fechanacimiento_submit');
            }
            
            
            $entity->save();
            
            $entity->getGrupopersonalsRelatedByIdpaciente()->delete();
            
            //Ahora los pacientes
            if(isset($post_data['pacientes'])){
                foreach ($post_data['pacientes'] as $idpaciente){
                    $grupo_paciente = new \Grupopersonal();
                    $grupo_paciente->setIdpaciente($entity->getIdpaciente())
                                   ->setIdpacienteagregado($idpaciente)
                                   ->save();
                }
            }
            
            
            
            //Agregamos un mensaje
            $this->flashMessenger()->addSuccessMessage('Registro guardado exitosamente!');
                
            //Redireccionamos a nuestro list
            return $this->redirect()->toRoute('pacientes');
        }
        
        $empleados_array = array();
        $clinicas_array = array();
        //Administtrador
        if($sesion->getIdrol() == 1){
            $clinicas = \ClinicaQuery::create()->find();
            $empleados = \ClinicaempleadoQuery::create()->useEmpleadoQuery()->useEmpleadoaccesoQuery()->filterByIdrol(3)->endUse()->endUse()->groupBy('idempleado')->find();
            foreach ($empleados as $empleado){
                $id = $empleado->getIdempleado();
                $empleados_array[$id] = $empleado->getEmpleado()->getEmpleadoNombre();
            }
            foreach ($clinicas as $clinica){
                $id = $clinica->getIdclinica();
                $clinicas_array[$id] = $clinica->getClinicaNombre();
            }
        }
        //Encargado
        elseif ($sesion->getIdrol() == 2) {
            $clinicas = \ClinicaQuery::create()->filterByIdclinica($sesion->getIdClinica())->find();
            $empleados = \ClinicaempleadoQuery::create()->filterByIdclinica($sesion->getIdClinica())->useEmpleadoQuery()->useEmpleadoaccesoQuery()->filterByIdrol(3)->endUse()->endUse()->groupBy('idempleado')->find();
            foreach ($empleados as $empleado){
                $id = $empleado->getIdempleado();
                $empleados_array[$id] = $empleado->getEmpleado()->getEmpleadoNombre();
            }
            foreach ($clinicas as $clinica){
                $id = $clinica->getIdclinica();
                $clinicas_array[$id] = $clinica->getClinicaNombre();
            }
        }
        
        $form = new \Pacientes\Form\PacientesForm($clinicas_array, $empleados_array);
        
        if($sesion->getIdrol() != 1){
            $form->get('paciente_nombre')->setAttribute('disabled', true);
            $form->get('paciente_celular')->setAttribute('disabled', true);

            
        }
        
        //Le ponemos los datos de nuestro lugar a nuestro formulario
        $form->setData($entity->toArray(\BasePeer::TYPE_FIELDNAME));
        
        //Los pacientes de grupo
        $pacientes = $entity->getGrupopersonalsRelatedByIdpaciente();
                
        return new ViewModel(array(
            'id'  => $idpaciente,
            'form' => $form,
            'pacientes' => $pacientes,
        ));
    }
    
    public function eliminarAction(){

        $request = $this->getRequest();
        
        if($request->isPost()){
             
            $id = $this->params()->fromRoute('id');
            
            //Verificamos que el Id lugar que se quiere modificar exista
            if(!\PacienteQuery::create()->filterByIdpaciente($id)->exists()){
                $id =0;
            }
            
            //Si es incorrecto redireccionavos al action nuevo
            if (!$id) {
                return $this->redirect()->toRoute('pacientes');
            }
            
            //Instanciamos nuestro lugar
            $entity = \PacienteQuery::create()->findPk($id);
            
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
    
    public function filterAction(){
        $request = $this->request;
        
        if($request->isPost()){
            $post_data = $request->getPost();
            
            $query = new \PacienteQuery();
            
            if(isset($post_data['clinicas'])){
                 $query->filterByIdclinica($post_data['clinicas']);
            }else{
                $query->filterByIdclinica(array());
            }
            
            $result = $query->joinClinica()->joinEmpleado()->withColumn('clinica_nombre')->withColumn('empleado_nombre')->find()->toArray(null,false,  \BasePeer::TYPE_FIELDNAME);

            
            //Dams formato a la fecha
            foreach ($result as $key => $value){
                $fecha = new \DateTime($value['paciente_fecharegistro']);
                $result[$key]['paciente_fecharegistro'] = $fecha->format('d/m/Y');
            }
            
            return $this->getResponse()->setContent(\Zend\Json\Json::encode(array('result' => $result)));
            
        }
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
            
            $entity = new \Paciente();
           
            foreach($post_data as $key => $value){
                if(\PacientePeer::getTableMap()->hasColumn($key) && $key!='paciente_fechanacimiento'){
                    $entity->setByName($key, $value, \BasePeer::TYPE_FIELDNAME);
                }
            }
            
            //Setiamos las fechas
             $entity->setPacienteFecharegistro(new \DateTime());
             
             
            if(isset($post_data['paciente_fechanacimiento_submit'])){
                $entity->setPacienteFechanacimiento('paciente_fechanacimiento_submit');
            }
            
            
            $entity->save();
            
            //Ahora los pacientes
            if(isset($post_data['pacientes'])){
                foreach ($post_data['pacientes'] as $idpaciente){
                    $grupo_paciente = new \Grupopersonal();
                    $grupo_paciente->setIdpaciente($entity->getIdpaciente())
                                   ->setIdpacienteagregado($idpaciente)
                                   ->save();
                }
            }
            
            
            
            //Agregamos un mensaje
            $this->flashMessenger()->addSuccessMessage('Registro guardado exitosamente!');
                
            //Redireccionamos a nuestro list
            return $this->redirect()->toRoute('pacientes');
            

        }
        
        $empleados_array = array();
        $clinicas_array = array();
        //Administtrador
        if($sesion->getIdrol() == 1){
            $clinicas = \ClinicaQuery::create()->find();
            $empleados = \ClinicaempleadoQuery::create()->useEmpleadoQuery()->useEmpleadoaccesoQuery()->filterByIdrol(3)->endUse()->endUse()->groupBy('idempleado')->find();
            foreach ($empleados as $empleado){
                    $id = $empleado->getIdempleado();
                    $empleados_array[$id] = $empleado->getEmpleado()->getEmpleadoNombre();
            }
            foreach ($clinicas as $clinica){
                $id = $clinica->getIdclinica();
                $clinicas_array[$id] = $clinica->getClinicaNombre();
            }
        }
        //Encargado
        elseif ($sesion->getIdrol() == 2) {
            $clinicas = \ClinicaQuery::create()->filterByIdclinica($sesion->getIdClinica())->find();
            $empleados = \ClinicaempleadoQuery::create()->filterByIdclinica($sesion->getIdClinica())->useEmpleadoQuery()->useEmpleadoaccesoQuery()->filterByIdrol(3)->endUse()->endUse()->groupBy('idempleado')->find();
            foreach ($empleados as $empleado){
                $id = $empleado->getIdempleado();
                $empleados_array[$id] = $empleado->getEmpleado()->getEmpleadoNombre();
            }
            foreach ($clinicas as $clinica){
                $id = $clinica->getIdclinica();
                $clinicas_array[$id] = $clinica->getClinicaNombre();
            }
        }
        
        $form = new \Pacientes\Form\PacientesForm($clinicas_array, $empleados_array);
            
        return new ViewModel(array(
            'form' => $form,
        ));
    }
}
