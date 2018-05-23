<?php $page = 16; ?>
<!DOCTYPE html>
<html>
    <head>
        <?php include('../inc/meta.php'); ?>

        <title>Travel Experts - Register or Login</title>

        <?php include('../inc/css.php'); ?>
    </head>

    <!-- Get rid of the browser's form autofill so the form is always blank when the user loads the page -->
    <body onload="resetRegistrationForm(true)">
        <?php include('../inc/nav.php'); ?>

        <article>
            <?php include('../inc/header.php'); ?>

            <section class="contentBox">
                <div id="register">
                    <form id="registerForm" action="" method="POST" onSubmit="return submitRegistrationForm(this);"><!-- onSubmit="return submitRegistrationForm(this);"-->
                        <div id="formLeft" class="left">
                            <span class="formTitle">Account Information</span><br / />
                            <!-- <div class="formNotice">Fields marked with <span class="requiredFieldIndicator">*</span> are required</div> --><br />

                            <label id="firstnameLabel" for="firstname">First Name <span class="requiredFieldIndicator">*</span></label><br />
                            <input id="firstname" type="text" name="firstname" maxlength=20 /><br />
                            <div id="firstnameErrorMessage" class="errorMessage"></div><br />

                            <label id="lastnameLabel" for="lastname">Last Name <span class="requiredFieldIndicator">*</span></label><br />
                            <input id="lastname" type="text" name="lastname" maxlength=20 /><br />
                            <div id="lastnameErrorMessage" class="errorMessage"></div><br />

                            <label id="emailLabel" for="email">Email Address <span class="requiredFieldIndicator">*</span></label><br />
                            <input id="email" type="text" name="email" maxlength=100 /><br />
                            <div id="emailErrorMessage" class="errorMessage"></div><br />

                            <label id="passwordLabel" for="password">Password <span class="requiredFieldIndicator">*</span><a href="#"> (Forgot Password?)</a></label><br />
                            <input id="password" type="password" name="email" maxlength=32 /><br />
                            <div id="passwordErrorMessage" class="errorMessage"></div><br />

                            <label id="confirmLabel" for="confirm">Confirm Password <span class="requiredFieldIndicator">*</span></label><br />
                            <input id="confirm" type="password" name="confirm" /><br />
                            <div id="confirmErrorMessage" class="errorMessage"></div>
                        </div>

                        <div id="formRight" class="right">
                            <span class="formTitle">Personal Information</span><br / />
                            <!--<div class="formNotice">Fields marked with <span class="requiredFieldIndicator">*</span> are required</div><--><br />

                            <label id="postalcodeLabel" for="postalcode">Postal Code</label><br />
                            <input id="postalcode" type="text" name="postalcode" maxlength=7 /><br />
                            <div id="postalcodeErrorMessage" class="errorMessage"></div><br />

                            <label id="addressLabel" for="address">Address</label><br />
                            <input id="address" type="text" name="address" /><br />
                            <div id="addressErrorMessage" class="errorMessage"></div><br />

                            <label id="cityLabel" for="city">City</label><br />
                            <input id="city" type="text" name="city" /><br />
                            <div id="cityErrorMessage" class="errorMessage"></div><br />

                            <label id="provinceLabel" for="province">Province/State</label><br />
                            <input id="province" type="text" name="province" /><br />
                            <div id="provinceErrorMessage" class="errorMessage"></div><br />

                            <label id="countryLabel" for="country">Country</label><br />
                            <select id="country" name="country">
                                <optgroup label="">
                            		<option value="0" selected="selected">Select Country</option>
                            	</optgroup>
                            	<optgroup label="Africa">
                            		<option value="Algeria">Algeria</option>
                            		<option value="Angola">Angola</option>
                            		<option value="Benin">Benin</option>
                            		<option value="Botswana">Botswana</option>
                            		<option value="Burkina Faso">Burkina Faso</option>
                            		<option value="Burundi">Burundi</option>
                            		<option value="Cameroon">Cameroon</option>
                            		<option value="Cape Verde">Cape Verde</option>
                            		<option value="Central African Republic">Central African Republic</option>
                            		<option value="Chad">Chad</option>
                            		<option value="Comoros">Comoros</option>
                            		<option value="Congo">Congo</option>
                            		<option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
                            		<option value="Cote D'ivoire">Cote D'ivoire</option>
                            		<option value="Djibouti">Djibouti</option>
                            		<option value="Egypt">Egypt</option>
                            		<option value="Equatorial Guinea">Equatorial Guinea</option>
                            		<option value="Eritrea">Eritrea</option>
                            		<option value="Ethiopia">Ethiopia</option>
                            		<option value="Gabon">Gabon</option>
                            		<option value="Gambia">Gambia</option>
                            		<option value="Ghana">Ghana</option>
                            		<option value="Guinea">Guinea</option>
                            		<option value="Guinea-bissau">Guinea-bissau</option>
                            		<option value="Kenya">Kenya</option>
                            		<option value="Lesotho">Lesotho</option>
                            		<option value="Liberia">Liberia</option>
                            		<option value="Libya">Libya</option>
                            		<option value="Madagascar">Madagascar</option>
                            		<option value="Malawi">Malawi</option>
                            		<option value="Mali">Mali</option>
                            		<option value="Mauritania">Mauritania</option>
                            		<option value="Mauritius">Mauritius</option>
                            		<option value="Mayotte">Mayotte</option>
                            		<option value="Morocco">Morocco</option>
                            		<option value="Mozambique">Mozambique</option>
                            		<option value="Namibia">Namibia</option>
                            		<option value="Niger">Niger</option>
                            		<option value="Nigeria">Nigeria</option>
                            		<option value="Reunion">Reunion</option>
                            		<option value="Rwanda">Rwanda</option>
                            		<option value="Saint Helena">Saint Helena</option>
                            		<option value="Sao Tome and Principe">Sao Tome and Principe</option>
                            		<option value="Senegal">Senegal</option>
                            		<option value="Seychelles">Seychelles</option>
                            		<option value="Sierra Leone">Sierra Leone</option>
                            		<option value="Somalia">Somalia</option>
                            		<option value="South Africa">South Africa</option>
                            		<option value="Sudan">Sudan</option>
                            		<option value="Swaziland">Swaziland</option>
                            		<option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                            		<option value="Togo">Togo</option>
                            		<option value="Tunisia">Tunisia</option>
                            		<option value="Uganda">Uganda</option>
                            		<option value="Western Sahara">Western Sahara</option>
                            		<option value="Zambia">Zambia</option>
                            		<option value="Zimbabwe">Zimbabwe</option>
                            	</optgroup>
                            	<optgroup label="Asia">
                            		<option value="Afghanistan">Afghanistan</option>
                            		<option value="Armenia">Armenia</option>
                            		<option value="Azerbaijan">Azerbaijan</option>
                            		<option value="Bahrain">Bahrain</option>
                            		<option value="Bangladesh">Bangladesh</option>
                            		<option value="Bhutan">Bhutan</option>
                            		<option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                            		<option value="Brunei">Brunei</option>
                            		<option value="Cambodia">Cambodia</option>
                            		<option value="China">China</option>
                            		<option value="Christmas Island">Christmas Island</option>
                            		<option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                            		<option value="Cyprus">Cyprus</option>
                            		<option value="Georgia">Georgia</option>
                            		<option value="Hong Kong">Hong Kong</option>
                            		<option value="India">India</option>
                            		<option value="Indonesia">Indonesia</option>
                            		<option value="Iran">Iran</option>
                            		<option value="Iraq">Iraq</option>
                            		<option value="Israel">Israel</option>
                            		<option value="Japan">Japan</option>
                            		<option value="Jordan">Jordan</option>
                            		<option value="Kazakhstan">Kazakhstan</option>
                            		<option value="Kuwait">Kuwait</option>
                            		<option value="Kyrgyzstan">Kyrgyzstan</option>
                            		<option value="Laos">Laos</option>
                            		<option value="Lebanon">Lebanon</option>
                            		<option value="Macao">Macao</option>
                            		<option value="Malaysia">Malaysia</option>
                            		<option value="Maldives">Maldives</option>
                            		<option value="Mongolia">Mongolia</option>
                            		<option value="Myanmar">Myanmar</option>
                            		<option value="Nepal">Nepal</option>
                            		<option value="North Korea">North Korea</option>
                            		<option value="Oman">Oman</option>
                            		<option value="Pakistan">Pakistan</option>
                            		<option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                            		<option value="Philippines">Philippines</option>
                            		<option value="Qatar">Qatar</option>
                            		<option value="Saudi Arabia">Saudi Arabia</option>
                            		<option value="Singapore">Singapore</option>
                            		<option value="South Korea">South Korea</option>
                            		<option value="Sri Lanka">Sri Lanka</option>
                            		<option value="Syria">Syria</option>
                            		<option value="Tajikistan">Tajikistan</option>
                            		<option value="Taiwan">Taiwan</option>
                            		<option value="Thailand">Thailand</option>
                            		<option value="Timor-leste">Timor-leste</option>
                            		<option value="Turkey">Turkey</option>
                            		<option value="Turkmenistan">Turkmenistan</option>
                            		<option value="United Arab Emirates">United Arab Emirates</option>
                            		<option value="Uzbekistan">Uzbekistan</option>
                            		<option value="Vietnam">Vietnam</option>
                            		<option value="Yemen">Yemen</option>
                            	</optgroup>
                            	<optgroup label="Europe">
                            		<option value="Albania">Albania</option>
                            		<option value="Andorra">Andorra</option>
                            		<option value="Austria">Austria</option>
                            		<option value="Belarus">Belarus</option>
                            		<option value="Belgium">Belgium</option>
                            		<option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                            		<option value="Bulgaria">Bulgaria</option>
                            		<option value="Croatia">Croatia</option>
                            		<option value="Czech Republic">Czech Republic</option>
                            		<option value="Denmark">Denmark</option>
                            		<option value="Estonia">Estonia</option>
                            		<option value="Faroe Islands">Faroe Islands</option>
                            		<option value="Finland">Finland</option>
                            		<option value="France">France</option>
                            		<option value="Germany">Germany</option>
                            		<option value="Gibraltar">Gibraltar</option>
                            		<option value="Greece">Greece</option>
                            		<option value="Guernsey">Guernsey</option>
                            		<option value="Hungary">Hungary</option>
                            		<option value="Iceland">Iceland</option>
                            		<option value="Ireland">Ireland</option>
                            		<option value="Isle of Man">Isle of Man</option>
                            		<option value="Italy">Italy</option>
                            		<option value="Jersey">Jersey</option>
                            		<option value="Kosovo">Kosovo</option>
                            		<option value="Latvia">Latvia</option>
                            		<option value="Liechtenstein">Liechtenstein</option>
                            		<option value="Lithuania">Lithuania</option>
                            		<option value="Luxembourg">Luxembourg</option>
                            		<option value="Macedonia">Macedonia</option>
                            		<option value="Malta">Malta</option>
                            		<option value="Moldova">Moldova</option>
                            		<option value="Monaco">Monaco</option>
                            		<option value="Montenegro">Montenegro</option>
                            		<option value="Netherlands">Netherlands</option>
                            		<option value="Norway">Norway</option>
                            		<option value="Poland">Poland</option>
                            		<option value="Portugal">Portugal</option>
                            		<option value="Romania">Romania</option>
                            		<option value="Russia">Russia</option>
                            		<option value="San Marino">San Marino</option>
                            		<option value="Serbia">Serbia</option>
                            		<option value="Slovakia">Slovakia</option>
                            		<option value="Slovenia">Slovenia</option>
                            		<option value="Spain">Spain</option>
                            		<option value="Sweden">Sweden</option>
                            		<option value="Switzerland">Switzerland</option>
                            		<option value="Ukraine">Ukraine</option>
                            		<option value="United Kingdom">United Kingdom</option>
                            		<option value="Vatican City">Vatican City</option>
                            	</optgroup>
                            	<optgroup label="North America">
                            		<option value="Anguilla">Anguilla</option>
                            		<option value="Antigua and Barbuda">Antigua and Barbuda</option>
                            		<option value="Aruba">Aruba</option>
                            		<option value="Bahamas">Bahamas</option>
                            		<option value="Barbados">Barbados</option>
                            		<option value="Belize">Belize</option>
                            		<option value="Bermuda">Bermuda</option>
                            		<option value="British Virgin Islands">British Virgin Islands</option>
                            		<option value="Canada" selected>Canada</option>
                            		<option value="Cayman Islands">Cayman Islands</option>
                            		<option value="Clipperton Island">Clipperton Island</option>
                            		<option value="Costa Rica">Costa Rica</option>
                            		<option value="Cuba">Cuba</option>
                            		<option value="Dominica">Dominica</option>
                            		<option value="Dominican Republic">Dominican Republic</option>
                            		<option value="El Salvador">El Salvador</option>
                            		<option value="Greenland">Greenland</option>
                            		<option value="Grenada">Grenada</option>
                            		<option value="Guadeloupe">Guadeloupe</option>
                            		<option value="Guatemala">Guatemala</option>
                            		<option value="Haiti">Haiti</option>
                            		<option value="Honduras">Honduras</option>
                            		<option value="Jamaica">Jamaica</option>
                            		<option value="Martinique">Martinique</option>
                            		<option value="Mexico">Mexico</option>
                            		<option value="Montserrat">Montserrat</option>
                            		<option value="Navassa Island">Navassa Island</option>
                            		<option value="Netherlands Antilles">Netherlands Antilles</option>
                            		<option value="Nicaragua">Nicaragua</option>
                            		<option value="Panama">Panama</option>
                            		<option value="Puerto Rico">Puerto Rico</option>
                            		<option value="Saint BarthÃ©lemy">Saint BarthÃ©lemy</option>
                            		<option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                            		<option value="Saint Lucia">Saint Lucia</option>
                            		<option value="Saint Martin">Saint Martin</option>
                            		<option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                            		<option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
                            		<option value="Trinidad and Tobago">Trinidad and Tobago</option>
                            		<option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                            		<option value="United States">United States</option>
                            		<option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                            	</optgroup>
                            	<optgroup label="South America">
                            		<option value="Argentina">Argentina</option>
                            		<option value="Bolivia">Bolivia</option>
                            		<option value="Brazil">Brazil</option>
                            		<option value="Chile">Chile</option>
                            		<option value="Colombia">Colombia</option>
                            		<option value="Ecuador">Ecuador</option>
                            		<option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                            		<option value="French Guiana">French Guiana</option>
                            		<option value="Guyana">Guyana</option>
                            		<option value="Paraguay">Paraguay</option>
                            		<option value="Peru">Peru</option>
                            		<option value="Suriname">Suriname</option>
                            		<option value="Uruguay">Uruguay</option>
                            		<option value="Venezuela">Venezuela</option>
                            	</optgroup>
                            	<optgroup label="Oceania">
                            		<option value="American Samoa">American Samoa</option>
                            		<option value="Australia">Australia</option>
                            		<option value="Baker Island">Baker Islands</option>
                            		<option value="Cook Islands">Cook Islands</option>
                            		<option value="Fiji">Fiji</option>
                            		<option value="French Polynesia">French Polynesia</option>
                            		<option value="Guam">Guam</option>
                            		<option value="Howland Island">Howland Island</option>
                            		<option value="Jarvis Island">Jarvis Island</option>
                            		<option value="Johnston Atoll">Johnston Atoll</option>
                            		<option value="Kingman Reef">Kingman Reef</option>
                            		<option value="Kiribati">Kiribati</option>
                            		<option value="Marshall Islands">Marshall Islands</option>
                            		<option value="Micronesia">Micronesia</option>
                            		<option value="Midway Atoll">Midway Atoll</option>
                            		<option value="Nauru">Nauru</option>
                            		<option value="New Caledonia">New Caledonia</option>
                            		<option value="New Zealand">New Zealand</option>
                            		<option value="Niue">Niue</option>
                            		<option value="Norfolk Island">Norfolk Island</option>
                            		<option value="Northern Mariana Islands">Northern Mariana Islands</option>
                            		<option value="Palau">Palau</option>
                            		<option value="Palmyra Atoll">Palmyra Atoll</option>
                            		<option value="Papua New Guinea">Papua New Guinea</option>
                            		<option value="Pitcairn Islands">Pitcairn Islands</option>
                            		<option value="Samoa">Samoa</option>
                            		<option value="Solomon Islands">Solomon Islands</option>
                            		<option value="Tokelau">Tokelau</option>
                            		<option value="Tonga">Tonga</option>
                            		<option value="Tuvalu">Tuvalu</option>
                            		<option value="Vanuatu">Vanuatu</option>
                            		<option value="Wake Island">Wake Island</option>
                            		<option value="Wallis and Futuna">Wallis and Futuna</option>
                            	</optgroup>
                            	<optgroup label="Antarctica">
                            		<option value="Antarctica">Antarctica</option>
                            		<option value="Bouvet Island">Bouvet Island</option>
                            		<option value="French Southern Territories">French Southern Territories</option>
                            		<option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                            		<option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
                            	</optgroup>
                            </select><br />
                            <div id="countryErrorMessage" class="errorMessage"></div><br />
                        </div>

                        <center>
                            <div id="submitForm">
                                <button id="test" class="button primary" style="margin-right:10px;"><i class="fa fa-user-plus"></i>&nbsp; Complete Registration</button><!-- onclick="return window.confirm('Are you sure the information you entered was correct?');" -->
                                <button id="resetRegisterForm" class="button default" onclick="resetRegistrationForm();return false;"><i class="fa fa-exclamation-triangle"></i>&nbsp; Reset Form</button>
                            </div>
                        </center>
                    </form>
                </div>
            </section>
        </article>

        <?php include('../inc/footer.php'); ?>

        <!-- Load jQuery -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <!-- Form Validation -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
        <script type="text/javascript">
            var
            registerForm = $('#registerForm'),
            registerFormElements = new Array();

            // Add all the input and select elements to the registerFormElements array to loop through them later
            $("#registerForm input, #registerForm select").each(function() {
                registerFormElements.push($(this));
            });

            // Store the requirement messages in an associative array/object
            requirementMessages = {
                firstname: 'Please enter a first name between 2 and 20 characters long.',
                lastname: 'Please enter a last name between 2 and 20 characters long.',
                email: 'Please enter an email address between 10 and 100 characters long.',
                password: 'Please enter a password that contains at least: 1 uppercase letter, 1 lowercase letter, 1 number, a special character, and is between 8 and 32 characters long.',
                confirm: 'Please confirm your password.',
                postalcode: 'Please enter a postal code that is 7 characters long (including the space).',
                address: 'Please enter an address between 10 and 50 characters long.',
                city: 'Please enter a city between 2 and 30 characters long.',
                province: 'Please enter a province between 2 and 20 characters long.',
                country: 'Please select your country.'
            };

            // Loop through all the form elements
            for(i = 0; i < registerFormElements.length; i++) {
                var formElement = registerFormElements[i];

                formElement.on('focus', function() { toggleRequirementMessage($(this), true); });
                formElement.on('blur', function() { toggleRequirementMessage($(this), false); });
            }

            // Show or hide the requirement message based on what parameter is passed
            function toggleRequirementMessage(field, show)
            {
                var requirementMessage = $('#' + field.attr('id') + 'ErrorMessage');
                var message = requirementMessages[field.attr('id')];

                if(show) {
                    requirementMessage.html(message);
                    requirementMessage.show();
                    requirementMessage.css('color', '#0091DC');
                } else
                    requirementMessage.hide();
            }

            function resetRegistrationForm(onLoad)
            {
                // Only show the confirm popup when the user clicks the reset button, not when they load the page
                if(!onLoad) {
                    if(confirm('Are you sure you want to reset the registration form? All data currently entered will be lost, and there is no way to get it back!'))
                        registerForm[0].reset();
                }
            }

            function validateRegistrationForm() {
                var postalCodeFormat = /[A-Z]\d[A-Z] ?\d[A-Z]\d$/;

                if(!$('#postalcode').val().match(postalCodeFormat))
                    alert('Postal code format incorrect');
                else
                    alert('Postal code format correct');
            }
        </script>
        <script type="text/javascript" src="../js/processRegistration.js"></script>
    </body>
</html>
