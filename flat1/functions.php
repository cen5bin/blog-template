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
    $cat = $_REQUEST['catid'];
    if ($cat) {
        include('postlist.php');
        return;
    }
    $type = $_REQUEST['type'];
    if ($type == 'all') {
        include('postlist.php');
        return;
    }
    if ($_REQUEST['p']) {
        include('post.php');
        return;
    }
    include('post.php');
}

function get_the_post() {
    $post_id = $_REQUEST['p'];
    if ($post_id) query_posts('p='.$post_id);
    else query_posts(array('posts_per_page'=>1, 'paged'=>1, 'orderby'=>'date', 'order'=>'DESC'));

}

function get_posts_in_cat() {
    $cat = $_REQUEST['catid'];
    if ($cat) query_posts(array('posts_per_page'=>100, 'paged'=>1, 'orderby'=>'date', 'order'=>'DESC', 'cat'=>$cat));
    else query_posts(array('posts_per_page'=>100, 'paged'=>1, 'orderby'=>'date', 'order'=>'DESC'));
}


function get_cat_name1() {
    $cat = $_REQUEST['catid'];
    if ($cat) return '分类：'.get_cat_name($cat);
    else return '全部文章';
}

function get_all_category() {
    $args = array('orderby'=>'name', 'order'=>'ASC');
    return get_categories($args);
}
