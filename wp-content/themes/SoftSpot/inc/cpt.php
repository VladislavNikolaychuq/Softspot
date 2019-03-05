<?php

$labels = array(
    'name'              => _x( 'Другие туры', 'taxonomy general name'),
    'singular_name'     => _x( 'Другие туры', 'taxonomy singular name'),
    'search_items'      => __( 'Другие туры'),
    'all_items'         => __( 'Все другие туры'),
    'parent_item'       => __( 'Parent Genre'),
    'parent_item_colon' => __( 'Parent Genre:' ),
    'edit_item'         => __( 'Edit Genre'),
    'update_item'       => __( 'Update Genre'),
    'add_new_item'      => __( 'Добавить другие туры'),
    'new_item_name'     => __( 'New Genre Name'),
    'menu_name'         => __( 'Другие туры'),
);
register_taxonomy('other', array('tours'),array(
    'hierarchical'      => true,
    'labels'            => $labels,
    'show_ui'           => true,
    'show_admin_column' => true,
    'query_var'         => true,
    'rewrite'           => array( 'slug' => 'other' ),


));
