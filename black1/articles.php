<div id="post-title-list">
    <h1>Articles</h1>
<?php if (have_posts()) {
    while (have_posts()) {
        the_post();?>

    <div class="post-title-item"> <a href="<?php the_permalink();?>"> <?php the_title(); ?></a>

            <div class="post-title-item-time">发表于<?php the_time('Y-m-d G:i'); ?>|

            <span class="text-color1">分类：
                <?php
                $categories = get_the_category();
                if ($categories) {
                    $x = 0;
                    foreach($categories as $category) {
                        if ($x) echo ',';
                        $x++;
                        ?>
                        <a class="underline small-font text-color1" href="<?php echo get_category_link($category->term_id);?>"> <?php echo $category->cat_name;?></a>
                    <?php
                    }
                }
                else echo '未分类';
                ?>
                </span>
            </div>
        </div>
<?php }} ?>

</div>