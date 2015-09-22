<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

return array(
    'router' => array(
        'routes' => array(
            'home' => array(
                'type' => 'Zend\Mvc\Router\Http\Literal',
                'options' => array(
                    'route'    => '/',
                    'defaults' => array(
                        'controller' => 'Feetcenter\Controller\Index',
                        'action'     => 'index',
                    ),
                ),
            ),
            'catalogos' => array(
                'type' => 'Literal',
                'options' => array(
                    'route'    => '/catalogos',
                ),
                'may_terminate' => false,
                'child_routes' => array(
                    'clinica' => array(
                        'type' => 'Segment',
                        'options' => array(
                            'route'    => '/clinica[/:action][/:id]',
                            'defaults' => array(
                                'controller'    => 'Catalogos\Controller\Clinica',
                                'action'        => 'index',
                            ),
                        ),
                        
                    ),
                    'insumo' => array(
                        'type' => 'Segment',
                        'options' => array(
                            'route'    => '/insumo[/:action][/:id]',
                            'defaults' => array(
                                'controller'    => 'Catalogos\Controller\Insumo',
                                'action'        => 'index',
                            ),
                        ),
                        
                    ),
                    'proveedor' => array(
                        'type' => 'Segment',
                        'options' => array(
                            'route'    => '/proveedor[/:action][/:id]',
                            'defaults' => array(
                                'controller'    => 'Catalogos\Controller\Proveedor',
                                'action'        => 'index',
                            ),
                        ),
                        
                    ),
                    'canal' => array(
                        'type' => 'Segment',
                        'options' => array(
                            'route'    => '/canal[/:action][/:id]',
                            'defaults' => array(
                                'controller'    => 'Catalogos\Controller\Canal',
                                'action'        => 'index',
                            ),
                        ),
                        
                    ),
                    'rol' => array(
                        'type' => 'Segment',
                        'options' => array(
                            'route'    => '/rol[/:action][/:id]',
                            'defaults' => array(
                                'controller'    => 'Catalogos\Controller\Rol',
                                'action'        => 'index',
                            ),
                        ),
                        
                    ),
                    'producto' => array(
                        'type' => 'Segment',
                        'options' => array(
                            'route'    => '/producto[/:action][/:id]',
                            'defaults' => array(
                                'controller'    => 'Catalogos\Controller\Producto',
                                'action'        => 'index',
                            ),
                        ),
                    ),
                    'servicio' => array(
                        'type' => 'Segment',
                        'options' => array(
                            'route'    => '/servicio[/:action][/:id]',
                            'defaults' => array(
                                'controller'    => 'Catalogos\Controller\Servicio',
                                'action'        => 'index',
                            ),
                        ),
                    ),
                    'empleado' => array(
                        'type' => 'Segment',
                        'options' => array(
                            'route'    => '/empleado[/:action][/:id]',
                            'defaults' => array(
                                'controller'    => 'Catalogos\Controller\Empleado',
                                'action'        => 'index',
                            ),
                        ),
                    ),
                ),
            ),
            /*
            * MODULO COMPRAS
            */
            'compras' => array(
                'type' => 'Segment',
                'options' => array(
                    'route'    => '/compras[/:action][/:id]',
                    'defaults' => array(
                        'controller'    => 'Compras\Controller\Compras',
                        'action'        => 'index',
                    ),
                ),
            ),
            /*
            *MODULO Login
            */
            'login' => array(
                'type' => 'Segment',
                'options' => array(
                    'route'    => '/login[/:action][/:id]',
                    'defaults' => array(
                        'controller'    => 'Login\Controller\Login',
                        'action'        => 'index',
                    ),
                ),
            ),
            /*
             * MODULO INVENTARIOS
             */
            'inventario' => array(
                'type' => 'Literal',
                'options' => array(
                    'route'    => '/inventario',
                ),
                'may_terminate' => false,
                'child_routes' => array(
                    'insumo' => array(
                        'type' => 'Segment',
                        'options' => array(
                            'route'    => '/insumo[/:action][/:id]',
                            'defaults' => array(
                                'controller'    => 'Inventario\Controller\Insumo',
                                'action'        => 'index',
                            ),
                        ),
                    ),
                    'producto' => array(
                        'type' => 'Segment',
                        'options' => array(
                            'route'    => '/producto[/:action][/:id]',
                            'defaults' => array(
                                'controller'    => 'Inventario\Controller\Producto',
                                'action'        => 'index',
                            ),
                        ),
                    ),
                    'existencias' => array(
                        'type' => 'Segment',
                        'options' => array(
                            'route'    => '/existencias[/:action][/:id]',
                            'defaults' => array(
                                'controller'    => 'Inventario\Controller\Existencias',
                                'action'        => 'index',
                            ),
                        ),
                    ),
                    'reorden' => array(
                        'type' => 'Segment',
                        'options' => array(
                            'route'    => '/reorden[/:action][/:id]',
                            'defaults' => array(
                                'controller'    => 'Inventario\Controller\Reorden',
                                'action'        => 'index',
                            ),
                        ),
                    ),
                    'transferencias' => array(
                        'type' => 'Segment',
                        'options' => array(
                            'route'    => '/transferencias[/:action][/:id]',
                            'defaults' => array(
                                'controller'    => 'Inventario\Controller\Transferencias',
                                'action'        => 'index',
                            ),
                        ),
                    ),
                    'precios' => array(
                        'type' => 'Segment',
                        'options' => array(
                            'route'    => '/precios[/:action]',
                            'defaults' => array(
                                'controller'    => 'Inventario\Controller\Precios',
                                'action'        => 'index',
                            ),
                        ),
                    ),
                )
            ),
            
        ),
    ),
    'service_manager' => array(
        'abstract_factories' => array(
            'Zend\Cache\Service\StorageCacheAbstractServiceFactory',
            'Zend\Log\LoggerAbstractServiceFactory',
        ),
        'factories' => array(
            'translator' => 'Zend\Mvc\Service\TranslatorServiceFactory',
        ),
    ),
    'translator' => array(
        'locale' => 'en_US',
        'translation_file_patterns' => array(
            array(
                'type'     => 'gettext',
                'base_dir' => __DIR__ . '/../language',
                'pattern'  => '%s.mo',
            ),
        ),
    ),
    'controllers' => array(
        'invokables' => array(
            'Feetcenter\Controller\Index' => 'Feetcenter\Controller\IndexController',
            //Catalogos
            'Catalogos\Controller\Clinica' => 'Catalogos\Controller\ClinicaController',
            'Catalogos\Controller\Insumo' => 'Catalogos\Controller\InsumoController',
            'Catalogos\Controller\Proveedor' => 'Catalogos\Controller\ProveedorController',
            'Catalogos\Controller\Canal' => 'Catalogos\Controller\CanalController',
            'Catalogos\Controller\Rol' => 'Catalogos\Controller\RolController',
            'Catalogos\Controller\Producto' => 'Catalogos\Controller\ProductoController',
            'Catalogos\Controller\Servicio' => 'Catalogos\Controller\ServicioController',
            'Catalogos\Controller\Empleado' => 'Catalogos\Controller\EmpleadoController',
            //Compras
            'Compras\Controller\Compras' => 'Compras\Controller\ComprasController',
            //Login
            'Login\Controller\Login' => 'Login\Controller\LoginController',
            //Inventario
            ' Inventario\Controller\Insumo' => 'Inventario\Controller\InsumoController',
            'Inventario\Controller\Producto' => 'Inventario\Controller\ProductoController',
            'Inventario\Controller\Existencias' => 'Inventario\Controller\ExistenciasController',
            'Inventario\Controller\Reorden' => 'Inventario\Controller\ReordenController',
            'Inventario\Controller\Transferencias' => 'Inventario\Controller\TransferenciasController',
            'Inventario\Controller\Precios' => 'Inventario\Controller\PreciosController',
        ),
    ),
    'view_manager' => array(
        'display_not_found_reason' => true,
        'display_exceptions'       => true,
        'doctype'                  => 'HTML5',
        'not_found_template'       => 'error/404',
        'exception_template'       => 'error/index',
        'template_map' => array(
            'layout/layout'           => __DIR__ . '/../view/layout/layout.phtml',
            'application/index/index' => __DIR__ . '/../view/application/index/index.phtml',
            'error/404'               => __DIR__ . '/../view/error/404.phtml',
            'error/index'             => __DIR__ . '/../view/error/index.phtml',
        ),
        'template_path_stack' => array(
            __DIR__ . '/../view',
        ),
    ),
    // Placeholder for console routes
    'console' => array(
        'router' => array(
            'routes' => array(
            ),
        ),
    ),
);
