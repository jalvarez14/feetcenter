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
            access_row_flag:false,
            empleado: new Object(),
       };
       
       /* 
        * Important Components
        */ 
        var $container = $(container);  
        
        var settings;
        /*
        * Private methods
        */


       var addAcceso = function(){
           
           if(!settings.access_row_flag){
            settings.access_row_flag = true;
            
            var new_row = $container.find('#acceso_row').clone();
            new_row.removeAttr('id');
 
            $container.find('#acceso_row a').addClass('btn-disabled');
            $container.find('#acceso_row a').prop('disabled',true);
            
            //Damos formato a nuestra row
            var button_new = new_row.find('a');
            button_new.after('<a href="javascript:void(0)" id="removeRowAccess" style="text-decoration:none">Eliminar</a>');
            button_new.remove();
            new_row.find('a').parent('div').css('margin-top','28px');
            
            $container.find('#acceso_row').after(new_row);
            
            //Modificamos los names de nuestros inputs
            new_row.find('select').attr('name','accesos[1][idrol]');
            new_row.find('input').eq(0).attr('name','accesos[1][username]');
            new_row.find('input').eq(1).attr('name','accesos[1][password]');
            new_row.find('input').eq(2).attr('name','accesos[1][password_confirmar]').attr('for','accesos[1][password]');
            
            //Limpiamos los inputs
            new_row.find('input').eq(0).val('');
            new_row.find('input').eq(1).val('');
            new_row.find('input').eq(2).val('');
            
            //El evento para eliminar la row del acceso
            new_row.find('a').on('click',function(){
                settings.access_row_flag = false;
                new_row.remove();
                $container.find('#acceso_row a').removeClass('btn-disabled');
                $container.find('#acceso_row a').prop('disabled',false);
            });
            
           }
           
       }
       /*
        * Public methods
        */
        
        plugin.init = function(){
            
            settings = plugin.settings = $.extend({}, defaults, options);
            
            $container.find('input[name*=password]').bind("cut copy paste",function(e) {
                e.preventDefault();
            });

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
                //selectYears: true,
                selectMonths: true,
                selectYears: 25,
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
            
            
            if(settings.empleado.empleado_foto != null){
                $container.find('img#empleado_foto').attr("src", settings.empleado.empleado_foto);
                $container.find('p#eliminar_imagen').show();
            }
            $container.find('input[name=empleado_comprobantedomiclio]').on('change',function(){
                $container.find('input[name=empleado_comprobantedomiclio_submit]').val('');
            });
            if(settings.empleado.empleado_comprobantedomiclio != null){
                $container.find('input[name=empleado_comprobantedomiclio]').hide();
                var comprobante_domicilio = $('<p><a style="text-decoration: none" href="'+settings.empleado.empleado_comprobantedomiclio+'"><img src="/img/icons/img_icon.png"> Visualizar Comprobante de domicilio</a><a id="eliminar_comprobante_domicilio" style="text-decoration: none; margin-left:24px" href="javascript:void(0)">Eliminar comprobante</a></p>');
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
            if(settings.empleado.empleado_comprobanteidentificacion != null){
                $container.find('input[name=empleado_comprobanteidentificacion]').hide();
                var comprobante_identificacion = $('<p><a style="text-decoration: none" href="'+settings.empleado.empleado_comprobanteidentificacion+'"><img src="/img/icons/img_icon.png"> Visualizar Comprobante de identificación</a><a id="eliminar_comprobante_identificacion" style="text-decoration: none; margin-left:24px" href="javascript:void(0)">Eliminar comprobante</a></p>');
                $container.find('input[name=empleado_comprobanteidentificacion]').after(comprobante_identificacion);
                //El evento eliminar comprobante
                $container.find('a#eliminar_comprobante_identificacion').on('click',function(){
                    $container.find('input[name=empleado_comprobanteidentificacion_submit]').val('delete');
                    $container.find('input[name=empleado_comprobanteidentificacion]').show();
                    comprobante_identificacion.remove();
                });
            }
            
            //Evento genera comision
            $container.find('input[type=radio][name=empleado_pagoporcomision]').on('change',function(){
                var genera_comision = Boolean(parseInt($(this).val()));
                if(genera_comision){
                    $container.find('select[name=empleado_tipocomisionproducto]').prop('disabled',false);
                    $container.find('input[name=empleado_cantidadcomisionproducto]').prop('disabled',false);
                    $container.find('input[name=empleado_cantidadcomisionproducto]').prop('required',true);
                    
                    $container.find('select[name=empleado_tipocomisionservicio]').prop('disabled',false);
                    $container.find('input[name=empleado_cantidadcomisionservicio]').prop('disabled',false);
                    $container.find('input[name=empleado_cantidadcomisionservicio]').prop('required',true);
                }else{
                    $container.find('select[name=empleado_tipocomisionproducto]').prop('disabled',true);
                    $container.find('input[name=empleado_cantidadcomisionproducto]').prop('disabled',true);
                    $container.find('input[name=empleado_cantidadcomisionproducto]').prop('required',false);
                    
                    $container.find('select[name=empleado_tipocomisionservicio]').prop('disabled',true);
                    $container.find('input[name=empleado_cantidadcomisionservicio]').prop('disabled',true);
                    $container.find('input[name=empleado_cantidadcomisionservicio]').prop('required',false);
                }
            });
            
            //Evento datos de acceso
            $container.find('a[data-action=addAcceso]').on('click',addAcceso);
            
            $container.find('#removeRowAccess').one('click',function(){
                settings.access_row_flag = false;
                $container.find('#removeRowAccess').closest('div.units-row').remove();
                $container.find('#acceso_row a').removeClass('btn-disabled');
                $container.find('#removeRowAccess').prop('disabled',false);
            });
        
        }

        /*
        * Plugin initializing
        */
        
        plugin.init();
       
    }
    
    
    
})( jQuery );