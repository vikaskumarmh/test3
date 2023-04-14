    jQuery(document).ready(function($){
        jQuery(".aob_shortcode_copy").click(function(){    
            var shortcode =jQuery(this).parents('li').find('input').val();
            var $temp = jQuery("<input>");
            jQuery("body").append($temp);
            $temp.val(shortcode).select();
            document.execCommand("copy");
            $temp.remove();
            alert("Copy Successfully!");
        });

        /* Property Calculator Form Add More Fields In Admin */ 
        jQuery(".contract_btn_add_more").click(function(event){    
            event.preventDefault();
            jQuery("#miscellanious_form_fields_sec").append('<div class="miscellanious_form_fields_sec_inner"> <div class="miscellanious_form_field"> <input type="text" name="contract_starting_price[]"> </div><div class="miscellanious_form_field"> <input type="text" name="contract_ending_price[]"> </div><div class="miscellanious_form_field"> <input type="text" name="contract_amount[]"></div><div class="miscellanious_form_field"><button class="miscellanious_form_field_delete button-danger">Remove</button></div></div>');
        });

        /* Property Calculator Form Remove Fields From Admin */ 
        jQuery(document).on("click",".miscellanious_form_field_delete",function(event) {
            event.preventDefault();
            jQuery(this).parents('.miscellanious_form_fields_sec_inner').remove();
        });
    });