(function( $ ){
    
   
   /*
    * Handle input. Call public functions and initializers
    */
   
    $.fn.reporteEmpleados = function(data){
        var _this = $(this);
        var plugin = _this.data('reporteEmpleados');
        
        /*Inicializado ?*/
        if (!plugin) {
            
            plugin = new $.reporteEmpleados(this, data);
            
            _this.data('reporteEmpleados', plugin);
            
            return plugin;
        /*Si ya fue inizializado regresamos el plugin*/    
        }else{
            return plugin;
        }
        
    };
    
    /*
    * Plugin Constructor
    */
   
    $.reporteEmpleados = function(container, options){
        
        var plugin = this;
        
        /* 
        * Default Values
        */ 
       
       var defaults = {
           
       };
       
       /* 
        * Important Components
        */ 
        var $container = $(container);
        var $tableServicios = $container.find('.table-vendidos-servicios');
        var $tableProductos = $container.find('.table-vendidos-productos');
        
        var settings;
        var $table1;
        var $table2;
        /*
        * Private methods
        */
       
       
       var filter = function(from,to){
           
           var empleados_select = $container.find("select[name=idempleado]").multipleSelect('getSelects');
           if(typeof from == 'undefined' && typeof to == 'undefined'){
               //El origen de los tiempo
               from = moment('19-08-1990','DD-MM-YYYY');
               to = moment();
           }
           
           $tableServicios.find('tr').remove();
           $tableProductos.find('tr').remove();          
           
           if(typeof $table1 != 'undefined' && typeof $table2 != 'undefined'){
                $table1.clear();
                $table1.destroy();
                $table2.clear();
                $table2.destroy();
            }
           
           $.ajax({
               method:'POST',
               dataType:'json',
               url:'/reportes/filterempleado',
               async:false,
               data:{empleados:empleados_select,from:from.format('YYYY-MM-DD'),to:to.format('YYYY-MM-DD')},
               success:function(data){

                   //Las cabeceras de nuestras tablas
                   var thead_servicios = $('<tr>');
                   thead_servicios.append('<th>Servicios</th>');
                   var thead_productos = $('<tr>');
                   thead_productos.append('<th>Productos</th>');

                   $.each(data.empleados,function(){
                       
                       var td = $('<th>'+this.empleado_nombre+'</th>').attr('idempleado',this.idempleado);
                     
                       thead_servicios.append(td);
                       
                       var td = $('<th>'+this.empleado_nombre+'</th>').attr('idempleado',this.idempleado);
                       
                       thead_productos.append(td);
                 
                   });
                   
                   $tableServicios.find('thead').append(thead_servicios);
                   $tableProductos.find('thead').append(thead_productos);
                                      
                   /*
                    * SERVICIOS
                    */
  
                   if(data.vendidos.length > 0){
                        
                        //Creamos el esqueleto
                        $.each(data.vendidos[0].servicios,function(idservicio){
                           
                            var tr = $('<tr>').attr('idservicio', idservicio);
                            tr.append('<td>'+this.servicio_nombre+'</td>');
                            for(var i=0;i<data.empleados.length;i++){
                                 tr.append('<td></td>');
                            }
                            $tableServicios.find('tbody').append(tr);
                        });
                        
                        //Insertamos los servicios
                        $.each(data.vendidos,function(){

                            var index = $tableServicios.find('thead tr th[idempleado='+this.idempleado+']').index();
                            
                            $.each(this.servicios,function(idservicio){
                                var td = $tableServicios.find('tr[idservicio='+idservicio+']').find('td').eq(index);
                                td.text(this.vendidos);
                            });
                        });
                        
                    }
                    
                    /*
                    * MEMBRESIA
                    */
                
                   if(data.vendidos.length > 0){
                  
                        //Creamos el esqueleto
                        $.each(data.vendidos[0].membresias,function(idmembresia){
                           
                            var tr = $('<tr>').attr('idmembresia', idmembresia);
                            tr.append('<td>'+this.membresia_nombre+'</td>');
                            for(var i=0;i<data.empleados.length;i++){
                                 tr.append('<td></td>');
                            }
                            $tableServicios.find('tbody').append(tr);
                        });
                
                        //Insertamos los servicios
                        $.each(data.vendidos,function(idempleado){

                            var index = $tableServicios.find('thead tr th[idempleado='+this.idempleado+']').index();
                            
                            $.each(this.membresias,function(idmembresia){
   
                                var td = $tableServicios.find('tr[idmembresia='+idmembresia +']').find('td').eq(index);
                                td.text(this.vendidos);
                            });
                        });
                    }
                
                    /*
                    * PRODUCTOS
                    */
                   
                   if(data.vendidos.length > 0){
                        
                        //Creamos el esqueleto
                        $.each(data.vendidos[0].productos,function(idproducto){
                           
                            var tr = $('<tr>').attr('idproducto', idproducto);
                            tr.append('<td>'+this.producto_nombre+'</td>');
                            for(var i=0;i<data.empleados.length;i++){
                                 tr.append('<td></td>');
                            }
                            $tableProductos.find('tbody').append(tr);
                        });
                  
                        //Insertamos los servicios
                        $.each(data.vendidos,function(idempleado){

                            var index = $tableProductos.find('thead tr th[idempleado='+this.idempleado+']').index();
                            
                            $.each(this.productos,function(idproducto){
   
                                var td = $tableProductos.find('tr[idproducto='+idproducto+']').find('td').eq(index);
                                td.text(this.vendidos);
                                
                            });
                        });
                    }
                   
                   /*
                    * DATATABLE
                    */
                   $.ajax({
                        url: '/json/lang_es_datatable.json',
                        dataType: 'json',
                        async:false,
                        success: function(data){
                            $table1 = $tableServicios.DataTable({
                                language:data,
                            });
                            $table2 = $tableProductos.DataTable({
                                language:data,
                            });
                        },
                    });
               }
           })


       }
       
       /*
        * Public methods
        */
        
        plugin.init = function(){
            
            settings = plugin.settings = $.extend({}, defaults, options);
            if(settings.session.idclinica == null){
                settings.session.idclinica = 1;
            }
           

            //Inicializamos nuestro multiple select
            $container.find("select[name=idempleado]").multipleSelect({
                onClick : function(){
                    filter();
                },
                onCheckAll: function(){
                    filter();
                },
            });
            
            //Seleccionamos por default los empleados pertenecientes a la su
            if(settings.session.idclinica != 1){
                $container.find("select[name=idempleado]").multipleSelect('checkAll');
                filter();
            }

            /*
             * El evento filter
             */
            
            //Inicializamos nuestros calendarios del filtro de fechas
            var pickdateFrom = $container.find('input[name=filter_from]').pickadate({
                monthsFull: [ 'enero', 'febrero', 'marzo', 'abril', 'mayo', 'junio', 'julio', 'agosto', 'septiembre', 'octubre', 'noviembre', 'diciembre' ],
                monthsShort: [ 'ene', 'feb', 'mar', 'abr', 'may', 'jun', 'jul', 'ago', 'sep', 'oct', 'nov', 'dic' ],
                weekdaysFull: [ 'domingo', 'lunes', 'martes', 'miércoles', 'jueves', 'viernes', 'sábado' ],
                weekdaysShort: [ 'dom', 'lun', 'mar', 'mié', 'jue', 'vie', 'sáb' ],
                today: 'hoy',
                clear: 'borrar',
                close: 'cerrar',
                firstDay: 1,
                format: 'd !de mmmm !de yyyy',
                formatSubmit: 'yyyy/mm/dd',
                selectYears: true,
                selectMonths: true,
                selectYears: 25,
            });
            
            //Inicializamos nuestros calendarios del filtro de fechas
            var pickdateTo= $container.find('input[name=filter_to]').pickadate({
                monthsFull: [ 'enero', 'febrero', 'marzo', 'abril', 'mayo', 'junio', 'julio', 'agosto', 'septiembre', 'octubre', 'noviembre', 'diciembre' ],
                monthsShort: [ 'ene', 'feb', 'mar', 'abr', 'may', 'jun', 'jul', 'ago', 'sep', 'oct', 'nov', 'dic' ],
                weekdaysFull: [ 'domingo', 'lunes', 'martes', 'miércoles', 'jueves', 'viernes', 'sábado' ],
                weekdaysShort: [ 'dom', 'lun', 'mar', 'mié', 'jue', 'vie', 'sáb' ],
                today: 'hoy',
                clear: 'borrar',
                close: 'cerrar',
                firstDay: 1,
                format: 'd !de mmmm !de yyyy',
                formatSubmit: 'yyyy/mm/dd',
                selectYears: true,
                selectMonths: true,
                selectYears: 25,
            });
            
            $container.find('button#filterbydate').on('click',function(){
                
                var empty = false;
                
                $('#filter_container input:visible').removeClass('input-error');
                
                $('#filter_container input:visible').each(function(){
                    if($(this).val() == ""){
                        empty = true;
                        $(this).addClass('input-error');
                    }
                });
                
                if(!empty){
                   var from = moment($container.find('input[name=filter_from_submit]').val(),'YYYY-MM-DD');
                   var to =  moment($container.find('input[name=filter_to_submit]').val(),'YYYY-MM-DD');
                   
                    filter(from,to);

                }

            });
            
        }

        /*
        * Plugin initializing
        */
        
        plugin.init();
       
    }
    
    
    
})( jQuery );