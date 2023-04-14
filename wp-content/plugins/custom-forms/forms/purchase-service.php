<?php 
    function purchase_service_form(){ 
        ob_start();
        $attachment_data = $user_email = array();
        if(isset($_POST['purchase_service_btn'])){ 
            if(!empty($_POST['purchase_service_name_field']) && !empty($_POST['purchase_service_email_field']) && !empty($_POST['purchase_service_mobile_field']) && !empty($_POST['purchase_service_message_field']) ){

                $purchase_service_name_field = isset($_POST['purchase_service_name_field']) ? $_POST['purchase_service_name_field'] : '';
                $purchase_service_email_field = isset($_POST['purchase_service_email_field']) ? $_POST['purchase_service_email_field'] : '';
                $purchase_service_mobile_field = isset($_POST['purchase_service_mobile_field']) ? $_POST['purchase_service_mobile_field'] : '';
                $purchase_service_message_field = isset($_POST['purchase_service_message_field']) ? $_POST['purchase_service_message_field'] : '';
                $attachmentFile = (isset($_FILES['purchase_service_contract_field']) && !empty($_FILES['purchase_service_contract_field'])) ? attechment_write($_FILES['purchase_service_contract_field']) : '';
                $user_email[]= (!empty($purchase_service_email_field)) ? $purchase_service_email_field : '';

                $html = '<table>
                            <tr>
                                <td><h2>Purchase Service</h2><td>
                            </tr>
                            <tr>
                                <td><h4>Name</h4></td>
                            </tr>
                            <tr>
                                <td>'.$purchase_service_name_field.'</td>
                            </tr>
                            <tr>
                                <td><h4>Email</h4></td>
                            </tr>
                            <tr>
                                <td>'.$purchase_service_email_field.'</td>
                            </tr>
                            <tr>
                                <td><h4>Mobile</h4></td>
                            </tr>
                            <tr>
                                <td>'.$purchase_service_mobile_field.'</td>
                            </tr>
                            <tr>
                                <td><h4>Message</h4></td>
                            </tr>
                            <tr>
                                <td>'.$purchase_service_message_field.'</td>
                            </tr>
                        </table>';

                        $pdfName = pdf_write($html);
                       
                        if(!empty($attachmentFile) && $attachmentFile != false){
                            foreach($attachmentFile as $attFile){
                                $attachment_data[]= $attFile;
                            }
                        }
                        if(!empty($pdfName) && $pdfName != false){
                            $attachment_data[]= $pdfName;
                        }
                        if(!empty($attachment_data) && count($attachment_data) > 0){
                            email_send($attachment_data , implode(',', $user_email));
                        }
                    $msg = "<div class='aobform_msg'>
                                <div class='aobform_msg_inner aobform_success'>
                                    <span class='aobform_close_popup'></span>
                                    <h5>Thank You</h5>
                                    <p>Your submission has been received.</p>
                                </div>
                            </div>    ";
                }else{
                    $msg = "<div class='aobform_msg'>
                                <div class='aobform_msg_inner aobform_error'>
                                    <span class='aobform_close_popup'></span>
                                    <h5>Error</h5>
                                    <p>There are errors on the form. Please fix them before continuing.</p>
                                </div>
                            </div>";
                }
        }
         echo $msg;
        ?>
        <div class="purchase_service_form_main">
            <div class="purchase_service_form_inner">
                <h2>Purchase Service Form</h2>
                <div class="purchase_service_form_sec">
                    <form class="purchase_service_frontend aobform-custom-form" method="post" name="purchase_service_frontend" id="aobform_purchase_service"  enctype="multipart/form-data" accept-charset="utf-8" novalidate="novalidate">
                        <div class="purchase_service_form_field">
                            <label>Name <span class="form-required">*</span></label>
                            <input type="text" class="contract_input_field" id="purchase_service_name_field" name="purchase_service_name_field" required>
                        </div>
                        <div class="purchase_service_form_field">
                            <label>Email <span class="form-required">*</span></label>
                            <input type="email" class="contract_input_field" id="purchase_service_email_field" name="purchase_service_email_field" required>
                        </div>
                        <div class="purchase_service_form_field">
                            <label>Mobile <span class="form-required">*</span></label>
                            <input type="number" class="contract_input_field" id="purchase_service_mobile_field" name="purchase_service_mobile_field" required>
                        </div>
                        <div class="purchase_service_form_field">
                            <label>Message<span class="form-required">*</span></label>
                            <textarea id="purchase_service_message_field" name="purchase_service_message_field" class="contract_input_field" rows="4" cols="50" required></textarea>
                        </div>

                        <div class="purchase_service_form_field">
                            <label>Upload your contract <span class="form-required">*</span></label>
                            <input type="file" multiple="multiple" class="purchase_service_contract_input_field" id="purchase_service_contract_field" name="purchase_service_contract_field[]">
                        </div>
                        <div class="purchase_service_form_field">
                            <input type="submit" class="submit-btn" id="purchase_service_btn" name="purchase_service_btn" value="Submit Form">
                            <div class="loader" style="display:none;">
                                <h5>Loading...</h5>
                                <p>Please Wait.Your Document is Uploading.</p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
<?php 
    return ob_get_clean();
}
add_shortcode('Purchase_Service_Form','purchase_service_form');
?>
