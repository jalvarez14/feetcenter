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
        $sesion = new \Shared\Session\AouthSession();
        if($sesion->isActive()){
            //Iniciamos la lista de control de acceso
            $this->initAcl($e);
            $e->getApplication()->getEventManager()->attach('route', array($this, 'checkAcl'));
        }
        
        
        $eventManager        = $e->getApplication()->getEventManager();
        
        $moduleRouteListener = new ModuleRouteListener();
        $moduleRouteListener->attach($eventManager);
        
        $themeListener   = new TemplateMapListener();
        $themeListener->attach($eventManager);
        
        $authListener = new AuthListener();
        $authListener->attach($eventManager);
        
        
    }
    
    public function initAcl(MvcEvent $e){
        $acl = new \Zend\Permissions\Acl\Acl();
        $roles=require_once __DIR__ . '/config/module.acl.roles.php';
        foreach($roles as $role => $resources){
            $role = new \Zend\Permissions\Acl\Role\GenericRole($role);
            $acl->addRole($role);
            //Recorremos los recursos o rutas permitidas
            foreach($resources["allow"] as $resource){
                //Si el recurso no existe lo añadimos
                if(!$acl->hasResource($resource)){
                     $acl->addResource(new \Zend\Permissions\Acl\Resource\GenericResource($resource));
                }
                //Permitimos a ese rol ese recurso
                 $acl->allow($role, $resource);
            }
            foreach ($resources["deny"] as $resource) {
                //Si el recurso no existe lo añadimos
                if(!$acl->hasResource($resource)){
                    $acl->addResource(new \Zend\Permissions\Acl\Resource\GenericResource($resource));
                }
                //Denegamos a ese rol ese recurso
                $acl->deny($role, $resource);
	                    
            }
            
        }
        $e->getViewModel()->acl=$acl;

    }
    
    public function checkAcl(MvcEvent $e){
        
        //Instanciamos nuestra sesion
        $sesion = new \Shared\Session\AouthSession();
        
        //guardamos el nombre de la ruta o recurso a permitir o denegar
        $route=$e->getRouteMatch()->getMatchedRouteName();      
        $rol = $sesion->getRolNombre();
        
        if(!$e->getViewModel()->acl->isAllowed($rol, $route)) {
            $response = $e->getResponse();
            $response->getHeaders()->addHeaderLine('Location', $e->getRequest()->getBaseUrl() . '/404');
            $response->setStatusCode(404); 
            
            
        }
        
                
    }

    public function getConfig()
    {
        return include __DIR__ . '/config/module.config.php';
    }

    public function getAutoloaderConfig()
    {

        return array(
            'Zend\Loader\ClassMapAutoloader' => array(
                __DIR__ . '/autoload_classmap.php',
            ),
//            'Zend\Loader\StandardAutoloader' => array(
//                'namespaces' => array(
//                    __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
//                    'Catalogos' => __DIR__ . '/src/'  .'Catalogos',
//                    'Compras' => __DIR__ . '/src/'  .'Compras',
//                    'Login' => __DIR__ . '/src/'  .'Login',
//                    'Shared' => __DIR__ . '/src/'  .'Shared',
//                    'Inventario' => __DIR__ . '/src/'  .'Inventario',
//                    'Egresos' => __DIR__ . '/src/'  .'Egresos',
//                    'Empleados' => __DIR__ . '/src/'  .'Empleados',
//                    'Pacientes' => __DIR__ . '/src/'  .'Pacientes',
//                    'Agenda' => __DIR__ . '/src/'  .'Agenda',
//                    'Ventas' => __DIR__ . '/src/'  .'Ventas',
//                    'Configuracion' => __DIR__ . '/src/'  .'Configuracion',
//                    'Reportes' => __DIR__ . '/src/'  .'Reportes',
//                    
//                ),
//            ),
        );
    }
}
