<?php
/**
 * Zach Engstrom functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Zach_Engstrom
 */

/**
 * Setup
 * MUST be called first in functions.php
 */
require get_template_directory() . '/inc/setup.php';

/**
 * Custom Menus
 */
require get_template_directory() . '/inc/navmenu-primary.php';

/**
 * Content Width
 */
//require get_template_directory() . '/inc/content-width.php';

/**
 * File Version
 */
require get_template_directory() . '/inc/file-version.php';

/**
 * Register widget area.
 */
require get_template_directory() . '/inc/widget-area.php';

/**
 * Scripts & Styles
 */
require get_template_directory() . '/inc/scripts-styles.php';

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

