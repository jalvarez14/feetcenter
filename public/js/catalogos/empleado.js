(function( $ ){
    
   
   /*
    * Handle input. Call public functions and initializers
    */
   
    $.fn.empleado = function(data){
        var _this = $(this);
        var plugin = _this.data('empleado');
        
        /*Inicializado ?*/
        if (!plugin) {
            
            plugin = new $.empleado(this, data);
            
            _this.data('empleado', plugin);
            
            return plugin;
        /*Si ya fue inizializado regresamos el plugin*/    
        }else{
            return plugin;
        }
        
    };
    
    /*
    * Plugin Constructor
    */
   
    $.empleado = function(container, options){
        
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
            
            //Inicializamos los campos de fecha
            $container.find('input[name=empleado_fechanacimiento]').pickadate({
                monthsFull: [ 'enero', 'febrero', 'marzo', 'abril', 'mayo', 'junio', 'julio', 'agosto', 'septiembre', 'octubre', 'noviembre', 'diciembre' ],
                monthsShort: [ 'ene', 'feb', 'mar', 'abr', 'may', 'jun', 'jul', 'ago', 'sep', 'oct', 'nov', 'dic' ],
                weekdaysFull: [ 'domingo', 'lunes', 'martes', 'miércoles', 'jueves', 'viernes', 'sábado' ],
                weekdaysShort: [ 'dom', 'lun', 'mar', 'mié', 'jue', 'vie', 'sáb' ],
                today: 'hoy',
                clear: 'borrar',
                close: 'cerrar',
                firstDay: 1,
                format: 'd !de mmmm !de yyyy',
                formatSubmit: 'yyyy/mm/dd',
                selectYears: true,
                selectMonths: true
            });
            
            //la foto del empleado
            $container.find('img#empleado_foto').on('click',function(){
                $container.find('input[name=empleado_foto]').trigger('click');
            });
            
            $container.find('input[name=empleado_foto]').on('change',function(){
                var $input = $(this);
                var photo =  $container.find('img#empleado_foto');
                var inputFiles = this.files;
                
                $container.find('input[name=empleado_foto_submit]').val('');
                
                if(inputFiles == undefined || inputFiles.length == 0) return;
                
                var inputFile = inputFiles[0];
                var reader = new FileReader();
                
                reader.onload = function(event) {
                    
                    $container.find('img#empleado_foto').attr("src", event.target.result);
                };
                
                if($container.find('input[name=empleado_foto]').val() != ''){
                    $container.find('p#eliminar_imagen').show();
                }
                
                reader.readAsDataURL(inputFile);

            });
            
            $container.find('p#eliminar_imagen').on('click',function(){
                $container.find('img#empleado_foto').attr("src", '/img/empleados/default.jpg');
                $container.find('input[name=empleado_foto]').val('');
                $container.find('input[name=empleado_foto_submit]').val('delete');
                $container.find('p#eliminar_imagen').hide();
            });
            
            //El sueldo
            $container.find('input[name=empleado_sueldo]').numeric();
            
            
            if(settings.empleado_foto != null){
                $container.find('img#empleado_foto').attr("src", settings.empleado_foto);
                $container.find('p#eliminar_imagen').show();
            }
            $container.find('input[name=empleado_comprobantedomiclio]').on('change',function(){
                $container.find('input[name=empleado_comprobantedomiclio_submit]').val('');
            });
            if(settings.empleado_comprobantedomiclio != null){
                $container.find('input[name=empleado_comprobantedomiclio]').hide();
                var comprobante_domicilio = $('<p><a style="text-decoration: none" href="'+settings.empleado_comprobantedomiclio+'"><img src="/img/icons/img_icon.png"> Visualizar Comprobante de domicilio</a><a id="eliminar_comprobante_domicilio" style="text-decoration: none; margin-left:24px" href="javascript:void(0)">Eliminar comprobante</a></p>');
                $container.find('input[name=empleado_comprobantedomiclio]').after(comprobante_domicilio);
                //El evento eliminar comprobante
                $container.find('a#eliminar_comprobante_domicilio').on('click',function(){
                    $container.find('input[name=empleado_comprobantedomiclio_submit]').val('delete');
                    $container.find('input[name=empleado_comprobantedomiclio]').show();
                    comprobante_domicilio.remove();
                });
            }
            $container.find('input[name=empleado_comprobanteidentificacion_submit]').on('change',function(){
                $container.find('input[name=empleado_comprobanteidentificacion_submit]').val('');
            });
            if(settings.empleado_comprobanteidentificacion != null){
                $container.find('input[name=empleado_comprobanteidentificacion]').hide();
                var comprobante_identificacion = $('<p><a style="text-decoration: none" href="'+settings.empleado_comprobanteidentificacion+'"><img src="/img/icons/img_icon.png"> Visualizar Comprobante de identificación</a><a id="eliminar_comprobante_identificacion" style="text-decoration: none; margin-left:24px" href="javascript:void(0)">Eliminar comprobante</a></p>');
                $container.find('input[name=empleado_comprobanteidentificacion]').after(comprobante_identificacion);
                //El evento eliminar comprobante
                $container.find('a#eliminar_comprobante_identificacion').on('click',function(){
                    $container.find('input[name=empleado_comprobanteidentificacion_submit]').val('delete');
                    $container.find('input[name=empleado_comprobanteidentificacion]').show();
                    comprobante_identificacion.remove();
                });
            }
        
        }

        /*
        * Plugin initializing
        */
        
        plugin.init();
       
    }
    
    
    
})( jQuery );