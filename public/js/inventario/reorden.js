(function( $ ){
    
   
   /*
    * Handle input. Call public functions and initializers
    */
   
    $.fn.reorden = function(data){
        var _this = $(this);
        var plugin = _this.data('reorden');
        
        /*Inicializado ?*/
        if (!plugin) {
            
            plugin = new $.reorden(this, data);
            
            _this.data('reorden', plugin);
            
            return plugin;
        /*Si ya fue inizializado regresamos el plugin*/    
        }else{
            return plugin;
        }
        
    };
    
    /*
    * Plugin Constructor
    */
   
    $.reorden = function(container, options){
        
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

       
       /*
        * Public methods
        */
        
        plugin.init = function(){
            
            settings = plugin.settings = $.extend({}, defaults, options);
            
            //Paginamos el resultado inicial
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
                        //Inicializamos el modal
                        $container.find('a.add-reorden').on('loading.tools.modal', function(modal)
                        {
                            var $modalHeader = this.$modalHeader;
                            $modalHeader.addClass('modal_header_action');

                            var id = this.$element.closest('tr').attr('id');
                            var type = this.$element.closest('tr').attr('data-type');

                            var $modal = this ;

                            this.createCancelButton('Cancelar');

                            var buttonAction = this.createActionButton('Guardar');
                            buttonAction.attr('data-action','submit');

                            buttonAction.on('click', $.proxy(function()
                            {
                                var $form = modal.find('form');
                                var empty = false;

                                $form.find('[required]').removeClass('input-error');

                                $form.find('[required]').each(function(){
                                    if($(this).val() == ""){
                                        empty = true;
                                        $(this).addClass('input-error');
                                    }
                                });
                                if(!empty){

                                    var formData = new FormData($form[0]);

                                    //Hacemos la peticion ajax
                                    $.ajax({
                                        dataType: 'json', 
                                        type: "POST",
                                        url: '/inventario/reorden/nuevo',
                                        data: formData,
                                        async: false,
                                        processData: false,
                                        contentType: false,
                                        success: function (data) {
                                            if(data.response){
                                                $modal.close();
                                                window.location.replace('/inventario/reorden');
                                            }
                                        }
                                    });

                                }





                            }, this));

                        });
                    });
                }
            });
            
            //Inicializamos el modal
            $container.find('a.add-reorden').on('loading.tools.modal', function(modal)
            {
                var $modalHeader = this.$modalHeader;
                $modalHeader.addClass('modal_header_action');

                var id = this.$element.closest('tr').attr('id');
                var type = this.$element.closest('tr').attr('data-type');

                var $modal = this ;

                this.createCancelButton('Cancelar');

                var buttonAction = this.createActionButton('Guardar');
                buttonAction.attr('data-action','submit');

                buttonAction.on('click', $.proxy(function()
                {
                    var $form = modal.find('form');
                    var empty = false;
                    
                    $form.find('[required]').removeClass('input-error');

                    $form.find('[required]').each(function(){
                        if($(this).val() == ""){
                            empty = true;
                            $(this).addClass('input-error');
                        }
                    });
                    if(!empty){
                        
                        var formData = new FormData($form[0]);
                        
                        //Hacemos la peticion ajax
                        $.ajax({
                            dataType: 'json', 
                            type: "POST",
                            url: '/inventario/reorden/nuevo',
                            data: formData,
                            async: false,
                            processData: false,
                            contentType: false,
                            success: function (data) {
                                if(data.response){
                                    $modal.close();
                                    window.location.replace('/inventario/reorden');
                                }
                            }
                        });
                        
                    }
                    
                }, this));

            });
            
            //Aplicamos la regla que solo el adminsitrador puede editar el precio de un servicio
       
            
        }

        /*
        * Plugin initializing
        */
        
        plugin.init();
       
    }
    
    
    
})( jQuery );