<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width">
    <!--[if lt IE 9]>
    <script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>">
    <title> <?php bloginfo('name');?>|<?php bloginfo('description');?> </title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id='header'>
    <div id="blog-title-main">
        <div id="blog-title"><a href="<?php bloginfo('url');?>"><?php bloginfo('name');?></a></div>
        <div id="blog-description"><a href="<?php bloginfo('url');?>"><?php bloginfo('description');?></a></div>
    </div>

    <div id="navigator">
        <ul>
            <li><a href="<?php bloginfo('url');?>">Home</a></li>
            <li><a href="<?php bloginfo('url');?>/?type=postlist">Post List</a></li>
            <li><a href="<?php bloginfo('url');?>/?type=categories">Categories</a></li>
<!--            <li><a href="--><?php //bloginfo('url');?><!--/?type=archives">Archives</a></li>-->
            <li><a href="#">About Me</a></li>
        </ul>
    </div>
</div>