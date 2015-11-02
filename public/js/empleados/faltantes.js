(function( $ ){
    
   
   /*
    * Handle input. Call public functions and initializers
    */
   
    $.fn.faltantes = function(data){
        var _this = $(this);
        var plugin = _this.data('faltantes');
        
        /*Inicializado ?*/
        if (!plugin) {
            
            plugin = new $.faltantes(this, data);
            
            _this.data('faltantes', plugin);
            
            return plugin;
        /*Si ya fue inizializado regresamos el plugin*/    
        }else{
            return plugin;
        }
        
    };
    
    /*
    * Plugin Constructor
    */
   
    $.faltantes = function(container, options){
        
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
            
            //Inicializamos nuestros calendarios del filtro de fechas
            var pickdateFrom = $container.find('input[name=faltante_fecha]').pickadate({
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
                selectMonths: true,
                selectYears: 25,
                max: new Date(),
            });
            
            $('input[name=faltante_hora]').timepicker({
                minuteStep: 1,
                template: 'modal',
                appendWidgetTo: 'div.modal section',
                showSeconds: false,
                showMeridian: false,
                defaultTime: false
            });
            
            $('input[name=faltante_cantidad]').numeric();
            
            //El evento generar comision
            $container.find('#generarComprobante').on('click',function(e){
                e.preventDefault();
                //Hacemos la peticions ajax pasandole como parametro el id del faltante
                $.ajax({
                    url:'/empleados/faltantes/generarcomprobante',
                    dataType:'json',
                    data:{id:settings.id},
                    success:function(data){
                        download('data:application/pdf;base64,'+data, "comprobante.pdf", "application/pdf");
                    }
                });
            });
            
            
            //El evento getempleadosbyclinica
            $container.find('select[name=idclinica]').on('change',function(){
                var selected = $container.find('select[name=idclinica] option:selected').val();
                $.ajax({
                    url:'/empleados/faltantes/getencargadosbyclinica',
                    dataType:'json',
                    data:{id:selected},
                    success:function(data){
                       //Limpamos los select
                       $container.find('select[name=idempleadogenerador] > option:not(:first-child)').remove();
                       $container.find('select[name=idempleadodeudor] > option:not(:first-child)').remove();
                       
                       //Actualizamos los select
                       $.each(data,function(){
                           var option = $('<option>',{value:this.idempleado}).text(this.empleado_nombre);
  
                           $container.find('select[name=idempleadogenerador],select[name=idempleadodeudor]').append(option);
                       });
                       
                       
                    }
                });
            });
            
       
            
        }

        /*
        * Plugin initializing
        */
        
        plugin.init();
       
    }
    
    
    
})( jQuery );