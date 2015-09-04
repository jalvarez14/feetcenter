$(document).ready(function(){
    
    //Validate requiered fields
    
    
    $('form').delegate('button[data-action=submit]','click',function(e){
        
        var $form = $(this).closest('form');
        var empty = false;
        
        $form.find('span.error').remove();
        $form.find('[required]').removeClass('input-error');
        
        $form.find('[required]').each(function(){
            if($(this).val() == ""){
                empty = true;
                $(this).addClass('input-error');
                var $span = $(this).siblings('span.req');
                $span.after('<span class="error"> campo obligatorio</span>');
            }
        });
        if(empty){
            e.preventDefault();
        }
        
    });
    
    
    
    
    
    
});

