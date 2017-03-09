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
        var  $table;
        
        /*
        * Private methods
        */

        var filter = function(from,to){
            
            var now = moment();
            
            var clinicas_select = $container.find("select[name=idclinica]").multipleSelect('getSelects');
            var estatus_select = $container.find("select[name=visita_estatuspago]").multipleSelect('getSelects');
            var empleados_select = $container.find("select[name=idempleado]").multipleSelect('getSelects');

            var from = typeof from == 'undefined' ? now.format('DD-MM-YYYY') : from;
            var to = typeof to == 'undefined' ? now.format('DD-MM-YYYY') : to;

            if(typeof $table != 'undefined'){
                $table.clear();
                $table.destroy();
            }
            
            /*
            * DATATABLE
            */
           $.ajax({
                url: '/json/lang_es_datatable.json',
                dataType: 'json',
                async:false,
                success: function(data){
                    $table = $container.find('table.table-ventas').DataTable({
                        serverSide: true,
                        language:data,
                        processing: true,
                        iDisplayLength:25,
                        order:[],
                        ordering:false,
                        columns: [
                            { data: "visita_fecha" },
                            { data: "visita_clinica" },
                            { data: "visita_cliente" },
                            { data: "visita_pedicurista" },
                            { data: "visita_estatuspago" ,"sClass": "estatus_pago"},
                            { data: "visita_efectivo" ,"sClass": "efectivo"},
                            { data: "visita_tarjeta" ,"sClass": "tarjeta"},
                            { data: "visita_subtotal" ,"sClass": "total"},
                            { data: "visita_iva" ,"sClass": "total"},
                            { data: "visita_descuento" ,"sClass": "total"},
                            { data: "visita_total" ,"sClass": "total"},
                            { data: "opciones", "sClass": "tr_options" },
                        ],
                        ajax: {
                            url: '/ventas/serverside',
                            type: 'POST',
                            data:{empleados:empleados_select,clinicas:clinicas_select,estatus:estatus_select,from:from,to:to},
                        },
                        drawCallback: function( settings ) {
                       
                           //DAMOS FORMATO A LAS COLUMNAS
                            $container.find('table.table-ventas tbody td.efectivo,table.table-ventas tbody td.tarjeta,table.table-ventas tbody td.total').filter(function(){
                                var value = $(this).text();
                                var money = accounting.formatMoney(value);
                                $(this).text(money);
                                
                            });
                            
                            //CALCULAMOS LOS TOTALES
                            var total_efectivo = 0;
                            var total_tarjeta = 0;
                            var total = 0;
                            $.each(settings.json.data,function(){
                                if(this.visita_estatuspago == 'pagada'){
                                    total_efectivo+=parseFloat(this.visita_efectivo);
                                    total_tarjeta+=parseFloat(this.visita_tarjeta);
                                    total+=parseFloat(this.visita_total);
                                }
                            });
  
                            $container.find('#total_efectivo').text(accounting.formatMoney(total_efectivo));
                            $container.find('#total_tarjeta').text(accounting.formatMoney(total_tarjeta));
                            $container.find('#total').text(accounting.formatMoney(total));
                            
                            $container.find('#grantotal_efectivo').text(accounting.formatMoney(settings.json.totales.visita_efectivo));
                            $container.find('#grantotal_tarjeta').text(accounting.formatMoney(settings.json.totales.visita_tarjeta));
                             $container.find('#grantotal').text(accounting.formatMoney(settings.json.totales.visita_efectivo + settings.json.totales.visita_tarjeta));
                            
                            //LOS EVENTOS
                            
                            $container.find('table.table-ventas tbody tr').each(function(){
                                var tr = $(this);
                                var idvisita = $(this).attr('id');
                                /*
                                 * DETALLES
                                 */
                                $(this).find('a[modal="detalles"]').modal({
                                    title: 'Visita #'+$(this).attr('id'),
                                    content:'/ventas/detalles?idvisita='+$(this).attr('id'),
                                });
                                
                                $(this).find('a[modal="detalles"]').on('loading.tools.modal', function(modal){
                                    var $modalHeader = this.$modalHeader;
                                    $modalHeader.addClass('modal_header_action');
                                    this.createCancelButton('Cancelar');
                                });
                                
                                /*
                                 * Cancelar
                                 */

                                 
                                if(tr.find('td.estatus_pago').text() == 'cancelada'){
                                    tr.addClass('cancelada');
                                    tr.find('a[modal="cancelar"]').prop('disabled',true);
                                    tr.find('a[modal="cancelar"]').css('cursor','not-allowed');
                                    tr.find('a[modal="cancelar"]').css('color','black');
                                }else{
                                    tr.addClass('pagada');
                                    tr.find('a[modal="cancelar"]').modal({
                                        title: '<h2>Advertencia</h2>',
                                        content:'/ventas/cancelar?idvisita='+idvisita,
                                    });

                                    tr.find('a[modal="cancelar"]').on('loading.tools.modal', function(modal){

                                        var $modal = this;
                                        var $modalHeader = this.$modalHeader;
                                        $modalHeader.addClass('modal_header_warning');
                                        this.createCancelButton('Cancelar');

                                        if(modal.find('.cancel_is_posible').length > 0){
                                            var idvisita = tr.attr('id');

                                            var $actionButton = this.createActionButton('Cancelar venta');
                                            $actionButton.css('background','#DE2C3B');
                                            $actionButton.on('click',function(){
                                                $.ajax({
                                                    url:'/ventas/cancelar',
                                                    method:'post',
                                                    dataType:'json',
                                                    data:{'idvisita':idvisita},
                                                    success:function(data){
                                                        if(data.response){
                                                            $modal.close();
                                                            window.location.replace('/ventas');
                                                        }
                                                    }

                                                });
                                            });
                                        }
                                    });
                                }
                                
                                /*
//                        * NOTA DE REMISION
//                        */
//                        
                            tr.find('a.nota_remision').on('click',function(){
                                $('body').addClass('loading');
                                $.ajax({
                                    method:'get',
                                    url:'/ventas/generarnota',
                                    dataType:'json',
                                    async: false,
                                    data:{idvisita:idvisita},
                                    success:function(data){
                                        download('data:application/pdf;base64,'+data, "nota_de_remision.pdf", "application/pdf");
                                    }

                                });
                                $('body').removeClass('loading');

                            });
                                
                                
                                
                            });

                       
                            
                            
                            
                        }
                    });
                }
            });
            
//             $.ajax({
//               method:'POST',
//               dataType:'json',
//               url:'/ventas/filter',
//               async:false,
//               data:{clinicas:clinicas_select,status:estatus_select},
//               success:function(data){
//                   $.each(data,function(){
//                       var tr = $('<tr>').attr('id',this.idvisita).addClass(this.visita_estatuspago);
//                       tr.append('<td>'+moment(this.visita_creadaen,'YYYY-MM-DD H:m:s').format('DD/MM/YYYY - HH:mm')+'</td>');
//                       tr.append('<td>'+this.clinica_nombre+'</td>');
//                       tr.append('<td>'+this.paciente_nombre+'</td>');
//                       tr.append('<td>'+this.empleado_nombre+'</td>');
//                       tr.append('<td>'+this.visita_estatuspago.capitalize()+'</td>');
//                       var efectivo = 0; var tarjeta = 0;
//                       $.each(this.pagos,function(){
//                           console.log(this);
//                           if(this.visitapago_tipo == 'efectivo'){
//                               efectivo+= parseFloat(this.visitapago_cantidad);
//                           }else{
//                               tarjeta+= parseFloat(this.visitapago_cantidad);
//                           }
//                       });
//                       tr.append('<td>'+accounting.formatMoney(efectivo)+'</td>');
//                       tr.append('<td>'+accounting.formatMoney(tarjeta)+'</td>');
//                       tr.append('<td>'+accounting.formatMoney(this.visita_total)+'</td>');
//                       var td = $('<td><a href="javascript:void(0)" modal="detalles">Ver detalles</a><a class="nota_remision" href="javascript:void(0)">Nota de remision</a><a href="javascript:void(0)" modal="cancelar">Cancelar</a></td>').addClass('tr_options');
//                   
//                       /*
//                        * DETALLES
//                        */
//                       td.find('a[modal="detalles"]').modal({
//                           title: 'Visita #'+this.idvisita,
//                           content:'/ventas/detalles?idvisita='+this.idvisita,
//                       });
//                       
//                       td.find('a[modal="detalles"]').on('loading.tools.modal', function(modal){
//                            
//                            var $modalHeader = this.$modalHeader;
//                            $modalHeader.addClass('modal_header_action');
//                            this.createCancelButton('Cancelar');
//                        });
//                        
//                        
//                        
//   
//                        
//                        /*
//                        * NOTA DE REMISION
//                        */
//                        
//                        td.find('a.nota_remision').on('click',function(){
//                            
//                            var idvisita = tr.attr('id');
//                            $.ajax({
//                                method:'get',
//                                url:'/ventas/generarnota',
//                                dataType:'json',
//                                data:{idvisita:idvisita},
//                                success:function(data){
//                                    download('data:application/pdf;base64,'+data, "nota_de_remision.pdf", "application/pdf");
//                                }
//                                
//                            });
//                            
//                            
//                        });
//                        
//                       
//                       tr.append(td);
//                       
//                       $container.find('table tbody').append(tr);
//                       
//                   });
//
//                   
//                   
//               }
//           });
            

            
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
            
            //Inicializamos nuestro multiple select
            $container.find("select[name=visita_estatuspago]").multipleSelect({
                onClick : function(){
                    filter();
                },
                onCheckAll: function(){
                    filter();
                },
            });
            
            //Inicializamos nuestro multiple select
            $container.find("select[name=idempleado]").multipleSelect({
                onClick : function(){
                    filter();
                },
                onCheckAll: function(){
                    filter();
                },
            });
            
            $container.find("select[name=idclinica]").multipleSelect("setSelects", [settings.session.idclinica]);
            $container.find("select[name=visita_estatuspago]").multipleSelect("setSelects", ['pagada']);
            $container.find("select[name=idempleado]").multipleSelect("checkAll");

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
                formatSubmit: 'yyyy-mm-dd',
                selectYears: true,
                selectMonths: true,
                selectYears: 25,
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
                formatSubmit: 'yyyy-mm-dd',
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
                   var from = $container.find('input[name=ventas_from_submit]').val();
                   var to = $container.find('input[name=ventas_to_submit]').val();
                   
                   filter(from,to);

                }
                
                
            });
            
             filter();
            
        }

        /*
        * Plugin initializing
        */
        
        plugin.init();
       
    }
    
    String.prototype.capitalize = function() {
        return this.charAt(0).toUpperCase() + this.slice(1);
    }
    
    
    
})( jQuery );