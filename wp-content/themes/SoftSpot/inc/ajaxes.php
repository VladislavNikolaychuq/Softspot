<?php
add_action('wp_ajax_get_posts_by_category', 'get_posts_by_category');

add_action('wp_ajax_nopriv_get_posts_by_category', 'get_posts_by_category');

function getBlogPosts($page)
{
    $pets = new WP_Query(array(
        'paged' =>$page,
        'posts_per_page' => 2,
        'orderby' => 'date',
        'order' => 'DESC',
        'post_type' => 'post',
        'fields' => 'ids',
        'suppress_filters' => true,
        'post_status' => 'publish'
    ));
    return $pets;
}


function get_posts_by_category (){

    $page = $_POST["page"];

    $newpets = [];

    $pets = getBlogPosts($page);


        foreach ($pets->posts as $petID){
            $image_blog = get_field('image_blog', $petID);
            $get_permalink = get_permalink($petID);
            $description_posts = get_field('description_posts', $petID);
            $title = get_the_title($petID);
            $date = get_field('date_blog',$petID);


            $pet = [];
            $pet['link'] = $get_permalink;
            $pet['image'] =$image_blog ;
            $pet['title'] = $title;
            $pet['content']=$description_posts;
            $pet['date']=$date;
            $newpets[]=$pet;
        }




    $global=[];
   $global['blog']=$newpets;
   $global ['maxPages']=$pets->max_num_pages;
    $result= json_encode($global);
    echo $result ;
    exit;
}

function getSearchPosts()
{
    $search = get_posts(array(
        'posts_per_page' => -1,
        'orderby' => 'date',
        'order' => 'DESC',
        'post_type' => 'post',
        'fields' => 'ids',
        'suppress_filters' => true,
        'post_status' => 'publish',
        's' => 'keyword'
    ));
    return $search;
}



function get_search_by_category (){

    $newSearcher = [];


    $search = getSearchPosts();

    foreach ($search as $item) {
        $newSearcher['link'] =get_permalink($item);
        $newSearcher['title'] = get_the_title($item);

    }
    $result= json_encode($newSearcher);
}

