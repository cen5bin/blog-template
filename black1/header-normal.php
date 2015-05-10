<html>
<head>
    <title> <?php bloginfo('name');?> </title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>">
</head>
<div id='header'>
    <div id="blog-title-main">
        <div id="blog-title"><a href="<?php bloginfo('url');?>"><?php bloginfo('name');?></a></div>
        <div id="blog-description"><a href="<?php bloginfo('url');?>"><?php bloginfo('description');?></a></div>
    </div>

    <div id="navigator">
        <ul>
            <li><a href="<?php bloginfo('url');?>">Home</a></li>
            <li><a href="#">Articles</a></li>
            <li><a href="#">Categories</a></li>
            <li><a href="#">Tags</a></li>
            <li><a href="#">About me</a></li>
        </ul>
    </div>
</div>