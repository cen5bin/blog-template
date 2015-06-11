<div id="category-container">
<?php
    $categories = get_all_category();
    foreach ($categories as $category) {
        ?>
    <div class="category-item-container"><div class="category-item">
        <div class="category-item-name"><?php echo $category->cat_name;?></div>
        <div class="category-item-count"><?php echo $category->count;?>篇文章</div>
    </div>
    </div>

    <?php
    }
?>
</div>