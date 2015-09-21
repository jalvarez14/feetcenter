(function( $ ){
    
   
   /*
    * Handle input. Call public functions and initializers
    */
   
    $.fn.transferencias = function(data){
        var _this = $(this);
        var plugin = _this.data('transferencias');
        
        /*Inicializado ?*/
        if (!plugin) {
            
            plugin = new $.transferencias(this, data);
            
            _this.data('transferencias', plugin);
            
            return plugin;
        /*Si ya fue inizializado regresamos el plugin*/    
        }else{
            return plugin;
        }
        
    };
    
    /*
    * Plugin Constructor
    */
   
    $.transferencias = function(container, options){
        
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

        var updateCatalogo = function(idclinica){
            
            $.ajax({
                url:'/inventario/transferencias/getcatalogo',
                dataType:'json',
                data:{idclinica:idclinica},
                success: function (data) {

                    $container.find('select[name=articulo]').val();
                    var opt_productos = $container.find('select[name=articulo]').find('optgroup[label=Productos]');
                    opt_productos.find('option').remove();
                    var opt_insumos = $container.find('select[name=articulo]').find('optgroup[label=Insumos]');
                    opt_insumos.find('option').remove();
                    
                    $.each(data.productos,function(index,element){
                        opt_productos.append('<option data-name="'+element.producto_nombre+'" data-existencias="'+parseInt(element.total_existencias)+'" value="'+element.idproductoclinica+'" data-type="producto">'+element.producto_nombre+' (Existencias: '+parseInt(element.total_existencias)+')</option>');
                        
                    });
                    $.each(data.insumos,function(index,element){
                        opt_insumos.append('<option data-name="'+element.insumo_nombre+'" data-existencias="'+parseInt(element.total_existencias)+'" value="'+element.idinsumoclinica+'" data-type="insumo">'+element.insumo_nombre+'<span data-existencias="'+parseInt(element.total_existencias)+'"> (Existencias: '+parseInt(element.total_existencias)+')</span></option>');
                    });
                    
                    //Damos el formato aquellos que no tienen existencias
                    $container.find('select[name=articulo] option[data-existencias=0]').prop('disabled',true);
                    
                    
                }
            })
            
        }
        
        var addProducto = function(){
            
            //validacion campos vacios
            var empty = false;
            var details_container = $container.find('#details_container');
            
            details_container.find('span.error').remove();
            details_container.find('input,select').removeClass('input-error');

            details_container.find('input,select').each(function(){
                if($(this).val() == ""){
                    empty = true;
                    $(this).addClass('input-error');
                    var $span = $(this).siblings('span.req');
                }
            });
            
            if(!empty){
                //Validamos que la cantidad sea menor o igual a las existencias
                var option = $container.find('select[name=articulo] option:selected');
                var option_text = option.attr('data-name');
                var option_type= option.attr('data-type');
                var option_value = option.attr('value');
                var option_existencias = parseInt(option.attr('data-existencias'));
                var cantidad = parseInt(details_container.find('input').val());
                
                if(cantidad > option_existencias){
                    alert('La cantidad debe de ser menor o igual al numero de existencias de la clinica remitente');
                    details_container.find('input').val("");
                }else{
                    
                    var row = $('<tr><input type="hidden" value="'+cantidad+'" name="'+option_type+'['+option_value+']"><td>'+cantidad+'</td><td>'+option_type+'</td><td>'+option_text+'</td><td><a href="javascript:void(0)">Eliminar</a></td></tr>');
                    
                    //Bloqueamos el select del remitente
                    $container.find('select[name=idclinicaremitente]').prop('readonly',true);
                    details_container.find('input').val("");
                    option.hide();
                    $container.find('select[name=articulo]').val("");
                    
                    //Agregamos el evento removeProducto
                    row.find('a').on('click',function(){
                        removeProducto($(this).closest('tr'),option);
                    });
                    
                    $container.find('tbody').append(row);
                    $container.find('button[data-action=submit]').prop('disabled',false);
                }
            }
            
        }
       
       var removeProducto = function(row,option){

           row.remove();
           option.show();
           
           var count = $container.find('tbody tr').length;
           
           if(count == 0){
            $container.find('button[data-action=submit]').prop('disabled',true);
            $container.find('select[name=idclinicaremitente]').prop('readonly',false);
            
           }
           
           
           
       }
       
       /*
        * Public methods
        */
        
        plugin.init = function(){
            
            settings = plugin.settings = $.extend({}, defaults, options);
            //Inicializamos el evento de ocultar el select seleccionado
            $container.find('select[name=idclinicaremitente]').on('change',function(){
                $container.find('select[name=idclinicadestinataria] option').show();
                
                var idclinica = $(this).val();
                $container.find('select[name=idclinicadestinataria] option[value='+idclinica+']').hide();
                
                updateCatalogo(idclinica);
                
            });
            
            $container.find('button[data-action=submit]').prop('disabled',true);
            
            //El evento addProducto
            $container.find('a[data-action=addProducto]').on('click',addProducto);
            
            
        }

        /*
        * Plugin initializing
        */
        
        plugin.init();
       
    }
    
    
    
})( jQuery );