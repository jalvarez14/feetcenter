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
            
            //la foto 
            $container.find('img#producto_foto').on('click',function(){
                $container.find('input[name=producto_foto]').trigger('click');
            });
            
            $container.find('input[name=producto_foto]').on('change',function(){
                var $input = $(this);
                var photo =  $container.find('img#producto_foto');
                var inputFiles = this.files;
                
                $container.find('input[name=producto_foto_submit]').val('');
                
                if(inputFiles == undefined || inputFiles.length == 0) return;
                
                var inputFile = inputFiles[0];
                var reader = new FileReader();
                
                reader.onload = function(event) {
                    
                    $container.find('img#producto_foto').attr("src", event.target.result);
                };
                
                if($container.find('input[name=producto_foto]').val() != ''){
                    $container.find('p#eliminar_imagen').show();
                }
                
                reader.readAsDataURL(inputFile);

            });
            
            $container.find('p#eliminar_imagen').on('click',function(){
                $container.find('img#producto_foto').attr("src", '/img/productos/default.jpg');
                $container.find('input[name=producto_foto]').val('');
                $container.find('input[name=producto_foto_submit]').val('delete');
                $container.find('p#eliminar_imagen').hide();
            });
            
            if(settings.producto_fotografia != null){
                $container.find('img#producto_foto').attr("src", settings.producto_fotografia);
                $container.find('p#eliminar_imagen').show();
            }
            
        }

        /*
        * Plugin initializing
        */
        
        plugin.init();
       
    }
    
    
    
})( jQuery );