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

        var filter = function(){
            
            var clinicas_select = $container.find("select[name=idclinica]").multipleSelect('getSelects');
            var estatus_select = $container.find("select[name=visita_estatuspago]").multipleSelect('getSelects');
            
            $container.find('table.table-ventas tbody tr').remove();
            
            
            if(typeof $table != 'undefined'){
                $table.clear();
                $table.destroy();
            }
            
             $.ajax({
               method:'POST',
               dataType:'json',
               url:'/ventas/filter',
               async:false,
               data:{clinicas:clinicas_select,status:estatus_select},
               success:function(data){
                   $.each(data,function(){
                       var tr = $('<tr>').attr('id',this.idvisita).addClass(this.visita_estatuspago);
                       tr.append('<td>'+moment(this.visita_creadaen,'YYYY-MM-DD H:m:s').format('DD/MM/YYYY - HH:mm')+'</td>');
                       tr.append('<td>'+this.clinica_nombre+'</td>');
                       tr.append('<td>'+this.paciente_nombre+'</td>');
                       tr.append('<td>'+this.empleado_nombre+'</td>');
                       tr.append('<td>'+this.visita_estatuspago.capitalize()+'</td>');
                       tr.append('<td>'+accounting.formatMoney(this.visita_total)+'</td>');
                       var td = $('<td><a href="javascript:void(0)" modal="detalles">Ver detalles</a><a>Nota de remision</a><a href="javascript:void(0)" modal="cancelar">Cancelar</a></td>').addClass('tr_options');
                       
                       /*
                        * DETALLES
                        */
                       td.find('a[modal="detalles"]').modal({
                           title: 'Visita #'+this.idvisita,
                           content:'/ventas/detalles?idvisita='+this.idvisita,
                       });
                       
                       td.find('a[modal="detalles"]').on('loading.tools.modal', function(modal){
                            
                            var $modalHeader = this.$modalHeader;
                            $modalHeader.addClass('modal_header_action');
                            this.createCancelButton('Cancelar');
                        });
                        
                        
                        
                        /*
                        * Cancelar
                        */
                       
                       if(this.visita_estatuspago == 'cancelada'){
                           td.find('a[modal="cancelar"]').prop('disabled',true);
                           td.find('a[modal="cancelar"]').css('cursor','not-allowed');
                           td.find('a[modal="cancelar"]').css('color','black');
                       }else{
                       
                            td.find('a[modal="cancelar"]').modal({

                                title: '<h2>Advertencia</h2>',
                                content:'/ventas/cancelar?idvisita='+this.idvisita,
                            });

                            td.find('a[modal="cancelar"]').on('loading.tools.modal', function(modal){



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
                        
                        
                       tr.append(td);
                       
                       $container.find('table tbody').append(tr);
                       
                   });

                   /*
                    * DATATABLE
                    */
                   $.ajax({
                        url: '/json/lang_es_datatable.json',
                        dataType: 'json',
                        async:false,
                        success: function(data){
                            $table = $container.find('table.table-ventas').DataTable({
                                language:data,
                            });
                        }
                    });
                   
               }
           });
            

            
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
            
            $container.find("select[name=idclinica]").multipleSelect("setSelects", [settings.session.idclinica]);
            $container.find("select[name=visita_estatuspago]").multipleSelect("setSelects", ['pagada','cancelada']);
            
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