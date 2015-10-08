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
                        }
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