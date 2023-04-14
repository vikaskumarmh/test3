<?php 
    function stamp_duty_form(){ 
        ob_start();
        $attachment_data = $user_email = array();
        if(isset($_POST['stamp_duty_btn'])){ 
            if(!empty($_POST['stamp_duty_addr_line_1']) && !empty($_POST['stamp_duty_city']) && !empty($_POST['stamp_duty_state']) && !empty($_POST['stamp_duty_post_code']) && !empty($_POST['stamp_duty_country']) && !empty($_POST['name_prefix_stamp_duty']) && !empty($_POST['f_name_stamp_duty']) && !empty($_POST['m_name_stamp_duty']) && !empty($_POST['l_name_stamp_duty']) && !empty($_POST['dob_stamp_duty']) && !empty($_POST['mobile_no_stamp_duty']) && !empty($_POST['email_stamp_duty']) && !empty($_POST['addr_line_1_stamp_duty']) && !empty($_POST['city_stamp_duty']) && !empty($_POST['state_stamp_duty']) &&  !empty($_POST['post_code_stamp_duty']) && !empty($_POST['country_stamp_duty']) && !empty($_POST['date_settlement_stamp_duty']) && !empty($_POST['nationality_stamp_duty']) && !empty($_POST['principal_place_residence'])  && !empty($_POST['first_home_buyer']) && !empty($_POST['pleaseProvide']) && !empty($_POST['bsb']) && !empty($_POST['account_number'])){
        
                $stamp_duty_addr_line_1 = isset($_POST['stamp_duty_addr_line_1']) ? $_POST['stamp_duty_addr_line_1'] : '';
                $stamp_duty_city = isset($_POST['stamp_duty_city']) ? $_POST['stamp_duty_city'] : '';
                $stamp_duty_state = isset($_POST['stamp_duty_state']) ? $_POST['stamp_duty_state'] : '';
                $stamp_duty_post_code = isset($_POST['stamp_duty_post_code']) ? $_POST['stamp_duty_post_code'] : '';
                $stamp_duty_country = isset($_POST['stamp_duty_country']) ? $_POST['stamp_duty_country'] : '';
                $name_prefix_stamp_duty = isset($_POST['name_prefix_stamp_duty']) ? $_POST['name_prefix_stamp_duty'] : '';
                $f_name_stamp_duty = isset($_POST['f_name_stamp_duty']) ? $_POST['f_name_stamp_duty'] : '';
                $m_name_stamp_duty = isset($_POST['m_name_stamp_duty']) ? $_POST['m_name_stamp_duty'] : '';
                $l_name_stamp_duty = isset($_POST['l_name_stamp_duty']) ? $_POST['l_name_stamp_duty'] : '';
                $dob_stamp_duty = isset($_POST['dob_stamp_duty']) ? $_POST['dob_stamp_duty'] : '';
                $mobile_no_stamp_duty = isset($_POST['mobile_no_stamp_duty']) ? $_POST['mobile_no_stamp_duty'] : '';
                $email_stamp_duty = isset($_POST['email_stamp_duty']) ? $_POST['email_stamp_duty'] : '';
                $addr_line_1_stamp_duty = isset($_POST['addr_line_1_stamp_duty']) ? $_POST['addr_line_1_stamp_duty'] : '';
                $city_stamp_duty = isset($_POST['city_stamp_duty']) ? $_POST['city_stamp_duty'] : '';
                $state_stamp_duty = isset($_POST['state_stamp_duty']) ? $_POST['state_stamp_duty'] : '';
                $post_code_stamp_duty = isset($_POST['post_code_stamp_duty']) ? $_POST['post_code_stamp_duty'] : '';
                $country_stamp_duty = isset($_POST['country_stamp_duty']) ? $_POST['country_stamp_duty'] : '';
                $date_settlement_stamp_duty = isset($_POST['date_settlement_stamp_duty']) ? $_POST['date_settlement_stamp_duty'] : '';
                $nationality_stamp_duty = isset($_POST['nationality_stamp_duty']) ? $_POST['nationality_stamp_duty'] : '';
                $permanent_stamp_duty = isset($_POST['permanent_resident_address_stamp_duty']) ? $_POST['permanent_resident_address_stamp_duty'] : '';
                $principal_place_residence = isset($_POST['principal_place_residence']) ? $_POST['principal_place_residence'] : '';
                $first_home_buyer = isset($_POST['first_home_buyer']) ? $_POST['first_home_buyer'] : '';
                $pleaseProvide = isset($_POST['pleaseProvide']) ? $_POST['pleaseProvide'] : '';
                $bsb = isset($_POST['bsb']) ? $_POST['bsb'] : '';
                $account_number = isset($_POST['account_number']) ? $_POST['account_number'] : '';
                
                $attachmentFile = (isset($_FILES['stamp_duty_water_bill']) && !empty($_FILES['stamp_duty_water_bill'])) ? attechment_write($_FILES['stamp_duty_water_bill']) : '';
                $stamp_duty_driver_license = (isset($_FILES['stamp_duty_driver_license']) && !empty($_FILES['stamp_duty_driver_license'])) ? attechment_write($_FILES['stamp_duty_driver_license']) : '';
          
                $html = '<table>
                            <tr>
                                <td><h2>Stamp Duty Service Form</h2><td>
                            </tr>
                            <tr>
                                <td><h4>Address of the Property</h4></td>
                            </tr>
                            <tr>
                                <td><strong>Street Address</strong> : '.$stamp_duty_addr_line_1.'</td>
                            </tr>
                            <tr>
                                <td><strong>Suburb</strong> : '.$stamp_duty_city.'</td>
                            </tr>
                            <tr>
                                <td><strong>State</strong> : '.$stamp_duty_state.'</td>
                            </tr>
                            <tr>
                                <td><strong>Post Code</strong> : '.$stamp_duty_post_code.'</td>
                            </tr>
                            <tr>
                                <td><strong>Country</strong> : '.$stamp_duty_country.'</td>
                            </tr>
                            <tr>
                                <td><h4>Full Name</h4></td>
                            </tr>
                            <tr>
                                <td><strong>'.$name_prefix_stamp_duty.'</strong> '.$f_name_stamp_duty.' '.$m_name_stamp_duty.' '.$l_name_stamp_duty.'</td>
                            </tr>
                            <tr>
                                <td><h4>Date of Birth</h4></td>
                            </tr>
                            <tr>
                                <td>'.$dob_stamp_duty.'</td>
                            </tr>
                            <tr>
                                <td><h4>Mobile Number</h4></td>
                            </tr>
                            <tr>
                                <td>'.$mobile_no_stamp_duty.'</td>
                            </tr>
                            <tr>
                                <td><h4>E-mail</h4></td>
                            </tr>
                            <tr>
                                <td>'.$email_stamp_duty.'</td>
                            </tr>
                            <tr>
                                <td><h4>Current Residential address</h4></td>
                            </tr>
                            <tr>
                                <td><strong>Street Address</strong> : '.$addr_line_1_stamp_duty.'</td>
                            </tr>
                            <tr>
                                <td><strong>Suburb</strong> : '.$city_stamp_duty.'</td>
                            </tr>
                            <tr>
                                <td><strong>State</strong> : '.$state_stamp_duty.'</td>
                            </tr>
                            <tr>
                                <td><strong>Post Code</strong> : '.$post_code_stamp_duty.'</td>
                            </tr>
                            <tr>
                                <td><strong>Country</strong> : '.$country_stamp_duty.'</td>
                            </tr>
                            <tr>
                                <td><h4>Date of settlement</h4></td>
                            </tr>
                            <tr>
                                <td>'.$date_settlement_stamp_duty.'</td>
                            </tr>
                            <tr>
                                <td><h4>Nationality</h4></td>
                            </tr>
                            <tr>
                                <td>'.$nationality_stamp_duty.'</td>
                            </tr>
                            <tr>
                                <td><h4>If not Australian, are you a permanent resident of Australia.</h4></td>
                            </tr>
                            <tr>
                                <td>'.$permanent_stamp_duty.'</td>
                            </tr>
                            <tr>
                                <td><h4>Is your principal place of residence?</h4></td>
                            </tr>
                            <tr>
                                <td>'.$principal_place_residence.'</td>
                            </tr>
                            <tr>
                                <td><h4>Are you a first home buyer?</h4></td>
                            </tr>
                            <tr>
                                <td>'.$first_home_buyer.'</td>
                            </tr>
                            <tr>
                                <td><h4>Provide Your Account Details for refund</h4></td>
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
                        </table>';

                        $pdfName = pdf_write($html);
                        if(!empty($attachmentFile) && $attachmentFile != false){
                            foreach($attachmentFile as $attFile){
                                $attachment_data[]= $attFile;
                            }
                        }
                        if(!empty($stamp_duty_driver_license) && $stamp_duty_driver_license != false){
                            foreach($stamp_duty_driver_license as $attFileVendor){
                                $attachment_data[]= $attFileVendor;
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
        <div class="stamp_duty_form_main">
            <div class="stamp_duty_form_inner">
                <h2>Stamp Duty Calculator</h2>
                <div class="stamp_duty_form_sec">
                    <form class="stamp_duty_frontend aobform-custom-form" method="post" name="stamp_duty_frontend" id="aobform_stamp_duty"  enctype="multipart/form-data" accept-charset="utf-8" novalidate="novalidate">
                            <div class="address-area">    
                                <label>Address of the Property<span class="form-required">*</span></label>
                                <div class="form-control-main">
                                    <div class="form-control">
                                        <input type="text" name="stamp_duty_addr_line_1" class="addr_line_1" required="">
                                        <span class="field-title">Street Address</span>
                                    </div>
                                    <div class="row">
                                        <div class="form-control">
                                            <input type="text" name="stamp_duty_city" required="">
                                            <span class="field-title">Suburb</span>
                                        </div>
                                        <div class="form-control">
                                            <input type="text" name="stamp_duty_state" required="">
                                            <span class="field-title">State</span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-control">
                                            <input type="text" name="stamp_duty_post_code" required="">
                                            <span class="field-title">Post Code</span>
                                        </div>
                                        <div class="form-control">
                                            <select class="form-dropdown" name="stamp_duty_country" id="input_8_country" required="">
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
                                <label>Full Name <span class="form-required">*</span></label>
                                <div class="form-control-main">
                                    <div class="row">
                                        <div class="form-name-sec">
                                            <select name="name_prefix_stamp_duty" id="name_prefix_1" class="name_prefix" required="">
                                                <option value="Mr."> Mr. </option>
                                                <option value="Mrs."> Mrs. </option>
                                                <option value="Miss."> Miss. </option>
                                                <option value="Ms."> Ms. </option>
                                            </select>
                                        </div>
                                        <div class="form-name-sec">
                                            <input type="text" name="f_name_stamp_duty" required="">
                                        </div>
                                        <div class="form-name-sec">
                                            <input type="text" name="m_name_stamp_duty" required="">
                                        </div>
                                        <div class="form-name-sec">
                                            <input type="text" name="l_name_stamp_duty" required="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-control">
                                <label>Date of Birth <span class="form-required">*</span></label>
                                <div class="date_main">
                                    <input type="date" name="dob_stamp_duty" class="datepicker hasDatepicker" autocomplete="off" required="" placeholder="mm/dd/yyyy" id="dp168085">
                                </div>
                            </div>
                            <div class="form-control">
                                <label>Mobile Number <span class="form-required">*</span></label>
                                <div class="form-control-main">
                                    <input type="number" name="mobile_no_stamp_duty" required="">
                                </div>
                            </div>
                            <div class="form-control">
                                <label>E-mail <span class="form-required">*</span></label>
                                <div class="form-control-main">
                                    <input type="email" name="email_stamp_duty" required="">
                                </div>
                            </div>
    
                            <div class="stamp_duty_section purchaser_1_section">
                                <div class="form-control">
                                    <label>Current Residential address<span class="form-required">*</span> </label>
                                    <input type="text" name="addr_line_1_stamp_duty" class="addr_line_1" required="">
                                    <span class="field-title">Street Address</span>
                                </div>
                                <div class="row">
                                    <div class="form-control">
                                        <input type="text" name="city_stamp_duty" required="">
                                        <span class="field-title">Suburb</span>
                                    </div>
                                    <div class="form-control">
                                        <input type="text" name="state_stamp_duty" required="">
                                        <span class="field-title">State</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-control">
                                        <input type="text" name="post_code_stamp_duty" required="">
                                        <span class="field-title">Post Code</span>
                                    </div>
                                    <div class="form-control">
                                        <select class="form-dropdown" name="country_stamp_duty" id="input_8_country" required="">
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
                                <label>Date of Settlement <span class="form-required">*</span></label>
                                <div class="date_main">
                                    <input type="date" name="date_settlement_stamp_duty" class="datepicker hasDatepicker" autocomplete="off" required="" placeholder="mm/dd/yyyy" id="">
                                </div>
                            </div>

                            <div class="form-control">
                                <label>Nationality <span class="form-required">*</span></label>
                                <input type="text" name="nationality_stamp_duty" required="">
                            </div>
                            <div class="form-control">
                                <label>If not Australian, are you a permanent resident of Australia. <span class="form-required">*</span></label>
                                <div class="form-control-main">
                                    <select class="form-dropdown" id="permanent_stamp_duty" name="permanent_resident_address_stamp_duty" required="">
                                        <option value=""></option>
                                        <option value="YES"> YES </option>
                                        <option value="NO"> NO </option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-control">
                                <label>Is your principal place of residence? <span class="form-required">*</span></label>
                                <div class="form-control-main">
                                    <select class="form-dropdown" id="principal_place_residence" name="principal_place_residence" required="">
                                        <option value=""></option>
                                        <option value="YES"> YES </option>
                                        <option value="NO"> NO </option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-control">
                                <label>Are you a first home buyer? <span class="form-required">*</span></label>
                                <div class="form-control-main">
                                    <select class="form-dropdown" id="first_home_buyer" name="first_home_buyer" required="">
                                        <option value=""></option>
                                        <option value="YES"> YES </option>
                                        <option value="NO"> NO </option>
                                    </select>
                                </div>
                            </div>

                            <div class="stamp_duty_form_field">
                                <label>Upload the copy of your recent council or water bill? <span class="form-required">*</span></label>
                                <input type="file" multiple="multiple" class="stamp_duty_water_bill" id="stamp_duty_water_bill" name="stamp_duty_water_bill[]">
                            </div>

                            <div class="stamp_duty_form_field">
                                <label>Upload your Passport or Drivers License? <span class="form-required">*</span></label>
                                <input type="file" multiple="multiple" class="stamp_duty_driver_license" id="stamp_duty_driver_license" name="stamp_duty_driver_license[]">
                            </div>


                            <div class="form-control">
                                <label>Provide Your Account Details for refund.<span class="form-required">*</span></label>
                                <input type="text" id="account_no" name="pleaseProvide" class="form-textbox" required>
                                <span >Account Name</span>
                            </div>

                            <div class="form-control">
                                <label>BSB <span class="form-required">*</span></label>
                                <input type="number" id="bsb" name="bsb" class="form-textbox" required>
                            </div>

                            <div class="form-control">
                                <label>Account Number <span class="form-required">*</span></label>
                                <input type="text" id="account_number" name="account_number" class="form-textbox" required>
                            </div>
                        <div class="stamp_duty_form_field">
                            <input type="submit" class="submit-btn" id="stamp_duty_btn" name="stamp_duty_btn" value="Submit Form">
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
add_shortcode('Stamp_Duty_Form','stamp_duty_form');
?>
