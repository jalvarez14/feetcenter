(function( $ ){
    
   
   /*
    * Handle input. Call public functions and initializers
    */
   
    $.fn.egresos = function(data){
        var _this = $(this);
        var plugin = _this.data('egresos');
        
        /*Inicializado ?*/
        if (!plugin) {
            
            egresos = new $.egresos(this, data);
            
            _this.data('egresos', plugin);
            
            return plugin;
        /*Si ya fue inizializado regresamos el plugin*/    
        }else{
            return plugin; 
        }
        
    };
    
    /*
    * Plugin Constructor
    */
   
    $.egresos = function(container, options){
        
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
       
       var filterByDate = function(from,to){
           
           var clinicas_select =   $("select[name=clinica_filter]").multipleSelect('getSelects');
           var conceptos_select =  $("select[name=concepto_filter]").multipleSelect('getSelects');
           
           //Hacemos la peticion ajax
           $.ajax({
                url:'/egresos/filterbydate',
                dataType: 'json',
                method:'POST',
                 data:{clinicas:clinicas_select,conceptos:conceptos_select,from:from,to:to},
                success:function(data){
                    $table.clear();
                    if(data.result.length > 0){
                        //Agregamos los nuevos registros
                        $.each(data.result,function(){
                            var rowNode = $table.row.add( [
                            this.egresoclinica_fechaegreso,
                            this.clinica_nombre,
                            this.empleado_nombre,
                            this.concepto_nombre,
                            accounting.formatMoney(this.egresoclinica_cantidad),
                            accounting.formatMoney(this.egresoclinica_iva),
                            this.egresoclinica_nota,
                            this.egresoclinica_comprobante,
                            //Las opciones
                            '<td class="tr_options"><a href="/egresos/editar/'+this.idegresoclinica+'">Editar</a><a class="delete-modal" href="javascript:void(0)" data-tools="modal" data-width="700" data-title="<h2>Advertencia</h2>" data-content="/egresos/eliminar?html=true" >Eliminar</a></td>'
                        ]).draw().node();
                         $(rowNode).attr('id',this.idegresoclinica);
                            //Comprobante
                            if(this.egresoclinica_comprobante != null){
                                var src =  $(rowNode).find('td').eq(7).text();
                                $(rowNode).find('td').eq(7).html('<a class="fancybox" href="'+src+'"><img src="/img/icons/img_icon.png"></a>');
                                 $(".fancybox").unbind();  $(".fancybox").fancybox();
                            }else{
                                $(rowNode).find('td').eq(7).html('N/D');
                            }
                            //lAS NOTAS 
                            if(this.egresoclinica_nota != null){
                                var id = $(rowNode).attr('id');
                                $(rowNode).find('td').eq(6).html('<a class="ver_nota" data-content="/egresos/vernota?id='+id+'" data-tools="modal" data-width="700" data-title="<h2>Egreso #'+id+'" href="javascript:void(0)"><img src="/img/icons/note_icon.png"></a>');
                                $(rowNode).find('td').eq(6).find('a').modal();
                                $(rowNode).find('td').eq(6).find('a').on('loading.tools.modal', function(modal){
                                    var $modalHeader = this.$modalHeader;
                                    $modalHeader.remove();
                                    var $modalBody = this.$modalBody;
                                    $modalBody.css('background','#F5D65B');
                                });

                            }else{  
                                 $(rowNode).find('td').eq(6).html('N/D');
                            }
                             //Las opciones 
                            $(rowNode).find('td').last().addClass('tr_options');
                            $(rowNode).find('td').last().find('a.delete-modal').modal();
                            $(rowNode).find('td').last().find('a.delete-modal').on('loading.tools.modal', function(modal){
                                var $modalHeader = this.$modalHeader;
                                $modalHeader.addClass('modal_header_warning');
                                var id = this.$element.closest('tr').attr('id');
                                var $modal = this ;

                                this.createCancelButton('Cancelar');

                                var buttonDelete = this.createDeleteButton('Eliminar');

                                buttonDelete.on('click', $.proxy(function()
                                {
                                    //Hacemos la peticion ajax
                                    $.ajax({
                                        url:'/egresos/eliminar/'+id,
                                        dataType: 'json',
                                        method:'POST',
                                        success: function(data){
                                            if(data.response){
                                                $modal.close();
                                                window.location.replace('egresos');
                                            }
                                        }
                                    });


                                }, this));
                            });


                        });
                    }
                    $table.draw();
                }
            });
           
       }
       
       var filter = function(){
           
           var clinicas_select =   $("select[name=clinica_filter]").multipleSelect('getSelects');
           var conceptos_select =  $("select[name=concepto_filter]").multipleSelect('getSelects');
           
           //Hacemos la peticion ajax
            $.ajax({
                url:'/egresos/filter',
                dataType: 'json',
                method:'POST',
                data:{clinicas:clinicas_select,conceptos:conceptos_select},
                success: function(data){       
                    $table.clear();
                    if(data.result.length > 0){
                        //Agregamos los nuevos registros
                        $.each(data.result,function(){
                            var rowNode = $table.row.add( [
                            this.egresoclinica_fechaegreso,
                            this.clinica_nombre,
                            this.empleado_nombre,
                            this.concepto_nombre,
                            accounting.formatMoney(this.egresoclinica_cantidad),
                            accounting.formatMoney(this.egresoclinica_iva),
                            this.egresoclinica_nota,
                            this.egresoclinica_comprobante,
                            //Las opciones
                            '<td class="tr_options"><a href="/egresos/editar/'+this.idegresoclinica+'">Editar</a><a class="delete-modal" href="javascript:void(0)" data-tools="modal" data-width="700" data-title="<h2>Advertencia</h2>" data-content="/egresos/eliminar?html=true" >Eliminar</a></td>'
                        ]).draw().node();
                         $(rowNode).attr('id',this.idegresoclinica);
                            //Comprobante
                            if(this.egresoclinica_comprobante != null){
                                var src =  $(rowNode).find('td').eq(7).text();
                                $(rowNode).find('td').eq(7).html('<a class="fancybox" href="'+src+'"><img src="/img/icons/img_icon.png"></a>');
                                 $(".fancybox").unbind();  $(".fancybox").fancybox();
                            }else{
                                $(rowNode).find('td').eq(7).html('N/D');
                            }
                            //lAS NOTAS 
                            if(this.egresoclinica_nota != null){
                                var id = $(rowNode).attr('id');
                                $(rowNode).find('td').eq(6).html('<a class="ver_nota" data-content="/egresos/vernota?id='+id+'" data-tools="modal" data-width="700" data-title="<h2>Egreso #'+id+'" href="javascript:void(0)"><img src="/img/icons/note_icon.png"></a>');
                                $(rowNode).find('td').eq(6).find('a').modal();
                                $(rowNode).find('td').eq(6).find('a').on('loading.tools.modal', function(modal){
                                    var $modalHeader = this.$modalHeader;
                                    $modalHeader.remove();
                                    var $modalBody = this.$modalBody;
                                    $modalBody.css('background','#F5D65B');
                                });

                            }else{  
                                 $(rowNode).find('td').eq(6).html('N/D');
                            }
                             //Las opciones 
                            $(rowNode).find('td').last().addClass('tr_options');
                            $(rowNode).find('td').last().find('a.delete-modal').modal();
                            $(rowNode).find('td').last().find('a.delete-modal').on('loading.tools.modal', function(modal){
                                var $modalHeader = this.$modalHeader;
                                $modalHeader.addClass('modal_header_warning');
                                var id = this.$element.closest('tr').attr('id');
                                var $modal = this ;

                                this.createCancelButton('Cancelar');

                                var buttonDelete = this.createDeleteButton('Eliminar');

                                buttonDelete.on('click', $.proxy(function()
                                {
                                    //Hacemos la peticion ajax
                                    $.ajax({
                                        url:'/egresos/eliminar/'+id,
                                        dataType: 'json',
                                        method:'POST',
                                        success: function(data){
                                            if(data.response){
                                                $modal.close();
                                                window.location.replace('egresos');
                                            }
                                        }
                                    });


                                }, this));
                            });


                        });
                    }
                    $table.draw();
                    
                    
                }
            });
           

       }
       
       
       var deleteModal = function(modal){
            var $modalHeader = modal.$modalHeader;
            $modalHeader.addClass('modal_header_warning');
            
            var id = modal.$element.closest('tr').attr('id');
            
            modal.createCancelButton('Cancelar');
            var buttonDelete = modal.createDeleteButton('Eliminar');
            
            buttonDelete.on('click', $.proxy(function()
            {
                //Hacemos la peticion ajax
                $.ajax({
                    url:'/egresos/eliminar/'+id,
                    dataType: 'json',
                    method:'POST',
                    success: function(data){
                        if(data.response){
                            modal.close();
                            window.location.replace('/egresos');
                        }
                    }
                });


            }, this));
       }
       
       var verNota = function(modal){
           var $modalHeader = modal.$modalHeader;
            $modalHeader.remove();
            var $modalBody = modal.$modalBody;
            $modalBody.css('background','#F5D65B');
       }

       
       /*
        * Public methods
        */
        
        plugin.init = function(){
            
            settings = plugin.settings = $.extend({}, defaults, options);
            
            $.ajax({
                url: '/json/lang_es_datatable.json',
                dataType: 'json',
                async:false,
                success: function(data){
                    $table = container.find('table').DataTable({
                        language:data,
                    });

                }
            });
          
            //Inicializamos nuestro multiple select
            $container.find("select[name=clinica_filter]").multipleSelect({
                allSelected:'Todas las clinicas',
                selectAllText:'Todas las clinicas',
                onClick : filter,
                onCheckAll:filter,
                onUncheckAll:filter,
            });
            
            $container.find("select[name=concepto_filter]").multipleSelect({
                allSelected:'Todos los conceptos',
                selectAllText:'Todos los conceptos',
                onClick : filter,
                onCheckAll:filter,
                onUncheckAll:filter,
            });
            
            $container.find("select[name=concepto_filter]").multipleSelect("checkAll");
            
            filter();
            
            //Inicializamos nuestros calendarios del filtro de fechas
            var pickdateFrom = $container.find('input[name=egreso_from]').pickadate({
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
                selectYears: true,
                selectMonths: true,
                selectYears: 25,
            });
            
            //Inicializamos nuestros calendarios del filtro de fechas
            var pickdateTo= $container.find('input[name=egreso_to]').pickadate({
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
                selectYears: true,
                selectMonths: true,
                selectYears: 25,
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
                   var from = $container.find('input[name=egreso_from_submit]').val();
                   var to   = $container.find('input[name=egreso_to_submit]').val();
                   
                   filterByDate(from,to);

                }
                
                
            });
            
            
            
        }

        /*
        * Plugin initializing
        */
        
        plugin.init();
       
    }
    
    
    
})( jQuery );