<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Configuracion\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class ConfiguracionController extends AbstractActionController
{
    public function indexAction()
    {
        $request = $this->getRequest();
        
        if($request->isPost()){
            
            $post_data = $request->getPost();
            
            if(isset($post_data['configuracion'])){
                foreach ($post_data['configuracion'] as $config){
                    
                    $configuracion = \ConfiguracionQuery::create()->findOneByIdclinica($config['idclinica']);
                    $configuracion->setConfiguracionNumerocancelaciones($config['numerocancelaciones'])
                                  ->setConfiguracionValormaximocancelacion($config['valormaximocancelacion'])
                                  ->setConfiguracionHastacuantosdias($config['hastacuantosdias'])
                                  ->save();
                }
            }
            $this->flashMessenger()->addSuccessMessage('Registro guardado exitosamente!');
            
            return $this->redirect()->toRoute('configuracion');
        }
        
        $configuracion = \ConfiguracionQuery::create()->find();
        
        return new ViewModel(array(
            'successMessages' => $this->flashMessenger()->getSuccessMessages(),
            'configuracion' => $configuracion,
        ));
    }
}
