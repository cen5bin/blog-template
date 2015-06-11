<div class="post-container">
<?php
    get_the_post();
    if (have_posts()) {

        the_post();
        ?>
    <h1><?php the_title();?></h1>
        <br>
    <div class="post-info">

        <?php
        $cates = get_the_category();
        foreach ($cates as $cate) {
            ?>
            <a href="?catid=<?php echo $cate->term_id;?>"><div class="post-category-tag"><?php echo $cate->cat_name;?></div></a>
        <?php
        }
        ?>
        <span>发表于 <?php the_time('Y-m-d G:i');?> <?php edit_post_link('edit', '|&nbsp;'); ?></span>
    </div><br>
    <div class="post-content">
        <?php
            the_content();
        ?>
    </div>


    <?php
    }

    wp_reset_query();
?>
</div>


