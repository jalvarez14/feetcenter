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
            
            $container.find('table.table-vendidos-servicios thead tr').remove();
            $container.find('table.table-vendidos-servicios tbody tr').remove();
            $container.find('table.table-vendidos-servicios tfoot tr').remove();
            
            $container.find('table.table-vendidos-productos thead tr').remove();
            $container.find('table.table-vendidos-productos tbody tr').remove();
            $container.find('table.table-vendidos-productos tfoot tr').remove();
            
            
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
                            $thead.append('<th idempleado="'+this.idempleado+'">'+this.empleado_nombre+'</th>');
                        });
                        $container.find('table.table-vendidos-servicios thead').append($thead);
                        
                        //La estructura de los servicios
                        $.each(data.servicios,function(){
                            var tr = $('<tr idservicioclinica="'+this.idservicioclinia+'"><td>'+this.servicio_nombre+'</td></tr>');
                            for(var i=0; i<data.empleados.length; i++){
                                tr.append('<td>'+this.empleados[i].vendidos+'</td>');
                            }
                            $container.find('table.table-vendidos-servicios tbody').append(tr);
                        });
                        
                        //Las membresias
                        $.each(data.membresias,function(){
                            var tr = $('<tr idmembresia="'+this.idmembresia+'"><td>'+this.membresia_nombre+'</td></tr>');
                            for(var i=0; i<data.empleados.length; i++){
                                tr.append('<td>'+this.empleados[i].vendidos+'</td>');
                            }
                            $container.find('table.table-vendidos-servicios tbody').append(tr);
                        });
                        
                        //Calculamos totales de tabla 1
                        /*var rowTotal = $('<tr><td>Totales</td></tr>');
                        $.each($container.find('table.table-vendidos-servicios thead tr th:not(:first-child)'),function(){
                            var index = $(this).index();
                            var total = 0;
                            $.each($container.find('table.table-vendidos-servicios tbody tr'),function(){
                               total += parseInt($(this).find('td').eq(index).text());
                            });
                            rowTotal.append('<td>'+total+'</td>');
                        });
                        $container.find('table.table-vendidos-servicios tfoot').append(rowTotal);*/
                        
                        //Productos
                        $thead = $('<tr><th>Productos</th></tr>');
                        $.each(data.empleados,function(){
                            $thead.append('<th>'+this.empleado_nombre+'</th>');
                        });
                        $container.find('table.table-vendidos-productos').append($thead);
                        
                        //La estructura de los productos
                        $.each(data.productos,function(){
                            var tr = $('<tr idproductoclinica="'+this.idproductoclinica+'"><td>'+this.producto_nombre+'</td></tr>');
                            for(var i=0; i<data.empleados.length; i++){
                                tr.append('<td>'+this.empleados[i].vendidos+'</td>');
                            }
                            $container.find('table.table-vendidos-productos tbody').append(tr);
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
            if(settings.session.idclinica == null){
                settings.session.idclinica = 1;
            }
            
            //Pedicurista?
            if(settings.session.idrol == 3){
                $container.find('select[name=idclinica]').closest('div.unit-30').hide();
                $container.find('#month_filter_container').css('margin-left','0px');
            }
            
           //Inicializamos nuestro multiple select
            $container.find("select[name=idclinica]").multipleSelect({
                single:true,   
                onClick : function(){
                    filterByClinica(settings.session.idrol);
                }
            });
            
            $container.find("select[name=idclinica]").multipleSelect("setSelects", [settings.session.idclinica]);
             
            filterByClinica(settings.session.idrol);
            
            //Month picker
            $('input[name=month_filter]').MonthPicker({ Button: false });
            
            //El evento filter
            $container.find('button#filterbydate').on('click',function(){
                
                var empty = false;
                $container.find('input[name=month_filter]').removeClass('input-error');
                
                if($container.find('input[name=month_filter]').val() == ""){
                    $container.find('input[name=month_filter]').addClass('input-error');
                    empty = true;
                }
                
                if(!empty){
                    settings.date = moment($container.find('input[name=month_filter]').MonthPicker('GetSelectedDate'));
                    filterByClinica(settings.session.idrol);
                }

            });
            
            
           
            

            
            
            
            
        }
       
    }
    
    
    
})( jQuery );