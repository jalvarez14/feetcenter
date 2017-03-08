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
            
            var to = $container.find('input[name=month_filter2]').val();
            var from = $container.find('input[name=month_filter]').val();
   
            var clinicas_select = $container.find("select[name=idclinica]").multipleSelect('getSelects');
            clinicas_select = clinicas_select[0];
            
            var productos_select = $container.find("select[name=idproducto]").multipleSelect('getSelects');
            var servicios_select = $container.find("select[name=idservicio]").multipleSelect('getSelects');
            var membresias_select = $container.find("select[name=idmembresia]").multipleSelect('getSelects');

            
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
                data:{idclinica:clinicas_select,idrol:idrol,productos:productos_select,servicios: servicios_select,membresias:membresias_select,from:from,to:to},
                success: function(data){
   
                    if(data.empleados.length > 0){
                        
                        //Servicios
                         var serviciosemp = [];
                         var contserv=0;
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
                                if(contserv==0)
                                {
                                    serviciosemp[i]= parseInt(this.empleados[i].vendidos);
                                }
                                else
                                {
                                    serviciosemp[i]+= parseInt(this.empleados[i].vendidos);
                                }
                            }
                            $container.find('table.table-vendidos-servicios tbody').append(tr);
                            contserv++;
                        });
                        
                        //Las membresias
                        $.each(data.membresias,function(){
                            var tr = $('<tr idmembresia="'+this.idmembresia+'"><td>'+this.membresia_nombre+'</td></tr>');
                            for(var i=0; i<data.empleados.length; i++){
                                tr.append('<td>'+this.empleados[i].vendidos+'</td>');
                                if(contserv==0)
                                {
                                    serviciosemp[i]= parseInt(this.empleados[i].vendidos);
                                }
                                else
                                {
                                    serviciosemp[i]+= parseInt(this.empleados[i].vendidos);
                                }
                            }
                            $container.find('table.table-vendidos-servicios tbody').append(tr);
                            contserv++;
                        });
                        
                        var tr = $('<tr><td>Total</td></tr>');
                                                    
                        for(var i=0; i<data.empleados.length; i++){
                                tr.append('<td>'+serviciosemp[i]+'</td>');
                                
                        }
                        $container.find('table.table-vendidos-servicios tbody').append(tr);
                        
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
                        var productosemp = [];
                        $thead = $('<tr><th>Productos</th></tr>');
                        $.each(data.empleados,function(){
                            $thead.append('<th>'+this.empleado_nombre+'</th>');
                        });
                        $container.find('table.table-vendidos-productos').append($thead);
                        
                        
                        
                        
                        //La estructura de los productos
                        var contprod=0;
                        $.each(data.productos,function(){
                            var tr = $('<tr idproductoclinica="'+this.idproductoclinica+'"><td>'+this.producto_nombre+'</td></tr>');
                            for(var i=0; i<data.empleados.length; i++){
                                tr.append('<td>'+this.empleados[i].vendidos+'</td>');
                                if(contprod==0)
                                {
                                    productosemp[i]= parseInt(this.empleados[i].vendidos);
                                }
                                else
                                {
                                    productosemp[i]+= parseInt(this.empleados[i].vendidos);
                                }
                            
                            }
                            $container.find('table.table-vendidos-productos tbody').append(tr);
                            contprod++;
                        });
                        var tr = $('<tr><td>Total</td></tr>');
                                                    
                        for(var i=0; i<data.empleados.length; i++){
                                tr.append('<td>'+productosemp[i]+'</td>');
                                
                        }
                        $container.find('table.table-vendidos-productos tbody').append(tr);
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
            
            $container.find("select[name=idservicio]").multipleSelect({
                single:false,   
                
            });
            $container.find("select[name=idmembresia]").multipleSelect({
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