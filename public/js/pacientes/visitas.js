(function( $ ){
    
   
   /*
    * Handle input. Call public functions and initializers
    */
   
    $.fn.visitas = function(data){
        var _this = $(this);
        var plugin = _this.data('visitas');
        
        /*Inicializado ?*/
        if (!plugin) {
            
            plugin = new $.visitas(this, data);
            
            _this.data('visitas', plugin);
            
            return plugin;
        /*Si ya fue inizializado regresamos el plugin*/    
        }else{
            return plugin;
        }
        
    };
    
    /*
    * Plugin Constructor
    */
   
    $.visitas = function(container, options){
        
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
        var  $table;
        
        /*
        * Private methods
        */
       
       var filter = function(){
           
            var clinicas_select =   $("select[name=idclinica]").multipleSelect('getSelects');
            var pedicuristas_select = $("select[name=idempleado]").multipleSelect('getSelects');
            var year = $("select[name=visita_year]").multipleSelect('getSelects');
            var months = $("select[name=visita_mes]").multipleSelect('getSelects');
            var order = $("select[name=visita_order]").multipleSelect('getSelects');
            
            $container.find('table.table-visitas thead tr').remove();

            $container.find('table.table-visitas tbody tr').remove();
            
            if(typeof $table != 'undefined'){
                $table.clear();
                $table.destroy();
            }

            $.ajax({
                url: '/json/lang_es_datatable.json',
                dataType: 'json',
                async:false,
                 success: function(data){
                      $table = container.find('table').DataTable({
                            serverSide: true,
                            language:data,
                            processing: true,
                            iDisplayLength:25,
                            order:[],
                            ordering:false,
                            ajax: {
                                url: '/pacientes/visitas/serverside',
                                type: 'POST',
                                data:{year:year,months:months,order:order,clinicas:clinicas_select,empleados:pedicuristas_select},
                            },
                            drawCallback: function( settings ) {
                                
                                $container.find('table.table-visitas thead tr').remove();

                                $container.find('table.table-visitas tbody tr').remove();
            
                                var data = settings.json.data;
                                
                                //Comenzamos con la la cabezera de los años
                                var thead1 = $('<tr id="years"><th></th><th></th><th></th><th></th></tr>');
                                var year_start = parseInt(settings.json.year_start);
                                for(var i=0; i<=settings.json.interval; i++){
                                    thead1.append('<th class="year">'+year_start+'</th>');
                                    year_start+=1;
                                }
                                
                                thead1.append('<th></th>');
                                $container.find('.table-visitas thead').append(thead1);
                                
                                //La segunda cabezera, por cada año vamos agregar los 12 dias del mes
                                var thead2 = $('<tr><th>Cliente</th><th>Celular</th><th>Clinica</th><th>Atendido por</th></tr>');
                                var years = $container.find('.table-visitas thead th.year').length;
                                for(var i=0; i<years; i++){

                                    var th = $('<th>').addClass('th_year');
                                    var unit_row = $('<div class="units-row"  style="margin-bottom: 0px;">').appendTo(th);
                                    unit_row.append('<div class="unit-month">Ene</div>');
                                    unit_row.append('<div class="unit-month">Feb</div>');
                                    unit_row.append('<div class="unit-month">Mar</div>');
                                    unit_row.append('<div class="unit-month">Abr</div>');
                                    unit_row.append('<div class="unit-month">May</div>');
                                    unit_row.append('<div class="unit-month">Jun</div>');
                                    unit_row.append('<div class="unit-month">Jul</div>');
                                    unit_row.append('<div class="unit-month">Ago</div>');
                                    unit_row.append('<div class="unit-month">Sep</div>');
                                    unit_row.append('<div class="unit-month">Oct</div>');
                                    unit_row.append('<div class="unit-month">Nov</div>');
                                    unit_row.append('<div class="unit-month">Dic</div>');

                                    thead2.append(th);
                                }
                                
                                thead2.append('<th>Totales</th>');
                                $container.find('.table-visitas thead').append(thead2);
                                
                                // El esqueleto
                                $.each(data,function(){
                                    
                                    //VALIDAMOS SI YA EXISTE UNA ROW CON EL CLIENTE
                                    var tr = $('<tr>');
                                    tr.attr('id',this.idpaciente);
                                    tr.append('<td>'+this.paciente_nombre+'</td>');
                                    tr.append('<td>'+this.paciente_celular+'</td>');
                                    tr.append('<td>'+this.clinica_nombre+'</td>');
                                    tr.append('<td>'+this.empleado_nombre+'</td>');
                                    
                                    year_start = parseInt(settings.json.year_start);
                                    
                                    for(var i=0; i<years; i++){

                                         var td = $('<td year="'+year_start+'">');
                                         var unit_row = $('<div class="units-row"  style="margin-bottom: 0px;">').appendTo(td);
                                         unit_row.append('<div month="1" class="unit-month">&nbsp;</div>');
                                         unit_row.append('<div month="2" class="unit-month">&nbsp;</div>');
                                         unit_row.append('<div month="3" class="unit-month">&nbsp;</div>');
                                         unit_row.append('<div month="4" class="unit-month">&nbsp;</div>');
                                         unit_row.append('<div month="5" class="unit-month">&nbsp;</div>');
                                         unit_row.append('<div month="6" class="unit-month">&nbsp;</div>');
                                         unit_row.append('<div month="7" class="unit-month">&nbsp;</div>');
                                         unit_row.append('<div month="8" class="unit-month">&nbsp;</div>');
                                         unit_row.append('<div month="9" class="unit-month">&nbsp;</div>');
                                         unit_row.append('<div month="10" class="unit-month">&nbsp;</div>');
                                         unit_row.append('<div month="11" class="unit-month">&nbsp;</div>');
                                         unit_row.append('<div month="12" class="unit-month">&nbsp;</div>');

                                        tr.append(td);
                                        year_start+=1;
                                     }
                                     tr.append('<td id="total">0</td>');

                                    $container.find('.table-visitas tbody').append(tr);

                                });
                                
                                                                    
                                    //Insertamos los datos
                                    $.each(data,function(){
                                        $.each(this.visitas,function(){
                               
                                            var date = moment(this.visita_fechainicio,'YYYY-MM-DD');
                                            var year = date.get('year');
                                            var month = date.get('month') +1 ;
                                            var day = date.format('DD');
                                            
                                             //Identificamos la fila
                                             var tr = $container.find('.table-visitas tbody tr#'+this.idpaciente);

                                            var td = tr.find('td[year='+year+']');
        
                                            //La columna (mes)
                                            var div = td.find('div[month='+month+']');
                                            
                                        if(div.text().length > 1){
                                            div.append('/'+day);
                                        }else{
                                             div.text(day);
                                        }

                                        //Sumamos a los totales
                                        var current = parseInt(tr.find('td#total').text());
                                        tr.find('td#total').text(current+1);
                                            
       
                                             
                                        });



                                    });
                                
                                console.log(settings);
                            }
                      });
                 }
            });
           
       }
      
       
       
       
//       var filter = function(){
//           
//           var clinicas_select = $container.find("select[name=idclinica]").multipleSelect('getSelects');
//           
//           $container.find('table.table-visitas thead tr').remove();
//           $container.find('table.table-visitas tbody tr').remove();
//           
//           if(typeof $table != 'undefined'){
//                $table.clear();
//                $table.destroy();
//            }
//            
//            $.ajax({
//               method:'POST',
//               dataType:'json',
//               url:'/pacientes/visitas/filter',
//               async:false,
//               data:{clinicas:clinicas_select},
//               success:function(data){
//                   
//                   //Comenzamos con la la cabezera de los años
//                   var thead1 = $('<tr id="years"><th></th><th></th><th></th></tr>');
//                   var year_start = parseInt(data.year_start);
//                   for(var i=0; i<=data.interval; i++){
//                       thead1.append('<th class="year">'+year_start+'</th>');
//                       year_start+=1;
//                   }
//                   thead1.append('<th></th>');
//                   $container.find('.table-visitas thead').append(thead1);
//                   
//                   
//                   //La segunda cabezera, por cada año vamos agregar los 12 dias del mes
//                   var thead2 = $('<tr><th>Cliente</th><th>Celular</th><th>Clinica</th></tr>');
//                   var years = $container.find('.table-visitas thead th.year').length;
//                   for(var i=0; i<years; i++){
//                       
//                       var th = $('<th>').addClass('th_year');
//                       var unit_row = $('<div class="units-row"  style="margin-bottom: 0px;">').appendTo(th);
//                       unit_row.append('<div class="unit-month">Ene</div>');
//                       unit_row.append('<div class="unit-month">Feb</div>');
//                       unit_row.append('<div class="unit-month">Mar</div>');
//                       unit_row.append('<div class="unit-month">Abr</div>');
//                       unit_row.append('<div class="unit-month">May</div>');
//                       unit_row.append('<div class="unit-month">Jun</div>');
//                       unit_row.append('<div class="unit-month">Jul</div>');
//                       unit_row.append('<div class="unit-month">Ago</div>');
//                       unit_row.append('<div class="unit-month">Sep</div>');
//                       unit_row.append('<div class="unit-month">Oct</div>');
//                       unit_row.append('<div class="unit-month">Nov</div>');
//                       unit_row.append('<div class="unit-month">Dic</div>');
//                       
//                       thead2.append(th);
//                   }
//                   thead2.append('<th>Totales</th>');
//                   $container.find('.table-visitas thead').append(thead2);
//                   
//                   //El esqueleto
//                   $.each(data.pacientes,function(){
//                       
//                       var tr = $('<tr>');
//                       tr.attr('id',this.idpaciente);
//                       tr.append('<td>'+this.paciente_nombre+'</td>');
//                       tr.append('<td>'+this.paciente_celular+'</td>');
//                       tr.append('<td>'+this.clinica_nombre+'</td>');
//                       
//                       year_start = parseInt(data.year_start);
//                       for(var i=0; i<years; i++){
//                            
//                            var td = $('<td year="'+year_start+'">');
//                            var unit_row = $('<div class="units-row"  style="margin-bottom: 0px;">').appendTo(td);
//                            unit_row.append('<div month="1" class="unit-month">&nbsp;</div>');
//                            unit_row.append('<div month="2" class="unit-month">&nbsp;</div>');
//                            unit_row.append('<div month="3" class="unit-month">&nbsp;</div>');
//                            unit_row.append('<div month="4" class="unit-month">&nbsp;</div>');
//                            unit_row.append('<div month="5" class="unit-month">&nbsp;</div>');
//                            unit_row.append('<div month="6" class="unit-month">&nbsp;</div>');
//                            unit_row.append('<div month="7" class="unit-month">&nbsp;</div>');
//                            unit_row.append('<div month="8" class="unit-month">&nbsp;</div>');
//                            unit_row.append('<div month="9" class="unit-month">&nbsp;</div>');
//                            unit_row.append('<div month="10" class="unit-month">&nbsp;</div>');
//                            unit_row.append('<div month="11" class="unit-month">&nbsp;</div>');
//                            unit_row.append('<div month="12" class="unit-month">&nbsp;</div>');
//
//                            tr.append(td);
//                            year_start+=1;
//                        }
//                        tr.append('<td id="total">0</td>');
//                       
//                       $container.find('.table-visitas tbody').append(tr);
//                       
//                   });
//                   
//                   //Insertamos los datos
//                   $.each(data.visitas,function(){
//                       
//                       var date = moment(this.visita_creadaen,'YYYY-MM-DD');
//                       var year = date.get('year');
//                       var month = date.get('month') +1 ;
//                       var day = date.format('DD');
// 
//                       //Identificamos la fila
//                       var tr = $container.find('.table-visitas tbody tr#'+this.idpaciente);
//                       //La columna (año)
//                       var td = tr.find('td[year='+year+']');
//                       //La columna (mes)
//                       var div = td.find('div[month='+month+']');
//                       
//                       if(div.text().length > 1){
//                           div.append('/'+day);
//                       }else{
//                            div.text(day);
//                       }
//                       
//                       //Sumamos a los totales
//                       var current = parseInt(tr.find('td#total').text());
//                       tr.find('td#total').text(current+1);
//                       
//
//                   });
//                   
//                   //Datatable
//                    $.ajax({
//                        url: '/json/lang_es_datatable.json',
//                        dataType: 'json',
//                        async:false,
//                        success: function(data){
//                            $table = container.find('.table-visitas').DataTable({
//                                language:data,
//                                ordering:  false,
//                            });
//                        }
//                    });
//                   
//                   
//               },
//            });
//       }
       
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
                onClick : filter,
                onCheckAll:filter,
            });
            
            //Inicializamos nuestro multiple select
            $container.find("select[name=idempleado]").multipleSelect({
                allSelected:'Todos los pedicuristas',
                selectAllText:'Todos los pedicuristas',
                onClick : filter,
                onCheckAll:filter,
                onUncheckAll:filter,
            });
            
            //Inicializamos nuestro multiple select
            $container.find("select[name=visita_year]").multipleSelect({
                allSelected:'Todos los años',
                selectAllText:'Todos los años',
                onClick : filter,
                onCheckAll:filter,
                onUncheckAll:filter,
            });
            
            //Inicializamos nuestro multiple select
            $container.find("select[name=visita_mes]").multipleSelect({
                allSelected:'Todos los meses',
                selectAllText:'Todos los meses',
                onClick : filter,
                onCheckAll:filter,
                onUncheckAll:filter,
            });
            
            //Inicializamos nuestro multiple select
            $container.find("select[name=visita_order]").multipleSelect({
                single:true,
                onClick : filter,
                onCheckAll:filter,
                onUncheckAll:filter,
            });
            
            $container.find("select[name=idclinica]").multipleSelect("setSelects", [settings.session.idclinica]);
            
            var empleados = new Array();
            $container.find("select[name=idempleado] option").each(function(){
                empleados.push($(this).val());
            });
            $container.find("select[name=idempleado]").multipleSelect("setSelects", empleados);
             
            var years = new Array();
            $container.find("select[name=visita_year] option").each(function(){
                years.push($(this).val());
            });
             $container.find("select[name=visita_year]").multipleSelect("setSelects", years);
             
             var months = new Array();
             $container.find("select[name=visita_mes] option").each(function(){
                months.push($(this).val());
            });
            $container.find("select[name=visita_mes]").multipleSelect("setSelects", months);

            $container.find("select[name=visita_order]").multipleSelect("setSelects",['asc']);
            filter();
        }

        /*
        * Plugin initializing
        */
        
        plugin.init();
       
    }
    
    
    
})( jQuery );