(function( $ ){
    
   
   /*
    * Handle input. Call public functions and initializers
    */
   
    $.fn.comisiones = function(data){
        var _this = $(this);
        var plugin = _this.data('comisiones');
        
        /*Inicializado ?*/
        if (!plugin) {
            
            plugin = new $.comisiones(this, data);
            
            _this.data('comisiones', plugin);
            
            return plugin;
        /*Si ya fue inizializado regresamos el plugin*/    
        }else{
            return plugin;
        }
        
    };
    
    /*
    * Plugin Constructor
    */
   
    $.comisiones = function(container, options){
        
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
        var $table;
        
        /*
        * Private methods
        */
       
       var calcularTotales = function(){
           
           $container.find('table.table-comisiones thead tr.row_empleados th:not(:first-child)').each(function(){
                var idempleado = $(this).attr('id');
                
                //comision servicios
                var total = 0;
                $container.find('table.table-comisiones tbody td[idempleado='+idempleado+'] label[type=comisionservicios]').each(function(){

                    total +=accounting.unformat($(this).text());
                });
                $container.find('table.table-comisiones tfoot td[idempleado='+idempleado+'] label[type=comisionservicios]').text(accounting.formatMoney(total));
                
                //comision servicios
                var total = 0;
                $container.find('table.table-comisiones tbody td[idempleado='+idempleado+'] label[type=comisionproductos]').each(function(){
                    total +=accounting.unformat($(this).text());
                });
                $container.find('table.table-comisiones tfoot td[idempleado='+idempleado+'] label[type=comisionproductos]').text(accounting.formatMoney(total));
                
                //comision servicios
                var total = 0;
                $container.find('table.table-comisiones tbody td[idempleado='+idempleado+'] label[type=serviciosvendidos]').each(function(){
                    total +=parseInt($(this).text());
                });
                $container.find('table.table-comisiones tfoot td[idempleado='+idempleado+'] label[type=serviciosvendidos]').text(total);
                
                //comision servicios
                var total = 0;
                $container.find('table.table-comisiones tbody td[idempleado='+idempleado+'] label[type=productosvendidos]').each(function(){
                    total +=parseInt($(this).text());
                });
                $container.find('table.table-comisiones tfoot td[idempleado='+idempleado+'] label[type=productosvendidos]').text(total);
                
                //comision servicios
                var total = 0;
                $container.find('table.table-comisiones tbody td[idempleado='+idempleado+'] label[type=acumulado]').each(function(){
                    total +=accounting.unformat($(this).text());
                });
                $container.find('table.table-comisiones tfoot td[idempleado='+idempleado+'] label[type=acumulado]').text(accounting.formatMoney(total));
                
                

            });
       }
       
       var filterByClinica = function(){
           
           var clinicas_select =   $("select[name=idclinica]").multipleSelect('getSelects');
           clinicas_select = clinicas_select[0];
           
            //LIMPIAMOS NUESTRA TABLA

            $container.find('table.table-comisiones thead tr').remove();
            $container.find('table.table-comisiones tbody tr').remove();
            $container.find('table.table-comisiones tfoot tr').remove();

           
           //Hacemos la peticion ajax
           $.ajax({
               url:'/empleados/comisiones/comisionesbyclinica',
               dataType: 'json',
               method:'GET',
               async:false,
               data:{idclinica:clinicas_select},
               success: function(data){ 
                   //Las cabeceras de nuestros headers
                   
                    if(data.empleados.length > 0 && data.comisiones.length > 0){
                      
                        if(typeof $table != 'undefined'){
                            $table.clear();
                            $table.destroy();
                        }
                        
                        var $thead1 = $('<tr class="row_empleados"><th>Fecha</th></tr>');
                        var $thead2 =  $('<tr><th></th></tr>');
                         
                         $.each(data.empleados,function(){
                            $thead1.append('<th id="'+this.idempleado+'">'+this.empleado_nombre+'</th>');
                            $thead2.append('<th><div class="units-row" style="margin-bottom: 0px;"><div class="unit-20"><label>Com Serv.</label></div><div class="unit-20"><label>Com Prod.</label></div><div class="unit-20"><label>Serv Vend.</label></div><div class="unit-20"><label>Prod Vend.</label></div><div class="unit-20"><label>Ac.</label></div></div></th>');
                        });
                        
                        $('table.table-comisiones thead').append($thead1);
                        $('table.table-comisiones thead').append($thead2);

                        //Las comisiones (Estructura de cada row);
                        $.each(data.comisiones,function(){

                            var date = moment(this.empleadocomision_fecha,'MM/DD/YY');
                            
                            //Si aun no existe la row
                            if($container.find('tr#'+date.format('DD-MM-YYYY')).length == 0){
                            
                                var row = $('<tr id="'+ date.format('DD-MM-YYYY')+'">');
                                row.append('<td>'+date.format('DD/MM/YYYY')+'</td>')
                                for (var i = 0; i < data.empleados.length; i++) {
                                   row.append('<td idempleado="'+data.empleados[i].idempleado+'"></td>')
                                }

                                $container.find('table.table-comisiones tbody').append(row);
                            }
                        });
                        
                        //La estructura de la rowTotal
                        var $rowTotal = $('<tr><td>Totales</td></tr>');
                        $.each(data.empleados,function(){
                            $rowTotal.append('<td idempleado="'+this.idempleado+'"><div class="units-row" style="margin-bottom: 0px;"><div class="unit-20"><label type="comisionservicios"></label></div><div class="unit-20"><label type="comisionproductos"></label></div><div class="unit-20"><label type="serviciosvendidos"></label></div><div class="unit-20"><label type="productosvendidos"></label></div><div class="unit-20"><label type="acumulado"></label></div></div></td>');
                        });
                        
                        $container.find('table.table-comisiones tfoot').append($rowTotal);
                        
                        
                        //Llenamos nuestra tabla
                        $.each(data.comisiones,function(){
                            
                             var date = moment(this.empleadocomision_fecha,'MM/DD/YY');
                             date = date.format('DD-MM-YYYY');
                            
                             var row = $container.find('tr#'+date);
                             
                             //Si el empleado se encuentra en la tabla
                             if(typeof $container.find('.table-comisiones th#'+this.idempledo).attr('id') != 'undefined'){
                                
                                //La posicion del empleado en la tabla
                                var $th = $container.find('.table-comisiones th#'+this.idempledo);
                                var index = $th.index();
                                
                                //<div class="units-row" style="margin-bottom: 0px;"><div class="unit-20"><label></label></div><div class="unit-20"><label></label></div><div class="unit-20"><label></label></div><div class="unit-20"><label></label></div><div class="unit-20"><label></label></div></div>
                                //Insertamos los datos
                               
                                row.find('td').eq(index).append('<div class="units-row" style="margin-bottom: 0px;"><div class="unit-20"><label type="comisionservicios">'+accounting.formatMoney(this.empleadocomision_comisionservicios)+'</label></div><div class="unit-20"><label type="comisionproductos">'+accounting.formatMoney(this.empleadocomision_comisionproductos)+'</label></div><div class="unit-20"><label type="serviciosvendidos">'+parseInt(this.empleadocomision_serviciosvendidos)+'</label></div><div class="unit-20"><label type="productosvendidos">'+parseInt(this.empleadocomision_productosvendidos)+'</label></div><div class="unit-20"><label type="acumulado">'+accounting.formatMoney(this.empleadocomision_acumulado)+'</label></div></div>');
                                
                              
                             } 
                             
                        });
                        
                        $.ajax({
                            url: '/json/lang_es_datatable.json',
                            dataType: 'json',
                            async:false,
                            success: function(data){
                                $table = container.find('table.table-comisiones').DataTable({
                                    language:data,
                                    searching: false,
                                    ordering:  false,
                                    lengthChange: false,
                                    iDisplayLength:15,
                                    info: false,

                                });
                            }
                        });

                        container.find('table').on( 'page.dt', function () {
                            setTimeout(function(){
                                calcularTotales();
                            },100);
                        });

                    }   
                    
               }
           });
           
           
            
            /*
             * Calculamos los totales
             */
            
            calcularTotales();

       }
       
       var filterByDateBypedicurista = function(from,to){
           
           //Hacemos la peticion ajax
           $.ajax({
               url:'/empleados/comisiones/filterbydatebyidempleado',
               dataType: 'json',
               method:'GET',
               async:false,
               data:{from:from,to:to},
               success: function(data){
                   
                     //LIMPIAMOS NUESTRA TABLA
                      $table.clear();
                      $table.destroy();
                     
                      $.each(data,function(){
                          
                          var date = moment(this.empleadocomision_fecha,'MM/DD/YY');
                          var row = $('<tr>');
                          row.append('<td>'+date.format('DD/MM/YYYY')+'</td>');
                          row.append('<td  type="comisionservicios">'+this.empleadocomision_comisionservicios+'</td>');
                          row.append('<td  type="comisionproductos">'+this.empleadocomision_comisionproductos+'</td>');
                          row.append('<td  type="serviciosvendidos">'+this.empleadocomision_serviciosvendidos+'</td>');
                          row.append('<td  type="productosvendidos">'+this.empleadocomision_productosvendidos+'</td>');
                          row.append('<td  type="acumulado">'+this.empleadocomision_acumulado+'</td>');
                          
                          $container.find('table.table-comisiones tbody').append(row);
                          
                      });
                      
                      //Datatable
                        $.ajax({
                            url: '/json/lang_es_datatable.json',
                            dataType: 'json',
                            async:false,
                            success: function(data){
                                $table = container.find('table.table-comisiones').DataTable({
                                    language:data,
                                    searching: false,
                                    ordering:  false,
                                    lengthChange: false,
                                    iDisplayLength:15,
                                    info: false,

                                });
                            }
                        });
                        
                        //Calculamos totales
                        var total = 0;
                        $container.find('tbody [type=comisionservicios]').each(function(){
                            total +=accounting.unformat($(this).text());
                        });
                        $container.find('tfoot [type=comisionservicios]').text(accounting.formatMoney(total));

                        var total = 0;
                        $container.find('tbody [type=comisionproductos]').each(function(){
                            total +=accounting.unformat($(this).text());
                        });
                        $container.find('tfoot [type=comisionproductos]').text(accounting.formatMoney(total));

                        var total = 0;
                        $container.find('tbody [type=serviciosvendidos]').each(function(){
                            total +=parseInt($(this).text());
                        });
                        $container.find('tfoot [type=serviciosvendidos]').text(total);

                        var total = 0;
                        $container.find('tbody [type=productosvendidos]').each(function(){
                            total +=parseInt($(this).text());
                        });
                        $container.find('tfoot [type=productosvendidos]').text(total);

                        var total = 0;
                        $container.find('tbody [type=acumulado]').each(function(){
                            total +=accounting.unformat($(this).text());
                        });
                        $container.find('tfoot [type=acumulado]').text(accounting.formatMoney(total));
                    

               }
           });
       }
       var filterByDate = function(from,to){
            var clinicas_select =   $("select[name=idclinica]").multipleSelect('getSelects');
           clinicas_select = clinicas_select[0];
           
           //Hacemos la peticion ajax
           $.ajax({
               url:'/empleados/comisiones/comisionesbydate',
               dataType: 'json',
               method:'GET',
               async:false,
               data:{idclinica:clinicas_select,from:from,to:to},
               success: function(data){
                  
                  if(data.empleados.length > 0){
                      
                      //LIMPIAMOS NUESTRA TABLA
                      if(typeof $table != 'undefined'){
                        $table.clear();
                        $container.find('table.table-comisiones thead tr').remove();
                        $container.find('table.table-comisiones tfoot tr').remove();
                        $table.destroy();
                    }
                      
                      
                      var $thead1 = $('<tr class="row_empleados"><th>Fecha</th></tr>');
                      var $thead2 =  $('<tr><th></th></tr>');
                      
                    $.each(data.empleados, function () {
                        $thead1.append('<th id="' + this.idempleado + '">' + this.empleado_nombre + '</th>');
                        $thead2.append('<th><div class="units-row" style="margin-bottom: 0px;"><div class="unit-20"><label>Com Serv.</label></div><div class="unit-20"><label>Com Prod.</label></div><div class="unit-20"><label>Serv Vend.</label></div><div class="unit-20"><label>Prod Vend.</label></div><div class="unit-20"><label>Ac.</label></div></div></th>');
                    });
                    
                    $('table.table-comisiones thead').append($thead1);
                    $('table.table-comisiones thead').append($thead2);
                    
                    //Las comisiones (Estructura de cada row);
                    $.each(data.comisiones,function(){

                        var date = moment(this.empleadocomision_fecha,'MM/DD/YY');

                        //Si aun no existe la row
                        if($container.find('tr#'+date.format('DD-MM-YYYY')).length == 0){

                            var row = $('<tr id="'+ date.format('DD-MM-YYYY')+'">');
                            row.append('<td>'+date.format('DD/MM/YYYY')+'</td>')
                            for (var i = 0; i < data.empleados.length; i++) {
                               row.append('<td idempleado="'+data.empleados[i].idempleado+'"></td>')
                            }

                            $container.find('table.table-comisiones tbody').append(row);
                        }
                    });
                      
                      
                    //La estructura de la rowTotal
                    var $rowTotal = $('<tr><td>Totales</td></tr>');
                    $.each(data.empleados,function(){
                        $rowTotal.append('<td idempleado="'+this.idempleado+'"><div class="units-row" style="margin-bottom: 0px;"><div class="unit-20"><label type="comisionservicios"></label></div><div class="unit-20"><label type="comisionproductos"></label></div><div class="unit-20"><label type="serviciosvendidos"></label></div><div class="unit-20"><label type="productosvendidos"></label></div><div class="unit-20"><label type="acumulado"></label></div></div></td>');
                    });

                    $container.find('table.table-comisiones tfoot').append($rowTotal);
                    
                    //Llenamos nuestra tabla
                    $.each(data.comisiones,function(){

                         var date = moment(this.empleadocomision_fecha,'MM/DD/YY');
                         date = date.format('DD-MM-YYYY');

                         var row = $container.find('tr#'+date);

                         //Si el empleado se encuentra en la tabla
                         if(typeof $container.find('.table-comisiones th#'+this.idempledo).attr('id') != 'undefined'){

                            //La posicion del empleado en la tabla
                            var $th = $container.find('.table-comisiones th#'+this.idempledo);
                            var index = $th.index();

                            //<div class="units-row" style="margin-bottom: 0px;"><div class="unit-20"><label></label></div><div class="unit-20"><label></label></div><div class="unit-20"><label></label></div><div class="unit-20"><label></label></div><div class="unit-20"><label></label></div></div>
                            //Insertamos los datos

                            row.find('td').eq(index).append('<div class="units-row" style="margin-bottom: 0px;"><div class="unit-20"><label type="comisionservicios">'+accounting.formatMoney(this.empleadocomision_comisionservicios)+'</label></div><div class="unit-20"><label type="comisionproductos">'+accounting.formatMoney(this.empleadocomision_comisionproductos)+'</label></div><div class="unit-20"><label type="serviciosvendidos">'+parseInt(this.empleadocomision_serviciosvendidos)+'</label></div><div class="unit-20"><label type="productosvendidos">'+parseInt(this.empleadocomision_productosvendidos)+'</label></div><div class="unit-20"><label type="acumulado">'+accounting.formatMoney(this.empleadocomision_acumulado)+'</label></div></div>');


                         } 

                    });
                    
                     calcularTotales();
                      
                }
               },
           });
           
           $.ajax({
                url: '/json/lang_es_datatable.json',
                dataType: 'json',
                async:false,
                success: function(data){
                    $table = container.find('table.table-comisiones').DataTable({
                        language:data,
                        searching: false,
                        ordering:  false,
                        lengthChange: false,
                        iDisplayLength:15,
                        info: false,
                        
                    });
                }
            });
           
       }
       /*
        * Public methods
        */
        
        plugin.init = function(){
            
            settings = plugin.settings = $.extend({}, defaults, options);
            
            //Inicializamos nuestro multiple select
            $container.find("select[name=idclinica]").multipleSelect({
                single:true,   
                onClick : filterByClinica,
            });
            
            $container.find("select[name=idclinica]").multipleSelect("setSelects", [settings.idclinica]);

            filterByClinica();

            //Inicializamos nuestros calendarios del filtro de fechas
            var pickdateFrom = $container.find('input[name=comisiones_from]').pickadate({
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
            var pickdateTo= $container.find('input[name=comisiones_to]').pickadate({
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
            
            /*
             * El evento filter
             */
            
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
                   var from = $container.find('input[name=comisiones_from_submit]').val();
                   var to = $container.find('input[name=comisiones_to_submit]').val();
                   
                   filterByDate(from,to);

                }
                
                
            });
            
            
        }
        
        
        plugin.pedicurista = function(){
            
            //Damos formato a nuestra tabla
            $container.find('tbody [type=comisionservicios],tbody [type=comisionproductos],tbody [type=acumulado]').each(function(){
                var value = $(this).text();
                $(this).text(accounting.formatMoney(value));
            });
            
            //Datatable
            $.ajax({
                url: '/json/lang_es_datatable.json',
                dataType: 'json',
                async:false,
                success: function(data){
                    $table = container.find('table.table-comisiones').DataTable({
                        language:data,
                        searching: false,
                        ordering:  false,
                        lengthChange: false,
                        iDisplayLength:15,
                        info: false,
                        
                    });
                }
            });
            
            //Inicializamos nuestros calendarios del filtro de fechas
            var pickdateFrom = $container.find('input[name=comisiones_from]').pickadate({
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
            var pickdateTo= $container.find('input[name=comisiones_to]').pickadate({
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
                   var from = $container.find('input[name=comisiones_from_submit]').val();
                   var to = $container.find('input[name=comisiones_to_submit]').val();
                   
                   filterByDateBypedicurista(from,to);

                }
                
                
            });
            
            
            container.find('table').on( 'page.dt', function () {
                setTimeout(function(){
                    //Calculamos totales
                    var total = 0;
                    $container.find('tbody [type=comisionservicios]').each(function(){
                        total +=accounting.unformat($(this).text());
                    });
                    $container.find('tfoot [type=comisionservicios]').text(accounting.formatMoney(total));

                    var total = 0;
                    $container.find('tbody [type=comisionproductos]').each(function(){
                        total +=accounting.unformat($(this).text());
                    });
                    $container.find('tfoot [type=comisionproductos]').text(accounting.formatMoney(total));

                    var total = 0;
                    $container.find('tbody [type=serviciosvendidos]').each(function(){
                        total +=parseInt($(this).text());
                    });
                    $container.find('tfoot [type=serviciosvendidos]').text(total);

                    var total = 0;
                    $container.find('tbody [type=productosvendidos]').each(function(){
                        total +=parseInt($(this).text());
                    });
                    $container.find('tfoot [type=productosvendidos]').text(total);

                    var total = 0;
                    $container.find('tbody [type=acumulado]').each(function(){
                        total +=accounting.unformat($(this).text());
                    });
                    $container.find('tfoot [type=acumulado]').text(accounting.formatMoney(total));
                    
                },100);
            });
            
            //Calculamos totales
            var total = 0;
            $container.find('tbody [type=comisionservicios]').each(function(){
                total +=accounting.unformat($(this).text());
            });
            $container.find('tfoot [type=comisionservicios]').text(accounting.formatMoney(total));

            var total = 0;
            $container.find('tbody [type=comisionproductos]').each(function(){
                total +=accounting.unformat($(this).text());
            });
            $container.find('tfoot [type=comisionproductos]').text(accounting.formatMoney(total));

            var total = 0;
            $container.find('tbody [type=serviciosvendidos]').each(function(){
                total +=parseInt($(this).text());
            });
            $container.find('tfoot [type=serviciosvendidos]').text(total);

            var total = 0;
            $container.find('tbody [type=productosvendidos]').each(function(){
                total +=parseInt($(this).text());
            });
            $container.find('tfoot [type=productosvendidos]').text(total);

            var total = 0;
            $container.find('tbody [type=acumulado]').each(function(){
                total +=accounting.unformat($(this).text());
            });
            $container.find('tfoot [type=acumulado]').text(accounting.formatMoney(total));

        }
    }

       
})( jQuery );