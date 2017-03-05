<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Empleados\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class ReportesController extends AbstractActionController
{
    
    public function editarAction(){
        
        $request = $this->request;
        $sesion = new \Shared\Session\AouthSession();
        $idrol = $sesion->getIdrol();
        
        //Cachamos el valor desde nuestro params
        $idreporte = $this->params()->fromRoute('id');
        
        //Verificamos que el Id lugar que se quiere modificar exista
        if(!\EmpleadoreporteQuery::create()->filterByIdempleadoreporte($idreporte)->exists()){
            $idreporte =0;
        }
        
        //Si es incorrecto redireccionavos al action nuevo
        if (!$idreporte) {
            //Redireccionamos a nuestro list
            return $this->redirect()->toRoute('empleados-reportes');
        }
        
        //Instanciamos nuestro entidad
        $entity = \EmpleadoreporteQuery::create()->findPk($idreporte);
         
         if ($request->isPost()) { //Si hicieron POST
             
             $post_data = $request->getPost();
            
            foreach ($post_data as $k => $v){
                if(empty($v)){
                    unset($post_data[$k]);
                }
            }
            
            foreach($post_data as $key => $value){
                if(\EmpleadoreportePeer::getTableMap()->hasColumn($key) && $key!='empleadoreporte_fechasuceso'){
                    $entity->setByName($key, $value, \BasePeer::TYPE_FIELDNAME);
                }
            }
            
            //Setiamos lass fechas
            $entity->setEmpleadoreporteFechasuceso($post_data['empleadoreporte_fechasuceso_submit']);
            
            
            $entity->save();
            
            //Agregamos un mensaje
            $this->flashMessenger()->addSuccessMessage('Registro guardado exitosamente!');
                
            //Redireccionamos a nuestro list
            return $this->redirect()->toRoute('empleados-reportes');
            
         }

        if($idrol == 1){
            $clinicas = \ClinicaQuery::create()->find();
            $empleados = \ClinicaempleadoQuery::create()->find();
        }elseif($idrol == 2){
            $clinicas = \ClinicaQuery::create()->filterByIdclinica($sesion->getIdClinica())->find();
            $empleados = \ClinicaempleadoQuery::create()->filterByIdclinica($sesion->getIdClinica())->find();
        }
        $conceptos = \ConceptoincidenciaQuery::create()->find();
        
        $empleados_array = array();
        $clinicas_array = array();
        $conceptos_array = array();
        
        foreach ($empleados as $empleado){
            $id = $empleado->getIdempleado();
            $empleados_array[$id] = $empleado->getEmpleado()->getEmpleadoNombre();
        }
       
        foreach ($clinicas as $clinica){
            $id = $clinica->getIdclinica();
            $clinicas_array[$id] = $clinica->getClinicaNombre();
        }
        foreach ($conceptos as $concepto){
            $id = $concepto->getIdconceptoincidencia();
            $conceptos_array[$id] = $concepto->getConceptoincidenciaNombre();
        }
        
        $form = new \Empleados\Form\ReporteForm($clinicas_array, $conceptos_array, $empleados_array);
        
        //Le ponemos los datos de nuestro lugar a nuestro formulario
        $form->setData($entity->toArray(\BasePeer::TYPE_FIELDNAME));
        
       
        return new ViewModel(array(
            'id'  => $idreporte,
            'form' => $form,
        ));
        
        
       
    }
    public function eliminarAction(){

        $request = $this->getRequest();
        
        if($request->isPost()){
             
            $id = $this->params()->fromRoute('id');
            
            //Verificamos que el Id lugar que se quiere modificar exista
            if(!\EmpleadoreporteQuery::create()->filterByIdempleadoreporte($id)->exists()){
                $id =0;
            }
            
            //Si es incorrecto redireccionavos al action nuevo
            if (!$id) {
                return $this->redirect()->toRoute('empleados-reportes');
            }
            
            //Instanciamos nuestro lugar
            $entity = \EmpleadoreporteQuery::create()->findPk($id);
            
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
    
    
    public function vernotaAction(){

        $id = $this->params()->fromQuery('id');
        $reporte = \EmpleadoreporteQuery::create()->findPk($id);
        $viewModel = new ViewModel();
        $viewModel->setTerminal(true);
        $viewModel->setVariable('reporte', $reporte);
        return $viewModel;

    }
    
    public function filterAction(){
      
      $request = $this->request;  
        
      $sesion = new \Shared\Session\AouthSession();
      $idrol = $sesion->getIdrol();
      $idclinica = $sesion->getIdClinica();
      
      if($request->isPost()){
          $post_data = $request->getPost();
         
          $collection = array();
          
          if($idrol == 1){

            $query = \EmpleadoreporteQuery::create()->filterByIdclinica($post_data['clinicas'])->find();
            foreach ($query as $reporte){
                $idempleado_reportado = $reporte->getIdempleadoreportado();
                $clinica_actual = \ClinicaempleadoQuery::create()->filterByIdempleado($idempleado_reportado)->findOne();
                $tmp['idreporte'] = $reporte->getIdempleadoreporte();
                $tmp['clinica'] = $clinica_actual->getClinica()->getClinicaNombre();
                $tmp['clinica_suceso'] =$reporte->getClinica()->getClinicaNombre();
                $tmp['fecha_suceso'] = $reporte->getEmpleadoreporteFechasuceso('d/m/Y');
                $tmp['empleado'] = $reporte->getEmpleadoRelatedByIdempleadoreportado()->getEmpleadoNombre();
                $tmp['empeleado_reporta'] = $reporte->getEmpleadoRelatedByIdempleado()->getEmpleadoNombre();
                $tmp['reporte'] = $reporte->getConceptoincidencia()->getConceptoincidenciaNombre();
                $tmp['comentario'] = $reporte->getEmpleadoreporteComentario();
                
                $collection[] = $tmp;
                
            }

        }elseif($idrol == 2){

            $empleados = \ClinicaempleadoQuery::create()->filterByIdclinica($post_data['clinicas'])->find();
            $empleados_array = array();
            $empleado = new \Clinicaempleado();
            foreach ($empleados as $empleado){
                array_push($empleados_array, $empleado->getIdempleado());
            }
            $query = \EmpleadoreporteQuery::create()->filterByIdempleadoreportado($empleados_array)->find();
            $reporte = new \Empleadoreporte();
            foreach ($query as $reporte){
                $idempleado_reportado = $reporte->getIdempleadoreportado();
                $clinica_actual = \ClinicaempleadoQuery::create()->filterByIdempleado($idempleado_reportado)->findOne();
                $tmp['idreporte'] = $reporte->getIdempleadoreporte();
                $tmp['clinica'] = $clinica_actual->getClinica()->getClinicaNombre();
                $tmp['clinica_suceso'] =$reporte->getClinica()->getClinicaNombre();
                $tmp['fecha_suceso'] = $reporte->getEmpleadoreporteFechasuceso('d/m/Y');
                $tmp['empleado'] = $reporte->getEmpleadoRelatedByIdempleadoreportado()->getEmpleadoNombre();
                $tmp['empeleado_reporta'] = $reporte->getEmpleadoRelatedByIdempleado()->getEmpleadoNombre();
                $tmp['reporte'] = $reporte->getConceptoincidencia()->getConceptoincidenciaNombre();
                $tmp['comentario'] = $reporte->getEmpleadoreporteComentario();
                
                $collection[] = $tmp;
                
            }
            
        }
        
        return $this->getResponse()->setContent(\Zend\Json\Json::encode(array('result' => $collection)));
       
          
      }
      
      
        
    }
    public function indexAction()
    {
        $sesion = new \Shared\Session\AouthSession();
        $idrol = $sesion->getIdrol();

        if(in_array($idrol,array(1,6))){
            
            $clinicas = \ClinicaQuery::create()->find();
            $idclinica = 1;
            
        }else{
            
            $collection = array();
            $query = \EmpleadoreporteQuery::create()->filterByIdempleadoreportado($sesion->getIdempleado())->find();
             
            foreach ($query as $reporte){
                $idempleado_reportado = $reporte->getIdempleadoreportado();
                $clinica_actual = \ClinicaempleadoQuery::create()->filterByIdempleado($idempleado_reportado)->findOne();
                $tmp['idreporte'] = $reporte->getIdempleadoreporte();
                $tmp['clinica'] = $clinica_actual->getClinica()->getClinicaNombre();
                $tmp['clinica_suceso'] =$reporte->getClinica()->getClinicaNombre();
                $tmp['fecha_suceso'] = $reporte->getEmpleadoreporteFechasuceso('d/m/Y');
                $tmp['empleado'] = $reporte->getEmpleadoRelatedByIdempleadoreportado()->getEmpleadoNombre();
                $tmp['empeleado_reporta'] = $reporte->getEmpleadoRelatedByIdempleado()->getEmpleadoNombre();
                $tmp['reporte'] = $reporte->getConceptoincidencia()->getConceptoincidenciaNombre();
                $tmp['comentario'] = $reporte->getEmpleadoreporteComentario();
                
                $collection[] = $tmp;
                
            }

            $viewModel = new ViewModel();
            $viewModel->setVariable('collection', $collection);
            $viewModel->setVariable('successMessages' ,$this->flashMessenger()->getSuccessMessages());
            $viewModel->setTemplate('empleados/reportes/index_pedicurista');
            return $viewModel;
        }
        
        return new ViewModel(array(
            'successMessages' => $this->flashMessenger()->getSuccessMessages(),
            'clinicas' => $clinicas,
            'idclinica' => $idclinica,
        ));
    }

    public function nuevoAction(){
        
        $request = $this->request;
        $sesion = new \Shared\Session\AouthSession();
        
        if($request->isPost()){
            $post_data = $request->getPost();
            
            foreach ($post_data as $k => $v){
                if(empty($v)){
                    unset($post_data[$k]);
                }
            }
            
            
            $entity = new \Empleadoreporte();
            
            foreach($post_data as $key => $value){
                if(\EmpleadoreportePeer::getTableMap()->hasColumn($key) && $key!='empleadoreporte_fechasuceso'){
                    $entity->setByName($key, $value, \BasePeer::TYPE_FIELDNAME);
                }
            }
            
            //Setiamos lass fechas
            $entity->setEmpleadoreporteFechasuceso($post_data['empleadoreporte_fechasuceso_submit']);
            $entity->setEmpleadoreporteFechacreacion(new \DateTime());
            
            //El empleado que creo
            $entity->setIdempleado($sesion->getIdempleado());
            
            $entity->save();
            
            //Agregamos un mensaje
            $this->flashMessenger()->addSuccessMessage('Registro guardado exitosamente!');
                
            //Redireccionamos a nuestro list
            return $this->redirect()->toRoute('empleados-reportes');
                        
        }
        
        $sesion = new \Shared\Session\AouthSession();
        
        $idrol = $sesion->getIdrol();
        
        if($idrol == 1){
            $clinicas = \ClinicaQuery::create()->find();
            $empleados = \ClinicaempleadoQuery::create()->find();
        }elseif($idrol == 2){
            $clinicas = \ClinicaQuery::create()->filterByIdclinica($sesion->getIdClinica())->find();
            $empleados = \ClinicaempleadoQuery::create()->filterByIdclinica($sesion->getIdClinica())->find();
        }
        $conceptos = \ConceptoincidenciaQuery::create()->find();
        
        $empleados_array = array();
        $clinicas_array = array();
        $conceptos_array = array();
        
        foreach ($empleados as $empleado){
            $id = $empleado->getIdempleado();
            $empleados_array[$id] = $empleado->getEmpleado()->getEmpleadoNombre();
        }
       
        foreach ($clinicas as $clinica){
            $id = $clinica->getIdclinica();
            $clinicas_array[$id] = $clinica->getClinicaNombre();
        }
        foreach ($conceptos as $concepto){
            $id = $concepto->getIdconceptoincidencia();
            $conceptos_array[$id] = $concepto->getConceptoincidenciaNombre();
        }
        
        $form = new \Empleados\Form\ReporteForm($clinicas_array, $conceptos_array, $empleados_array);
        
        return new ViewModel(array(
            'form' => $form,
        ));
        
        
    }
    
    
}
