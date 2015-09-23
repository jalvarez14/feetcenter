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
        if($sesion->getIdrol() == 1){
            $collection = \EgresoclinicaQuery::create()->find();
        }elseif($sesion->getIdrol() == 2){//ENCARGADO
            $collection = \EgresoclinicaQuery::create()->filterByIdclinica($sesion->getIdClinica())->find();
        }
        
        return new ViewModel(array(
            'collection'   => $collection,
            'successMessages' => $this->flashMessenger()->getSuccessMessages(),
        ));
        
        return new ViewModel();
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
}
