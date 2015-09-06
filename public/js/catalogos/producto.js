(function( $ ){
    
   
   /*
    * Handle input. Call public functions and initializers
    */
   
    $.fn.producto = function(data){
        var _this = $(this);
        var plugin = _this.data('producto');
        
        /*Inicializado ?*/
        if (!plugin) {
            
            plugin = new $.producto(this, data);
            
            _this.data('producto', plugin);
            
            return plugin;
        /*Si ya fue inizializado regresamos el plugin*/    
        }else{
            return plugin;
        }
        
    };
    
    /*
    * Plugin Constructor
    */
   
    $.producto = function(container, options){
        
        var plugin = this;
        
        /* 
        * Default Values
        */ 
       
       var defaults;
       
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

            /*
             * Inicializamos los eventos
             */
            $container.find('input[name=producto_costo],input[name=producto_precio],input[name=producto_comision]').numeric();
            
            //Evento genera comision
            $container.find('input[type=radio][name=producto_generacomision]').on('change',function(){
                var genera_comision = Boolean(parseInt($(this).val()));
                if(genera_comision){
                    $container.find('select[name=producto_tipocomision]').prop('disabled',false);
                    $container.find('input[name=producto_comision]').prop('disabled',false);
                    $container.find('input[name=producto_comision]').prop('required',true);
                }else{
                    $container.find('select[name=producto_tipocomision]').prop('disabled',true);
                    $container.find('input[name=producto_comision]').prop('disabled',true);
                    $container.find('input[name=producto_comision]').prop('required',false);
                }
            });
            
        }

        /*
        * Plugin initializing
        */
        
        plugin.init();
       
    }
    
    
    
})( jQuery );