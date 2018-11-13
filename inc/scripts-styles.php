<?php

/**
 * Remove Emoji code
 */
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_styles', 'print_emoji_styles');

/**
 * Add styles and scripts
 */
function zachengstrom_scripts_styles() {

  $custom_scripts_styles = array(
    // 'handle' => array( 'style/script', 'head/footer', 'path/to/file.cssjs', 'version' ),
    'zachengstrom-style'     => array('style', 'head', '/css/style.css', ''), // blank version = last updated timestamp
    'zachengstrom-jquery'    => array('script', 'head', '/js/jquery.min.js', '3.3.1'),
    'zachengstrom-vendor-js' => array('script', 'footer', '/js/vendor-scripts.min.js', ''),
  );

  foreach ($custom_scripts_styles as $handle => $src) {
    $ver = $src[3] == '' ? zachengstrom_file_version($src[2]) : $src[3];
    if ($src[0] == 'style') { // type::style
      wp_enqueue_style($handle, get_template_directory_uri() . $src[2], array(), $ver, false);
    } else { // type::script
      if ($src[1] == 'head') { // location::head
        wp_enqueue_script($handle, get_template_directory_uri() . $src[2], array(), $ver, false);
      } else { // location::footer
        wp_enqueue_script($handle, get_template_directory_uri() . $src[2], array(), $ver, true);
      }
    }
  }

  if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
    wp_enqueue_script( 'comment-reply' );
  }

}
add_action('wp_enqueue_scripts','zachengstrom_scripts_styles');

/**
 * Add HTML5 Shiv & Respond.JS conditional to the head
 */
function zachengstrom_ie_scripts() {
  wp_enqueue_script('zachengstrom-ie', get_template_directory_uri() . '/js/ie-scripts.min.js', array(), zachengstrom_file_version('/js/ie-scripts.min.js'), false);
  wp_script_add_data('zachengstrom-ie','conditional','lt IE 9');
}
add_action('wp_enqueue_scripts','zachengstrom_ie_scripts');