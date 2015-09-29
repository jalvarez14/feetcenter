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

class GruposController extends AbstractActionController
{
    
    public function editarAction()
    { 
        $request = $this->getRequest();
        
        //Cachamos el valor desde nuestro params
        $id = (int) $this->params()->fromRoute('id');
        
         if ($request->isPost()){
             
            $post_data = $request->getPost();
            
            foreach ($post_data as $k => $v){
                if(empty($v)){
                    unset($post_data[$k]);
                }
            }
            
            $entity = \GrupoQuery::create()->findPk($id);
            
            foreach($post_data as $key => $value){
                if(\GrupoPeer::getTableMap()->hasColumn($key)){
                    $entity->setByName($key, $value, \BasePeer::TYPE_FIELDNAME);
                }
            }
            
            $entity->save();
            
            
            
            $entity->getGrupopacientes()->delete();
            
            //Ahora los pacientes
            if(isset($post_data['pacientes'])){
                foreach ($post_data['pacientes'] as $idpaciente){
                    $grupo_paciente = new \Grupopaciente();
                    $grupo_paciente->setIdgrupo($entity->getIdgrupo())
                                   ->setIdpaciente($idpaciente)
                                   ->save();
                }
            }
            
            
            //Agregamos un mensaje
            $this->flashMessenger()->addSuccessMessage('Registro guardado exitosamente!');
                
            //Redireccionamos a nuestro list
            return $this->redirect()->toRoute('grupos');

            
            
            
            
         }
        
        //Verificamos que el Id lugar que se quiere modificar exista
        if(!\GrupoQuery::create()->filterByIdgrupo($id)->exists()){
            $id =0;
        }
        //Si es incorrecto redireccionavos al action nuevo
        if (!$id) {
            return $this->redirect()->toRoute('grupos');
        }
        
        //Instanciamos nuestro lugar
        $entity = \GrupoQuery::create()->findPk($id);
        
        //Instanciamos nuestro formulario
        $form = new \Pacientes\Form\GrupoForm();

        //Le ponemos los datos de nuestro lugar a nuestro formulario
        $form->setData($entity->toArray(\BasePeer::TYPE_FIELDNAME));
        
        //Los pacientes deñ grupo
        $pacientes = $entity->getGrupopacientes();
        
        return new ViewModel(array(
            'id'  => $id,
            'form' => $form,
            'pacientes' => $pacientes,
        ));
        
        
    }
    
    public function eliminarAction(){
        
        $request = $this->getRequest();
        
        if($request->isPost()){
             
            $id = $this->params()->fromRoute('id');
            
            //Verificamos que el Id lugar que se quiere modificar exista
            if(!\GrupoQuery::create()->filterByIdgrupo($id)->exists()){
                $id =0;
            }
            
            //Si es incorrecto redireccionavos al action nuevo
            if (!$id) {
                return $this->redirect()->toRoute('grupos');
            }
            
            //Instanciamos nuestro lugar
            $entity = \GrupoQuery::create()->findPk($id);
            
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
    
    
    public function filterAction()
    {
        $query = $this->params()->fromQuery('q');
        
        $result = \PacienteQuery::create()->joinClinica()->withColumn('clinica_nombre')->filterByPacienteNombre('%'.$query .'%', \Criteria::LIKE)->find()->toArray(null,false,  \BasePeer::TYPE_FIELDNAME);
        
        //Damos el formato
        $result_array = array();
        foreach ($result as $r){
            $tmp['id'] = $r['idpaciente'];  
            $tmp['name'] = $r['paciente_nombre'].' - Celular: '.$r['paciente_celular'].' - Teléfono: '.$r['paciente_telefono'];
            $tmp['paciente_nombre'] = $r['paciente_nombre'];
            $tmp['clinica_nombre'] = $r['clinica_nombre'];
            $tmp['paciente_celular'] = $r['paciente_celular'];
            $tmp['paciente_telefono'] = $r['paciente_telefono'];
            
            $result_array[] = $tmp;
        }
        
        return $this->getResponse()->setContent(\Zend\Json\Json::encode($result_array));
        
        
    }
    
    public function indexAction()
    {
        $collection = \GrupoQuery::create()->find();
        $array = array();
        $grupo = new \Grupo();
        foreach ($collection as $grupo){
            $tmp = $grupo->toArray(\BasePeer::TYPE_FIELDNAME);
            $tmp["grupo_creadoen"] = $grupo->getGrupoCreadoen('d/m/Y');
            $tmp['count'] = $grupo->getGrupopacientes()->count();
            $array[] = $tmp;
        }
        
        return new ViewModel(array(
            'collection'   => $array,
            'successMessages' => $this->flashMessenger()->getSuccessMessages(),
        ));
        
        return new ViewModel();
    }
    
    public function nuevoAction()
    {
        
        $request = $this->getRequest();
        
        $form = new \Pacientes\Form\GrupoForm();
        
        if ($request->isPost()){
            
            $post_data = $request->getPost();
            
            foreach ($post_data as $k => $v){
                if(empty($v)){
                    unset($post_data[$k]);
                }
            }
            
            $entity = new \Grupo();
            
            foreach($post_data as $key => $value){
                if(\GrupoPeer::getTableMap()->hasColumn($key)){
                    $entity->setByName($key, $value, \BasePeer::TYPE_FIELDNAME);
                }
            }
            
            //La fecha de creacion
            $entity->setGrupoCreadoen(new \DateTime());
            
            $entity->save();
            
            //Ahora los pacientes
            if(isset($post_data['pacientes'])){
                foreach ($post_data['pacientes'] as $idpaciente){
                    $grupo_paciente = new \Grupopaciente();
                    $grupo_paciente->setIdgrupo($entity->getIdgrupo())
                                   ->setIdpaciente($idpaciente)
                                   ->save();
                }
            }
            
            //Agregamos un mensaje
            $this->flashMessenger()->addSuccessMessage('Registro guardado exitosamente!');
                
            //Redireccionamos a nuestro list
            return $this->redirect()->toRoute('grupos');

        }
        
        return new ViewModel(array(
            'form' => $form,
        ));
                        
    }
}
