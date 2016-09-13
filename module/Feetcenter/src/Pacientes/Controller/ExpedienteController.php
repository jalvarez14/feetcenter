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

class ExpedienteController extends AbstractActionController
{
    
    public function detallesAction(){
        if($this->params()->fromQuery('html')){
                
            $idvisita = $this->params()->fromQuery('idvisita');
            
            $visita = \VisitaQuery::create()->findPk($idvisita);
            
            $viewModel = new ViewModel();
            $viewModel->setTerminal(true);
            $viewModel->setVariable('visita', $visita);
            return $viewModel;  
        }
    }
    
    public function verAction(){
        
        //Recibimos el id del paciente
        $idpaciente = $this->params()->fromRoute('id');
        
        $paciente = \PacienteQuery::create()->findPk($idpaciente);
        
        //El historial de visitas
        $visitas = \VisitaQuery::create()->filterByIdpaciente($idpaciente)->orderByVisitaFechainicio(\Criteria::ASC)->find();
        

        return new ViewModel(array(
            'paciente' => $paciente,
            'visitas' => $visitas,
        ));
        
        
    }
    
    public function filterAction(){
        $request = $this->getRequest();
        
       if($request->isPost()){
           
           $post_data = $request->getPost();
           
           $pacientes = \PacienteQuery::create()->joinEmpleado()->withColumn('empleado_nombre')->joinClinica()->withColumn('clinica_nombre')->filterByIdclinica($post_data['clinicas'])->find()->toArray(null,false,  \BasePeer::TYPE_FIELDNAME);
           
           return $this->getResponse()->setContent(json_encode($pacientes));
       }
    }


    public function indexAction()
    {
        $session = new \Shared\Session\AouthSession();
        
        $clinicas = \ClinicaQuery::create()->find();
        
        return new ViewModel(array(
            'successMessages' => $this->flashMessenger()->getSuccessMessages(),
            'clinicas' => $clinicas,
            'session' => $session->getData(),
        ));
    }
}
