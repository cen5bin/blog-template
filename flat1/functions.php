<?php
/**
 * Created by PhpStorm.
 * User: wubincen
 * Date: 15-6-11
 * Time: 上午10:49
 */


$post_id = null;

function deal_with_request() {
    global $post_id;
    $request = $_SERVER['QUERT_STRING'];
//    if (strlen($request) == 0) {
//        echo 'index';
//        include('post.php');
//    }
//    else
        if ($_REQUEST['p']) {
            $post_id = $_REQUEST['p'];
//            echo $_REQUEST['p'];
            include('post.php');
    }
}

function get_newest_post() {
    
}

function get_post_id() {
    global $post_id;
    return $post_id;
//    $post_id = $_REQUEST['p'];
}