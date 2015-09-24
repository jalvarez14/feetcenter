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
           
           var clinicas_select =   $("select[name=clinica_filter]").multipleSelect('getSelects');
           var conceptos_select =  $("select[name=concepto_filter]").multipleSelect('getSelects');
           
           //Hacemos la peticion ajax
            $.ajax({
                url:'/egresos/filter',
                dataType: 'json',
                method:'POST',
                data:{clinicas:clinicas_select,conceptos:conceptos_select},
                success: function(data){
                     var $table = $container.find('table').DataTable();
                     $table.clear();
                     $table.on( 'draw', function () {
                        $('[data-tools="modal"]').unbind();
                        $('[data-tools="modal"]').modal();
                        //deletemodal
                        $('.delete-modal').on('loading.tools.modal', function(modal){
                            deleteModal(this);
                        });
                        //las notas
                        $('.ver_nota').on('loading.tools.modal', function(modal){
                            verNota(this);
                        }); 
                        $container.find('table tr').each(function(){
                        var str =  $(this).find('td').eq(4).text();
                        $(this).find('td').eq(4).text(accounting.formatMoney(str));
                        var str =  $(this).find('td').eq(5).text();
                        $(this).find('td').eq(5).text(accounting.formatMoney(str));
                    });
                    //La imagen del comprobante
                    $container.find('table tr').each(function(){
                        var str =  $(this).find('td').eq(7).text();
                        if(str != ""){
                            $(this).find('td').eq(7).html('<a class="fancybox" href="'+str+'"><img src="/img/icons/img_icon.png"></a>');
                        }else{
                             $(this).find('td').eq(7).html("N/D");
                        }
                    });
            
                    //La imagen de las notas
                    $container.find('table tr').each(function(){
                        var str =  $(this).find('td').eq(6).text();
                        if(str != ""){
                             var id = $(this).closest('tr').attr('id');
                            $(this).find('td').eq(6).html('<a class="ver_nota" data-content="/egresos/vernota?id='+id+'" data-tools="modal" data-width="700" data-title="<h2>Egreso #'+id+'" href="javascript:void(0)"><img src="/img/icons/note_icon.png"></a>');
                        }else{
                             $(this).find('td').eq(6).html("N/D");
                        }
                    });
            
                    //las notas
                    $('.ver_nota').on('loading.tools.modal', function(modal){
                        verNota(this);
                    }); 
                    }); 
                    if(data.result.length > 0){
                        //Agregamos los nuevos registros
                        $.each(data.result,function(){
                            var rowNode = $table.row.add( [
                            this.egresoclinica_fechaegreso,
                            this.clinica_nombre,
                            this.empleado_nombre,
                            this.concepto_nombre,
                            this.egresoclinica_cantidad,
                            this.egresoclinica_iva,
                            this.egresoclinica_nota,
                            this.egresoclinica_comprobante,
                            '<td class="tr_options"><a href="/egresos/editar/'+this.idegresoclinica+'">Editar</a><a class="delete-modal" href="javascript:void(0)" data-tools="modal" data-width="700" data-title="<h2>Advertencia</h2>" data-content="/egresos/eliminar?html=true" >Eliminar</a></td>'
   
                        ]).draw().node();
                            $(rowNode).attr('id',this.idegresoclinica);
                            $(rowNode).find('td').last().addClass('tr_options');
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
            
            //Inicialozamos el deletemodal
            $('.delete-modal').on('loading.tools.modal', function(modal){
                deleteModal(this);
            });
            
            //FancyBox
            $(".fancybox").fancybox();
            
            //Inicializamos datatable
            $.ajax({
                url: '/json/lang_es_datatable.json',
                dataType: 'json',
                success: function(data){
                    var table = $container.find('table').DataTable({
                        language:data,
                    });
                    table.on( 'draw', function () {
                        $('[data-tools="modal"]').unbind();
                        $('[data-tools="modal"]').modal();
                        //deletemodal
                        $('.delete-modal').on('loading.tools.modal', function(modal){
                            deleteModal(this);
                        });
                        //las notas
                        $('.ver_nota').on('loading.tools.modal', function(modal){
                            verNota(this);
                        }); 
                    });
                }
            });
            

            

            $container.find('table tr').each(function(){
                var str =  $(this).find('td').eq(4).text();
                $(this).find('td').eq(4).text(accounting.formatMoney(str));
                var str =  $(this).find('td').eq(5).text();
                $(this).find('td').eq(5).text(accounting.formatMoney(str));

            });
            
            //La imagen del comprobante
            $container.find('table tr').each(function(){
                var str =  $(this).find('td').eq(7).text();
                if(str != ""){
                    $(this).find('td').eq(7).html('<a class="fancybox" href="'+str+'"><img src="/img/icons/img_icon.png"></a>');
                }else{
                     $(this).find('td').eq(7).html("N/D");
                }
            });
            
            //La imagen de las notas
            $container.find('table tr').each(function(){
                var str =  $(this).find('td').eq(6).text();
                if(str != ""){
                     var id = $(this).closest('tr').attr('id');
                    $(this).find('td').eq(6).html('<a class="ver_nota" data-content="/egresos/vernota?id='+id+'" data-tools="modal" data-width="700" data-title="<h2>Egreso #'+id+'" href="javascript:void(0)"><img src="/img/icons/note_icon.png"></a>');
                }else{
                     $(this).find('td').eq(6).html("N/D");
                }
            });
            
            //las notas
            $('.ver_nota').on('loading.tools.modal', function(modal){
                verNota(this);
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