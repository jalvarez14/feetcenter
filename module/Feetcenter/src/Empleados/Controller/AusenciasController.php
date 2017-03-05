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

class AusenciasController extends AbstractActionController
{
    
    
    
    
    public function nuevoAction(){
        
        $request = $this->getRequest();
        if($request->isPost()){
             $post_data = $request->getPost();
             $ausencia = new \Ausenciaempleado();
             $ausencia->setIdempleado($post_data['idempleado'])
                      ->setAusenciaempleadoFecha($post_data['start'])
                     ->setAusenciaempleadoNota($post_data['nota'])
                     ->save();
             
             $this->flashMessenger()->addSuccessMessage('Ausencia registrado exitosamente!');
             return $this->redirect()->toUrl('/empleados/ausencias');


        };
        
        
        
        $idclinica = $this->params()->fromQuery('idclinica');
        $start = $this->params()->fromQuery('start');
        
        
        $empleados = \ClinicaempleadoQuery::create()->filterByIdclinica($idclinica)->find();
        
        $view_model = new ViewModel();
        $view_model->setTerminal(true);
        $view_model->setVariables(array(
          'empleados' => $empleados,
          'start' => $start,
          'idclinica' => $idclinica,
        ));
        return $view_model;
    }


    
    public function eventdropAction(){
        $request = $this->getRequest();
         if($request->isPost()){
             $post_data = $request->getPost();
             $ausencia = \AusenciaempleadoQuery::create()->findPk($post_data['id']);
             $ausencia->setAusenciaempleadoFecha($post_data['start'])->save();
             return $this->getResponse()->setContent(json_encode(array('response' => true)));

         };
    }

    

    public function deleteAction(){
         
         $request = $this->getRequest();
         if($request->isPost()){
             $post_data = $request->getPost();
             $ausencia = \AusenciaempleadoQuery::create()->findPk($post_data['id']);
             $ausencia->delete();
             if($ausencia->isDeleted()){
                 return $this->getResponse()->setContent(json_encode(array('response' => true)));
             }

         };
         
     }


     public function getAction(){
        
         $idclinica = $this->params()->fromQuery('idclinica');
         $start = $this->params()->fromQuery('start');
         $end = $this->params()->fromQuery('end');
         
         $empleados = \ClinicaempleadoQuery::create()->select(array('Idempleado'))->filterByIdclinica($idclinica)->groupByIdempleado()->find()->toArray();
         $ausencias = \AusenciaempleadoQuery::create()->filterByIdempleado($empleados)->filterByAusenciaempleadoFecha(array('min' => $start, 'max' => $end))->find();
         
         $response = array();
         $ausencia = new \Ausenciaempleado();
         foreach ($ausencias as $ausencia){
             $tmp = array(
                 'id' => $ausencia->getIdausenciaempleado(),
                 'title' => $ausencia->getEmpleado()->getEmpleadoNombre()." - ".$ausencia->getAusenciaempleadoNota(),
                 'allDay' => true,
                 'start' => $ausencia->getAusenciaempleadoFecha(),
                 'end' => $ausencia->getAusenciaempleadoFecha(),
                 'color' => '#FFD52B',
                 'editable' => true,
             );
             $response[] = $tmp;
             
         }
         
         return $this->getResponse()->setContent(json_encode($response));
         
     }
    
    public function indexAction()
    {
        //echo '<pre>';var_dump($_SESSION);echo '</pre>';exit();
        $sesion = new \Shared\Session\AouthSession();
        $idrol = $sesion->getIdrol();
        
        //Administrador
        if(in_array($idrol, [1,6])){
            $clinicas = \ClinicaQuery::create()->find();
            $idclinica = 1;
        }else{
            $clinicas = \ClinicaQuery::create()->filterByIdclinica($sesion->getIdClinica())->find();
            $idclinica = $sesion->getIdClinica();
        }
           
        return new ViewModel(array(
            'clinicas' => $clinicas,
            'idclinica' => $idclinica,
            'successMessages' => $this->flashMessenger()->getSuccessMessages(),
        ));
    }
}
