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

class ProductoController extends AbstractActionController
{
    public function indexAction()
    {
         
        //Clinicas
        $clinicas = \ClinicaQuery::create()->find()->toArray(null,false,  \BasePeer::TYPE_FIELDNAME);
        
        //En caso de ser administrador
        $productos = \ProductoclinicaQuery::create()->filterByIdclinica(1)->joinProducto()->joinClinica()->withColumn('clinica_nombre')->withColumn('producto_nombre')->find()->toArray(null,false,  \BasePeer::TYPE_FIELDNAME);
        
        return new ViewModel(array(
            'clinicas' => $clinicas,
            'productos' => $productos,
        ));
    }
    
    public function filterbyclinicaAction(){
        
        $request = $this->request;
        
        if($request->isPost()){
            
            $post_data = $request->getPost();
            $productos = \ProductoclinicaQuery::create()->filterByIdclinica($post_data['selected'])->joinProducto()->joinClinica()->withColumn('clinica_nombre')->withColumn('producto_nombre')->find()->toArray(null,false,  \BasePeer::TYPE_FIELDNAME);
            return $this->getResponse()->setContent(\Zend\Json\Json::encode(array('result' => $productos)));
            
        }
        
    }
}
