<?php
/**
 * @package WordPress
 * @subpackage HTML5_Boilerplate
 */
?>
<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
  <meta charset="utf-8">

  <title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
  <meta name="description" content="">

  <!--  Mobile Viewport Fix
  j.mp/mobileviewport & davidbcalhoun.com/2010/viewport-metatag
  device-width : Occupy full width of the screen in its current orientation
  initial-scale = 1.0 retains dimensions instead of zooming out if page height > device height
  maximum-scale = 1.0 retains dimensions instead of zooming in if page width < device width
  -->
  <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;">

  <!-- Place favicon.ico and apple-touch-icon.png in the root of your domain and delete these references -->
  <link rel="shortcut icon" href="/favicon.ico">
  <link rel="apple-touch-icon" href="/apple-touch-icon.png">


  <!-- Boilerplate stylesheet (implied media="all" – targets mobile browsers as well as desktops) -->
  <?php versioned_stylesheet($GLOBALS["TEMPLATE_RELATIVE_URL"]."html5-boilerplate/css/boilerplate.css") ?>

  <!-- Mobile First! (implied media="all" – targets mobile browsers as well as desktops) -->
  <?php versioned_stylesheet($GLOBALS["TEMPLATE_RELATIVE_URL"]."html5-boilerplate/css/mobile-first.css") ?>

  <!-- Aditional styles for modern desktop browsers and tablets (screen width >768px) -->
  <?php versioned_stylesheet($GLOBALS["TEMPLATE_RELATIVE_URL"]."html5-boilerplate/css/desktop.css", 'media="screen and (min-device-width: 768px)"') ?>

  <!-- Sure, we also remember Internet Explorer -->
  <?php versioned_stylesheet($GLOBALS["TEMPLATE_RELATIVE_URL"]."html5-boilerplate/css/desktop.css") ?>
	<!--[if lt IE 9]>
	<link href="desktop.css" media="screen" rel="stylesheet">
	<![endif]-->
	
  <!-- print stylesheet -->
  <?php versioned_stylesheet($GLOBALS["TEMPLATE_RELATIVE_URL"]."html5-boilerplate/css/print.css", 'media="print"') ?>	

  <!-- All JavaScript at the bottom, except for Modernizr which enables HTML5 elements & feature detects -->
  <?php versioned_javascript($GLOBALS["TEMPLATE_RELATIVE_URL"]."html5-boilerplate/js/modernizr-1.5.min.js") ?>

  <!-- Wordpress Head Items -->
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

  <?php wp_head(); ?>

</head>

<body>

  <div id="container">
    <div class="header" role="banner">
      <h1><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></h1>
      <p class="description"><?php bloginfo('description'); ?></p>
    </div>

