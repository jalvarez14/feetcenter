(function( $ ){
    
   
   /*
    * Handle input. Call public functions and initializers
    */
   
    $.fn.compra = function(data){
        var _this = $(this);
        var plugin = _this.data('compra');
        
        /*Inicializado ?*/
        if (!plugin) {
            
            plugin = new $.compra(this, data);
            
            _this.data('compra', plugin);
            
            return plugin;
        /*Si ya fue inizializado regresamos el plugin*/    
        }else{
            return plugin;
        }
        
    };
    
    /*
    * Plugin Constructor
    */
   
    $.compra = function(container, options){
        
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
        var $details_container = $(container).find('#details_container');
        var $table_body = $container.find('table tbody');
        
        var settings;
        var count= 0;
        
        /*
        * Private methods
        */
       
        
         var updateTotal = function(){
             
             var total = 0;
             
            $table_body.find('td[data-type=subtotal]').each(function(index,element){
                total += accounting.unformat($(element).text());
            });
            $container.find('input[name=compra_importe]').val(total);
            $container.find('#total').text(accounting.formatMoney(total));

         }
         
         var removeProducto = function(){
            $(this).closest('tr').remove();
            updateTotal();
         }
         
         var addProducto = function(){
             
             /*Validamos que los campos requeridos no esten vacios*/
             var empty = false;
             $details_container.find('input').removeClass('input-error');
             
            $details_container.find('input').each(function(){
                if($(this).val() == ""){
                    empty = true;
                    $(this).addClass('input-error');

                }
            });
            
            if(!empty){
               
               //Aumentamos el contador
               count +=1;
               
               var cantidad = $details_container.find('input[name=compradetalle_cantidad]').val();
               var tipo     = $details_container.find('select option:selected').attr('data-type');
               var descripcion = $details_container.find('select option:selected').text();
               var costo =    $details_container.find('input[name=compradetalle_costounitario]').val();
               var subtotal = parseFloat(cantidad) * parseFloat(costo);
               var value =  $details_container.find('select').val();
               
               
               var tr = $('<tr><input type=hidden name='+tipo+'['+count+'][costo] value="'+costo+'"><input type=hidden name='+tipo+'['+count+'][subtotal] value="'+subtotal+'"><input type=hidden name='+tipo+'['+count+'][cantidad] value="'+cantidad+'"><input type=hidden name='+tipo+'['+count+'][id] value="'+value+'"><td>'+cantidad+'</td><td>'+tipo+'</td><td>'+descripcion+'</td><td>'+accounting.formatMoney(costo)+'</td><td data-type="subtotal">'+accounting.formatMoney(subtotal)+'</td><td><a href="javascript:void(0)">Eliminar</a></td></tr>');
               
               //Agregamos el evento remover producto
               tr.find('a').on('click',removeProducto);
               
                //Insertamos en nuestra tabla
               $table_body.append(tr);
               
               //Actualizamos el total
               updateTotal();
               
               //Resetiamos los campos cantidad y costo
               $details_container.find('input[name=compradetalle_cantidad]').val('');
               $details_container.find('input[name=compradetalle_costounitario]').val('');
               
               
               
            }
            
            
            
         }
       
       /*
        * Public methods
        */
        
        plugin.init = function(){
            
            settings = plugin.settings = $.extend({}, defaults, options);
            
            /*Inicializamos nuestros calendarios*/
            $container.find('input[name=compra_fecha]').pickadate({
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
                //selectYears: true,
                selectMonths: true,
                selectYears: 25,
            });
            
            $container.find('input[name=compra_pagaren  ]').pickadate({
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
                //selectYears: true,
                selectMonths: true,
                selectYears: 25,
            });
            
            /*Inicializamos nuestros campso numericos*/
            $container.find('input[name=compradetalle_cantidad],input[name=compradetalle_costounitario]').numeric();
            
            /*Inicializamos nuestros eventos*/
            $container.find('a[data-action=addProducto]').on('click',addProducto);
            
            $table_body.find('a').on('click',removeProducto);
            updateTotal();
            
            //Inicilizamos el contador
            count = $table_body.find('tr').length;
            console.log(count);
           
        }

        /*
        * Plugin initializing
        */
        
        plugin.init();
       
    }
    
    
    
})( jQuery );