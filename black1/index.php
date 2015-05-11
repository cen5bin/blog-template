<?php get_header('normal');?>

<div id="container">

    <?php
        if (is_single()) get_template_part('content');
        else {
            $type = $_GET['type'];
            if (!$type) $type = 'homepage';
            get_template_part($type);
        }
        ?>
</div>
<?php //echo get_template_directory_uri();?>

<?php get_footer(); ?>
