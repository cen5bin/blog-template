<div id="post-list-container">
    <h1><?php echo get_cat_name1();?></h1>
    <br>
    <br>
    <?php
    get_posts_in_cat();
    while (have_posts()) {
        the_post();
        ?>
        <div class="post-item">
            <div class="post-item-title"><a href="?p=<?php the_ID();?>"><?php the_title();?></a></div>
            <br>
        <div class="post-info">
            <?php
            $cates = get_the_category();
            foreach ($cates as $cate) {?>
                <a href="?catid=<?php echo $cate->term_id;?>"><div class="post-category-tag"><?php echo $cate->cat_name;?></div></a>
            <?php } ?>
            <span>发表于 <?php the_time('Y-m-d G:i');?> <?php if (function_exists('the_views')) {?>(<?php the_views();?>)<?php }?><?php edit_post_link('edit', '|&nbsp;'); ?></span>
        </div>
        </div>
    <?php
    }

    wp_reset_query();
    ?>
</div>


