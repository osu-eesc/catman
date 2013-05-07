<?php

/**
 * @file
 * Template.php - process theme data for your sub-theme.
 * 
 * Rename each function and instance of "catman" to match
 * your subthemes name, e.g. if you name your theme "catman" then the function
 * name will be "catman_preprocess_hook". Tip - you can search/replace
 * on "catman".
 */


/**
 * Preprocess variables for the html template.
 */
/* -- Delete this line to enable.
function adaptivetheme_subtheme_preprocess_html(&$vars) {
  global $theme_key;

  // Two examples of adding custom classes to the body.
  
  // Add a body class for the active theme name.
  // $vars['classes_array'][] = drupal_html_class($theme_key);

  // Browser/platform sniff - adds body classes such as ipad, webkit, chrome etc.
  // $vars['classes_array'][] = css_browser_selector();

}
// */


/**
 * Override or insert variables for the html template.
 */
/* -- Delete this line if you want to use this function
function catman_preprocess_html(&$vars) {
}
function catman_process_html(&$vars) {
}
// */


/**
 * Override or insert variables for the page templates.
 */
/* -- Delete this line if you want to use these functions
function catman_preprocess_page(&$vars) {
}
function catman_process_page(&$vars) {
}
// */


/**
 * Override or insert variables into the node templates.
 */
/* -- Delete this line if you want to use these functions
function catman_preprocess_node(&$vars) {
}
function catman_process_node(&$vars) {
}
// */


/**
 * Override or insert variables into the comment templates.
 */
/* -- Delete this line if you want to use these functions
function catman_preprocess_comment(&$vars) {
}
function catman_process_comment(&$vars) {
}
// */


/**
 * Override or insert variables into the block templates.
 */
/* -- Delete this line if you want to use these functions
function catman_preprocess_block(&$vars) {
}
function catman_process_block(&$vars) {
}
// */
