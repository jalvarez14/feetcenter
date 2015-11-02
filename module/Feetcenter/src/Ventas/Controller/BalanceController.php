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
            echo '<pre>';var_dump($post_data);echo '</pre>';exit();
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
