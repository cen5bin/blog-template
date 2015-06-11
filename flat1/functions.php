<?php
/**
 * Created by PhpStorm.
 * User: wubincen
 * Date: 15-6-11
 * Time: 上午10:49
 */



function deal_with_request() {
    $request = $_SERVER['QUERT_STRING'];
//    if (strlen($request) == 0) {
//        echo 'index';
//        include('post.php');
//    }
//    else
    include('post.php'); return;
        if ($_REQUEST['p']) {
            include('post.php');
    }
}

function get_the_post() {
    $post_id = $_REQUEST['p'];
    if ($post_id) query_posts('p='.$post_id);
    else query_posts(array('posts_per_page'=>1, 'paged'=>0, 'orderby'=>'date', 'order'=>'DESC'));

}

function get_all_category() {
    $args = array('orderby'=>'name', 'order'=>'ASC');
    return get_categories($args);
}
