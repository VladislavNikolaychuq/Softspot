<?php

function addScripts(){
    wp_deregister_script('jquery');

    wp_register_style('preload_css', DIRECT . '/dist/css/preload.css');
    wp_register_style('preload_blog_css', DIRECT . '/dist/css/preload-blog.css');
    wp_register_style('swiper_css', DIRECT . '/dist/css/swiper.min.css');
    wp_register_style('common_css', DIRECT . '/dist/css/common.css');


    wp_register_script('jquery', DIRECT . '/js/vendors/jquery-3.3.1.min.js');
    wp_register_script('swiper_js', DIRECT . '/js/vendors/swiper.min.js');
    wp_register_script('scrollbar_js', DIRECT . '/js/vendors/perfect-scrollbar.min.js');


    wp_enqueue_style('preload_css');
    wp_enqueue_style('swiper_css');
    wp_enqueue_style('common_css');
    wp_enqueue_style('preload_blog_css');


    wp_enqueue_script('jquery');
    wp_enqueue_script('swiper_js');
    wp_enqueue_script('scrollbar_js');
    wp_enqueue_script('social_share_js');
    wp_enqueue_script('common_js');



    if (is_page_template(['pages/page-blog.php','pages/page-home.php',

    ])) {
        wp_enqueue_style('swiper_css');
    }



    if (is_page_template(['pages/page-blog.php','pages/page-home.php'

    ])) {
        wp_enqueue_style('recipe-page_css');
    }



    if (is_page_template(['pages/page-blog.php','pages/page-home.php'

    ])) {
        wp_enqueue_style('story-page_css');
    }




}

add_action( 'wp_enqueue_scripts', 'addScripts' );