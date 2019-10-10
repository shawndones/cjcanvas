/***************************************
*           Google Recaptcha           *
***************************************/

var currentForm;
var recaptchaToken;

function recaptchaCallback() {
	var form = currentForm;
	var token = grecaptcha.getResponse();
	
	if (!form.elements["g-recaptcha-response"]) {
		var response = "<textarea id='g-recaptcha-response' name='g-recaptcha-response' class='g-recaptcha-response' style='width: 250px; height: 40px; border: 1px solid #c1c1c1; margin: 10px 25px; padding: 0px; resize: none;  display: none; '>"+token+"</textarea>";
		jQuery(form).append(response);
	}
	
	else if (form.elements["g-recaptcha-response"].value == "") {
		form.elements["g-recaptcha-response"].value = token;
	}
	
	form.submit();
}

// jQuery no conflict
jQuery(document).ready(function($) {
	// toggle form values
	$('form :input').not('input[type=submit]').not('input[type=hidden]').each(function() {
	
		this.onfocus = function() {
			if (this.value == this.defaultValue)
				this.value = "";
		}
		
		this.onblur = function() {
			if (this.value == "")
				this.value = this.defaultValue;
		}
	
	});


	// form check function
	$('form[action*="cjadvertising.com/forms/submit.php"], form[action*="cjsecureforms.com/legacy/submit.php"], form[action*="cjsecureforms.com/recaptcha/submit.php"], form[action*="cjadvertising.com/webhooks/cat/lcc/"], form[action*="cjadvertising.com/webhooks/cat/lcc/index.php"]').submit(function(event) {
		event.preventDefault();
		currentForm = this;
	
		// initialize message variable
		var message = '';
		// initialize focus variable
		var focus = '';
		// variable to hold current element title
		var elTitle = '';
		// initialize flag variable for go/no-go on form submissions
		var flag = false;
		
	
		// checkTitle() function to get/generate title
		// for form field inputs (used for user alerts)
		function checkTitle() {
			
			var element = '';
			
			// check if title attribute has been set and grab title
			if ($(this).attr('title') != '' && $(this).attr('title') != undefined)
				element = $(this).attr('title');
	
			
			// else, check value attribute for title
			else if ($(this).prop('defaultValue') != '' && $(this).prop('defaultValue') != undefined)
				element = $(this).prop('defaultValue');
	
			// else, check placeholder (html5)
			else if ($(this).attr('placeholder') != '' && $(this).attr('placeholder') != undefined)
				element = $(this).attr('placeholder');
	
			// else, use element name
			else
				element = $(this).attr('name');
	
				
			elTitle = element;
		}
	
		// checkEmpty() function to check for default value
		// and empty values in text boxes
		function checkEmpty() {
			
			var empty = false;
			
			switch($(this).attr('type')) {
				case "text": 
					// trim whitespace from input value
					var trimVal = $.trim($(this).val());
		
					if (trimVal == '' || trimVal == 'undefined' || trimVal == $(this).attr('placeholder') || trimVal == $(this).prop("defaultValue"))
						empty = true;
	
					break;
					
				case "checkbox":
					if (! $(this).is(':checked'))
						empty = true;
					
					break;
			}
			
			// generate empty alert message
			if (empty == true) {
	
				$(this).each(checkTitle);
				message += '* ' + elTitle + ' is required.' + '\r\n';
				
				if (focus == '')
					focus = this;
			}
		}
		
		// checkEmail function to check email values for
		// invalid email address formats
		function checkEmail() {
			// email regex filters
			var emailFilter=/^.+@.+\..+$/;
			var illegalChars= /[\(\)\<\>\,\;\:\\\/\[\]]/;
			
			// check email address format
			if (!(emailFilter.test($(this).val())) || $(this).val().match(illegalChars)) {
			
				$(this).each(checkTitle);
				message += '* ' + elTitle + ' is in an invalid format.' + '\r\n';
				
				// set focus element if first incomplete item
				if (focus == '')
					focus = this;
			}
		}
	
		// checkPhone function to check phone number
		// values for invalid phone number formats
		function checkPhone() {
			// get phone number format
			var digits = $(this).val().replace(/[\(\)\.\-\ ]/g, '');
	
			if (isNaN(parseInt(digits))) {
			
				$(this).each(checkTitle);
		    	message += '* ' + elTitle + ' contains illegal characters.' + '\r\n';
		    	
		    	// set focus element if first incomplete item
		    	if (focus == '')
					focus = this;
		    }
		}
	
		// check fields
		$(':input.required', this).not('input[type=submit]').not('input[type=hidden]').each(checkEmpty);
		$('.email-address.required', this).each(checkEmail);
		$('.phone-number.required', this).each(checkPhone);
	
		// check if message set - if so, errors have occured
		if (message != '') {
			// display alert message
			alert("Please complete the following before submitting: \r\n\r\n" + message);
			// focus on first incomplete element
			$(focus).focus();
			// reset variables
			focus = '';
			message = '';
			// stop form from sending
			return false;
		}
	
		// execute recaptcha
		grecaptcha.execute();

		// else, return true and complete send
		return true;
	});

});

