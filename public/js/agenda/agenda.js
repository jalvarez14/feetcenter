(function( $ ){
    
   
   /*
    * Handle input. Call public functions and initializers
    */
   
    $.fn.agenda = function(data){
        var _this = $(this);
        var plugin = _this.data('agenda');
        
        /*Inicializado ?*/
        if (!plugin) {
            
            plugin = new $.agenda(this, data);
            
            _this.data('agenda', plugin);
            
            return plugin;
        /*Si ya fue inizializado regresamos el plugin*/    
        }else{
            return plugin;
        }
        
    };
    
    /*
    * Plugin Constructor
    */
   
    $.agenda = function(container, options){
        
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
        
        var cssClassMap = {"por confirmar":"por_confirmar"};
        
        /*
        * Private methods
        */
       
        var crearDescanso = function(start,end,resource){
            $('#calendar').fullCalendar('renderEvent', {
                title: 'Descanso',
                start: start,
                end: end,
                allDay: false,
                resources: resource,
                className: 'agenda_descanso',
                editable: false,
                backgroundColor: '#CCCCCC',
                borderColor: '#CCCCCC',
            });
        }
        
        var crearSinhorario = function(start,end,resource){
            $('#calendar').fullCalendar('renderEvent', {
                title: 'Horario sin definir',
                start: start,
                end: end,
                allDay: false,
                resources: resource,
                className: 'agenda_horariosindefinir',
                editable: false,
                backgroundColor: '#CCCCCC',
                borderColor: '#CCCCCC',
            });
        }
        
        /*
         * 
         * Hace el render de los descansos y los dias nos disponibles
         */
        var renderDescansos = function (date) {
            $.ajax({
                url: '/agenda/gethorariosbyclinica/' + settings.idclinica,
                dataType: 'json',
                data: {dia: date.isoWeekday()},
                success: function (data) {
                    $.each(data, function (index, element) {
                        if (element !== null) {
                            if (element.descanso) {
                                var start = date.format('YYYY-MM-DD') + ' 00:00:00';
                                var end = date.format('YYYY-MM-DD') + ' 23:59:59';
                                var resource = index;
                                crearDescanso(start, end, resource);
                            }else{
                                var start = date.format('YYYY-MM-DD') + ' 00:00:00';
                                var end = date.format('YYYY-MM-DD')   +  ' ' + element.entrada;
                                var resource = index;
                                crearNodisponible(start,end,resource);
                                start = date.format('YYYY-MM-DD')   +  ' ' + element.salida;
                                end = date.format('YYYY-MM-DD') + ' 23:59:59';
                                resource = index;
                                crearNodisponible(start,end,resource);
                            }
                        }else{
                            var start = date.format('YYYY-MM-DD') + ' 00:00:00';
                            var end = date.format('YYYY-MM-DD') + ' 23:59:59';
                            var resource = index;
                            crearSinhorario(start,end,resource);
                        }
                    });
                }
            });
        }
        
        /*
         * 
         * Hace el render de los eventos creados en la base de datos
         */
        
        var renderEventos = function(date) {
            $.ajax({
                url: '/agenda/geteventosbyclinica/' + settings.idclinica,
                dataType: 'json',
                data: {dia: date.format('YYYY-MM-DD')},
                success: function (data) {
                    $.each(data, function (index, element) {
                        renderEvento(element.idvisita,element.visita_fechainicio,element.visita_fechafin,element.idempleado,element.paciente_nombre,element.visita_status);
                    });
                }
            });
        }
        
        
        var crearNodisponible = function(start,end,resource){
            $('#calendar').fullCalendar('renderEvent', {
                title: 'No disponible',
                start: start,
                end: end,
                allDay: false,
                resources: resource,
                className: 'agenda_nodisponible',
                editable: false,
                backgroundColor: '#CCCCCC',
                borderColor: '#CCCCCC',
            });
        }
        
        var renderEvento = function(id,start,end,resource,title,status){

            var cssClass = cssClassMap[status];
            $('#calendar').fullCalendar('renderEvent', {
                id:id,
                title: title,
                start: start,
                end: end,
                allDay: false,
                resources: resource,
                className: cssClass,
                editable: true,
            });
            
        }
        
        var initCalendar = function(){
            
             var clinica_select =   $("select[name=idclinica]").multipleSelect('getSelects');
             settings.idclinica = clinica_select[0];

             //Destruimos nuestro calendario
             $container.find('#calendar').fullCalendar('destroy');
             
             //Inicializamos nuestro calendario
             $('#calendar').fullCalendar({
                 allDaySlot:false,
                 defaultView: 'resourceDay',
                 scrollTime: '08:00:00',
                 slotDuration: '00:15:00',
                 selectHelper: true,
                 selectable: true,
                 resources: '/agenda/getpedicuristasbyclinica/'+settings.idclinica,
                 viewRender: function (view, element) {

                    var viewName = view.name;
                    switch (viewName) {
                        case 'resourceDay':
                        {
                            var date = view.end._d;
                            renderDescansos(moment(date));
                            renderEventos(moment(date));
                            break;
                        }
                    }

                },
                select: function(start, end, event,view) {

                    var viewName = view.name;
                    switch (viewName) {
                        case 'resourceDay':
                        {
                            var $modalLauncher = $('<a>'); $modalLauncher.attr('data','modal'); $modalLauncher.attr('data-width',800    ); $modalLauncher.attr('data-title','Nueva visita');
                            
                            $modalLauncher.unbind();
                            var data_content = $modalLauncher.attr('data-content');
                            
                            data_content = '/agenda/nuevoevento?html=true';
                            data_content += '&start='+ start.format('YYYY-MM-DD+HH:mm:00');
                            data_content += '&end='+ end.format('YYYY-MM-DD+HH:mm:00');
                            data_content += '&idempleado='+ event.data.id;
                            data_content += '&idclinica=' + settings.idclinica;
                            
                            $modalLauncher.attr('data-content',data_content);
                            $modalLauncher.modal();
                            $modalLauncher.trigger('click');
                            $modalLauncher.unbind();
                            
                            $modalLauncher.on('loading.tools.modal', function(modal){
                                var $modal = this ;
                                
                                var $modalHeader = this.$modalHeader;
                                $modalHeader.addClass('modal_header_action');
                                this.createCancelButton('Cancelar');
                                var guardarAction = this.createActionButton('Guardar');
                                guardarAction.on('click', $.proxy(function(){          
                                     
                                    var empty = false;
                                    
                                    modal.find('span.error').remove();
                                    modal.find('#span_paciente').siblings('ul').css('border','1px solid #999');
           
                                    if(modal.find('input[name=idpaciente]').val() == ""){
                                         empty = true;
                                         modal.find('#span_paciente').after('<span class="error"> campo obligatorio</span>');
                                         modal.find('#span_paciente').siblings('ul').css('border','1px solid red');
                                     }
                                     
                                     if(!empty){
                                         var formData = new FormData();
                                         $.each(modal.find('input:not(:checkbox, :radio),select'),function(){
                                             formData.append($(this).attr('name'),$(this).val());
                                         });
                                         $.each(modal.find(':checkbox:checked, :radio:checked'),function(){
                                             formData.append($(this).attr('name'),$(this).val());
                                         });
                                         
                                         //Hacemos la peticion ajax
                                        $.ajax({
                                            dataType: 'json', 
                                            type: "POST",
                                            url: '/agenda/nuevoevento',
                                            data: formData,
                                            async: false,
                                            processData: false,
                                            contentType: false,
                                            success: function (data) {
                                                if(data.result){
                                                    renderEvento(data.data.idvisita,data.data.visita_fechainicio,data.data.visita_fechafin,data.data.idempleado,data.data.paciente_nombre,data.data.visita_status);
                                                    $modal.close();
                                                }
                                            }
                                        });
                                     }
                                    
                                }));
                                
                            });
                            
                            break;
                        }
                    }
                    


                },
                
                 
 
             });
             
             

        }

       
       /*
        * Public methods
        */
        
        plugin.init = function(){
            
            settings = plugin.settings = $.extend({}, defaults, options);
            
            //Inicializamos nuestro multiple select
            $container.find("select[name=idclinica]").multipleSelect({
                single:true,   
                onClick : initCalendar,
            });
            
            $container.find("select[name=idclinica]").multipleSelect("setSelects", [settings.idclinica]);
            
            initCalendar();
            
            
            
            
            
        }

        
    }
    
    
    
})( jQuery );