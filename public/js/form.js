$(document).ready(function(){
    
    //Validate requiered fields
    
    
    $('form').delegate('button[data-action=submit]','click',function(e){
        
        var $form = $(this).closest('form');
        var empty = false;
        var error = false;
        
        $form.find('span.error').remove();
        $form.find('[required]').removeClass('input-error');
        
        $form.find('[required]').each(function(){
            if($(this).val() == ""){
                empty = true;
                $(this).addClass('input-error');
                var $span = $(this).siblings('span.req');
                $span.after('<span class="error"> campo obligatorio</span>');
                return;
            }
            if($(this).hasClass('confirm')){
                
                var value = $(this).val();
                var confirm_with = $(this).attr('for');
                var $confirm_with = $form.find('[name="'+confirm_with+'"]');
                var confirm_value = $confirm_with.val();
                if(value != confirm_value){
                    error=true;
                    $(this).addClass('input-error');
                    var $span = $(this).siblings('span.req');
                    $span.after('<span class="error"> Los campos no coinciden</span>');
                    return;
                }
            }
            
        });
        
        console.log(empty);
        if(empty || error){
            e.preventDefault();
        }
        
    });

    
});

