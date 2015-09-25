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
        
        /*
        * Private methods
        */
       
       var filter = function(){
           
           $.ajax({
                url: '/json/lang_es_datatable.json',
                dataType: 'json',
                async:false,
                success: function(data){
                    var $table = container.find('table').DataTable({
                        language:data,
                    });

                }
            });
           
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

                            }else{  
                                 $(rowNode).find('td').eq(6).html('N/D');
                            }
                             //Las opciones 
                            $(rowNode).find('td').last().addClass('tr_options');

                        });
                    }
                    $table.draw();
                    $table.on( 'draw', function () {
                        console.log('entro');
                    });
                    
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

//            //las notas
//            $('.ver_nota').unbind();        
//            $('.ver_nota').on('loading.tools.modal', function(modal){
//                verNota(this);
//            }); 
          
            //Inicializamos nuestro multiple select
            $container.find("select[name=clinica_filter]").multipleSelect({
                allSelected:'Todas las clinicas',
                selectAllText:'Todas las clinicas',
                onClick : filter,
                onCheckAll:filter,
                onUncheckAll:filter,
            });
            
            $container.find("select[name=concepto_filter]").multipleSelect({
                allSelected:'Todas las clinicas',
                selectAllText:'Todas las clinicas',
                onClick : filter,
                onCheckAll:filter,
                onUncheckAll:filter,
            });
            
            $container.find("select[name=concepto_filter]").multipleSelect("checkAll");
            
            
            
        }

        /*
        * Plugin initializing
        */
        
        plugin.init();
       
    }
    
    
    
})( jQuery );