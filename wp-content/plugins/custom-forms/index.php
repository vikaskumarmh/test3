<?php
/**
 * Custom Forms
 *
 * @package       WP-FORMS & CALCULATOR
 * @author        weknowconveyancing
 * @version       1.0.0
 *
 * @wordpress-plugin
 * Plugin Name:   WP-Forms & Calculator
 * Plugin URI:    https://www.your-site.com/
 * Description:   WP-Forms & Calculator
 * Version:       1.0.0
 * Author:        weknowconveyancing
 * Author URI:    https://www.your-site.com/
 * Text Domain:   WP-Forms & Calculator
 * Domain Path:   /languages
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) exit;

// Include your custom code here.
function custom_form_admin_menu() {
    add_menu_page(__( 'WP-Forms & Calculator', 'wp-form-calculator' ),__( 'WP-Forms & Calculator', 'wp-form-calculator' ),'manage_options','wp-form-calculator','forms_render_plugin_settings_page','dashicons-format-aside');
    add_submenu_page( 'wp-form-calculator', 'Calculator Setting', 'Calculator Setting', 'manage_options', 'calculator-setting', 'contract_forms_render_plugin_settings_page' ); 
}
add_action( 'admin_menu', 'custom_form_admin_menu' );


/* Enqueue Script*/ 
function forms_enqueue_script() {   
    wp_enqueue_script( 'form_script_jquery', 'https://code.jquery.com/jquery-1.8.2.js' );
    wp_enqueue_script( 'form_script_signature_pad', 'https://cdnjs.cloudflare.com/ajax/libs/signature_pad/1.3.4/signature_pad.min.js' );
    wp_enqueue_script( 'form_script_jquery_validation','https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js');
    wp_register_script( 'form_script', plugin_dir_url( __FILE__ ) . 'assets/js/form.js','','',true );
    wp_localize_script( 'form_script', 'my_ajax_object', array( 'ajax_url' => admin_url( 'admin-ajax.php' ) ) );
    wp_enqueue_script( 'form_script' );
    wp_enqueue_style( 'form_style', plugin_dir_url( __FILE__ ) . 'assets/css/form.css' );
    wp_enqueue_style( 'calculator_form_style', plugin_dir_url( __FILE__ ) . 'assets/css/calculator-form.css' );
}
add_action('wp_enqueue_scripts', 'forms_enqueue_script');

function forms_admin_enqueue_script(){
    wp_enqueue_script( 'aob_form_admin_js',plugin_dir_url( __FILE__ ) . 'assets/js/form-admin.js','','',true );
    wp_enqueue_style( 'aob_form_admin_style',plugin_dir_url( __FILE__ ) . 'assets/css/form-admin.css','','',false );
}
add_action('admin_enqueue_scripts', 'forms_admin_enqueue_script');

/* Shortcode Names */ 
function forms_render_plugin_settings_page(){
    echo '<div class="aobforms_wp_form_and_calculator">
            <h2>Forms Shortcodes</h2>
            <ol>
                <li><input type="text" name"purchaser_form" value="[Purchaser_Form]" readonly><button class="aob_shortcode_copy button-primary">Copy</button></li>
                <li><input type="text" name"Vendor_From" value="[Vendor_From]"readonly><button class="aob_shortcode_copy button-primary">Copy</button></li>
                <li><input type="text" name"Party_Transfer_Form" value="[Party_Transfer_Form]" readonly><button class="aob_shortcode_copy button-primary">Copy</button></li>
                <li><input type="text" name"Property_Form" value="[Property_Calculation_Form]" readonly><button class="aob_shortcode_copy button-primary">Copy</button></li>
                <li><input type="text" name"stamp_duty_Form" value="[Stamp_Duty_Form]" readonly><button class="aob_shortcode_copy button-primary">Copy</button></li>
                <li><input type="text" name"purchase_service_form" value="[Purchase_Service_Form]" readonly><button class="aob_shortcode_copy button-primary">Copy</button></li>
                <li><input type="text" name"subdivision_consolidation_service" value="[Subdivision_Consolidation_Service]" readonly><button class="aob_shortcode_copy button-primary">Copy</button></li>
            </ol>
        </div>';
}


