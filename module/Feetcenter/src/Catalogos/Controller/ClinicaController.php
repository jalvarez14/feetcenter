<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Catalogos\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class ClinicaController extends AbstractActionController
{
    public function indexAction()
    {
        $collection = \ClinicaQuery::create()->find()->toArray(null, false, \BasePeer::TYPE_FIELDNAME);
        
        return new ViewModel(array(
            'collection'   => $collection,
            'successMessages' => $this->flashMessenger()->getSuccessMessages(),
        ));
        
        return new ViewModel();
    }
    
    public function nuevoAction()
    {
        
        $request = $this->getRequest();
        
        $form = new \Catalogos\Form\ClinicaForm();
        
        if ($request->isPost()){
            
            $post_data = $request->getPost();

            foreach ($post_data as $k => $v){
                if(empty($v)){
                    unset($post_data[$k]);
                }
            }
            
            //Le ponemos los datos a nuestro formulario
            $form->setData($post_data);
            
            //Validamos nuestro formulario
            if ($form->isValid()) {
                
                $entity = new \Clinica();

                foreach ($form->getData() as $key => $value) {
                    $entity->setByName($key, $value, \BasePeer::TYPE_FIELDNAME);
                }
                
                //Guardamos en nuestra base de datos
                $entity->save();
                
                //Agregamos un mensaje
                $this->flashMessenger()->addSuccessMessage('Registro guardado exitosamente!');
                
                //Redireccionamos a nuestro list
                return $this->redirect()->toRoute('catalogos/clinica');

            }
        }
        return new ViewModel(array(
            'form' => $form,
        ));
        
    }
}
