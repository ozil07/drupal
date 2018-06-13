<?php 

// function theme_menu_tree__menu_menu_info($variables) {
//   return '<ul class="information__menu">' . $variables['tree'] . '</ul>';
// }

function magaz_menu_tree__menu_basic_menu($variables) {
	return '<div id="dl-menu" class="dl-menuwrapper"><ul class="main__menu d-flex flex-wrap justify-content-between">' . $variables['tree'] . '</ul></div>';
}

function magaz_menu_tree__menu_basic_menu_second($variables) {
  return '<ul class="dl-submenu">' . $variables['tree'] . '</ul>';
}

function magaz_menu_link__menu_basic_menu($variables) {
  $element = $variables['element'];

  $submenu = '';
  if ($element['#below']) {
    // You can set a theme wrapper here or put an empty array() only
    // and theme the second level directly by adding <ul></ul> one line below.
    $element['#below']['#theme_wrappers'] = array('menu_tree__menu_basic_menu_second');
    $submenu = drupal_render($element['#below']);
  }

  $output = l($element['#title'], $element['#href'], $element['#localized_options']);
  return '<li' . drupal_attributes($element['#attributes']) . '>' . $output . '<div class="container submenu">' .  $submenu . '</div>' . "</li>\n";
}

function magaz_preprocess_page(&$vars, $hook) {
    if (isset($vars['node'])) { 
        $vars['theme_hook_suggestions'][] = 'page__'. str_replace('_', '--', $vars['node']->type);
    }
}





