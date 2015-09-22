(function( $ ){
    
   
   /*
    * Handle input. Call public functions and initializers
    */
   
    $.fn.inventarioInsumo = function(data){
        var _this = $(this);
        var plugin = _this.data('inventarioInsumo');
        
        /*Inicializado ?*/
        if (!plugin) {
            
            plugin = new $.inventarioInsumo(this, data);
            
            _this.data('inventarioInsumo', plugin);
            
            return plugin;
        /*Si ya fue inizializado regresamos el plugin*/    
        }else{
            return plugin;
        }
        
    };
    
    /*
    * Plugin Constructor
    */
   
    $.inventarioInsumo = function(container, options){
        
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
        var $table = $container.find('table');
        
        var settings;
        
        /*
        * Private methods
        */
       
       var filterByClinica = function(){
        
            var selected =  $container.find("select[name=idclinica]").multipleSelect('getSelects');

            $.ajax({
                url: '/inventario/insumo/filterbyclinica',
                dataType: 'json',
                method: 'post',
                data:{selected:selected},
                success: function(data){
                    //Limpiamos la tabla
                    $table = $container.find('table').DataTable();
                    $table.on( 'draw', function () {
                        $('[data-tools="modal"]').modal();
                    });
                    $table.clear();
                    
                    if(data.result.length > 0){
                        //Agregamos los nuevos registros
                        $.each(data.result,function(){
                            var rowNode = $table.row.add( [
                            this.clinica_nombre,
                            this.insumo_nombre,
                            parseInt(this.insumoclinica_existencia),
                            parseInt(this.insumoclinica_reorden),
                            ]).draw().node();
                                
                            if(parseInt(this.insumoclinica_existencia)<=parseInt(this.insumoclinica_reorden)){
                                $(rowNode).addClass('warning');
                            }
                        });
                    }
                    
                     $table.draw();
                }
            }); 
       }
       
       /*
        * Public methods
        */
        
        plugin.init = function(){
            
            settings = plugin.settings = $.extend({}, defaults, options);
            
            //Inicializamos nuestro multiple select
            $container.find("select[name=idclinica]").multipleSelect({
                allSelected:'Todas las clinicas',
                selectAllText:'Todas las clinicas',
                onClick : filterByClinica,
                onCheckAll:filterByClinica,
                onUncheckAll:filterByClinica,
            });
            
            $container.find("select[name=idclinica]").multipleSelect("setSelects", [settings.idclinica]);
            
            //Paginamos el resultado inicial
            $.ajax({
                url: '/json/lang_es_datatable.json',
                dataType: 'json',
                success: function(data){
                    $table.DataTable({
                        language:data,
                    });
                }
            });
            
            filterByClinica();
            
        }

        /*
        * Plugin initializing
        */
        
        plugin.init();
       
    }
    
})( jQuery );