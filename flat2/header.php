<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<!--<title><?php //wp_title( '|', true, 'right' ); ?></title>-->
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url')?>">
<script src="<?php echo get_template_directory_uri();?>/jquery.js"></script>

<title> <?php bloginfo('name');?>|<?php bloginfo('description');?> </title>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	


<!--<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
    	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url')?>">
<script src="<?php echo get_template_directory_uri();?>/jquery.js"></script>
</head>
<body>-->