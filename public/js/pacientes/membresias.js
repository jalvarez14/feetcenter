(function( $ ){
    
   
   /*
    * Handle input. Call public functions and initializers
    */
   
    $.fn.membresias = function(data){
        var _this = $(this);
        var plugin = _this.data('membresias');
        
        /*Inicializado ?*/
        if (!plugin) {
            
            plugin = new $.membresias(this, data);
            
            _this.data('membresias', plugin);
            
            return plugin;
        /*Si ya fue inizializado regresamos el plugin*/    
        }else{
            return plugin;
        }
        
    };
    
    /*
    * Plugin Constructor
    */
   
    $.membresias = function(container, options){
        
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
        var $table;
        /*
        * Private methods
        */
       
       
       var filter = function(){
           
           var clinicas_select = $container.find("select[name=idclinica]").multipleSelect('getSelects');
           var estatus_select = $container.find("select[name=pacientemembresia_estatus]").multipleSelect('getSelects');
           

           $container.find('table.table-membresias tbody tr').remove();

           if(typeof $table != 'undefined'){
                $table.clear();
                $table.destroy();
            }
           
           $.ajax({
               method:'POST',
               dataType:'json',
               url:'/pacientes/membresias/filter',
               async:false,
               data:{clinicas:clinicas_select,status:estatus_select},
               success:function(data){
                   
                   var max_servicios = $container.find('.table-membresias th#servicios .unit-custom').length;
                   var max_cupones = $container.find('.table-membresias th#cupones .unit-custom').length;
                   
                   $.each(data,function(){
                       
                        var tr = $('<tr>');
                        
                        //Los datos generales
                        tr.append('<td>'+this.paciente_nombre+'</td>');
                        tr.append('<td>'+this.clinica_nombre+'</td>');
                        tr.append('<td>'+this.pacientemembresia_folio+'</td>');
                        tr.append('<td>'+this.pacientemembresia_estatus+'</td>');
                        
                        
                        //El esqueleto(No aplica)
                       var td = $('<td>',{id:'servicios'});
                       td.append('<div class="units-row" style="margin-bottom: 0px;">');
                       for(var i=0;i<max_servicios;i++){
                            td.find('.units-row').append('<div style="width:'+settings.width_servicios+'%" class="unit-custom no_aplica">N/A</div>');
                       }
                       tr.append(td);
                       
                       //Los corresponfientes con el tipo de membresia
                       for(i=0;i<parseInt(this.membresia_servicios);i++){
                           td.find('.unit-custom').eq(i).removeClass('no_aplica').html('<span style="visibility:hidden">N/D</span>');
                       }
                       
                       var td = $('<td>',{id:'cupones'});
                       td.append('<div class="units-row" style="margin-bottom: 0px;">');
                       for(i=0;i<max_cupones;i++){
                            td.find('.units-row').append('<div style="width:'+settings.width_cupones+'%" class="unit-custom no_aplica">N/A</div>');
                       }
                       tr.append(td);
                       
                      
                       //Los corresponfientes con el tipo de membresia
                       for(i=0;i<parseInt(this.membresia_cupones);i++){
                           td.find('.unit-custom').eq(i).removeClass('no_aplica').html('<span style="visibility:hidden">N/D</span>');
                       }
                       
        
                        //Los detalles 
                        $.each(this.detalles,function(index){
                            
                            var date = moment(this.pacientemembresiadetalle_fecha,'MM/DD/YY');
                            if(this.tipo == 'membresia'){
                                var div = tr.find('td#servicios .units-row').find('div').not('.no_aplica').eq(0);
                                div.addClass('no_aplica');
                                div.css('color','black');
                                div.text(date.format('DD/MM'));
                                div.attr('title',date.format('DD/MM/YYYY'));
                            }else{
                                var div = tr.find('td#cupones .units-row').find('div').not('.no_aplica').eq(0);
                                div.addClass('no_aplica');
                                div.css('color','black');
                                div.html('<a data-width="800" data="modal" data-title="CUPON DETALLES" idpacientemembresiadetalle="'+this.idpacientemembresiadetalle+'" href="javascript:;">'+date.format('DD/MM')+'</a>');
                                div.attr('title',date.format('DD/MM/YYYY'));
                                
                                var data_content = 'get';
                                data_content += '?name=pacientemembresiadetalle';
                                data_content += '&data[id]='+this.idpacientemembresiadetalle;
                                
                                div.find('a').attr('data-content',data_content);
                                var $modal = div.find('a').modal();
                                console.log('');
                               
                            }
                            return;
                        });

                        //Insertamos
                        $container.find('.table-membresias tbody').append(tr);

                   });
                   
                   
               }
           });
           //Datatable
            $.ajax({
                url: '/json/lang_es_datatable.json',
                dataType: 'json',
                async:false,
                success: function(data){
                    $table = container.find('.table-membresias').DataTable({
                        language:data,
                        ordering:  false,
                    });
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
 
            //Inicializamos nuestro multiple select
            $container.find("select[name=idclinica]").multipleSelect({
                onClick : filter,
                onCheckAll:filter,
            });
            
             $container.find("select[name=pacientemembresia_estatus]").multipleSelect({
                onClick : filter,
                onCheckAll:filter,
                
            });
   
            $container.find("select[name=idclinica]").multipleSelect("setSelects", [settings.session.idclinica]);
            $container.find("select[name=pacientemembresia_estatus]").multipleSelect("checkAll");
            
            filter();
            
        }

        /*
        * Plugin initializing
        */
        
        plugin.init();
       
    }
    
    
    
})( jQuery );