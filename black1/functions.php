<?php
//remove_action( 'wp_head', 'wp_enqueue_scripts', 1 ); 
remove_action( 'wp_head', 'feed_links', 2 ); 
remove_action( 'wp_head', 'feed_links_extra', 3 ); 
remove_action( 'wp_head', 'rsd_link' ); 
remove_action( 'wp_head', 'wlwmanifest_link' ); 
remove_action( 'wp_head', 'index_rel_link' ); 
remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 ); 
remove_action( 'wp_head', 'start_post_rel_link', 10, 0 ); 
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 ); 
remove_action( 'publish_future_post', 'check_and_publish_future_post', 10, 1 );
remove_action( 'wp_head', 'wp_generator' );
remove_action( 'wp_footer', 'wp_print_footer_scripts' );
remove_action( 'wp_head', 'wp_shortlink_wp_head', 10, 0 ); 
remove_action( 'template_redirect', 'wp_shortlink_header', 11, 0 );
add_action('widgets_init', 'my_remove_recent_comments_style'); 
function my_remove_recent_comments_style() {
    global $wp_widget_factory;
    remove_action('wp_head', array($wp_widget_factory->widgets['WP_Widget_Recent_Comments'], 'recent_comments_style')); 
}

//
//function coolwp_remove_open_sans_from_wp_core() {
//    wp_deregister_style( 'open-sans' );
//    wp_register_style( 'open-sans', false );
//    wp_enqueue_style('open-sans','');
//}
//add_action( 'init', 'coolwp_remove_open_sans_from_wp_core' );

define('POST_LIST_PER_PAGE', 25);

//产生category对应的链接
function black1_generate_category_link($category) {
    return bloginfo('url').'/?type=postlist&category='.$category->term_id;
}

?>