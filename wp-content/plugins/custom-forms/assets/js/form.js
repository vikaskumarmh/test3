jQuery(document).ready(function($){
    jQuery("#aobform_purchaser,#aobform_vendor,#aobform_transfer,#aobform_stamp_duty,#aobform_purchase_service,#aobform_subdivision_service").validate ({
        ignore: [],
    });

    if(jQuery('#signature').length > 0){
        var canvas = document.getElementById("signature");
        var signaturePad = new SignaturePad(canvas);
        jQuery('#clear-signature').on('click', function(e){
            e.preventDefault();
            signaturePad.clear();
            jQuery('#signature_data').val('');
        });
        
        jQuery('#signature').bind( "mouseup touchend", function(e){    
            e.preventDefault();
            getSignaturePad(); 
            return true;
        });
    }
    
    jQuery(".submit-btn").click(function(){
        if(jQuery(this).parents('.aobform-custom-form').valid()){
            jQuery('.loader').show();
        }
    });
    
    jQuery(".aobform_close_popup").click(function(){
        jQuery(this).parents('.aobform_msg').hide();
    });

    /* Property Calculator Form validation */ 
    jQuery("#contract_form_frontend").validate ({
        ignore: [],
    });  
    
    /* Property Calculator Form Calculate Miscellanious Cost */ 
    jQuery('#contract_price_field').keyup(function() {
        var contract_price_field = jQuery(this).val();
        jQuery.ajax({
            type: "post",
            dataType: "json",
            url: my_ajax_object.ajax_url,
            data: {action: "calculate_miscellanious_cost",'contract_price_field' : contract_price_field},
            success: function(msg){
                jQuery('#miscellanious_cost_field').val(msg);
            }
        });
    });
    
    /* Property Calculator Form Calculate Shortfall Result */ 
    jQuery('#contract_calculate_total').on('click', function(e){
        e.preventDefault();
        if( jQuery("#contract_form_frontend").valid()){
            var formData = jQuery('#contract_form_frontend').serialize();
            jQuery.ajax({
                type: "post",
                dataType: "json",
                url: my_ajax_object.ajax_url,
                data: {action: "calculate_property_cost",'form' : formData},
                beforeSend: function(msg){
                    jQuery(".contract_form_loader_main").show();
                },
                success: function(msg){
                    jQuery('.contract_shortfall_result_area').html(msg);
                },
                complete: function (msg) {
                    jQuery(".contract_form_loader_main").hide();
                }
            });
        }
    });
    
});

function getSignaturePad() {
    var signaturePad = document.getElementById('signature');
    var imageData = signaturePad.toDataURL();
    jQuery('#signature_data').val(imageData);
}