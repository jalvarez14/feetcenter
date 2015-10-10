(function( $ ){
    
   
   /*
    * Handle input. Call public functions and initializers
    */
   
    $.fn.modalEvent = function(data){
        var _this = $(this);
        var plugin = _this.data('modalEvent');
        
        /*Inicializado ?*/
        if (!plugin) {
            
            plugin = new $.modalEvent(this, data);
            
            _this.data('modalEvent', plugin);
            
            return plugin;
        /*Si ya fue inizializado regresamos el plugin*/    
        }else{
            return plugin;
        }
        
    };
    
    /*
    * Plugin Constructor
    */
   
    $.modalEvent = function(container, options){
        
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
       
       var openPacienteContainer = function(){
           $container.find('input[name=idpaciente]').tokenInput('clear');
           $container.find('#token-input-').prop('disabled',true);
           $container.find('#paciente_container').slideDown();
       }
       
       var closePacienteContainer = function(){
            $container.find('#token-input-').prop('disabled',false);
            $container.find('#paciente_container').find('input').val('');
            $container.find('#paciente_container').slideUp();
       }
       
       var submitPaciente = function(){
           var empty= false;
           var equals = true;
           
           $container.find('#paciente_container').find('span.error').remove();
           $container.find('#paciente_container').find('[required]').removeClass('input-error');
           
           $container.find('#paciente_container input[required]').filter(function(){
               if($(this).val() == ""){
                   empty = true;
                   $(this).addClass('input-error');
                   var $span = $(this).siblings('span.req');
                   $span.after('<span class="error"> campo obligatorio</span>');
               }
           });
           
           if(!empty){
               //Validamos que coincidan los celulares
               var cel1 = $container.find('#paciente_container').find('input[name=paciente_celular]').val();
               var cel2 = $container.find('#paciente_container').find('input[name=paciente_celular_confirmar]').val();
               if(cel1 !== cel2){
                   equals = false;
                   $container.find('#paciente_container').find('input[name=paciente_celular_confirmar]').addClass('input-error');
                   var $span = $container.find('#paciente_container').find('input[name=paciente_celular_confirmar]').siblings('span.req');
                   $span.after('<span class="error"> El numero de celular no coincide</span>');
               }
           }
           
           if(!empty && equals){
               
               var form_data = new FormData();
               $.each($container.find('input[type=hidden]'),function(){
                   form_data.append($(this).attr('name'),$(this).val());
               });
               $.each($container.find('#paciente_container input'),function(){
                   form_data.append($(this).attr('name'),$(this).val());
               });
               
               //Hacemos nuestra peticion ajax
               $.ajax({
                   url:'/agenda/quickaddpaciente',
                   method:'POST',
                   dataType:'json',
                   data:form_data,
                   processData: false,
                   contentType: false,
                   success: function(data){
                       if(data.result){
                            $container.find('input[name=idpaciente]').tokenInput('add',{id:data.data.idpaciente,name:data.data.paciente_nombre + ' - Celular: ' + data.data.paciente_celular + ' - Teléfono:',visita_total:0,visita_ultima:''});
                            closePacienteContainer();
                       }
                       
                   }
               });
               
               
           }
       }
       
       /*
        * Public methods
        */
        
        plugin.init = function(){
            
            settings = plugin.settings = $.extend({}, defaults, options);
            
            //Inicializamos al autocomplete
            $container.find('input[name=idpaciente]').tokenInput('/agenda/findpacientes',{
                //propertyToSearch: 'paciente_nombre',
                hintText: "Comience a escribir...",
                noResultsText: "No se encontraron resultados...",
                searchingText: "Buscando...",
                tokenLimit:1,
                onAdd:function(item){
                    $container.find('#visita_total').text(item.visita_total);
                    $container.find('#visita_ultima').text(item.visita_ultima);
                    $container.find('button[btn-action=open_relacionados_container]').removeClass('btn-disabled');
                    $container.find('button[btn-action=open_relacionados_container]').prop('disabled',false);
                },
                onDelete:function(item){
                    $container.find('#visita_total').text('');
                    $container.find('#visita_ultima').text('');
                    $container.find('button[btn-action=open_relacionados_container]').addClass('btn-disabled');
                    $container.find('button[btn-action=open_relacionados_container]').prop('disabled',true);
                }
            });
            
            //new paciente container
            $container.find('button[btn-action=open_paciente_container]').on('click',openPacienteContainer);
            $container.find('.nuevo_paciente_close').on('click',closePacienteContainer);
            $container.find('[btn-action=submit_paciente]').on('click',submitPaciente)
            
        }

        /*
        * Plugin initializing
        */
        
        plugin.init();
       
    }
    
    
    
})( jQuery );