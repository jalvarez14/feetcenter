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
            /*
             * MI CUENTA
             */
            
            'micuenta' => array(
                'type' => 'Segment',
                'options' => array(
                    'route'    => '/micuenta[/:id]',
                    'defaults' => array(
                        'controller'    => 'Feetcenter\Controller\Micuenta',
                        'action'        => 'index',
                    ),
                ),
            ),
            
            /*
             * REPORTES
             */
            'reportes' => array(
                'type' => 'Segment',
                'options' => array(
                    'route'    => '/reportes[/:action][/:id]',
                    'defaults' => array(
                        'controller'    => 'Reportes\Controller\Reportes',
                        'action'        => 'index',
                    ),
                ),
            ),
            /*
             * CONFIGURACION
             */
            'configuracion' => array(
                'type' => 'Segment',
                'options' => array(
                    'route'    => '/configuracion[/:action][/:id]',
                    'defaults' => array(
                        'controller'    => 'Configuracion\Controller\Configuracion',
                        'action'        => 'index',
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
                    'incidencia' => array(
                        'type' => 'Segment',
                        'options' => array(
                            'route'    => '/incidencia[/:action][/:id]',
                            'defaults' => array(
                                'controller'    => 'Catalogos\Controller\Incidencia',
                                'action'        => 'index',
                            ),
                        ),
                        
                    ),
                    'estatusseguimiento' => array(
                        'type' => 'Segment',
                        'options' => array(
                            'route'    => '/estatusseguimiento[/:action][/:id]',
                            'defaults' => array(
                                'controller'    => 'Catalogos\Controller\Estatusseguimiento',
                                'action'        => 'index',
                            ),
                        ),
                        
                    ),
                    'membresias' => array(
                        'type' => 'Segment',
                        'options' => array(
                            'route'    => '/membresias[/:action][/:id]',
                            'defaults' => array(
                                'controller'    => 'Catalogos\Controller\Membresia',
                                'action'        => 'index',
                            ),
                        ),
                        
                    ),
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
                    'concepto' => array(
                        'type' => 'Segment',
                        'options' => array(
                            'route'    => '/concepto[/:action][/:id]',
                            'defaults' => array(
                                'controller'    => 'Catalogos\Controller\Concepto',
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
            *MODULO ventas
            */
            'ventas' => array(
                'type' => 'Segment',
                'options' => array(
                    'route'    => '/ventas[/:action][/:id]',
                    'defaults' => array(
                        'controller'    => 'Ventas\Controller\Ventas',
                        'action'        => 'index',
                    ),
                ),
            ),
            'ventas-balance' => array(
                'type' => 'Segment',
                'options' => array(
                    'route'    => '/ventas/balance[/:action][/:id]',
                    'defaults' => array(
                        'controller'    => 'Ventas\Controller\Balance',
                        'action'        => 'index',
                    ),
                    'constraints' => array(
                        'action' => 'index|filter',
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
                ),
            ),
            /*
             * MODULO EGRESOS
             */
            'egresos' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/egresos[/:action][/:id]',
                    'defaults' => array(
                        'controller' => 'Egresos\Controller\Egresos',
                        'action' => 'index',
                    ),
                ),
            ),
            /*
             * MODULO EMPLEADOS
             */
            'empleados' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/empleados[/:action][/:id]',
                    'defaults' => array(
                        'controller' => 'Empleados\Controller\Empleados',
                        'action' => 'index',
                    ),
                ),
            ),
             'empleados-comisiones' => array(
                 'type' => 'Segment',
                 'options' => array(
                    'route' => '/empleados/comisiones[/:action][/:id]',
                    'defaults' => array(
                        'controller' => 'Empleados\Controller\Comisiones',
                        'action' => 'index',
                    ),
                ),
             ),
            'empleados-vendidos' => array(
                 'type' => 'Segment',
                 'options' => array(
                    'route' => '/empleados/vendidos[/:action][/:id]',
                    'defaults' => array(
                        'controller' => 'Empleados\Controller\Vendidos',
                        'action' => 'index',
                    ),
                ),
             ),
            'empleados-faltantes' => array(
                 'type' => 'Segment',
                 'options' => array(
                    'route' => '/empleados/faltantes[/:action][/:id]',
                    'defaults' => array(
                        'controller' => 'Empleados\Controller\Faltantes',
                        'action' => 'index',
                    ),
                ),
             ),
            'empleados-reportes' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/empleados/reportes',
                    'defaults' => array(
                        'controller' => 'Empleados\Controller\Reportes',
                        'action' => 'index',
                    ),
                ),
                'may_terminate' => true,
                    'child_routes' => array(
                        'nuevo' => array(
                            'type' => 'Segment',
                            'options' => array(
                                'route'    => '/nuevo',
                                'defaults' => array(
                                    'controller'    => 'Empleados\Controller\Reportes',
                                    'action'        => 'nuevo',
                                ),
                            ),
                        ),
                        'filter' => array(
                            'type' => 'Segment',
                            'options' => array(
                                'route'    => '/filter',
                                'defaults' => array(
                                    'controller'    => 'Empleados\Controller\Reportes',
                                    'action'        => 'filter',
                                ),
                            ),
                        ),
                        'vernota' => array(
                            'type' => 'Segment',
                            'options' => array(
                                'route'    => '/vernota',
                                'defaults' => array(
                                    'controller'    => 'Empleados\Controller\Reportes',
                                    'action'        => 'vernota',
                                ),
                            ),
                        ),
                        'editar' => array(
                            'type' => 'Segment',
                            'options' => array(
                                'route'    => '/editar/:id',
                                'defaults' => array(
                                    'controller'    => 'Empleados\Controller\Reportes',
                                    'action'        => 'editar',
                                ),
                            ),
                        ),
                        'eliminar' => array(
                            'type' => 'Segment',
                            'options' => array(
                                'route'    => '/eliminar/:id',
                                'defaults' => array(
                                    'controller'    => 'Empleados\Controller\Reportes',
                                    'action'        => 'eliminar',
                                ),
                            ),
                        ),
                    ),
            ),
            /*
             * MODULO Pacientes
             */
            'pacientes' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/pacientes',
                    'defaults' => array(
                        'controller' => 'Pacientes\Controller\Pacientes',
                        'action' => 'index',
                    ),
                ),
                'may_terminate' => true,
                'child_routes' => array(
                    'nuevo' => array(
                       'type' => 'Segment',
                       'options' => array(
                           'route'    => '/nuevo',
                           'defaults' => array(
                               'controller'    => 'Pacientes\Controller\Pacientes',
                               'action'        => 'nuevo',
                           ),
                       ),
                   ),
                    'filter' => array(
                       'type' => 'Segment',
                       'options' => array(
                           'route'    => '/filter',
                           'defaults' => array(
                               'controller'    => 'Pacientes\Controller\Pacientes',
                               'action'        => 'filter',
                           ),
                       ),
                   ),
                    'serverside' => array(
                       'type' => 'Segment',
                       'options' => array(
                           'route'    => '/serverside',
                           'defaults' => array(
                               'controller'    => 'Pacientes\Controller\Pacientes',
                               'action'        => 'serverside',
                           ),
                       ),
                   ),
                    'editar' => array(
                       'type' => 'Segment',
                       'options' => array(
                           'route'    => '/editar/:id',
                           'defaults' => array(
                               'controller'    => 'Pacientes\Controller\Pacientes',
                               'action'        => 'editar',
                           ),
                       ),
                   ),
                    'eliminar' => array(
                       'type' => 'Segment',
                       'options' => array(
                           'route'    => '/eliminar/:id',
                           'defaults' => array(
                               'controller'    => 'Pacientes\Controller\Pacientes',
                               'action'        => 'eliminar',
                           ),
                       ),
                   ),
                ),
            ),
            'grupos' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/pacientes/grupos[/:action][/:id]',
                    'defaults' => array(
                        'controller' => 'Pacientes\Controller\Grupos',
                        'action' => 'index',
                    ),
                ),
            ),
            'pacientes-visitas' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/pacientes/visitas[/:action][/:id]',
                    'defaults' => array(
                        'controller' => 'Pacientes\Controller\Visitas',
                        'action' => 'index',
                    ),
                ),
            ),
            'pacientes-membresias' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/pacientes/membresias[/:action][/:id]',
                    'defaults' => array(
                        'controller' => 'Pacientes\Controller\Membresias',
                        'action' => 'index',
                    ),
                ),
            ),
            'pacientes-expediente' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/pacientes/expediente[/:action][/:id]',
                    'defaults' => array(
                        'controller' => 'Pacientes\Controller\Expediente',
                        'action' => 'index',
                    ),
                ),
            ),
            'seguimiento' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/pacientes/seguimiento',
                    'defaults' => array(
                        'controller' => 'Pacientes\Controller\Seguimiento',
                        'action' => 'index',
                    ),
                ),
                'may_terminate' => true,
                'child_routes' => array(
                    'serverside' => array(
                       'type' => 'Segment',
                       'options' => array(
                           'route'    => '/serverside',
                           'defaults' => array(
                               'controller'    => 'Pacientes\Controller\Seguimiento',
                               'action'        => 'serverside',
                           ),
                       ),
                   ),
                    'quick' => array(
                       'type' => 'Segment',
                       'options' => array(
                           'route'    => '/quick',
                           'defaults' => array(
                               'controller'    => 'Pacientes\Controller\Seguimiento',
                               'action'        => 'quick',
                           ),
                       ),
                   ),
                    'ver' => array(
                       'type' => 'Segment',
                       'options' => array(
                           'route'    => '/ver/:id',
                           'defaults' => array(
                               'controller'    => 'Pacientes\Controller\Seguimiento',
                               'action'        => 'ver',
                           ),
                       ),
                   ),
                    'nuevo' => array(
                       'type' => 'Segment',
                       'options' => array(
                           'route'    => '/:id/nuevo',
                           'defaults' => array(
                               'controller'    => 'Pacientes\Controller\Seguimiento',
                               'action'        => 'nuevo',
                           ),
                       ),
                   ),
                    'editar' => array(
                       'type' => 'Segment',
                       'options' => array(
                           'route'    => '/:idpaciente/editar/:id',
                           'defaults' => array(
                               'controller'    => 'Pacientes\Controller\Seguimiento',
                               'action'        => 'editar',
                           ),
                       ),
                   ),
                    'eliminar' => array(
                       'type' => 'Segment',
                       'options' => array(
                           'route'    => '/:idpaciente/eliminar/:id',
                           'defaults' => array(
                               'controller'    => 'Pacientes\Controller\Seguimiento',
                               'action'        => 'eliminar',
                           ),
                       ),
                   ),
                ),
            ),
            /*
             * MODULO AGENDA
             */
            'agenda' => array(
                'type' => 'Segment',
                'options' => array(
                    'route'    => '/[:action][/:id]',
                    'defaults' => array(
                        'controller'    => 'Agenda\Controller\Agenda',
                        'action'        => 'index',
                    ),
                    'constraints' => array(
                        'action' => 'geteventosbyempleadoweek|geteventosbyclinicaweek|validarnuevofolio|validarmembresia|getserviciosbymembresia|pagar|quickaddvisita|editarevento|getpedicuristasbyclinica|gethorariosbyclinica|geteventosbyclinica|getrecesosbyclinica|nuevoreceso|nuevoreceso|nuevoevento|findpacientes|quickaddpaciente|quickupdaterelacionados|dropevent|dropreceso|resizereceso|resizeevent',
                    ),
                ),
            ),
        ),
    ),
    'console' => array(
        'router' => array(
            'routes' => array(
                'cron-autologout' => array(
                    'options' => array(
                        'route' => 'autologout',
                        'defaults' => array(
                            'controller' => 'Feetcenter\Controller\Cronjob',
                            'action' => 'autologout',
                        ),
                    ),
                ),
            )
        )
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
            'Catalogos\Controller\Concepto' => 'Catalogos\Controller\ConceptoController',
            'Catalogos\Controller\Clinica' => 'Catalogos\Controller\ClinicaController',
            'Catalogos\Controller\Insumo' => 'Catalogos\Controller\InsumoController',
            'Catalogos\Controller\Proveedor' => 'Catalogos\Controller\ProveedorController',
            'Catalogos\Controller\Canal' => 'Catalogos\Controller\CanalController',
            'Catalogos\Controller\Rol' => 'Catalogos\Controller\RolController',
            'Catalogos\Controller\Producto' => 'Catalogos\Controller\ProductoController',
            'Catalogos\Controller\Servicio' => 'Catalogos\Controller\ServicioController',
            'Catalogos\Controller\Empleado' => 'Catalogos\Controller\EmpleadoController',
            'Catalogos\Controller\Incidencia' => 'Catalogos\Controller\IncidenciaController',
            'Catalogos\Controller\Membresia' => 'Catalogos\Controller\MembresiaController',
            'Catalogos\Controller\Estatusseguimiento' => 'Catalogos\Controller\EstatusseguimientoController',
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
            //Egresos
            'Egresos\Controller\Egresos' => 'Egresos\Controller\EgresosController',
            //Empleados
            'Empleados\Controller\Empleados' => 'Empleados\Controller\EmpleadosController',
            'Empleados\Controller\Reportes' => 'Empleados\Controller\ReportesController',
            'Empleados\Controller\Comisiones' => 'Empleados\Controller\ComisionesController',
            'Empleados\Controller\Vendidos' => 'Empleados\Controller\VendidosController',
            'Empleados\Controller\Faltantes' => 'Empleados\Controller\FaltantesController',
            //Pacientes
            'Pacientes\Controller\Pacientes' => 'Pacientes\Controller\PacientesController',
            'Pacientes\Controller\Grupos' => 'Pacientes\Controller\GruposController',
            'Pacientes\Controller\Seguimiento' => 'Pacientes\Controller\SeguimientoController',
            'Pacientes\Controller\Membresias' => 'Pacientes\Controller\MembresiasController',
            'Pacientes\Controller\Visitas' => 'Pacientes\Controller\VisitasController',
            'Pacientes\Controller\Expediente'=> 'Pacientes\Controller\ExpedienteController',
            //Agenda
            'Agenda\Controller\Agenda' => 'Agenda\Controller\AgendaController',
            //Ventas
            'Ventas\Controller\Balance' => 'Ventas\Controller\BalanceController',
            'Ventas\Controller\Ventas' => 'Ventas\Controller\VentasController',
            //Configuracion
            'Configuracion\Controller\Configuracion' => 'Configuracion\Controller\ConfiguracionController',
            //Reportes
            'Reportes\Controller\Reportes' => 'Reportes\Controller\ReportesController',
            //Mi cuenta
            'Feetcenter\Controller\Micuenta' => 'Feetcenter\Controller\MicuentaController',
            //Cronjobs 
            'Feetcenter\Controller\Cronjob' => 'Feetcenter\Controller\CronjobController',
            
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

);
