<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Egresos\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class EgresosController extends AbstractActionController
{
    public function indexAction()
    {
                        
        return new ViewModel();
    }
    
    public function nuevoAction()
    {
        
        $sesion = new \Shared\Session\AouthSession();

        //Administtrador
        if($sesion->getIdrol() == 1){
            $clinicas = \ClinicaQuery::create()->find()->toArray(null,false,  \BasePeer::TYPE_FIELDNAME);
        }
        //Encargado
        elseif ($sesion->getIdrol() == 2) {
             $clinicas = \ClinicaQuery::create()->filterByIdclinica($sesion->getIdClinica())->find()->toArray(null,false,  \BasePeer::TYPE_FIELDNAME);
        }
        
        //Damos formato de select
        $clinica_array = array();
        foreach ($clinicas as $clinica){
            $idclinica = $clinica['idclinica'];
            $clinica_array[$idclinica] = $clinica['clinica_nombre'];
        }
              
        //Instanciamos nuestro formulario
        $form = new \Egresos\Form\EgresoForm($clinica_array);
        
        
        return new ViewModel(array(
            'form' => $form,
        ));
    }
}
