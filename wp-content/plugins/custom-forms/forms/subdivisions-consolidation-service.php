<?php 
    function subdivision_consolidation_service(){ 
        ob_start();
        $attachment_data = $user_email = array();
        if(isset($_POST['subdivision_service_btn'])){ 
            if(!empty($_POST['subdivision_addr_line_1']) && !empty($_POST['subdivision_city']) && !empty($_POST['subdivision_state']) && !empty($_POST['subdivision_post_code']) && !empty($_POST['subdivision_country']) && !empty($_POST['name_prefix_subdivision']) && !empty($_POST['f_name_subdivision']) && !empty($_POST['m_name_subdivision']) && !empty($_POST['l_name_subdivision']) && !empty($_POST['mobile_no_subdivision']) && !empty($_POST['email_subdivision']) && !empty($_POST['subdivision_message_field'])){

                $subdivision_addr_line_1 = isset($_POST['subdivision_addr_line_1']) ? $_POST['subdivision_addr_line_1'] : '';
                $subdivision_city = isset($_POST['subdivision_city']) ? $_POST['subdivision_city'] : '';
                $subdivision_state = isset($_POST['subdivision_state']) ? $_POST['subdivision_state'] : '';
                $subdivision_post_code = isset($_POST['subdivision_post_code']) ? $_POST['subdivision_post_code'] : '';
                $subdivision_country = isset($_POST['subdivision_country']) ? $_POST['subdivision_country'] : '';
                $name_prefix_subdivision = isset($_POST['name_prefix_subdivision']) ? $_POST['name_prefix_subdivision'] : '';
                $f_name_subdivision = isset($_POST['f_name_subdivision']) ? $_POST['f_name_subdivision'] : '';
                $m_name_subdivision = isset($_POST['m_name_subdivision']) ? $_POST['m_name_subdivision'] : '';
                $l_name_subdivision = isset($_POST['l_name_subdivision']) ? $_POST['l_name_subdivision'] : '';
                $mobile_no_subdivision = isset($_POST['mobile_no_subdivision']) ? $_POST['mobile_no_subdivision'] : '';
                $email_subdivision = isset($_POST['email_subdivision']) ? $_POST['email_subdivision'] : '';
                $subdivision_message_field = isset($_POST['subdivision_message_field']) ? $_POST['subdivision_message_field'] : '';

                $html = '<table>
                                <tr>
                                    <td><h2>Subdivisions & Consolidation Service Form</h2><td>
                                </tr>
                                <tr>
                                    <td><h4>Address of the Property</h4></td>
                                </tr>
                                <tr>
                                    <td><strong>Street Address</strong> : '.$subdivision_addr_line_1.'</td>
                                </tr>
                                <tr>
                                    <td><strong>Suburb</strong> : '.$subdivision_city.'</td>
                                </tr>
                                <tr>
                                    <td><strong>State</strong> : '.$subdivision_state.'</td>
                                </tr>
                                <tr>
                                    <td><strong>Post Code</strong> : '.$subdivision_post_code.'</td>
                                </tr>
                                <tr>
                                    <td><strong>Country</strong> : '.$subdivision_country.'</td>
                                </tr>
                                <tr>
                                    <td><h4>Full Name</h4></td>
                                </tr>
                                <tr>
                                    <td><strong>'.$name_prefix_subdivision.'</strong> '.$f_name_subdivision.' '.$m_name_subdivision.' '.$l_name_subdivision.'</td>
                                </tr>
                                <tr>
                                    <td><h4>Mobile Number</h4></td>
                                </tr>
                                <tr>
                                    <td>'.$mobile_no_subdivision.'</td>
                                </tr>
                                <tr>
                                    <td><h4>E-mail</h4></td>
                                </tr>
                                <tr>
                                    <td>'.$email_subdivision.'</td>
                                </tr>
                                <tr>
                                    <td><h4>Message</h4></td>
                                </tr>
                                <tr>
                                    <td>'.$subdivision_message_field.'</td>
                                </tr>
                        </table>';

                        $pdfName = pdf_write($html);
                    
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
        <div class="subdivision_service_form_main">
            <div class="subdivision_service_form_inner">
                <h2>Subdivisions & Consolidation Service</h2>
                <div class="subdivision_service_form_sec">
                    <form class="subdivision_service_frontend aobform-custom-form" method="post" name="subdivision_service_frontend" id="aobform_subdivision_service"  enctype="multipart/form-data" accept-charset="utf-8" novalidate="novalidate">
                        <div class="address-area">    
                            <label>Address of the Property <span class="form-required">*</span></label>
                            <div class="form-control-main">
                                <div class="form-control">
                                    <input type="text" name="subdivision_addr_line_1" class="addr_line_1" required="">
                                    <span class="field-title">Street Address</span>
                                </div>
                                <div class="row">
                                    <div class="form-control">
                                        <input type="text" name="subdivision_city" required="">
                                        <span class="field-title">Suburb</span>
                                    </div>
                                    <div class="form-control">
                                        <input type="text" name="subdivision_state" required="">
                                        <span class="field-title">State</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-control">
                                        <input type="text" name="subdivision_post_code" required="">
                                        <span class="field-title">Post Code</span>
                                    </div>
                                    <div class="form-control">
                                        <select class="form-dropdown" name="subdivision_country" id="input_8_country" required="">
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
                            <label>Full Name<span class="form-required">*</span></label>
                            <div class="form-control-main">
                                <div class="row">
                                    <div class="form-name-sec">
                                        <select name="name_prefix_subdivision" id="name_prefix_1" class="name_prefix" required="">
                                            <option value="Mr."> Mr. </option>
                                            <option value="Mrs."> Mrs. </option>
                                            <option value="Miss."> Miss. </option>
                                            <option value="Ms."> Ms. </option>
                                        </select>
                                    </div>
                                    <div class="form-name-sec">
                                        <input type="text" name="f_name_subdivision" required="">
                                    </div>
                                    <div class="form-name-sec">
                                        <input type="text" name="m_name_subdivision" required="">
                                    </div>
                                    <div class="form-name-sec">
                                        <input type="text" name="l_name_subdivision" required="">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-control">
                            <label>Mobile Number <span class="form-required">*</span></label>
                            <div class="form-control-main">
                                <input type="number" name="mobile_no_subdivision" required="">
                            </div>
                        </div>

                        <div class="form-control">
                            <label>E-mail <span class="form-required">*</span></label>
                            <div class="form-control-main">
                                <input type="email" name="email_subdivision" required="">
                                <span style="display:block;">Preferably not a yahoo ID. Our emails go to yahoo spam</span>
                            </div>
                        </div>
                    
                        <div class="subdivision_form_field">
                            <label>Message<span class="form-required">*</span></label>
                            <textarea id="subdivision_message_field" name="subdivision_message_field" class="subdivision_field" rows="4" cols="50" required></textarea>
                        </div>

                        <div class="subdivision_service_form_field">
                            <input type="submit" class="submit-btn" id="subdivision_service_btn" name="subdivision_service_btn" value="Submit Form">
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
add_shortcode('Subdivision_Consolidation_Service','subdivision_consolidation_service');
?>
