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

class PreciosController extends AbstractActionController
{
    public function indexAction()
    {
        $collection = \ProductoQuery::create()->find()->toArray(null,false,\BasePeer::TYPE_FIELDNAME);
        
        return new ViewModel(array(
            'collection' => $collection
        ));
    }
}
