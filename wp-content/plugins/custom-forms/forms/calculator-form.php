<?php 
    function property_calculation_form(){ 
        ob_start();
        ?>
        <div class="contract_price_form_main">
            <div class="contract_price_form_inner">
                <h2>Stamp Duty Calculator</h2>
                <div class="contract_price_form_sec">
                    <form class="contract_form_frontend" method="post" name="contract_form_frontend" id="contract_form_frontend">
                        <div class="contract_price_form_field">
                            <label>Contract Price <span class="form-required">*</span></label>
                            <input type="number" class="contract_input_field" id="contract_price_field" name="contract_price_field" min="1" required>
                        </div>
                        <div class="contract_price_form_field">
                            <label>Deposite Paid <span class="form-required">*</span></label>
                            <input type="number" class="contract_input_field" id="deposite_paid_field" name="deposite_paid_field" min="1" required>
                        </div>
                        <div class="contract_price_form_field">
                            <label>Stamp Duty <span class="form-required">*</span></label>
                            <input type="number" class="contract_input_field" id="stamp_duty_field" name="stamp_duty_field" min="1" required>
                            <span><a href="https://www.e-business.sro.vic.gov.au/calculators/land-transfer-duty" target="_blank">Calculate Stamp Duty Fees</a></span>
                        </div>
                        <div class="contract_price_form_field">
                            <label>Registration Fees <span class="form-required">*</span></label>
                            <input type="number" class="contract_input_field" id="registration_fees_field" name="registration_fees_field" min="1" required>
                            <span><a href="https://www.land.vic.gov.au/land-registration/fees-guides-and-forms/transfer-of-land-fees-calculator" target="_blank">Calculate Registration fees</a></span>
                        </div>
                        <div class="contract_price_form_field">
                            <label>Miscellanious Cost <span class="form-required">*</span></label>
                            <input type="number" class="contract_input_field" id="miscellanious_cost_field" name="miscellanious_cost_field" readonly required placeholder="$">
                        </div>
                        <div class="contract_price_form_field">
                            <label>Loan Amount <span class="form-required">*</span></label>
                            <input type="number" class="contract_input_field" id="loan_amount_field" name="loan_amount_field" min="1" required>
                        </div>
                        <div class="contract_price_form_field">
                            <input type="submit" class="contract_input_btn" id="contract_calculate_total" name="contract_calculate_total" value="Calculate">
                        </div>
                    </form>
                    <div class="contract_form_loader_main" style="display:none;">
                        <div class="contract_form_loader_inner">
                            <h3>Loading...</h3>
                        </div>
                    </div>
                    <div class="contract_shortfall_result_area"></div>
                </div>
            </div>
        </div>
<?php 
    return ob_get_clean();
}
add_shortcode('Property_Calculation_Form','property_calculation_form')
?>
