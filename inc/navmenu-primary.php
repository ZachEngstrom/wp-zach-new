<?php

/**
 * Custom Menu in Header Primary parameters
 */
function menu_header_primary() {
  wp_nav_menu(
    array (
      'theme_location'  => 'header-primary',
      'fallback_cb'     => false
    )
  );
}
/*
 * Custom HTML output for header-primary
 *
 * custom menu example @ https://digwp.com/2011/11/html-formatting-custom-menus/
 * code reference @ https://developer.wordpress.org/reference/functions/wp_get_nav_menu_items/
 * parsing url @ https://stackoverflow.com/questions/34246919/how-to-get-the-subdomain-of-a-url-using-php
 *
 * call with <?php if (function_exists(zachengstromcustom_menu_header_primary())) zachengstromcustom_menu_header_primary(); ?>
 */
function zachengstromcustom_menu_header_primary() {
  $menu_name = 'header-primary'; // specify custom menu slug from above
  if (($locations = get_nav_menu_locations()) && isset($locations[$menu_name])) {
    $menu = wp_get_nav_menu_object($locations[$menu_name]);
    $menu_items = wp_get_nav_menu_items($menu->term_id);

    $menu_list = '<ul id="menu-header-primary" class="navbar-nav ml-auto">' ."\n";
    foreach ((array) $menu_items as $key => $menu_item) {
      $title = $menu_item->title;
      $url = $menu_item->url;
      $menu_list .= "\t\t\t". '<li class="nav-item ml-lg-5">'."\n";
      $menu_list .= "\t\t\t\t". '<a class="nav-link p-0" href="'. $url .'">'. $title.'</a>'."\n";
      $menu_list .= "\t\t\t". '</li>' ."\n";
    }
    $menu_list .= "\t\t". '</ul>' ."\n";
  } else {
    // $menu_list = '<!-- Header Primary menu not defined -->';
  }
  echo $menu_list;
}