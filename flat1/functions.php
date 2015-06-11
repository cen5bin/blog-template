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
        if ($_REQUEST['post_id']) {
        echo $_REQUEST['post_id'];
    }
}