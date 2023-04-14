<?php
function purchaser_form(){
    $msg = "";
    $attachment_data = $user_email = array();
    ob_start();
    if(isset($_POST['btn-submit'])){ 
        if(isset($_POST['purchasing_addr_line_1']) && isset($_POST['purchasing_city']) && isset($_POST['purchasing_state']) && isset($_POST['purchasing_post_code']) && isset($_POST['purchasing_country']) && isset($_POST['name_prefix_purchaser_1']) && isset($_POST['f_name_purchaser_1']) && isset($_POST['m_name_purchaser_1']) && isset($_POST['l_name_purchaser_1']) && isset($_POST['dob_purchaser_1'])  && isset($_POST['mobile_no_purchaser_1'])  && isset($_POST['email_purchaser_1'])  && isset($_POST['nationality_purchaser_1'])  && isset($_POST['permanent_resident_purchaser_1'])  && isset($_POST['relationship_status_purchaser_1'])  && isset($_POST['addr_line_1_purchaser_1'])  && isset($_POST['city_purchaser_1']) && isset($_POST['state_purchaser_1']) && isset($_POST['post_code_purchaser_1']) && isset($_POST['country_purchaser_1']) && isset($_POST['property_type']) && isset($_POST['property_Purpose']) && isset($_POST['home_buyer']) && isset($_POST['weRecommend']) && isset($_POST['isAny']) && isset($_POST['whoReferred']) && isset($_POST['pleaseProvide']) && isset($_POST['bsb']) && isset($_POST['account_number'])  && !empty($_POST['signature_data']) && !empty($_POST['date_time']) && !empty($_POST['hours']) && !empty($_POST['minutes'])){

            $purchasing_addr_line_1 = isset($_POST['purchasing_addr_line_1']) ? $_POST['purchasing_addr_line_1'] : '';
            $purchasing_city = isset($_POST['purchasing_city']) ? $_POST['purchasing_city'] : '';
            $purchasing_state = isset($_POST['purchasing_state']) ? $_POST['purchasing_state'] : '';
            $purchasing_post_code = isset($_POST['purchasing_post_code']) ? $_POST['purchasing_post_code'] : '';
            $purchasing_country = isset($_POST['purchasing_country']) ? $_POST['purchasing_country'] : '';
            $company_details = isset($_POST['company_details']) ? $_POST['company_details'] : '';
            $abn_acn = isset($_POST['abn_acn']) ? $_POST['abn_acn'] : '';
            $name_prefix_purchaser_1 = isset($_POST['name_prefix_purchaser_1']) ? $_POST['name_prefix_purchaser_1'] : '';
            $f_name_purchaser_1 = isset($_POST['f_name_purchaser_1']) ? $_POST['f_name_purchaser_1'] : '';
            $m_name_purchaser_1 = isset($_POST['m_name_purchaser_1']) ? $_POST['m_name_purchaser_1'] : '';
            $l_name_purchaser_1 = isset($_POST['l_name_purchaser_1']) ? $_POST['l_name_purchaser_1'] : '';
            $dob_purchaser_1 = isset($_POST['dob_purchaser_1']) ? $_POST['dob_purchaser_1'] : '';
            $mobile_no_purchaser_1 = isset($_POST['mobile_no_purchaser_1']) ? $_POST['mobile_no_purchaser_1'] : '';
            $email_purchaser_1 = isset($_POST['email_purchaser_1']) ? $_POST['email_purchaser_1'] : '';
            $nationality_purchaser_1 = isset($_POST['nationality_purchaser_1']) ? $_POST['nationality_purchaser_1'] : '';
            $permanent_resident_purchaser_1 = isset($_POST['permanent_resident_purchaser_1']) ? $_POST['permanent_resident_purchaser_1'] : '';
            $relationship_status_purchaser_1 = isset($_POST['relationship_status_purchaser_1']) ? $_POST['relationship_status_purchaser_1'] : '';
            $addr_line_1_purchaser_1 = isset($_POST['addr_line_1_purchaser_1']) ? $_POST['addr_line_1_purchaser_1'] : '';
            $city_purchaser_1 = isset($_POST['city_purchaser_1']) ? $_POST['city_purchaser_1'] : '';
            $state_purchaser_1 = isset($_POST['state_purchaser_1']) ? $_POST['state_purchaser_1'] : '';
            $post_code_purchaser_1 = isset($_POST['post_code_purchaser_1']) ? $_POST['post_code_purchaser_1'] : '';
            $country_purchaser_1 = isset($_POST['country_purchaser_1']) ? $_POST['country_purchaser_1'] : '';
          
            $name_prefix_purchaser_2 = isset($_POST['name_prefix_purchaser_2']) ? $_POST['name_prefix_purchaser_2'] : '';
            $f_name_purchaser_2 = isset($_POST['f_name_purchaser_2']) ? $_POST['f_name_purchaser_2'] : '';
            $m_name_purchaser_2 = isset($_POST['m_name_purchaser_2']) ? $_POST['m_name_purchaser_2'] : '';
            $l_name_purchaser_2 = isset($_POST['l_name_purchaser_2']) ? $_POST['l_name_purchaser_2'] : '';
            $dob_purchaser_2 = isset($_POST['dob_purchaser_2']) ? $_POST['dob_purchaser_2'] : '';
            $mobile_no_purchaser_2 = isset($_POST['mobile_no_purchaser_2']) ? $_POST['mobile_no_purchaser_2'] : '';
            $email_purchaser_2 = isset($_POST['email_purchaser_2']) ? $_POST['email_purchaser_2'] : '';  
            $nationality_purchaser_2 = isset($_POST['nationality_purchaser_2']) ? $_POST['nationality_purchaser_2'] : '';
            $permanent_resident_purchaser_2 = isset($_POST['permanent_resident_purchaser_2']) ? $_POST['permanent_resident_purchaser_2'] : '';
            $relationship_status_purchaser_2 = isset($_POST['relationship_status_purchaser_2']) ? $_POST['relationship_status_purchaser_2'] : '';
            $addr_line_1_residential = isset($_POST['addr_line_1_residential']) ? $_POST['addr_line_1_residential'] : '';
            $city_residential = isset($_POST['city_residential']) ? $_POST['city_residential'] : '';
            $state_residential = isset($_POST['state_residential']) ? $_POST['state_residential'] : '';  
            $post_code_residential = isset($_POST['post_code_residential']) ? $_POST['post_code_residential'] : '';
            $country_residential = isset($_POST['country_residential']) ? $_POST['country_residential'] : '';
            $joint_proprietors = isset($_POST['joint_proprietors']) ? $_POST['joint_proprietors'] : '';
            $temants_in_common = isset($_POST['temants_in_common']) ? $_POST['temants_in_common'] : '';
            $distribution_percentage = isset($_POST['distribution-percentage']) ? $_POST['distribution-percentage'] : '';
            $property_type = isset($_POST['property_type']) ? $_POST['property_type'] : '';
          
            $property_Purpose = isset($_POST['property_Purpose']) ? $_POST['property_Purpose'] : '';
            $home_buyer = isset($_POST['home_buyer']) ? $_POST['home_buyer'] : '';
            $weRecommend = isset($_POST['weRecommend']) ? $_POST['weRecommend'] : '';
            $isAny = isset($_POST['isAny']) ? $_POST['isAny'] : '';
            $ifYou = isset($_POST['ifYou']) ? $_POST['ifYou'] : '';
            $broker_name = isset($_POST['broker_name']) ? $_POST['broker_name'] : '';
            $broker_mobile = isset($_POST['broker_mobile']) ? $_POST['broker_mobile'] : '';
            $broker_email = isset($_POST['broker_email']) ? $_POST['broker_email'] : '';
            $broker_institution = isset($_POST['broker_institution']) ? $_POST['broker_institution'] : '';
            $agent_name = isset($_POST['agent_name']) ? $_POST['agent_name'] : '';
            $agent_mobile = isset($_POST['agent_mobile']) ? $_POST['agent_mobile'] : '';
            $agent_email = isset($_POST['agent_email']) ? $_POST['agent_email'] : '';
            $agent_institution = isset($_POST['agent_institution']) ? $_POST['agent_institution'] : '';
          
            $isareThe = isset($_POST['isareThe']) ? $_POST['isareThe'] : '';
            $iweConfirm = isset($_POST['iweConfirm']) ? $_POST['iweConfirm'] : '';
            $whoReferred = isset($_POST['whoReferred']) ? $_POST['whoReferred'] : '';
            $pleaseProvide = isset($_POST['pleaseProvide']) ? $_POST['pleaseProvide'] : '';
            $bsb = isset($_POST['bsb']) ? $_POST['bsb'] : '';
            $account_number = isset($_POST['account_number']) ? $_POST['account_number'] : '';    
            $signature_data = isset($_POST['signature_data']) ? $_POST['signature_data'] : '';
            $date_time = isset($_POST['date_time']) ? $_POST['date_time'] : '';    
            $hours = isset($_POST['hours']) ? $_POST['hours'] : '';    
            $minutes = isset($_POST['minutes']) ? $_POST['minutes'] : '';

            $attachmentFile = (isset($_FILES['file']) && !empty($_FILES['file'])) ? attechment_write($_FILES['file']) : '';
            
            $user_email[]= (!empty($email_purchaser_1)) ? $email_purchaser_1 : '';
            $user_email[]= (!empty($email_purchaser_2)) ? $email_purchaser_2 : '';
            
            $html = '<table>
                        <tr>
                            <td><h2>Instructions to Act - Purchaser Form</h2><td>
                        </tr>
                        <tr>
                            <td><h4>Address of property you are purchasing</h4></td>
                        </tr>
                        <tr>
                            <td><strong>Street Address</strong> : '.$purchasing_addr_line_1.'</td>
                        </tr>
                        <tr>
                            <td><strong>Suburb</strong> : '.$purchasing_city.'</td>
                        </tr>
                        <tr>
                            <td><strong>State</strong> : '.$purchasing_state.'</td>
                        </tr>
                        <tr>
                            <td><strong>Post Code</strong> : '.$purchasing_post_code.'</td>
                        </tr>
                        <tr>
                        <td><strong>Country</strong> : '.$purchasing_country.'</td>
                        </tr>';
                        if(isset($company_details)){
                            $html.= '<tr>
                                        <td><h4>Company Name</h4></td>
                                    </tr>
                                    <tr>
                                        <td>'.$company_details.'</td>
                                    </tr>';
                        }
                        if(isset($abn_acn)){
                            $html.= '<tr>
                                        <td><h4>ABN or ACN</h4></td>
                                    </tr>
                                    <tr>
                                        <td>'.$abn_acn.'</td>
                                    </tr>';
                        }
                        $html.= '<tr>
                                    <td><h4>Full Name Purchaser 1</h4></td>
                                </tr>
                                <tr>
                                    <td><strong>'.$name_prefix_purchaser_1.'</strong> '.$f_name_purchaser_1.' '.$m_name_purchaser_1.' '.$l_name_purchaser_1.'</td>
                                </tr>
                                <tr>
                                    <td><h4>Date of Birth</h4></td>
                                </tr>
                                <tr>
                                    <td>'.$dob_purchaser_1.'</td>
                                </tr>
                                <tr>
                                    <td><h4>Mobile Number</h4></td>
                                </tr>
                                <tr>
                                    <td>'.$mobile_no_purchaser_1.'</td>
                                </tr>
                                <tr>
                                    <td><h4>E-mail</h4></td>
                                </tr>
                                <tr>
                                    <td>'.$email_purchaser_1.'</td>
                                </tr>
                                <tr>
                                    <td><h4>What is your Nationality</h4></td>
                                </tr>
                                <tr>
                                    <td>'.$nationality_purchaser_1.'</td>
                                </tr>
                                <tr>
                                    <td><h4>If you are not an Australian Citizen,are you a Permanent Resident?</h4></td>
                                </tr>
                                <tr>
                                    <td>'.$permanent_resident_purchaser_1.'</td>
                                </tr>
                                <tr>
                                    <td><h4>Relationship Status</h4></td>
                                </tr>
                                <tr>
                                    <td>'.$relationship_status_purchaser_1.'</td>
                                </tr>
                                <tr>
                                    <td><h4>Residential Address Purchaser 1</h4></td>
                                </tr>
                                <tr>
                                    <td><strong>Street Address</strong> : '.$addr_line_1_purchaser_1.'</td>
                                </tr>
                                <tr>
                                    <td><strong>Suburb</strong> : '.$city_purchaser_1.'</td>
                                </tr>
                                <tr>
                                    <td><strong>State</strong> : '.$state_purchaser_1.'</td>
                                </tr>
                                <tr>
                                    <td><strong>Post Code</strong> : '.$post_code_purchaser_1.'</td>
                                </tr>
                                <tr>
                                    <td><strong>Country</strong> : '.$country_purchaser_1.'</td>
                                </tr>';
                                if($name_prefix_purchaser_2 || $f_name_purchaser_2 || $m_name_purchaser_2 || $l_name_purchaser_2){
                                    $html.= '<tr>
                                                <td><h4>Full Name Purchaser 2</h4></td>
                                            </tr>
                                            <tr>
                                                <td>'.$name_prefix_purchaser_2.' '.$f_name_purchaser_2.' '.$m_name_purchaser_2.' '.$l_name_purchaser_2.'</td>
                                            </tr>';
                                }
                                if($dob_purchaser_2){    
                                    $html.='<tr>
                                                <td><h4>Date of Birth</h4></td>
                                            </tr>
                                            <tr>
                                                <td>'.$dob_purchaser_2.'</td>
                                            </tr>';
                                }
                                if($mobile_no_purchaser_2){
                                    $html.='<tr>
                                                <td><h4>Mobile Number</h4></td>
                                            </tr>
                                            <tr>
                                                <td>'.$mobile_no_purchaser_2.'</td>
                                            </tr>';
                                } 
                                if($email_purchaser_2){           
                                    $html.='<tr>
                                                <td><h4>E-mail</h4></td>
                                            </tr>
                                            <tr>
                                                <td>'.$email_purchaser_2.'</td>
                                            </tr>';
                                }
                                if($nationality_purchaser_2){
                                    $html.='<tr>
                                                <td><h4>What is your Nationality?</h4></td>
                                            </tr>
                                            <tr>
                                                <td>'.$nationality_purchaser_2.'</td>
                                            </tr>';
                                }
                                if($permanent_resident_purchaser_2){           
                                    $html.='<tr>
                                                <td><h4>If you are not an Australian Citizen,are you a Permanent Resident?</h4></td>
                                            </tr>
                                            <tr>
                                                <td>'.$permanent_resident_purchaser_2.'</td>
                                            </tr>';
                                }
                                if($relationship_status_purchaser_2){
                                    $html.='<tr>
                                                <td><h4>Relationship Status</h4></td>
                                            </tr>
                                            <tr>
                                                <td>'.$relationship_status_purchaser_2.'</td>
                                            </tr>';
                                }
                                if($addr_line_1_residential || $city_residential || $state_residential || $state_residential || $post_code_residential || $country_residential){
                                $html.='<tr>
                                            <td><h4>Residential Address Purchaser 2</h4></td>
                                        </tr>
                                        <tr>
                                            <td><strong>Street Address</strong> : '.$addr_line_1_residential.'</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Suburb</strong> : '.$city_residential.'</td>
                                        </tr>
                                        <tr>
                                            <td><strong>State</strong> : '.$state_residential.'</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Post Code</strong> : '.$post_code_residential.'</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Country</strong> : '.$country_residential.'</td>
                                        </tr>';
                                }
                                if($joint_proprietors || $temants_in_common){    
                                    $html.='<tr>
                                                <td><h4>If more than one purchaser, how would you like to register?</h4></td>
                                            </tr>';
                                        if($joint_proprietors){    
                                            $html.='<tr>
                                                        <td><h4>JOINT PROPRIETORS (each person owns an equal share of the property and, upon the death of any party, their share passes to the other owner/s)</h4></td>
                                                    
                                                    </tr>
                                                    <tr>
                                                        <td>'.$joint_proprietors.'</td>
                                                    </tr>';
                                        }
                                        if($temants_in_common){
                                            $html.='<tr>
                                                        <td><h4>TENANTS IN COMMON (who own shares in the property as they choose, i.e: 50/50, 60/40,90/10.  Upon the death of any party their share of the property is dealt with according to their will).  If you are selecting this option, please nominate shares in next question.</h4></td>
                                                    </tr>
                                                    <tr>
                                                        <td>'.$temants_in_common.'</td>
                                                    </tr>';
                                        }
                                }
                                if($distribution_percentage){
                                    $html.='<tr>
                                                <td><h4>If you have selected Tenants in Common, Please advise the share distribution in percentage. e.g.: Purchaser 1 - 70% and Purchaser 2 - 30%.</h4></td>
                                            </tr>
                                            <tr>
                                                <td>'.$distribution_percentage.'</td>
                                            </tr>';
                                }

                        $html.='<tr>
                                    <td><h4>Property Type</h4></td>
                                </tr>
                                <tr>
                                    <td>'.implode(', ', $property_type).'</td>
                                </tr>
                                <tr>
                                    <td><h4>Purpose of the property</h4></td>
                                </tr>
                                <tr>
                                    <td>'.$property_Purpose.'</td>
                                </tr>
                                <tr>
                                    <td><h4>Are you a First Home Buyer</h4></td>
                                </tr>
                                <tr>
                                    <td>'.$home_buyer.'</td>
                                </tr>
                                <tr>
                                    <td><h4>We recommend Title Insurance for extra protection during the settlement process and after the settlement. Title Insurance is not an expensive option but covers upto 20plus property ownership risks. Refer to First Title Website for more information. https://www.firsttitle.com.au</h4></td>
                                </tr>
                                <tr>
                                    <td>'.$weRecommend.'</td>
                                </tr>
                                <tr>
                                    <td><h4>Is any of the Purchasers related to Vendor\'s (e.g. - Father, Mother, Brother, Sister or In laws). If yes, please specify the relationship in next question</h4></td>
                                </tr>
                                <tr>
                                    <td>'.$isAny.'</td>
                                </tr>';
                                if($ifYou){
                                    $html.='<tr>
                                                <td><h4>If you have said yes in the above question, please specify the relationship between purchaser and vendor</h4></td>
                                            </tr>
                                            <tr>
                                                <td>'.$ifYou.'</td>
                                            </tr>';
                                }
                                if($broker_name || $broker_mobile || $broker_email || $broker_institution){
                                    $html.='<tr>
                                                <td><h4>Are you borrowing money for this purchase?</h4></td>
                                            </tr>
                                            <tr>
                                                <td><strong>Name</strong> : '.$broker_name.'</td>
                                            <tr>    
                                                <td><strong>Mobile</strong> : '.$broker_mobile.'</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Email</strong> : '.$broker_email.'</td>
                                            </tr>
                                            <tr>    
                                                <td><strong>Institution</strong> : '.$broker_institution.'</td>
                                            </tr>';
                                }
                                if($agent_name || $agent_mobile || $agent_email || $agent_institution){
                                $html.='<tr>
                                            <td><h4>Who is your real estate agent?</h4></td>
                                        </tr>
                                        <tr>
                                            <td><strong>Name</strong> : '.$agent_name.'</td>
                                        <tr>    
                                            <td><strong>Mobile</strong> : '.$agent_mobile.'</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Email</strong> : '.$agent_email.'</td>
                                        </tr>
                                        <tr>    
                                            <td><strong>Institution</strong> : '.$agent_institution.'</td>
                                        </tr>';
                                }
                                if($isareThe){
                                    $html.='<tr>
                                                <td><h4>Is/are the holder(s) of a Concession Card and wish to apply for a Stamp Duty rebate.</h4></td>
                                            </tr>
                                            <tr>
                                                <td>'.$isareThe.'</td>
                                            </tr>';
                                }
                                if($iweConfirm){
                                    $html.='<tr>
                                                <td><h4>I/We confirm that I/we have not claimed a pensioner rebate on the purchase of any previous property.**Please attach copies of the Concession Card.</h4></td>
                                            </tr>
                                            <tr>
                                                <td>'.$iweConfirm.'</td>
                                            </tr>';
                                }
                                $html.='<tr>
                                            <td><h4>Who referred you to WE KNOW CONVEYANCING?</h4></td>
                                        </tr>
                                        <tr>
                                            <td>'.$whoReferred.'</td>
                                        </tr>
                                        <tr>
                                            <td><h4>Please provide your account details, sometimes there are surplus funds at settlement which needs to be credited back to you</h4></td>
                                        </tr>
                                        <tr>
                                            <td>'.$pleaseProvide.'</td>
                                        </tr>
                                        <tr>
                                            <td><h4>BSB</h4></td>
                                        </tr>
                                        <tr>
                                            <td>'.$bsb.'</td>
                                        </tr>
                                        <tr>
                                            <td><h4>Account Number </h4></td>
                                        </tr>
                                        <tr>
                                            <td>'.$account_number.'</td>
                                        </tr>
                                        <tr>
                                            <td><h4>Signature </h4></td>
                                        </tr>
                                        <tr>
                                            <td><img src="'.$signature_data.'"></td>
                                        </tr>
                                        <tr>
                                            <td><h4>Date and Time</h4></td>
                                        </tr>
                                        <tr>
                                            <td>'.$date_time.' '.$hours.':'.$minutes.'</td>
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
                email_send($attachment_data ,implode(',', $user_email));
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
<div class="aobform-main-section">
        <div class="aobform-header-section">
            <h2>Instructions to Act - Purchaser Form</h2>
            <p>Please fill in the form below.</p>
        </div>
        <div class="aobform-form-section">
            <form class="aobform-custom-form" method="post" enctype="multipart/form-data" name="form_purchaser" id="aobform_purchaser" accept-charset="utf-8">
                <div class="address-area">
                    <label>Address of property you are purchasing <span class="form-required">*</span></label> 
                    <div class="form-control-main">
                        <div class="form-control">
                            <input type="text" name="purchasing_addr_line_1" class="addr_line_1" required>
                            <span class="field-title">Street Address</span>
                        </div>
                        <div class="row">
                            <div class="form-control">
                                <input type="text" name="purchasing_city" required>
                                <span class="field-title">Suburb</span>
                            </div>
                            <div class="form-control">
                                <input type="text" name="purchasing_state" required>
                                <span class="field-title">State</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-control">
                                <input type="text" name="purchasing_post_code" required>
                                <span class="field-title">Post Code</span>
                            </div>
                            <div class="form-control">
                                <select class="form-dropdown" name="purchasing_country" id="input_8_country" required>
                                    <option value=""> Please Select </option>
                                    <option value="United States"> United States </option>
                                    <option value="Afghanistan"> Afghanistan </option>
                                    <option value="Albania"> Albania </option>
                                    <option value="Algeria"> Algeria </option>
                                    <option value="American Samoa"> American Samoa </option>
                                    <option value="Andorra"> Andorra </option>
                                    <option value="Angola"> Angola </option>
                                    <option value="Anguilla"> Anguilla </option>
                                    <option value="Antigua and Barbuda"> Antigua and Barbuda </option>
                                    <option value="Argentina"> Argentina </option>
                                    <option value="Armenia"> Armenia </option>
                                    <option value="Aruba"> Aruba </option>
                                    <option selected value="Australia"> Australia </option>
                                    <option value="Austria"> Austria </option>
                                    <option value="Azerbaijan"> Azerbaijan </option>
                                    <option value="The Bahamas"> The Bahamas </option>
                                    <option value="Bahrain"> Bahrain </option>
                                    <option value="Bangladesh"> Bangladesh </option>
                                    <option value="Barbados"> Barbados </option>
                                    <option value="Belarus"> Belarus </option>
                                    <option value="Belgium"> Belgium </option>
                                    <option value="Belize"> Belize </option>
                                    <option value="Benin"> Benin </option>
                                    <option value="Bermuda"> Bermuda </option>
                                    <option value="Bhutan"> Bhutan </option>
                                    <option value="Bolivia"> Bolivia </option>
                                    <option value="Bosnia and Herzegovina"> Bosnia and Herzegovina </option>
                                    <option value="Botswana"> Botswana </option>
                                    <option value="Brazil"> Brazil </option>
                                    <option value="Brunei"> Brunei </option>
                                    <option value="Bulgaria"> Bulgaria </option>
                                    <option value="Burkina Faso"> Burkina Faso </option>
                                    <option value="Burundi"> Burundi </option>
                                    <option value="Cambodia"> Cambodia </option>
                                    <option value="Cameroon"> Cameroon </option>
                                    <option value="Canada"> Canada </option>
                                    <option value="Cape Verde"> Cape Verde </option>
                                    <option value="Cayman Islands"> Cayman Islands </option>
                                    <option value="Central African Republic"> Central African Republic </option>
                                    <option value="Chad"> Chad </option>
                                    <option value="Chile"> Chile </option>
                                    <option value="China"> China </option>
                                    <option value="Christmas Island"> Christmas Island </option>
                                    <option value="Cocos (Keeling) Islands"> Cocos (Keeling) Islands </option>
                                    <option value="Colombia"> Colombia </option>
                                    <option value="Comoros"> Comoros </option>
                                    <option value="Congo"> Congo </option>
                                    <option value="Cook Islands"> Cook Islands </option>
                                    <option value="Costa Rica"> Costa Rica </option>
                                    <option value="Cote d Ivoire"> Cote d Ivoire </option>
                                    <option value="Croatia"> Croatia </option>
                                    <option value="Cuba"> Cuba </option>
                                    <option value="Curacao"> Curacao </option>
                                    <option value="Cyprus"> Cyprus </option>
                                    <option value="Czech Republic"> Czech Republic </option>
                                    <option value="Democratic Republic of the Congo"> Democratic Republic of the Congo </option>
                                    <option value="Denmark"> Denmark </option>
                                    <option value="Djibouti"> Djibouti </option>
                                    <option value="Dominica"> Dominica </option>
                                    <option value="Dominican Republic"> Dominican Republic </option>
                                    <option value="Ecuador"> Ecuador </option>
                                    <option value="Egypt"> Egypt </option>
                                    <option value="El Salvador"> El Salvador </option>
                                    <option value="Equatorial Guinea"> Equatorial Guinea </option>
                                    <option value="Eritrea"> Eritrea </option>
                                    <option value="Estonia"> Estonia </option>
                                    <option value="Ethiopia"> Ethiopia </option>
                                    <option value="Falkland Islands"> Falkland Islands </option>
                                    <option value="Faroe Islands"> Faroe Islands </option>
                                    <option value="Fiji"> Fiji </option>
                                    <option value="Finland"> Finland </option>
                                    <option value="France"> France </option>
                                    <option value="French Polynesia"> French Polynesia </option>
                                    <option value="Gabon"> Gabon </option>
                                    <option value="The Gambia"> The Gambia </option>
                                    <option value="Georgia"> Georgia </option>
                                    <option value="Germany"> Germany </option>
                                    <option value="Ghana"> Ghana </option>
                                    <option value="Gibraltar"> Gibraltar </option>
                                    <option value="Greece"> Greece </option>
                                    <option value="Greenland"> Greenland </option>
                                    <option value="Grenada"> Grenada </option>
                                    <option value="Guadeloupe"> Guadeloupe </option>
                                    <option value="Guam"> Guam </option>
                                    <option value="Guatemala"> Guatemala </option>
                                    <option value="Guernsey"> Guernsey </option>
                                    <option value="Guinea"> Guinea </option>
                                    <option value="Guinea-Bissau"> Guinea-Bissau </option>
                                    <option value="Guyana"> Guyana </option>
                                    <option value="Haiti"> Haiti </option>
                                    <option value="Honduras"> Honduras </option>
                                    <option value="Hong Kong"> Hong Kong </option>
                                    <option value="Hungary"> Hungary </option>
                                    <option value="Iceland"> Iceland </option>
                                    <option value="India"> India </option>
                                    <option value="Indonesia"> Indonesia </option>
                                    <option value="Iran"> Iran </option>
                                    <option value="Iraq"> Iraq </option>
                                    <option value="Ireland"> Ireland </option>
                                    <option value="Israel"> Israel </option>
                                    <option value="Italy"> Italy </option>
                                    <option value="Jamaica"> Jamaica </option>
                                    <option value="Japan"> Japan </option>
                                    <option value="Jersey"> Jersey </option>
                                    <option value="Jordan"> Jordan </option>
                                    <option value="Kazakhstan"> Kazakhstan </option>
                                    <option value="Kenya"> Kenya </option>
                                    <option value="Kiribati"> Kiribati </option>
                                    <option value="North Korea"> North Korea </option>
                                    <option value="South Korea"> South Korea </option>
                                    <option value="Kosovo"> Kosovo </option>
                                    <option value="Kuwait"> Kuwait </option>
                                    <option value="Kyrgyzstan"> Kyrgyzstan </option>
                                    <option value="Laos"> Laos </option>
                                    <option value="Latvia"> Latvia </option>
                                    <option value="Lebanon"> Lebanon </option>
                                    <option value="Lesotho"> Lesotho </option>
                                    <option value="Liberia"> Liberia </option>
                                    <option value="Libya"> Libya </option>
                                    <option value="Liechtenstein"> Liechtenstein </option>
                                    <option value="Lithuania"> Lithuania </option>
                                    <option value="Luxembourg"> Luxembourg </option>
                                    <option value="Macau"> Macau </option>
                                    <option value="Macedonia"> Macedonia </option>
                                    <option value="Madagascar"> Madagascar </option>
                                    <option value="Malawi"> Malawi </option>
                                    <option value="Malaysia"> Malaysia </option>
                                    <option value="Maldives"> Maldives </option>
                                    <option value="Mali"> Mali </option>
                                    <option value="Malta"> Malta </option>
                                    <option value="Marshall Islands"> Marshall Islands </option>
                                    <option value="Martinique"> Martinique </option>
                                    <option value="Mauritania"> Mauritania </option>
                                    <option value="Mauritius"> Mauritius </option>
                                    <option value="Mayotte"> Mayotte </option>
                                    <option value="Mexico"> Mexico </option>
                                    <option value="Micronesia"> Micronesia </option>
                                    <option value="Moldova"> Moldova </option>
                                    <option value="Monaco"> Monaco </option>
                                    <option value="Mongolia"> Mongolia </option>
                                    <option value="Montenegro"> Montenegro </option>
                                    <option value="Montserrat"> Montserrat </option>
                                    <option value="Morocco"> Morocco </option>
                                    <option value="Mozambique"> Mozambique </option>
                                    <option value="Myanmar"> Myanmar </option>
                                    <option value="Nagorno-Karabakh"> Nagorno-Karabakh </option>
                                    <option value="Namibia"> Namibia </option>
                                    <option value="Nauru"> Nauru </option>
                                    <option value="Nepal"> Nepal </option>
                                    <option value="Netherlands"> Netherlands </option>
                                    <option value="Netherlands Antilles"> Netherlands Antilles </option>
                                    <option value="New Caledonia"> New Caledonia </option>
                                    <option value="New Zealand"> New Zealand </option>
                                    <option value="Nicaragua"> Nicaragua </option>
                                    <option value="Niger"> Niger </option>
                                    <option value="Nigeria"> Nigeria </option>
                                    <option value="Niue"> Niue </option>
                                    <option value="Norfolk Island"> Norfolk Island </option>
                                    <option value="Turkish Republic of Northern Cyprus"> Turkish Republic of Northern Cyprus </option>
                                    <option value="Northern Mariana"> Northern Mariana </option>
                                    <option value="Norway"> Norway </option>
                                    <option value="Oman"> Oman </option>
                                    <option value="Pakistan"> Pakistan </option>
                                    <option value="Palau"> Palau </option>
                                    <option value="Palestine"> Palestine </option>
                                    <option value="Panama"> Panama </option>
                                    <option value="Papua New Guinea"> Papua New Guinea </option>
                                    <option value="Paraguay"> Paraguay </option>
                                    <option value="Peru"> Peru </option>
                                    <option value="Philippines"> Philippines </option>
                                    <option value="Pitcairn Islands"> Pitcairn Islands </option>
                                    <option value="Poland"> Poland </option>
                                    <option value="Portugal"> Portugal </option>
                                    <option value="Puerto Rico"> Puerto Rico </option>
                                    <option value="Qatar"> Qatar </option>
                                    <option value="Republic of the Congo"> Republic of the Congo </option>
                                    <option value="Romania"> Romania </option>
                                    <option value="Russia"> Russia </option>
                                    <option value="Rwanda"> Rwanda </option>
                                    <option value="Saint Barthelemy"> Saint Barthelemy </option>
                                    <option value="Saint Helena"> Saint Helena </option>
                                    <option value="Saint Kitts and Nevis"> Saint Kitts and Nevis </option>
                                    <option value="Saint Lucia"> Saint Lucia </option>
                                    <option value="Saint Martin"> Saint Martin </option>
                                    <option value="Saint Pierre and Miquelon"> Saint Pierre and Miquelon </option>
                                    <option value="Saint Vincent and the Grenadines"> Saint Vincent and the Grenadines </option>
                                    <option value="Samoa"> Samoa </option>
                                    <option value="San Marino"> San Marino </option>
                                    <option value="Sao Tome and Principe"> Sao Tome and Principe </option>
                                    <option value="Saudi Arabia"> Saudi Arabia </option>
                                    <option value="Senegal"> Senegal </option>
                                    <option value="Serbia"> Serbia </option>
                                    <option value="Seychelles"> Seychelles </option>
                                    <option value="Sierra Leone"> Sierra Leone </option>
                                    <option value="Singapore"> Singapore </option>
                                    <option value="Slovakia"> Slovakia </option>
                                    <option value="Slovenia"> Slovenia </option>
                                    <option value="Solomon Islands"> Solomon Islands </option>
                                    <option value="Somalia"> Somalia </option>
                                    <option value="Somaliland"> Somaliland </option>
                                    <option value="South Africa"> South Africa </option>
                                    <option value="South Ossetia"> South Ossetia </option>
                                    <option value="South Sudan"> South Sudan </option>
                                    <option value="Spain"> Spain </option>
                                    <option value="Sri Lanka"> Sri Lanka </option>
                                    <option value="Sudan"> Sudan </option>
                                    <option value="Suriname"> Suriname </option>
                                    <option value="Svalbard"> Svalbard </option>
                                    <option value="eSwatini"> eSwatini </option>
                                    <option value="Sweden"> Sweden </option>
                                    <option value="Switzerland"> Switzerland </option>
                                    <option value="Syria"> Syria </option>
                                    <option value="Taiwan"> Taiwan </option>
                                    <option value="Tajikistan"> Tajikistan </option>
                                    <option value="Tanzania"> Tanzania </option>
                                    <option value="Thailand"> Thailand </option>
                                    <option value="Timor-Leste"> Timor-Leste </option>
                                    <option value="Togo"> Togo </option>
                                    <option value="Tokelau"> Tokelau </option>
                                    <option value="Tonga"> Tonga </option>
                                    <option value="Transnistria Pridnestrovie"> Transnistria Pridnestrovie </option>
                                    <option value="Trinidad and Tobago"> Trinidad and Tobago </option>
                                    <option value="Tristan da Cunha"> Tristan da Cunha </option>
                                    <option value="Tunisia"> Tunisia </option>
                                    <option value="Turkey"> Turkey </option>
                                    <option value="Turkmenistan"> Turkmenistan </option>
                                    <option value="Turks and Caicos Islands"> Turks and Caicos Islands </option>
                                    <option value="Tuvalu"> Tuvalu </option>
                                    <option value="Uganda"> Uganda </option>
                                    <option value="Ukraine"> Ukraine </option>
                                    <option value="United Arab Emirates"> United Arab Emirates </option>
                                    <option value="United Kingdom"> United Kingdom </option>
                                    <option value="Uruguay"> Uruguay </option>
                                    <option value="Uzbekistan"> Uzbekistan </option>
                                    <option value="Vanuatu"> Vanuatu </option>
                                    <option value="Vatican City"> Vatican City </option>
                                    <option value="Venezuela"> Venezuela </option>
                                    <option value="Vietnam"> Vietnam </option>
                                    <option value="British Virgin Islands"> British Virgin Islands </option>
                                    <option value="Isle of Man"> Isle of Man </option>
                                    <option value="US Virgin Islands"> US Virgin Islands </option>
                                    <option value="Wallis and Futuna"> Wallis and Futuna </option>
                                    <option value="Western Sahara"> Western Sahara </option>
                                    <option value="Yemen"> Yemen </option>
                                    <option value="Zambia"> Zambia </option>
                                    <option value="Zimbabwe"> Zimbabwe </option>
                                    <option value="other"> Other </option>
                                </select>
                                <span class="field-title">Country</span>
                            </div>
                        </div>  
                    </div>
                </div>
                
                <div class="form-control">
                    <label>Company Name (If buying under the company)</label>
                     <span class="form_messeage">
                        <textarea id="company_details" name="company_details" rows="6" cols="65"></textarea>
                        <small>If company is a trustee company, please provide copy of trust deed.</small>
                    </span>
                </div>
                <div class="form-control">
                    <label>ABN or ACN (If buying under the company)</label>
                    
                        <input type="text" name="abn_acn">
                  
                </div>
                <div class="form-control">
                    <label>Full Name Purchaser 1 (As per passport) <span class="form-required">*</span></label>
                     <div class="form-control-main">
                        <div class="row">
                            <div class="form-name-sec">
                                <select name="name_prefix_purchaser_1" id="name_prefix_1" class="name_prefix" required>
                                    <option value="Mr."> Mr. </option>
                                    <option value="Mrs."> Mrs. </option>
                                    <option value="Miss."> Miss. </option>
                                    <option value="Ms."> Ms. </option>
                                </select>
                            </div> 
                            <div class="form-name-sec">   
                                <input type="text" name="f_name_purchaser_1" required>
                            </div>
                            <div class="form-name-sec">
                                <input type="text" name="m_name_purchaser_1" required>
                            </div>    
                            <div class="form-name-sec">
                                <input type="text" name="l_name_purchaser_1" required>
                            </div>
                        </div>
                    </div>    
                </div>
                <div class="form-control">
                    <label>Date of Birth <span class="form-required">*</span></label>
                    <div class="date_main">
                        <input type="date" name="dob_purchaser_1" class="datepicker" autocomplete="off" required placeholder="mm/dd/yyyy">
                    </div>
                </div>
                <div class="form-control">
                    <label>Mobile Number <span class="form-required">*</span></label>
                    <div class="form-control-main">
                        <input type="number" name="mobile_no_purchaser_1" required>
                    </div>
                </div>
                <div class="form-control">
                    <label>E-mail <span class="form-required">*</span></label>
                    <div class="form-control-main">
                        <input type="email" name="email_purchaser_1" required>
                        <span style="display:block;">Preferably not a yahoo ID. Our emails go to yahoo spam</span>
                    </div>
                </div>
                <div class="form-control">
                    <label>What is your Nationality? <span class="form-required">*</span></label>
                    <div class="form-control-main">
                        <input type="text" name="nationality_purchaser_1" required>
                    </div>
                </div>
                <div class="form-control">
                    <label>If you are not an Australian Citizen,are you a Permanent Resident? <span class="form-required">*</span></label>
                     <div class="form-control-main">
                        <select class="form-dropdown validate[required] form-validation-error" id="permanent_resident_1" name="permanent_resident_purchaser_1" required style="width: 150px;">
                            <option value=""></option>
                            <option value="YES"> YES </option>
                            <option value="NO"> NO </option>
                            <option value="Not Applicable (Because I am an Australian Citizen)"> Not Applicable (Because I am an Australian Citizen) </option>
                        </select>
                    </div>    
                </div>
                <div class="form-control">
                    <label>Relationship Status <span class="form-required">*</span></label>
                     <div class="form-control-main">
                        <div class="radio-wrap">
                            <input type="radio" name="relationship_status_purchaser_1" value="Married/De Facto" required> 
                            <span>Married/De Facto</span>
                        </div>
                        <div class="radio-wrap">
                            <input type="radio" name="relationship_status_purchaser_1" value="Single" required>
                            <span>Single</span>
                        </div>    
                    </div>    
                </div>
                <div class="purchaser_1_section">
                    <div class="form-control">
                        <label>Residential Address Purchaser 1 <span class="form-required">*</span></label>
                         
                            <input type="text" name="addr_line_1_purchaser_1" class="addr_line_1" required>
                            <span class="field-title">Street Address</span>
                           
                    </div>
                    <div class="row">
                        <div class="form-control">
                           
                                <input type="text" name="city_purchaser_1" required>
                                <span class="field-title">Suburb</span>
                            
                        </div>
                        <div class="form-control">
                          
                                <input type="text" name="state_purchaser_1" required>
                                <span class="field-title">State</span>
                         
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-control">
                           
                                <input type="text" name="post_code_purchaser_1" required>
                                <span class="field-title">Post Code</span>
                             
                        </div>
                        <div class="form-control">
                            
                                <select class="form-dropdown" name="country_purchaser_1" id="input_8_country" required>
                                    <option value=""> Please Select </option>
                                    <option value="United States"> United States </option>
                                    <option value="Afghanistan"> Afghanistan </option>
                                    <option value="Albania"> Albania </option>
                                    <option value="Algeria"> Algeria </option>
                                    <option value="American Samoa"> American Samoa </option>
                                    <option value="Andorra"> Andorra </option>
                                    <option value="Angola"> Angola </option>
                                    <option value="Anguilla"> Anguilla </option>
                                    <option value="Antigua and Barbuda"> Antigua and Barbuda </option>
                                    <option value="Argentina"> Argentina </option>
                                    <option value="Armenia"> Armenia </option>
                                    <option value="Aruba"> Aruba </option>
                                    <option selected value="Australia"> Australia </option>
                                    <option value="Austria"> Austria </option>
                                    <option value="Azerbaijan"> Azerbaijan </option>
                                    <option value="The Bahamas"> The Bahamas </option>
                                    <option value="Bahrain"> Bahrain </option>
                                    <option value="Bangladesh"> Bangladesh </option>
                                    <option value="Barbados"> Barbados </option>
                                    <option value="Belarus"> Belarus </option>
                                    <option value="Belgium"> Belgium </option>
                                    <option value="Belize"> Belize </option>
                                    <option value="Benin"> Benin </option>
                                    <option value="Bermuda"> Bermuda </option>
                                    <option value="Bhutan"> Bhutan </option>
                                    <option value="Bolivia"> Bolivia </option>
                                    <option value="Bosnia and Herzegovina"> Bosnia and Herzegovina </option>
                                    <option value="Botswana"> Botswana </option>
                                    <option value="Brazil"> Brazil </option>
                                    <option value="Brunei"> Brunei </option>
                                    <option value="Bulgaria"> Bulgaria </option>
                                    <option value="Burkina Faso"> Burkina Faso </option>
                                    <option value="Burundi"> Burundi </option>
                                    <option value="Cambodia"> Cambodia </option>
                                    <option value="Cameroon"> Cameroon </option>
                                    <option value="Canada"> Canada </option>
                                    <option value="Cape Verde"> Cape Verde </option>
                                    <option value="Cayman Islands"> Cayman Islands </option>
                                    <option value="Central African Republic"> Central African Republic </option>
                                    <option value="Chad"> Chad </option>
                                    <option value="Chile"> Chile </option>
                                    <option value="China"> China </option>
                                    <option value="Christmas Island"> Christmas Island </option>
                                    <option value="Cocos (Keeling) Islands"> Cocos (Keeling) Islands </option>
                                    <option value="Colombia"> Colombia </option>
                                    <option value="Comoros"> Comoros </option>
                                    <option value="Congo"> Congo </option>
                                    <option value="Cook Islands"> Cook Islands </option>
                                    <option value="Costa Rica"> Costa Rica </option>
                                    <option value="Cote d Ivoire"> Cote d Ivoire </option>
                                    <option value="Croatia"> Croatia </option>
                                    <option value="Cuba"> Cuba </option>
                                    <option value="Curacao"> Curacao </option>
                                    <option value="Cyprus"> Cyprus </option>
                                    <option value="Czech Republic"> Czech Republic </option>
                                    <option value="Democratic Republic of the Congo"> Democratic Republic of the Congo </option>
                                    <option value="Denmark"> Denmark </option>
                                    <option value="Djibouti"> Djibouti </option>
                                    <option value="Dominica"> Dominica </option>
                                    <option value="Dominican Republic"> Dominican Republic </option>
                                    <option value="Ecuador"> Ecuador </option>
                                    <option value="Egypt"> Egypt </option>
                                    <option value="El Salvador"> El Salvador </option>
                                    <option value="Equatorial Guinea"> Equatorial Guinea </option>
                                    <option value="Eritrea"> Eritrea </option>
                                    <option value="Estonia"> Estonia </option>
                                    <option value="Ethiopia"> Ethiopia </option>
                                    <option value="Falkland Islands"> Falkland Islands </option>
                                    <option value="Faroe Islands"> Faroe Islands </option>
                                    <option value="Fiji"> Fiji </option>
                                    <option value="Finland"> Finland </option>
                                    <option value="France"> France </option>
                                    <option value="French Polynesia"> French Polynesia </option>
                                    <option value="Gabon"> Gabon </option>
                                    <option value="The Gambia"> The Gambia </option>
                                    <option value="Georgia"> Georgia </option>
                                    <option value="Germany"> Germany </option>
                                    <option value="Ghana"> Ghana </option>
                                    <option value="Gibraltar"> Gibraltar </option>
                                    <option value="Greece"> Greece </option>
                                    <option value="Greenland"> Greenland </option>
                                    <option value="Grenada"> Grenada </option>
                                    <option value="Guadeloupe"> Guadeloupe </option>
                                    <option value="Guam"> Guam </option>
                                    <option value="Guatemala"> Guatemala </option>
                                    <option value="Guernsey"> Guernsey </option>
                                    <option value="Guinea"> Guinea </option>
                                    <option value="Guinea-Bissau"> Guinea-Bissau </option>
                                    <option value="Guyana"> Guyana </option>
                                    <option value="Haiti"> Haiti </option>
                                    <option value="Honduras"> Honduras </option>
                                    <option value="Hong Kong"> Hong Kong </option>
                                    <option value="Hungary"> Hungary </option>
                                    <option value="Iceland"> Iceland </option>
                                    <option value="India"> India </option>
                                    <option value="Indonesia"> Indonesia </option>
                                    <option value="Iran"> Iran </option>
                                    <option value="Iraq"> Iraq </option>
                                    <option value="Ireland"> Ireland </option>
                                    <option value="Israel"> Israel </option>
                                    <option value="Italy"> Italy </option>
                                    <option value="Jamaica"> Jamaica </option>
                                    <option value="Japan"> Japan </option>
                                    <option value="Jersey"> Jersey </option>
                                    <option value="Jordan"> Jordan </option>
                                    <option value="Kazakhstan"> Kazakhstan </option>
                                    <option value="Kenya"> Kenya </option>
                                    <option value="Kiribati"> Kiribati </option>
                                    <option value="North Korea"> North Korea </option>
                                    <option value="South Korea"> South Korea </option>
                                    <option value="Kosovo"> Kosovo </option>
                                    <option value="Kuwait"> Kuwait </option>
                                    <option value="Kyrgyzstan"> Kyrgyzstan </option>
                                    <option value="Laos"> Laos </option>
                                    <option value="Latvia"> Latvia </option>
                                    <option value="Lebanon"> Lebanon </option>
                                    <option value="Lesotho"> Lesotho </option>
                                    <option value="Liberia"> Liberia </option>
                                    <option value="Libya"> Libya </option>
                                    <option value="Liechtenstein"> Liechtenstein </option>
                                    <option value="Lithuania"> Lithuania </option>
                                    <option value="Luxembourg"> Luxembourg </option>
                                    <option value="Macau"> Macau </option>
                                    <option value="Macedonia"> Macedonia </option>
                                    <option value="Madagascar"> Madagascar </option>
                                    <option value="Malawi"> Malawi </option>
                                    <option value="Malaysia"> Malaysia </option>
                                    <option value="Maldives"> Maldives </option>
                                    <option value="Mali"> Mali </option>
                                    <option value="Malta"> Malta </option>
                                    <option value="Marshall Islands"> Marshall Islands </option>
                                    <option value="Martinique"> Martinique </option>
                                    <option value="Mauritania"> Mauritania </option>
                                    <option value="Mauritius"> Mauritius </option>
                                    <option value="Mayotte"> Mayotte </option>
                                    <option value="Mexico"> Mexico </option>
                                    <option value="Micronesia"> Micronesia </option>
                                    <option value="Moldova"> Moldova </option>
                                    <option value="Monaco"> Monaco </option>
                                    <option value="Mongolia"> Mongolia </option>
                                    <option value="Montenegro"> Montenegro </option>
                                    <option value="Montserrat"> Montserrat </option>
                                    <option value="Morocco"> Morocco </option>
                                    <option value="Mozambique"> Mozambique </option>
                                    <option value="Myanmar"> Myanmar </option>
                                    <option value="Nagorno-Karabakh"> Nagorno-Karabakh </option>
                                    <option value="Namibia"> Namibia </option>
                                    <option value="Nauru"> Nauru </option>
                                    <option value="Nepal"> Nepal </option>
                                    <option value="Netherlands"> Netherlands </option>
                                    <option value="Netherlands Antilles"> Netherlands Antilles </option>
                                    <option value="New Caledonia"> New Caledonia </option>
                                    <option value="New Zealand"> New Zealand </option>
                                    <option value="Nicaragua"> Nicaragua </option>
                                    <option value="Niger"> Niger </option>
                                    <option value="Nigeria"> Nigeria </option>
                                    <option value="Niue"> Niue </option>
                                    <option value="Norfolk Island"> Norfolk Island </option>
                                    <option value="Turkish Republic of Northern Cyprus"> Turkish Republic of Northern Cyprus </option>
                                    <option value="Northern Mariana"> Northern Mariana </option>
                                    <option value="Norway"> Norway </option>
                                    <option value="Oman"> Oman </option>
                                    <option value="Pakistan"> Pakistan </option>
                                    <option value="Palau"> Palau </option>
                                    <option value="Palestine"> Palestine </option>
                                    <option value="Panama"> Panama </option>
                                    <option value="Papua New Guinea"> Papua New Guinea </option>
                                    <option value="Paraguay"> Paraguay </option>
                                    <option value="Peru"> Peru </option>
                                    <option value="Philippines"> Philippines </option>
                                    <option value="Pitcairn Islands"> Pitcairn Islands </option>
                                    <option value="Poland"> Poland </option>
                                    <option value="Portugal"> Portugal </option>
                                    <option value="Puerto Rico"> Puerto Rico </option>
                                    <option value="Qatar"> Qatar </option>
                                    <option value="Republic of the Congo"> Republic of the Congo </option>
                                    <option value="Romania"> Romania </option>
                                    <option value="Russia"> Russia </option>
                                    <option value="Rwanda"> Rwanda </option>
                                    <option value="Saint Barthelemy"> Saint Barthelemy </option>
                                    <option value="Saint Helena"> Saint Helena </option>
                                    <option value="Saint Kitts and Nevis"> Saint Kitts and Nevis </option>
                                    <option value="Saint Lucia"> Saint Lucia </option>
                                    <option value="Saint Martin"> Saint Martin </option>
                                    <option value="Saint Pierre and Miquelon"> Saint Pierre and Miquelon </option>
                                    <option value="Saint Vincent and the Grenadines"> Saint Vincent and the Grenadines </option>
                                    <option value="Samoa"> Samoa </option>
                                    <option value="San Marino"> San Marino </option>
                                    <option value="Sao Tome and Principe"> Sao Tome and Principe </option>
                                    <option value="Saudi Arabia"> Saudi Arabia </option>
                                    <option value="Senegal"> Senegal </option>
                                    <option value="Serbia"> Serbia </option>
                                    <option value="Seychelles"> Seychelles </option>
                                    <option value="Sierra Leone"> Sierra Leone </option>
                                    <option value="Singapore"> Singapore </option>
                                    <option value="Slovakia"> Slovakia </option>
                                    <option value="Slovenia"> Slovenia </option>
                                    <option value="Solomon Islands"> Solomon Islands </option>
                                    <option value="Somalia"> Somalia </option>
                                    <option value="Somaliland"> Somaliland </option>
                                    <option value="South Africa"> South Africa </option>
                                    <option value="South Ossetia"> South Ossetia </option>
                                    <option value="South Sudan"> South Sudan </option>
                                    <option value="Spain"> Spain </option>
                                    <option value="Sri Lanka"> Sri Lanka </option>
                                    <option value="Sudan"> Sudan </option>
                                    <option value="Suriname"> Suriname </option>
                                    <option value="Svalbard"> Svalbard </option>
                                    <option value="eSwatini"> eSwatini </option>
                                    <option value="Sweden"> Sweden </option>
                                    <option value="Switzerland"> Switzerland </option>
                                    <option value="Syria"> Syria </option>
                                    <option value="Taiwan"> Taiwan </option>
                                    <option value="Tajikistan"> Tajikistan </option>
                                    <option value="Tanzania"> Tanzania </option>
                                    <option value="Thailand"> Thailand </option>
                                    <option value="Timor-Leste"> Timor-Leste </option>
                                    <option value="Togo"> Togo </option>
                                    <option value="Tokelau"> Tokelau </option>
                                    <option value="Tonga"> Tonga </option>
                                    <option value="Transnistria Pridnestrovie"> Transnistria Pridnestrovie </option>
                                    <option value="Trinidad and Tobago"> Trinidad and Tobago </option>
                                    <option value="Tristan da Cunha"> Tristan da Cunha </option>
                                    <option value="Tunisia"> Tunisia </option>
                                    <option value="Turkey"> Turkey </option>
                                    <option value="Turkmenistan"> Turkmenistan </option>
                                    <option value="Turks and Caicos Islands"> Turks and Caicos Islands </option>
                                    <option value="Tuvalu"> Tuvalu </option>
                                    <option value="Uganda"> Uganda </option>
                                    <option value="Ukraine"> Ukraine </option>
                                    <option value="United Arab Emirates"> United Arab Emirates </option>
                                    <option value="United Kingdom"> United Kingdom </option>
                                    <option value="Uruguay"> Uruguay </option>
                                    <option value="Uzbekistan"> Uzbekistan </option>
                                    <option value="Vanuatu"> Vanuatu </option>
                                    <option value="Vatican City"> Vatican City </option>
                                    <option value="Venezuela"> Venezuela </option>
                                    <option value="Vietnam"> Vietnam </option>
                                    <option value="British Virgin Islands"> British Virgin Islands </option>
                                    <option value="Isle of Man"> Isle of Man </option>
                                    <option value="US Virgin Islands"> US Virgin Islands </option>
                                    <option value="Wallis and Futuna"> Wallis and Futuna </option>
                                    <option value="Western Sahara"> Western Sahara </option>
                                    <option value="Yemen"> Yemen </option>
                                    <option value="Zambia"> Zambia </option>
                                    <option value="Zimbabwe"> Zimbabwe </option>
                                    <option value="other"> Other </option>
                                </select>
                                <span class="field-title">Country</span>
                               
                        </div>
                    </div>  
                </div>  
                
                <div class="form-control">
                    <label>Full Name Purchaser 2 (As per passport)</label>
                   <div class="form-control-main">
                        <div class="row">
                            <div class="form-name-sec">
                                <select name="name_prefix_purchaser_2" id="name_prefix_1" class="name_prefix" required="">
                                    <option value="Mr."> Mr. </option>
                                    <option value="Mrs."> Mrs. </option>
                                    <option value="Miss."> Miss. </option>
                                    <option value="Ms."> Ms. </option>
                                </select>
                            </div> 
                            <div class="form-name-sec">   
                                <input type="text" name="f_name_purchaser_2" required="">
                            </div>
                            <div class="form-name-sec">
                                <input type="text" name="m_name_purchaser_2" required="">
                            </div>    
                            <div class="form-name-sec">
                                <input type="text" name="l_name_purchaser_2" required="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-control">
                    <label>Date of Birth </label>
                    <div class="form-control-main">
                        <input type="date" name="dob_purchaser_2" class="datepicker" autocomplete="off" required placeholder="mm/dd/yyyy">
                    </div>
                </div>
                <div class="form-control">
                    <label>Mobile Number (Must not be same as purchaser 1)</label>
                    <div class="form-control-main">
                        <input type="number" name="mobile_no_purchaser_2">
                    </div>
                </div>
                <div class="form-control">
                    <label>E-mail (Must not be same as purchaser 1)</label>
                    <div class="form-control-main">
                        <input type="email" name="email_purchaser_2">
                        <span style="display:block;">Preferably not a yahoo ID. Our emails go to yahoo spam</span>
                    </div>
                </div>
                <div class="form-control">
                    <label>What is your Nationality?</label>
                    <div class="form-control-main">
                        <input type="text" name="nationality_purchaser_2">
                    </div>
                </div>
                <div class="form-control">
                    <label>If you are not an Australian Citizen,are you a Permanent Resident?</label>
                    <div class="form-control-main">
                        <select class="form-dropdown" id="permanent_resident_2" name="permanent_resident_purchaser_2" style="width:150px;">
                            <option value=""></option>
                            <option value="YES"> YES </option>
                            <option value="NO"> NO </option>
                            <option value="Not Applicable (Because I am an Australian Citizen)"> Not Applicable (Because I am an Australian Citizen) </option>
                        </select>
                    </div>
                </div>
                <div class="form-control">
                    <label>Relationship Status </label>
                    <div class="form-control-main">
                         <div class="radio-wrap">
                            <input type="radio" name="relationship_status_purchaser_2" value="Married/De Facto">
                            <span>Married/De Facto</span>
                        </div>
                         <div class="radio-wrap">
                            <input type="radio" name="relationship_status_purchaser_2" value="Single"> 
                            <span>Single</span>
                        </div>
                    </div>    
                </div>
               
                  <div class="residential_section purchaser_1_section">
                    <div class="form-control">
                        <label>Residential Address Purchaser 2 </label>
                         
                            <input type="text" name="addr_line_1_residential" class="addr_line_1" required="">
                            <span class="field-title">Street Address</span>
                           
                    </div>
                    <div class="row">
                        <div class="form-control">
                           
                                <input type="text" name="city_residential" required="">
                                <span class="field-title">Suburb</span>
                            
                        </div>
                        <div class="form-control">
                          
                                <input type="text" name="state_residential" required="">
                                <span class="field-title">State</span>
                         
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-control">
                           
                                <input type="text" name="post_code_residential" required="">
                                <span class="field-title">Post Code</span>
                             
                        </div>
                        <div class="form-control">
                            
                                <select class="form-dropdown" name="country_residential" id="input_8_country" required="">
                                    <option value=""> Please Select </option>
                                    <option value="United States"> United States </option>
                                    <option value="Afghanistan"> Afghanistan </option>
                                    <option value="Albania"> Albania </option>
                                    <option value="Algeria"> Algeria </option>
                                    <option value="American Samoa"> American Samoa </option>
                                    <option value="Andorra"> Andorra </option>
                                    <option value="Angola"> Angola </option>
                                    <option value="Anguilla"> Anguilla </option>
                                    <option value="Antigua and Barbuda"> Antigua and Barbuda </option>
                                    <option value="Argentina"> Argentina </option>
                                    <option value="Armenia"> Armenia </option>
                                    <option value="Aruba"> Aruba </option>
                                    <option selected="" value="Australia"> Australia </option>
                                    <option value="Austria"> Austria </option>
                                    <option value="Azerbaijan"> Azerbaijan </option>
                                    <option value="The Bahamas"> The Bahamas </option>
                                    <option value="Bahrain"> Bahrain </option>
                                    <option value="Bangladesh"> Bangladesh </option>
                                    <option value="Barbados"> Barbados </option>
                                    <option value="Belarus"> Belarus </option>
                                    <option value="Belgium"> Belgium </option>
                                    <option value="Belize"> Belize </option>
                                    <option value="Benin"> Benin </option>
                                    <option value="Bermuda"> Bermuda </option>
                                    <option value="Bhutan"> Bhutan </option>
                                    <option value="Bolivia"> Bolivia </option>
                                    <option value="Bosnia and Herzegovina"> Bosnia and Herzegovina </option>
                                    <option value="Botswana"> Botswana </option>
                                    <option value="Brazil"> Brazil </option>
                                    <option value="Brunei"> Brunei </option>
                                    <option value="Bulgaria"> Bulgaria </option>
                                    <option value="Burkina Faso"> Burkina Faso </option>
                                    <option value="Burundi"> Burundi </option>
                                    <option value="Cambodia"> Cambodia </option>
                                    <option value="Cameroon"> Cameroon </option>
                                    <option value="Canada"> Canada </option>
                                    <option value="Cape Verde"> Cape Verde </option>
                                    <option value="Cayman Islands"> Cayman Islands </option>
                                    <option value="Central African Republic"> Central African Republic </option>
                                    <option value="Chad"> Chad </option>
                                    <option value="Chile"> Chile </option>
                                    <option value="China"> China </option>
                                    <option value="Christmas Island"> Christmas Island </option>
                                    <option value="Cocos (Keeling) Islands"> Cocos (Keeling) Islands </option>
                                    <option value="Colombia"> Colombia </option>
                                    <option value="Comoros"> Comoros </option>
                                    <option value="Congo"> Congo </option>
                                    <option value="Cook Islands"> Cook Islands </option>
                                    <option value="Costa Rica"> Costa Rica </option>
                                    <option value="Cote d Ivoire"> Cote d Ivoire </option>
                                    <option value="Croatia"> Croatia </option>
                                    <option value="Cuba"> Cuba </option>
                                    <option value="Curacao"> Curacao </option>
                                    <option value="Cyprus"> Cyprus </option>
                                    <option value="Czech Republic"> Czech Republic </option>
                                    <option value="Democratic Republic of the Congo"> Democratic Republic of the Congo </option>
                                    <option value="Denmark"> Denmark </option>
                                    <option value="Djibouti"> Djibouti </option>
                                    <option value="Dominica"> Dominica </option>
                                    <option value="Dominican Republic"> Dominican Republic </option>
                                    <option value="Ecuador"> Ecuador </option>
                                    <option value="Egypt"> Egypt </option>
                                    <option value="El Salvador"> El Salvador </option>
                                    <option value="Equatorial Guinea"> Equatorial Guinea </option>
                                    <option value="Eritrea"> Eritrea </option>
                                    <option value="Estonia"> Estonia </option>
                                    <option value="Ethiopia"> Ethiopia </option>
                                    <option value="Falkland Islands"> Falkland Islands </option>
                                    <option value="Faroe Islands"> Faroe Islands </option>
                                    <option value="Fiji"> Fiji </option>
                                    <option value="Finland"> Finland </option>
                                    <option value="France"> France </option>
                                    <option value="French Polynesia"> French Polynesia </option>
                                    <option value="Gabon"> Gabon </option>
                                    <option value="The Gambia"> The Gambia </option>
                                    <option value="Georgia"> Georgia </option>
                                    <option value="Germany"> Germany </option>
                                    <option value="Ghana"> Ghana </option>
                                    <option value="Gibraltar"> Gibraltar </option>
                                    <option value="Greece"> Greece </option>
                                    <option value="Greenland"> Greenland </option>
                                    <option value="Grenada"> Grenada </option>
                                    <option value="Guadeloupe"> Guadeloupe </option>
                                    <option value="Guam"> Guam </option>
                                    <option value="Guatemala"> Guatemala </option>
                                    <option value="Guernsey"> Guernsey </option>
                                    <option value="Guinea"> Guinea </option>
                                    <option value="Guinea-Bissau"> Guinea-Bissau </option>
                                    <option value="Guyana"> Guyana </option>
                                    <option value="Haiti"> Haiti </option>
                                    <option value="Honduras"> Honduras </option>
                                    <option value="Hong Kong"> Hong Kong </option>
                                    <option value="Hungary"> Hungary </option>
                                    <option value="Iceland"> Iceland </option>
                                    <option value="India"> India </option>
                                    <option value="Indonesia"> Indonesia </option>
                                    <option value="Iran"> Iran </option>
                                    <option value="Iraq"> Iraq </option>
                                    <option value="Ireland"> Ireland </option>
                                    <option value="Israel"> Israel </option>
                                    <option value="Italy"> Italy </option>
                                    <option value="Jamaica"> Jamaica </option>
                                    <option value="Japan"> Japan </option>
                                    <option value="Jersey"> Jersey </option>
                                    <option value="Jordan"> Jordan </option>
                                    <option value="Kazakhstan"> Kazakhstan </option>
                                    <option value="Kenya"> Kenya </option>
                                    <option value="Kiribati"> Kiribati </option>
                                    <option value="North Korea"> North Korea </option>
                                    <option value="South Korea"> South Korea </option>
                                    <option value="Kosovo"> Kosovo </option>
                                    <option value="Kuwait"> Kuwait </option>
                                    <option value="Kyrgyzstan"> Kyrgyzstan </option>
                                    <option value="Laos"> Laos </option>
                                    <option value="Latvia"> Latvia </option>
                                    <option value="Lebanon"> Lebanon </option>
                                    <option value="Lesotho"> Lesotho </option>
                                    <option value="Liberia"> Liberia </option>
                                    <option value="Libya"> Libya </option>
                                    <option value="Liechtenstein"> Liechtenstein </option>
                                    <option value="Lithuania"> Lithuania </option>
                                    <option value="Luxembourg"> Luxembourg </option>
                                    <option value="Macau"> Macau </option>
                                    <option value="Macedonia"> Macedonia </option>
                                    <option value="Madagascar"> Madagascar </option>
                                    <option value="Malawi"> Malawi </option>
                                    <option value="Malaysia"> Malaysia </option>
                                    <option value="Maldives"> Maldives </option>
                                    <option value="Mali"> Mali </option>
                                    <option value="Malta"> Malta </option>
                                    <option value="Marshall Islands"> Marshall Islands </option>
                                    <option value="Martinique"> Martinique </option>
                                    <option value="Mauritania"> Mauritania </option>
                                    <option value="Mauritius"> Mauritius </option>
                                    <option value="Mayotte"> Mayotte </option>
                                    <option value="Mexico"> Mexico </option>
                                    <option value="Micronesia"> Micronesia </option>
                                    <option value="Moldova"> Moldova </option>
                                    <option value="Monaco"> Monaco </option>
                                    <option value="Mongolia"> Mongolia </option>
                                    <option value="Montenegro"> Montenegro </option>
                                    <option value="Montserrat"> Montserrat </option>
                                    <option value="Morocco"> Morocco </option>
                                    <option value="Mozambique"> Mozambique </option>
                                    <option value="Myanmar"> Myanmar </option>
                                    <option value="Nagorno-Karabakh"> Nagorno-Karabakh </option>
                                    <option value="Namibia"> Namibia </option>
                                    <option value="Nauru"> Nauru </option>
                                    <option value="Nepal"> Nepal </option>
                                    <option value="Netherlands"> Netherlands </option>
                                    <option value="Netherlands Antilles"> Netherlands Antilles </option>
                                    <option value="New Caledonia"> New Caledonia </option>
                                    <option value="New Zealand"> New Zealand </option>
                                    <option value="Nicaragua"> Nicaragua </option>
                                    <option value="Niger"> Niger </option>
                                    <option value="Nigeria"> Nigeria </option>
                                    <option value="Niue"> Niue </option>
                                    <option value="Norfolk Island"> Norfolk Island </option>
                                    <option value="Turkish Republic of Northern Cyprus"> Turkish Republic of Northern Cyprus </option>
                                    <option value="Northern Mariana"> Northern Mariana </option>
                                    <option value="Norway"> Norway </option>
                                    <option value="Oman"> Oman </option>
                                    <option value="Pakistan"> Pakistan </option>
                                    <option value="Palau"> Palau </option>
                                    <option value="Palestine"> Palestine </option>
                                    <option value="Panama"> Panama </option>
                                    <option value="Papua New Guinea"> Papua New Guinea </option>
                                    <option value="Paraguay"> Paraguay </option>
                                    <option value="Peru"> Peru </option>
                                    <option value="Philippines"> Philippines </option>
                                    <option value="Pitcairn Islands"> Pitcairn Islands </option>
                                    <option value="Poland"> Poland </option>
                                    <option value="Portugal"> Portugal </option>
                                    <option value="Puerto Rico"> Puerto Rico </option>
                                    <option value="Qatar"> Qatar </option>
                                    <option value="Republic of the Congo"> Republic of the Congo </option>
                                    <option value="Romania"> Romania </option>
                                    <option value="Russia"> Russia </option>
                                    <option value="Rwanda"> Rwanda </option>
                                    <option value="Saint Barthelemy"> Saint Barthelemy </option>
                                    <option value="Saint Helena"> Saint Helena </option>
                                    <option value="Saint Kitts and Nevis"> Saint Kitts and Nevis </option>
                                    <option value="Saint Lucia"> Saint Lucia </option>
                                    <option value="Saint Martin"> Saint Martin </option>
                                    <option value="Saint Pierre and Miquelon"> Saint Pierre and Miquelon </option>
                                    <option value="Saint Vincent and the Grenadines"> Saint Vincent and the Grenadines </option>
                                    <option value="Samoa"> Samoa </option>
                                    <option value="San Marino"> San Marino </option>
                                    <option value="Sao Tome and Principe"> Sao Tome and Principe </option>
                                    <option value="Saudi Arabia"> Saudi Arabia </option>
                                    <option value="Senegal"> Senegal </option>
                                    <option value="Serbia"> Serbia </option>
                                    <option value="Seychelles"> Seychelles </option>
                                    <option value="Sierra Leone"> Sierra Leone </option>
                                    <option value="Singapore"> Singapore </option>
                                    <option value="Slovakia"> Slovakia </option>
                                    <option value="Slovenia"> Slovenia </option>
                                    <option value="Solomon Islands"> Solomon Islands </option>
                                    <option value="Somalia"> Somalia </option>
                                    <option value="Somaliland"> Somaliland </option>
                                    <option value="South Africa"> South Africa </option>
                                    <option value="South Ossetia"> South Ossetia </option>
                                    <option value="South Sudan"> South Sudan </option>
                                    <option value="Spain"> Spain </option>
                                    <option value="Sri Lanka"> Sri Lanka </option>
                                    <option value="Sudan"> Sudan </option>
                                    <option value="Suriname"> Suriname </option>
                                    <option value="Svalbard"> Svalbard </option>
                                    <option value="eSwatini"> eSwatini </option>
                                    <option value="Sweden"> Sweden </option>
                                    <option value="Switzerland"> Switzerland </option>
                                    <option value="Syria"> Syria </option>
                                    <option value="Taiwan"> Taiwan </option>
                                    <option value="Tajikistan"> Tajikistan </option>
                                    <option value="Tanzania"> Tanzania </option>
                                    <option value="Thailand"> Thailand </option>
                                    <option value="Timor-Leste"> Timor-Leste </option>
                                    <option value="Togo"> Togo </option>
                                    <option value="Tokelau"> Tokelau </option>
                                    <option value="Tonga"> Tonga </option>
                                    <option value="Transnistria Pridnestrovie"> Transnistria Pridnestrovie </option>
                                    <option value="Trinidad and Tobago"> Trinidad and Tobago </option>
                                    <option value="Tristan da Cunha"> Tristan da Cunha </option>
                                    <option value="Tunisia"> Tunisia </option>
                                    <option value="Turkey"> Turkey </option>
                                    <option value="Turkmenistan"> Turkmenistan </option>
                                    <option value="Turks and Caicos Islands"> Turks and Caicos Islands </option>
                                    <option value="Tuvalu"> Tuvalu </option>
                                    <option value="Uganda"> Uganda </option>
                                    <option value="Ukraine"> Ukraine </option>
                                    <option value="United Arab Emirates"> United Arab Emirates </option>
                                    <option value="United Kingdom"> United Kingdom </option>
                                    <option value="Uruguay"> Uruguay </option>
                                    <option value="Uzbekistan"> Uzbekistan </option>
                                    <option value="Vanuatu"> Vanuatu </option>
                                    <option value="Vatican City"> Vatican City </option>
                                    <option value="Venezuela"> Venezuela </option>
                                    <option value="Vietnam"> Vietnam </option>
                                    <option value="British Virgin Islands"> British Virgin Islands </option>
                                    <option value="Isle of Man"> Isle of Man </option>
                                    <option value="US Virgin Islands"> US Virgin Islands </option>
                                    <option value="Wallis and Futuna"> Wallis and Futuna </option>
                                    <option value="Western Sahara"> Western Sahara </option>
                                    <option value="Yemen"> Yemen </option>
                                    <option value="Zambia"> Zambia </option>
                                    <option value="Zimbabwe"> Zimbabwe </option>
                                    <option value="other"> Other </option>
                                </select>
                                <span class="field-title">Country</span>
                               
                        </div>
                    </div>  
                </div>
                <div class="more_than_one_purchaser">
                    <label class="form-label"> If more than one purchaser, how would you like to register? Choose one option from below. </label>
                    <span class="form-checkbox-item" style="clear:left">
                        <input type="checkbox" class="form-checkbox" id="joint_proprietors" name="joint_proprietors" value="Yes">
                        <label> JOINT PROPRIETORS (each person owns an equal share of the property and, upon the death of any party, their share passes to the other owner/s) </label>
                    </span>
                    <span class="form-checkbox-item" style="clear:left">
                        <input type="checkbox" class="form-checkbox" id="temants_in_common" name="temants_in_common" value="Yes">
                        <label> TENANTS IN COMMON (who own shares in the property as they choose, i.e: 50/50, 60/40,90/10.&nbsp; Upon the death of any party their share of the property is dealt with according to their will).&nbsp; If you are selecting this option, please nominate shares in next question. </label>
                    </span>
                </div>
                <div class="form-control">
                    <label>If you have selected Tenants in Common, Please advise the share distribution in percentage. e.g.: Purchaser 1 - 70% and Purchaser 2 - 30%.</label>
                    <textarea id="distribution-percentage" class="form-textarea" name="distribution-percentage" cols="40" rows="6" data-component="textarea" aria-labelledby="label_43">Purchaser 1 - 
Purchaser 2 -</textarea>
                <div class="form_bottom_sec">
                <div class="form-control">
                    <label>Property Type (Tick one or more) <span class="form-required">*</span></label>
                    <div id="property_type" class="property_type">
                    <div class="form-single-column">
                        <span class="form-checkbox-item">
                        <input type="checkbox" class="form-checkbox" id="land" name="property_type[]" value="Land" required="">
                        <label id="label_input_16_0"> Land </label>
                        </span>
                        <span class="form-checkbox-item">
                        <input type="checkbox" class="form-checkbox" id="established_home" name="property_type[]" value="Established Home" required="">
                        <label id="label_input_16_1"> Established Home </label>
                        </span>
                        <span class="form-checkbox-item">
                        <input type="checkbox" class="form-checkbox" id="newly_built_home" name="property_type[]" value="Newly Built Home (I will be first occupant)" required="">
                        <label id="label_input_16_2"> Newly Built Home (I will be first occupant) </label>
                        </span>
                        <span class="form-checkbox-item">
                        <input type="checkbox"class="form-checkbox" id="residential" name="property_type[]" value="Residential" required="">
                        <label id="label_input_16_3"> Residential </label>
                        </span>
                        <span class="form-checkbox-item">
                        <span class="dragger-item">
                        </span>
                        <input type="checkbox" class="form-checkbox" id="commercial" name="property_type[]" value="Commercial" required="">
                        <label id="label_input_16_4"> Commercial </label>
                        </span>
                        <span class="form-checkbox-item">
                        <input type="checkbox" class="form-checkbox" id="off_the_plan" name="property_type[]" value="Off the plan" required="">
                        <label id="label_input_16_5"> Off the plan </label>
                        </span>
                    </div>
                    </div>
                </div>
                <div class="form-control">
                    <label>Purpose of the property <span class="form-required">*</span> </label>
                    <select class="form-dropdown" id="property_Purpose" name="property_Purpose" required>
                        <option value="">  </option>
                        <option value="Live In"> Live In </option>
                        <option value="Investment"> Investment </option>
                    </select>
                </div>
                <div class="form-control">
                    <label>Are you a First Home Buyer <span class="form-required">*</span></label>
                    <select class="form-dropdown" id="home_buyer" name="home_buyer" required>
                        <option value="">  </option>
                        <option value="Yes"> Yes </option>
                        <option value="No"> No </option>
                    </select>
                </div>
                <div class="form-control">
                    <label>We recommend Title Insurance for extra protection during the settlement process and after the settlement. Title Insurance is not an expensive option but covers upto 20plus property ownership risks. Refer to First Title Website for more information. https://www.firsttitle.com.au <span class="form-required">*</span></label>
                    <select class="form-dropdown" id="input_49" name="weRecommend" required>
                        <option value="">  </option>
                        <option value="Yes"> Yes </option>
                        <option value="No"> No </option>
                    </select>
                </div>
                <div class="form-control">
                    <label>Is any of the Purchasers related to Vendor\'s (e.g. - Father, Mother, Brother, Sister or In laws). If yes, please specify the relationship in next question. <span class="form-required">*</span></label>
                    <select class="form-dropdown" id="input_49" name="isAny" required>
                        <option value="">  </option>
                        <option value="Yes"> Yes </option>
                        <option value="No"> No </option>
                    </select>
                </div>
                <div class="form-control">
                    <label>If you have said yes in the above question, please specify the relationship between purchaser and vendor.</label>
                    <input type="text" id="input_37" name="ifYou" class="form-textbox">
                </div>

                <div class="form-control">
                    <label>Are you borrowing money for this purchase?</label>
                    <div id="cid_21" class="form-input-wide">
                        <table cellpadding="4" cellspacing="0" class="form-matrix-table" style="width:500px">
                            <tbody>
                            <tr class="form-matrix-tr form-matrix-header-tr">
                                <th class="form-matrix-th" style="border:none">
                                &nbsp;
                                </th>
                                <th scope="col" class="form-matrix-headers form-matrix-column-headers form-matrix-column_0" style="width:250px">
                                <label id="label_21_col_0"> Details </label>
                                </th>
                            </tr>
                            <tr class="form-matrix-tr form-matrix-value-tr" aria-labelledby="label_21 label_21_row_0">
                                <th scope="row" class="form-matrix-headers form-matrix-row-headers">
                                <label id="label_21_row_0"> Name of the Broker or Banker </label>
                                </th>
                                <td class="form-matrix-values">
                                <input type="text" class="form-textbox" name="broker_name">
                                </td>
                            </tr>
                            <tr class="form-matrix-tr form-matrix-value-tr" aria-labelledby="label_21 label_21_row_1">
                                <th scope="row" class="form-matrix-headers form-matrix-row-headers">
                                <label id="label_21_row_1"> Mobile </label>
                                </th>
                                <td class="form-matrix-values">
                                <input type="number" class="form-textbox" name="broker_mobile">
                                </td>
                            </tr>
                            <tr class="form-matrix-tr form-matrix-value-tr" aria-labelledby="label_21 label_21_row_2">
                                <th scope="row" class="form-matrix-headers form-matrix-row-headers">
                                <label id="label_21_row_2"> Email </label>
                                </th>
                                <td class="form-matrix-values">
                                <input type="text" class="form-textbox" name="broker_email">
                                </td>
                            </tr>
                            <tr class="form-matrix-tr form-matrix-value-tr" aria-labelledby="label_21 label_21_row_3">
                                <th scope="row" class="form-matrix-headers form-matrix-row-headers">
                                <label id="label_21_row_3"> Institution </label>
                                </th>
                                <td class="form-matrix-values">
                                <input type="text" class="form-textbox" name="broker_institution">
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="form-control">
                    <label>Who is your real estate agent?</label>
                    <div id="cid_26" class="form-input-wide">
                        <table cellpadding="4" cellspacing="0" class="form-matrix-table" style="width:500px" data-component="matrix">
                            <tbody>
                            <tr class="form-matrix-tr form-matrix-header-tr">
                                <th class="form-matrix-th" style="border:none">
                                &nbsp;
                                </th>
                                <th scope="col" class="form-matrix-headers form-matrix-column-headers form-matrix-column_0" style="width:250px">
                                <label id="label_26_col_0"> Details </label>
                                </th>
                            </tr>
                            <tr class="form-matrix-tr form-matrix-value-tr" aria-labelledby="label_26 label_26_row_0">
                                <th scope="row" class="form-matrix-headers form-matrix-row-headers">
                                <label id="label_26_row_0"> Name </label>
                                </th>
                                <td class="form-matrix-values">
                                <input type="text" class="form-textbox"name="agent_name">
                                </td>
                            </tr>
                            <tr class="form-matrix-tr form-matrix-value-tr" aria-labelledby="label_26 label_26_row_1">
                                <th scope="row" class="form-matrix-headers form-matrix-row-headers">
                                <label id="label_26_row_1"> Mobile </label>
                                </th>
                                <td class="form-matrix-values">
                                <input type="number" class="form-textbox"name="agent_mobile">
                                </td>
                            </tr>
                            <tr class="form-matrix-tr form-matrix-value-tr" aria-labelledby="label_26 label_26_row_2">
                                <th scope="row" class="form-matrix-headers form-matrix-row-headers">
                                <label id="label_26_row_2"> Email </label>
                                </th>
                                <td class="form-matrix-values">
                                <input type="text" class="form-textbox" name="agent_email">
                                </td>
                            </tr>
                            <tr class="form-matrix-tr form-matrix-value-tr" aria-labelledby="label_26 label_26_row_3">
                                <th scope="row" class="form-matrix-headers form-matrix-row-headers">
                                <label id="label_26_row_3"> Institution </label>
                                </th>
                                <td class="form-matrix-values">
                                <input type="text" class="form-textbox" name="agent_institution">
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="form-control">
                    <label>Is/are the holder(s) of a Concession Card and wish to apply for a Stamp Duty rebate.</label>
                    <select class="form-dropdown" id="input_23" name="isareThe">
                        <option value="">  </option>
                        <option value="YES"> YES </option>
                        <option value="NO"> NO </option>
                    </select>
                </div>
                <div class="form-control">
                    <label>I/We confirm that I/we have not claimed a pensioner rebate on the purchase of any previous property.**Please attach copies of the Concession Card.</label>
                    <select class="form-dropdown" id="input_24" name="iweConfirm">
                        <option value="">  </option>
                        <option value="YES"> YES </option>
                        <option value="NO"> NO </option>
                    </select>
                </div>

                <div class="form-control">
                    <label>Attach Photo ID/ID\'s of all purchasers</label>
                    <input class="fileupload-input" id="input_25" type="file" name="file[]" multiple="multiple">
                </div>

                <div class="form-control">
                    <label>Who referred you to WE KNOW CONVEYANCING? <span class="form-required">*</span></label>
                    <input type="text" id="input_27" name="whoReferred" class="form-textbox" size="45" required>
                </div>

                <div class="form-control">
                    <label>Please provide your account details, sometimes there are surplus funds at settlement which needs to be credited back to you. <span class="form-required">*</span></label>
                    <input type="text" id="account_no" name="pleaseProvide" class="form-textbox" required>
                    <span style="display:block;">Account Name</span>
                </div>

                <div class="form-control">
                    <label>BSB <span class="form-required">*</span></label>
                    <input type="number" id="bsb" name="bsb" class="form-textbox" required>
                </div>

                <div class="form-control">
                    <label>Account Number <span class="form-required">*</span></label>
                    <input type="text" id="account_number" name="account_number" class="form-textbox" required>
                </div>

                <div class="form_sgnature_main">
                     <label>Signature <span class="form-required">*</span></label>
                    <canvas id="signature" width="300" height="100" required></canvas>
                    <input type="hidden" value="" id="signature_data" name="signature_data" required>
                    <button id="clear-signature">Clear</button>
                </div>

                <div class="form-control">
                    <label>Date and Time <span class="form-required">*</span></label>
                    <div class="date_main">
                    <input type="text" name="date_time"  autocomplete="off" required value="<?php echo date('d-M-Y'); ?>" readonly>
                     <span>Date</span>
                 </div>
                 <div class="time_main">
                    <div class="time_inner">
                    <select class="currentTime time-dropdown form-dropdown disabled-dropdown" id="hour" name="hours">
                        <option></option>
                        <?php 
                        $hoursarray = array('00','01','02','03','04','05','06','07','08','09','10','11','12','13','14','15','16','17','18','19','20','21','22','23');
                            foreach($hoursarray as $hours){?>
                                 <option value="<?php echo $hours ?>" <?php echo (isset($hours) && $hours == date('H')) ? "selected" : '' ?>> <?php echo $hours; ?> </option>
                        <?php } ?>
                    </select>
                    <span>Hour</span>
                </div>
                <div class="time_inner">
                    <select class="currentTime time-dropdown form-dropdown disabled-dropdown" id="minutes" name="minutes">
                        <option></option>
                        <?php 
                        $minutesarray = array('00','01','02','03','04','05','06','07','08','09','10','11','12','13','14','15','16','17','18','19','20','21','22','23','24','25','26','27','28','29','30','31','32','33','34','35','36','37','38','39','40','41','42','43','44','45','46','47','48','49','50','51','52','53','54','55','56','57','58','59');
                            foreach($minutesarray as $minute){?>
                                 <option value="<?php echo $minute ?>" <?php echo (isset($minute) && $minute == date('i')) ? "selected" : '' ?>> <?php echo $minute; ?> </option>
                        <?php } ?>
                    </select>
                    <span>Minutes</span>
                </div>
                </div>
                </div>
                <div class="form_submit_main">
                    <input type="submit" name ="btn-submit" value="Submit Form" class="submit-btn">
                    <div class="loader" style="display:none;">
                        <h5>Loading...</h5>
                        <p>Please Wait.Your Document is Uploading.</p>
                    </div>
                </div>
            </form>
        </div>
    </div>
<?php
 return ob_get_clean();
}

add_shortcode('Purchaser_Form','purchaser_form');