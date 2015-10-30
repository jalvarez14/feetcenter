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

class FaltantesController extends AbstractActionController
{
    
    public function generarcomprobanteAction(){
        
        $id = $this->params()->fromQuery('id');
        
        $entity = \FaltanteQuery::create()->findPk($id);
        
        $target = "comprobante.pdf";

        $pdf = new \Shared\PdfCreator\Faltante($entity);
        $pdf->AliasNbPages();
        $pdf->AddPage();
        $pdf->Output($_SERVER['DOCUMENT_ROOT'].'/img/faltantes/'.$target,'F');
        
        $base64 = base64_encode(file_get_contents($_SERVER['DOCUMENT_ROOT'].'/img/faltantes/'.$target));
        
        return $this->getResponse()->setContent(json_encode($base64));
    }
    
        public function indexAction()
    {
                        
        return new ViewModel();
    }
    
    public function editarAction(){
        
        $request = $this->getRequest();

        //Cachamos el valor desde nuestro params
        $idfaltante = (int) $this->params()->fromRoute('id');
        
        //Verificamos que el Id lugar que se quiere modificar exista
        if(!\FaltanteQuery::create()->filterByIdfaltante($idfaltante)->exists()){
            $idfaltante =0;
        }
        
        //Si es incorrecto redireccionavos al action nuevo
        if (!$idfaltante) {
            return $this->redirect()->toRoute('empleados-faltantes');
        }
        
        $session = new \Shared\Session\AouthSession();
        $idrol = (int)$session->getIdrol();
        $idempleado = $session->getIdempleado();
        
        $entity = \FaltanteQuery::create()->findPk($idfaltante);
        
        if($request->isPost()){
            
            $post_data = $request->getPost();
            
            foreach ($post_data as $k => $v){
                if(empty($v)){
                    unset($post_data[$k]);
                }
            }
            
            foreach($post_data as $key => $value){
                if(\FaltantePeer::getTableMap()->hasColumn($key) && $key != 'faltante_fecha'){
                    $entity->setByName($key, $value, \BasePeer::TYPE_FIELDNAME);
                }
            }
            
            $entity->setFaltanteFecha($post_data['faltante_fecha_submit']);
            
            //El comprobante
            if(isset($_FILES['faltante_comprobantefirmado']) && !empty($_FILES['faltante_comprobantefirmado']['name'])){
                //Si tiene una foto guurdada anteriormente
                $upload_folder ='/img/faltantes/';
                $tipo_archivo = $_FILES['faltante_comprobantefirmado']['type']; $tipo_archivo = explode('/', $tipo_archivo); $tipo_archivo = $tipo_archivo[1];  
                $nombre_archivo = 'comprobante_firmado_'.$entity->getIdfaltante().'.'.$tipo_archivo;
                $tmp_archivo = $_FILES['faltante_comprobantefirmado']['tmp_name'];
                $archivador = $upload_folder.$nombre_archivo;
                if(!move_uploaded_file($tmp_archivo, $_SERVER["DOCUMENT_ROOT"].$archivador)) {
                    return $this->getResponse()->setContent(\Zend\Json\Json::encode(array('response' => false, 'msg' => 'Ocurrio un error al subir el archivo. No pudo guardarse.', 'status' => 'error')));
                } 
                $entity->setFaltanteComprobantefirmado($archivador);
                
            }
            
            $entity->save();

            
            //Agregamos un mensaje
            $this->flashMessenger()->addSuccessMessage('Registro guardado exitosamente!');
                
            //Redireccionamos a nuestro list
            return $this->redirect()->toRoute('empleados-faltantes');
            
        }
        
        if($idrol == 1){
            
            $clinicas = \ClinicaQuery::create()->find();
            $empleados = \ClinicaempleadoQuery::create()->select('idempleado')->joinEmpleado()->withColumn('empleado_nombre')->useEmpleadoQuery()->useEmpleadoaccesoQuery()->filterByIdrol(2)->endUse()->endUse()->groupBy('idempleado')->find()->toArray(null,false,  \BasePeer::TYPE_FIELDNAME);
            
            $empleados_array = array();
            $clinicas_array = array();
            
            foreach ($empleados as $empleado) {
                $id = $empleado['idempleado'];
                $empleados_array[$id] = $empleado['empleado_nombre'];
            }

            foreach ($clinicas as $clinica) {
                $id = $clinica->getIdclinica();
                $clinicas_array[$id] = $clinica->getClinicaNombre();
            }
            
            $form = new \Empleados\Form\FaltantesForm($clinicas_array, $empleados_array);

            $form->add(array(
                'type' => 'Select',
                'name' => 'idempleadogenerador',
                'options' => array(
                   'value_options' => $empleados_array,
                ),
               'attributes' => array(
                   'class' => 'width-100',
                  
               ),
            ));
            
            
        }else if($idrol == 2){
            
            $clinicas = \ClinicaQuery::create()->filterByIdclinica($session->getIdClinica())->find();
            $empleados = \ClinicaempleadoQuery::create()->filterByIdclinica($session->getIdClinica())->filterByIdempleado($idempleado,\Criteria::NOT_EQUAL)->select('idempleado')->joinEmpleado()->withColumn('empleado_nombre')->useEmpleadoQuery()->useEmpleadoaccesoQuery()->filterByIdrol(2)->endUse()->endUse()->groupBy('idempleado')->find()->toArray(null,false,  \BasePeer::TYPE_FIELDNAME);

            $empleados_array = array();
            $clinicas_array = array();
            
            foreach ($empleados as $empleado) {
                $id = $empleado['idempleado'];
                $empleados_array[$id] = $empleado['empleado_nombre'];
            }

            foreach ($clinicas as $clinica) {
                $id = $clinica->getIdclinica();
                $clinicas_array[$id] = $clinica->getClinicaNombre();
            }
            
            $form = new \Empleados\Form\FaltantesForm($clinicas_array, $empleados_array);
            
            $form->get('idclinica')->setAttribute('readonly', true);
            
            $form->add(array(
                'type' => 'Select',
                'name' => 'idempleadogenerador',
                'options' => array(
                   'value_options' => array(
                       $idempleado => $session->getEmpleadoNombre(),
                   ),
                ),
               'attributes' => array(
                   'class' => 'width-100',
                    'readonly' => true,
               ),
            ));
            
        }
        
        $form->setData($entity->toArray(\BasePeer::TYPE_FIELDNAME));

        return new ViewModel(array(
            'id' => $idfaltante,
            'form' => $form,
            'entity' => json_encode($entity->toArray(\BasePeer::TYPE_FIELDNAME)),
            'successMessages' => $this->flashMessenger()->getSuccessMessages(),
        ));
        
    }


