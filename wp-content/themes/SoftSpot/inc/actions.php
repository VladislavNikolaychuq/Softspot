<?php

function addScripts(){
    wp_deregister_script('jquery');

    wp_register_style('preload_css', DIRECT . 'css/preload.css');
    wp_register_style('preload_blog_css', DIRECT . 'css/preload-blog.css');
    wp_register_style('swiper_css', DIRECT . 'css/swiper.min.css');
    wp_register_style('common_css', DIRECT . 'css/common.css');


    wp_register_script('jquery', DIRECT . 'js/vendors/jquery-3.3.1.min.js');
    wp_register_script('swiper_js', DIRECT . 'js/vendors/swiper.min.js');
    wp_register_script('scrollbar_js', DIRECT . 'js/vendors/perfect-scrollbar.min.js');
    wp_register_script('blog_js', DIRECT . 'js/blog.min.js');
    wp_register_script('index_js', DIRECT . 'js/index.min.js');

    wp_enqueue_style('preload_css');
    wp_enqueue_style('swiper_css');
    wp_enqueue_style('common_css');
    wp_enqueue_style('preload_blog_css');


    wp_enqueue_script('jquery');
    wp_enqueue_script('swiper_js');
    wp_enqueue_script('scrollbar_js');
//    wp_enqueue_script('blog_js');
    wp_enqueue_script('index_js');



//
//    if (is_page_template(['pages/page-blog.php','pages/page-home.php',
//
//    ])) {
//        wp_enqueue_style('preload_css');
//    }
//
//
//
//    if (is_page_template(['pages/page-blog.php','pages/page-home.php'
//
//    ])) {
//        wp_enqueue_style('common_css');
//    }
//
//
//
//    if (is_page_template(['pages/page-blog.php','pages/page-home.php'
//
//    ])) {
//        wp_enqueue_style('swiper_css');
//    }
//
//
//    if (is_page_template(['pages/page-blog.php'
//
//    ])) {
//        wp_enqueue_style('preload_blog_css');
//    }






}

add_action( 'wp_enqueue_scripts', 'addScripts' );