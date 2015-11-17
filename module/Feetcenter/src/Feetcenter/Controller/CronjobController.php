<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Feetcenter\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class CronjobController extends AbstractActionController
{
    public function autologoutAction()
    {
       
        $administradores = \EmpleadoaccesoQuery::create()->filterByIdrol(1)->find();
        foreach ($administradores as $admin){
            $admin->setEmpleadoaccesoEnsesion(0);
            $admin->save();
        }
        
    }
}
