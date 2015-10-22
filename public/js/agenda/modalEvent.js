(function( $ ){
    
   
   /*
    * Handle input. Call public functions and initializers
    */
   
    $.fn.modalEvent = function(data){
        var _this = $(this);
        var plugin = _this.data('modalEvent');
        
        /*Inicializado ?*/
        if (!plugin) {
            
            plugin = new $.modalEvent(this, data);
            
            _this.data('modalEvent', plugin);
            
            return plugin;
        /*Si ya fue inizializado regresamos el plugin*/    
        }else{
            return plugin;
        }
        
    };
    
    /*
    * Plugin Constructor
    */
   
    $.modalEvent = function(container, options){
        
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
        var pacientes_array = new Array();
        /*
        * Private methods
        */
       
       var showRelacionados = function(relacionados){
           
           var tbody =  $container.find('#relacionados_container tbody');
           $.each(relacionados,function(){
               var tr = $('<tr>');
               var paciente_telefono = this.paciente_telefono !== null ? this.paciente_telefono : '';
               
               tr.append('<input type="hidden" value="'+this.idpacienteagregado+'" name="relacionados[]">');
               tr.append('<td>'+this.clinica_nombre+'</td>');
               tr.append('<td>'+this.paciente_nombre+'</td>');
               tr.append('<td>'+this.paciente_celular+'</td>');
               tr.append('<td>'+paciente_telefono+'</td>');
               tr.append('<td><a href="javascript:void(0)">Eliminar</a></td>');
               //El evento eliminar
                tr.find('a').on('click',function(){
                    var id = $(this).closest('tr').attr('id');

                    var index = pacientes_array.indexOf(parseInt(id));

                    if (index > -1) {
                        pacientes_array.splice(index, 1);
                    }

                    $(this).closest('tr').remove();
                });
               tbody.append(tr);
           });
          
       }
       
       var openPacienteContainer = function(){
           $container.find('input[name=paciente_autocomplete]').tokenInput('clear');
           $container.find('#token-input-').prop('disabled',true);
           $container.find('#paciente_container').slideDown();
           
           $container.find('input[name=paciente_relacionados_autocomplete]').tokenInput('clear');
           $container.find('#relacionados_container tbody tr').remove();
           $container.find('#relacionados_container').slideUp();
       }
       
       var closePacienteContainer = function(){
            $container.find('#token-input-').prop('disabled',false);
            $container.find('#paciente_container').find('input').val('');
            $container.find('#paciente_container').slideUp();
       }
       
       var openRelacionadosContainer = function(){
           $container.find('#relacionados_container').slideDown();
       }
       
       var closeRelacionadosContainer = function(){
            $container.find('#relacionados_container').slideUp();
       }
       
       var submitPaciente = function(){
           var empty= false;
           var equals = true;
           
           $container.find('#paciente_container').find('span.error').remove();
           $container.find('#paciente_container').find('[required]').removeClass('input-error');
           
           $container.find('#paciente_container input[required]').filter(function(){
               if($(this).val() == ""){
                   empty = true;
                   $(this).addClass('input-error');
                   var $span = $(this).siblings('span.req');
                   $span.after('<span class="error"> campo obligatorio</span>');
               }
           });
                     
           if(!empty){
               //Validamos que coincidan los celulares
               var cel1 = $container.find('#paciente_container').find('input[name=paciente_celular]').val();
               var cel2 = $container.find('#paciente_container').find('input[name=paciente_celular_confirmar]').val();
               if(cel1 !== cel2){
                   equals = false;
                   $container.find('#paciente_container').find('input[name=paciente_celular_confirmar]').addClass('input-error');
                   var $span = $container.find('#paciente_container').find('input[name=paciente_celular_confirmar]').siblings('span.req');
                   $span.after('<span class="error"> El numero de celular no coincide</span>');
               }
           }
           
           if(!empty && equals){
               
               var form_data = new FormData();
               $.each($container.find('input[type=hidden]'),function(){
                   form_data.append($(this).attr('name'),$(this).val());
               });
               $.each($container.find('#paciente_container input'),function(){
                   form_data.append($(this).attr('name'),$(this).val());
               });
               
               //Hacemos nuestra peticion ajax
               $.ajax({
                   url:'/quickaddpaciente',
                   method:'POST',
                   dataType:'json',
                   data:form_data,
                   processData: false,
                   contentType: false,
                   success: function(data){
                       if(data.result){
                            $container.find('input[name=paciente_autocomplete]').tokenInput('add',{id:data.data.idpaciente,name:data.data.paciente_nombre + ' - Celular: ' + data.data.paciente_celular + ' - Teléfono:',visita_total:0,visita_ultima:'',relacionados:{}});
                            closePacienteContainer();
                       }
                       
                   }
               });

           }
       }
       
       var submitRelacionados = function(){
           
          var paciente = $container.find('input[name=paciente_autocomplete]').tokenInput('get');
          var form_data = new FormData();
          form_data.append('idpaciente',paciente[0].id);
           $.each($container.find('#relacionados_container tbody tr'),function(){
               form_data.append($(this).find('input').attr('name'),$(this).find('input').val());
           });
           
           //Hacemos nuestra peticion ajax
            $.ajax({
                url:'/quickupdaterelacionados',
                method:'POST',
                dataType:'json',
                data:form_data,
                processData: false,
                contentType: false,
                success: function(data){
                    if(data.result){
                         alert('Registro guardado exitosamente!');
                         closeRelacionadosContainer();
                    }

                }
            });
           
       }
       
       var formatoCatalogo = function(){
           $('#visitadetalle_tipo option[data-existencias]').filter(function(){
               $(this).append(' (Existencias: ' + $(this).attr('data-existencias') + ')');
               if($(this).attr('data-existencias') == 0){
                   $(this).prop('disabled',true);
               }
           });
           
           $.each($container.find('tbody tr'),function(){
                var type = $(this).find('input[name*=type]').val();
                var id = $(this).find('input[name*=id]').val();
                $container.find('select#visitadetalle_tipo option[data-type='+type+'][value="'+id+'"]').hide();
               
           });
           
       }
       
       var deleteProduct = function(){
           
           //Eliminamos
           var row = $(this).closest('tr');
           var id = row.find('input[name*=id]').val();
           var type = row.find('input[name*=type]').val();
           $container.find('#visitadetalle_tipo option[data-type='+type+'][value='+id+']').show();
           row.remove();

            //Calculamos el total
            var total = 0;
            $.each($container.find('#visita_container table#visita_detalles tbody tr'),function(){
                var subtotal = accounting.unformat($(this).find('td').eq(3).text());
                total += subtotal;
            });
            $container.find('input[name=visita_total]').val(total);
           $container.find('#total').text(accounting.formatMoney(total));
           
       }
       
       var addProduct = function(){
           var itemCount = $container.find('table#visita_detalles tbody tr').length;
           
           $container.find('#addproduct_container input,#addproduct_container select').removeClass('input-error');
           //Validamos que la el campo cantidad no este vacio
           var empty = false
           $.each($('#addproduct_container input,#addproduct_container select'),function(){
               if($(this).val() == ""){
                empty = true;
                $(this).addClass('input-error');
               }
           });
           
           if(!empty){
               
               //Si es producto validamos exitencias
               var cantidad = $container.find('input[name=visitadetalle_cantidad]').val();
               var selected = $('#visitadetalle_tipo option:selected');
               var item = selected.attr('data-name');
               var type = selected.attr('data-type');
               if(type == 'producto'){
                   var existencias = selected.attr('data-existencias');
                   if(cantidad<=existencias){
                        var id = selected.val();
                        var price = selected.attr('data-price');
                        var subtotal = parseInt(cantidad) * parseInt(price);
                        var inputs = $('<input type="hidden" name="vistadetalle['+itemCount+'][id]" value="'+id+'"><input type="hidden" name="vistadetalle['+itemCount+'][type]" value="'+type+'"><input type="hidden" name="vistadetalle['+itemCount+'][price]" value="'+price+'"><input type="hidden" name="vistadetalle['+itemCount+'][cantidad]" value="'+cantidad+'"><input type="hidden" name="vistadetalle['+itemCount+'][subtotal]" value="'+subtotal+'">');
                        var opciones = $('<td><a href="javascript:void(0)">Eliminar</a></td>');
                        opciones.find('a').on('click',deleteProduct);


                        //Nuestra row
                        var tr = $('<tr>');
                        tr.append(inputs);
                        tr.append('<td>'+cantidad+'</td>');
                        tr.append('<td>'+item+'</td>');
                        tr.append(opciones);
                        tr.append('<td>'+accounting.formatMoney(subtotal)+'</td>');
                        $container.find('table#visita_detalles tbody').append(tr);

                        //Calculamos el total
                        var total = 0;
                        
                        $.each($container.find('#visita_container table#visita_detalles tbody tr'),function(){
                            var subtotal = accounting.unformat($(this).find('td').eq(3).text());
                            total += subtotal;
                        });
                        $container.find('input[name=visita_total]').val(total);
                        $container.find('#total').text(accounting.formatMoney(total));


                        selected.hide();
                        $('#addproduct_container input,#addproduct_container select').val('');
                   }else{
                       $container.find('input[name=visitadetalle_cantidad]').addClass('input-error');
                       alert('La cantidad debe de ser menor o igual al numero de existencias');
                   }
               }else{
                    var id = selected.val();
                    var price = selected.attr('data-price');
                    var subtotal = parseInt(cantidad) * parseInt(price);
                    var inputs = $('<input type="hidden" name="vistadetalle['+itemCount+'][id]" value="'+id+'"><input type="hidden" name="vistadetalle['+itemCount+'][type]" value="'+type+'"><input type="hidden" name="vistadetalle['+itemCount+'][price]" value="'+price+'"><input type="hidden" name="vistadetalle['+itemCount+'][cantidad]" value="'+cantidad+'"><input type="hidden" name="vistadetalle['+itemCount+'][subtotal]" value="'+subtotal+'">');
                    var opciones = $('<td><a href="javascript:void(0)">Eliminar</a></td>');
                    opciones.find('a').on('click',deleteProduct);


                    //Nuestra row
                    var tr = $('<tr>');
                    tr.append(inputs);
                    tr.append('<td>'+cantidad+'</td>');
                    tr.append('<td>'+item+'</td>');
                    tr.append(opciones);
                    tr.append('<td>'+accounting.formatMoney(subtotal)+'</td>');
                    $container.find('table#visita_detalles tbody').append(tr);

                    //Calculamos el total
                    var total = 0;
                    $.each($container.find('#visita_container table#visita_detalles tbody tr'),function(){
                        var subtotal = accounting.unformat($(this).find('td').eq(3).text());
                        total += subtotal;
                    });
                    $container.find('input[name=visita_total]').val(total);
                    $container.find('#total').text(accounting.formatMoney(total));


                    selected.hide();
                    $('#addproduct_container input,#addproduct_container select').val('');
               }

           }
       }
       /*
        * Public methods
        */
        
        plugin.init = function(){
            
            settings = plugin.settings = $.extend({}, defaults, options);
            
            
            //Inicializamos al autocomplete
            $container.find('input[name=paciente_autocomplete]').tokenInput('/findpacientes',{
                //propertyToSearch: 'paciente_nombre',
                hintText: "Comience a escribir...",
                noResultsText: "No se encontraron resultados...",
                searchingText: "Buscando...",
                tokenLimit:1,
                onAdd:function(item){
                    $container.find('input[name=idpaciente]').val(item.id);
                    $container.find('#visita_total').text(item.visita_total);
                    $container.find('#visita_ultima').text(item.visita_ultima);
                    $container.find('button[btn-action=open_relacionados_container]').removeClass('btn-disabled');
                    $container.find('button[btn-action=open_relacionados_container]').prop('disabled',false);
                    showRelacionados(item.relacionados);
                },
                onDelete:function(item){
                    $container.find('input[name=idpaciente]').val('');
                    $container.find('#visita_total').text('');
                    $container.find('#visita_ultima').text('');
                    $container.find('button[btn-action=open_relacionados_container]').addClass('btn-disabled');
                    $container.find('button[btn-action=open_relacionados_container]').prop('disabled',true);
                    $container.find('#relacionados_container tbody tr').remove();
                    closeRelacionadosContainer();
                }
            });
            
            //Inicializamos al autocomplete de relacionados
            $container.find('input[name=paciente_relacionados_autocomplete]').tokenInput('/pacientes/grupos/filter',{
                //propertyToSearch: 'paciente_nombre',
                hintText: "Comience a escribir...",
                noResultsText: "No se encontraron resultados...",
                searchingText: "Buscando...",
                tokenLimit:1,
            });
            
            //El evento agregar de los ralcionados

            $container.find('[data-action=addPaciente]').on('click',function(){
                
                var paciente = container.find('input[name=paciente_relacionados_autocomplete]').tokenInput("get");
                if(paciente.length > 0){
                    if($.inArray(paciente[0].id,pacientes_array) == -1){
                    
                        //Creamos nuestro row
                        var tr = $('<tr>');
                        tr.attr('id',paciente[0].id);
                         tr.append('<input type="hidden" name="relacionados[]" value="'+paciente[0].id+'">');
                        tr.append('<td>'+paciente[0].clinica_nombre+'</td>');
                        tr.append('<td>'+paciente[0].paciente_nombre+'</td>');
                        tr.append('<td>'+paciente[0].paciente_celular+'</td>');
                        if(paciente[0].paciente_telefono != null){
                            tr.append('<td>'+paciente[0].paciente_telefono+'</td>');
                        }else{
                            tr.append('<td></td>');
                        }
                        tr.append('<td><a href=javascript:void(0)>Eliminar</a></td>');

                        pacientes_array.push(paciente[0].id);

                        //El evento eliminar
                        tr.find('a').on('click',function(){
                            var id = $(this).closest('tr').attr('id');
                            
                            var index = pacientes_array.indexOf(parseInt(id));

                            if (index > -1) {
                                pacientes_array.splice(index, 1);
                            }

                            $(this).closest('tr').remove();
                        });
                        
                        $container.find('#relacionados_container tbody').append(tr);
                        
                        container.find('input[name=paciente_relacionados_autocomplete]').tokenInput("clear");
                        
                    }else{
                        alert('El paciente ya fue agregado anteriormente');
                    }
                }else{
                    alert('Por favor seleccione un paciente');
                }
                
            });
            
            //new paciente container
            $container.find('button[btn-action=open_paciente_container]').on('click',openPacienteContainer);
            $container.find('.nuevo_paciente_close').on('click',closePacienteContainer);
            $container.find('[btn-action=submit_paciente]').on('click',submitPaciente);
            
            //Relacionado paciente
            $container.find('button[btn-action=open_relacionados_container]').on('click',openRelacionadosContainer);
            $container.find('.relacionados_close').on('click',closeRelacionadosContainer);
            $container.find('[btn-action=submit_relacionados]').on('click',submitRelacionados);
            
            //El evento de agregar productos servicios
            formatoCatalogo(); //Damos formato al catalogo 
            $container.find('input[name=visitadetalle_cantidad]').numeric();
            $container.find('#addProduct').on('click',addProduct);
            
            //El evento receso
            $container.find('input[name=visita_option]').on('change',function(){
                    var option = $container.find('input[name=visita_option]:checked').val();
                    if(option == 'receso'){
                        $container.find('#visita_container').slideUp();
                    }else{
                        $container.find('#visita_container').slideDown();
                    }
            });
            
            //Calculamos el total
            var total = 0;
            $.each($container.find('#visita_container table#visita_detalles tbody tr'),function(){
                var subtotal = accounting.unformat($(this).find('td').eq(3).text());
                total += subtotal;
            });
            $container.find('input[name=visita_total]').val(total);
            $container.find('#total').text(accounting.formatMoney(total));
            $container.find('tbody a').on('click',deleteProduct);
            
            if(typeof settings.paciente != 'undefined'){
                 var telefono = '';
                 if(settings.paciente.paciente_telefono != null){
                     telefono = settings.paciente.paciente_telefono;
                 }
                 $container.find('input[name=paciente_autocomplete]').tokenInput('add',{id:settings.paciente.idpaciente,visita_total:settings.paciente.visita_total,visita_ultima:settings.paciente.visita_ultima,relacionados:settings.paciente.relacionados,name:settings.paciente.paciente_nombre + ' - Celular: ' + settings.paciente.paciente_celular + ' - Telefono: ' + telefono });
            }

        }


        /*
        * Plugin initializing
        */
        
        plugin.init();
       
    }
    
    
    
})( jQuery );