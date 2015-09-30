(function( $ ){
    
   
   /*
    * Handle input. Call public functions and initializers
    */
   
    $.fn.seguimiento = function(data){
        var _this = $(this);
        var plugin = _this.data('seguimiento');
        
        /*Inicializado ?*/
        if (!plugin) {
            
            plugin = new $.seguimiento(this, data);
            
            _this.data('seguimiento', plugin);
            
            return plugin;
        /*Si ya fue inizializado regresamos el plugin*/    
        }else{
            return plugin;
        }
        
    };
    
    /*
    * Plugin Constructor
    */
   
    $.seguimiento = function(container, options){
        
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
               url:'/pacientes/filter',
               dataType: 'json',
               method:'POST',
               data:{clinicas:clinicas_select},
               success: function(data){
                  $table.clear();
                  if(data.result.length > 0){
                      //Agregamos los nuevos registros
                        $.each(data.result,function(){
                                var rowNode = $table.row.add([
                                    this.clinica_nombre,
                                    this.paciente_fecharegistro,
                                    this.paciente_nombre,
                                    this.paciente_celular,
                                    this.empleado_nombre,
                                    '<td class="tr_options"><a href="/pacientes/seguimiento/ver/'+this.idpaciente+'">Ver segumiento</a></td>'
                                ]).draw().node();
                            $(rowNode).attr('id',this.idpaciente);
                        });
                  }
                  $table.draw();
               }  
           });
       };

       
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
    }
    
    
    
})( jQuery );