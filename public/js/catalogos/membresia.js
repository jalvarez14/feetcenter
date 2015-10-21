(function( $ ){
    
   
   /*
    * Handle input. Call public functions and initializers
    */
   
    $.fn.membresia = function(data){
        var _this = $(this);
        var plugin = _this.data('membresia');
        
        /*Inicializado ?*/
        if (!plugin) {
            
            plugin = new $.membresia(this, data);
            
            _this.data('membresia', plugin);
            
            return plugin;
        /*Si ya fue inizializado regresamos el plugin*/    
        }else{
            return plugin;
        }
        
    };
    
    /*
    * Plugin Constructor
    */
   
    $.membresia = function(container, options){
        
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
        * Private methods
        */
       
       /*
        * Public methods
        */
        
        plugin.init = function(){
            
            settings = plugin.settings = $.extend({}, defaults, options);
            
            $container.find('input[name=servicio_comision],input[name=membresia_servicios],input[name=membresia_cupones],input[name=membresia_precio]').numeric();

            //Evento genera comision
            $container.find('input[name=servicio_generacomision]').on('change',function(){
                var genera_comision = Boolean(parseInt($(this).val()));
                if(genera_comision){
                    $container.find('select[name=servicio_tipocomision]').prop('disabled',false);
                    $container.find('input[name=servicio_comision]').prop('disabled',false);
                    $container.find('input[name=servicio_comision]').prop('required',true);
                }else{
                    $container.find('select[name=servicio_tipocomision]').prop('disabled',true);
                    $container.find('input[name=servicio_comision]').prop('disabled',true);
                    $container.find('input[name=servicio_comision]').prop('required',false);
                }
            });

                       
        }

        /*
        * Plugin initializing
        */
        
        plugin.init();
       
    }
    
    
    
})( jQuery );