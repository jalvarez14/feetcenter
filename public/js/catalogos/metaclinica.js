(function( $ ){
    
   
   /*
    * Handle input. Call public functions and initializers
    */
   
    $.fn.clinica = function(data){
        var _this = $(this);
        var plugin = _this.data('clinica');
        
        /*Inicializado ?*/
        if (!plugin) {
            
            plugin = new $.clinica(this, data);
            
            _this.data('clinica', plugin);
            
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
           encargado_array: new Array(),
           empleado_array: new Array(),
       };
       
       /* 
        * Important Components
        */ 
        var $container = $(container);  
        
        var settings;
        
        /*
        * Private methods
        */
            
            var removeEmpleado = function(idempleado){
                

                
                //De la tabla de encargados removemos el registro
                $('#table_empleado tr[id='+idempleado+']').remove();
                //Habilitamos en los selects
                $container.find('select[name=clinica_encargado] option[value="'+idempleado+'"]').show();
                $container.find('select[name=clinica_empleado] option[value="'+idempleado+'"]').show();
                
            }
            
            var removeEncargado = function(idempleado){
                //De la tabla de encargados removemos el registro
                $('#table_encargado tr[id='+idempleado+']').remove();
                //Habilitamos en los selects
                $container.find('select[name=clinica_encargado] option[value="'+idempleado+'"]').show();
                $container.find('select[name=clinica_empleado] option[value="'+idempleado+'"]').show();
                
            }
            
            var addEmpleado = function(){
                
                var idempleado = $('select[name=clinica_empleado]').val();

                //Verificamos si se selecciono un empleado
                if(idempleado != ""){
                    var value = $('select[name=clinica_empleado] option:selected').text();
                   
                    //Lo insertamos en nuestro settings
                    settings.empleado_array.push(idempleado);
                    
                    //Creamos nuestro registro y insertamos en nuestras tablas
                    var tr = $('<tr id="'+idempleado+'"><input type="hidden" name=clinica_empleado[] value="'+idempleado+'"><td>'+value+'</td><td><a href="javascript:void(0)">Eliminar</a></td></tr>');
                    //Agregamos el evento remove

                    tr.find('a').on('click',function(){
                        removeEmpleado(idempleado);
                    });
                    //Insertamos en nuestra tabla
                    $('#table_empleado tbody').append(tr);
                    
                    //Restauramos el select
                    $container.find('select[name=clinica_empleado] option:selected').hide();
                    $container.find('select[name=clinica_empleado]').val('');
                    //Tambien ocultamos del select de empleados, por que ya esta sobre entendido que al ser administrador tambien es empleado
                    //$container.find('select[name=clinica_encargado] option[value="'+idempleado+'"]').hide();
                    
                    //$('#table_empleado tbody').append(tr);
                    
                    
                }else{
                    alert('Por favor seleccione un empleado');
                }
            }
            
            var addEncargado = function(){
                
                var idempleado = $('select[name=clinica_encargado]').val();
                //Verificamos si se selecciono un empleado
                if(idempleado != ""){
                    var value = $('select[name=clinica_encargado] option:selected').text();
                   
                    //Lo insertamos en nuestro settings
                    settings.encargado_array.push(idempleado);
                    
                    //Creamos nuestro registro y insertamos en nuestras tablas
                    var tr = $('<tr id="'+idempleado+'"><input type="hidden" name=clinica_encargado[] value="'+idempleado+'"><td>'+value+'</td><td><a href="javascript:void(0)">Eliminar</a></td></tr>');
                    //Agregamos el evento remove

                    tr.find('a').on('click',function(){
                        removeEncargado(idempleado);
                    });
                    //Insertamos en nuestra tabla
                    $('#table_encargado tbody').append(tr);
                    
                    //Restauramos el select
                    $container.find('select[name=clinica_encargado] option:selected').hide();
                    $container.find('select[name=clinica_encargado]').val('');
                    //Tambien ocultamos del select de empleados, por que ya esta sobre entendido que al ser administrador tambien es empleado
                    //$container.find('select[name=clinica_empleado] option[value="'+idempleado+'"]').hide();
                    
                    //$('#table_empleado tbody').append(tr);
                    
                    
                }else{
                    alert('Por favor seleccione un empleado');
                }
            }
        
       /*
        * Public methods
        */
        
        plugin.init = function(){
            
            settings = plugin.settings = $.extend({}, defaults, options);

            /*
             * Inicializamos los eventos
             */
            
            $container.find('a[data-action=addEncargado]').on('click',addEncargado);
            $container.find('a[data-action=addEmpleado]').on('click',addEmpleado);
            
            //Inicializamos el evento para los registros precargados(edit)
            $container.find('table#table_encargado').find('a').one('click',function(){
                var idempleado = $(this).closest('tr').attr('id');
                var nombre = $(this).closest('tr').find('td').eq(0).text();
                $('select[name=clinica_encargado]').append('<option value="'+idempleado+'">'+nombre+'</option>');
                $('select[name=clinica_empleado]').append('<option value="'+idempleado+'">'+nombre+'</option>');
                $(this).closest('tr').remove();
                
            });
            
            $container.find('table#table_empleado').find('a').on('click',function(){
                var link = $(this);
                var idempleado = $(this).closest('tr').attr('id');
                //verificamos si se puede eliminar
                $.ajax({
                    url:'/catalogos/clinica/checkempleado',
                    dataType: 'json',
                    data:{idempleado:idempleado},
                    success:function(data){
                        if(data){
                            alert('No es posible eliminar a el empleado de la clinica debido a que esté tiene citas proximas registradas');
                        }else{
                            var nombre = link.closest('tr').find('td').eq(0).text();
                            $('select[name=clinica_encargado]').append('<option value="'+idempleado+'">'+nombre+'</option>');
                            $('select[name=clinica_empleado]').append('<option value="'+idempleado+'">'+nombre+'</option>');
                            link.closest('tr').remove();
                        }
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