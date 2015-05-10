<?php get_header('normal');?>

<div id="container">

    <?php
        $type = $_GET['type'];
        if (!$type) $type = 'content';
        if ($type == 'content') get_template_part('homepage');
        else if ($type == 'articles') get_template_part('articles');
        ?>
</div>
<?php //echo get_template_directory_uri();?>

<?php get_footer(); ?>
