<?php
define( 'TEMPLATEINC', TEMPLATEPATH . '/inc' );
define( 'TEMPLATEURI', get_template_directory_uri() );
define( 'DIRECT', TEMPLATEURI.'/assets/' );
//init Menu
register_nav_menus(array(
    'menu_header'=> 'menu_header',
    'menu_footer'=>'menu_footer'
) );

include ('inc/actions.php');
include ('inc/cpt.php');
include ('inc/menu.php');
include ('inc/ajaxes.php');