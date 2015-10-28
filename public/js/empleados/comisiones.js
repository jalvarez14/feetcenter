(function( $ ){
    
   
   /*
    * Handle input. Call public functions and initializers
    */
   
    $.fn.comisiones = function(data){
        var _this = $(this);
        var plugin = _this.data('comisiones');
        
        /*Inicializado ?*/
        if (!plugin) {
            
            plugin = new $.comisiones(this, data);
            
            _this.data('comisiones', plugin);
            
            return plugin;
        /*Si ya fue inizializado regresamos el plugin*/    
        }else{
            return plugin;
        }
        
    };
    
    /*
    * Plugin Constructor
    */
   
    $.comisiones = function(container, options){
        
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
       
       var filterByClinica = function(){
           
           var clinicas_select =   $("select[name=idclinica]").multipleSelect('getSelects');
           clinicas_select = clinicas_select[0];
           //Hacemos la peticion ajax
           $.ajax({
               url:'/empleados/comisiones/comisionesbyclinica',
               dataType: 'json',
               method:'GET',
               data:{idclinica:clinicas_select},
               success: function(data){ 
                   //Las cabeceras de nuestros headers
                   
                    if(data.empleados.length > 0){
                         $container.find('thead tr').append('<th>Fecha</th>');
                         
                         $.each(data.empleados,function(){
                            $container.find('thead tr').append('<th id="'+this.idempleado+'">'+this.empleado_nombre+'</th>')
                        });
                        
                        //Agrgamos el row de las opciones
                        var row_options = $('<tr>',{class:'row'});
                        row_options.append('<td></td>');
                        
                        $.each(data.empleados,function(){
                            row_options.append('<td><div class="units-row" style="margin-bottom: 0px;"><div class="unit-20"><label>Com Serv.</label></div><div class="unit-20"><label>Com Prod.</label></div><div class="unit-20"><label>Serv Vend.</label></div><div class="unit-20"><label>Prod Vend.</label></div><div class="unit-20"><label>Ac.</label></div></div></td>')
                        });
                        $container.find('table.table-comisiones tbody').append(row_options);
                        
                        //Las comisiones (Estructura de cada row);
                        $.each(data.comisiones,function(){
                            var row = $('<tr>');
                            var date = moment(this.empleadocomision_fecha,'MM/DD/YY');
                            row.append('<td>'+date.format('DD/MM/YYYY')+'</td>')
                            
                            for (var i = 0; i < data.empleados.length; i++) {
                               row.append('<td><div class="units-row" style="margin-bottom: 0px;"><div class="unit-20"><label></label></div><div class="unit-20"><label></label></div><div class="unit-20"><label></label></div><div class="unit-20"><label></label></div><div class="unit-20"><label></label></div></div></td>')
                            }

                            $container.find('table.table-comisiones tbody').append(row);
                        });
                        
                        
          
                    }
                    
               }
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
                //onClick : filterByClinica,
            });
            
            $container.find("select[name=idclinica]").multipleSelect("setSelects", [settings.idclinica]);
            
            //filterByClinica();
            
            var now = moment();
            var day = now.get('date');
            
            if(day<=14){
                var from = now.date(1);
                var to = now.date(14);
            }else{
                var from = now.date(15);
                var to = now.endOf('month');
            }
            
            
                
        }

    }
    
    
    
})( jQuery );