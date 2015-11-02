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

class BalanceController extends AbstractActionController
{
    
    public function filterAction()
    {
        $request = $this->getRequest();
        if($request->isPost()){
            
            $post_data = $request->getPost();
            
            $result = array();
            
            $clinicas = \ClinicaQuery::create()->filterByIdclinica($post_data['clinicas'])->find();
            $clinica = new \Clinica();
            foreach ($clinicas as $clinica){
                $tmp['idclinica'] = $clinica->getIdclinica();
                $tmp['ingreso']  = !is_null(\VisitaQuery::create()->filterByVisitaCreadaen(array('min' => $post_data['from'].' 00:00:00', 'max' => $post_data['to'].' 23:59:59'))->withColumn('SUM(visita_total)','total')->select('total')->filterByIdclinica($clinica->getIdclinica())->filterByVisitaEstatuspago('pagada')->findOne()) ? \VisitaQuery::create()->filterByVisitaCreadaen(array('min' => $post_data['from'].' 00:00:00', 'max' => $post_data['to'].' 23:59:59'))->withColumn('SUM(visita_total)','total')->select('total')->filterByIdclinica($clinica->getIdclinica())->filterByVisitaEstatuspago('pagada')->findOne(): 0;
                $tmp['egreso']   = !is_null(\EgresoclinicaQuery::create()->filterByEgresoclinicaFecha(array('min' => $post_data['from'].' 00:00:00', 'max' => $post_data['to'].' 23:59:59'))->withColumn('SUM(egresoclinica_cantidad)','total')->select('total')->filterByIdclinica($clinica->getIdclinica())->findOne()) ? \EgresoclinicaQuery::create()->filterByEgresoclinicaFecha(array('min' => $post_data['from'].' 00:00:00', 'max' => $post_data['to'].' 23:59:59'))->withColumn('SUM(egresoclinica_cantidad)','total')->select('total')->filterByIdclinica($clinica->getIdclinica())->findOne() : 0;
                $tmp['balance'] = $tmp['ingreso'] - $tmp['egreso'];
                
                $result[] =$tmp;
            }
           
            return $this->getResponse()->setContent(json_encode($result));
        }
    }
    public function indexAction()
    {
            
        $session  = new \Shared\Session\AouthSession();
        $idrol = $session->getIdrol();
        
         if($idrol == 1){ //Admnistrador
            $clinicas = \ClinicaQuery::create()->find();
         }else{
            $clinicas = \ClinicaQuery::create()->filterByIdclinica($session->getIdclinica())->find();
         }
         
        return new ViewModel(array(
            'session' => $session->getData(),
            'clinicas' => $clinicas,
        ));
        
        
        return new ViewModel();
    }
}