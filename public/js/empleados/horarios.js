(function( $ ){
    
   
   /*
    * Handle input. Call public functions and initializers
    */
   
    $.fn.horarios = function(data){
        var _this = $(this);
        var plugin = _this.data('horarios');
        
        /*Inicializado ?*/
        if (!plugin) {
            
            plugin = new $.horarios(this, data);
            
            _this.data('horarios', plugin);
            
            return plugin;
        /*Si ya fue inizializado regresamos el plugin*/    
        }else{
            return plugin;
        }
        
    };
    
    /*
    * Plugin Constructor
    */
   
    $.horarios = function(container, options){
        
        var plugin = this;
        
        /* 
        * Default Values
        */ 
       
       var defaults = {
        idclinica:1,
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
       
       var filter = function(){
           
           var clinicas_select =   $("select[name=idclinica]").multipleSelect('getSelects');
           
           $.ajax({
               url:'/empleados/filter',
               dataType: 'json',
               method:'POST',
               data:{clinicas:clinicas_select},
               success: function(data){  
                   $table.clear();
                   if(data.result.length > 0){
                       //Agregamos los nuevos registros
                        $.each(data.result,function(){
                            var rowNode = $table.row.add([
                                this.clinica,
                                this.nombre,
                                this.lunes,
                                this.martes,
                                this.miercoles,
                                this.jueves,
                                this.viernes,
                                this.sabado,
                                this.domingo,
                                //Las opciones
                                '<td class="tr_options"><a class="editar_horario" href="javascript:void(0)" data-tools="modal" data-width="900" data-title="<h2>'+this.nombre+'</h2>" data-content="/empleados/horarios?html=true&idempleado='+this.idempleado+'" >Editar</a></td>'
                            ]).draw().node();
                            //Las opciones 
                            $(rowNode).find('td').last().addClass('tr_options');
                            $(rowNode).find('td').last().find('a.editar_horario').modal();
                            $(rowNode).find('td').last().find('a.editar_horario').on('loading.tools.modal', function(modal){
                                
                                var $modalHeader = this.$modalHeader;
                                $modalHeader.addClass('modal_header_action');
                                var $modal = this ;
                                this.createCancelButton('Cancelar');
                                
                                var buttonAction = this.createActionButton('Guardar');
                                
                                buttonAction.on('click', $.proxy(function(){
                                    var $form = modal.find('form');
                                var formData = new FormData($form[0]);
                                
                                        //Hacemos la peticion ajax
                                        $.ajax({
                                            dataType: 'json', 
                                            type: "POST",
                                            url: '/empleados/horarios',
                                            data: formData,
                                            async: false,
                                            processData: false,
                                            contentType: false,
                                            success: function (data) {
                                                if(data.response){
                                                    $modal.close();
                                                    window.location.replace('empleados');
                                                }
                                            }
                                        });
                                }));

                            });
                        });
                   }
                   $table.draw();
               }
           });
           
       }
       
       /*
        * Public methods
        */
        
        plugin.init = function(){
            
            settings = plugin.settings = $.extend({}, defaults, options);
         
            $.ajax({
                url: '/json/lang_es_datatable.json',
                dataType: 'json',
                async:false,
                success: function(data){
                    $table = container.find('table').DataTable({
                        language:data,
                    });

                }
            });
            
            //Inicializamos nuestro multiple select
            $container.find("select[name=idclinica]").multipleSelect({
                allSelected:'Todas las clinicas',
                selectAllText:'Todas las clinicas',
                onClick : filter,
                onCheckAll:filter,
                onUncheckAll:filter,
            });
            
            $container.find("select[name=idclinica]").multipleSelect("setSelects", [settings.idclinica]);
            filter();

            
            
        }
       
    }
    
    
    
})( jQuery );