(function( $ ){
    
   
   /*
    * Handle input. Call public functions and initializers
    */
   
    $.fn.pacientes = function(data){
        var _this = $(this);
        var plugin = _this.data('pacientes');
        
        /*Inicializado ?*/
        if (!plugin) {
            
            plugin = new $.clinica(this, data);
            
            _this.data('pacientes', plugin);
            
            return plugin;
        /*Si ya fue inizializado regresamos el plugin*/    
        }else{
            return plugin;
        }
        
    };
    
    /*
    * Plugin Constructor
    */
   
    $.clinica = function(container, options){
        
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
       
       
       var filter = function(){
           
           var clinicas_select =   $("select[name=idclinica]").multipleSelect('getSelects');
           
           $.ajax({
               url:'/pacientes/filter',
               dataType: 'json',
               method:'POST',
               data:{clinicas:clinicas_select},
               success: function(data){
                  $table.clear();
                  if(data.result.length > 0){
                      //Agregamos los nuevos registros
                        $.each(data.result,function(){
                            if(settings.idrol != 3){
                                var rowNode = $table.row.add([
                                    this.clinica_nombre,
                                    this.paciente_fecharegistro,
                                    this.paciente_nombre,
                                    this.paciente_celular,
                                    this.empleado_nombre,
                                    '<td class="tr_options"><a href="/pacientes/editar/'+this.idpaciente+'">Editar</a><a class="delete-modal" href="javascript:void(0)" data-tools="modal" data-width="700" data-title="<h2>Advertencia</h2>" data-content="/pacientes/eliminar/delete?html=true" >Eliminar</a></td>'
                                ]).draw().node();
                            }else{
                                var rowNode = $table.row.add([
                                    this.clinica_nombre,
                                    this.paciente_fecharegistro,
                                    this.paciente_nombre,
                                    this.paciente_celular,
                                    this.empleado_nombre,
                                ]).draw().node();
                            }
                            $(rowNode).attr('id',this.idpaciente);
                            //Las opciones 
                            if(settings.idrol != 3){
                                $(rowNode).find('td').last().addClass('tr_options');
                                $(rowNode).find('td').last().find('a.delete-modal').modal();
                                $(rowNode).find('td').last().find('a.delete-modal').on('loading.tools.modal', function(modal){
                                    var $modalHeader = this.$modalHeader;
                                    $modalHeader.addClass('modal_header_warning');
                                    var id = this.$element.closest('tr').attr('id');
                                    var $modal = this ;

                                    this.createCancelButton('Cancelar');

                                    var buttonDelete = this.createDeleteButton('Eliminar');

                                    buttonDelete.on('click', $.proxy(function()
                                    {
                                        //Hacemos la peticion ajax
                                        $.ajax({
                                            url:'/pacientes/eliminar/'+id,
                                            dataType: 'json',
                                            method:'POST',
                                            success: function(data){
                                                if(data.response){
                                                    $modal.close();
                                                    window.location.replace('/pacientes');
                                                }
                                            }
                                        });


                                    }, this));
                                });
                            }
                        });
                  }
               }  
           });
       };
       
       /*
        * Public methods
        */
        
        plugin.init = function(){
            
            settings = plugin.settings = $.extend({}, defaults, options);
            if(settings.idrol == 3){
                container.find('thead tr th').last().remove();
            }
            
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