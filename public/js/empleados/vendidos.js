(function( $ ){
    
   
   /*
    * Handle input. Call public functions and initializers
    */
   
    $.fn.vendidos = function(data){
        var _this = $(this);
        var plugin = _this.data('vendidos');
        
        /*Inicializado ?*/
        if (!plugin) {
            
            plugin = new $.vendidos(this, data);
            
            _this.data('vendidos', plugin);
            
            return plugin;
        /*Si ya fue inizializado regresamos el plugin*/    
        }else{
            return plugin;
        }
        
    };
    
    /*
    * Plugin Constructor
    */
   
    $.vendidos = function(container, options){
        
        var plugin = this;
        
        /* 
        * Default Values
        */ 
       
       var defaults = {
           date:moment(),
       };
       
       /* 
        * Important Components
        */ 
        var $container = $(container);  
        
        var settings;
        
        /*
        * Private methods
        */

        
        var filterByClinica = function(idrol){
            
            var to = moment(settings.date).endOf('month');
            var from = moment(settings.date).set('date', 1);
   
            var clinicas_select = $container.find("select[name=idclinica]").multipleSelect('getSelects');
            clinicas_select = clinicas_select[0];
            
            $.ajax({
                method:'GET',
                url: '/empleados/vendidos/filterbyclinica',
                dataType: 'json',
                async:false,
                data:{idclinica:clinicas_select,idrol:idrol,from:from.format('YYYY-MM-DD'),to:to.format('YYYY-MM-DD')},
                success: function(data){
                    
                    if(data.empleados.length > 0){
                        
                        //Servicios
                        var $thead = $('<tr><th>Servicios</th></tr>');
                        $.each(data.empleados,function(){
                            $thead.append('<th>'+this.empleado_nombre+'</th>');
                        });
                        $container.find('table.table-vendidos-servicios').append($thead);
                        
                        $.each(data.servicios,function(){
                            var tr = $('<tr><td>'+this.servicio_nombre+'</td></tr>');
                            $container.find('table.table-vendidos-servicios tbody').append(tr);
                        });
                        
                        
                        console.log(data);
        
                        //Productos
                        $thead = $('<tr><th>Productos</th></tr>');
                        $.each(data.empleados,function(){
                            $thead.append('<th>'+this.empleado_nombre+'</th>');
                        });
                        $container.find('table.table-vendidos-productos').append($thead);
                    }
                }
            });
            
        }
       
       /*
        * Public methods
        */
        
        plugin.init = function(){
            
            settings = plugin.settings = $.extend({}, defaults, options);
            if(settings.session.idclinica == null){
                settings.session.idclinica = 1;
            }
            
           //Inicializamos nuestro multiple select
            $container.find("select[name=idclinica]").multipleSelect({
                single:true,   
                onClick : function(){
                    filterByClinica(settings.session.idrol);
                }
            });
            
            $container.find("select[name=idclinica]").multipleSelect("setSelects", [settings.session.idclinica]);
             
            filterByClinica(settings.session.idrol )
            
            //Month picker
            $('input[name=month_filter]').MonthPicker({ Button: false });
            
           
            

            
            
            
            
        }
       
    }
    
    
    
})( jQuery );