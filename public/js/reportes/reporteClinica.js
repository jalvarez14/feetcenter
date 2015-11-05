(function( $ ){
    
   
   /*
    * Handle input. Call public functions and initializers
    */
   
    $.fn.reporteClinica = function(data){
        var _this = $(this);
        var plugin = _this.data('reporteClinica');
        
        /*Inicializado ?*/
        if (!plugin) {
            
            plugin = new $.reporteClinica(this, data);
            
            _this.data('reporteClinica', plugin);
            
            return plugin;
        /*Si ya fue inizializado regresamos el plugin*/    
        }else{
            return plugin;
        }
        
    };
    
    /*
    * Plugin Constructor
    */
   
    $.reporteClinica = function(container, options){
        
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
           
           var clinicas_select = $container.find("select[name=idclinica]").multipleSelect('getSelects');
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
               url:'/reportes/filterclinica',
               async:false,
               data:{clinicas:clinicas_select,from:from.format('YYYY-MM-DD'),to:to.format('YYYY-MM-DD')},
               success:function(data){
                   
                   //Las cabeceras de nuestras tablas
                   var thead_servicios = $('<tr>');
                   thead_servicios.append('<th>Servicios</th>');
                   var thead_productos = $('<tr>');
                   thead_productos.append('<th>Productos</th>');
                   
                   
                  
                   $.each(data.clinicas,function(){
                       
                       var td = $('<th>'+this.clinica_nombre+'</th>').attr('idclinica',this.idclinica);
                     
                       thead_servicios.append(td);
                       
                       var td = $('<th>'+this.clinica_nombre+'</th>').attr('idclinica',this.idclinica);
                       
                       thead_productos.append(td);
                 
                   });
                   
                   $tableServicios.find('thead').append(thead_servicios);
                   $tableProductos.find('thead').append(thead_productos);
                   
                   /*
                    * SERVICIOS
                    */
                   if(data.servicios.length > 0){
                        
                        //Creamos el esqueleto
                        $.each(data.servicios[0].servicios,function(){
                           
                            var tr = $('<tr>').attr('idservicio', this.idservicio);
                            tr.append('<td>'+this.servicio_nombre+'</td>');
                            for(var i=0;i<data.clinicas.length;i++){
                                 tr.append('<td></td>');
                            }
                            $tableServicios.find('tbody').append(tr);
                        });

                        //Insertamos los servicios
                        $.each(data.servicios,function(){

                            var index = $tableServicios.find('thead tr th[idclinica='+this.idclinica+']').index();

                            $.each(this.servicios,function(){
                                var td = $tableServicios.find('tr[idservicio='+this.idservicio+']').find('td').eq(index);
                                td.text(this.vendidos);
                            });
                        });
                    }
                    
                    /*
                    * MEMBRESIA
                    */
                
                   if(data.membresias.length > 0){
                        
                        //Creamos el esqueleto
                        $.each(data.membresias[0].membresias,function(){
                           
                            var tr = $('<tr>').attr('idmembresia', this.idmembresia);
                            tr.append('<td>'+this.membresia_nombre+'</td>');
                            for(var i=0;i<data.clinicas.length;i++){
                                 tr.append('<td></td>');
                            }
                            $tableServicios.find('tbody').append(tr);
                        });

                        //Insertamos los servicios
                        $.each(data.membresias,function(){

                            var index = $tableServicios.find('thead tr th[idclinica='+this.idclinica+']').index();
                            
                            $.each(this.membresias,function(){
   
                                var td = $tableServicios.find('tr[idmembresia='+this.idmembresia+']').find('td').eq(index);
                                td.text(this.vendidos);
                            });
                        });
                    }
                    
                    /*
                    * PRODUCTOS
                    */
                   
                   if(data.productos.length > 0){
                        
                        //Creamos el esqueleto
                        $.each(data.productos[0].productos,function(){
                           
                            var tr = $('<tr>').attr('idproducto', this.idproducto);
                            tr.append('<td>'+this.producto_nombre+'</td>');
                            for(var i=0;i<data.clinicas.length;i++){
                                 tr.append('<td></td>');
                            }
                            $tableProductos.find('tbody').append(tr);
                        });
                        
                        //Insertamos los servicios
                        $.each(data.productos,function(){

                            var index = $tableProductos.find('thead tr th[idclinica='+this.idclinica+']').index();
                            
                            $.each(this.productos,function(){
   
                                var td = $tableProductos.find('tr[idproducto='+this.idproducto+']').find('td').eq(index);
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
            if(settings.session.idclinica == null){
                settings.session.idclinica = 1;
            }

            //Inicializamos nuestro multiple select
            $container.find("select[name=idclinica]").multipleSelect({
                onClick : function(){
                    filter();
                },
                onCheckAll: function(){
                    filter();
                },
            });
            
            $container.find("select[name=idclinica]").multipleSelect("setSelects", [settings.session.idclinica]);
            
            filter();
            
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