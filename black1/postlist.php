<!--显示所有文章的列表-->
<div id="post-title-list">

<?php
$offset = $_GET['offset'];
$category = $_GET['category'];
if ($offset == null) $offset = 1;
$args = array('posts_per_page'=>POST_LIST_PER_PAGE,
    'paged'=>$offset,
    'orderby'=>'date',
    'order'=>'DESC');
if ($category != null) {
    $args['cat'] = $category;
    echo '<h1 class="center">'.get_category($category)->cat_name.'</h1>';
}
else echo '<h1 class="center">Articles</h1>';
query_posts($args);

if (have_posts()) {
    while (have_posts()) {
        the_post();?>

    <div class="post-title-item"> <a href="<?php the_permalink();?>"> <?php the_title(); ?></a>

            <div class="post-title-item-time">发表于<?php the_time('Y-m-d G:i'); ?>&nbsp;|

            <span class="text-color1">分类：
                <?php
                $categories = get_the_category();
                if ($categories) {
                    $x = 0;
                    foreach($categories as $category) {
                        if ($x) echo ',';
                        $x++;
                        ?>
                        <a class="underline small-font text-color1" href="<?php echo black1_generate_category_link($category);?>" >
                            <?php echo $category->cat_name;?></a>
                    <?php
                    }
                }
                else echo '未分类';
                ?>
                </span>
            </div>
        </div>
<?php

    }}wp_reset_query(); ?>

</div>