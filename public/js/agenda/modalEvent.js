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
        var $payContainer = $container.find('#pay_container');
        
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
            $('#visitadetalle_tipo span').remove(); 
           $('#visitadetalle_tipo option[data-existencias]').filter(function(){
               $(this).append('<span> (Existencias: ' + $(this).attr('data-existencias') + ')</span>');
               if($(this).attr('data-existencias') == 0){
                   $(this).prop('disabled',true);
               }
           });
           
           $('#visitadetalle_tipo option[data-available]').filter(function(){
               if($(this).attr('data-available') == 0){
                   $(this).prop('disabled',true);
                   $(this).append('<span> (Sin insumos disponibles)</span>');
               }
           });
           
           $.each($container.find('#visita_container table#visita_detalles tbody tr'),function(){
                var type = $(this).find('input[name*=type]').val();
                var id = $(this).find('input[name*=id]').val();
                $('select#visitadetalle_tipo option[data-type='+type+'][value='+id+']').addClass('hide');
           });
           
           
       }
       
       var deleteProduct = function(){
           
           //Eliminamos
           var row = $(this).closest('tr');
           var id = row.find('input[name*=id]').val();
           var type = row.find('input[name*=type]').val();
           $container.find('#visitadetalle_tipo option[data-type='+type+'][value='+id+']').removeClass('hide');
           var index = row.index();
           row.remove();
           
           
           if($('#visita_container table#visita_detalles tbody input[name*=type][value=membresia]').length == 0){
               $container.find('option[data-dependencia=membresia]').remove();
           }
           
           if(type == 'membresia'){
               $container.find('input[name=anticipado]').val('false');
               $container.find('input[name=visita_pagoanticipado]').prop('disabled',false);
               $container.find('input[name=visita_pagoanticipado]').prop('checked',false);
               $container.find('#pay_date_anticipado_input').hide();
               
               console.log($container.find('tr[depenencia=membresia]').remove())
               
           }
           
           
           //Removemos de la lista de pay
           $container.find('table#pay_details tbody tr').eq(index).remove();

           
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
           var d = new Date();
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
               var cantidad = parseInt($container.find('input[name=visitadetalle_cantidad]').val());
         
               var selected = $('#visitadetalle_tipo option:selected');
               var item = selected.attr('data-name');
               var type = selected.attr('data-type');

               if(type == 'producto'){
                   
                   //$container.find('input[name=visitadetalle_cantidad]').closest('div').show();
                   var existencias = selected.attr('data-existencias');
                   if(cantidad<=existencias){
                        var id = selected.val();
                        var price = selected.attr('data-price');
                        var subtotal = parseInt(cantidad) * parseInt(price);
                        var inputs = $('<input type="hidden" name="vistadetalle['+d.getTime()+'][id]" value="'+id+'"><input type="hidden" name="vistadetalle['+d.getTime()+'][type]" value="'+type+'"><input type="hidden" name="vistadetalle['+d.getTime()+'][price]" value="'+price+'"><input type="hidden" name="vistadetalle['+d.getTime()+'][cantidad]" value="'+cantidad+'"><input type="hidden" name="vistadetalle['+d.getTime()+'][subtotal]" value="'+subtotal+'">');
                        var inputs2 = $('<input type="hidden" name="vistadetallepay['+d.getTime()+'][id]" value="'+id+'"><input type="hidden" name="vistadetallepay['+d.getTime()+'][type]" value="'+type+'"><input type="hidden" name="vistadetallepay['+d.getTime()+'][price]" value="'+price+'"><input type="hidden" name="vistadetallepay['+d.getTime()+'][cantidad]" value="'+cantidad+'"><input type="hidden" name="vistadetallepay['+d.getTime()+'][subtotal]" value="'+subtotal+'">');
                        var opciones = $('<td><a href="javascript:void(0)">Eliminar</a></td>');
                        opciones.find('a').on('click',deleteProduct);


                        //Nuestra row del modal principal
                        
                        var tr = $('<tr>');
                        tr.append(inputs);
                        tr.append('<td>'+cantidad+'</td>');
                        tr.append('<td>'+item+'</td>');
                        tr.append(opciones);
                        tr.append('<td>'+accounting.formatMoney(subtotal)+'</td>');
                        $container.find('table#visita_detalles tbody').append(tr);
                        
                        
                        //Nuestra row de la pantalla de pago
                        var tr2 = $('<tr>');
                        tr2.append(inputs2);
                        tr2.append('<td>'+cantidad+'</td>');
                        tr2.append('<td>'+item+'</td>');
                        tr2.append('<td>'+accounting.formatMoney(subtotal)+'</td>');
                        $payContainer.find('table#pay_details tbody').append(tr2);
                        
                        
                        //Calculamos el total
                        var total = 0;
                        
                        $.each($container.find('#visita_container table#visita_detalles tbody tr'),function(){
                            var subtotal = accounting.unformat($(this).find('td').eq(3).text());
                            total += subtotal;
                        });
                        $container.find('input[name=visita_total]').val(total);
                        $container.find('#total').text(accounting.formatMoney(total));


                        selected.addClass('hide');
                        $('#addproduct_container input,#addproduct_container select').val('');
                   }else{
                       $container.find('input[name=visitadetalle_cantidad]').addClass('input-error');
                       alert('La cantidad debe de ser menor o igual al numero de existencias');
                   }
               }
               else if(type == 'servicio'){
                    //$container.find('input[name=visitadetalle_cantidad]').closest('div').hide();
                    var data_dependencia = selected.attr('data-dependencia');
                    if(data_dependencia == 'membresia'){
                        var error = false;
                        var serviciosdisponibles = parseInt($container.find('#pacientemembresia_serviciosdisponibles').text());
                        if(cantidad > serviciosdisponibles){
                          error = true;
                          alert('Sin servicios disponibles en la membresia');
                        } else {
                            var id = selected.val();
                            var price = selected.attr('data-price');
                            var subtotal = parseInt(cantidad) * parseInt(price);
                            var inputs = $('<input type="hidden" name="vistadetalle[' + d.getTime() + '][id]" value="' + id + '"><input type="hidden" name="vistadetalle[' + d.getTime() + '][type]" value="' + type + '"><input type="hidden" name="vistadetalle[' + d.getTime() + '][price]" value="' + price + '"><input type="hidden" name="vistadetalle[' + d.getTime() + '][cantidad]" value="' + cantidad + '"><input type="hidden" name="vistadetalle[' + d.getTime() + '][subtotal]" value="' + subtotal + '">');
                            var inputs2 = $('<input type="hidden" name="vistadetallepay[' + d.getTime() + '][id]" value="' + id + '"><input type="hidden" name="vistadetallepay[' + d.getTime() + '][type]" value="' + type + '"><input type="hidden" name="vistadetallepay[' + d.getTime() + '][price]" value="' + price + '"><input type="hidden" name="vistadetallepay[' + d.getTime() + '][cantidad]" value="' + cantidad + '"><input type="hidden" name="vistadetallepay[' + d.getTime() + '][subtotal]" value="' + subtotal + '">');
                            var opciones = $('<td><a href="javascript:void(0)">Eliminar</a></td>');
                            opciones.find('a').on('click', deleteProduct);

                            //Nuestra row
                            var tr = $('<tr>').attr('depenencia', 'membresia');
                            tr.append(inputs);
                            tr.append('<td>' + cantidad + '</td>');
                            tr.append('<td>' + item + '</td>');
                            tr.append(opciones);
                            tr.append('<td>' + accounting.formatMoney(subtotal) + '</td>');
                            $container.find('table#visita_detalles tbody').append(tr);

                            //Nuestra row de la pantalla de pago
                            var tr2 = $('<tr>').attr('depenencia', 'membresia');
                            tr2.append(inputs2);
                            tr2.append('<td>' + cantidad + '</td>');
                            tr2.append('<td>' + item + '</td>');
                            tr2.append('<td>' + accounting.formatMoney(subtotal) + '</td>');
                            $payContainer.find('table#pay_details tbody').append(tr2);


                            //Calculamos el total
                            var total = 0;
                            $.each($container.find('#visita_container table#visita_detalles tbody tr'), function () {
                                var subtotal = accounting.unformat($(this).find('td').eq(3).text());
                                total += subtotal;
                            });
                            $container.find('input[name=visita_total]').val(total);
                            $container.find('#total').text(accounting.formatMoney(total));


                            selected.addClass('hide');
                            $('#addproduct_container input,#addproduct_container select').val('');
                        }
                    }
                    if(data_dependencia == 'cupon'){
                        var error = false;
                        var folio = prompt("Folio de la membresia");
                        var idpaciente = $container.find('input[name=idpaciente]').val();
                        if(folio !== null){
                            //La peticion ajax
                            $.ajax({
                                url:'/validarmembresia',
                                data:{folio:folio,cantidad:cantidad,idpaciente:idpaciente},
                                dataType:'json',
                                success:function (data){
                                   if(data.response){
                                        var id = selected.val();
                                        var price = selected.attr('data-price');
                                        var subtotal = parseInt(cantidad) * parseInt(price);
                                        var inputs = $('<input type="hidden" name="vistadetalle['+d.getTime()+'][id]" value="'+id+'"><input type="hidden" name="vistadetalle['+d.getTime()+'][type]" value="'+type+'"><input type="hidden" name="vistadetalle['+d.getTime()+'][price]" value="'+price+'"><input type="hidden" name="vistadetalle['+d.getTime()+'][cantidad]" value="'+cantidad+'"><input type="hidden" name="vistadetalle['+d.getTime()+'][subtotal]" value="'+subtotal+'"><input type="hidden" name="vistadetalle['+d.getTime()+'][idpacientemembresia]" value="'+data.idpacientemembresia+'">');
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


                                        selected.addClass('hide');
                                        $('#addproduct_container input,#addproduct_container select').val('');
                                   }else{
                                        error = true;
                                        alert(data.msg);
                                        
                                   }
                                }
                            });
                        }else{
                            error = true;
                        }
                    }
                    
                    if(data_dependencia == 'ninguno'){
                    
                        var id = selected.val();
                        var price = selected.attr('data-price');
                        var subtotal = parseInt(cantidad) * parseInt(price);
                       var inputs = $('<input type="hidden" name="vistadetalle['+d.getTime()+'][id]" value="'+id+'"><input type="hidden" name="vistadetalle['+d.getTime()+'][type]" value="'+type+'"><input type="hidden" name="vistadetalle['+d.getTime()+'][price]" value="'+price+'"><input type="hidden" name="vistadetalle['+d.getTime()+'][cantidad]" value="'+cantidad+'"><input type="hidden" name="vistadetalle['+d.getTime()+'][subtotal]" value="'+subtotal+'">');
                       var inputs2 = $('<input type="hidden" name="vistadetallepay['+d.getTime()+'][id]" value="'+id+'"><input type="hidden" name="vistadetallepay['+d.getTime()+'][type]" value="'+type+'"><input type="hidden" name="vistadetallepay['+d.getTime()+'][price]" value="'+price+'"><input type="hidden" name="vistadetallepay['+d.getTime()+'][cantidad]" value="'+cantidad+'"><input type="hidden" name="vistadetallepay['+d.getTime()+'][subtotal]" value="'+subtotal+'">'); 
                       var opciones = $('<td><a href="javascript:void(0)">Eliminar</a></td>');
                        opciones.find('a').on('click',deleteProduct);

                        //Nuestra row
                        var tr = $('<tr>').attr('depenencia','membresia');
                        tr.append(inputs);
                        tr.append('<td>'+cantidad+'</td>');
                        tr.append('<td>'+item+'</td>');
                        tr.append(opciones);
                        tr.append('<td>'+accounting.formatMoney(subtotal)+'</td>');
                        $container.find('table#visita_detalles tbody').append(tr);
                        
                        //Nuestra row de la pantalla de pago
                        var tr2 = $('<tr>').attr('depenencia','membresia');
                        tr2.append(inputs2);
                        tr2.append('<td>'+cantidad+'</td>');
                        tr2.append('<td>'+item+'</td>');
                        tr2.append('<td>'+accounting.formatMoney(subtotal)+'</td>');
                        $payContainer.find('table#pay_details tbody').append(tr2);
                        
                        
                        //Calculamos el total
                        var total = 0;
                        $.each($container.find('#visita_container table#visita_detalles tbody tr'),function(){
                            var subtotal = accounting.unformat($(this).find('td').eq(3).text());
                            total += subtotal;
                        });
                        $container.find('input[name=visita_total]').val(total);
                        $container.find('#total').text(accounting.formatMoney(total));


                        selected.addClass('hide');
                        $('#addproduct_container input,#addproduct_container select').val('');
                    }
               }
               else{
                   //$container.find('input[name=visitadetalle_cantidad]').closest('div').hide();
                   var idmembresia = selected.val();
                   var idclinica = container.find('input[name=idclinica]').val();
                   //Obtenemos los servicios de la membresia seleccionada y los insertamos en nuestro select de productos/servicios
                   
                   $('select#visitadetalle_tipo option[data-dependencia=membresia]').remove();
                   
                   $.ajax({
                      dataType:'json',
                      url:'/getserviciosbymembresia',
                      data:{idmembresia:idmembresia,idclinica:idclinica},
                      success:function(data){
       
                        var $opt_servicios = $('select#visitadetalle_tipo optgroup[label=Servicios]');
                        $.each(data,function(){
                            var $option = $('<option>',{'data-dependencia':'membresia','data-available':this.disponible,'data-name':this.servicio_nombre, 'data-price':this.servicioclinica_precio,'data-type':'servicio','value':this.idservicioclinica}).text(this.servicio_nombre);

                            $opt_servicios.append($option);
                        });
                        formatoCatalogo();
                      }
                   });
                   
                    var id = selected.val();
                    var price = selected.attr('data-price');
                    var subtotal = parseInt(cantidad) * parseInt(price);
                    var inputs = $('<input type="hidden" name="vistadetalle['+d.getTime()+'][id]" value="'+id+'"><input type="hidden" name="vistadetalle['+d.getTime()+'][type]" value="'+type+'"><input type="hidden" name="vistadetalle['+d.getTime()+'][price]" value="'+price+'"><input type="hidden" name="vistadetalle['+d.getTime()+'][cantidad]" value="'+cantidad+'"><input type="hidden" name="vistadetalle['+d.getTime()+'][subtotal]" value="'+subtotal+'">');
                    var inputs2 = $('<input type="hidden" name="vistadetallepay['+d.getTime()+'][id]" value="'+id+'"><input type="hidden" name="vistadetallepay['+d.getTime()+'][type]" value="'+type+'"><input type="hidden" name="vistadetallepay['+d.getTime()+'][price]" value="'+price+'"><input type="hidden" name="vistadetallepay['+d.getTime()+'][cantidad]" value="'+cantidad+'"><input type="hidden" name="vistadetallepay['+d.getTime()+'][subtotal]" value="'+subtotal+'">');
                    
                    var opciones = $('<td><a href="javascript:void(0)">Eliminar</a></td>');
                    opciones.find('a').on('click',deleteProduct);

                    //Nuestra row de modal principal
                    var tr = $('<tr>');
                    tr.append(inputs);
                    tr.append('<td>'+cantidad+'</td>');
                    tr.append('<td>'+item+'</td>');
                    tr.append(opciones);
                    tr.append('<td>'+accounting.formatMoney(subtotal)+'</td>');
                    $container.find('table#visita_detalles tbody').append(tr);
                    
                    //Nuestra row de la pantalla de pago
                    
                    var tr2 = $('<tr>');
                    tr2.append(inputs2);
                    tr2.append('<td>'+cantidad+'</td>');
                    tr2.append('<td>'+item+'</td>');
                    tr2.append('<td><input type="text" name="vistadetallepay['+d.getTime()+'][folio]" required="" style="cursor: auto;"></td>');
                    tr2.append('<td>'+accounting.formatMoney(subtotal)+'</td>');
                    
                   //Contamos el numero de columnas de nuestra tabla de pago
                   if($payContainer.find('table#pay_details thead th').length == 3){
                        $payContainer.find('table#pay_details thead th').eq(1).after('<th>Folio</th>');
                        $payContainer.find('table#pay_details tbody tr').each(function(){
                            $(this).find('td').eq(1).after('<td></td>');
                        });
                        $payContainer.find('table#pay_details tfoot tr td').eq(0).after('<td></td>');
                        $payContainer.find('table#pay_details tbody').append(tr2);
                   }else{
                        $payContainer.find('table#pay_details tbody').append(tr2);
                   }
                   
                   
                   //
                   
                   
                   
                   
//                   <tr>
//<input type="hidden" name="vistadetallepay[2][price]" value="2200.00" style="cursor: auto;">
//<input type="hidden" name="vistadetallepay[2][subtotal]" value="2200.00" style="cursor: auto;">
//<input type="hidden" name="vistadetallepay[2][id]" value="1" style="cursor: auto;">
//<input type="hidden" name="vistadetallepay[2][cantidad]" value="1.00" style="cursor: auto;">
//<input type="hidden" name="vistadetallepay[2][type]" value="membresia" style="cursor: auto;">
//<td>1</td>
//<td>Membresía anual</td>
//<td>
//<input type="text" name="vistadetallepay[2][folio]" required="" style="cursor: auto;">
//</td>
//<td class="visitadetalle_subtotal">$ 2,200.00</td>
//</tr>
//     
//
//
//<tr>
//<input type="hidden" value="1" name="vistadetallepay[2][id]">
//<input type="hidden" value="membresia" name="vistadetallepay[2][type]">
//<input type="hidden" value="2200.00" name="vistadetallepay[2][price]">
//<input type="hidden" value="1" name="vistadetallepay[2][cantidad]">
//<input type="hidden" value="2200" name="vistadetallepay[2][subtotal]">
//<td>1</td>
//<td>Membresía anual</td>
//<td>
//<input class="input-error" type="text" style="cursor: auto;" required="" name="vistadetallepay[2][folio]">
//</td>
//<td>$ 2,200.00</td>
//</tr>
                   
                   
                    

                    //Calculamos el total
                    var total = 0;
                    $.each($container.find('#visita_container table#visita_detalles tbody tr'),function(){
                        var subtotal = accounting.unformat($(this).find('td').eq(3).text());
                        total += subtotal;
                    });
                    $container.find('input[name=visita_total]').val(total);
                    $container.find('#total').text(accounting.formatMoney(total));


                    selected.addClass('hide');
                    $('#addproduct_container input,#addproduct_container select').val('');

               }
               
               $container.find('input[name=visitadetalle_cantidad]').val(1);

           }
       }
       /*
        * Public methods
        */
        
        plugin.init = function(){
            
            settings = plugin.settings = $.extend({}, defaults, options);
                   
            formatoCatalogo(); //Damos formato al catalogo 

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
                    $container.find('#visita_comentario').text(item.visita_comentario);
                    $container.find('button[btn-action=open_relacionados_container]').removeClass('btn-disabled');
                    $container.find('button[btn-action=open_relacionados_container]').prop('disabled',false);
                    showRelacionados(item.relacionados);
                    
                    if(item.membresia != null){
                        $container.find('#membresia_nombre').text(item.membresia.membresia_nombre);
                        $container.find('#pacientemembresia_serviciosdisponibles').text(item.membresia.pacientemembresia_serviciosdisponibles);
                        $container.find('#pacientemembresia_cuponesdisponibles').text(item.membresia.pacientemembresia_cuponesdisponibles);
                        $container.find('#paciente_membresia_container').slideDown();
                        
                        $('select#visitadetalle_tipo option[data-dependencia=membresia]').remove();

                        $.ajax({
                            dataType: 'json',
                            url: '/getserviciosbymembresia',
                            data: {idmembresia: 1, idclinica: 2},
                            success: function (data) {

                                var $opt_servicios = $('select#visitadetalle_tipo optgroup[label=Servicios]');
                                $.each(data, function () {
                                    var $option = $('<option>', {'data-dependencia': 'membresia', 'data-available': this.disponible, 'data-name': this.servicio_nombre, 'data-price': this.servicioclinica_precio, 'data-type': 'servicio', 'value': this.idservicioclinica}).text(this.servicio_nombre);

                                    $opt_servicios.append($option);
                                });
                                formatoCatalogo();
                            }
                        });

                    }
                    
                },
                onDelete:function(item){
                    $container.find('input[name=idpaciente]').val('');
                    $container.find('#visita_total').text('');
                    $container.find('#visita_ultima').text('');
                    $container.find('button[btn-action=open_relacionados_container]').addClass('btn-disabled');
                    $container.find('button[btn-action=open_relacionados_container]').prop('disabled',true);
                    $container.find('#relacionados_container tbody tr').remove();
                    closeRelacionadosContainer();
                    
                    $container.find('#paciente_membresia_container').slideUp();
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
            $container.find('input[name=paciente_celular_confirmar],input[name=paciente_celular]').bind("cut copy paste",function(e) {
                e.preventDefault();
            });
            
            //Relacionado paciente
            $container.find('button[btn-action=open_relacionados_container]').on('click',openRelacionadosContainer);
            $container.find('.relacionados_close').on('click',closeRelacionadosContainer);
            $container.find('[btn-action=submit_relacionados]').on('click',submitRelacionados);
            
            //El evento de agregar productos servicios
            
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
                 $container.find('input[name=paciente_autocomplete]').tokenInput('add',{id:settings.paciente.idpaciente,visita_total:settings.paciente.visita_total,visita_ultima:settings.paciente.visita_ultima,relacionados:settings.paciente.relacionados,name:settings.paciente.paciente_nombre + ' - Celular: ' + settings.paciente.paciente_celular + ' - Telefono: ' + telefono,membresia:settings.paciente.membresia});
            }
            
            $container.find('#visitadetalle_tipo').on('change',function(){
                var selected = $('#visitadetalle_tipo option:selected');
                var item = selected.attr('data-name');
                var type = selected.attr('data-type');
                
                if(type == 'producto'){
                    $container.find('input[name=visitadetalle_cantidad]').closest('div').show();
                }else{
                    $container.find('input[name=visitadetalle_cantidad]').val(1);
                    $container.find('input[name=visitadetalle_cantidad]').closest('div').hide();
                }
                console.log(type);
            });
            
            $container.find('input[name=visita_tipo]').on('change',function(e){
                if($(this).val() == 'consulta'){
                    var r = confirm("¿Segura que es consulta?");
                    if (r == false) {

                        $container.find('input[name=visita_tipo][value=consulta]').prop('checked',false);
                        $container.find('input[name=visita_tipo][value=servicio]').prop('checked',true);
                    }
                }
            });
            
           

        }


        /*
        * Plugin initializing
        */
        
        plugin.init();
       
    }
    
    
    
})( jQuery );