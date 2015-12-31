<?php
return array(
    'Administrador' => array(
        "allow"=>array(
            //Catalogos
            'catalogos/clinica',
            'catalogos/insumo',
            'catalogos/proveedor',
            'catalogos/canal',
            'catalogos/rol',
            'catalogos/producto',
            'catalogos/servicio',
            'catalogos/empleado',
            'catalogos/concepto',
            'catalogos/incidencia',
            'catalogos/membresias',
            'catalogos/estatusseguimiento',
            //Compras
            'compras',
            //Login
            'login',
            //Inventarios
            'inventario/insumo',
            'inventario/producto',
            'inventario/existencias',
            'inventario/reorden',
            'inventario/transferencias',
            'inventario/precios',
            //Egresos
            'egresos',
            //Empleados
            'empleados',
            'empleados-reportes',
            'empleados-reportes/nuevo',
            'empleados-reportes/filter',
            'empleados-reportes/vernota',
            'empleados-reportes/editar',
            'empleados-reportes/eliminar',
            'empleados-comisiones',
            'empleados-vendidos',
            'empleados-faltantes',
            //pacientes
            'pacientes',
            'pacientes/nuevo',
            'pacientes/filter',
            'pacientes/editar',
            'pacientes/eliminar',
            'pacientes-membresias',
            'pacientes-expediente',
            'grupos',
            'seguimiento',
            'seguimiento/ver',
            'seguimiento/nuevo',
            'seguimiento/editar',
            'seguimiento/eliminar',
            'seguimiento/serverside',
            'seguimiento/quick',
            'pacientes-visitas',
            'pacientes/serverside',
            //Agenda
            'agenda',
            //ventas
            'ventas',
            'ventas-balance',
            //configuracion
            'configuracion',
            //reportes
            'reportes',
            //Cronjobs
            'cron-autologout',
        ),
        "deny"=>array(
             
        ),
    ),
    'Encargado' => array(
        "allow"=>array(
            //Login
            'login',
            //Inventarios
            'inventario/insumo',
            'inventario/producto',
            'inventario/reorden',
            'inventario/transferencias',
            'inventario/precios',
            //Egresos
            'egresos',
            //Empleados
            'empleados',
            'empleados-reportes',
            'empleados-reportes/nuevo',
            'empleados-reportes/filter',
            'empleados-reportes/vernota',
            'empleados-reportes/editar',
            'empleados-reportes/eliminar',
            'empleados-comisiones',
            'empleados-vendidos',
            'empleados-faltantes',
            //pacientes
            'pacientes/serverside',
            'pacientes',
            'pacientes/nuevo',
            'pacientes/filter',
            'pacientes/editar',
            'pacientes/eliminar',
            'pacientes-membresias',
            'pacientes-expediente',
            'grupos',
            'seguimiento',
            'seguimiento/ver',
            'seguimiento/nuevo',
            'seguimiento/editar',
            'seguimiento/eliminar',
            'seguimiento/serverside',
            'pacientes-visitas',
            //Agenda
            'agenda',
            //ventas
            'ventas-balance',
            'ventas',
            //reportes
            'reportes',
            //mi cuenta
            'micuenta',
            //Cronjobs
            'cron-autologout',
        ),
        "deny"=>array(
            //Inventarios
            'inventario/existencias',
            //Catalogos
            'catalogos/clinica',
            'catalogos/insumo',
            'catalogos/proveedor',
            'catalogos/canal',
            'catalogos/rol',
            'catalogos/producto',
            'catalogos/servicio',
            'catalogos/empleado',
            'catalogos/concepto',
            'catalogos/incidencia',
            'catalogos/membresias',
            //Compras
            'compras',
            //configuracion
            'configuracion'
            
        ),
    ),
    'Pedicurista' => array(
        "allow"=>array(
            //Login
            'login',
            //Empleados
            'empleados',
            'empleados-reportes',
            'empleados-reportes/vernota',
            'empleados-comisiones',
            'empleados-vendidos',
            //pacientes
            'pacientes',
            'pacientes/serverside',
            'pacientes/filter',
            'seguimiento',
            'seguimiento/ver',
            'seguimiento/serverside',
            'pacientes-visitas',
            'pacientes-expediente',
            //Agenda
            'agenda',
            //mi cuenta
            'micuenta',
            //Cronjobs
            'cron-autologout',
            
        ),
        "deny"=>array(
            //Catalogos
            'catalogos/clinica',
            'catalogos/insumo',
            'catalogos/proveedor',
            'catalogos/canal',
            'catalogos/rol',
            'catalogos/producto',
            'catalogos/servicio',
            'catalogos/empleado',
            'catalogos/concepto',
            'catalogos/membresias',
            //Compras
            'compras',
            //Inventarios
            'inventario/insumo',
            'inventario/producto',
            'inventario/existencias',
            'inventario/reorden',
            'inventario/transferencias',
            'inventario/precios',
            'catalogos/incidencia',
            //Egresos
            'egresos',
            'empleados-reportes/nuevo',
            'empleados-reportes/filter',
            'empleados-reportes/editar',
            'empleados-reportes/eliminar',
            'empleados-faltantes',
            //pacientes
            'pacientes/nuevo',
            'pacientes/editar',
            'pacientes/eliminar',
            'pacientes-membresias',
            'grupos',
            'seguimiento/nuevo',
            'seguimiento/editar',
            'seguimiento/eliminar',
            //ventas
            'ventas',
            'ventas-balance',
            //configuracion
            'configuracion',
            //reportes
            'reportes',

        ),
    ),
);
   