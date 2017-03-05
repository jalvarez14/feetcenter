<?php 

namespace Shared\CustomListener;
 
use Zend\Mvc\MvcEvent;
use Zend\EventManager\EventManagerInterface;
use Zend\EventManager\ListenerAggregateInterface;
use Zend\Code\Reflection\ClassReflection;
//use Zend\Code\Reflection\MethodReflection;

class TemplateMapListener implements ListenerAggregateInterface
{
    
    /* Primero registramos el listener y asignamos una prioridad alta (1000 es lo mas alto), 
     * para que se ejecute lo antes posible dentro del stack de 
     * listeners registrados en el evento.
    */
   
    protected $listeners = array();
    public function attach(EventManagerInterface $events)
    {
       $this->listeners[] = $events->attach(MvcEvent::EVENT_DISPATCH, array($this, 'onDispatch'),900);
    }
    //El m�todo detach() lo �nico que haces es remover el listener del evento. 
    public function detach(EventManagerInterface $events)
    {
       foreach ($this->listeners as $index => $listener) {
    	
           if ($events->detach($listener)) {
                unset($this->listeners[$index]);
            }
        } 
       
    }
    //Se toman desiciones personalizadas para la Aplicaci�n
    public function onDispatch(MvcEvent $e)
    {

    	$controller_params = $e->getRouteMatch()->getParams();
        
        $controller_of_route = $controller_params['controller'];  
        
        $section = new classReflection($controller_of_route.'Controller');
        
        $section = $section ->getFileName();      
        $section = explode("/src/",  $section);      
        $section = explode("/",$section[1]);
        
        $template_map=$e->getApplication()->getServiceManager()->get('viewtemplatemapresolver');

        if($section[0] == 'Login'){
            $template_map->merge(
                array(
                    'layout/layout'      => __DIR__.'/../../../view/layout/layout_login.phtml',                        
                ));
        }else{
           
            $sesion = new \Shared\Session\AouthSession();
            
            switch ($sesion->getRolNombre()){
                case 'Administrador':{
                    $template_map->merge(
                        array(
                        'layout/layout'      => __DIR__.'/../../../view/layout/layout.phtml',                                 
                    ));
                    
                    break;
                }
                case 'Encargado':{
                    $template_map->merge(
                        array(
                        'layout/layout'      => __DIR__.'/../../../view/layout/layout_encargado.phtml',                                 
                    ));
                    
                    break;
                }
                case 'Pedicurista' :{
                    $template_map->merge(
                        array(
                        'layout/layout'      => __DIR__.'/../../../view/layout/layout_pedicurista.phtml',                                 
                    ));
                    
                    break;
                }
                case 'Telefonista' :{
                    $template_map->merge(
                        array(
                        'layout/layout'      => __DIR__.'/../../../view/layout/layout_pedicurista.phtml',                                 
                    ));
                    
                    break;
                }
                case 'Auxiliar Adminsitrativo' :{
                    $template_map->merge(
                        array(
                        'layout/layout'      => __DIR__.'/../../../view/layout/layout.phtml',                                  
                    ));
                    
                    break;
                }
                
                
            }
            
            
        }    

    }
      
}