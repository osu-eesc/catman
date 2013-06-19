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
* Replacement for theme_form_element().
*/
function catman_webform_element($variables) {
  // Ensure defaults.
  $variables['element'] += array(
    '#title_display' => 'before',
  );

  $element = $variables['element'];

  // All elements using this for display only are given the "display" type.
  if (isset($element['#format']) && $element['#format'] == 'html') {
    $type = 'display';
  }
  else {
    $type = (isset($element['#type']) && !in_array($element['#type'], array('markup', 'textfield'))) ? $element['#type'] : $element['#webform_component']['type'];
  }
  $parents = str_replace('_', '-', implode('--', array_slice($element['#parents'], 1)));

  $wrapper_classes = array(
   'form-item',
   'webform-component',
   'webform-component-' . $type,
  );
  if (isset($element['#title_display']) && $element['#title_display'] == 'inline') {
    $wrapper_classes[] = 'webform-container-inline';
  }
  $output = '<div class="' . implode(' ', $wrapper_classes) . '" id="webform-component-' . $parents . '">' . "\n";
  $required = !empty($element['#required']) ? '<span class="form-required" title="' . t('This field is required.') . '">*</span>' : '';

  // If #title is not set, we don't display any label or required marker.
  if (!isset($element['#title'])) {
    $element['#title_display'] = 'none';
  }
  $prefix = isset($element['#field_prefix']) ? '<span class="field-prefix">' . _webform_filter_xss($element['#field_prefix']) . '</span> ' : '';
  $suffix = isset($element['#field_suffix']) ? ' <span class="field-suffix">' . _webform_filter_xss($element['#field_suffix']) . '</span>' : '';

  switch ($element['#title_display']) {
    case 'inline':
    case 'before':
    case 'invisible':
      $output .= ' ' . theme('form_element_label', $variables);
  if (!empty($element['#description'])) {
$output .= ' <div class="description">' . $element['#description'] . "</div>\n";
  }

      $output .= ' ' . $prefix . $element['#children'] . $suffix . "\n";
      break;

    case 'after':
      $output .= ' ' . $prefix . $element['#children'] . $suffix;
      $output .= ' ' . theme('form_element_label', $variables) . "\n";
  if (!empty($element['#description'])) {
$output .= ' <div class="description">' . $element['#description'] . "</div>\n";
  }

      break;

    case 'none':
    case 'attribute':
      // Output no label and no required marker, only the children.
      $output .= ' ' . $prefix . $element['#children'] . $suffix . "\n";
      break;
  }

  $output .= "</div>\n";

  return $output;
}


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

// function catman_process_html(&$vars) {

// }



/**
 * Override or insert variables for the page templates.
 */

// function catman_preprocess_page(&$vars) {
// 	$vars['osu_tag'] = '<div id="osu-top-hat">
//   <a title="Link to OSU homepage" href="http://oregonstate.edu/"><img class="tag" width="101px" height="119px" title="OSU homepage" alt="Oregon State University" src="/catalog/sites/all/themes/catman/images/lay_hdr_tag.gif"></a>
// 	</div>';
// }



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
