<!--index页面中的主要部分，显示几篇文章的内容-->
<?php if(have_posts()) {
    while(have_posts()) {
        the_post();
        get_template_part('content');
    }
}

