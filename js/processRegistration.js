/*
    This validation script is a Work In Progress; ignore for now
    There's a lot of repetition so it needs to be put into separate functions and objects that have loops to reduce the code
    Need to change all .match to .test for optimization purposes
*/

function submitRegistrationForm(form)
{
    var
    firstname = form.elements[0], // The firstname form element
    firstnameLabelId = document.getElementById('firstnameLabel'),
    firstnameErrorId = document.getElementById('firstnameErrorMessage'), // The id of the firstname error message box
    firstnameFormat = /^[A-Za-z]+$/, // Make it so the first and last name can only contain letters
    firstnameErrors = 0, // When the form is submitted, there will be no errors until the validation occurs

    lastname = form.elements[1],
    lastnameLabelId = document.getElementById('lastnameLabel'),
    lastnameErrorId = document.getElementById('lastnameErrorMessage'),
    lastnameFormat = firstnameFormat, // First name and last name formats are the same
    lastnameErrors = 0,

    email = form.elements[2],
    emailLabelId = document.getElementById('emailLabel'),
    emailErrorId = document.getElementById('emailErrorMessage'),
    emailFormat = /(?:[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*|"(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21\x23-\x5b\x5d-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])*")@(?:(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?|\[(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?|[a-z0-9-]*[a-z0-9]:(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21-\x5a\x53-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])+)\])/,
    emailErrors = 0,

    password = form.elements[3],
    passwordLabelId = document.getElementById('passwordLabel'),
    passwordErrorId = document.getElementById('passwordErrorMessage'),
    passwordFormat = /^(?=.*?[A-Z])(?=(.*[a-z]){1,})(?=(.*[\d]){1,})(?=(.*[\W]){1,})(?!.*\s)/,
    passwordErrors = 0,

    confirm = form.elements[4],
    confirmLabelId = document.getElementById('confirmLabel'),
    confirmErrorId = document.getElementById('confirmErrorMessage'),
    confirmErrors = 0,

    postalcode = form.elements[5],
    postalcodeLabelId = document.getElementById('postalcodeLabel'),
    postalcodeErrorId = document.getElementById('postalcodeErrorMessage'),
    postalcodeFormat = /[A-Za-z]\d[A-Za-z] ?\d[A-Za-z]\d/,
    postalcodeErrors = 0,

    address = form.elements[6],
    addressLabelId = document.getElementById('addressLabel'),
    addressErrorId = document.getElementById('addressErrorMessage'),
    addressErrors = 0,

    city = form.elements[7],
    cityLabelId = document.getElementById('cityLabel'),
    cityErrorId = document.getElementById('cityErrorMessage'),
    cityFormat = /^[a-zA-z]+$/,
    cityErrors = 0,

    province = form.elements[8],
    provinceLabelId = document.getElementById('provinceLabel'),
    provinceErrorId = document.getElementById('provinceErrorMessage'),
    provinceFormat = cityFormat, // Province and city can only contain letters
    provinceErrors = 0,

    country = form.elements[9],
    countryLabelId = document.getElementById('countryLabel'),
    countryErrorId = document.getElementById('countryErrorMessage'),
    countryFormat = cityFormat, // Country, province and city can only contain letters
    countryErrors = 0;

    if(!firstname.value.match(firstnameFormat)) {
        firstnameErrors += 1;
        firstnameErrorMessage = 'Your first name can only contain letters.';
    } else {
        if(firstnameErrors > 0)
            firstnameErrors = 0;
    }

    if(firstname.value.length < 2 || firstname.value.length > 20) {
        firstnameErrors += 1;
        firstnameErrorMessage = 'Your first name must be between 2 and 20 characters long.';
    }

    if(!lastname.value.match(firstnameFormat)) {
        lastnameErrors += 1;
        lastnameErrorMessage = 'Your last name can only contain letters.';
    } else {
        if(lastnameErrors > 0)
            lastnameErrors -=1;
    }

    if(lastname.value.length < 2 || lastname.value.length > 20) {
        lastnameErrors += 1;
        lastnameErrorMessage = 'Your last name must be between 2 and 20 characters long.';
    }

    if(!email.value.match(emailFormat)) {
        emailErrors += 1;
        emailErrorMessage = 'Please enter a valid email address.';
    } else {
        if(emailErrors > 0)
            emailErrors -=1;
    }

    if(email.value.length == 0 || email.value.length > 100) {
        emailErrors += 1;
        emailErrorMessage = 'You must enter an email address (cannot be more than 100 characters long).';
    }

    if(!password.value.match(passwordFormat)) {
        passwordErrors += 1;
        passwordErrorMessage = 'Your password must contain at least: 1 uppercase letter, 1 lowercase letter, 1 number and a special character.';
    } else {
        if(passwordErrors > 0)
            passwordErrors = 0;
    }

    if(password.value.length < 8 || password.value.length > 32) {
        passwordErrors += 1;
        passwordErrorMessage = 'Your password must be between 8 and 32 characters long.';
    }

    if(confirm.value != password.value) {
        confirmErrors += 1;
        confirmErrorMessage = 'Your passwords do not match.';
    } else {
        if(confirmErrors > 0)
            confirmErrors = 0;
    }

    if(confirm.value.length == 0) {
        confirmErrors += 1;
        confirmErrorMessage = 'Please confirm your password.';
    }

    if(postalcode.value.length > 0) {
        if(!postalcode.value.match(postalcodeFormat)) {
            postalcodeErrors += 1;
            postalcodeErrorMessage = 'Please enter a valid postal code.';
        } else {
            if(postalcodeErrors > 0)
                postalcodeErrors = 0;
        }
    }

    if(address.value.length > 0) {
        if(address.value.length < 10 || address.value.length > 100) {
            addressErrors += 1;
            addressErrorMessage = 'Your address must between 10 and 100 characters long.';
        } else {
            if(addressErrors > 0)
                addressErrors = 0;
        }
    }

    if(city.value.length > 0) {
        if(!city.value.match(cityFormat)) {
            cityErrors += 1;
            cityErrorMessage = 'Your city can only contain letters.';
        } else {
            if(cityErrors > 0)
                cityErrors = 0;
        }

        if(city.value.length < 2 || city.value.length > 30) {
            cityErrors += 1;
            cityErrorMessage = 'Your city must between 2 and 30 characters long.';
        }
    }

    if(province.value.length > 0) {
        if(!province.value.match(provinceFormat)) {
            provinceErrors += 1;
            provinceErrorMessage = 'Your province can only contain letters.';
        } else {
            if(provinceErrors > 0)
                provinceErrors = 0;
        }

        if(province.value.length < 2 || province.value.length > 20) {
            provinceErrors += 1;
            provinceErrorMessage = 'Your province must between 2 and 20 characters long.';
        }
    }

    if(country.value != 0) {
        if(!country.value.match(countryFormat)) {
            countryErrors += 1;
            countryErrorMessage = 'Your country can only contain letters.';
        } else {
            if(countryErrors > 0)
                countryErrors = 0;
        }

        if(country.value.length < 4 || country.value.length > 48) {
            countryErrors += 1;
            countryErrorMessage = 'Your country must between 4 and 48 characters long.';
        }
    }

    if(firstnameErrors > 0) {
        displayInputInvalid(firstnameErrorMessage, firstname.getAttribute('id'), firstnameLabelId, firstnameErrorId);
    } else
        displayInputValid(firstnameErrorId, firstname.getAttribute('id'), firstnameLabelId);

    if(lastnameErrors > 0)
        displayInputInvalid(lastnameErrorMessage, lastname.getAttribute('id'), lastnameLabelId, lastnameErrorId);
    else
        displayInputValid(lastnameErrorId, lastname.getAttribute('id'), lastnameLabelId);

    if(emailErrors > 0)
        displayInputInvalid(emailErrorMessage, email.getAttribute('id'), emailLabelId, emailErrorId);
    else
        displayInputValid(emailErrorId, email.getAttribute('id'), emailLabelId);

    if(passwordErrors > 0)
        displayInputInvalid(passwordErrorMessage, password.getAttribute('id'), passwordLabelId, passwordErrorId);
    else
        displayInputValid(passwordErrorId, password.getAttribute('id'), passwordLabelId);

    if(confirmErrors > 0)
        displayInputInvalid(confirmErrorMessage, confirm.getAttribute('id'), confirmLabelId, confirmErrorId);
    else
        displayInputValid(confirmErrorId, confirm.getAttribute('id'), confirmLabelId);

    if(postalcodeErrors > 0)
        displayInputInvalid(postalcodeErrorMessage, postalcode.getAttribute('id'), postalcodeLabelId, postalcodeErrorId);
    else
        displayInputValid(postalcodeErrorId, postalcode.getAttribute('id'), postalcodeLabelId);

    if(addressErrors > 0)
        displayInputInvalid(addressErrorMessage, address.getAttribute('id'), addressLabelId, addressErrorId);
    else
        displayInputValid(addressErrorId, address.getAttribute('id'), addressLabelId);

    if(cityErrors > 0)
        displayInputInvalid(cityErrorMessage, city.getAttribute('id'), cityLabelId, cityErrorId);
    else
        displayInputValid(cityErrorId, city.getAttribute('id'), cityLabelId);

    if(provinceErrors > 0)
        displayInputInvalid(provinceErrorMessage, province.getAttribute('id'), provinceLabelId, provinceErrorId);
    else
        displayInputValid(provinceErrorId, province.getAttribute('id'), provinceLabelId);

    if(countryErrors > 0)
        displayInputInvalid(countryErrorMessage, country.getAttribute('id'), countryLabelId, countryErrorId);
    else
        displayInputValid(countryErrorId, country.getAttribute('id'), countryLabelId);

    // If there are no errors in the form, submit it
    if(
        firstnameErrors == 0 &&
        lastnameErrors == 0 &&
        emailErrors == 0 &&
        passwordErrors == 0 &&
        confirmErrors == 0 &&
        postalcodeErrors == 0 &&
        cityErrors == 0 &&
        provinceErrors == 0 &&
        countryErrors == 0
       )
        return true;

    // Otherwise, don't submit it
    else
        return false;
}

/*
    When the form validation for the specific input is invalid, make the label, input border and text red
    and display a red error message below it stating what the issue is so the user knows how to fix it
*/
function displayInputInvalid(errorMessage, inputId, labelId, errorMessageId)
{
    var inputId = document.getElementById(inputId);

    // Make the input red to tell the user it was entered incorrectly
    inputId.style.border = '1px solid red';
    inputId.style.boxShadow = '0 1px 2px red';
    inputId.style.color = 'red';
    labelId.style.color = 'red';
    // Make the error message red
    errorMessageId.style.color = 'red';
    // Display the appropriate error message
    errorMessageId.innerHTML = '<i class="fa fa-times"></i> ' + errorMessage; // Add the error message below the input field
    errorMessageId.style.display = 'block';
}

/* If the input data is valid, make the label, input border and text green  */
function displayInputValid(errorMessageId, inputId, labelId) {
    var inputId = document.getElementById(inputId);

    // Make the input green to tell the user it was entered correctly
    inputId.style.border = '1px solid green';
    inputId.style.boxShadow = '0 1px 2px green';
    inputId.style.color = 'green';
    labelId.style.color = 'green';
    // The onfocus event makes the error message blue, so make it green when the user enters correct information
    errorMessageId.style.color = 'green';
    errorMessageId.style.display = 'none';
}
