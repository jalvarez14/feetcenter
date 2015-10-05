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
       
        var initCalendar = function(){
            
             var clinica_select =   $("select[name=idclinica]").multipleSelect('getSelects');
             settings.idclinica = clinica_select[0];
             
             $container.find('#calendar').fullCalendar('destroy');
             
             
             //Inicializamos el calendario
             //Inicializamos nuestro calendario
             $container.find('#calendar').fullCalendar({
                 selectable:true,
                 schedulerLicenseKey: 'CC-Attribution-NonCommercial-NoDerivatives',
                 defaultView: 'timelineDay',
                 resourceLabelText: 'Empleados',
                 views: {
                    timelineDay: {
                        scrollTime:'08:00:00',
                        slotDuration:'00:15:00',
                        slotLabelInterval: '00:15',
                    },
                },
                select:function( start, end, jsEvent, view, resoruce){
                    console.log(start.format('D/M/YYYY H:m'));
                    console.log(end.format('D/M/YYYY H:m'));
                },
                resources: '/agenda/getpedicuristasbyclinica/'+settings.idclinica,
                

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