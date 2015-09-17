<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Feetcenter;

use Zend\Mvc\ModuleRouteListener;
use Zend\Mvc\MvcEvent;

use Shared\CustomListener\TemplateMapListener;
use Shared\CustomListener\AuthListener;

class Module
{
    public function onBootstrap(MvcEvent $e)
    {
        $eventManager        = $e->getApplication()->getEventManager();
        
        $moduleRouteListener = new ModuleRouteListener();
        $moduleRouteListener->attach($eventManager);
        
        $themeListener   = new TemplateMapListener();
        $themeListener->attach($eventManager);
        
        $authListener = new AuthListener();
        $authListener->attach($eventManager);
        
        
    }

    public function getConfig()
    {
        return include __DIR__ . '/config/module.config.php';
    }

    public function getAutoloaderConfig()
    {

        return array(
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
                    'Catalogos' => __DIR__ . '/src/'  .'Catalogos',
                    'Compras' => __DIR__ . '/src/'  .'Compras',
                    'Login' => __DIR__ . '/src/'  .'Login',
                    'Shared' => __DIR__ . '/src/'  .'Shared',
                    'Inventario' => __DIR__ . '/src/'  .'Inventario',
                ),
            ),
        );
    }
}
