<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Egresos\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class EgresosController extends AbstractActionController
{
    public function indexAction()
    {
        $sesion = new \Shared\Session\AouthSession();

        //ADMIN
        if(in_array($sesion->getIdrol(),array(6))){ 
            $collection = \EgresoclinicaQuery::create()->find();
            //Filtros
            $clinicas = \ClinicaQuery::create()->find();
        }elseif($sesion->getIdrol() == 2){//ENCARGADO
            $collection = \EgresoclinicaQuery::create()->filterByIdclinica($sesion->getIdClinica())->find();
            //Filtros
            $clinicas = \ClinicaQuery::create()->filterByIdclinica($sesion->getIdClinica())->find();
        }
        
        //Filtros
        $conceptos = \ConceptoQuery::create()->find();
        
        //Damos el formato para el select
        $clinicas_array = array();
        $conceptos_array = array();
        
        foreach ($clinicas as $clinica){
            $idclinica = $clinica->getIdclinica();
            $clinicas_array[$idclinica] = $clinica->getClinicaNombre();
        }
        
        foreach ($conceptos as $concepto){
            $idconcepto = $concepto->getIdconcepto();
            $conceptos_array[$idconcepto] = $concepto->getConceptoNombre();
        }
        
        return new ViewModel(array(
            'clinicas' => $clinicas_array,
            'conceptos' => $conceptos_array,    
            'collection'   => $collection,
            'successMessages' => $this->flashMessenger()->getSuccessMessages(),
        ));
        
        return new ViewModel();
    }
    
    public function editarAction(){
        
        $sesion = new \Shared\Session\AouthSession();
        $request = $this->request;
        
        if(in_array($sesion->getIdrol(),array(6))){ 
            $this->getResponse()->setStatusCode(404);
            return;
        }
        
        //Cachamos el valor desde nuestro params
        $id = (int) $this->params()->fromRoute('id');
        //Verificamos que el Id lugar que se quiere modificar exista
        if(!\EgresoclinicaQuery::create()->filterByIdegresoclinica($id)->exists()){
            $id =0;
        }
        //Si es incorrecto redireccionavos al action nuevo
        if (!$id) {
            return $this->redirect()->toRoute('egresos');
        }
        
        
        //Instanciamos nuestra entidad
        $entity = \EgresoclinicaQuery::create()->findPk($id);
        
        if($request->isPost()){
            $post_data = $request->getPost();
            
            foreach ($post_data as $k => $v){
                if(empty($v)){
                    unset($post_data[$k]);
                }
            }
            
            //Recorremos nuestro formulario y seteamos los valores a nuestro objeto Lugar
            foreach ($post_data as $key => $value) {
                if (\EgresoclinicaPeer::getTableMap()->hasColumn($key) && $key != 'egresoclinica_fechaegreso') {
                    $entity->setByName($key, $value, \BasePeer::TYPE_FIELDNAME);
                }
            }
            
            //La fecha de nacimiento
            if(isset($post_data['egresoclinica_fechaegreso_submit'])){
                $entity->setEgresoclinicaFechaegreso($post_data['egresoclinica_fechaegreso_submit']);
            }
            
            $entity->save();
            
            
            //Los archivos
            if(isset($_FILES['egresoclinica_comprobante']) && !empty($_FILES['egresoclinica_comprobante']['name'])){
                    $upload_folder ='/img/egresos/';
                    $tipo_archivo = $_FILES['egresoclinica_comprobante']['type']; $tipo_archivo = explode('/', $tipo_archivo); $tipo_archivo = $tipo_archivo[1];  
                    $nombre_archivo = 'egresoclinica_comprobante_'.$entity->getIdegresoclinica().'.'.$tipo_archivo;
                    $tmp_archivo = $_FILES['egresoclinica_comprobante']['tmp_name'];
                    $archivador = $upload_folder.$nombre_archivo;
                    if(!move_uploaded_file($tmp_archivo, $_SERVER["DOCUMENT_ROOT"].$archivador)) {
                        return $this->getResponse()->setContent(\Zend\Json\Json::encode(array('response' => false, 'msg' => 'Ocurrio un error al subir el archivo. No pudo guardarse.', 'status' => 'error')));
                    } 
                    $entity->setEgresoclinicaComprobante($archivador);
                    $entity->save();

            }else{

                //Si fue eliminado
                if(isset($post_data['egresoclinica_comprobante_submit']) && isset($post_data['egresoclinica_comprobante_submit']) == 'delete'){

                    if(!is_null($entity->getEgresoclinicaComprobante())){

                        unlink($_SERVER['DOCUMENT_ROOT'].$entity->getEgresoclinicaComprobante());
                    }

                    $entity->setEgresoclinicaComprobante(NULL);
                }

            }
            
            $entity->save();
            
            //Agregamos un mensaje
            $this->flashMessenger()->addSuccessMessage('Registro guardado exitosamente!');
                
            //Redireccionamos a nuestro list
            return $this->redirect()->toRoute('egresos');

        }
        
        
        //General
        $conceptos = \ConceptoQuery::create()->find()->toArray(null,false,  \BasePeer::TYPE_FIELDNAME);
        
        //Administtrador
        if($sesion->getIdrol() == 1){
            $clinicas = \ClinicaQuery::create()->find()->toArray(null,false,  \BasePeer::TYPE_FIELDNAME);
        }
        //Encargado
        elseif ($sesion->getIdrol() == 2) {
             $clinicas = \ClinicaQuery::create()->filterByIdclinica($sesion->getIdClinica())->find()->toArray(null,false,  \BasePeer::TYPE_FIELDNAME);
        }
        
        //Damos formato de select
        $clinica_array = array();
        foreach ($clinicas as $clinica){
            $idclinica = $clinica['idclinica'];
            $clinica_array[$idclinica] = $clinica['clinica_nombre'];
        }
        
        $conceptos_array = array();
        foreach ($conceptos as $concepto){
            $idconcepto = $concepto['idconcepto'];
            $conceptos_array[$idconcepto] = $concepto['concepto_nombre'];
        }
        
        //
        
        //Instanciamos nuestro formulario
        $form = new \Egresos\Form\EgresoForm($clinica_array,$conceptos_array);
        
        $form->setData($entity->toArray(\BasePeer::TYPE_FIELDNAME));
        
        
        return new ViewModel(array(
            'egreso_comprobante' => $entity->getEgresoclinicaComprobante(),
            'id' => $id,
            'form' => $form,
        ));
    }
    
    public function nuevoAction()
    {
        
        $sesion = new \Shared\Session\AouthSession();
        $request = $this->request;
        
        if(in_array($sesion->getIdrol(),array(6))){ 
            $this->getResponse()->setStatusCode(404);
            return;
        }
        
        
        if($request->isPost()){
            $post_data = $request->getPost();
       
            foreach ($post_data as $k => $v){
                if(empty($v)){
                    unset($post_data[$k]);
                }
            }
            
            $entity = new \Egresoclinica();
            
            foreach($post_data as $key => $value){
                if(\EgresoclinicaPeer::getTableMap()->hasColumn($key) && $key!='egresoclinica_fechaegreso'){
                    $entity->setByName($key, $value, \BasePeer::TYPE_FIELDNAME);
                }
            }
            
            //Setiamos el idempleado que creo el egreso
            $entity->setIdempleado($sesion->getIdempleado());
            
            //Setiamos la fecha de creacion
            $currentDate = new \DateTime();
            $entity->setEgresoclinicaFecha($currentDate);
            
            //Setiamos la fecha del egreso
            $entity->setEgresoclinicaFechaegreso($post_data['egresoclinica_fechaegreso_submit']);
            
            $entity->save();
            
            //El comprobante
             if(isset($_FILES['egresoclinica_comprobante']) && !empty($_FILES['egresoclinica_comprobante']['name'])){
                //Si tiene una foto guurdada anteriormente
                $upload_folder ='/img/egresos/';
                $tipo_archivo = $_FILES['egresoclinica_comprobante']['type']; $tipo_archivo = explode('/', $tipo_archivo); $tipo_archivo = $tipo_archivo[1];  
                $nombre_archivo = 'egresoclinica_comprobante_'.$entity->getIdegresoclinica().'.'.$tipo_archivo;
                $tmp_archivo = $_FILES['egresoclinica_comprobante']['tmp_name'];
                $archivador = $upload_folder.$nombre_archivo;
                if(!move_uploaded_file($tmp_archivo, $_SERVER["DOCUMENT_ROOT"].$archivador)) {
                    return $this->getResponse()->setContent(\Zend\Json\Json::encode(array('response' => false, 'msg' => 'Ocurrio un error al subir el archivo. No pudo guardarse.', 'status' => 'error')));
                } 
                $entity->setEgresoclinicaComprobante($archivador);
                $entity->save();
            }
            

            //Agregamos un mensaje
            $this->flashMessenger()->addSuccessMessage('Registro guardado exitosamente!');
                
            //Redireccionamos a nuestro list
            return $this->redirect()->toRoute('egresos');
            
            
           
        }

        //General
        $conceptos = \ConceptoQuery::create()->find()->toArray(null,false,  \BasePeer::TYPE_FIELDNAME);
        
        //Administtrador
        if($sesion->getIdrol() == 1){
            $clinicas = \ClinicaQuery::create()->find()->toArray(null,false,  \BasePeer::TYPE_FIELDNAME);
        }
        //Encargado
        elseif ($sesion->getIdrol() == 2) {
             $clinicas = \ClinicaQuery::create()->filterByIdclinica($sesion->getIdClinica())->find()->toArray(null,false,  \BasePeer::TYPE_FIELDNAME);
        }
        
        //Damos formato de select
        $clinica_array = array();
        foreach ($clinicas as $clinica){
            $idclinica = $clinica['idclinica'];
            $clinica_array[$idclinica] = $clinica['clinica_nombre'];
        }
        
        $conceptos_array = array();
        foreach ($conceptos as $concepto){
            $idconcepto = $concepto['idconcepto'];
            $conceptos_array[$idconcepto] = $concepto['concepto_nombre'];
        }
        
        //Instanciamos nuestro formulario
        $form = new \Egresos\Form\EgresoForm($clinica_array,$conceptos_array);
        
        
        return new ViewModel(array(
            'form' => $form,
        ));
        
        
    }
    
    
    public function eliminarAction(){
        
        $request = $this->getRequest();
        $sesion = new \Shared\Session\AouthSession();
        
        if(in_array($sesion->getIdrol(),array(6))){ 
            $this->getResponse()->setStatusCode(404);
            return;
        }
        
        if($request->isPost()){
             
            $id = $this->params()->fromRoute('id');
            
            //Verificamos que el Id lugar que se quiere modificar exista
            if(!\EgresoclinicaQuery::create()->filterByIdegresoclinica($id)->exists()){
                $id =0;
            }
            
            //Si es incorrecto redireccionavos al action nuevo
            if (!$id) {
                return $this->redirect()->toRoute('egresos');
            }
            
            //Instanciamos nuestro lugar
            $entity = \EgresoclinicaQuery::create()->findPk($id);
            
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
        $egreso = \EgresoclinicaQuery::create()->findPk($id);
        $viewModel = new ViewModel();
        $viewModel->setTerminal(true);
        $viewModel->setVariable('egreso', $egreso);
        return $viewModel;

    }
    
    public function filterbydateAction(){
        
         $request = $this->request;
         if($request->isPost()){
             $post_data = $request->getPost();
             
            $query = new \EgresoclinicaQuery();
            
            $query->filterByEgresoclinicaFechaegreso(array('min' => $post_data['from'],'max' => $post_data['to']));
            
            if(isset($post_data['clinicas'])){
                 $query->filterByIdclinica($post_data['clinicas']);
            }else{
                $query->filterByIdclinica(array());
            }
            
            if(isset($post_data['conceptos'])){
                 $query->filterByIdconcepto($post_data['conceptos']);
            }else{
                $query->filterByIdconcepto(array());
            }
            
            
             $result = $query->joinClinica()->joinConcepto()->joinEmpleado()->withColumn('clinica_nombre')->withColumn('empleado_nombre')->withColumn('concepto_nombre')->find()->toArray(null,false,  \BasePeer::TYPE_FIELDNAME);
             
             //Dams formato a la fecha
            foreach ($result as $key => $value){
                $fecha = new \DateTime($value['egresoclinica_fechaegreso']);
                $result[$key]['egresoclinica_fechaegreso'] = $fecha->format('d/m/Y');
            }
            
            return $this->getResponse()->setContent(\Zend\Json\Json::encode(array('result' => $result)));
             
         }
    }
    
    public function filterAction(){
        $request = $this->request;
        
        if($request->isPost()){
            $post_data = $request->getPost();
            
            $query = new \EgresoclinicaQuery();
            
            if(isset($post_data['clinicas'])){
                 $query->filterByIdclinica($post_data['clinicas']);
            }else{
                $query->filterByIdclinica(array());
            }
            
            if(isset($post_data['conceptos'])){
                 $query->filterByIdconcepto($post_data['conceptos']);
            }else{
                $query->filterByIdconcepto(array());
            }
            
            $result = $query->joinClinica()->joinConcepto()->joinEmpleado()->withColumn('clinica_nombre')->withColumn('empleado_nombre')->withColumn('concepto_nombre')->find()->toArray(null,false,  \BasePeer::TYPE_FIELDNAME);

            
            //Dams formato a la fecha
            foreach ($result as $key => $value){
                $fecha = new \DateTime($value['egresoclinica_fechaegreso']);
                $result[$key]['egresoclinica_fechaegreso'] = $fecha->format('d/m/Y');
            }
            
            return $this->getResponse()->setContent(\Zend\Json\Json::encode(array('result' => $result)));
            
        }
    }
}
