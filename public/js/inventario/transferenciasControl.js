(function( $ ){
    
   
   /*
    * Handle input. Call public functions and initializers
    */
   
    $.fn.transferenciasControl = function(data){
        var _this = $(this);
        var plugin = _this.data('transferenciasControl');
        
        /*Inicializado ?*/
        if (!plugin) {
            
            plugin = new $.transferenciasControl(this, data);
            
            _this.data('transferenciasControl', plugin);
            
            return plugin;
        /*Si ya fue inizializado regresamos el plugin*/    
        }else{
            return plugin;
        }
        
    };
    
    /*
    * Plugin Constructor
    */
   
    $.transferenciasControl = function(container, options){
        
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

       
       /*
        * Public methods
        */
        
        plugin.init = function(){
            
            settings = plugin.settings = $.extend({}, defaults, options);
            //Paginamos
            
            
            //Paginamos el resultado inicial
            $.ajax({
                url: '/json/lang_es_datatable.json',
                dataType: 'json',
                success: function(data){
                   $table = $container.find('table.table-transferencias').DataTable({
                        language:data,
                    });
                    $table.on( 'draw', function () {
                        $('[data-tools="modal"]').unbind();
                        $('[data-tools="modal"]').modal();
                        
                        $('.ver_detalles').on('loading.tools.modal', function(modal){
                            var $modalHeader = this.$modalHeader;
                            $modalHeader.addClass('modal_header_action');
                        });
                        
                        $('.ver_nota').on('loading.tools.modal', function(modal){
                            var $modalHeader = this.$modalHeader;
                            $modalHeader.remove();
                            var $modalBody = this.$modalBody;
                            $modalBody.css('background','#F5D65B');
                        });
                        
                        $('.change_status').on('loading.tools.modal', function(modal)
            {
                var $modalHeader = this.$modalHeader;
                $modalHeader.addClass('modal_header_action');

                var id = this.$element.closest('tr').attr('id');

                var $modal = this ;

                this.createCancelButton('Cancelar');

                var buttonAction = this.createActionButton('Guardar');
                buttonAction.attr('data-action','submit');

                buttonAction.on('click', $.proxy(function()
                {

                    var $modalBody = $modal.$modalBody;
                    var empty = false;

                    $modalBody.find('textarea').removeClass('input-error');

                    //Verificamos que no este vacio
                    if( $modalBody.find('textarea[required]').val() == ""){
                        empty=true;
                        $modalBody.find('textarea[required]').addClass('input-error');
                    }

                    if(!empty){
                    
                        var formData = new FormData();
                        formData.append('id',id);
                        formData.append('transferencia_estatus',$modalBody.find('select').val());
                        formData.append('transferencia_nota',$modalBody.find('textarea').val());
                        
                        //Hacemos la peticion ajax
                        $.ajax({
                            url:'/inventario/transferencias/cambiarstatus',
                            dataType: 'json',
                            method:'POST',
                            data:formData,
                            processData: false,
                           contentType: false,
                            success: function(data){
                                if(data.response){
                                    $modal.close();
                                    window.location.replace('/inventario/transferencias');
                                }
                            }
                        });
                        
                    }

                }, this));

            });

            //Las transferencias con notas
            $container.find('td.transferencia_nota').filter(function(){
                if($(this).text() != ""){
                    var id = $(this).closest('tr').attr('id');
                    var modal_launcer = $('<a data-tools="modal" data-width="700" data-title="<h2>Transferencia #'+id+'" data-content="/inventario/transferencias/vernota?id='+id+'" class="ver_nota" href="javascript:void(0)" ><img src="/img/icons/note_icon.png"></a>');
                    $(this).html(modal_launcer);
                    
                }
            });
                    });
                }
            });
            
           
            //El modal de cambiar estatus
            $('.change_status').on('loading.tools.modal', function(modal)
            {
                var $modalHeader = this.$modalHeader;
                $modalHeader.addClass('modal_header_action');

                var id = this.$element.closest('tr').attr('id');

                var $modal = this ;

                this.createCancelButton('Cancelar');

                var buttonAction = this.createActionButton('Guardar');
                buttonAction.attr('data-action','submit');

                buttonAction.on('click', $.proxy(function()
                {

                    var $modalBody = $modal.$modalBody;
                    var empty = false;

                    $modalBody.find('textarea').removeClass('input-error');

                    //Verificamos que no este vacio
                    if( $modalBody.find('textarea[required]').val() == ""){
                        empty=true;
                        $modalBody.find('textarea[required]').addClass('input-error');
                    }

                    if(!empty){
                    
                        var formData = new FormData();
                        formData.append('id',id);
                        formData.append('transferencia_estatus',$modalBody.find('select').val());
                        formData.append('transferencia_nota',$modalBody.find('textarea').val());
                        
                        //Hacemos la peticion ajax
                        $.ajax({
                            url:'/inventario/transferencias/cambiarstatus',
                            dataType: 'json',
                            method:'POST',
                            data:formData,
                            processData: false,
                           contentType: false,
                            success: function(data){
                                if(data.response){
                                   
                                    $modal.close();
                                    window.location.replace('/inventario/transferencias');
                                }
                            }
                        });
                        
                    }

                }, this));

            });

            //Las transferencias con notas
            $container.find('td.transferencia_nota').filter(function(){
                if($(this).text() != ""){
                    var id = $(this).closest('tr').attr('id');
                    var modal_launcer = $('<a data-tools="modal" data-width="700" data-title="<h2>Transferencia #'+id+'" data-content="/inventario/transferencias/vernota?id='+id+'" class="ver_nota" href="javascript:void(0)" ><img src="/img/icons/note_icon.png"></a>');
                    $(this).html(modal_launcer);
                    
                }
            });
            
             $('.ver_nota').on('loading.tools.modal', function(modal){
                var $modalHeader = this.$modalHeader;
                $modalHeader.remove();
                var $modalBody = this.$modalBody;
                $modalBody.css('background','#F5D65B');
            });
            
            
            $container.find('td.transferencia_estatus').filter(function(){
                if($(this).text() != "enviada"){
                    $(this).closest('tr').find('a.change_status').remove();
                }
            });
             $container.find('td.transferencia_comprobante').filter(function(){
                if($(this).text() != ""){
                   var url = $(this).text() ;
                   $(this).html('<a href="'+url+'"><img style="width:20px;height:20px" src="/img/icons/pdf_icon.png"></a>')
                }
            });
            
            $('.ver_detalles').on('loading.tools.modal', function(modal){
                            var $modalHeader = this.$modalHeader;
                            $modalHeader.addClass('modal_header_action');
                        });
                        
                        
           //Inicializamos nuestros calendarios del filtro de fechas
            var pickdateFrom = $container.find('input[name=transferencia_from]').pickadate({
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
            var pickdateTo= $container.find('input[name=transferencia_to]').pickadate({
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
                   var from = $container.find('input[name=transferencia_from_submit]').val();
                   var to = $container.find('input[name=transferencia_to_submit]').val();
                   
                   filterByDate(from,to);

                }
                
                
            });
            
                
            
            

        }
        
        
        var filterByDate = function(from, to){
            
            
            //Hacemos la peticion ajax
           $.ajax({
               url:'/inventario/transferencias/filterbydate',
               dataType: 'json',
               method:'GET',
               async:false,
               data:{from:from,to:to},
               success: function(data){
                     
                     $container.find('.table-transferencias tbody tr').remove();
                     
                     if(typeof $table != 'undefined'){
                        $table.clear();
                        $table.destroy();
                    }
                     
                      $.each(data,function(){
                     
                          var date = moment(this.transferencia_fechamovimiento,'MM/DD/YY');
                          var transferencia_nota = this.transferencia_nota != null ? this.transferencia_nota : "";
                          
                          
                          var row = $('<tr>').attr('id',this.idtransferencia);
                          row.append('<td>'+date.format('DD/MM/YYYY')+'</td>');
                          row.append('<td>'+this.clinica_remitente+'</td>');
                          row.append('<td>'+this.clinica_destinatario+'</td>');
                          row.append('<td class="transferencia_estatus">'+this.transferencia_estatus+'</td>');
                          row.append('<td class="transferencia_comprobante">'+this.transferencia_comprobante+'</td>');
                          row.append('<td >'+this.empleado_receptor+'</td>');
                          row.append('<td class="transferencia_nota">'+transferencia_nota+'</td>');
                          row.append('<td class="tr_options"><a class="ver_detalles" data-content="/inventario/transferencias/verdetalle?html=true&id='+this.idtransferencia+'" data-tools="modal" data-width="700" data-title="<h2>Transferencia #'+this.idtransferencia+'</h2>"  href="javascript:void(0)">Ver detalles</a><a class="change_status" href="javascript:void(0)" data-tools="modal" data-width="700" data-title="<h2>Cambiar estatus</h2>" data-content="/inventario/transferencias/cambiarstatus?html=true&id='+this.idtransferencia+'" > Cambiar status</a></td>');
                          $container.find('table.table-transferencias tbody').append(row);
                          
                      });
                      
                      plugin.init();
                        

               }
           });
            
        };

        /*
        * Plugin initializing
        */
        
        plugin.init();
       
    }
    
    
    
})( jQuery );