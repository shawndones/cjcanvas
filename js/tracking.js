/*

Author: cj Advertising
Version: v1.1 JS Implementation
Date: 08/26/2014
Description: this file is used to create cookie variables that track the user for conversion purposes


USAGE:

Include this file at the top of every page where you want to track user data. A global include should be used.

That's it - the system should track traffic data going forward.

*/

// VARIABLES YOU CAN ADJUST
var expire_days = 90; // number of days that cookie will persist before expiring


/*** DO NOT EDIT BELOW THIS LINE - IT WILL AFFECT EVERY SITE USING COOKIE TRACKING ***/

// create expiration unix value
var seconds = new Date().getTime();
var expire = seconds+(60*60*24*expire_days);

// initialize variables
var COOKIE = new Array();
var cookiePairs = new Array();
var cookieArray = new Array();
var domainName = location.host.replace('www.','');
var GET = new Array();
var getPairs = new Array();
var force_flag = false;
var off = false;
var setCookie = false;
var update = false;
var utm_flag = false;

// get query string
var query = window.location.search.slice(1);
// get individual variables from string
var getPairs = query.split("&");

// check if GET variables present in URI
var vars = (getPairs.length > 0 && getPairs[0] != 'undefined' && getPairs[0] != '') ? true : false;

// function to check if cookie exists
function checkCookie(cookieName) {
	if (document.cookie.indexOf(cookieName) >= 0)
		return true;
	return false;
}

// function to retrieve cookie value, using name of cookie
function getCookieValue(cookieName) {
	var c = document.cookie;
	var pos = c.indexOf(cookieName);
	var temp = c.substring(pos).split("; ")[0];
	var val;
	
	c = temp;
	val = c.split("=")[1];
	
	return val;
}

// function to determine whether to update existing cookie info based on UTM values
function setUTMFlag(curr, prev) {

	// array of values - lower values take precedence over higher values
	var utm_values = [];
	utm_values['cpc'] = 1;
	utm_values['CPC'] = 1;
	utm_values['ppc'] = 1;
	utm_values['PPC'] = 1;
	utm_values['Ad'] = 2;
	utm_values['ad'] = 2;
	utm_values['Post'] = 3;
	utm_values['post'] = 3;
	
	// if previous value exists and new value is valid, compare
	if (utm_values[curr] && utm_values[curr] != 'undefined' && utm_values[prev] && utm_values[prev] != 'undefined') {
		if (utm_values[curr] < utm_values[prev]) {
			return true;
		}
		
		else {
			return false;
		}
	}
	
	// else if no prev value, but new value is valid, update
	else if (utm_values[curr] && utm_values[curr] != 'undefined') {
		return true;
	}
	
	// else, return false
	else {
		return false;
	}
}

// function to create generic cookie
function createCookie(name, val) {
	document.cookie=name+"="+val+"; expires="+expire+";domain=."+domainName+";path=/";
}

// function to create conversion tracking data cookies
function createTrackingCookie(type, expire, now) {
	
	// set cookie type to lowercase
	type = type.toLowerCase();

	// create date object
	//d = (now != "") ? d = new Date(now) : d = new Date();

	var t = new Date(1970, 0, 1);
	t.setSeconds(now);

	if (now != "" && t != "Invalid Date")
		d = t;
	
	else
		d = new Date();

	// round seconds to nearest whole integer
	var s = Math.round(d.getTime() / 1000);

	// set various cookie types
	switch(type) {
		// set date cookie
		case "date":
			createCookie("__cj_conv_date",s);
			COOKIE["conv_date"] = "conv_date="+s;
			break;
			
		case "flag":
			createCookie("__cj_conv_flag", true);
			break;
			
		case "landing":
			createCookie("__cj_conv_landing", document.URL);
			COOKIE["conv_landing"] = "conv_landing="+document.URL;
			break;
			
		case "referrer":
			var ref = (document.referrer != "" && document.referrer != "undefined") ? document.referrer : "NONE";
			createCookie("__cj_conv_referrer", ref);
			COOKIE["conv_referrer"] = "conv_referrer="+ref;
			break;
	}
}

