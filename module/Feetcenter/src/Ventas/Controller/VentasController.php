<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Ventas\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class VentasController  extends AbstractActionController
{
    
    public function cancelarAction(){
        
        if($this->params()->fromQuery('idvisita')){
            
            
            $session = new \Shared\Session\AouthSession();
            
            $idvisita = $this->params()->fromQuery('idvisita');
            $visita = \VisitaQuery::create()->findPk($idvisita);
            
            
            
            echo '<pre>';var_dump($visita->toArray()); echo '</pre>';exit();
            
            $viewModel = new ViewModel();
            $viewModel->setTerminal(true);
            $viewModel->setVariable('visita', $visita);
            
            return $viewModel;  
            
            
        }else{
            return $this->getResponse()->setContent(false);
        }
    }
    
    public function detallesAction(){
        
        if($this->params()->fromQuery('idvisita')){
            
            $idvisita = $this->params()->fromQuery('idvisita');
            
            $visita = \VisitaQuery::create()->findPk($idvisita);
            
            $viewModel = new ViewModel();
            $viewModel->setTerminal(true);
            $viewModel->setVariable('visita', $visita);
            
            return $viewModel;  
            
            
        }else{
            return $this->getResponse()->setContent(false);
        }
        
    }


    public function filterAction(){
        
        $request = $this->getRequest();
        
        if($request->isPost()){
            
            $post_data = $request->getPost();
            
            $visitas = \VisitaQuery::create()->joinEmpleadoRelatedByIdempleado()->withColumn('empleado_nombre')->joinPaciente()->withColumn('paciente_nombre')->joinClinica()->withColumn('clinica_nombre')->filterByIdclinica($post_data['clinicas'])->filterByVisitaEstatuspago($post_data['status'])->find()->toArray(null,false,  \BasePeer::TYPE_FIELDNAME);
            
            return $this->getResponse()->setContent(json_encode($visitas));

        }
        
    }
    
    public function indexAction()
    {
        $session = new \Shared\Session\AouthSession();
         
        //Las clinicas
        $clinicas = \ClinicaQuery::create()->find();
        
        return new ViewModel(array(
            'clinicas' => $clinicas,
            'session' => $session->getData(),
        ));
    }
}
