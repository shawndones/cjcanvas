<?php

function cja_phone() {
  // TODO: Add Number Formatting Options to Shortcode
  // create custom field on site options page.
  // $str = get_field('default_phone', 'options');
  if(empty($str)) {
    $str = "555-555-5555";
  } 
  return $str;
}

add_shortcode('phone', 'cja_phone');