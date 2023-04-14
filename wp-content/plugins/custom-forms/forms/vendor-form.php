<?php
/* Form  Act - Vendor Form */ 

function vendor_form(){ 
    $msg_vendor = "";
    $attachment_data = array();
    ob_start();
    if(isset($_POST['btn-submit-vendor'])){ 
        if(!empty($_POST['selling_addr_line_1']) && !empty($_POST['selling_city']) && !empty($_POST['selling_state']) && !empty($_POST['selling_post_code']) && !empty($_POST['selling_country']) && !empty($_POST['name_prefix_vendor_1']) && !empty($_POST['f_name_vendor_1']) && !empty($_POST['m_name_vendor_1']) && !empty($_POST['l_name_vendor_1']) && !empty($_POST['dob_vendor_1']) && !empty($_POST['mobile_no_vendor_1']) && !empty($_POST['email_vendor_1'])  && !empty($_POST['addr_line_1_vendor_1'])  && !empty($_POST['city_vendor_1'])  && !empty($_POST['state_vendor_1'])  && !empty($_POST['post_code_vendor_1'])  && !empty($_POST['country_vendor_1'])  && !empty($_POST['nationality_vendor_1']) && !empty($_POST['permanent_resident_vendor_1']) && !empty($_POST['property_type'])  && !empty($_POST['areYou'])  && !empty($_POST['ifGst'])  && !empty($_POST['whatAre']) && !empty($_POST['ownersCorporationbody']) && !empty($_POST['ifSelling']) && !empty($_POST['sellingVia']) && !empty($_POST['ifYou']) && !empty($_POST['whichOf']) && !empty($_POST['addr_line_1_future']) && !empty($_POST['city_future']) && !empty($_POST['state_future']) && !empty($_POST['country_future']) && !empty($_POST['accountDetails']) && !empty($_POST['bsb']) && !empty($_POST['account_number']) && !empty($_POST['whoReferred']) && !empty($_POST['signature_data']) && !empty($_POST['date_time']) && !empty($_POST['hours']) && !empty($_POST['minutes'])){

            $selling_addr_line_1 = isset($_POST['selling_addr_line_1']) ? $_POST['selling_addr_line_1'] : '';
            $selling_city = isset($_POST['selling_city']) ? $_POST['selling_city'] : '';
            $selling_state = isset($_POST['selling_state']) ? $_POST['selling_state'] : '';
            $selling_post_code = isset($_POST['selling_post_code']) ? $_POST['selling_post_code'] : '';
            $selling_country = isset($_POST['selling_country']) ? $_POST['selling_country'] : '';
            $name_prefix_vendor_1 = isset($_POST['name_prefix_vendor_1']) ? $_POST['name_prefix_vendor_1'] : '';
            $f_name_vendor_1 = isset($_POST['f_name_vendor_1']) ? $_POST['f_name_vendor_1'] : '';
            $m_name_vendor_1 = isset($_POST['m_name_vendor_1']) ? $_POST['m_name_vendor_1'] : '';
            $l_name_vendor_1 = isset($_POST['l_name_vendor_1']) ? $_POST['l_name_vendor_1'] : '';
            $dob_vendor_1 = isset($_POST['dob_vendor_1']) ? $_POST['dob_vendor_1'] : '';
            $mobile_no_vendor_1 = isset($_POST['mobile_no_vendor_1']) ? $_POST['mobile_no_vendor_1'] : '';
            $email_vendor_1 = isset($_POST['email_vendor_1']) ? $_POST['email_vendor_1'] : '';
            $addr_line_1_vendor_1 = isset($_POST['addr_line_1_vendor_1']) ? $_POST['addr_line_1_vendor_1'] : '';
            $city_vendor_1 = isset($_POST['city_vendor_1']) ? $_POST['city_vendor_1'] : '';
            $state_vendor_1 = isset($_POST['state_vendor_1']) ? $_POST['state_vendor_1'] : '';
            $post_code_vendor_1 = isset($_POST['post_code_vendor_1']) ? $_POST['post_code_vendor_1'] : '';
            $country_vendor_1 = isset($_POST['country_vendor_1']) ? $_POST['country_vendor_1'] : '';
            $nationality_vendor_1 = isset($_POST['nationality_vendor_1']) ? $_POST['nationality_vendor_1'] : '';
            $permanent_resident_vendor_1 = isset($_POST['permanent_resident_vendor_1']) ? $_POST['permanent_resident_vendor_1'] : '';
            $name_prefix_vendor_2 = isset($_POST['name_prefix_vendor_2']) ? $_POST['name_prefix_vendor_2'] : '';
            $f_name_vendor_2 = isset($_POST['f_name_vendor_2']) ? $_POST['f_name_vendor_2'] : '';
            $m_name_vendor_2 = isset($_POST['m_name_vendor_2']) ? $_POST['m_name_vendor_2'] : '';
            $l_name_vendor_2 = isset($_POST['l_name_vendor_2']) ? $_POST['l_name_vendor_2'] : '';
            $dob_vendor_2 = isset($_POST['dob_vendor_2']) ? $_POST['dob_vendor_2'] : '';
            $mobile_no_vendor_2 = isset($_POST['mobile_no_vendor_2']) ? $_POST['mobile_no_vendor_2'] : '';
            $email_vendor_2 = isset($_POST['email_vendor_2']) ? $_POST['email_vendor_2'] : '';
            $addr_line_1_residential = isset($_POST['addr_line_1_residential']) ? $_POST['addr_line_1_residential'] : '';
            $city_residential = isset($_POST['city_residential']) ? $_POST['city_residential'] : '';
            $state_residential = isset($_POST['state_residential']) ? $_POST['state_residential'] : '';  
            $post_code_residential = isset($_POST['post_code_residential']) ? $_POST['post_code_residential'] : '';
            $country_residential = isset($_POST['country_residential']) ? $_POST['country_residential'] : ''; 
            $nationality_vendor_2 = isset($_POST['nationality_vendor_2']) ? $_POST['nationality_vendor_2'] : '';
            $permanent_resident_vendor_2 = isset($_POST['permanent_resident_vendor_2']) ? $_POST['permanent_resident_vendor_2'] : '';
            $property_type = isset($_POST['property_type']) ? $_POST['property_type'] : '';
            $areYou = isset($_POST['areYou']) ? $_POST['areYou'] : '';
            $ifGst = isset($_POST['ifGst']) ? $_POST['ifGst'] : '';
            $whatAre = isset($_POST['whatAre']) ? $_POST['whatAre'] : '';     
            $ifSelling42 = isset($_POST['ifSelling42']) ? $_POST['ifSelling42'] : '';
            $ownersCorporationbody = isset($_POST['ownersCorporationbody']) ? $_POST['ownersCorporationbody'] : '';
            $ifSelling = isset($_POST['ifSelling']) ? $_POST['ifSelling'] : '';
            $bank_name = isset($_POST['bank_name']) ? $_POST['bank_name'] : '';
            $loan_account_no = isset($_POST['loan_account_no']) ? $_POST['loan_account_no'] : '';
            $agent_name = isset($_POST['agent_name']) ? $_POST['agent_name'] : '';
            $agent_mobile = isset($_POST['agent_mobile']) ? $_POST['agent_mobile'] : '';
            $agent_email = isset($_POST['agent_email']) ? $_POST['agent_email'] : '';
            $agent_institution = isset($_POST['agent_institution']) ? $_POST['agent_institution'] : '';
            $sellingVia = isset($_POST['sellingVia']) ? $_POST['sellingVia'] : '';
            $auction_date = isset($_POST['auction_date']) ? $_POST['auction_date'] : '';
            $otherRelevant = isset($_POST['otherRelevant']) ? $_POST['otherRelevant'] : '';
            $haveYou = isset($_POST['haveYou']) ? $_POST['haveYou'] : '';
            $ifYou = isset($_POST['ifYou']) ? $_POST['ifYou'] : '';
            $rentalManager = isset($_POST['rentalManager']) ? $_POST['rentalManager'] : '';
            $ifThe34 = isset($_POST['ifThe34']) ? $_POST['ifThe34'] : '';
            $whichOf = isset($_POST['whichOf']) ? $_POST['whichOf'] : '';
            $pleaseProvide = isset($_POST['pleaseProvide']) ? $_POST['pleaseProvide'] : '';
            $addr_line_1_future = isset($_POST['addr_line_1_future']) ? $_POST['addr_line_1_future'] : '';
            $city_future = isset($_POST['city_future']) ? $_POST['city_future'] : '';
            $state_future = isset($_POST['state_future']) ? $_POST['state_future'] : '';
            $post_code_future = isset($_POST['post_code_future']) ? $_POST['post_code_future'] : '';
            $country_future = isset($_POST['country_future']) ? $_POST['country_future'] : '';  
            $accountDetails = isset($_POST['accountDetails']) ? $_POST['accountDetails'] : '';
            $bsb = isset($_POST['bsb']) ? $_POST['bsb'] : '';
            $account_number = isset($_POST['account_number']) ? $_POST['account_number'] : '';
            $whoReferred = isset($_POST['whoReferred']) ? $_POST['whoReferred'] : '';
            $date_time = isset($_POST['date_time']) ? $_POST['date_time'] : '';    
            $hours = isset($_POST['hours']) ? $_POST['hours'] : '';    
            $minutes = isset($_POST['minutes']) ? $_POST['minutes'] : '';
        
            $vendor_file = (isset($_FILES['vendor_file']) && !empty($_FILES['vendor_file'])) ? attechment_write($_FILES['vendor_file']) : '';
            $attachmentFile = (isset($_FILES['file']) && !empty($_FILES['file'])) ? attechment_write($_FILES['file']) : '';
            $signature_data = isset($_POST['signature_data']) ? $_POST['signature_data'] : '';
            
            $user_email[]= (!empty($email_vendor_1)) ? $email_vendor_1 : '';
            $user_email[]= (!empty($email_vendor_2)) ? $email_vendor_2 : '';

            $html = '<table>
                        <tr>
                            <td><h2>Instructions to Act - Vendor Form</h2><td>
                        </tr>
                        <tr>
                            <td><h4>Address of property you are selling</h4></td>
                        </tr>
                        <tr>
                            <td><strong>Street Address</strong> : '.$selling_addr_line_1.'</td>
                        </tr>
                        <tr>
                            <td><strong>Suburb</strong> : '.$selling_city.'</td>
                        </tr>
                        <tr>
                            <td><strong>State</strong> : '.$selling_state.'</td>
                        </tr>
                        <tr>
                            <td><strong>Post Code</strong> : '.$selling_post_code.'</td>
                        </tr>
                        <tr>
                            <td><strong>Country</strong> : '.$selling_country.'</td>
                        </tr>
                        <tr>
                            <td><h4>Full Name Vendor 1</h4></td>
                        </tr>
                        <tr>
                            <td><strong>'.$name_prefix_vendor_1.'</strong> '.$f_name_vendor_1.' '.$m_name_vendor_1.' '.$l_name_vendor_1.'</td>
                        </tr>
                        <tr>
                            <td><h4>Date of Birth</h4></td>
                        </tr>
                        <tr>
                            <td>'.$dob_vendor_1.'</td>
                        </tr>
                        <tr>
                            <td><h4>Mobile Number</h4></td>
                        </tr>
                        <tr>
                            <td>'.$mobile_no_vendor_1.'</td>
                        </tr>
                        <tr>
                            <td><h4>E-mail</h4></td>
                        </tr>
                        <tr>
                            <td>'.$email_vendor_1.'</td>
                        </tr>
                        <tr>
                            <td><h4>Residential Address Vendor 1</h4></td>
                        </tr>
                        <tr>
                            <td><strong>Street Address</strong> : '.$addr_line_1_vendor_1.'</td>
                        </tr>
                        <tr>
                            <td><strong>Suburb</strong> : '.$city_vendor_1.'</td>
                        </tr>
                        <tr>
                            <td><strong>State</strong> : '.$state_vendor_1.'</td>
                        </tr>
                        <tr>
                            <td><strong>Post Code</strong> : '.$post_code_vendor_1.'</td>
                        </tr>
                        <tr>
                            <td><strong>Country</strong> : '.$country_vendor_1.'</td>
                        </tr>
                        <tr>
                            <td><h4>Nationality</h4></td>
                        </tr>
                        <tr>
                            <td>'.$nationality_vendor_1.'</td>
                        </tr>
                        <tr>
                            <td><h4>If you are not an Australian Citizen, are you a permanent resident of Australia?</h4></td>
                        </tr>
                        <tr>
                            <td>'.$permanent_resident_vendor_1.'</td>
                        </tr>';
                        if($name_prefix_vendor_2 || $f_name_vendor_2 || $m_name_vendor_2 || $l_name_vendor_2){
                            $html.='<tr>
                                        <td><h4>Full Name Vendor 2</h4></td>
                                    </tr>
                                    <tr>
                                        <td><strong>'.$name_prefix_vendor_2.'</strong> '.$f_name_vendor_2.' '.$m_name_vendor_2.' '.$l_name_vendor_2.'</td>
                                    </tr>';
                        }
                        if($dob_vendor_2){    
                            $html.='<tr>
                                        <td><h4>Date of Birth</h4></td>
                                    </tr>
                                    <tr>
                                        <td>'.$dob_vendor_2.'</td>
                                    </tr>';
                        }
                        if($mobile_no_vendor_2){
                            $html.='<tr>
                                        <td><h4>Mobile Number</h4></td>
                                    </tr>
                                    <tr>
                                        <td>'.$mobile_no_vendor_2.'</td>
                                    </tr>';
                        }
                        if($email_vendor_2){
                            $html.='<tr>
                                        <td><h4>E-mail</h4></td>
                                    </tr>
                                    <tr>
                                        <td>'.$email_vendor_2.'</td>
                                    </tr>';
                        }
                        if($addr_line_1_residential || $city_residential || $state_residential || $state_residential || $post_code_residential || $country_residential){
                            $html.='<tr>
                                        <td><h4>Residential Address Vendor 2</h4></td>
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
                        if($nationality_vendor_2){
                            $html.='<tr>
                                        <td><h4>Nationality</h4></td>
                                    </tr>
                                    <tr>
                                        <td>'.$nationality_vendor_2.'</td>
                                    </tr>';
                        }
                        if($permanent_resident_vendor_2){           
                            $html.='<tr>
                                        <td><h4>If you are not an Australian Citizen, are you a permanent resident of Australia?</h4></td>
                                    </tr>
                                    <tr>
                                        <td>'.$permanent_resident_vendor_2.'</td>
                                    </tr>';
                        }
                        $html.='<tr>
                                    <td><h4>Property Type</h4></td>
                                </tr>
                                <tr>
                                    <td>'.implode(', ', $property_type).'</td>
                                </tr>
                                <tr>
                                    <td><h4>Are you required to pay GST on this transaction?   If unsure please refer to the ATO website GST Property decision tool or seek your accountants advice</h4></td>
                                </tr>
                                <tr>
                                    <td>'.$areYou.'</td>
                                </tr>
                                <tr>
                                    <td><h4>If GST is payable, Please advise if Margin Scheme is applicable. If unsure, speak to your accountant. </h4></td>
                                </tr>
                                <tr>
                                    <td>'.$ifGst.'</td>
                                </tr>
                                <tr>
                                    <td><h4>What are the estimated yearly rates of your property? (Council, Water, Land Tax and Owners Corp etc).</h4></td>
                                </tr>
                                <tr>
                                    <td>'.$whatAre.'</td>
                                </tr>';
                                if($ifSelling42){
                                    $html.='<tr>
                                                <td><h4>If selling land, which estate and in which stage did you buy?</h4></td>
                                            </tr>
                                            <tr>
                                                <td>'.$ifSelling42.'</td>
                                            </tr>';
                                }
                                $html.='<tr>
                                            <td><h4>Owners Corporation/Body Corp Applicable?</h4></td>
                                        </tr>
                                        <tr>
                                            <td>'.$ownersCorporationbody.'</td>
                                        </tr>
                                        <tr>
                                            <td><h4>If selling house, was it built in last 7 years, if yes, please provide the copy of building permit, Builders Warranty Insurance and occupancy permit.</h4></td>
                                        </tr>
                                        <tr>
                                            <td>'.$ifSelling.'</td>
                                        </tr>';

                                if($bank_name || $loan_account_no){
                                    $html.='<tr>
                                                <td><h4>Do you have mortgage on the property?</h4></td>
                                            </tr>
                                            <tr>
                                                <td><strong>Name of the Bank</strong> : '.$bank_name.'</td>
                                            <tr>    
                                                <td><strong>Loan Account Number</strong> : '.$loan_account_no.'</td>
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
                                $html.='<tr>
                                            <td><h4>Selling via Auction? </h4></td>
                                        </tr>
                                        <tr>
                                            <td>'.$sellingVia.'</td>
                                        </tr>';
                                if($auction_date){
                                    $html.='<tr>
                                                <td><h4>Auction Date</h4></td>
                                            </tr>
                                            <tr>
                                                <td>'.$auction_date.'</td>
                                            </tr>';
                                }
                                if($otherRelevant){
                                    $html.='<tr>
                                                <td><h4>Other relevant details</h4></td>
                                            </tr>
                                            <tr>
                                                <td>'.implode(', ', $otherRelevant).'</td>
                                            </tr>';
                                }

                                if($haveYou){
                                    $html.='<tr>
                                                <td><h4>Have you received any notices from any authority or are you aware of any other matter that may affect a purchaser?</h4></td>
                                            </tr>
                                            <tr>
                                                <td>'.implode(', ', $haveYou).'</td>
                                            </tr>';
                                }

                                $html.='<tr>
                                            <td><h4>If you are selling your investment property, is it currently leased to tenants. (If yes, please attach the copy of lease agreement below in supporting docs section)</h4></td>
                                        </tr>
                                        <tr>
                                            <td>'.$ifYou.'</td>
                                        </tr>';
                                if($rentalManager){
                                    $html.='<tr>
                                                <td><h4>Rental Manager Agency Details</h4></td>
                                            </tr>
                                            <tr>
                                                <td>'.$rentalManager.'</td>
                                            </tr>';
                                }
                                if($ifThe34){
                                    $html.='<tr>
                                                <td><h4>If the property has common property (e.g. a unit/apartment), please tell us the name of the owner’s corporation management company and thier contact details. Also attach a copy of lates owners corporation bill.</h4></td>
                                            </tr>
                                            <tr>
                                                <td>'.$ifThe34.'</td>
                                            </tr>';
                                }
                                        
                                
                                $html.='<tr>
                                            <td><h4>Which of the following services are connected:</h4></td>
                                        </tr>
                                        <tr>
                                            <td>'.implode(', ', $whichOf).'</td>
                                        </tr>';
                                if($pleaseProvide){
                                    $html.='<tr>
                                                <td><h4>Please provide copies of the following documents,if possible:</h4></td>
                                            </tr>
                                            <tr>
                                                <td>'.implode(', ', $pleaseProvide).'</td>
                                            </tr>';
                                }        
                                $html.='<tr>
                                            <td><h4>What will be your future address?</h4></td>
                                        </tr>
                                        <tr>
                                            <td><strong>Street Address</strong> : '.$addr_line_1_future.'</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Suburb</strong> : '.$city_future.'</td>
                                        </tr>
                                        <tr>
                                            <td><strong>State</strong> : '.$state_future.'</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Post Code</strong> : '.$post_code_future.'</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Country</strong> : '.$country_future.'</td>
                                        </tr>
                                        <tr>
                                            <td><h4>Account Details for Surplus Funds/Extra Funds to be credited to yourself</h4></td>
                                        </tr>
                                        <tr>
                                            <td>'.$accountDetails.'</td>
                                        </tr>
                                        <tr>
                                            <td><h4> BSB </h4></td>
                                        </tr>
                                        <tr>
                                            <td>'.$bsb.'</td>
                                        </tr>
                                        <tr>
                                            <td><h4>Account Number</h4></td>
                                        </tr>
                                        <tr>
                                            <td>'.$account_number.'</td>
                                        </tr>
                                        <tr>
                                            <td><h4>Who referred you to WE KNOW CONVEYANCING?</h4></td>
                                        </tr>
                                        <tr>
                                            <td>'.$whoReferred.'</td>
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
                    if(!empty($vendor_file) && $vendor_file != false){
                        foreach($vendor_file as $attFileVendor){
                            $attachment_data[]= $attFileVendor;
                        }
                    }
                    
                    if(!empty($pdfName) && $pdfName != false){
                        $attachment_data[]= $pdfName;
                    }
                    if(!empty($attachment_data) && count($attachment_data) > 0){
                        email_send($attachment_data , implode(',', $user_email));
                    }
                    $msg_vendor = "<div class='aobform_msg'>
                                        <div class='aobform_msg_inner aobform_success'>
                                            <span class='aobform_close_popup'></span>
                                            <h5>Thank You</h5>
                                            <p>Your submission has been received.</p>
                                        </div>
                                    </div>";

        }else{
            $msg_vendor = "<div class='aobform_msg'>
                                <div class='aobform_msg_inner aobform_error'>
                                    <span class='aobform_close_popup'></span>
                                    <h5>Error</h5>
                                    <p>There are errors on the form. Please fix them before continuing.</p>
                                </div>
                            </div>";
        }


    }
    echo $msg_vendor;
    ?>
    <div class="aobform-main-section">
        <div class="aobform-header-section">
            <h2>Instructions to Act – Vendor Form</h2>
            <p>Please fill in the form below.</p>
        </div>
        <div class="aobform-form-section">
            <form class="aobform-custom-form" method="post" enctype="multipart/form-data" name="form_purchaser" id="aobform_vendor" accept-charset="utf-8" novalidate="novalidate">
                <div class="address-area">    
                    <label>Address of property you are selling <span class="form-required">*</span></label>
    <div class="form-control-main">
    <div class="form-control">
                        
                        <input type="text" name="selling_addr_line_1" class="addr_line_1" required="">
                        <span class="field-title">Street Address</span>
                    </div>
                    <div class="row">
                        <div class="form-control">
                            <input type="text" name="selling_city" required="">
                            <span class="field-title">Suburb</span>
                        </div>
                        <div class="form-control">
                            <input type="text" name="selling_state" required="">
                            <span class="field-title">State</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-control">
                            <input type="text" name="selling_post_code" required="">
                            <span class="field-title">Post Code</span>
                        </div>
                        <div class="form-control">
                            <select class="form-dropdown" name="selling_country" id="input_8_country" required="">
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
                </div>
                
                <div class="form-control">
                    <label>Full Name Vendor 1 <span class="form-required">*</span></label>
    <div class="form-control-main">
                    <div class="row">
                         <div class="form-name-sec">
                        <select name="name_prefix_vendor_1" id="name_prefix_1" class="name_prefix" required="">
                            <option value="Mr."> Mr. </option>
                            <option value="Mrs."> Mrs. </option>
                            <option value="Miss."> Miss. </option>
                            <option value="Ms."> Ms. </option>
                        </select>
                    </div>
                         <div class="form-name-sec">
                        <input type="text" name="f_name_vendor_1" required="">
                         </div>
                              <div class="form-name-sec">
                        <input type="text" name="m_name_vendor_1" required="">
                              </div>
                                   <div class="form-name-sec">
                        <input type="text" name="l_name_vendor_1" required="">
                                   </div>
                    </div>
    </div>
                </div>
                <div class="form-control">
                    <label>Date of Birth <span class="form-required">*</span></label>
    <div class="date_main">
                    <input type="date" name="dob_vendor_1" class="datepicker hasDatepicker" autocomplete="off" required="" placeholder="mm/dd/yyyy" id="dp1680853963630">
    </div>
                </div>
                <div class="form-control">
                    <label>Mobile Number <span class="form-required">*</span></label>
    <div class="form-control-main">
                    <input type="number" name="mobile_no_vendor_1" required="">
    </div>
                </div>
                <div class="form-control">
                    <label>E-mail <span class="form-required">*</span></label>
    <div class="form-control-main">
                    <input type="email" name="email_vendor_1" required="">
                    <span style="display:block;">Preferably not a yahoo ID. Our emails go to yahoo spam</span>
    </div>
                </div>
                <div class="vendor_1_section purchaser_1_section">
                    <div class="form-control">
                        <label>Residential Address Vendor 1 <span class="form-required">*</span></label>
                        <input type="text" name="addr_line_1_vendor_1" class="addr_line_1" required="">
                        <span class="field-title">Street Address</span>
                    </div>
                    <div class="row">
                        <div class="form-control">
                            <input type="text" name="city_vendor_1" required="">
                            <span class="field-title">Suburb</span>
                        </div>
                        <div class="form-control">
                            <input type="text" name="state_vendor_1" required="">
                            <span class="field-title">State</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-control">
                            <input type="text" name="post_code_vendor_1" required="">
                            <span class="field-title">Post Code</span>
                        </div>
                        <div class="form-control">
                            <select class="form-dropdown" name="country_vendor_1" id="input_8_country" required="">
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
                <div class="form-control">
                    <label>Nationality <span class="form-required">*</span></label>
                    <input type="text" name="nationality_vendor_1" required="">
                </div>
                <div class="form-control">
                    <label>If you are not an Australian Citizen,are you a Permanent Resident? <span class="form-required">*</span></label>
                    <select class="form-dropdown validate[required] form-validation-error" id="permanent_resident_1" name="permanent_resident_vendor_1" required="">
                        <option value=""></option>
                        <option value="YES"> YES </option>
                        <option value="NO"> NO </option>
                        <option value="N/A - I am an Australian Citizen">N/A – I am an Australian Citizen</option>
                    </select>
                </div> 
                <div class="form-control">
                    <label>Full Name Vendor 2</label>
    <div class="form-control-main">
                    <div class="row">
                        <div class="form-name-sec"> 
                        <select name="name_prefix_vendor_2" id="name_prefix_2" class="name_prefix_vendor_2">
                            <option value="Mr."> Mr. </option>
                            <option value="Mrs."> Mrs. </option>
                            <option value="Miss."> Miss. </option>
                            <option value="Ms."> Ms. </option>
                        </select>
                    </div>
        <div class="form-name-sec"> 
                        <input type="text" name="f_name_vendor_2">

        </div>
                        <div class="form-name-sec"> 
                        <input type="text" name="m_name_vendor_2">
                        </div>
                        <div class="form-name-sec"> 
                        <input type="text" name="l_name_vendor_2">
                        </div>
                    </div>
    </div>
                </div>
                <div class="form-control">
                    <label>Date of Birth </label>
                    <input type="date" name="dob_vendor_2" class="datepicker hasDatepicker" autocomplete="off" required="" placeholder="mm/dd/yyyy" id="dp1680853963631">
                </div>
                <div class="form-control">
                    <label>Mobile Number (Must not be same as Vendor 1)</label>
                    <input type="number" name="mobile_no_vendor_2">
                </div>
                <div class="form-control">
                    <label>E-mail (Must not be same as Vendor 1)</label>
    <div class="form-control-main">
                    <input type="email" name="email_vendor_2">
                    <span style="display:block;">Preferably not a yahoo ID. Our emails go to yahoo spam.</span>
    </div>
                </div>
                <div class="residential_section purchaser_1_section">
                    <div class="form-control">
                        <label>Residential Address Vendor 2 </label>
                        <input type="text" name="addr_line_1_residential" class="addr_line_1">
                        <span class="field-title">Street Address</span>
                    </div>
                    <div class="row">
                        <div class="form-control">
                            <input type="text" name="city_residential">
                            <span class="field-title">Suburb</span>
                        </div>
                        <div class="form-control">
                            <input type="text" name="state_residential">
                            <span class="field-title">State</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-control">
                            <input type="text" name="post_code_residential">
                            <span class="field-title">Post Code</span>
                        </div>
                        <div class="form-control">
                            <select class="form-dropdown" name="country_residential" id="input_8_country">
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
                <div class="form-control">
                    <label>Nationality</label>
                    <input type="text" name="nationality_vendor_2">
                </div>
                <div class="form-control">
                    <label>If you are not an Australian Citizen, are you a permanent resident of Australia?</label>
                    <select class="form-dropdown validate[required] form-validation-error" id="permanent_resident_2" name="permanent_resident_vendor_2">
                        <option value=""></option>
                        <option value="YES"> YES </option>
                        <option value="NO"> NO </option>
                        <option value="N/A - I am an Australian Citizen "> N/A – I am an Australian Citizen </option>
                    </select>
                </div>
                <div class="form-control">
                    <label>Property Type (Tick one or more) <span class="form-required">*</span></label>
                    <div id="property_type" class="property_type">
                    <div class="form-single-column">
                        <span class="form-checkbox-item">
                        <input type="checkbox" class="form-checkbox" id="land" name="property_type[]" value="Land" required="">
                        <label id="label_input_16_0"> Land </label>
                        </span>
                        <span class="form-checkbox-item">
                        <input type="checkbox" class="form-checkbox" id="established_home" name="property_type[]" value="Home and Land Package" required="">
                        <label id="label_input_16_1"> Home and Land Package </label>
                        </span>
                        <span class="form-checkbox-item">
                        <input type="checkbox" class="form-checkbox" id="newly_built_home" name="property_type[]" value="Established Home" required="">
                        <label id="label_input_16_2"> Established Home </label>
                        </span>
                        <span class="form-checkbox-item">
                        <input type="checkbox" class="form-checkbox" id="residential" name="property_type[]" value="Newly Built Home (Buyer will be first occupant)" required="">
                        <label id="label_input_16_3"> Newly Built Home (Buyer will be first occupant) </label>
                        </span>
                        <span class="form-checkbox-item">
                        <input type="checkbox" class="form-checkbox" id="commercial" name="property_type[]" value="Residential" required="">
                        <label id="label_input_16_4"> Residential </label>
                        </span>
                        <span class="form-checkbox-item">
                        <input type="checkbox" class="form-checkbox" id="commercial" name="property_type[]" value="Commercial" required="">
                        <label id="label_input_16_5"> Commercial </label>
                        </span>
                        <span class="form-checkbox-item">
                        <input type="checkbox" class="form-checkbox" id="off_the_plan" name="property_type[]" value="Off the plan" required="">
                        <label id="label_input_16_6"> Off the plan </label>
                        </span>
                    </div>
                    </div>
                </div>
                <div class="form-control">
                    <label>Are you required to pay GST on this transaction?   If unsure please refer to the ATO website GST Property decision tool or seek your accountants advice. <span class="form-required">*</span></label>
    <div class="form-control-main">
                    <select class="form-dropdown" id="areYou" name="areYou" required="">
                        <option value=""></option>
                        <option value="YES">  YES </option>
                        <option value="NO"> NO </option>
                    </select>
    </div>
                </div>
                <div class="form-control">
                    <label>If GST is payable, Please advise if Margin Scheme is applicable. If unsure, speak to your accountant. <span class="form-required">*</span></label>
                    <select class="form-dropdown" id="ifGst" name="ifGst" required="">
                        <option value="">  </option>
                        <option value="Yes"> Yes </option>
                        <option value="No"> No </option>
                        <option value="Not Applicable (As GST is not payable)"> Not Applicable (As GST is not payable) </option>
                    </select>
                </div>
                <div class="form-control">
                    <label>What are the estimated yearly rates of your property? (Council, Water, Land Tax and Owners Corp etc). <span class="form-required">*</span></label>
                    <input type="text" name="whatAre" value="$" required="">
                </div>
                <div class="form-control">
                    <label>If selling land, which estate and in which stage did you buy?</label>
                    <textarea name="ifSelling42" cols="40" rows="6"></textarea>
                </div>
                <div class="form-control">
                    <label>Owners Corporation/Body Corp Applicable? <span class="form-required">*</span></label>
                    <select class="form-dropdown" name="ownersCorporationbody" required="">
                        <option value="">  </option>
                        <option value="YES"> YES </option>
                        <option value="NO"> NO </option>
                    </select>
                </div>

                <div class="form-control">
                    <label>If selling house, was it built in last 7 years, if yes, please provide the copy of building permit, Builders Warranty Insurance and occupancy permit. <span class="form-required">*</span></label>
                    <select class="form-dropdown" name="ifSelling" required="">
                        <option value=""> </option>
                        <option value="YES"> YES </option>
                        <option value="NO"> NO </option>
                        <option value="Not Applicable"> Not Applicable </option>
                    </select>
                </div>

                <div class="form-control">
                    <label>Do you have mortgage on the property?</label>
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
                                <label id="label_21_row_0"> Name of the Bank </label>
                                </th>
                                <td class="form-matrix-values">
                                <input type="text" class="form-textbox" name="bank_name">
                                </td>
                            </tr>
                            <tr class="form-matrix-tr form-matrix-value-tr" aria-labelledby="label_21 label_21_row_1">
                                <th scope="row" class="form-matrix-headers form-matrix-row-headers">
                                <label id="label_21_row_1"> Loan Account Number </label>
                                </th>
                                <td class="form-matrix-values">
                                <input type="number" class="form-textbox" name="loan_account_no">
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
                                <input type="text" class="form-textbox" name="agent_name">
                                </td>
                            </tr>
                            <tr class="form-matrix-tr form-matrix-value-tr" aria-labelledby="label_26 label_26_row_1">
                                <th scope="row" class="form-matrix-headers form-matrix-row-headers">
                                <label id="label_26_row_1"> Mobile </label>
                                </th>
                                <td class="form-matrix-values">
                                <input type="number" class="form-textbox" name="agent_mobile">
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
                    <label>Selling via Auction? <span class="form-required">*</span></label>
                    <select class="form-dropdown" name="sellingVia">
                        <option value="">  </option>
                        <option value="YES"> YES </option>
                        <option value="NO"> NO </option>
                    </select>
                </div>
                <div class="form-control">
                    <label>If Auction? Auction Date</label>
                    <input type="date" name="auction_date" class="datepicker hasDatepicker" autocomplete="off" required="" placeholder="mm/dd/yyyy" id="dp1680853963632">
                </div>
                <div class="form-control">
                    <label>Other relevant details (Choose one or more)</label>
                    <div id="cid_31" class="form-input-wide">
                        <div class="form-single-column" role="group" aria-labelledby="label_31" data-component="checkbox">
                            <span class="form-checkbox-item" style="clear:left">
                                <input type="checkbox" class="form-checkbox" name="otherRelevant[]" value="We have a swimming pool">
                                <label> We have a swimming pool. </label>
                            </span>
                            <span class="form-checkbox-item" style="clear:left">
                                <input type="checkbox" class="form-checkbox" name="otherRelevant[]" value="We have a spa">
                                <label> We have a spa. </label>
                            </span>
                            <span class="form-checkbox-item" style="clear:left">
                                <input type="checkbox" class="form-checkbox" name="otherRelevant[]" value="We are selling all the fixtures and fittings with the property">
                                <label> We are selling all the fixtures and fittings with the property </label>
                            </span>
                            <span class="form-checkbox-item" style="clear:left">
                                <input type="checkbox" class="form-checkbox" name="otherRelevant[]" value="We have done building works/renovations in past 7 years? Please provide permits and approvals">
                                <label> We have done building works/renovations in past 7 years? Please provide permits and approvals. </label>
                            </span>
                        </div>
                    </div>
                </div>

                <div class="form-control">
                    <label>Have you received any notices from any authority or are you aware of any other matter that may affect a purchaser?</label>
                    <div id="cid_31" class="form-input-wide">
                        <div class="form-single-column" role="group" aria-labelledby="label_31" data-component="checkbox">
                            <span class="form-checkbox-item" style="clear:left">
                                <input type="checkbox" class="form-checkbox" name="haveYou[]" value="Fencing Notice">
                                <label> Fencing Notice. </label>
                            </span>
                            <span class="form-checkbox-item" style="clear:left">
                                <input type="checkbox" class="form-checkbox" name="haveYou[]" value="Building Notice">
                                <label>Building Notice. </label>
                            </span>
                            <span class="form-checkbox-item" style="clear:left">
                                <input type="checkbox" class="form-checkbox" name="haveYou[]" value="Road Works">
                                <label> Road Works </label>
                            </span>
                            <span class="form-checkbox-item" style="clear:left">
                                <input type="checkbox" class="form-checkbox" name="haveYou[]" value="Others">
                                <label> Others </label>
                            </span>
                        </div>
                    </div>
                </div>

                <div class="form-control">
                    <label>If you are selling your investment property, is it currently leased to tenants. (If yes, please attach the copy of lease agreement below in supporting docs section) </label>
                    <select class="form-dropdown" name="ifYou" required="">
                        <option value=""> </option>
                        <option value="YES"> YES </option>
                        <option value="NO"> NO </option>
                        <option value="N/A It is not my investment property."> N/A It is not my investment property. </option>
                    </select>
                </div>

                <div class="form-control">
                    <label>Rental Manager Agency Details</label>
                    <div class="form-control-main"><textarea class="form-dropdown" name="rentalManager" cols="50" rows="6" required="" style="
    width: 100% !important;
    border-color: #ccc;
    box-shadow: none;
"></textarea></div>
                </div>

                <div class="form-control">
                    <label>If the property has common property (e.g. a unit/apartment), please tell us the name of the owner’s corporation management company and thier contact details. Also attach a copy of lates owners corporation bill.</label>
                    <div class="form-control-main"><textarea class="form-dropdown" name="ifThe34" cols="40" rows="6" required="" style="
    width: 100% !important;
    border-color: #ccc;
    box-shadow: none;
"></textarea></div>
                </div>

                <div class="form-control">
                    <label>Which of the following services are connected: <span class="form-required">*</span> </label>
                    <div class="form-input-wide">
                        <div id="cid_35" class="form-input-wide jf-required">
                            <div class="form-single-column" role="group" aria-labelledby="label_35" data-component="checkbox">
                                <span class="form-checkbox-item" style="clear:left">
                                    <input type="checkbox" class="form-checkbox" name="whichOf[]" value="Water" required="">
                                    <label> Water </label>
                                </span>
                                <span class="form-checkbox-item" style="clear:left">
                                    <input type="checkbox" class="form-checkbox" name="whichOf[]" value="Gas" required="">
                                    <label> Gas </label>
                                </span>
                                <span class="form-checkbox-item" style="clear:left">
                                    <input type="checkbox" class="form-checkbox" name="whichOf[]" value="Telephone/Internet" required="">
                                    <label> Telephone/Internet </label>
                                </span>
                                <span class="form-checkbox-item" style="clear:left">
                                    <input type="checkbox" class="form-checkbox" name="whichOf[]" value="Sewerage" required="">
                                    <label id="label_input_35_3" for="input_35_3"> Sewerage </label>
                                </span>
                                <span class="form-checkbox-item" style="clear:left">
                                    <input type="checkbox" class="form-checkbox" name="whichOf[]" value="Electricity" required="">
                                    <label> Electricity </label>
                                </span>
                                <span class="form-checkbox-item" style="clear:left">
                                    <input type="checkbox" class="form-checkbox" name="whichOf[]" value="None of the above - If vacant land" required="">
                                    <label> None of the above – If vacant land </label>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-control">
                    <label>Attach Photo ID/ID’s of all Vendor’s</label>
                    <input multiple="multiple" class="fileupload-input" type="file" name="vendor_file[]">
                </div>

                <div class="form-control">
                    <label> Please provide copies of the following documents,if possible: </label>
                    <div class="form-input-wide">
                        <div class="form-single-column" role="group" aria-labelledby="label_31" data-component="checkbox">
                            <span class="form-checkbox-item" style="clear:left">
                                <input type="checkbox" class="form-checkbox" name="pleaseProvide[]" value="Rates Notice from council">
                                <label> Rates Notice from council </label>
                            </span>
                            <span class="form-checkbox-item" style="clear:left">
                                <input type="checkbox" class="form-checkbox" name="pleaseProvide[]" value="Water bill">
                                <label>BWater bill </label>
                            </span>
                            <span class="form-checkbox-item" style="clear:left">
                                <input type="checkbox" class="form-checkbox" name="pleaseProvide[]" value="Loan Statement">
                                <label> Loan Statement </label>
                            </span>
                            <span class="form-checkbox-item" style="clear:left">
                                <input type="checkbox" class="form-checkbox" name="pleaseProvide[]" value="Copy of Title">
                                <label> Copy of Title </label>
                            </span>
                            <span class="form-checkbox-item" style="clear:left">
                                <input type="checkbox" class="form-checkbox" name="pleaseProvide[]" value="Old Contract">
                                <label> Old Contract </label>
                            </span>
                            <span class="form-checkbox-item" style="clear:left">
                                <input type="checkbox" class="form-checkbox" name="pleaseProvide[]" value="Owners Corporation/Body Corp Bill">
                                <label> Owners Corporation/Body Corp Bill(Compulsory if applicable) </label>
                            </span>
                            <span class="form-checkbox-item" style="clear:left">
                                <input type="checkbox" class="form-checkbox" name="pleaseProvide[]" value="Lease agreement if property is tenated">
                                <label> Lease agreement if property is tenated </label>
                            </span>
                        </div>
                    </div>
                </div>

                <div class="form-control">
                    <label>Attach Supporting Documents:</label>
                    <input multiple="multiple" class="fileupload-input" id="input_25" type="file" name="file[]" aria-labelledby="label_25">
                </div>

                <div class="future_section purchaser_1_section">
                    <div class="form-control">
                        <label>What will be your future address? <span class="form-required">*</span></label>
                        <input type="text" name="addr_line_1_future" class="addr_line_1">
                        <span class="field-title">Street Address</span>
                    </div>
                    <div class="row">
                        <div class="form-control">
                            <input type="text" name="city_future">
                            <span class="field-title">Suburb</span>
                        </div>
                        <div class="form-control">
                            <input type="text" name="state_future">
                            <span class="field-title">State</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-control">
                            <input type="text" name="post_code_future">
                            <span class="field-title">Post Code</span>
                        </div>
                        <div class="form-control">
                            <select class="form-dropdown" name="country_future" id="input_8_country">
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

                <div class="form-control">
                    <label>Account Details for Surplus Funds/Extra Funds to be credited to yourself <span class="form-required">*</span></label>
                    <input type="text" id="account_no" name="accountDetails" class="form-textbox" required="">
                    <span style="
    display: block;
">Account Name</span>
                </div>

                <div class="form-control">
                    <label>BSB <span class="form-required">*</span></label>
                    <input type="number" id="bsb" name="bsb" class="form-textbox" required="">
                </div>

                <div class="form-control">
                    <label>Account Number <span class="form-required">*</span></label>
                    <input type="text" id="account_number" name="account_number" class="form-textbox" required="">
                </div>

                <div class="form-control">
                    <label>Who referred you to WE KNOW CONVEYANCING? <span class="form-required">*</span></label>
                    <input type="text" id="account_number" name="whoReferred" class="form-textbox" required="">
                </div>

                <div class="form_sgnature_main">
                    <label>Signature <span class="form-required">*</span></label>
                    <canvas id="signature" width="300" height="100" required=""></canvas>
                    <input type="hidden" value="" id="signature_data" name="signature_data" required="">
                    <button id="clear-signature">Clear</button>
                </div>

                <div class="form-control">
                    <label>Date and Time <span class="form-required">*</span></label>
    <div class="date_main">
                    <input type="text" name="date_time" autocomplete="off" required="" value="<?php echo date('d-M-Y'); ?>" readonly="">
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
        
                </div></div>
                <div class="form_submit_main">
                    <input type="submit" name="btn-submit-vendor" value="Submit Form" class="submit-btn">
                    <div class="loader" style="display:none;">
                        <h5>Loading…</h5>
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
add_shortcode('Vendor_From','vendor_form');