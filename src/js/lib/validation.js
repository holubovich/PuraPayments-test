var firstNameInput = document.querySelector('input[name=first_name]');
var lastNameInput = document.querySelector('input[name=last_name]');
var businessNameInput = document.querySelector('input[name=business_name]');
var phoneInput = document.querySelector('input[name=contact_phone]');
var emailInput = document.querySelector('input[name=email_address]');

var form = document.querySelector('form');
var alertHTML = document.querySelector("#alertMessage");
var alertModal = document.querySelector("#alert");
var alertCloseButton = document.querySelector("#alertCloseButton");

function setJsCookie(cname, cvalue, exdays) {
  var d = new Date();
  d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
  var expires = 'expires=' + d.toGMTString();
  document.cookie = cname + '=' + cvalue + '; path=/; ' + expires;
}
// handle errors and return messages. all fields are assumed to have errors (be empty) by default
var errors = {
  first_name: ['First Name', true],
  last_name: ['Last Name', true],
  business_name: ['Business Name', true],
  phone: ['Phone Number', true],
  email: ['Email', true]
};

// each input is watching for changes; on change a validation function is fired
// if function requires params, you must call an anonymous function that returns desired function

if (typeof(form) !== 'undefined' && form != null)
{
    massAddEventListener( firstNameInput, function() {
        return checkCharsForValidString(firstNameInput, 'first_name', errors);
    });
    massAddEventListener( lastNameInput, function() {
        return checkCharsForValidString(lastNameInput, 'last_name', errors);
    });
    massAddEventListener( businessNameInput, function() {
        return checkCharsForValidString(businessNameInput, 'business_name', errors);
    });
    massAddEventListener( phoneInput, formatAndValidatePhone);
    massAddEventListener( emailInput, formatAndValidateEmail);

    form.addEventListener('submit', function(event){
        event.preventDefault();
        submitform();
    }, false)
}

alertCloseButton.addEventListener('click', function(event) {
  event.preventDefault();
  alertModal.style.display = 'none';
}, false)

function formatAndValidatePhone() {
  var numbers = phoneInput.value.replace(/\D/g, ''),
  char = {3:'-',6:'-'};
  phoneInput.value = '';
  for (var i = 0; i < numbers.length; i++) {
    phoneInput.value += (char[i]||'') + numbers[i];
  }
  if (numbers.length != 10) {
    invalidateInputStyling(phoneInput, 'phone', errors);
  } else {
    validateInputStyling(phoneInput, 'phone', errors);
  }
}

function formatAndValidateEmail() {
  //regular expression for invalid domains
  var invalidDomains = /\.(con|cpm|cin|cok)/;
  //if email value has invalid characters or does contain invalid domains, it will apply valid styling, else it will apply invalid styling
  if (emailInput.value.search(/^([A-Za-z0-9_.-]+)@([A-Zda-z.-]+)\.([A-Za-z.]{2,6})$/) == -1 || invalidDomains.test(emailInput.value)) {
    invalidateInputStyling(emailInput, "email", errors);
  } else {
    validateInputStyling(emailInput, "email", errors);
  }
}

function checkCharsForValidString(inpt, inptVal, obj) {
  if (inpt.value.trim().length > 0) {
    validateInputStyling(inpt, inptVal, obj);
  } else {
    invalidateInputStyling(inpt, inptVal, obj);
  }
}

function massAddEventListener(inputSelector, functionToAdd) {
  inputSelector.addEventListener('keyup', functionToAdd);
  inputSelector.addEventListener('keydown', functionToAdd);
  inputSelector.addEventListener('change', functionToAdd);
  inputSelector.addEventListener('paste', functionToAdd);
  inputSelector.addEventListener('blur', functionToAdd);
}

function invalidateInputStyling(currInput, errorsObjectKey, errObj) {
  var changedInpt = currInput;
  var changedObj = errObj;
  if (changedInpt.classList) {
    changedInpt.classList.remove('valid');
    changedInpt.classList.add('invalid');
    changedInpt.classList.remove('valid');
    changedInpt.classList.add('invalid');
  }
  else {
    changedInpt.className += ' ' + 'invalid';
    changedInpt.className += ' ' + 'invalid';
  }
  var reqText = changedInpt.nextSibling.nextSibling;
  reqText.style.display = 'block'; 
  (changedObj[errorsObjectKey])[1] = true;
}

function validateInputStyling(currInput, errorsObjectKey, errObj) {
  var changedInpt = currInput;
  var changedObj = errObj;
  if (changedInpt.classList) {
    changedInpt.classList.add('valid');
    changedInpt.classList.remove('invalid');
    changedInpt.classList.add('valid');
    changedInpt.classList.remove('invalid');
  }
  else {
    changedInpt.className += ' ' + 'valid';
    changedInpt.className += ' ' + 'valid';
  }
  var reqText = changedInpt.nextSibling.nextSibling;
  reqText.style.display = 'none';
  (changedObj[errorsObjectKey])[1] = false;
}

//this function removes dashes and spaces from the phone number input value upon form submission. It is called in submitform()
function stripPhoneNumber () {
  phoneInput.value = phoneInput.value.replace(/-|\s/g,"");
}

function submitform() {
  var errorlogging = [];
  for (var key in errors) {
    if ((errors[key])[1]) {
      errorlogging.push((errors[key])[0]);
    }
  }

  if (errorlogging.length === 0) {
    stripPhoneNumber();
    //form.submit();
      window.location.href = window.location.origin + '/thank-you.php';
  } else {
    alertModal.style.display = 'inline-block';
    var formatAlert = 'Please enter a valid '+errorlogging.join(', ').replace(/,(?!.*,)/gmi, ' and')+'.';
    alertHTML.innerHTML= formatAlert;

    return false;
  }
}
