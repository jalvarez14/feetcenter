(function( $ ){
    
   
   /*
    * Handle input. Call public functions and initializers
    */
   
    $.fn.ausencias = function(data){
        var _this = $(this);
        var plugin = _this.data('ausencias');
        
        /*Inicializado ?*/
        if (!plugin) {
            
            plugin = new $.ausencias(this, data);
            
            _this.data('ausencias', plugin);
            
            return plugin;
        /*Si ya fue inizializado regresamos el plugin*/    
        }else{
            return plugin;
        }
        
    };
    
    /*
    * Plugin Constructor
    */
   
    $.ausencias = function(container, options){
        
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
        


       /*
        * Public methods
        */
        
        plugin.init = function(){
            
            settings = plugin.settings = $.extend({}, defaults, options);
            
            //Inicializamos nuestro multiple select
            $container.find("select[name=idclinica]").multipleSelect({
                single:true,   
                onClick : initCalendar,
            });
            
            $container.find("select[name=idclinica]").multipleSelect("setSelects", [settings.idclinica]);

           initCalendar();


        }
        
        function initCalendar(){
            
             var idclinica =   $("select[name=idclinica]").multipleSelect('getSelects')[0];
             $container.find('#calendar').fullCalendar('destroy');
             $('#calendar').fullCalendar({
                events: '/empleados/ausencias/get?idclinica='+idclinica,
                eventRender: function(event, element) {
                    
                    var allow_roles = [1,2];
                    if(allow_roles.indexOf(settings.idrol) >= 0){
                        
                        element.append( "<span class='closeon'>X</span>" );
                        element.find(".closeon").click(function() {
                            $.ajax({
                                url:'/empleados/ausencias/delete',
                                type: 'POST',
                                dataType: 'json',
                                data:{id:event.id},
                                success: function (data, textStatus, jqXHR) {
                                     if(data.response){
                                         $('#calendar').fullCalendar('removeEvents',event._id);
                                     };
                                 }
                            });

                        });
                    }
                },
                eventDrop:function(event, delta, revertFunc, jsEvent, ui, view ) {
                    
                    var allow_roles = [1,2];
                    if(allow_roles.indexOf(settings.idrol) >= 0){
                        $.ajax({
                            dataType: 'json',
                            type: "POST",
                            url: '/empleados/ausencias/eventdrop',
                            data: {id: event.id, start: event.start.format('YYYY/MM/DD HH:mm:00'), end: event.end.format('YYYY/MM/DD HH:mm:00')},
                        });
                    }
                },
                dayClick: function(date, jsEvent, view, resourceObj) {
                    
                    var allow_roles = [1,2];
                    if(allow_roles.indexOf(settings.idrol) >= 0){

                        var $modalLauncher = $('<a>'); $modalLauncher.attr('data','modal'); $modalLauncher.attr('data-width',800    ); $modalLauncher.attr('data-title','Registrar Ausencia');
                        $modalLauncher.unbind();
                        var data_content = $modalLauncher.attr('data-content');

                        data_content = '/empleados/ausencias/nuevo';
                        data_content += '?start='+ date.format('YYYY-MM-DD+HH:mm:00');
                        data_content += '&idclinica=' + idclinica;

                        $modalLauncher.attr('data-content',data_content);
                        $modalLauncher.modal();
                        $modalLauncher.trigger('click');
                        $modalLauncher.unbind();

                         $modalLauncher.on('loading.tools.modal', function(modal){
                              var $modal = $(this.$modal);
                              var $moda_header = this.$modalHeader;
                              $moda_header.addClass('modal_header_action');
                              this.createCancelButton('Cancelar');
                              var guardarAction = this.createActionButton('Guardar');
                              guardarAction.on('click', $.proxy(function(){
                                  console.log($modal);
                                  $modal.find('form').submit();
                              })); 
                            });
                    }
                 
                    
                }
            });
            
            
        }


        
    }
    
    
    
})( jQuery );