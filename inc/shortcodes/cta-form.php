<?php
function add_cta_form($atts){

	extract( shortcode_atts( array(
		'title' => 'Free 24/7 Case Reviews',
		'description' => ''
	), $atts ));

	$title = "{$title}";
	$description = "{$description}";
	
	$cta_form = "";
	
	if($title !== "false") {
		$cta_form .= "<h2 class=\"c-cta-form__headline\">$title</h2>";
	}

	$cta_form .= "
	<form name=\"\" class=\"contact-form\" action=\"\" method=\"post\">

		<label class=\"first-name\">
			<input class=\"required\" name=\"first_name\" type=\"text\" placeholder=\"First Name\" />
		</label>

		<label class=\"last-name\">
			<input class=\"required\" name=\"last_name\" type=\"text\" placeholder=\"Last Name\" />
		</label>
		
		<label class=\"phone\">
			<input class=\"required\" name=\"phone\" type=\"text\" placeholder=\"Phone\" />
		</label>

		<label class=\"email-address\">
			<input class=\"required\" name=\"email_address\" type=\"text\" placeholder=\"Email\" />
		</label>
		
		<label class=\"comment\">
			<textarea name=\"comments\" placeholder=\"How can we help you?\" rows=\"7\"></textarea>
		</label>
		
		<input class=\"c-btn\" type=\"submit\" value=\"Submit\" />
	</form>
";
	return $cta_form;
}
add_shortcode( 'cta_form', 'add_cta_form' );

// function add_subscription_form(){
// 	$subscription_form = "";

// 	return $subscription_form;
// }

// add_shortcode( 'subscription_form', 'add_subscription_form' );


