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
           
           var clinicas_select = $container.find("select[name=idclinica]").multipleSelect('getSelects');
           
           $container.find('table.table-visitas thead tr').remove();
           $container.find('table.table-visitas tbody tr').remove();
           
           if(typeof $table != 'undefined'){
                $table.clear();
                $table.destroy();
            }
            
            $.ajax({
               method:'POST',
               dataType:'json',
               url:'/pacientes/visitas/filter',
               async:false,
               data:{clinicas:clinicas_select},
               success:function(data){
                   
                   //Comenzamos con la la cabezera de los años
                   var thead1 = $('<tr id="years"><th></th><th></th><th></th></tr>');
                   var year_start = parseInt(data.year_start);
                   for(var i=0; i<=data.interval; i++){
                       thead1.append('<th class="year">'+year_start+'</th>');
                       year_start+=1;
                   }
                   thead1.append('<th></th>');
                   $container.find('.table-visitas thead').append(thead1);
                   
                   
                   //La segunda cabezera, por cada año vamos agregar los 12 dias del mes
                   var thead2 = $('<tr><th>Cliente</th><th>Celular</th><th>Clinica</th></tr>');
                   var years = $container.find('.table-visitas thead th.year').length;
                   for(var i=0; i<years; i++){
                       
                       var th = $('<th>');
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
                   
                   //El esqueleto
                   $.each(data.pacientes,function(){
                       
                       var tr = $('<tr>');
                       tr.attr('id',this.idpaciente);
                       tr.append('<td>'+this.paciente_nombre+'</td>');
                       tr.append('<td>'+this.paciente_celular+'</td>');
                       tr.append('<td>'+this.clinica_nombre+'</td>');
                       
                       year_start = parseInt(data.year_start);
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
                   $.each(data.visitas,function(){
                       
                       var date = moment(this.visita_creadaen,'YYYY-MM-DD');
                       var year = date.get('year');
                       var month = date.get('month') +1 ;
                       var day = date.format('DD');
 
                       //Identificamos la fila
                       var tr = $container.find('.table-visitas tbody tr#'+this.idpaciente);
                       //La columna (año)
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
                   
                   //Datatable
                    $.ajax({
                        url: '/json/lang_es_datatable.json',
                        dataType: 'json',
                        async:false,
                        success: function(data){
                            $table = container.find('.table-visitas').DataTable({
                                language:data,
                                ordering:  false,
                            });
                        }
                    });
                   
                   
               },
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
            
            //Inicializamos nuestro multiple select
            $container.find("select[name=idclinica]").multipleSelect({  
                onClick : filter,
                onCheckAll:filter,
            });
            
            $container.find("select[name=idclinica]").multipleSelect("setSelects", [settings.session.idclinica]);
            
            filter();
        }

        /*
        * Plugin initializing
        */
        
        plugin.init();
       
    }
    
    
    
})( jQuery );