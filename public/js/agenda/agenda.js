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
        
        var renderRecesos = function(date) {
            $.ajax({
                url: '/agenda/getrecesosbyclinica/' + settings.idclinica,
                dataType: 'json',
                data: {dia: date.format('YYYY-MM-DD')},
                success: function (data){
                    $.each(data, function (index, element) {
                        renderReceso(element.idempleadoreceso,element.empleadoreceso_inicio,element.empleadoreceso_fin,element.idempleado);
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
        
        var renderReceso = function(id,start,end,resource){

            var cssClass = cssClassMap[status];
            $('#calendar').fullCalendar('renderEvent', {
                id:id,
                title: 'Receso',
                start: start,
                end: end,
                allDay: false,
                resources: resource,
                className: 'receso',
                editable: true,
            });
            
        }
        
        var initCalendar = function(){
            
             var clinica_select =   $("select[name=idclinica]").multipleSelect('getSelects');
             settings.idclinica = clinica_select[0];

             //Destruimos nuestro calendario
             $container.find('#calendar').fullCalendar('destroy');
             
             var picker = $container.find('input[name=agenda_fecha]').pickadate('picker');
             var date = moment(picker.get('select').obj);
             
             //Inicializamos nuestro calendario
             $('#calendar').fullCalendar({
                 //selectOverlap:false,
                 //eventOverlap:false,
                 //slotEventOverlap:false,
                 header:{
                    left:   'title',
                    center: '',
                    right:  'prev,next'
                },
                 now:date,
                 allDaySlot:false,
                 defaultView: 'resourceDay',
                 scrollTime: '08:00:00',
                 slotDuration: '00:15:00',
                 selectHelper: true,
                 selectable: true,
                 resources: '/agenda/getpedicuristasbyclinica/'+settings.idclinica,
                 eventLimit: true, // for all non-agenda views
                    views: {
                        resourceDay: {
                            eventLimit: 6 // adjust to 6 only for agendaWeek/agendaDay
                        }
                    },
                viewRender: function (view, element) {

                    var viewName = view.name;
                    switch (viewName) {
                        case 'resourceDay':
                        {
                            var date = view.end._d;
                            renderDescansos(moment(date));
                            renderEventos(moment(date));
                            renderRecesos(moment(date));
                            break;
                        }
                    }

                },
                select: function(start, end, event,view) {

                    var viewName = view.name;
                    switch (viewName) {
                        case 'resourceDay':
                        {
                            
                            var now  = start.format('DD/MM/YYYY HH:mm:ss');
                            var then = end.format('DD/MM/YYYY HH:mm:ss');
                            var diff = moment.utc(moment(then).diff(moment(now))).format("HH:mm:ss");
                            
                            if(moment.duration(diff).asMinutes() <= 60){
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
                                        
                                        var option = modal.find('input[name=visita_option]:checked').val();
                                       
                                        
                                        var empty = false;

                                        modal.find('span.error').remove();
                                        modal.find('#span_paciente').siblings('ul').css('border','1px solid #999');

                                        if(modal.find('input[name=idpaciente]').val() == ""){
                                             empty = true;
                                             modal.find('#span_paciente').after('<span class="error"> campo obligatorio</span>');
                                             modal.find('#span_paciente').siblings('ul').css('border','1px solid red');
                                         }

                                         if(!empty && option == 'visita'){
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
                                         }else{
                                            var formData = new FormData();
                                             $.each(modal.find('input:not(:checkbox, :radio),select'),function(){
                                                 formData.append($(this).attr('name'),$(this).val());
                                             });
                                             $.each(modal.find(':checkbox:checked, :radio:checked'),function(){
                                                 formData.append($(this).attr('name'),$(this).val());
                                             });
                                             
                                             $.ajax({
                                                dataType: 'json', 
                                                type: "POST",
                                                url: '/agenda/nuevoreceso',
                                                data: formData,
                                                async: false,
                                                processData: false,
                                                contentType: false,
                                                success: function (data) {
                                                    if(data.result){
                                                        renderReceso(data.data.idempleadoreceso,data.data.empleadoreceso_inicio,data.data.empleadoreceso_fin,data.data.idempleado);
                                                        $modal.close();
                                                    }
                                                }
                                            });
                                         }

                                    }));

                                });
                            }else{
                                alert('La duracion debe de ser igual o menor a 60 minutos!');
                                unselect();
                            }
                            break;
                        }
                    }
                    


                },
                eventResize:function( event, delta, revertFunc, jsEvent, ui, view ) { 
                    var viewName = view.name;
                    switch (viewName) {
                         case 'resourceDay':
                        {
                            if(!isOverlapping(event)){
                                if(event.className[0]!='receso'){
                                    //La peticion ajax
                                    $.ajax({
                                        dataType: 'json', 
                                        type: "POST",
                                        url: '/agenda/resizeevent',
                                        data: {idvisita:event.id,start:event.start.format('YYYY/MM/DD HH:mm:00'),end:event.end.format('YYYY/MM/DD HH:mm:00')},

                                    });
                                }else{
                                     //La peticion ajax
                                    $.ajax({
                                        dataType: 'json', 
                                        type: "POST",
                                        url: '/agenda/resizereceso',
                                        data: {idempleadoreceso:event.id,idempeleado:event.resources[0],start:event.start.format('YYYY/MM/DD HH:mm:00'),end:event.end.format('YYYY/MM/DD HH:mm:00')},

                                    });
                                }
                            }else{
                                 revertFunc();
                            }
                        }
                     }
                },
                eventDrop:function(event, delta, revertFunc, jsEvent, ui, view ) {
                     var viewName = view.name;
                     switch (viewName) {
                         case 'resourceDay':
                        {
                            
                            
                            if(!isOverlapping(event)){
                                if(event.className[0]!='receso'){
                                    //La peticion ajax
                                    $.ajax({
                                        dataType: 'json', 
                                        type: "POST",
                                        url: '/agenda/dropevent',
                                        data: {idvisita:event.id,idempeleado:event.resources[0],start:event.start.format('YYYY/MM/DD HH:mm:00'),end:event.end.format('YYYY/MM/DD HH:mm:00')},

                                    });
                                }else{
                                     //La peticion ajax
                                    $.ajax({
                                        dataType: 'json', 
                                        type: "POST",
                                        url: '/agenda/dropreceso',
                                        data: {idempleadoreceso:event.id,idempeleado:event.resources[0],start:event.start.format('YYYY/MM/DD HH:mm:00'),end:event.end.format('YYYY/MM/DD HH:mm:00')},

                                    });
                                }
                            }else{
                                revertFunc();
                            }
                        }
                     }

                },
 
             });
             
             

        }
        
        function unselect(){
            $('#calendar').fullCalendar('unselect');
        }
        
        function isOverlapping(event){
             
            // "calendar" on line below should ref the element on which fc has been called 
            var array = $('#calendar').fullCalendar('clientEvents');
           
           
            for(var i in array){
                if (event.resources[0] == array[i].resources[0] && event.end > array[i].start && event.start < array[i].end && event.id !==array[i].id){
                   return true;
                }
            }
            return false;
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
            
            /*Inicializamos nuestros calendarios*/
            $container.find('input[name=agenda_fecha]').pickadate({
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
                onSet: function(selected,evnt) {
                     initCalendar();
               }
            });
            var picker = $container.find('input[name=agenda_fecha]').pickadate('picker');
            picker.set('select', new Date());

               

            
            
            
            $('#calendar:not(".fc-event")').on('contextmenu', function (e) {
                e.preventDefault();
            });


        }

        
    }
    
    
    
})( jQuery );