// function used to return created tracking form elements and associated values
// returns string of HTML form element markup
function createTrackingElements() {

	var cookie = document.cookie;
	var cP = cookie.split("; ");
	var data_variables = "";
	var data_tracking = "";
	var data_utm = "";
	var input = "";
	var separator_flag = false;
	var separator_flag_utm = false;
	var separator_flag_variables = false;

	// if "off" flag not set
	if (!off) {

	
		// if cookies exist and there's no update flag, read cookies and insert data into form
		if (cookie && !update) {
			for (arr_item in cP) {
				// split cookie into name/value pair
				var val = cP[arr_item].split('=');

				// if cookie is a CJ cookie, unset the values
				if (val[0].indexOf('__cj_') >= 0 && val[0] != '__cj_conv_flag') {	
					nvar = val[0].substring(5);
					if (separator_flag)
						data_tracking = data_tracking + "&";
					data_tracking = data_tracking + nvar + "=" + encodeURIComponent(val[1]);
					separator_flag = true;
				}
				
				if ((val[0].indexOf('__cj_utm_') >= 0) || (val[0] == "__cj_gclid")) {
					if (separator_flag_utm)
						data_utm = data_utm + ", ";
					nvar = val[0].substring(5);
					data_utm = data_utm + nvar + ": " + val[1];
					separator_flag_utm = true;
				}
				
				else if (val[0].indexOf('__cj_') >= 0 && val[0].indexOf('__cj_conv_') < 0) {
					alert(3)
					if (separator_flag_variables)
						data_variables = data_variables + ", ";
					nvar = val[0].substring(5);
					data_variables = data_variables + nvar + ": " + val[1];
					separator_flag_variables = true;
				}
			}
			
	
			// create hidden form elements with tracking data
			var d = new Date(1970, 0, 1);
			d.setSeconds(getCookieValue('__cj_conv_date'));
			input = input + "<input type='hidden' name='conv_date' value='" + d.toDateString() + "' />";
			input = input + "<input type='hidden' name='conv_landing' value='" + getCookieValue('__cj_conv_landing') + "' />";
			input = input + "<input type='hidden' name='conv_referrer' value='" + getCookieValue('__cj_conv_referrer') + "' />";
		}
		
		// else, data has been updated, so pull newest data directly from PHP array
		else if (update) {
			for (var arr_item in COOKIE) {

				val = COOKIE[arr_item].split('=');

				if (separator_flag)
					data_tracking = data_tracking + "&";
				data_tracking = data_tracking + val[0] + "=" + encodeURIComponent(val[1]);
				separator_flag = true;
		
				if (val[0].indexOf('utm_') >= 0 || val[0] == "gclid") {
					if (separator_flag_utm)
						data_utm = data_utm + ", ";
					data_utm = data_utm + val[0] + ": " + val[1];
					separator_flag_utm = true;
				}
				
				else if (val[0].indexOf('conv_') < 0) {
					if (separator_flag_variables)
						data_variables = data_variables + ", ";
					data_variables = data_variables + val[0] + ": " + val[1];
					separator_flag_variables = true;
				}
			}
			
			// create hidden form elements with tracking data
			var d = new Date(1970, 0, 1);
			d.setSeconds(COOKIE['conv_date'].split("=")[1]);
			input = input + "<input type='hidden' name='conv_date' value='" + d.toDateString() + "' />";
			input = input + "<input type='hidden' name='conv_landing' value='" + COOKIE['conv_landing'].split("=")[1] + "' />";
			input = input + "<input type='hidden' name='conv_referrer' value='" + COOKIE['conv_referrer'].split("=")[1] + "' />";
		}
		
		// if UTM data set, display UTM data field
		if (data_utm != "")
			input = input + "<input type='hidden' name='conv_utm' value='" + data_utm + "' />";

		// if variables data set, display variables data field
		if (data_variables != "")
			input = input + "<input type='hidden' name='conv_variables' value='" + data_variables + "' />";	

		// display conversion page and tracking data URI fields
		input = input + "<input type='hidden' name='conv_submission' value='" + document.URL + "' />";
		input = input + "<input type='hidden' name='conv_tracking' value='" + data_tracking + "' />";
					
		//alert(data_tracking);
		//alert(data_utm);
		//alert(data_variables);
		//alert(input);
		
		// return HTML elements
		return input;
	}
	
	// else return false
	return false;
}