    public function nuevoAction()
    {   
        
        $request = $this->getRequest();
        
        $session = new \Shared\Session\AouthSession();
        $idrol = (int)$session->getIdrol();
        $idempleado = $session->getIdempleado();
        
        if($request->isPost()){
            
            $post_data = $request->getPost();
     
            foreach ($post_data as $k => $v){
                if(empty($v)){
                    unset($post_data[$k]);
                }
            }
            
            $entity = new \Faltante();
            
            foreach($post_data as $key => $value){
                if(\FaltantePeer::getTableMap()->hasColumn($key) && $key != 'faltante_fecha'){
                    $entity->setByName($key, $value, \BasePeer::TYPE_FIELDNAME);
                }
            }
            
            $entity->setFaltanteCreadaen(new \DateTime());
            $entity->setFaltanteFecha($post_data['faltante_fecha_submit']);
            
            $entity->save();
            
            //Agregamos un mensaje
            $this->flashMessenger()->addSuccessMessage('Registro guardado exitosamente!');
                
            //Redireccionamos a nuestro list
            return $this->redirect()->toRoute('empleados-faltantes',array('action' => 'editar', 'id' => $entity->getIdfaltante()));
   
        }

        if($idrol == 1){
            
            $clinicas = \ClinicaQuery::create()->find();
            $empleados = \ClinicaempleadoQuery::create()->select('idempleado')->joinEmpleado()->withColumn('empleado_nombre')->useEmpleadoQuery()->useEmpleadoaccesoQuery()->filterByIdrol(2)->endUse()->endUse()->groupBy('idempleado')->find()->toArray(null,false,  \BasePeer::TYPE_FIELDNAME);
            
            $empleados_array = array();
            $clinicas_array = array();
            
            foreach ($empleados as $empleado) {
                $id = $empleado['idempleado'];
                $empleados_array[$id] = $empleado['empleado_nombre'];
            }

            foreach ($clinicas as $clinica) {
                $id = $clinica->getIdclinica();
                $clinicas_array[$id] = $clinica->getClinicaNombre();
            }
            
            $form = new \Empleados\Form\FaltantesForm($clinicas_array, $empleados_array);

            $form->add(array(
                'type' => 'Select',
                'name' => 'idempleadogenerador',
                'options' => array(
                   'value_options' => $empleados_array,
                ),
               'attributes' => array(
                   'class' => 'width-100',
                  
               ),
            ));
            
            
        }else if($idrol == 2){
            
            $clinicas = \ClinicaQuery::create()->filterByIdclinica($session->getIdClinica())->find();
            $empleados = \ClinicaempleadoQuery::create()->filterByIdclinica($session->getIdClinica())->filterByIdempleado($idempleado,\Criteria::NOT_EQUAL)->select('idempleado')->joinEmpleado()->withColumn('empleado_nombre')->useEmpleadoQuery()->useEmpleadoaccesoQuery()->filterByIdrol(2)->endUse()->endUse()->groupBy('idempleado')->find()->toArray(null,false,  \BasePeer::TYPE_FIELDNAME);

            $empleados_array = array();
            $clinicas_array = array();
            
            foreach ($empleados as $empleado) {
                $id = $empleado['idempleado'];
                $empleados_array[$id] = $empleado['empleado_nombre'];
            }

            foreach ($clinicas as $clinica) {
                $id = $clinica->getIdclinica();
                $clinicas_array[$id] = $clinica->getClinicaNombre();
            }
            
            $form = new \Empleados\Form\FaltantesForm($clinicas_array, $empleados_array);
            
            $form->get('idclinica')->setAttribute('readonly', true);
            
            $form->add(array(
                'type' => 'Select',
                'name' => 'idempleadogenerador',
                'options' => array(
                   'value_options' => array(
                       $idempleado => $session->getEmpleadoNombre(),
                   ),
                ),
               'attributes' => array(
                   'class' => 'width-100',
                    'readonly' => true,
               ),
            ));
            
        }

        return new ViewModel(array(
            'form' => $form,
        ));
    }
}
