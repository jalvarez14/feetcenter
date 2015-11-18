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
           var pedicuristas_select = $("select[name=idempleado]").multipleSelect('getSelects');
          
           if(typeof $table != 'undefined'){
                $table.clear();
                $table.destroy();
            }
           $.ajax({
                url: '/json/lang_es_datatable.json',
                dataType: 'json',
                async:false,
                success: function(data){
                    $table = container.find('table').DataTable({
                        serverSide: true,
                        language:data,
                        processing: true,
                        iDisplayLength:25,
                        order:[],
                        ordering:false,
                        columns: [
                            { data: "clinica_nombre" },
                            { data: "paciente_fecharegistro" },
                            { data: "paciente_nombre" },
                            { data: "paciente_celular" },
                            { data: "empleado_nombre" },
                            { data: "opciones" },
                        ],
                        ajax: {
                            url: '/pacientes/serverside',
                            type: 'POST',
                            data:{clinicas:clinicas_select,empleados:pedicuristas_select},
                        },
                        drawCallback: function( settings ) {
                           
                           $container.find('table tbody a.delete_modal').filter(function(){
                               var idpaciente = $(this).closest('tr').attr('id');
                               $(this).modal({
                                    title: '<h2>Advertencia</h2>',
                                    content:'/pacientes/eliminar/delete?html=true&idpaciente='+idpaciente,
                                });
                           });
                           
//                           $container.find('table tbody a.delete_modal').modal({
//                                title: '<h2>Advertencia</h2>',
//                                content:'/pacientes/eliminar/delete?html=true',
//                            });
                            
                            $('table tbody a.delete_modal').on('loading.tools.modal', function(modal)
                            {
                                var $modalHeader = this.$modalHeader;
                                $modalHeader.addClass('modal_header_warning');
                                var id = this.$element.closest('tr').attr('id');
                                var $modal = this ;

                                this.createCancelButton('Cancelar');
                                
                                 if(modal.find('.can_delete').length > 0){
                                
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
                                    }

                            });
                        }
                    });
                    
          

                }
            });
       };
       
       /*
        * Public methods
        */
        
        plugin.init = function(){
            
            settings = plugin.settings = $.extend({}, defaults, options);
            if(settings.idrol == 3){
                //container.find('thead tr th').last().remove();
            }
            
            //Inicializamos nuestro multiple select
            $container.find("select[name=idclinica]").multipleSelect({
                allSelected:'Todas las clinicas',
                selectAllText:'Todas las clinicas',
                onClick : filter,
                onCheckAll:filter,
                onUncheckAll:filter,
            });
            
            //Inicializamos nuestro multiple select
            $container.find("select[name=idempleado]").multipleSelect({
                allSelected:'Todos los pedicuristas',
                selectAllText:'Todos los pedicuristas',
                onClick : filter,
                onCheckAll:filter,
                onUncheckAll:filter,
            });
            $container.find("select[name=idclinica]").multipleSelect("setSelects", [settings.idclinica]);
            $container.find("select[name=idempleado]").multipleSelect("checkAll");
            
            //filter();
           
            
        }

       
    }
    
    
    
})( jQuery );