// check if $_GET variables exist
if (vars) {
	
	// convert GET variable strings into array keys and value pairs
	for (var arr_item in getPairs) {
		var val = getPairs[arr_item].split("=");
		GET[val[0]] = decodeURIComponent(val[1]);
	}
	
	// convert COOKIES to array key/value pairs for global access
	var c = document.cookie;
	var cookiePairs = c.split('; ');
	
	// set off flag
	off = (GET['off'] === 1 || GET['off'] === '1' || GET['off'] === 'true' || GET['off'] === true) ? true : false;
	// set force flag
	force_flag = (GET['force'] === 1 || GET['force'] === '1' || GET['force'] === 'true' || GET['force'] === true) ? true : false;

	// determine whether to update UTM parameters
	// check if GCLID parameter (auto-tagging) turned on
	if (GET['gclid'] && GET['gclid'] != 'undefined' && GET['gclid'] != '') {
		utm_flag = true;
	}
	
	// check if UTM medium parameter exists
	else if (GET['utm_medium'] && setUTMFlag(GET['utm_medium']) && !checkCookie("__cj_gclid")) {
		
		if (force_flag)
			utm_flag = true;

		else if (checkCookie("__cj_utm_medium"))
			utm_flag = setUTMFlag(GET['utm_medium'], getCookieValue('__cj_utm_medium'));
			
		else
			utm_flag = true;
		
	}
	
	// if update/flag is set, delete previous UTM and data info
	if (utm_flag || force_flag) {
		
		// check all cookies
		var c = document.cookie;
		var cArray = c.split('; ');

		// iterate through cookie array
		for (var cItem in cArray) {
			// split cookie into name/value pair
			val = cArray[cItem].split('=');

			// if cookie is a CJ cookie, unset the values
			if (val[0].indexOf('__cj_') >= 0) {
				// set cookie to expiration date in the past
				document.cookie = val[0] + "=; expires=Thu, 01-Jan-70 00:00:01 GMT;domain=."+domainName+";path=/";
			}
		}
	}
	
	// iterate through all query string variables
	for (var arr_item in getPairs) {
		var val = getPairs[arr_item].split("=");
		// create prefix for cj-specific cookies
		var ovar = val[0];
		var nvar = "__cj_" + ovar;

		// check to set data
		if (! checkCookie("__cj_conv_flag") || utm_flag || force_flag) {
			// we don't care about storing the "force" or "off" parameters, so make sure not to store it as a cookie
			if (ovar != "force" && ovar != "off")
				setCookie = true;
		}
		
		// if cookie flag set, set cookie
		if (setCookie) {
			createCookie(nvar, val[1]);
			COOKIE[ovar] = getPairs[arr_item];
		}

		// reset cookie flag
		setCookie = false;
	}
}

// set update flag
update = ((!checkCookie('__cj_conv_flag') || utm_flag || force_flag) && !off) ? true : false;

// check if conversion data cookies are set
if (update) {
	// create cookies
	createTrackingCookie("date", expire);
	createTrackingCookie("flag", expire);
	createTrackingCookie("referrer", expire);
	createTrackingCookie("landing", expire);
}