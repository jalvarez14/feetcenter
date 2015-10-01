(function( $ ){
    
   
   /*
    * Handle input. Call public functions and initializers
    */
   
    $.fn.grupos = function(data){
        var _this = $(this);
        var plugin = _this.data('grupos');
        
        /*Inicializado ?*/
        if (!plugin) {
            
            plugin = new $.grupos(this, data);
            
            _this.data('grupos', plugin);
            
            return plugin;
        /*Si ya fue inizializado regresamos el plugin*/    
        }else{
            return plugin;
        }
        
    };
    
    /*
    * Plugin Constructor
    */
   
    $.grupos = function(container, options){
        
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
             
            
        }
        
        plugin.form = function(){
         
            var pacientes_array = new Array();
            
            $container.find('#tabla_pacientes tbody tr').each(function(){
                var id = $(this).attr('id');
                pacientes_array.push(parseInt(id));
            });
           
            $container.find('tbody tr').find('a').on('click',function(){
                var id = $(this).closest('tr').attr('id');

                var index = pacientes_array.indexOf(parseInt(id));

                if (index > -1) {
                    pacientes_array.splice(index, 1);
                }

                $(this).closest('tr').remove();
            });
            
            
            //Inicializamos al autocomplete
            $container.find('input[name=paciente_autocomplete]').tokenInput('/pacientes/grupos/filter',{
                //propertyToSearch: 'paciente_nombre',
                hintText: "Comience a escribir...",
                noResultsText: "No se encontraron resultados...",
                searchingText: "Buscando...",
                tokenLimit:1,
            });
            
            
            $container.find('[data-action=addPaciente]').on('click',function(){
                
                var paciente = container.find('input[name=paciente_autocomplete]').tokenInput("get");
                if(paciente.length > 0){
                    if($.inArray(paciente[0].id,pacientes_array) == -1){
                    
                        //Creamos nuestro row
                        var tr = $('<tr>');
                        tr.attr('id',paciente[0].id);
                         tr.append('<input type="hidden" name="pacientes[]" value="'+paciente[0].id+'">');
                        tr.append('<td>'+paciente[0].clinica_nombre+'</td>');
                        tr.append('<td>'+paciente[0].paciente_nombre+'</td>');
                        tr.append('<td>'+paciente[0].paciente_celular+'</td>');
                        if(paciente[0].paciente_telefono != null){
                            tr.append('<td>'+paciente[0].paciente_telefono+'</td>');
                        }else{
                            tr.append('<td></td>');
                        }
                        tr.append('<td><a href=javascript:void(0)>Eliminar</a></td>');

                        pacientes_array.push(paciente[0].id);

                        //El evento eliminar
                        tr.find('a').on('click',function(){
                            var id = $(this).closest('tr').attr('id');
                            
                            var index = pacientes_array.indexOf(parseInt(id));

                            if (index > -1) {
                                pacientes_array.splice(index, 1);
                            }

                            $(this).closest('tr').remove();
                        });
                        
                        $container.find('#tabla_pacientes tbody').append(tr);
                        
                        container.find('input[name=paciente_autocomplete]').tokenInput("clear");
                        
                    }else{
                        alert('El paciente ya fue agregado anteriormente');
                    }
                }else{
                    alert('Por favor seleccione un paciente');
                }
                
            });
            
            
            
            
            
        }

        /*
        * Plugin initializing
        */
        

       
    }
    
    
    
})( jQuery );