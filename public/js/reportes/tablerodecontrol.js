(function( $ ){
    
   
   /*
    * Handle input. Call public functions and initializers
    */
   
    $.fn.tablerodecontrol = function(data){
        var _this = $(this);
        var plugin = _this.data('tablerodecontrol');
        
        /*Inicializado ?*/
        if (!plugin) {
            
            plugin = new $.tablerodecontrol(this, data);
            
            _this.data('tablerodecontrol', plugin);
            
            return plugin;
        /*Si ya fue inizializado regresamos el plugin*/    
        }else{
            return plugin;
        }
        
    };
    
    /*
    * Plugin Constructor
    */
   
    $.tablerodecontrol = function(container, options){
        
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
                        }
                    });

               }
           })


       }
       
       /*
        * Public methods
        */
        
        plugin.init = function(){
            
            settings = plugin.settings = $.extend({}, defaults, options);

            //Inicializamos nuestro multiple select
            $container.find("select[name=idclinica]").multipleSelect({
                 single: true
            });
            


            /*
             * El evento filter
             */
            
            var pickdateFrom = $container.find('input[name=filter_indicadores_from]').pickadate({
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
                selectMonths: true,
                selectYears: 25,
                max: new Date(),
            });
            
             var pickdateTo = $container.find('input[name=filter_to_indicadores]').pickadate({
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
                selectMonths: true,
                selectYears: 25,
                max: new Date(),
            });
            
            //Inicializamos nuestros calendarios del filtro de fechas
            $container.find('input[name=filter_from]').datepicker({
                changeMonth: true,
                changeYear: true,
                showButtonPanel: true,
                dateFormat: 'MM yy',  
                 altFormat: "yy-mm-dd",
            });
            $container.find('input[name=filter_from]').datepicker('option','onClose',function(textDate,inst){
                   var date = new Date(inst.selectedYear, inst.selectedMonth, 1);
                   var from_month = date.getMonth() +1 ; 
                   var from_year = date.getFullYear();
                   var from_full = from_year+"-"+from_month+"-1";
                   $container.find('input[name=filter_from_hidden]').val(from_full);
                   $container.find('input[name=filter_from]').datepicker('setDate',date);
            });
            
            $container.find('input[name=filter_to]').datepicker({
                changeMonth: true,
                changeYear: true,
                showButtonPanel: true,
                dateFormat: 'MM yy',  
                 altFormat: "yy-mm-dd",
            });
            $container.find('input[name=filter_to]').datepicker('option','onClose',function(textDate,inst){
                   var date = new Date(inst.selectedYear, inst.selectedMonth, 1);
                   var to_month = date.getMonth() +1 ; 
                   var to_year = date.getFullYear();
                   var to_day = new Date(to_year, to_month , 0).getDate();
                   var to_full = to_year+"-"+to_month+"-"+to_day;
                   $container.find('input[name=filter_to_hidden]').val(to_full);
                   $container.find('input[name=filter_to]').datepicker('setDate',date);
            });

            $container.find('button#filterbydate').on('click',function(){
                
                 $('body').addClass('loading');
                
                 var from = $container.find('input[name=filter_from_hidden]').val();
                 var to = $container.find('input[name=filter_to_hidden]').val();
                 var idclinica = $container.find("select[name=idclinica]").multipleSelect("getSelects")[0];
                 
                 $.ajax({
                     url: "/reportes/tablerodecontrol",
                     type: 'POST',
                     dataType: 'JSON',
                     data:{from:from,to:to,idclinica:idclinica},
                     success: function (data, textStatus, jqXHR) {
                         
                          //$container.find('input[name=filter_indicadores_from]').pickadate('picker').set('select', new Date(data.from));
                          //$container.find('input[name=filter_to_indicadores]').pickadate('picker').set('select', new Date(data.to));
                         //CLINICA
                          $container.find('#table_clinica tbody tr').remove();
                         var clinica = data.data.clinica;
                         var empleados = data.data.empleados;
                         
                         var $tr = $('<tr>');
                         $tr.append('<td>'+clinica.clinica_nombre+'</td>');
                         $tr.append('<td>'+accounting.formatMoney(clinica.clinica_meta)+'</td>');
                         $tr.append('<td>'+accounting.formatMoney(clinica.clinica_acumulado)+'</td>');
                         $tr.append('<td>'+accounting.formatMoney(clinica.clinica_hoy)+'</td>');
                         $tr.append('<td>'+clinica.clinica_diasrestantes+'</td>');
                         
                         $container.find('#table_clinica tbody').append($tr);
                         
                         //EMPLEADOS 
                         $container.find('#table_empleado tbody tr').remove();
                         $container.find('#table_indicadores tbody tr').remove();
                         $container.find('#table_indicadores thead th').remove();
                         $container.find('#table_indicadores thead').append('<th>Indicadores</th>');
                         
                         //INDICADORES ESTRUCTURA
                        
                        var $tr = $('<tr>');
                        $tr.append('<td><b>Clientes atendidos por día</b></td>');
                        for(var i=0; i<empleados.length;i++){
                           $tr.append('<td></td>');
                        }
                        $container.find('#table_indicadores tbody').append($tr);
                        
                        var $tr = $('<tr>');
                        $tr.append('<td><b>Servicios Com. por día</b></td>');
                        for(var i=0; i<empleados.length;i++){
                           $tr.append('<td></td>');
                        }
                        $container.find('#table_indicadores tbody').append($tr);
                        
                        
                        var $tr = $('<tr>');
                        $tr.append('<td><b>Venta promedio por cliente</b></td>');
                        for(var i=0; i<empleados.length;i++){
                           $tr.append('<td></td>');
                        }
                        $container.find('#table_indicadores tbody').append($tr);
                        
                        var $tr = $('<tr>');
                        $tr.append('<td><b>Productos por cliente</b></td>');
                        for(var i=0; i<empleados.length;i++){
                           $tr.append('<td></td>');
                        }
                        $container.find('#table_indicadores tbody').append($tr);
                        
                        var $tr = $('<tr>');
                        $tr.append('<td><b>Tiempo promedio de servicio</td>');
                        for(var i=0; i<empleados.length;i++){
                           $tr.append('<td></td>');
                        }
                        $container.find('#table_indicadores tbody').append($tr);
                        
                        var $tr = $('<tr>');
                        $tr.append('<td><b>Clientes nuevos</b></td>');
                        for(var i=0; i<empleados.length;i++){
                           $tr.append('<td></td>');
                        }
                        $container.find('#table_indicadores tbody').append($tr);
                        
                        var $tr = $('<tr>');
                        $tr.append('<td><b>Membresias</b></td>');
                        for(var i=0; i<empleados.length;i++){
                           $tr.append('<td></td>');
                        }
                        $container.find('#table_indicadores tbody').append($tr);
                        
                        var $tr = $('<tr>');
                        $tr.append('<td><b>Pagos anticipados</b></td>');
                        for(var i=0; i<empleados.length;i++){
                           $tr.append('<td></td>');
                        }
                        $container.find('#table_indicadores tbody').append($tr);
                        
                        var $tr = $('<tr>');
                        $tr.append('<td colspan="'+(empleados.length + 1)+'"><b>Tasa de retorno</b></td>');
                       
                        $container.find('#table_indicadores tbody').append($tr);
                        
                        var $tr = $('<tr>');
                        $tr.append('<td><b>30 Días</b></td>');
                        for(var i=0; i<empleados.length;i++){
                           $tr.append('<td></td>');
                        }
                        $container.find('#table_indicadores tbody').append($tr);
                        
                        var $tr = $('<tr>');
                        $tr.append('<td><b>45 Días</b></td>');
                        for(var i=0; i<empleados.length;i++){
                           $tr.append('<td></td>');
                        }
                        $container.find('#table_indicadores tbody').append($tr);
                        
                        var $tr = $('<tr>');
                        $tr.append('<td><b>60 Días</b></td>');
                        for(var i=0; i<empleados.length;i++){
                           $tr.append('<td></td>');
                        }
                        $container.find('#table_indicadores tbody').append($tr);
                         
                         empleados.forEach(function(value,index){
                             
                             var $tr = $('<tr>');
                             $tr.append('<td>'+value.empleado_nombre+'</td>');
                             $tr.append('<td>'+accounting.formatMoney(value.empleado_meta)+'</td>');
                             $tr.append('<td>'+accounting.formatMoney(value.empleado_acumulado)+'</td>');
                             $tr.append('<td>'+accounting.formatMoney(value.empleado_hoy)+'</td>');
                             $tr.append('<td>'+value.empleado_diasrestantes+'</td>');
                             
                             $container.find('#table_empleado tbody').append($tr);
                             
                             //INDICADORES
                             $container.find('#table_indicadores thead').append('<th>'+value.empleado_nombre+'</th>');

                             $container.find('#table_indicadores tbody tr').eq(0).find('td').eq(index+1).text(value.servicios_por_dia);
                             $container.find('#table_indicadores tbody tr').eq(1).find('td').eq(index+1).text(value.servicioscomision_por_dia);
                             $container.find('#table_indicadores tbody tr').eq(2).find('td').eq(index+1).text(accounting.formatMoney(value.venta_promedio_por_cliente));
                             $container.find('#table_indicadores tbody tr').eq(3).find('td').eq(index+1).text(value.productos_por_cliente);
                             $container.find('#table_indicadores tbody tr').eq(4).find('td').eq(index+1).text(value.tiempo_promedio_servicio);
                             $container.find('#table_indicadores tbody tr').eq(5).find('td').eq(index+1).text(value.clientes_nuevos);
                             $container.find('#table_indicadores tbody tr').eq(6).find('td').eq(index+1).text(value.membresias);
                             $container.find('#table_indicadores tbody tr').eq(7).find('td').eq(index+1).text(value.pagos_anticipados);
                             $container.find('#table_indicadores tbody tr').eq(9).find('td').eq(index+1).text(value.tasa_retorno['30dias']);
                             $container.find('#table_indicadores tbody tr').eq(10).find('td').eq(index+1).text(value.tasa_retorno['45dias']);
                             $container.find('#table_indicadores tbody tr').eq(11).find('td').eq(index+1).text(value.tasa_retorno['60dias']);
                         });
                         $('body').removeClass('loading');
                    }
                 });
                 
                 $container.find('#indicadores').show();

            });
            
            $container.find('button#filterbydate2').on('click',function(){
                
                 $('body').addClass('loading');

                 var from = moment($container.find('input[name=filter_indicadores_from_submit]').val(),'YYYY-MM-DD');
                 var to =  moment($container.find('input[name=filter_to_indicadores_submit]').val(),'YYYY-MM-DD');
                 var idclinica = $container.find("select[name=idclinica]").multipleSelect("getSelects")[0];
                 
                 $.ajax({
                     url: "/reportes/tablerodecontrol",
                     type: 'POST',
                     dataType: 'JSON',
                     data:{from:from.format('YYYY-MM-DD'),to:to.format('YYYY-MM-DD'),idclinica:idclinica},
                     success: function (data, textStatus, jqXHR) {
                       
                         //CLINICA

                         var clinica = data.data.clinica;
                         var empleados = data.data.empleados;
                                                  
                         //EMPLEADOS 
                         $container.find('#table_indicadores tbody tr').remove();
                         $container.find('#table_indicadores thead th').remove();
                         $container.find('#table_indicadores thead').append('<th>Indicadores</th>');
                         
                         //INDICADORES ESTRUCTURA
                        
                        var $tr = $('<tr>');
                        $tr.append('<td><b>Clientes atendidos por día</b></td>');
                        for(var i=0; i<empleados.length;i++){
                           $tr.append('<td></td>');
                        }
                        $container.find('#table_indicadores tbody').append($tr);
                        
                        var $tr = $('<tr>');
                        $tr.append('<td><b>Servicios Com. por día</b></td>');
                        for(var i=0; i<empleados.length;i++){
                           $tr.append('<td></td>');
                        }
                        $container.find('#table_indicadores tbody').append($tr);
                        
                        
                        var $tr = $('<tr>');
                        $tr.append('<td><b>Venta promedio por cliente</b></td>');
                        for(var i=0; i<empleados.length;i++){
                           $tr.append('<td></td>');
                        }
                        $container.find('#table_indicadores tbody').append($tr);
                        
                        var $tr = $('<tr>');
                        $tr.append('<td><b>Productos por cliente</b></td>');
                        for(var i=0; i<empleados.length;i++){
                           $tr.append('<td></td>');
                        }
                        $container.find('#table_indicadores tbody').append($tr);
                        
                        var $tr = $('<tr>');
                        $tr.append('<td><b>Tiempo promedio de servicio</td>');
                        for(var i=0; i<empleados.length;i++){
                           $tr.append('<td></td>');
                        }
                        $container.find('#table_indicadores tbody').append($tr);
                        
                        var $tr = $('<tr>');
                        $tr.append('<td><b>Clientes nuevos</b></td>');
                        for(var i=0; i<empleados.length;i++){
                           $tr.append('<td></td>');
                        }
                        $container.find('#table_indicadores tbody').append($tr);
                        
                        var $tr = $('<tr>');
                        $tr.append('<td><b>Membresias</b></td>');
                        for(var i=0; i<empleados.length;i++){
                           $tr.append('<td></td>');
                        }
                        $container.find('#table_indicadores tbody').append($tr);
                        
                        var $tr = $('<tr>');
                        $tr.append('<td><b>Servicio de membresias</b></td>');
                        for(var i=0; i<empleados.length;i++){
                           $tr.append('<td></td>');
                        }
                        $container.find('#table_indicadores tbody').append($tr);
                        
                        var $tr = $('<tr>');
                        $tr.append('<td><b>Pagos anticipados</b></td>');
                        for(var i=0; i<empleados.length;i++){
                           $tr.append('<td></td>');
                        }
                        $container.find('#table_indicadores tbody').append($tr);
                        
                        var $tr = $('<tr>');
                        $tr.append('<td colspan="'+(empleados.length + 1)+'"><b>Tasa de retorno</b></td>');
                       
                        $container.find('#table_indicadores tbody').append($tr);
                        
                        var $tr = $('<tr>');
                        $tr.append('<td><b>30 Días</b></td>');
                        for(var i=0; i<empleados.length;i++){
                           $tr.append('<td></td>');
                        }
                        $container.find('#table_indicadores tbody').append($tr);
                        
                        var $tr = $('<tr>');
                        $tr.append('<td><b>45 Días</b></td>');
                        for(var i=0; i<empleados.length;i++){
                           $tr.append('<td></td>');
                        }
                        $container.find('#table_indicadores tbody').append($tr);
                        
                        var $tr = $('<tr>');
                        $tr.append('<td><b>60 Días</b></td>');
                        for(var i=0; i<empleados.length;i++){
                           $tr.append('<td></td>');
                        }
                        $container.find('#table_indicadores tbody').append($tr);
                         
                         empleados.forEach(function(value,index){
       
                             //INDICADORES
                             $container.find('#table_indicadores thead').append('<th>'+value.empleado_nombre+'</th>');

                             $container.find('#table_indicadores tbody tr').eq(0).find('td').eq(index+1).text(value.servicios_por_dia);
                             $container.find('#table_indicadores tbody tr').eq(1).find('td').eq(index+1).text(value.servicioscomision_por_dia);
                             $container.find('#table_indicadores tbody tr').eq(2).find('td').eq(index+1).text(accounting.formatMoney(value.venta_promedio_por_cliente));
                             $container.find('#table_indicadores tbody tr').eq(3).find('td').eq(index+1).text(value.productos_por_cliente);
                             $container.find('#table_indicadores tbody tr').eq(4).find('td').eq(index+1).text(value.tiempo_promedio_servicio);
                             $container.find('#table_indicadores tbody tr').eq(5).find('td').eq(index+1).text(value.clientes_nuevos);
                             $container.find('#table_indicadores tbody tr').eq(6).find('td').eq(index+1).text(value.membresias);
                             $container.find('#table_indicadores tbody tr').eq(6).find('td').eq(index+1).text(value.serviciomembresias);
                             $container.find('#table_indicadores tbody tr').eq(7).find('td').eq(index+1).text(value.pagos_anticipados);
                             $container.find('#table_indicadores tbody tr').eq(9).find('td').eq(index+1).text(value.tasa_retorno['30dias']);
                             $container.find('#table_indicadores tbody tr').eq(10).find('td').eq(index+1).text(value.tasa_retorno['45dias']);
                             $container.find('#table_indicadores tbody tr').eq(11).find('td').eq(index+1).text(value.tasa_retorno['60dias']);
                         });
                         $('body').removeClass('loading');
                    }
                 });
                 
                 $container.find('#indicadores').show();

            });
            
        }

        /*
        * Plugin initializing
        */
        
        plugin.init();
       
    }
    
    
    
})( jQuery );