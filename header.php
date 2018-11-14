<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Zach_Engstrom
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'zachengstrom' ); ?></a>

  <header id="masthead" class="site-header container-fluid">
      <nav class="navbar navbar-expand-lg navbar-light fixed-top bg-light">

        <div class="site-branding">
          <?php
          the_custom_logo();
          if ( is_front_page() && is_home() ) :
            ?>
            <h1 class="site-title"><a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
            <?php
          else :
            ?>
            <p class="h1 site-title"><a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
            <?php
          endif;
          $zachengstrom_description = get_bloginfo( 'description', 'display' );
          if ( $zachengstrom_description || is_customize_preview() ) :
            ?>
            <p class="site-description d-none"><?php echo $zachengstrom_description; /* WPCS: xss ok. */ ?></p>
          <?php endif; ?>

        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <?php if (function_exists(zachengstromcustom_menu_header_primary())) zachengstromcustom_menu_header_primary(); ?>
        </div>
      </nav>
  </header>

	<div id="content" class="site-content">
