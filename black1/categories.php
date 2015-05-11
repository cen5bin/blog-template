<div id="post-category-list">
    <h1 class="center">Categories</h1>
    <?php
        $args = array('orderby'=>'name', 'order'=>'ASC');
        $categories = get_categories($args);
    ?>
    <ul>
        <?php foreach($categories as $category) { ?>
        <li class="center"> <a href="<?php
	echo black1_generate_category_link($category);
?>"><?php echo $category->name;?></a> (<?php echo $category->count;?>)</li>

      <?php  }?>
    </ul>
</div>