/* Miscellanious Cost Setting Forms */ 
function contract_forms_render_plugin_settings_page(){ 
    $property_calculation_msg = '';
    if(isset($_POST['miscellanious_form_submit_btn'])){ 
        if(!empty($_POST['contract_starting_price']) && !empty($_POST['contract_ending_price']) && !empty($_POST['contract_amount'])){
            $contract_starting_price = (isset($_POST['contract_starting_price']) ? $_POST['contract_starting_price'] : '');
            $contract_ending_price = (isset($_POST['contract_ending_price']) ? $_POST['contract_ending_price'] : '');
            $contract_amount = (isset($_POST['contract_amount']) ? $_POST['contract_amount'] : '');
            update_option('contract_starting_price',$contract_starting_price);
            update_option('contract_ending_price',$contract_ending_price);
            update_option('contract_amount',$contract_amount);
            $property_calculation_msg = '<div id="message" class="notice notice-success is-dismissible"><p>Miscellanious Cost Setting Saved.</p></div>';
        }else{
            $property_calculation_msg = '<div id="message" class="notice notice-error is-dismissible"><p>Error Something Went Wrong!</p></div>';
        }
    }  
    $get_contract_starting_price = get_option('contract_starting_price');
    $contract_ending_price = get_option('contract_ending_price');
    $contract_amount = get_option('contract_amount');
    ?>
    <div class="contract_form_admin_sec_main">
        <div class="contract_form_admin_sec_inner">
            <?php echo $property_calculation_msg; ?>
            <h2>Miscellanious Cost Setting Form</h2>
            <form class="contract_form_admin" method="post" name="contract_form_admin" id="contract_form_admin">
                <div id="miscellanious_cost_form" class="miscellanious_cost_form">
                    <div class="miscellanious_form_addmore_sec">
                        <button class="contract_btn_add_more">Add More Fields</button>
                    </div>
                    <div class="miscellanious_form_fields_sec" id="miscellanious_form_fields_sec">
                        <div class="miscellanious_form_fields_sec_inner">
                            <div class="miscellanious_form_field">
                                <label>Starting Price</label>
                                <input type="text" name="contract_starting_price[]" value="<?php echo $get_contract_starting_price[0]; ?>">
                            </div>    
                            <div class="miscellanious_form_field">
                                <label>Ending Price</label>
                                <input type="text" name="contract_ending_price[]" value="<?php echo $contract_ending_price[0]; ?>">
                            </div>
                            <div class="miscellanious_form_field">    
                                <label>Amount</label>
                                <input type="text" name="contract_amount[]" value="<?php echo $contract_amount[0]; ?>">
                            </div>
                        </div>
                        <?php if(is_array($get_contract_starting_price) && count($get_contract_starting_price) > 1 || is_array($contract_ending_price) && count($contract_ending_price) > 1 || is_array($contract_amount) && count($contract_amount) > 1){
                            $contract_count = count($get_contract_starting_price) - 1;
                            for($i = 1; $i <= $contract_count; $i++){
                                echo '<div class="miscellanious_form_fields_sec_inner">
                                        <div class="miscellanious_form_field">
                                            <input type="text" name="contract_starting_price[]" value="'.$get_contract_starting_price[$i].'">
                                        </div>    
                                        <div class="miscellanious_form_field">
                                            <input type="text" name="contract_ending_price[]" value="'.$contract_ending_price[$i].'">
                                        </div>
                                        <div class="miscellanious_form_field">    
                                            <input type="text" name="contract_amount[]" value="'.$contract_amount[$i].'">
                                        </div>
                                        <div class="miscellanious_form_field">    
                                            <button class="miscellanious_form_field_delete button-danger">Remove</button>
                                        </div>
                                    </div>';
                            }
                        }   ?> 
                    </div>
                    <div class="miscellanious_form_submit_sec">
                        <input type="submit" name="miscellanious_form_submit_btn" id="miscellanious_form_submit_btn" class="miscellanious_form_submit_btn button-primary">
                    </div>
                </div>
            </form>
        </div>
    </div>
<?php }

