(function( $ ){
    
   
   /*
    * Handle input. Call public functions and initializers
    */
   
    $.fn.horariosvacios = function(data){
        var _this = $(this);
        var plugin = _this.data('horariosvacios');
        
        /*Inicializado ?*/
        if (!plugin) {
            
            plugin = new $.horariosvacios(this, data);
            
            _this.data('horariosvacios', plugin);
            
            return plugin;
        /*Si ya fue inizializado regresamos el plugin*/    
        }else{
            return plugin;
        }
        
    };
    
    /*
    * Plugin Constructor
    */
   
    $.horariosvacios  = function(container, options){
        
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
            
            //Inicializamos nuestros calendarios del filtro de fechas
            $container.find('input[name=filter_from]').datepicker({
                changeMonth: true,
                changeYear: true,
                showButtonPanel: true,
                dateFormat: 'yy-mm-dd',  
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
                dateFormat: 'yy-mm-dd',  
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
                 
                 var from = $container.find('input[name=filter_from]').val();
                 var to = $container.find('input[name=filter_to]').val();
                 var idclinica = $container.find("select[name=idclinica]").multipleSelect("getSelects")[0];
                 
                 $.ajax({
                     url: "/reportes/horariosvacios",
                     type: 'POST',
                     dataType: 'JSON',
                     data:{from:from,to:to,idclinica:idclinica},
                     success: function (data, textStatus, jqXHR) {
                         
                         //CLINICA
                          $container.find('#table_clinica tbody tr').remove();
                         var clinica = data.data.clinica;
                         var empleados = data.data.empleados;
                         
                         var $tr = $('<tr>');
                        
                         $tr.append('<td>'+clinica.slot1+'</td>');
                         $tr.append('<td>'+clinica.slot2+'</td>');
                         $tr.append('<td>'+clinica.slot3+'</td>');
                         $tr.append('<td>'+clinica.slot4+'</td>');
                         $tr.append('<td>'+clinica.slot5+'</td>');
                         $tr.append('<td>'+clinica.slot6+'</td>');
                         $tr.append('<td>'+clinica.slot7+'</td>');
                         $tr.append('<td>'+clinica.slot8+'</td>');
                         $tr.append('<td>'+clinica.slot9+'</td>');
                         $tr.append('<td>'+clinica.slot10+'</td>');
                         $tr.append('<td>'+clinica.slot11+'</td>');
                         $tr.append('<td>'+clinica.slot12+'</td>');
                         $tr.append('<td>'+clinica.slot13+'</td>');
                         $tr.append('<td>'+clinica.slot14+'</td>');
                         $tr.append('<td>'+clinica.slot15+'</td>');
                         $tr.append('<td>'+clinica.slot16+'</td>');
                         $tr.append('<td>'+clinica.slot17+'</td>');
                         $tr.append('<td>'+clinica.slot18+'</td>');
                         $tr.append('<td>'+clinica.slot19+'</td>');
                         $tr.append('<td>'+clinica.slot20+'</td>');
                         $tr.append('<td>'+clinica.slot21+'</td>');
                         $tr.append('<td>'+clinica.slot22+'</td>');
                         
                         
                         
                         
                         $container.find('#table_clinica tbody').append($tr);
                         
                         //EMPLEADOS 
                         $container.find('#table_empleado tbody tr').remove();
                         $container.find('#table_indicadores tbody tr').remove();
                         $container.find('#table_indicadores thead th').remove();
                         $container.find('#table_indicadores thead').append('<th>Indicadores</th>');
                         
                        
                         
                        
                         $('body').removeClass('loading');
                    }
                 });

            });
            
        }

        /*
        * Plugin initializing
        */
        
        plugin.init();
       
    }
    
    
    
})( jQuery );