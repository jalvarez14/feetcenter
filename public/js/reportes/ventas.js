(function( $ ){
    
   
   /*
    * Handle input. Call public functions and initializers
    */
   
    $.fn.ventas = function(data){
        var _this = $(this);
        var plugin = _this.data('ventas');
        
        /*Inicializado ?*/
        if (!plugin) {
            
            plugin = new $.ventas(this, data);
            
            _this.data('ventas', plugin);
            
            return plugin;
        /*Si ya fue inizializado regresamos el plugin*/    
        }else{
            return plugin;
        }
        
    };
    
    /*
    * Plugin Constructor
    */
   
    $.ventas = function(container, options){
        
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

       var filter = function(from,to){

            $container.find('[idclinica]').hide(); 
            
            if(typeof from == 'undefined'){
          
                var from = moment();
                
            }
            if(typeof to ==  'undefined'){
                var to = moment();
            }
            
            
            var clinicas_select =   $("select[name=idclinica]").multipleSelect('getSelects');
            
            //Hacemos la peticion ajax
           $.ajax({
               url:'/reportes/ventasfilter',
               dataType: 'json',
               method:'POST',
               async:false,
               data:{clinicas:clinicas_select,from:from.format('YYYY-MM-DD'),to:to.format('YYYY-MM-DD')},
               success: function(data){
                  
                   $.each(data,function(){
                       $container.find('[idclinica='+this.idclinica+']').show();
                       $container.find('#table_ventas tr#ingreso_efectivo').find('td[idclinica='+this.idclinica+']').text(accounting.formatMoney(this.servicios));
                       $container.find('#table_ventas tr#ingreso_tarjeta').find('td[idclinica='+this.idclinica+']').text(accounting.formatMoney(this.productos));
                       $container.find('#table_tipo tr#ingreso_efectivo').find('td[idclinica='+this.idclinica+']').text(accounting.formatMoney(this.efectivo));
                       $container.find('#table_tipo tr#ingreso_tarjeta').find('td[idclinica='+this.idclinica+']').text(accounting.formatMoney(this.tarjeta));
                   });
               },
           });
           
            if (clinicas_select.length == 1) {
                $.ajax({
                    url: '/empleados/comisiones/comisionesbydate',
                    dataType: 'json',
                    method: 'GET',
                    async:false,
                    data:{clinicas:clinicas_select,from:from.format('YYYY-MM-DD'),to:to.format('YYYY-MM-DD')},
                    success: function (data) {
                        
                        if (data.empleados.length > 0) {
                            
                            //LIMPIAMOS NUESTRA TABLA
                             $container.find('table.table-comisiones tbody tr').remove();
                            $container.find('table.table-comisiones thead tr').remove();
                            $container.find('table.table-comisiones tfoot tr').remove();


                            var $thead1 = $('<tr class="row_empleados"><th>Fecha</th></tr>');
                            var $thead2 = $('<tr><th></th></tr>');

                            $.each(data.empleados, function () {
                                $thead1.append('<th id="' + this.idempleado + '">' + this.empleado_nombre + '</th>');
                                $thead2.append('<th><div class="units-row" style="margin-bottom: 0px;"><div class="unit-33"><label>Serv Vend.</label></div><div class="unit-33"><label>Prod Vend.</label></div><div class="unit-33"><label>Ac.</label></div></div></th>');
                            });

                            $('table.table-comisiones thead').append($thead1);
                            $('table.table-comisiones thead').append($thead2);

                            //Las comisiones (Estructura de cada row);
                            $.each(data.comisiones, function () {

                                var date = moment(this.empleadocomision_fecha, 'MM/DD/YY');

                                //Si aun no existe la row
                                if ($container.find('tr#' + date.format('DD-MM-YYYY')).length == 0) {

                                    var row = $('<tr id="' + date.format('DD-MM-YYYY') + '">');
                                    row.append('<td>' + date.format('DD/MM/YYYY') + '</td>')
                                    for (var i = 0; i < data.empleados.length; i++) {
                                        row.append('<td idempleado="' + data.empleados[i].idempleado + '"></td>')
                                    }

                                    $container.find('table.table-comisiones tbody').append(row);
                                }
                            });


                            //La estructura de la rowTotal
                            var $rowTotal = $('<tr><td>Totales</td></tr>');
                            $.each(data.empleados, function () {
                                $rowTotal.append('<td idempleado="' + this.idempleado + '"><div class="units-row" style="margin-bottom: 0px;"><div class="unit-33"><label type="serviciosvendidos"></label></div><div class="unit-33"><label type="productosvendidos"></label></div><div class="unit-33"><label type="acumulado"></label></div></div></td>');
                            });

                            $container.find('table.table-comisiones tfoot').append($rowTotal);

                            //Llenamos nuestra tabla
                            $.each(data.comisiones, function () {

                                var date = moment(this.empleadocomision_fecha, 'MM/DD/YY');
                                date = date.format('DD-MM-YYYY');

                                var row = $container.find('tr#' + date);

                                //Si el empleado se encuentra en la tabla
                                if (typeof $container.find('.table-comisiones th#' + this.idempledo).attr('id') != 'undefined') {

                                    //La posicion del empleado en la tabla
                                    var $th = $container.find('.table-comisiones th#' + this.idempledo);
                                    var index = $th.index();

                                    //<div class="units-row" style="margin-bottom: 0px;"><div class="unit-20"><label></label></div><div class="unit-20"><label></label></div><div class="unit-20"><label></label></div><div class="unit-20"><label></label></div><div class="unit-20"><label></label></div></div>
                                    //Insertamos los datos

                                    row.find('td').eq(index).append('<div class="units-row" style="margin-bottom: 0px;"><div class="unit-33"><label type="serviciosvendidos">' + parseInt(this.empleadocomision_serviciosvendidos) + '</label></div><div class="unit-33"><label type="productosvendidos">' + parseInt(this.empleadocomision_productosvendidos) + '</label></div><div class="unit-33"><label type="acumulado">' + accounting.formatMoney(this.empleadocomision_acumulado) + '</label></div></div>');


                                }

                            });

                            calcularTotales();
                            $container.find('table.table-comisiones').show();

                        }
                    },
                });
            }else{
                $container.find('table.table-comisiones').hide();
            }
           
           //LA SUMAGTORIA DE LOS TOTALES
           $container.find('#table_ventas tr#ingreso_efectivo td:not(:first-child)').filter(function(){
               var idclinica = $(this).attr('idclinica');
               var servicios = accounting.unformat($(this).text());
               var productos = accounting.unformat($('table.table-balance tbody tr#ingreso_tarjeta td[idclinica='+idclinica+']').text());
               var sum = servicios + productos;
               $('table.table-balance tfoot tr td[idclinica='+idclinica+']').text(accounting.formatMoney(sum));
           });
            
       }
       
       /*
        * Public methods
        */
        
        plugin.init = function(){
            
            settings = plugin.settings = $.extend({}, defaults, options);
            
            //Inicializamos nuestro multiple select
            $container.find("select[name=idclinica]").multipleSelect({
                onClick : function(){
                    filter();
                },
                onCheckAll: function(){
                    filter();
                },
            });
            
             $container.find("select[name=idclinica]").multipleSelect('checkAll');
             
             //Inicializamos nuestros calendarios del filtro de fechas
            var pickdateFrom = $container.find('input[name=ventas_from]').pickadate({
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
            var pickdateTo= $container.find('input[name=ventas_to]').pickadate({
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
                   var from = moment($container.find('input[name=ventas_from_submit]').val(),'YYYY/MM/DD');
                   var to = moment($container.find('input[name=ventas_to_submit]').val(),'YYYY/MM/DD');
                   
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