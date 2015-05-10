<?php if (have_posts()) {
    while (have_posts()) {
        the_post();?>

    <div class="post-title-item"> <a href="<?php the_permalink();?>"> <?php the_title(); ?> </a></div>
<?php }} ?>

