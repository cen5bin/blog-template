<div class="post-container" id="post-<?php the_ID();?>">

    <div class="post-content-container">
        <h1 class="post-title"> <a href="<?php the_permalink();?>"> <?php the_title(); ?> </a></h1>
        <div class="post-metadata">
            发表于<?php the_time('Y-m-d G:i');?> &nbsp;|&nbsp; <span>分类：
            <?php
                $categories = get_the_category();
                if ($categories) {
                    $x = 0;
                    foreach($categories as $category) {
                        if ($x) echo ',';
                        $x++;
                        ?>
                        <a class="underline" href="<?php echo get_category_link($category->term_id);?>"> <?php echo $category->cat_name;?></a>
            <?php
                    }
                }
                else echo '未分类';
            ?>
                </span>
        </div>
        <div class="post-content"><?php the_content();?> </div>
    </div>
    <hr>
    <div class="comment-form">
        <?php comments_template();?>
    </div>
<!--    <div class="post-navigation">--><?php //posts_nav_link('in between', 'before', 'after');?><!--</div>-->
</div>