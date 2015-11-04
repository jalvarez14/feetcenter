(function( $ ){
    
   
   /*
    * Handle input. Call public functions and initializers
    */
   
    $.fn.expediente = function(data){
        var _this = $(this);
        var plugin = _this.data('expediente');
        
        /*Inicializado ?*/
        if (!plugin) {
            
            plugin = new $.expediente(this, data);
            
            _this.data('expediente', plugin);
            
            return plugin;
        /*Si ya fue inizializado regresamos el plugin*/    
        }else{
            return plugin;
        }
        
    };
    
    /*
    * Plugin Constructor
    */
   
    $.expediente = function(container, options){
        
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
           
           $container.find('table.table-clientes tbody tr').remove();
           
           if(typeof $table != 'undefined'){
                $table.clear();
                $table.destroy();
            }
            
            $.ajax({
               method:'POST',
               dataType:'json',
               url:'/pacientes/expediente/filter',
               async:false,
               data:{clinicas:clinicas_select},
               success:function(data){
                    console.log(data);return;
               },
           });
           
           
       }
       /*
        * Public methods
        */
        
        plugin.init = function(){
            
            settings = plugin.settings = $.extend({}, defaults, options);
            
            settings = plugin.settings = $.extend({}, defaults, options);
            if(settings.session.idclinica == null){
                settings.session.idclinica = 1;
            }
            
            //Inicializamos nuestro multiple select
            $container.find("select[name=idclinica]").multipleSelect({  
                onClick : filter,
                onCheckAll:filter,
            });
            
            $container.find("select[name=idclinica]").multipleSelect("setSelects", [settings.session.idclinica]);
            
            filter();
            
            
            
        }

        /*
        * Plugin initializing
        */
        
        plugin.init();
       
    }
    
    
    
})( jQuery );