/* Form One */ 
use Dompdf\Dompdf; 

/* Forms Files */ 
require_once ('forms/purchaser-form.php');
require_once ('forms/vendor-form.php');
require_once ('forms/party-transfer-form.php');
require_once ('forms/calculator-form.php');
require_once ('forms/purchase-service.php');
require_once ('forms/stamp-duty-service.php');
require_once ('forms/subdivisions-consolidation-service.php');

/* Function for Attechment Write */ 
function attechment_write($file_data){
    $path_attachment = array();
  
    if($file_data && count($file_data) > 0){
        $total_count = count($file_data['name']) -1;
        for( $i=0 ; $i<= $total_count; $i++ ) {
            $target_dir = "wp-content/plugins/custom-forms/attachments/";
            $file = $file_data['name'][$i];
            $path = pathinfo($file);
            $attechment_name = bin2hex(random_bytes(12));
            $filename = $path['filename'].$attechment_name;
            $ext = $path['extension'];
            $temp_name = $file_data['tmp_name'][$i];
            $path_filename_ext = $target_dir.$filename.".".$ext;
            $res = move_uploaded_file($temp_name,$path_filename_ext);
            $path_attachment[]=$path_filename_ext;
        }
        return $path_attachment;
    }
}

/* Function for PDF Write */
function pdf_write($html){
    if($html){
        require_once ('lib/dompdf/autoload.inc.php');
        $dompdf = new Dompdf();
        $dompdf->loadHtml($html); 
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();
        $pdf = $dompdf->output();   
        $pdf_name = bin2hex(random_bytes(12));
        file_put_contents("wp-content/plugins/custom-forms/pdf/".$pdf_name.".pdf", $pdf);
        return "wp-content/plugins/custom-forms/pdf/".$pdf_name.".pdf";
    }
}

/* Function for Email Send Adminer & Client */ 
function email_send($attachments = null, $user_email = null){
    $headers = 'From: WP-Forms <wpform@securework.co>' . "\r\n";
    $admin_email = get_option('admin_email');
    wp_mail( $admin_email, 'For-admin', 'Form Details', $headers, $attachments );
    wp_mail( $user_email, 'For-user', 'Form Details', $headers, $attachments );
}


function calculate_miscellanious_cost(){
    $contract_price_field = $_POST['contract_price_field'];
    $get_contract_starting_price = get_option('contract_starting_price');
    $contract_ending_price = get_option('contract_ending_price');
    $contract_amount = get_option('contract_amount');
    $index = 'null';
    if(!empty($get_contract_starting_price) && count($get_contract_starting_price) > 0){
        foreach($get_contract_starting_price as $key => $value){
            if($value <= $contract_price_field && $contract_ending_price[$key] >= $contract_price_field  || $value <= $contract_price_field && $contract_ending_price[$key] == 'fix'){
                $index = $key;
            }
        }
    }
    echo json_encode($contract_amount[$index]);
    wp_die();
}
add_action( 'wp_ajax_calculate_miscellanious_cost', 'calculate_miscellanious_cost' );
add_action( 'wp_ajax_nopriv_calculate_miscellanious_cost', 'calculate_miscellanious_cost' );

function calculate_property_cost(){
    if(isset($_POST['form'])){
        $form_data = $_POST['form'];
        $params = $already_paid = array();
        parse_str($form_data, $params);
        $keys_paid = array('deposite_paid_field','loan_amount_field');
        foreach($keys_paid as $val){
            if(key_exists($val,$params)){
                $already_paid[] = $params[$val];
                unset($params[$val]);
            }
        }
        $shortfall_result  = array_sum($params) - array_sum($already_paid);
        $html = '<div class="contract_shortfall_result_main">
                    <div class="contract_shortfall_result_inner">
                        <h2> Shortfall Result: '.$shortfall_result.'</h2>
                    </div>
                </div>';
        echo json_encode($html);
        wp_die();
    }
}
add_action( 'wp_ajax_calculate_property_cost', 'calculate_property_cost' );
add_action( 'wp_ajax_nopriv_calculate_property_cost', 'calculate_property_cost' );
?>