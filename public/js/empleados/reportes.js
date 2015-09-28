(function( $ ){
    
   
   /*
    * Handle input. Call public functions and initializers
    */
   
    $.fn.reporteEmpleados = function(data){
        var _this = $(this);
        var plugin = _this.data('reporteEmpleados');
        
        /*Inicializado ?*/
        if (!plugin) {
            
            plugin = new $.reporteEmpleados(this, data);
            
            _this.data('reporteEmpleados', plugin);
            
            return plugin;
        /*Si ya fue inizializado regresamos el plugin*/    
        }else{
            return plugin;
        }
        
    };
    
    /*
    * Plugin Constructor
    */
   
    $.reporteEmpleados = function(container, options){
        
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
           
        var clinicas_select =   $("select[name=idclinica]").multipleSelect('getSelects');
        $.ajax({
            url:'/empleados/reportes/filter',
            dataType: 'json',
            method:'POST',
            data:{clinicas:clinicas_select},
            success: function(data){
                $table.clear();
                if(data.result.length > 0){
                    //Agregamos los nuevos registros
                    $.each(data.result,function(){
                        var rowNode = $table.row.add([
                            this.clinica,
                            this.clinica_suceso,
                            this.fecha_suceso,
                            this.empleado,
                            this.empeleado_reporta,
                            this.reporte,
                            '<a class="ver_nota" href="javascript:void(0)" data-content="/empleados/reportes/vernota?id='+this.idreporte+'" data-width="700" data-tools="modal"><img src="/img/icons/note_icon.png"></a>', 
                            '<td class="tr_options"><a href="/empleados/reportes/editar/'+this.idreporte+'">Editar</a><a class="delete-modal" href="javascript:void(0)" data-tools="modal" data-width="700" data-title="<h2>Advertencia</h2>" data-content="/empleados/reportes/eliminar/delete?html=true" >Eliminar</a></td>'
                        ]).draw().node();
                         $(rowNode).attr('id',this.idreporte);
                        //La nota
                        $(rowNode).find('td').eq(6).find('a.ver_nota').modal();
                        $(rowNode).find('td').eq(6).find('a').on('loading.tools.modal', function(modal){
                            var $modalHeader = this.$modalHeader;
                            $modalHeader.remove();
                            var $modalBody = this.$modalBody;
                            $modalBody.css('background','#F5D65B');
                        });
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
                                        url:'/empleados/reportes/eliminar/'+id,
                                        dataType: 'json',
                                        method:'POST',
                                        success: function(data){
                                            if(data.response){
                                                $modal.close();
                                                window.location.replace('/empleados/reportes');
                                            }
                                        }
                                    });


                                }, this));
                            });
                    });
                }
            } 
        });
        
        
        
        
        
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
            $container.find("select[name=idclinica]").multipleSelect({
                allSelected:'Todas las clinicas',
                selectAllText:'Todas las clinicas',
                onClick : filter,
                onCheckAll:filter,
                onUncheckAll:filter,
            });
            
            $container.find("select[name=idclinica]").multipleSelect("setSelects", [settings.idclinica]);
            filter();
            
        }

        /*
        * Plugin initializing
        */
        
        
       
    }
    
    
    
})( jQuery );