(function( $ ){
    
   
   /*
    * Handle input. Call public functions and initializers
    */
   
    $.fn.servicio = function(data){
        var _this = $(this);
        var plugin = _this.data('clinica');
        
        /*Inicializado ?*/
        if (!plugin) {
            
            plugin = new $.servicio(this, data);
            
            _this.data('servicio', plugin);
            
            return plugin;
        /*Si ya fue inizializado regresamos el plugin*/    
        }else{
            return plugin;
        }
        
    };
    
    /*
    * Plugin Constructor
    */
   
    $.servicio = function(container, options){
        
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

        var addInsumo = function(){
            
            var insumo = $container.find('select[name=servicio_insumo]').val();
            var cantidad = $container.find('input[name=servicio_insumo_cantidad]').val();
            if(insumo != ""){
                if(cantidad != ""){
                    var insumo_nombre = $container.find('select[name=servicio_insumo] option:selected').text();
                    var tr = $('<tr><input type="hidden" name="insumo['+insumo+']" value="'+cantidad+'"><td>'+cantidad+'</td><td>'+insumo_nombre+'</td><td><a href="javascript:void(0)">Eliminar</a></td></tr>');
                    //El evento eliminar
                    tr.find('a').on('click',function(){
                       tr.remove();
                       $container.find('select[name=servicio_insumo] option[value="'+insumo+'"]').show();
                    });
                    $container.find('#table_insumos tbody').append(tr);
                    //Resetiamos nuestros valores del select
                    $container.find('select[name=servicio_insumo]').val("");
                    $container.find('input[name=servicio_insumo_cantidad]').val("");
                    //Ocultamos el insumo de nuestro select para evitar que seleccionen el mismo 2 veces
                    $container.find('select[name=servicio_insumo] option[value="'+insumo+'"]').hide();
                }else{
                    alert('Por favor ingrese la cantidad del insumo por servicio');
                }
            }else{
                alert('Por favor seleccione un insumo');
            }
        }
       
       /*
        * Public methods
        */
        
        plugin.init = function(){
            
            settings = plugin.settings = $.extend({}, defaults, options);
            
            $container.find('input[name=servicio_comision],input[name=servicio_insumo_cantidad]').numeric();
            
            $container.find('a[data-action=addInsumo]').on('click',addInsumo);
            
            //Evento genera comision
            $container.find('input[type=radio][name=servicio_generacomision]').on('change',function(){
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
            
            $container.find('#table_insumos tbody tr').each(function(){
                var idinsumo = $(this).attr('id');
                $container.find('select[name=servicio_insumo] option[value='+idinsumo+']').hide();
            });
            
            $container.find('#table_insumos tbody tr a').on('click',function(){
                var idinsumo = $(this).closest('tr').attr('id');
                $(this).closest('tr').remove();
                $container.find('select[name=servicio_insumo] option[value="'+idinsumo+'"]').show();
            });
            
            
        }

        /*
        * Plugin initializing
        */
        
        plugin.init();
       
    }
    
    
    
})( jQuery );