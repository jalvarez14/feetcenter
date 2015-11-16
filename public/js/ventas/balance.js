(function( $ ){
    
   
   /*
    * Handle input. Call public functions and initializers
    */
   
    $.fn.balance = function(data){
        var _this = $(this);
        var plugin = _this.data('balance');
        
        /*Inicializado ?*/
        if (!plugin) {
            
            plugin = new $.balance(this, data);
            
            _this.data('balance', plugin);
            
            return plugin;
        /*Si ya fue inizializado regresamos el plugin*/    
        }else{
            return plugin;
        }
        
    };
    
    /*
    * Plugin Constructor
    */
   
    $.balance = function(container, options){
        
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

       var filter = function(from,to){

            $container.find('[idclinica]').hide(); 
            
            if(typeof from == 'undefined'){
          
                var from = moment();
                
            }
            if(typeof to ==  'undefined'){
                var to = moment();
            }
            
            
            var clinicas_select =   $("select[name=idclinica]").multipleSelect('getSelects');
            
            //Hacemos la peticion ajax
           $.ajax({
               url:'/ventas/balance/filter',
               dataType: 'json',
               method:'POST',
               async:false,
               data:{clinicas:clinicas_select,from:from.format('YYYY-MM-DD'),to:to.format('YYYY-MM-DD')},
               success: function(data){
                  
                   $.each(data,function(){
                       $container.find('[idclinica='+this.idclinica+']').show();
                       $container.find('tr#ingreso_efectivo').find('td[idclinica='+this.idclinica+']').text(accounting.formatMoney(this.ingrsos_efectivo));
                       $container.find('tr#ingreso_tarjeta').find('td[idclinica='+this.idclinica+']').text(accounting.formatMoney(this.ingrsos_tarjeta));
                       $container.find('tr#egreso').find('td[idclinica='+this.idclinica+']').text(accounting.formatMoney(this.egreso));
                       $container.find('tr#balance').find('td[idclinica='+this.idclinica+']').text(accounting.formatMoney(this.balance));
                   });
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
                onClick : function(){
                    filter();
                },
                onCheckAll: function(){
                    filter();
                },
            });
            
             $container.find("select[name=idclinica]").multipleSelect('checkAll');
             
             //Inicializamos nuestros calendarios del filtro de fechas
            var pickdateFrom = $container.find('input[name=comisiones_from]').pickadate({
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
                selectMonths: true,
                selectYears: 25,
                max: new Date(),
            });
            
            //Inicializamos nuestros calendarios del filtro de fechas
            var pickdateTo= $container.find('input[name=comisiones_to]').pickadate({
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
                selectMonths: true,
                selectYears: 25,
                max: new Date(),
            });
            
            
            $container.find('button#filterbydate').on('click',function(){
                
                var empty = false;
                
                 $('#filter_container input:visible').removeClass('input-error');
                
                $('#filter_container input:visible').each(function(){
                    if($(this).val() == ""){
                        empty = true;
                        $(this).addClass('input-error');
                    }
                });
                
                if(!empty){
                   var from = moment($container.find('input[name=comisiones_from_submit]').val(),'YYYY/MM/DD');
                   var to = moment($container.find('input[name=comisiones_to_submit]').val(),'YYYY/MM/DD');
                   
                   filter(from,to);

                }

            });
        }

        /*
        * Plugin initializing
        */
        
        plugin.init();
       
    }
    
    
    
})( jQuery );