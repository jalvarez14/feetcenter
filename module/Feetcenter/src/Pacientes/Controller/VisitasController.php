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

class VisitasController extends AbstractActionController
{
    
   public function filterAction(){
       
       $request = $this->getRequest();
       
       if($request->isPost()){
           
           $post_data = $request->getPost();
           
           $pacientes = \PacienteQuery::create()->joinClinica()->withColumn('clinica_nombre')->filterByIdclinica($post_data['clinicas'])->find()->toArray(null,false,  \BasePeer::TYPE_FIELDNAME);
           
           $visitas = \VisitaQuery::create()->filterByVisitaEstatuspago('pagada')->orderByVisitaCreadaen(\Criteria::ASC)->joinPaciente()->withColumn('paciente_nombre')->withColumn('paciente_celular')->joinClinica()->withColumn('clinica_nombre')->filterByIdclinica($post_data['clinicas'])->find()->toArray(null,false,  \BasePeer::TYPE_FIELDNAME);;
                      
           //Comparamos la fecha de hoy con el primer registro, para obtener las columnas (fechas)
           $first_date = new \DateTime();
           if(isset($visitas[0])){
               $first_date = new \DateTime($visitas[0]['visita_creadaen']);
           }
           $today = new \DateTime();
           $interval = $first_date->diff($today);
           
           return $this->getResponse()->setContent(json_encode(array('pacientes' => $pacientes, 'visitas' => $visitas,'year_start' =>(int) $first_date->format('Y'),'interval' => (int)$interval->format('%y'))));
       }
       
   }
    
    public function indexAction()
    {
        $session = new \Shared\Session\AouthSession();
        
        //Las clinicas
        $clinicas = \ClinicaQuery::create()->find();
        
        return new ViewModel(array(
            'session' => $session->getData(),
            'clinicas' => $clinicas,
        ));
    }
}
