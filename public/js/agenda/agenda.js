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
                url: '/geteventosbyclinica/' + settings.idclinica,
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
                 timezone:'local',
                 now:date,
                 allDaySlot:false,
                 defaultView: 'resourceDay',
                 scrollTime: '08:00:00',
                 slotDuration: '00:15:00',
                 selectHelper: true,
                 selectable: true,
                 resources: '/getpedicuristasbyclinica/'+settings.idclinica,
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
                                                    url: '/nuevoevento',
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
                        }
                     }
                },
                eventDrop:function(event, delta, revertFunc, jsEvent, ui, view ) {
                     var viewName = view.name;
                     switch (viewName) {
                              case 'resourceDay':
                        {
                            var n = moment();
                            var d = event.start.diff(n,'minutes');
                            
                            if(!isOverlapping(event) && d > 0){
                                if(event.className[0]!='receso'){
                                    //La peticion ajax
                                    $.ajax({
                                        dataType: 'json', 
                                        type: "POST",
                                        url: '/dropevent',
                                        data: {idvisita:event.id,idempeleado:event.resources[0],start:event.start.format('YYYY/MM/DD HH:mm:00'),end:event.end.format('YYYY/MM/DD HH:mm:00')},

                                    });
                                }else{
                                     //La peticion ajax
                                    $.ajax({
                                        dataType: 'json', 
                                        type: "POST",
                                        url: '/dropreceso',
                                        data: {idempleadoreceso:event.id,idempeleado:event.resources[0],start:event.start.format('YYYY/MM/DD HH:mm:00'),end:event.end.format('YYYY/MM/DD HH:mm:00')},

                                    });
                                }
                            }else{
                                revertFunc();
                            }
                        }
                     }

                },
                eventClick: function( event, jsEvent, view ) { 
                    var is_visita = true;
                    var className = event.className[0];
                    var type_array = className.split('_'); var type = type_array[0];
                    
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
          
                        if(diff > 15 && $.inArray(status,['en servicio', 'terminado']) < 0){
                            is_editable = false;
                        }
                        
                        if(is_editable){
                            
                           
                            
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

                                    var $modalHeader = this.$modalHeader;
                                    $modalHeader.addClass('modal_header_action');
                                    this.createCancelButton('Cancelar');
                                    var guardarAction = this.createActionButton('Guardar');
                                    var pagarAction = this.createActionButton('Pagar');
                                    pagarAction.css('background','#4caf50');
                                    
                                    var status_pago = modal.find('div#visita_estatuspago').attr('value');
                                    var status = modal.find('select[name=visita_status]').val();
                                    if(status == 'terminado' && status_pago == 'pagada'){
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
                                    
                                    
                                    
                                    /*
                                     * Evento pagar
                                     */
                                    pagarAction.prop('disabled',true);
                                    var modalEventContainer = modal.find('#modal_event_container');
                                    var status =  modal.find('select[name=visita_status]').val();
                                    var status_pay = modal.find('#visita_estatuspago').attr('value');

                                    if(status == 'terminado' && status_pay == 'no pagada'){
                                        modal.find('span.token-input-delete-token').hide();
                                        modalEventContainer.find('input,button,select:not(select[name=visita_status])').prop('disabled',true);
                                        modalEventContainer.find('input,button,select:not(select[name=visita_status])').css('cursor','not-allowed');
                                        pagarAction.prop('disabled',false);
                                    }
                                     
                                    modal.find('select[name=visita_status]').on('change',function(){
                                        var status =  modal.find('select[name=visita_status]').val();
                                        if(status == 'terminado' && status_pay == 'no pagada'){
                                            modal.find('span.token-input-delete-token').hide();
                                            modalEventContainer.find('input,button,select:not(select[name=visita_status])').prop('disabled',true);
                                            modalEventContainer.find('input,button,select:not(select[name=visita_status])').css('cursor','not-allowed');
                                             pagarAction.prop('disabled',false);
                                        }
                                        else{
                                             modal.find('span.token-input-delete-token').show();
                                             modalEventContainer.find('input,button,select:not(select[name=visita_status])').css('cursor','auto');
                                             modalEventContainer.find('input,button,select').prop('disabled',false);
                                             pagarAction.prop('disabled',true);
                                        }
                                    });
                                    
                                     var nextDateContainer = modal.find('#pay_nextdate_container');
                                     var dateContainer = modal.find('#pay_date_container');
                                     var payDetailsContainer = modal.find('#pay_details_container');
                                     var payMethodContainer = modal.find('#pay_method_container');
                                     
                                     
                                     
                                     pagarAction.on('click', $.proxy(function(){
                                         //RENOMBRAMOS BOTON
                                         pagarAction.text('Continuar');
                                         //HABILITAMOS INPUTS
                                         nextDateContainer.find('input,button,select').css('cursor','auto');
                                         nextDateContainer.find('input,button,select').prop('disabled',false);
                                         dateContainer.find('input,button,select').css('cursor','auto');
                                         dateContainer.find('input,button,select').prop('disabled',false);
                                         payMethodContainer.find('input,button,select').css('cursor','auto');
                                         payMethodContainer.find('input,button,select').prop('disabled',false);
                                         payMethodContainer.find('input').numeric();
                                         //Eventos method pay
                                         payMethodContainer.find('#addMethodPay').on('click',newMethodPay);
                                             
//                                             var count = payMethodContainer.find('div.units-row').length;
//                                             var row = payMethodContainer.find('div.units-row').eq(0).clone();
//
//                                             payMethodContainer.find('div.units-row').last().find('button').after('<a href="javascript:void(0)">Eliminar</a>');
//                                             var button = payMethodContainer.find('div.units-row').last().find('button');
//                                             
//                                             //renombramos formulario
//                                             row.find('select').attr('name','visitapago_tipo['+count+'][type]');
//                                             row.find('input').attr('name','visitapago_tipo['+count+'][cantidad]');
//                                             row.find('input').numeric();
//                                             var total = payDetailsContainer.find('input[name=visita_total]').val();
//                                             var res = parseFloat(total) - parseFloat(row.find('input').val());
//                                             
//                                             row.find('input').val(res);
//                                             
//                                             //row.find('button').after('<a href="javascript:void(0)">Eliminar</a>');
//                                             //row.find('button').remove();
//                                             row.find('a').parent().css('margin-top','27px');
//                                             row.find('a').on('click',function(){
//                                                $(this).closest('div.units-row').remove();
//                                             });
//                                             payMethodContainer.find('fieldset').prepend(row);
                                  
                                         
                                         
                                         pagarAction.prop('disabled',true);
                                         guardarAction.prop('disabled',true);
                                         modalEventContainer.children(':not(:last-child)').hide();
                                         nextDateContainer.slideDown();
                                         
                                         //El evento para generar una nueva cita
                                         nextDateContainer.find('input[name=visita_siguiente]').on('change',function(){
                                             var is_next_date = nextDateContainer.find('input[name=visita_siguiente]:checked').val();
                                             if(is_next_date == 'si'){
                                                 pagarAction.prop('disabled',true);
                                                dateContainer.find('[btn-action=submit_visita_siguiente]').unbind();
                                                dateContainer.slideDown();
                                                /*Inicializamos nuestros calendarios*/
                                                dateContainer.find('input[name=visita_siguiente_fecha]').pickadate({
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
                                                dateContainer.find('input[name=visita_siguiente_fecha]').on('change',function(){
                                                    $(this).hide();
                                                });
                                                /*El componente de hota*/
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
                                                            
                                                            //Hacemos nuestra peticion ajax
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
                                                                                    tr.append('<td>'+accounting.formatMoney(subtotal)+'</td>');

                                                                                    payDetailsContainer.find('table#pay_details tbody').append(tr);

                                                                                    //Calculamos el total
                                                                                    var total = 0;
                                                                                    $.each(payDetailsContainer.find('table#pay_details tbody tr'),function(){
                                                                                        var subtotal = accounting.unformat($(this).find('td').eq(2).text());
                                                                                        total += subtotal;
                                                                                    });
                                                                                    payDetailsContainer.find('input[name=visita_total]').val(total);
                                                                                    payDetailsContainer.find('#total').text(accounting.formatMoney(total));
                                                                                    
                                                                                    payMethodContainer.find('input').val(total);
                                                                                    payMethodContainer.slideDown();
                                                                                    pagarAction.on('click', $.proxy(function(){
                                                                                        pay($modal);
                                                                                    }));
                                                                                     
                                                                               }else{
                                                                                   pagarAction.text('Pagar');
                                                                                   payDetailsContainer.slideDown();
                                                                                   //Calculamos el total
                                                                                    var total = 0;
                                                                                    $.each(payDetailsContainer.find('table#pay_details tbody tr'),function(){
                                                                                        var subtotal = accounting.unformat($(this).find('td').eq(2).text());
                                                                                        total += subtotal;
                                                                                    });
                                                                                    payDetailsContainer.find('input[name=visita_total]').val(total);
                                                                                    payDetailsContainer.find('#total').text(accounting.formatMoney(total));
                                                                                    
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
                                             }else{
                                                  
                                                 dateContainer.slideUp();
                                                 pagarAction.prop('disabled',false);
                                                 pagarAction.unbind();
                                                 pagarAction.on('click', $.proxy(function(){
                                                    pagarAction.text('Pagar');
                                                     pagarAction.unbind();
                                                     dateContainer.hide();
                                                     nextDateContainer.hide();
                                                     
                                                     //Calculamos el total
                                                    var total = 0;
                                                    $.each(payDetailsContainer.find('table#pay_details tbody tr'),function(){
                                                        var subtotal = accounting.unformat($(this).find('td').eq(2).text());
                                                        total += subtotal;
                                                    });
                                                    payDetailsContainer.find('input[name=visita_total]').val(total);
                                                    payDetailsContainer.find('#total').text(accounting.formatMoney(total));
                                                                                    
                                                    payMethodContainer.find('input').val(total);
                                                    
                                                     payDetailsContainer.slideDown();
                                                     payMethodContainer.slideDown();
                                                     
                                                     pagarAction.on('click', $.proxy(function(){
                                                         
                                                         pay($modal);
                                                     }));
                                                 }));
                                                 
                                             }
                                         });
                                         
                                     }));
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
                                                url: '/editarevento',
                                                data: formData,
                                                async: false,
                                                processData: false,
                                                contentType: false,
                                                success: function (data) {
                                                    if(data.result){
                                                        initCalendar();
                                                        $modal.close();
                                                    }
                                                }
                                            });
                                         }
                                        
                                    }));
                                    
                             });
                             
                        }else{
                            alert('Lo sentimos, esta vista ya no es editable debido a que han transcurrido 15 minutos desde su hora de inicio');
                        }
                        
                    }
                    
                    
                }
             });
        }
        
        function newMethodPay(){
            var fieldsetContainer = $(this).closest('fieldset');
            var newRow = $(this).closest('div.units-row').clone();
            newRow.find('input').val(0);
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