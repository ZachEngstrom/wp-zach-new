<?php

/**
 * Get last modified date from file for versioning
 */
if ( ! function_exists( 'zachengstrom_file_version' ) ) {
  function zachengstrom_file_version($ver) {
    date_default_timezone_set('America/Chicago');
    $themePath = './wp-content/themes/zachengstrom';
    return date("Y.m.d.Hi", filemtime($themePath . $ver));
  }
}