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
        
        var cssClassMap = {
            "por confirmar":"visita_porconfirmar",
            "confimada":"visita_confirmada",
            "cancelo":"visita_cancelo",
            "no se presento":"visita_nosepresento",
            "reprogramda":"visita_reprogramda",
            "en servicio":"visita_enservicio",
            "terminado":"visita_terminado",
        };
       
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
                url: '/gethorariosbyclinica/' + settings.idclinica,
                dataType: 'json',
                data: {dia:  date.format('YYYY-MM-DD')},
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
        
        var renderEventosWeek = function(from, to){
            
            $.ajax({
                url: '/geteventosbyclinicaweek/' + settings.idclinica,
                dataType: 'json',
                data: {from: from.format('YYYY-MM-DD'),to: to.format('YYYY-MM-DD')},
                success: function (data) {
                    $.each(data, function (index, element) {
                        renderEventoWeek(element);
                    });
                }
            });
        }
        
        var renderEventosEmpleadoWeek = function(from, to,idempleado){
            
            $.ajax({
                url: '/geteventosbyempleadoweek',
                dataType: 'json',
                data: {from: from.format('YYYY-MM-DD'),to: to.format('YYYY-MM-DD'),idempleado:idempleado},
                success: function (data) {
                    $.each(data, function (index, element) {
                        renderEventoWeek(element);
                    });
                }
            });
        }
        
        var renderEventos = function(date) {
           
            $.ajax({
                url: '/geteventosbyclinica/' + settings.idclinica,
                dataType: 'json',
                data: {dia: date.format('YYYY-MM-DD')},
                success: function (data) {
                    $.each(data, function (index, element) {
                        renderEvento(element.idvisita,element.visita_fechainicio,element.visita_fechafin,element.idempleado,element.paciente_nombre,element.visita_status,element.visita_estatuspago,element.servicio,element.color);
                    });
                }
            });
        }
        
        var renderRecesos = function(date) {
            $.ajax({
                url: '/getrecesosbyclinica/' + settings.idclinica,
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
        
        var renderEvento = function(id,start,end,resource,title,status,pago,servicio,color){
        
            if(pago == 'pagada'){
                title+= ' - PAGADO - '+servicio;
            }else if(status == 'cancelo'){
                title+= ' - CANCELADA';
            }
    
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
                backgroundColor: color,
            });
            
        }
        
        var renderEventoWeek = function(visita){
            
            var cssClass = cssClassMap[visita.visita_status];
            $('#calendar').fullCalendar('renderEvent', {
                id:visita.idvisita,
                title: visita.paciente_nombre,
                start: visita.visita_fechainicio,
                end: visita.visita_fechafin,
                allDay: false,
                //resources: resource,
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
             var json = getjsonCalendar(date);
             $('#calendar').fullCalendar(json);
             $('#calendar').fullCalendar('gotoDate', date);
        }
        
        function newMethodPay(){
            var fieldsetContainer = $(this).closest('fieldset');
            var newRow = $(this).closest('div.units-row').clone();
            var count = parseInt(fieldsetContainer.find('input').length);
            newRow.find('input').val(0);
            newRow.find('input').attr('name','visitapago_tipo['+count+'][cantidad]');
             newRow.find('select').attr('name','visitapago_tipo['+count+'][type]');
            newRow.find('button').on('click',newMethodPay);
            var eliminar = $('<a href="javascript:void(0)">Eliminar</a>');
            eliminar.on('click',function(){
                $(this).closest('div.units-row').remove();
            });
            $(this).after(eliminar).parent().css('margin-top','27px');
            $(this).remove();
            fieldsetContainer.prepend(newRow);
        }
        
        function pay(modal){

            var payMethodContainer = modal.$modalBody.find('#pay_container');
            var detailsContainer = modal.$modalBody.find('#pay_details_container');
            var empty = false;

            payMethodContainer.find('input[required]').removeClass('input-error');
            payMethodContainer.find('span.error').remove();
            $.each(payMethodContainer.find('#pay_method_container input[required]'),function(){
                if($(this).val() == ""){
                    empty = true;
                    $(this).addClass('input-error');
                    var $span = $(this).siblings('span.req');
                    $span.after('<span class="error"> campo obligatorio</span>');
                }
            });
            
            detailsContainer.find('input[required]').removeClass('input-error');
            detailsContainer.find('span.error').remove();
            $.each(detailsContainer.find('input[required]'),function(){
                if($(this).val() == ""){
                    empty = true;
                    $(this).addClass('input-error');
                }
            });
     
            
            if(!empty){
                var total = parseFloat(payMethodContainer.find('input[name=visita_total]').val());
                var sum = 0;
                $.each(payMethodContainer.find('#pay_method_container input[name*=cantidad]'),function(){
                    sum += parseFloat($(this).val());
                });
                
                if(total == sum){
                    
                    var formData = new FormData();
                    $.each(modal.$modalBody.find('input:not(:checkbox, :radio),select'),function(){
                        formData.append($(this).attr('name'),$(this).val());
                    });
                    $.each(modal.$modalBody.find(':checkbox:checked, :radio:checked'),function(){
                        formData.append($(this).attr('name'),$(this).val());
                    });
                    formData.append('visita_descuento',modal.$modalBody.find('input[name=visita_descuento]').val());
                     //Hacemos la peticion ajax
                    $.ajax({
                        dataType: 'json', 
                        type: "POST",
                        url: '/pagar',
                        data: formData,
                        async: false,
                        processData: false,
                        contentType: false,
                        success: function (data) {
                            if(data.result){
                                initCalendar();
                                modal.close();
                                alert('Venta exitosa!');
                            }
                        }
                    });
                }else{
                    alert('Cantidad(s) incorrecta, el total debe de se igual a $'+total );
                }

                
            }
        }
        
        function unselect(){
            $('#calendar').fullCalendar('unselect');
        }
        
        function valdarFolio(){
            
            $(this).removeClass('input-error');
            
            var folio = $(this).val();
            var $folioInpit  = $(this);
            
            
            $.ajax({
                url:'/validarnuevofolio',
                data:{folio:folio},
                dataType:'json',
                async:false,
                success:function(data){
                    if(!data.response){
                         $folioInpit.val('');
                         $folioInpit.addClass('input-error');
                         alert(data.msg);
                         settings.folio_valido = false;
                    }else{
                        settings.folio_valido = true;
                    }
                }
            });
            
        }
        
        function isOverlapping(event){
             
            // "calendar" on line below should ref the element on which fc has been called 
            var array = $('#calendar').fullCalendar('clientEvents');
      
            for(var i in array){
                var event_end = event.end
                event_end = event_end.second(0);
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
                     $('#calendar').fullCalendar('gotoDate', selected.select);       
                }
            });
            var picker = $container.find('input[name=agenda_fecha]').pickadate('picker');
            picker.set('select',  new Date());
            
            
            $('#calendar:not(".fc-event")').on('contextmenu', function (e) {
                e.preventDefault();
            });
            
            initCalendar();


        }
        
        var getjsonCalendar = function(date){
            return{
                 header:{
                    left:   'title',
                    center: '',
                    right:  'today,agendaWeek,resourceDay,prev,next'
                },
                //aspectRatio:.5,
                 timezone:'local',
                 now:new Date(),
                 allDaySlot:false,
                 defaultView: 'resourceDay',
                 scrollTime: '08:00:00',
                 slotDuration: '00:15:00:00',
                 selectHelper: true,
                 selectable: true,
                 resources: '/getpedicuristasbyclinica/'+settings.idclinica,
                 minTime:'10:00:00',
                 maxTime:'21:00:00',
                 columnFormat:'D/M',
                 titleFormat:'dddd D , MMMM YYYY',
                 forceEventDuration: true,
                viewRender: function (view, element){
                    $('#calendar').fullCalendar( 'removeEvents');
                    var viewName = view.name;
                    switch (viewName) {
                            case 'resourceDay':
                            {
                                
                               

                                $container.find('.fc-header-center').text('');
                                $container.find('#filter_container').show();
                                var date = view.end._d;
                                
                                //cambiamos la fecha de nuestro selector
                               var picker = $container.find('input[name=agenda_fecha]').pickadate('picker');
                                picker.set('select',  date);
                              
                                //$container.find('input[name=agenda_fecha]').pickadate('picker').set('select', new Date(2015, 3, 30));
                               
                                renderDescansos(moment(date));
                                renderEventos(moment(date));
                                renderRecesos(moment(date));
                                
                                //La vista semana por pedicursta
                                $container.find('a.pedicurista_header').on('click',function(){
                                  
                                    var idempleado = $(this).attr('idempleado');
                                    var text = $(this).find('p').text();
                                    $container.find('.fc-header-center').text(text);
                                   
                                    
                                    
                                    $('#calendar').fullCalendar( 'changeView', 'agendaWeek', idempleado);
                                
                                    
                                    
                                });
                                
                                
                                
                                break;
                            }
                            case 'agendaWeek':
                            {
                                
                                $container.find('#filter_container').hide();
                                var from = view.start;
                                var to = view.end;
                                
                                if(typeof view.idempleado != 'undefined'){
                                    
                                    renderEventosEmpleadoWeek(from,to,view.idempleado);
                                     $container.find('.fc-button-agendaWeek').removeClass('fc-state-active');
                                }else{
                                    $container.find('.fc-header-center').text('');
                                    renderEventosWeek(from,to);
                                }

                                break;
                            }
                    }

                },
                select: function(start, end, event,view) {
                    
                    //SI SE TRATA DE UN PEDICURISTA NO LO DEJAM
                    var deny_roles = [3,5,6];
                    if(deny_roles.indexOf(settings.idrol ) >= 0){
                         unselect();
                         return false;
                    }
                   
                    
                    var viewName = view.name;
                    switch (viewName) {
                        case 'resourceDay':
                        {
                            
                            var now  = start.format('DD/MM/YYYY HH:mm:ss');
                            var then = end.format('DD/MM/YYYY HH:mm:ss');
                            var diff = end.diff(start,'minutes');
                            
                            var n = moment();
                            var d = start.diff(n,'minutes');

                            if(d < 0){
                               
                                alert('No es posible crear una cita en una fecha/hora anterior a la actual!');
                                unselect();
                                return;
                            }
                            
                            if(diff <= 60){
                                var eventCheck = {resources:{0:parseInt(event.data.id)},start:start,end:end,id:0};
                                //Que no se traslapen
                                if(!isOverlapping(eventCheck)){
                                    
                                    $('body').addClass('loading');
                                    
                                    var $modalLauncher = $('<a>'); $modalLauncher.attr('data','modal'); $modalLauncher.attr('data-width',800    ); $modalLauncher.attr('data-title','Nueva visita');

                                    $modalLauncher.unbind();
                                    var data_content = $modalLauncher.attr('data-content');

                                    data_content = '/nuevoevento?html=true';
                                    data_content += '&start='+ start.format('YYYY-MM-DD+HH:mm:00');
                                    data_content += '&end='+ end.format('YYYY-MM-DD+HH:mm:00');
                                    data_content += '&idempleado='+ event.data.id;
                                    data_content += '&idclinica=' + settings.idclinica;

                                    $modalLauncher.attr('data-content',data_content);
                                    $modalLauncher.modal();
                                    $modalLauncher.trigger('click');
                                    $modalLauncher.unbind();

                                    $modalLauncher.on('loading.tools.modal', function(modal){
                                        
                                         $('body').removeClass('loading');
                                        var $modal = this ;

                                        var $modalHeader = this.$modalHeader;
                                        $modalHeader.addClass('modal_header_action');
                                        this.createCancelButton('Cancelar');
                                        var guardarAction = this.createActionButton('Guardar');
                                        guardarAction.one('click', $.proxy(function(){          
                                            
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
                                                    url: '/nuevoevento',
                                                    data: formData,
                                                    async: false,
                                                    processData: false,
                                                    contentType: false,
                                                    success: function (data) {
                                                        if(data.result){
                                                            renderEvento(data.data.idvisita,data.data.visita_fechainicio,data.data.visita_fechafin,data.data.idempleado,data.data.paciente_nombre,data.data.visita_status,data.data.visita_estatuspago);
                                                            $modal.close();
                                                        }
                                                    }
                                                });
                                             }else if(option == 'receso'){
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
                                                    url: '/nuevoreceso',
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
          
                                     unselect();
                                }
                            }else{
                                alert('La duracion debe de ser igual o menor a 60 minutos!');
                                unselect();
                            }
                            break;
                        }
                    }
                    


                },
                eventResize:function( event, delta, revertFunc, jsEvent, ui, view ) {
                    //SI SE TRATA DE UN PEDICURISTA NO LO DEJAM
                    var deny_roles = [3,5,6];
                    if(deny_roles.indexOf(settings.idrol ) >= 0){
                         revertFunc();
                    }
                    var viewName = view.name;
                           
                            if(!isOverlapping(event)){
                                if(event.className[0] == "visita_reprogramda" || event.className[0] == "visita_terminado" || event.className[0] == "visita_cancelo" || event.className[0] == "visita_nosepresento" || event.className[0] == "receso" || event.className[0] == "visita_terminado") {
                                    revertFunc();
                                    return;
                                }
                                if(event.className[0]!='receso'){
                                    //La peticion ajax
                                    $.ajax({
                                        dataType: 'json', 
                                        type: "POST",
                                        url: '/resizeevent',
                                        data: {idvisita:event.id,start:event.start.format('YYYY/MM/DD HH:mm:00'),end:event.end.format('YYYY/MM/DD HH:mm:00')},

                                    });
                                }else{
                                     //La peticion ajax
                                    $.ajax({
                                        dataType: 'json', 
                                        type: "POST",
                                        url: '/resizereceso',
                                        data: {idempleadoreceso:event.id,idempeleado:event.resources[0],start:event.start.format('YYYY/MM/DD HH:mm:00'),end:event.end.format('YYYY/MM/DD HH:mm:00')},

                                    });
                                }
                            }else{
                                 revertFunc();
                            }

                },
                eventDrop:function(event, delta, revertFunc, jsEvent, ui, view ) {
                           
                            //SI SE TRATA DE UN PEDICURISTA NO LO DEJAM
                            var deny_roles = [3,5,6];
                            if(deny_roles.indexOf(settings.idrol ) >= 0){
                                 revertFunc();
                            }
                            var n = moment();
                            var d = event.start.diff(n,'minutes');
                            
                            var view = view.name;
                            
                            switch (view){
                                case 'resourceDay':

                            if (!isOverlapping(event)) {

                                if (event.className[0] == "visita_enservicio" || event.className[0] == "receso" || event.className[0] == "visita_terminado") {
                                    revertFunc();
                                    return;
                                }

                                if (event.className[0] != 'receso') {
                                    //La peticion ajax
                                    $.ajax({
                                        dataType: 'json',
                                        type: "POST",
                                        url: '/dropevent',
                                        data: {idvisita: event.id, idempeleado: event.resources[0], start: event.start.format('YYYY/MM/DD HH:mm:00'), end: event.end.format('YYYY/MM/DD HH:mm:00')},
                                    });
                                } else {
                                    //La peticion ajax
                                    $.ajax({
                                        dataType: 'json',
                                        type: "POST",
                                        url: '/dropreceso',
                                        data: {idempleadoreceso: event.id, idempeleado: event.resources[0], start: event.start.format('YYYY/MM/DD HH:mm:00'), end: event.end.format('YYYY/MM/DD HH:mm:00')},
                                    });
                                }

                            } else {
                                revertFunc();
                            }

                            break;
                            
                            case'agendaWeek':
                                
                                if (event.className[0] == "visita_enservicio" || event.className[0] == "receso" || event.className[0] == "visita_terminado") {
                                    revertFunc();
                                    return;
                                }

                                if (event.className[0] != 'receso') {
                                    //La peticion ajax
                                    $.ajax({
                                        dataType: 'json',
                                        type: "POST",
                                        url: '/dropevent',
                                        data: {idvisita: event.id, idempeleado: event.resources[0], start: event.start.format('YYYY/MM/DD HH:mm:00'), end: event.end.format('YYYY/MM/DD HH:mm:00')},
                                    });
                                } else {
                                    //La peticion ajax
                                    $.ajax({
                                        dataType: 'json',
                                        type: "POST",
                                        url: '/dropreceso',
                                        data: {idempleadoreceso: event.id, idempeleado: event.resources[0], start: event.start.format('YYYY/MM/DD HH:mm:00'), end: event.end.format('YYYY/MM/DD HH:mm:00')},
                                    });
                                }
                                
                                break;
                                 
                            }
                            

                 },
                eventClick: function( event, jsEvent, view ) { 

                    var is_visita = true;
                    var className = event.className[0];
                    var type_array = className.split('_'); var type = type_array[0];
                    
                    //SI SE TRATA DE UN PEDICURISTA NO LO DEJAM
                    var deny_roles = [3,5,6];
                    if(deny_roles.indexOf(settings.idrol ) >= 0){
                         return false;
                    }
                    
                    if(type != 'visita'){
                        is_visita = false;
                    }
                    
                    if(is_visita){
                        
                        
                        
                        var status = type_array[1];
                        $.each(cssClassMap,function(index,element){
                            if('visita_'+status==element){
                                status = index;
                            }
                        });
                        
                        
                        var is_editable = true;
                        var now = moment();
                        var start = moment(event.start);
                        var diff = now.diff(start,'minutes');
          
                        if(diff > 20 && $.inArray(status,['en servicio', 'terminado']) < 0){
                            is_editable = false;
                        }
                        
                        if(is_editable){
                            
                            $('body').addClass('loading');
                            
                            
                            
                            var $modalLauncher = $('<a>'); $modalLauncher.attr('data','modal'); $modalLauncher.attr('data-width',800); $modalLauncher.attr('data-title',event.title);
                            $modalLauncher.unbind();
                            var data_content = $modalLauncher.attr('data-content');
                            data_content = '/editarevento?html=true';
                            data_content += '&idvisita='+ event.id;
                             
                             $modalLauncher.attr('data-content',data_content);
                             $modalLauncher.modal();
                             $modalLauncher.trigger('click');
                             $modalLauncher.unbind();
                             
                             $modalLauncher.on('loading.tools.modal', function(modal){
                                 
                                var $modal = this ;
                                
                                /*
                                 * 
                                 *LOS EVENTOS PARA REPROGRAMAR LA FECHA
                                 */

                                //dateContainer.find('input[name=visita_siguiente_fecha]').unbind();
                                var pickdate = modal.find('input[name=visita_reprogramar_fecha]').pickadate({
                                    monthsFull: ['enero', 'febrero', 'marzo', 'abril', 'mayo', 'junio', 'julio', 'agosto', 'septiembre', 'octubre', 'noviembre', 'diciembre'],
                                    monthsShort: ['ene', 'feb', 'mar', 'abr', 'may', 'jun', 'jul', 'ago', 'sep', 'oct', 'nov', 'dic'],
                                    weekdaysFull: ['domingo', 'lunes', 'martes', 'miércoles', 'jueves', 'viernes', 'sábado'],
                                    weekdaysShort: ['dom', 'lun', 'mar', 'mié', 'jue', 'vie', 'sáb'],
                                    today: 'hoy',
                                    clear: 'borrar',
                                    close: 'cerrar',
                                    firstDay: 1,
                                    format: 'd !de mmmm !de yyyy',
                                    formatSubmit: 'yyyy/mm/dd',
                                    selectYears: true,
                                    selectMonths: true,
                                    min: new Date(),
                                    selectYears: 25,
                                });

                                //dateContainer.find('input[name=visita_siguiente_hora]').unbind();
                                modal.find('input[name=visita_reprogramar_hora]').timepicker({
                                    minuteStep: 1,
                                    template: 'modal',
                                    showSeconds: false,
                                    showMeridian: false,
                                    defaultTime: false
                                });
                                
                                

                                    var $modalHeader = this.$modalHeader;
                                    $modalHeader.addClass('modal_header_action');
                                    var atrasAction = this.createActionButton('Atras');
                                    atrasAction.css('background','#e0e3e5');
                                    atrasAction.css('color','black');
                                    
                                    atrasAction.prop('disabled',true);
                                    atrasAction.css('cursor','auto');
                                    
                                    
                                    var guardarAction = this.createActionButton('Guardar');
                                    
                                    var pagarAction = this.createActionButton('Pagar');
                                    pagarAction.css('background','#4caf50');
                                    
                                    var status_pago = modal.find('div#visita_estatuspago').attr('value');
                                    var visita_tipo = modal.find('input[name=visita_tipo]:checked').val();
                                    
                                 var status = modal.find('select[name=visita_status]').val();
                                 //EL EVENTO DEL SELECT DE ESTATUS
                                 var reprogramar = false;
                                 modal.find('select[name=visita_status]').on('change',function(){
                                     var value = $(this).val();
                                     
                                     if(value != 'reprogramda'){
                                          reprogramar = false;
                                         modal.find('#reprogramar_container').slideUp();
                                     }else{
                                        reprogramar = true;
                                        modal.find('#reprogramar_container').slideDown();
                                     }
                       
                                 });

                                    if(visita_tipo == 'servicio' && (status=='en servicio' || status=='terminado')){
                                         modal.find('input[name=visita_tipo]').prop('disabled',true);
                                    }
                                    
                                    if(status_pago == 'pagada' || status_pago == 'cancelada'){
                                        pagarAction.prop('disabled',true);
                                        guardarAction.prop('disabled',true);
                                        modal.find('input,select,button').prop('disabled',true);
                                        modal.find('table#visita_detalles th').eq(2).remove();
                                        modal.find('table#visita_detalles tbody tr').filter(function(){
                                            $(this).find('td').eq(2).remove();
                                        });
                                        modal.find('table#visita_detalles tfoot tr').find('td').eq(0).attr('colspan',2);
                                        modal.find('span.token-input-delete-token').remove();
                                        
                                    }
                           
                                   if(status == 'cancelo' || status == 'no se presento' || status == 'reprogramda'){
                                       
                                        pagarAction.prop('disabled',true);
                                        guardarAction.prop('disabled',true);
                                        modal.find('input,select,button').prop('disabled',true);
                                        modal.find('table#visita_detalles th').eq(2).remove();
                                        modal.find('table#visita_detalles tbody tr').filter(function(){
                                            $(this).find('td').eq(2).remove();
                                        });
                                        modal.find('table#visita_detalles tfoot tr').find('td').eq(0).attr('colspan',2);
                                        modal.find('span.token-input-delete-token').remove();
                                    }
                                    
                                    if(status == 'en servicio' || status == 'terminado'){
                                        modal.find('span.token-input-delete-token').remove();
                                    }

                                    /*
                                     * Evento pagar
                                     */
                                    pagarAction.prop('disabled',true);
                                    var modalEventContainer = modal.find('#modal_event_container');
                                    var status =  modal.find('select[name=visita_status]').val();
                                    var status_pay = modal.find('#visita_estatuspago').attr('value');

                                    if(status == 'terminado' && status_pay == 'no pagada'){
                                        modal.find('span.token-input-delete-token').hide();
                                        modalEventContainer.find('input:not(input[name=visita_tipo]),button,select:not(select[name=visita_status])').prop('disabled',false);
                                        modalEventContainer.find('input:not(input[name=visita_tipo]),button,select:not(select[name=visita_status])').css('cursor','auto');
                                        pagarAction.prop('disabled',false);
                                    }
                                     
                                    modal.find('select[name=visita_status]').on('change',function(){
                                        var status =  modal.find('select[name=visita_status]').val();
                                        if(status == 'terminado' && status_pay == 'no pagada'){
                                            modal.find('span.token-input-delete-token').hide();
                                            modalEventContainer.find('input:not(input[name=visita_tipo]),button,select:not(select[name=visita_status])').prop('disabled',false);
                                            modalEventContainer.find('input,button,select:not(select[name=visita_status])').css('cursor','auto');
                                            pagarAction.prop('disabled',false);
                                        }
                                        else{
                                             modal.find('span.token-input-delete-token').show();
                                             modalEventContainer.find('input,button,select:not(select[name=visita_status])').css('cursor','auto');
                                             modalEventContainer.find('input:not(input[name=visita_tipo]),button,select').prop('disabled',false);
                                             pagarAction.prop('disabled',true);
                                        }
                                    });
                                    
                                     var nextDateContainer = modal.find('#pay_nextdate_container');
                                     var dateContainer = modal.find('#pay_date_container');
                                     var payDetailsContainer = modal.find('#pay_details_container');
                                     var payMethodContainer = modal.find('#pay_method_container');
                                     
                                     pagarAction.one('click', $.proxy(function(){
                                        
                                        eventoProximaCita();
                                     }));
                                     
                                   /*
                                    * LA VENTANA Principal
                                    */
                                     var eventoPrincipal = function(next){
                                         
                                         //El evento atras de la venta de pagar
                                        atrasAction.unbind();
                                        atrasAction.prop('disabled',true);
                                        atrasAction.css('cursor','auto');
                                        
                                        if(typeof next != 'undefined'){
                                            pagarAction.text('Pagar');
                                            pagarAction.unbind();
                                            pagarAction.prop('disabled',false);
                                            pagarAction.css('cursor','pointer');
                                            pagarAction.on('click', $.proxy(function(){
                                                modalEventContainer.children(':not(:last-child)').hide();
                                                eventoPagar();
                                            }));
                                        }else{
                                            
                                            pagarAction.text('Pagar');
                                            pagarAction.unbind();
                                            pagarAction.prop('disabled',false);
                                            pagarAction.css('cursor','pointer');
                                            pagarAction.on('click', $.proxy(function(){
                                                eventoProximaCita();
                                            }));
                                        }
                                     }
                                     
                                     
                                   /*
                                    * LA VENTANA DE PAGAR
                                    */
                                     var eventoPagar = function(){
                                         
                                        //El evento atras de la venta de pagar
                                        atrasAction.unbind();
                                        atrasAction.prop('disabled',false);
                                        guardarAction.prop('disabled',true);
                                        guardarAction.prop('disabled','not-allowed');
                                        atrasAction.css('cursor','pointer');
                                        atrasAction.on('click', $.proxy(function(){
                                            payDetailsContainer.hide();
                                            payMethodContainer.hide();
                                            eventoProximaCita();
                                        }));
                                        
                          
                                        //Calculamos el total
                                        var total = 0;
                                        $.each(payDetailsContainer.find('table#pay_details tbody tr'),function(){
                                            var subtotal = accounting.unformat($(this).find('td').last().text());
                                            total += subtotal;
                                        });
                                        
                                         var iva = (total * 0.16) ;
                                        var subtotal = total - iva;

                                        payDetailsContainer.find('input[name=visita_subtotal]').val(subtotal);
                                        payDetailsContainer.find('#subtotal').text(accounting.formatMoney(subtotal));

                                        payDetailsContainer.find('input[name=visita_iva]').val(iva);
                                        payDetailsContainer.find('#iva').text(accounting.formatMoney(iva));
                                        
                                        payDetailsContainer.find('input[name=visita_total]').val(total);
                                        payDetailsContainer.find('#total').text(accounting.formatMoney(total));
                                        
                                        var iva = (total * 0.16) ;
                                        var subtotal = total - iva;

                                        payDetailsContainer.find('input[name=visita_subtotal]').val(subtotal);
                                        payDetailsContainer.find('#subtotal').text(accounting.formatMoney(subtotal));

                                        payDetailsContainer.find('input[name=visita_iva]').val(iva);
                                        payDetailsContainer.find('#iva').text(accounting.formatMoney(iva));
                                        
                                        
                                        payMethodContainer.find('#addMethodPay').unbind();
                                        payMethodContainer.find('#addMethodPay').on('click',newMethodPay);
                                        payMethodContainer.find('input:not([name=recibi])').val(total);
                                        payDetailsContainer.find('input[name*=folio]').on('blur',valdarFolio);
                                        payDetailsContainer.slideDown();
                                        payMethodContainer.slideDown();
                                        
                                        //CALCULADORA
                                        
                                        payMethodContainer.find('input[name=recibi]').on('keyup',function(){
                                            var recibi = parseFloat($(this).val());
                                            var total_efectivo = 0;
                                            payMethodContainer.find('select[name*=visitapago_tipo]').filter(function(){
                                                if($(this).val() == 'efectivo'){
                                                    var str = $(this).attr('name');
                                                    str = str.split("visitapago_tipo[");
                                                    str = str[1].split("][type]");
                                                    var key = str[0];
                                                    
                                                    total_efectivo+= parseFloat(payMethodContainer.find('input[name="visitapago_tipo['+key+'][cantidad]"]').val());
                                                }
                                            });
                                            
                                            var cambio = recibi - total_efectivo;

                                            payMethodContainer.find('span#visita_cambio b').text(accounting.formatMoney(cambio));
                                           
                                        });
                                        
                                        
                                        //DESCUENTO
                                        payDetailsContainer.find('input[name=visita_descuento]').on('keyup',function(){
                                            var descuento = $(this).val();
                                            var nuevo_total = total - descuento;
                                            
                                            payDetailsContainer.find('input[name=visita_total]').val(nuevo_total);
                                            payDetailsContainer.find('#total').text(accounting.formatMoney(nuevo_total));
                                             payMethodContainer.find('input[name="visitapago_tipo[0][cantidad]"]').val(nuevo_total);
                                            
                                        });
                                        
                                        //dateContainer.slideUp();
                                        pagarAction.text('Pagar');
                                        pagarAction.prop('disabled',false);
                                        pagarAction.unbind();
                                       
                                        pagarAction.on('click', $.proxy(function(){
                                            pagarAction.attr('disabled',true);
                                            $('body').addClass('loading');
                                            setTimeout(function(){
                                                if(typeof settings.folio_valido != 'undefined'){
                                                    if(settings.folio_valido){
                                                        pay($modal);
                                                    }
                                                }else{
                                                    pay($modal);
                                                }
                                                $('body').removeClass('loading');
                                            },1000);
                                              pagarAction.attr('disabled',false);
                                         }));
                                     }
                                     
                                    /*
                                     *  LA VENTANA DE PROXIMA CITA Y PAGO ANTICIPADO
                                     */ 
                                    
                                    var eventoProximaCita = function(){
                                        
                                        //¿Anticipado?
                                        var anticipado = modalEventContainer.find('input[name=anticipado]').val();
                                        if(anticipado == 'true'){
                                            dateContainer.find('input[name=visita_pagoanticipado]').prop('disabled',true);
                                        }else{
                                            dateContainer.find('input[name=visita_pagoanticipado]').prop('disabled',false);
                                        }
                                        
                                        dateContainer.find('fieldset').find('#pay_date_anticipado_selector').find('input[name=visita_pagoanticipado]').unbind();
                                        dateContainer.find('fieldset').find('#pay_date_anticipado_selector').find('input[name=visita_pagoanticipado]').on('change',function(){
                                            var anticipado = dateContainer.find('fieldset').find('#pay_date_anticipado_selector').find('input[name=visita_pagoanticipado]:checked').val();
                                            if(anticipado == 'si'){
                                                dateContainer.find('fieldset').find('#pay_date_anticipado_input').slideDown();
                                                pagarAction.prop('disabled',false);

                                            }else{
                                                dateContainer.find('fieldset').find('#pay_date_anticipado_input').slideUp();
                                                pagarAction.prop('disabled',false);
                                            }

//       
                                        });
                                        
                                        //El evento atras de la venta de pagar
                                        atrasAction.unbind();
                                        atrasAction.prop('disabled',false);
                                        atrasAction.css('cursor','pointer');
                                        atrasAction.on('click', $.proxy(function(){
                    
                                            nextDateContainer.hide();
                                            dateContainer.hide();
                                            modalEventContainer.children(':not(:last-child)').slideDown();
                                            eventoPrincipal();
                                        }));
                                        
                                        dateContainer.find('#addAnticipado').unbind();
                                        dateContainer.find('#addAnticipado').prop('disabled',false);
                                        dateContainer.find('#addAnticipado').css('cursor','pointer');
                                        dateContainer.find('#addAnticipado').on('click', $.proxy(function(){
                    
                                            nextDateContainer.hide();
                                            dateContainer.hide();
                                            modalEventContainer.children(':not(:last-child)').slideDown();
                                            eventoPrincipal('pago');
                                        }));
                                        
                                        var next_date = nextDateContainer.find('input[name=visita_siguiente]:checked').val();
                                         
                                         
                                         //RENOMBRAMOS BOTON
                                         pagarAction.text('Continuar');
                                         pagarAction.unbind();
                                         
                                         modalEventContainer.children(':not(:last-child)').hide();
                                         nextDateContainer.slideDown();
                                         
                                         //SI NO SE HA AGENDADO UNA CITA PREVIAMENTE
                                         if(typeof next_date == 'undefined' || next_date == 'no'){
                                             
                                            pagarAction.prop('disabled',false);
                                            pagarAction.unbind();
                                            pagarAction.prop('disabled',false);
                                            pagarAction.css('cursor','pointer');
                                            pagarAction.on('click', $.proxy(function(){
                                                dateContainer.hide();
                                                nextDateContainer.hide();
                                                eventoPagar();
                                            }));
                                             
                                            //El evento para generar una nueva cita
                                            nextDateContainer.find('input[name=visita_siguiente]').on('change',function(){
                                                next_date = nextDateContainer.find('input[name=visita_siguiente]:checked').val();
                                                if(next_date == 'si'){
                                                    pagarAction.prop('disabled',true);
                                                    dateContainer.find('[btn-action=submit_visita_siguiente]').unbind();
                                                    dateContainer.slideDown();
                                                    
                                                    //dateContainer.find('input[name=visita_siguiente_fecha]').unbind();
                                                    var pickdate = dateContainer.find('input[name=visita_siguiente_fecha]').pickadate({
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
                                                       min: new Date(),
                                                       selectYears: 25,
                                                   });
                                                   
                                                   //dateContainer.find('input[name=visita_siguiente_hora]').unbind();
                                                   dateContainer.find('input[name=visita_siguiente_hora]').timepicker({
                                                        minuteStep: 1,
                                                        template: 'modal',

                                                        showSeconds: false,
                                                        showMeridian: false,
                                                        defaultTime: false
                                                   });
                                                   /////
                                                   
                                                   dateContainer.find('[btn-action=submit_visita_siguiente]').unbind();
                                                   dateContainer.find('[btn-action=submit_visita_siguiente]').on('click',function(){

                                                       var empty = false;
                                                       var avaliable = true;

                                                       dateContainer.find('span.error').remove();
                                                       dateContainer.find('[required]').removeClass('input-error');

                                                       $.each(dateContainer.find('input:visible'),function(){
                                                           if($(this).val() == ""){
                                                               empty = true;
                                                               $(this).addClass('input-error');
                                                               var $span = $(this).siblings('span.req');
                                                               $span.after('<span class="error"> campo obligatorio</span>');

                                                           } 
                                                       });

                                                       if(!empty){

                                                           var form_data = new FormData();

                                                           form_data.append('idpaciente',modal.find('input[name=idpaciente]').val());
                                                           form_data.append('idclinica',modal.find('input[name=idclinica]').val());
                                                           form_data.append('idempleado',modal.find('select[name=visita_siguiente_empleado]').val());

                                                           var fechainicio = modal.find('input[name=visita_siguiente_fecha_submit]').val() + ' ' + modal.find('input[name=visita_siguiente_hora]').val();
                                                           form_data.append('visita_fechainicio',fechainicio);

                                                           fechainicio = moment(fechainicio,"YYYY-MM-DD HH:mm");

                                                           var n = moment();
                                                           var d = fechainicio.diff(n,'minutes');

                                                           if(d < 0){
                                                               alert('No es posible crear una cita en una fecha/hora anterior a la actual!');
                                                               return;
                                                           }

                                                           var fechafin = fechainicio.add(30, 'm'); //dureacion por default 30 minutos
                                                           fechafin = moment(fechafin.format('YYYY-MM-DD HH:mm'));
                                                           form_data.append('visita_fechafin',fechafin.format('YYYY-MM-DD HH:mm'));

                                                               //Hacemos nuestra peticion ajax (quickaddvisita)
                                                               $.ajax({
                                                                   url:'/quickaddvisita',
                                                                   method:'POST',
                                                                   dataType:'json',
                                                                   data:form_data,
                                                                   processData: false,
                                                                   contentType: false,
                                                                   success: function(data){
                                                                       if(!data.result){
                                                                            alert(data.msg);
                                                                       }else{
                                                                            alert('Cita agendada con exito!');
                                                                            nextDateContainer.find('input,button,select').css('cursor','not-allowed');
                                                                            nextDateContainer.find('input,button,select').prop('disabled',true);
                                                                            dateContainer.find('fieldset').find('div').eq(0).remove();dateContainer.find('fieldset').find('div').eq(1).remove();
                                                                            dateContainer.find('fieldset').prepend('<div class="units-row" style="margin-bottom: 0px;"><div class="unit-100"><b>Pedicurista: </b>'+data.empleado+'</div>');
                                                                            dateContainer.find('fieldset').prepend('<div class="units-row" style="margin-bottom: 0px;"><div class="unit-100"><b>Fecha y hora: </b>'+data.fecha+'</div>');
                                                                            dateContainer.find('fieldset').find('#pay_date_anticipado_selector').slideDown();
                                                                            //El evento de pago anticipado
                                                                            dateContainer.find('fieldset').find('#pay_date_anticipado_selector').find('input[name=visita_pagoanticipado]').on('change',function(){
                                                                                var anticipado = dateContainer.find('fieldset').find('#pay_date_anticipado_selector').find('input[name=visita_pagoanticipado]:checked').val();
                                                                                if(anticipado == 'si'){
                                                                                    dateContainer.find('fieldset').find('#pay_date_anticipado_input').slideDown();
                                                                                    pagarAction.prop('disabled',false);

                                                                                }else{
                                                                                    dateContainer.find('fieldset').find('#pay_date_anticipado_input').slideUp();
                                                                                    pagarAction.prop('disabled',false);
                                                                                }
                                                                                
//       
                                                                            });
                                                                            
                                                                            pagarAction.unbind();
                                                                            pagarAction.on('click', $.proxy(function(){
                                                                                
                                                                                payDetailsContainer.find('table#pay_details tbody').find('.anticipado').remove();
                                                                                var anticipado = dateContainer.find('fieldset').find('#pay_date_anticipado_selector').find('input[name=visita_pagoanticipado]:checked').val();
 
                                                                                if(anticipado == 'si'){
                                                                                    var itemCount = payDetailsContainer.find('tbody tr').length;
                                                                                    var selected = dateContainer.find('select[name=pay_date_anticipado_servicio] option:selected');
                                                                                    
                                                                                    var id = selected.val();
                                                                                    var item = selected.attr('data-name');
                                                                                    var price = selected.attr('data-price');
                                                                                    var subtotal = parseInt(price);
                                                                                    var inputs = $('<input type="hidden" name="vistadetallepay['+itemCount+'][id]" value="'+id+'"><input type="hidden" name="vistadetallepay['+itemCount+'][type]" value="servicio"><input type="hidden" name="vistadetallepay['+itemCount+'][price]" value="'+price+'"><input type="hidden" name="vistadetallepay['+itemCount+'][cantidad]" value="1"><input type="hidden" name="vistadetallepay['+itemCount+'][subtotal]" value="'+subtotal+'">');
                                                                                    
                                                                                    //Nuestra row
                                                                                    var tr = $('<tr>').addClass('anticipado');
                                                                                     tr.append(inputs);
                                                                                     tr.append('<td>1</td>');
                                                                                     tr.append('<td>'+item+'</td>');
                                                                                     if(payDetailsContainer.find('th').length == 4){
                                                                                        tr.append('<td></td>');
                                                                                     }
                                                                                     tr.append('<td>'+accounting.formatMoney(subtotal)+'</td>');
                                                                                    
                                                                                    payDetailsContainer.find('table#pay_details tbody').append(tr);
                                                                                                                                                                          
                                                                                     
                                                                                }
                                                                                
                                                                                dateContainer.hide();
                                                                                nextDateContainer.hide();
                                                                                eventoPagar();
                                                                            }));
                                                                       }
                                                                   }
                                                               });
                                                       }
                                                   });
                                                    
                                                }else{
                                                    dateContainer.slideUp();
                                                    pagarAction.unbind();
                                                    pagarAction.prop('disabled',false);
                                                    pagarAction.css('cursor','pointer');
                                                    pagarAction.on('click', $.proxy(function(){
                                                        dateContainer.hide();
                                                        nextDateContainer.hide();
                                                        eventoPagar();
                                                    }));
                                                }
                                            });
                                             
                                             
                                            
                                         }else{
                                            
                                            nextDateContainer.find('input[name=visita_siguiente]').css('cursor','not-allowed');
                                            nextDateContainer.find('input[name=visita_siguiente]').prop('disabled',true);
                                            dateContainer.slideDown();
                                            dateContainer.find('div#next_date_form').hide();
                                            dateContainer.find('div#next_date_form').next().hide();
                                            pagarAction.unbind();
                                            pagarAction.prop('disabled',false);
                                            pagarAction.css('cursor','pointer');
                                            pagarAction.on('click', $.proxy(function(){
                                                dateContainer.hide();
                                                nextDateContainer.hide();
                                                eventoPagar();
                                            }));
                                            
                                         }

                                    }
                                     
                                     
                                     
                                     
                                     var event1 = function(){
                                         
                                         /*
                                          *  Evento atras
                                          */
                                        atrasAction.prop('disabled',false);
                                        atrasAction.css('cursor','pointer');

                                        atrasAction.on('click', $.proxy(function(){
                                                nextDateContainer.slideUp();
                                                modalEventContainer.children(':not(:last-child)').show();
                                                pagarAction.text('Pagar');
                                                pagarAction.prop('disabled',false);
                                                guardarAction.prop('disabled',false);
                                                payDetailsContainer.hide();
                                                payMethodContainer.hide();
                                                nextDateContainer.hide();
                                                dateContainer.hide();
                                                pagarAction.unbind();
                                                nextDateContainer.find('input[name=visita_siguiente]').prop('checked',false);
                                                pagarAction.on('click', $.proxy(function(){
                                                    event1();
                                                }));
                                            
                                          }));
                                         
                                         
                                         /*
                                          * ESTA ES LA PANTALLA DONDE ELEGIMOS SI DESEAMOS UNA NUVA CITA
                                          */
                                         
                                         
                                         var next_date = nextDateContainer.find('input[name=visita_siguiente]:checked').val();
                                         
                                         
                                         //RENOMBRAMOS BOTON
                                         pagarAction.text('Continuar');
                                         modalEventContainer.children(':not(:last-child)').hide();
                                         nextDateContainer.slideDown();
                                 
                                         //SI NO SE HA AGENDADO UNA CITA PREVIAMENTE
                                         if(typeof next_date == 'undefined'){
                                         
                                            //HABILITAMOS INPUTS
                                            nextDateContainer.find('input,button,select').css('cursor','auto');
                                            nextDateContainer.find('input,button,select').prop('disabled',false);
                                            dateContainer.find('input,button,select').css('cursor','auto');
                                            dateContainer.find('input,button,select').prop('disabled',false);
                                            payMethodContainer.find('input,button,select').css('cursor','auto');
                                            payMethodContainer.find('input,button,select').prop('disabled',false);
                                            payMethodContainer.find('input').numeric();
                                            payDetailsContainer.find('input').prop('disabled',false);
                                            payDetailsContainer.find('input').css('cursor','auto');
                                            
                                            //Eventos method pay
                                            payMethodContainer.find('#addMethodPay').on('click',newMethodPay);

                                            pagarAction.prop('disabled',true);
                                            guardarAction.prop('disabled',true);
                                            //modalEventContainer.children(':not(:last-child)').hide();
                                            //nextDateContainer.slideDown();
                                         
                                            //El evento para generar una nueva cita
                                            nextDateContainer.find('input[name=visita_siguiente]').on('change',function(){
                                                var is_next_date = nextDateContainer.find('input[name=visita_siguiente]:checked').val();
                                                if(is_next_date == 'si'){
                                                    pagarAction.prop('disabled',true);
                                                   dateContainer.find('[btn-action=submit_visita_siguiente]').unbind();
                                                   dateContainer.slideDown();
                                                   /*Inicializamos nuestros calendarios*/
                                                    var pickdate = dateContainer.find('input[name=visita_siguiente_fecha]').pickadate({
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
                                                       min: new Date(),
                                                       selectYears: 25,
                                                   });

                                                   /*El componente de hora*/
                                                   dateContainer.find('input[name=visita_siguiente_hora]').timepicker({
                                                               minuteStep: 1,
                                                               template: 'modal',

                                                               showSeconds: false,
                                                               showMeridian: false,
                                                               defaultTime: false
                                                   });
                                                   //El evento submit

                                                   dateContainer.find('[btn-action=submit_visita_siguiente]').on('click',function(){

                                                       var empty = false;
                                                       var avaliable = true;

                                                       dateContainer.find('span.error').remove();
                                                       dateContainer.find('[required]').removeClass('input-error');

                                                       $.each(dateContainer.find('input:visible'),function(){
                                                           if($(this).val() == ""){
                                                               empty = true;
                                                               $(this).addClass('input-error');
                                                               var $span = $(this).siblings('span.req');
                                                               $span.after('<span class="error"> campo obligatorio</span>');

                                                           } 
                                                       });

                                                       if(!empty){
                                                           
                                                           
                                                           //SI SE ESTA REPROGRAMANDO REVISAMOS DISPONIBILIDAD
                                                           if(reprogramar){
                                                               
                                                           }

                                                           var form_data = new FormData();

                                                           form_data.append('idpaciente',modal.find('input[name=idpaciente]').val());
                                                           form_data.append('idclinica',modal.find('input[name=idclinica]').val());
                                                           form_data.append('idempleado',modal.find('select[name=visita_siguiente_empleado]').val());

                                                           var fechainicio = modal.find('input[name=visita_siguiente_fecha_submit]').val() + ' ' + modal.find('input[name=visita_siguiente_hora]').val();
                                                           form_data.append('visita_fechainicio',fechainicio);

                                                           fechainicio = moment(fechainicio,"YYYY-MM-DD HH:mm");

                                                           var n = moment();
                                                           var d = fechainicio.diff(n,'minutes');

                                                           if(d < 0){
                                                               alert('No es posible crear una cita en una fecha/hora anterior a la actual!');
                                                               return;
                                                           }

                                                           var fechafin = fechainicio.add(30, 'm'); //dureacion por default 30 minutos
                                                           fechafin = moment(fechafin.format('YYYY-MM-DD HH:mm'));
                                                           form_data.append('visita_fechafin',fechafin.format('YYYY-MM-DD HH:mm'));

                                                               //Hacemos nuestra peticion ajax (quickaddvisita)
                                                               $.ajax({
                                                                   url:'/quickaddvisita',
                                                                   method:'POST',
                                                                   dataType:'json',
                                                                   data:form_data,
                                                                   processData: false,
                                                                   contentType: false,
                                                                   success: function(data){
                                                                       if(!data.result){
                                                                            alert(data.msg);
                                                                       }else{
                                                                            alert('Cita agendada con exito!');
                                                                            nextDateContainer.find('input,button,select').css('cursor','not-allowed');
                                                                            nextDateContainer.find('input,button,select').prop('disabled',true);
                                                                            dateContainer.find('fieldset').find('div').eq(0).remove();dateContainer.find('fieldset').find('div').eq(1).remove();
                                                                            dateContainer.find('fieldset').prepend('<div class="units-row" style="margin-bottom: 0px;"><div class="unit-100"><b>Pedicurista: </b>'+data.empleado+'</div>');
                                                                            dateContainer.find('fieldset').prepend('<div class="units-row" style="margin-bottom: 0px;"><div class="unit-100"><b>Fecha y hora: </b>'+data.fecha+'</div>');
                                                                            dateContainer.find('fieldset').find('#pay_date_anticipado_selector').slideDown();
                                                                            //El evento de pago anticipado
                                                                            dateContainer.find('fieldset').find('#pay_date_anticipado_selector').find('input[name=visita_pagoanticipado]').on('change',function(){
                                                                                var anticipado = dateContainer.find('fieldset').find('#pay_date_anticipado_selector').find('input[name=visita_pagoanticipado]:checked').val();
                                                                                if(anticipado == 'si'){
                                                                                    dateContainer.find('fieldset').find('#pay_date_anticipado_input').slideDown();
                                                                                    pagarAction.prop('disabled',false);

                                                                                }else{
                                                                                    dateContainer.find('fieldset').find('#pay_date_anticipado_input').slideUp();
                                                                                    pagarAction.prop('disabled',false);
                                                                                }
                                                                                pagarAction.unbind();
                                                                                pagarAction.on('click', $.proxy(function(){

                                                                                  pagarAction.text('Pagar');
                                                                                  pagarAction.prop('disabled',true);
                                                                                  dateContainer.hide();
                                                                                  nextDateContainer.hide();
                                                                                  payDetailsContainer.slideDown();
                                                                                  if(anticipado == 'si'){
                                                                                        pagarAction.text('Pagar');
                                                                                        pagarAction.unbind();
                                                                                        var itemCount = payDetailsContainer.find('tbody tr').length;
                                                                                        var selected = dateContainer.find('select[name=pay_date_anticipado_servicio] option:selected');

                                                                                        //                                                                                 
                                                                                        var id = selected.val();
                                                                                        var item = selected.attr('data-name');
                                                                                        var price = selected.attr('data-price');
                                                                                        var subtotal = parseInt(price);
                                                                                        var inputs = $('<input type="hidden" name="vistadetallepay['+itemCount+'][id]" value="'+id+'"><input type="hidden" name="vistadetallepay['+itemCount+'][type]" value="servicio"><input type="hidden" name="vistadetallepay['+itemCount+'][price]" value="'+price+'"><input type="hidden" name="vistadetallepay['+itemCount+'][cantidad]" value="1"><input type="hidden" name="vistadetallepay['+itemCount+'][subtotal]" value="'+subtotal+'">');

                                                                                       //Nuestra row
                                                                                       var tr = $('<tr>');
                                                                                       tr.append(inputs);
                                                                                       tr.append('<td>1</td>');
                                                                                       tr.append('<td>'+item+'</td>');
                                                                                       if(payDetailsContainer.find('th').length == 4){
                                                                                           tr.append('<td></td>');
                                                                                       }
                                                                                       tr.append('<td>'+accounting.formatMoney(subtotal)+'</td>');

                                                                                       payDetailsContainer.find('table#pay_details tbody').append(tr);

                                                                                       //Calculamos el total
                                                                                       var total = 0;
                                                                                       $.each(payDetailsContainer.find('table#pay_details tbody tr'),function(){
                                                                                           var subtotal = accounting.unformat($(this).find('td').last().text());

                                                                                           total += subtotal;
                                                                                       });
                                                                                       payDetailsContainer.find('input[name=visita_total]').val(total);
                                                                                       payDetailsContainer.find('#total').text(accounting.formatMoney(total));
                                                                                       
                                                                                       var iva = (total * 0.16) ;
                                                                                        var subtotal = total - iva;

                                                                                        payDetailsContainer.find('input[name=visita_subtotal]').val(subtotal);
                                                                                        payDetailsContainer.find('#subtotal').text(accounting.formatMoney(subtotal));

                                                                                        payDetailsContainer.find('input[name=visita_iva]').val(iva);
                                                                                        payDetailsContainer.find('#iva').text(accounting.formatMoney(iva));

                                                                                       payMethodContainer.find('input').val(total);
                                                                                       payMethodContainer.slideDown();

                                                                                       pagarAction.on('click', $.proxy(function(){

                                                                                           pay($modal);

                                                                                       }));

                                                                                  }
                                                                                  else{



                                                                                      pagarAction.text('Pagar');
                                                                                      payDetailsContainer.slideDown();


                                                                                      payDetailsContainer.find('input[name*=folio]').on('blur',valdarFolio);

                                                                                      //Calculamos el total
                                                                                       var total = 0;
                                                                                       $.each(payDetailsContainer.find('table#pay_details tbody tr'),function(){
                                                                                           var subtotal = accounting.unformat($(this).find('td').last().text());

                                                                                           total += subtotal;
                                                                                       });
                                                                                       payDetailsContainer.find('input[name=visita_total]').val(total);
                                                                                       payDetailsContainer.find('#total').text(accounting.formatMoney(total));

                                                                                       var iva = (total * 0.16) ;
                                                                                        var subtotal = total - iva;

                                                                                        payDetailsContainer.find('input[name=visita_subtotal]').val(subtotal);
                                                                                        payDetailsContainer.find('#subtotal').text(accounting.formatMoney(subtotal));

                                                                                        payDetailsContainer.find('input[name=visita_iva]').val(iva);
                                                                                        payDetailsContainer.find('#iva').text(accounting.formatMoney(iva));

                                                                                       payMethodContainer.find('input').val(total);
                                                                                       payMethodContainer.slideDown();

                                                                                  }
                                                                                  pagarAction.unbind();
                                                                                  pagarAction.prop('disabled',false);
                                                                                  pagarAction.on('click', $.proxy(function(){

                                                                                          pay($modal);


                                                                                  }));

                                                                                }));
                                                                            });
                                                                       }
                                                                   }
                                                               });
                                                       }
                                                   });
                                                }
                                                else{

                                                  

                                                }
                                            });

                                        }else{
                                            
                                            nextDateContainer.find('input[name=visita_siguiente]').css('cursor','not-allowed');
                                            nextDateContainer.find('input[name=visita_siguiente]').prop('disabled',true);
                                            dateContainer.slideDown();
                                            dateContainer.find('div#next_date_form').hide();
                                            dateContainer.find('div#next_date_form').next().hide();
                                            eventoPagar();
                  
                                            
                                        }

                                     };
                                     guardarAction.on('click', $.proxy(function(){
                                         
                                         
                                         
                                        
                                         
                                        var empty = false;
                                        modal.find('span.error').remove();
                                        modal.find('#span_paciente').siblings('ul').css('border','1px solid #999');
                                        if(modal.find('input[name=idpaciente]').val() == ""){
                                             empty = true;
                                             modal.find('#span_paciente').after('<span class="error"> campo obligatorio</span>');
                                             modal.find('#span_paciente').siblings('ul').css('border','1px solid red');                                 
                                         }
                                         //VALIDAMOS QUE SI SE ESTE REPOGRAMANDO 
                                        if(reprogramar){
                                            modal.find('input[name=visita_reprogramar_fecha],input[name=visita_reprogramar_hora]').filter(function(){

                                                if($(this).val() == ''){
                                                    empty = true;
                                                    $(this).after('<span class="error"> campo obligatorio</span>');
                                                }
                                            });
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
                                                url: '/editarevento',
                                                data: formData,
                                                async: false,
                                                processData: false,
                                                contentType: false,
                                                success: function (data) {
                                                    if(data.result){
                                                        initCalendar();
                                                        $modal.close();
                                                    }else{
                                                        alert(data.msg);
                                                    }
                                                }
                                            });
                                         }
                                        
                                    }));
                                    
                                    $('body').removeClass('loading');
                                    
                             });
                             
                               
                             
                        }else{
                            $('body').addClass('loading');
                            var $modalLauncher = $('<a>'); $modalLauncher.attr('data','modal'); $modalLauncher.attr('data-width',800); $modalLauncher.attr('data-title',event.title);
                            $modalLauncher.unbind();
                            var data_content = $modalLauncher.attr('data-content');
                            data_content = '/editarevento?html=true';
                            data_content += '&idvisita='+ event.id;
                             
                             $modalLauncher.attr('data-content',data_content);
                             $modalLauncher.modal();
                             $modalLauncher.trigger('click');
                             $modalLauncher.unbind();
//                             
                             $modalLauncher.on('loading.tools.modal', function(modal){
                                 
                                 $('body').removeClass('loading');
                                 modal.find('span.token-input-delete-token').remove();
                                 modal.find('select,input,button').prop('disabled',true);
                                 
                                 var $modal = this ;
                                 
                                 var $modalHeader = this.$modalHeader;
                                $modalHeader.addClass('modal_header_action');

                               
                              
                                 
                             });
                        }
                        
                    }
                    
                   
                },
                eventRender: function(event, element, view) {
                    if(view.name == 'agendaWeek'){
                        var height = $(element).innerHeight();

                    }
                }
        }
        }

        
    }
    
    
    
})( jQuery );