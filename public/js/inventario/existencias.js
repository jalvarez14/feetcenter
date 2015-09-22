(function( $ ){
    
   
   /*
    * Handle input. Call public functions and initializers
    */
   
    $.fn.existencias = function(data){
        var _this = $(this);
        var plugin = _this.data('existencias');
        
        /*Inicializado ?*/
        if (!plugin) {
            
            plugin = new $.existencias(this, data);
            
            _this.data('existencias', plugin);
            
            return plugin;
        /*Si ya fue inizializado regresamos el plugin*/    
        }else{
            return plugin;
        }
        
    };
    
    /*
    * Plugin Constructor
    */
   
    $.existencias = function(container, options){
        
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
           
           //Paginamos el resultado inicial
            $.ajax({
                url: '/json/lang_es_datatable.json',
                dataType: 'json',
                success: function(data){
                    var table = $container.find('table').DataTable({
                        language:data,
                    });
                    table.on( 'draw', function () {
                        $('[data-tools="modal"]').modal();
                    });
                }
            });
            
        }

        /*
        * Plugin initializing
        */
        
        plugin.init();
       
    }
    
    
    
})( jQuery );