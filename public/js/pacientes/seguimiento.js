(function( $ ){
    
   
   /*
    * Handle input. Call public functions and initializers
    */
   
    $.fn.seguimiento = function(data){
        var _this = $(this);
        var plugin = _this.data('seguimiento');
        
        /*Inicializado ?*/
        if (!plugin) {
            
            plugin = new $.seguimiento(this, data);
            
            _this.data('seguimiento', plugin);
            
            return plugin;
        /*Si ya fue inizializado regresamos el plugin*/    
        }else{
            return plugin;
        }
        
    };
    
    /*
    * Plugin Constructor
    */
   
    $.seguimiento = function(container, options){
        
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
                            { data: "paciente_estatus" },
                            { data: "opciones" },
                        ],
                        ajax: {
                            url: '/pacientes/seguimiento/serverside',
                            type: 'POST',
                            data:{clinicas:clinicas_select,empleados:pedicuristas_select},
                        },
                    });
                    
          

                }
            });
       };

       
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