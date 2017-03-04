(function( $ ){
    
   
   /*
    * Handle input. Call public functions and initializers
    */
   
    $.fn.historial = function(data){
        var _this = $(this);
        var plugin = _this.data('historial');
        
        /*Inicializado ?*/
        if (!plugin) {
            
            plugin = new $.historial(this, data);
            
            _this.data('historial', plugin);
            
            return plugin;
        /*Si ya fue inizializado regresamos el plugin*/    
        }else{
            return plugin;
        }
        
    };
    
    /*
    * Plugin Constructor
    */
   
    $.historial = function(container, options){
        
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
            

            var fecha = $container.find('input[name=month_filter]').val();
   
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
                url: '/inventario/historial/filterbyclinica',
                dataType: 'json',
                async:false,
                data:{idclinica:clinicas_select,idrol:idrol,fecha:fecha},
                success: function(data){
   
                    if(data.productos.length > 0){
                        
                        
                        
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
                        var $thead = $('<tr><th>Productos</th></tr>');
                        
                        
                        //La estructura de los productos
                        $.each(data.productos,function(){
                            var tr = $('<tr idproductoclinica="'+this.idproductoclinica+'"><td>'+this.producto_nombre+'</td><td>'+this.inventario+'</td></tr>');
                            
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
                $container.find('#month_filter_container2').css('margin-left','0px');

            }
            
           //Inicializamos nuestro multiple select
            $container.find("select[name=idclinica]").multipleSelect({
                single:true,   
                onClick : function(){
                    filterByClinica(settings.session.idrol);
                }
            });
            
            $container.find("select[name=idproducto]").multipleSelect({
                single:false,   
                
            });
            
            $container.find("select[name=idclinica]").multipleSelect("setSelects", [settings.session.idclinica]);
             
            filterByClinica(settings.session.idrol);
            
            //Month picker
            $('input[name=month_filter]').datepicker( {
                changeMonth: true,
                changeYear: true,
                showButtonPanel: true,
                dateFormat: 'dd/mm/yy',
                onClose: function(dateText, inst) { 
                    $(this).datepicker('setDate', new Date(inst.selectedYear, inst.selectedMonth, 1));
                    }
            });
            $('input[name=month_filter2]').datepicker( {
                changeMonth: true,
                changeYear: true,
                showButtonPanel: true,
                dateFormat: 'dd/mm/yy',
                onClose: function(dateText, inst) { 
                    $(this).datepicker('setDate', new Date(inst.selectedYear, inst.selectedMonth, 1));
                    }
            });
            
            //El evento filter
            $container.find('button#filterbydate').on('click',function(){
                
                var empty = false;
                $container.find('input[name=month_filter]').removeClass('input-error');
                
                if($container.find('input[name=month_filter]').val() == ""){
                    $container.find('input[name=month_filter]').addClass('input-error');
                    empty = true;
                }
                
                if(!empty){
                    settings.date = moment($container.find('input[name=month_filter]'));
                    filterByClinica(settings.session.idrol);
                }

            });
            
            $container.find('button#filterbydate2').on('click',function(){
                
                var empty = false;
                $container.find('input[name=month_filter2]').removeClass('input-error');
                
                if($container.find('input[name=month_filter2]').val() == ""){
                    $container.find('input[name=month_filter2]').addClass('input-error');
                    empty = true;
                }
                
                if(!empty){
                    settings.date = moment($container.find('input[name=month_filter2]'));
                    filterByClinica(settings.session.idrol);
                }

            });
            
            
           
            

            
            
            
            
        }
       
    }
    
    
    
})( jQuery );