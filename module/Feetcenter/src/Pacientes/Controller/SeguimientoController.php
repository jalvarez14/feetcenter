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
        
        $id = $this->params()->fromRoute('id');
        
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
                if (\PacienteseguimientoPeer::getTableMap()->hasColumn($key) && $key != 'pacienteseguimiento_fecha' && $key != 'pacienteseguimiento_hora') {
                    $entity->setByName($key, $value, \BasePeer::TYPE_FIELDNAME);
                }
            }
            
            //Las fechas
//            if(isset($post_data['pacienteseguimiento_fecha_submit'])){
//                $entity->setPacienteseguimientoFecha($post_data['pacienteseguimiento_fecha_submit']);
//                $entity->setPacienteseguimientoFecha($post_data['pacienteseguimiento_fecha_submit'].' '.$post_data['pacienteseguimiento_hora']);
//            }
            //la fecha se setea de acuerdo a la hora del sistema
            $entity->setPacienteseguimientoFecha(new \DateTime());
            $entity->save();
            
            //Agregamos un mensaje
            $this->flashMessenger()->addSuccessMessage('Registro guardado exitosamente!');
                
            //Redireccionamos a nuestro list
            return $this->redirect()->toRoute('seguimiento/ver', array('id' => $entity->getIdpaciente()));
            
        }
        
        
        $canales = \CanalcomunicacionQuery::create()->find();
        $estatus = \EstatusseguimientoQuery::create()->find();
         
        $canales_array = array();
        foreach ($canales as $canal){
            $idcanal = $canal->getIdcanalcomunicacion();
            $canales_array[$idcanal] = $canal->getCanalcomunicacionNombre(); 
        }
        
        $estatus_array = array();
        foreach ($estatus as $est){
            $ides = $est->getIdestatusseguimiento();
            $estatus_array[$ides] = $est->getEstatusseguimientoNombre(); 
        }
        
        $form = new \Pacientes\Form\SeguimientoForm($canales_array,$estatus_array);
        $form->setData($entity->toArray(\BasePeer::TYPE_FIELDNAME));
        
        //ATOMIZAMOS LA HORA Y SETIAMOS LOS VALORES CORRECTAMENTE
        $full_date = new \DateTime($entity->getPacienteseguimientoFecha());
        $form->get('pacienteseguimiento_fecha')->setValue($full_date->format('d/m/Y'));
        $form->get('pacienteseguimiento_hora')->setValue($full_date->format('h:i'));

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
                if(\PacienteseguimientoPeer::getTableMap()->hasColumn($key) && $key!='pacienteseguimiento_fecha' && $key!='pacienteseguimiento_hora'){
                    $entity->setByName($key, $value, \BasePeer::TYPE_FIELDNAME);
                }
            }
            
            
            
            //Las fechas 
            $entity->setPacienteseguimientoFechacreacion(new \DateTime());
            //la fecha se setea de acuerdo a la hora del sistema
            $entity->setPacienteseguimientoFecha(new \DateTime());
            //$entity->setPacienteseguimientoFecha($post_data['pacienteseguimiento_fecha_submit'].' '.$post_data['pacienteseguimiento_hora']);
            
            if($sesion->getIdrol() == 1){
                $idclinica = 1;
            }else{
                $idclinica = $sesion->getIdClinica();
            }
            
            //el empleado 
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
        $estatus = \EstatusseguimientoQuery::create()->find();

        $canales_array = array();
        foreach ($canales as $canal){
            $idcanal = $canal->getIdcanalcomunicacion();
            $canales_array[$idcanal] = $canal->getCanalcomunicacionNombre(); 
        }
        $estatus_array = array();
        foreach ($estatus as $est){
            $id = $est->getIdestatusseguimiento();
            $estatus_array[$id] = $est->getEstatusseguimientoNombre(); 
        }
        
        $form = new \Pacientes\Form\SeguimientoForm($canales_array,$estatus_array);
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
        if(in_array($idrol,array(1,6))){
            //Filtros
            $clinicas = \ClinicaQuery::create()->find();
            $idclinica = 1;
        }else{
            $clinicas = \ClinicaQuery::create()->filterByIdclinica($sesion->getIdClinica())->find();
            $idclinica = $sesion->getIdClinica();
        }
        
        $empleados = \ClinicaempleadoQuery::create()->useEmpleadoQuery()->useEmpleadoaccesoQuery()->filterByIdrol(3)->endUse()->endUse()->groupBy('idempleado')->find();

        return new ViewModel(array(
            'empleados' => $empleados,
            'idrol' => $idrol,
            'clinicas' => $clinicas,
            'idclinica' => $idclinica,    
            'successMessages' => $this->flashMessenger()->getSuccessMessages(),
        ));
    }
    
    
    public function serversideAction(){
        
        $request = $this->getRequest();
        
        if($request->isPost()){
            
            $post_data = $request->getPost();
          
            //Comenzamos hacer la query
            $pacienteQuery = new \PacienteQuery();

            //JOIN
            $pacienteQuery->joinEmpleado()->withColumn('empleado_nombre');
            $pacienteQuery->joinClinica()->withColumn('clinica_nombre');

            //WHERE
            $pacienteQuery->filterByIdclinica($post_data['clinicas']);
            $pacienteQuery->filterByIdempleado($post_data['empleados']);
            
            
            
            $recordsFiltered = $pacienteQuery->count();
            //ORDER TODO

             //SELECT
            $pacienteQuery->select(array('idpaciente','paciente_nombre','paciente_celular','paciente_fecharegistro'));
            
            //$result = $pacienteQuery->paginate($post_data['start'],$post_data['length']);
            
            $pacienteQuery->setOffset((int)$post_data['start']);
            $pacienteQuery->setLimit((int)$post_data['length']);
            
            //ORDER (TODO)
        
            //SEARCH
            if(!empty($post_data['search']['value'])){
                $search_value = $post_data['search']['value'];
                $c = new \Criteria();
                
                $c1= $c->getNewCriterion('paciente.paciente_nombre', '%'.$search_value.'%', \Criteria::LIKE);
                $c2= $c->getNewCriterion('paciente.paciente_celular', '%'.$search_value.'%', \Criteria::LIKE);
                //$c3= $c->getNewCriterion('paciente.paciente_fecharegistro', '%'.$search_value.'%', \Criteria::LIKE);
                $c4= $c->getNewCriterion('empleado.empleado_nombre', '%'.$search_value.'%', \Criteria::LIKE);
                $c5= $c->getNewCriterion('clinica.clinica_nombre', '%'.$search_value.'%', \Criteria::LIKE);
                
                $c1->addOr($c2)->addOr($c4)->addOr($c5);

                $pacienteQuery->addAnd($c1);

            }
            
            
           
            //Damos el formato
            $data = array();
           
            foreach ($pacienteQuery->find()->toArray(null,false,  \BasePeer::TYPE_FIELDNAME) as $value){
                
                $paciente_fecharegistro = new \DateTime($value['paciente_fecharegistro']);
                
               
                $tmp['DT_RowId'] = $value['idpaciente'];
                $tmp['clinica_nombre'] = $value['clinica_nombre'];
                $tmp['paciente_fecharegistro'] = $paciente_fecharegistro->format('d/m/Y');
                $tmp['paciente_nombre'] = $value['paciente_nombre'];
                $tmp['paciente_celular'] = $value['paciente_celular'];
                $tmp['empleado_nombre'] = $value['empleado_nombre'];
                 
                //POR CADA PACIENTE OBTENEMOS SU ULTIMO SEGUIMIENTO (ESTATUS)
                $tmp['paciente_estatus'] = 'N/D';

                if(\PacienteseguimientoQuery::create()->filterByIdpaciente($value['idpaciente'])->exists()){
                    $paciente_seguimiento = \PacienteseguimientoQuery::create()->filterByIdpaciente($value['idpaciente'])->orderByPacienteseguimientoFecha(\Criteria::DESC)->findOne();
                    $tmp['paciente_estatus'] = '<td><span class="badge" style="background:'.$paciente_seguimiento->getEstatusseguimiento()->getEstatusseguimientoColor().'"></span> '.$paciente_seguimiento->getEstatusseguimiento()->getEstatusseguimientoNombre().'</td>';
                   
                }

                $tmp['opciones'] = '<a href="/pacientes/seguimiento/ver/'.$value['idpaciente'].'">Ver seguimiento</a>';
                
                $data[] = $tmp;
 
            }   
            
            
            
            //El arreglo que regresamos
            $json_data = array(
                "draw"            => (int)$post_data['draw'],
                //"recordsTotal"    => 100,
                "recordsFiltered" => $recordsFiltered,
                "data"            => $data
            );
            

            
            return $this->getResponse()->setContent(json_encode($json_data));
           
            
        }
    }
    
    
    public function quickAction(){
        
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
                if(\PacienteseguimientoPeer::getTableMap()->hasColumn($key) && $key!='pacienteseguimiento_fecha' && $key!='pacienteseguimiento_hora'){
                    $entity->setByName($key, $value, \BasePeer::TYPE_FIELDNAME);
                }
            }
            
            //Las fechas 
            $entity->setPacienteseguimientoFechacreacion(new \DateTime());
            $entity->setPacienteseguimientoFecha($post_data['pacienteseguimiento_fecha_submit'].' '.$post_data['pacienteseguimiento_hora']);
            
            if($sesion->getIdrol() == 1){
                $idclinica = 1;
            }else{
                $idclinica = $sesion->getIdClinica();
            }
            
            //el empleado 
            $entity->setIdempleado($sesion->getIdempleado());
            $entity->setIdclinica($idclinica);
           
            $entity->save();
            
            //Agregamos un mensaje
            //$this->flashMessenger()->addSuccessMessage('Registro guardado exitosamente!');
                
            //Redireccionamos a nuestro list
            return $this->getResponse()->setContent(json_encode(array('result' => true)));
            
         
            
        }
        
        if ($this->params()->fromQuery('html')) {

            $idpaciente = $this->params()->fromQuery('idpaciente');

            $paciente = \PacienteQuery::create()->findPk($idpaciente);
            $canales = \CanalcomunicacionQuery::create()->find();
            $estatus = \EstatusseguimientoQuery::create()->find();

            $canales_array = array();
            foreach ($canales as $canal) {
                $idcanal = $canal->getIdcanalcomunicacion();
                $canales_array[$idcanal] = $canal->getCanalcomunicacionNombre();
            }
            $estatus_array = array();
            foreach ($estatus as $est) {
                $id = $est->getIdestatusseguimiento();
                $estatus_array[$id] = $est->getEstatusseguimientoNombre();
            }

            $form = new \Pacientes\Form\SeguimientoForm($canales_array, $estatus_array);
            $form->get('idpaciente')->setValue($paciente->getIdpaciente());
            
            $viewModel = new ViewModel();
            $viewModel->setTerminal(true);
            $viewModel->setVariables(array(
                'paciente' => $paciente,
                'form' => $form,
            ));
            
            return $viewModel;
        }
    }
    
    public function historialAction(){
        
        $sesion = new \Shared\Session\AouthSession();
        $request = $this->request;
        
        if($this->params()->fromQuery('html')) {
            
            $idpaciente = $this->params()->fromQuery('idpaciente');
            $paciente = \PacienteQuery::create()->findPk($idpaciente);
            
            $to = new \DateTime();
            $from = new \DateTime("-6 months");

            $seguimiento = \PacienteseguimientoQuery::create()->filterByIdpaciente($idpaciente)->filterByPacienteseguimientoFecha(array('min' => $from,'max' => $to))->orderByPacienteseguimientoFecha(\Criteria::DESC)->find();
             
            $viewModel = new ViewModel();
            $viewModel->setTerminal(true);
            $viewModel->setVariables(array(
                'paciente' => $paciente,
                'seguimientos' => $seguimiento,
            ));

            return $viewModel;
        }
        
        
        
    }
}
