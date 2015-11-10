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
                url: '/json/lang_es_datatable.json',
                dataType: 'json',
                async:false,
                success: function(data){
                    $table = container.find('table').DataTable({
                        serverSide: true,
                        language:data,
                        processing: true,
                        iDisplayLength:25,
                        ordering: false,
                        columnDefs: [{
                            targets: -1,
                            data: null, 
                        }],
                        columns: [
                            { data: "clinica_nombre" },
                            { data: "paciente_fecharegistro" },
                            { data: "paciente_nombre" },
                            { data: "paciente_celular" },
                            { data: "empleado_nombre" },
                        ],
                        ajax: {
                            url: '/pacientes/serverside',
                            type: 'POST',
                            data:{clinicas:clinicas_select},
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
                container.find('thead tr th').last().remove();
            }
            
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