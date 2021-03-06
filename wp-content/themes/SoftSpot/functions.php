<?php
define( 'TEMPLATEINC', TEMPLATEPATH . '/inc' );
define( 'TEMPLATEURI', get_template_directory_uri() );
define( 'DIRECT', TEMPLATEURI.'/assets/dist/' );
define( 'HOME', 6 );
define( 'BLOG', 82 );
//init Menu
register_nav_menus(array(
    'menu_header'=> 'menu_header',
    'menu_footer'=>'menu_footer'
) );

include ('inc/actions.php');
include ('inc/cpt.php');
include ('inc/menu.php');
include ('inc/ajaxes.php');

function cc_mime_types($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}

function getAllTours(){
    $args= array(
        'post_type' => 'tours',
        'posts_per_page' => 6,
        'fields' => 'ids',
        'post_status' => 'publish',
        'suppress_filters' => true
    );

    return get_posts($args);
}

show_admin_bar( false );

if( function_exists('acf_add_options_page') ) {

//    acf_add_options_page();

    // add parent
    $parent = acf_add_options_page(array(
        'page_title' => 'options',
        'menu_title' => 'option',
        'redirect' => false
    ));
    // add sub page
    acf_add_options_sub_page(array(
        'page_title' => 'Social links',
        'menu_title' => 'Social links',
        'parent_slug' => $parent['menu_slug'],
    ));
}
