<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Inventario\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class InsumoController extends AbstractActionController
{
    public function indexAction()
    {
         
        //Clinicas
        $session = new \Shared\Session\AouthSession();
       
        if($session->getIdrol() == 1){ //Es administrador
            $clinicas = \ClinicaQuery::create()->find()->toArray(null,false,  \BasePeer::TYPE_FIELDNAME);
            $idclinica = 1;
        }else{
            $clinicas = \ClinicaQuery::create()->filterByIdclinica($session->getIdClinica())->find()->toArray(null,false,  \BasePeer::TYPE_FIELDNAME);
            $idclinica = $session->getIdClinica();
        }
        
        //En caso de ser administrador
        $insumos = \InsumoclinicaQuery::create()->filterByIdclinica(1)->joinInsumo()->joinClinica()->withColumn('clinica_nombre')->withColumn('insumo_nombre')->find()->toArray(null,false,  \BasePeer::TYPE_FIELDNAME);

        return new ViewModel(array(
            'idclinica' => $idclinica,
            'clinicas' => $clinicas,
            'insumos' => $insumos,
        ));
    }
    
    public function filterbyclinicaAction(){
        
        $request = $this->request;
        
        if($request->isPost()){
            
            $post_data = $request->getPost();
            $insumos = \InsumoclinicaQuery::create()->filterByIdclinica($post_data['selected'])->joinInsumo()->joinClinica()->withColumn('clinica_nombre')->withColumn('insumo_nombre')->find()->toArray(null,false,  \BasePeer::TYPE_FIELDNAME);
            return $this->getResponse()->setContent(\Zend\Json\Json::encode(array('result' => $insumos)));
            
        }
        
    }
}
