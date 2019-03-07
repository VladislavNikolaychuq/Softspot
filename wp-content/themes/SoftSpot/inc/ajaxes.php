<?php
add_action('wp_ajax_get_posts_by_category', 'get_posts_by_category');

add_action('wp_ajax_nopriv_get_posts_by_category', 'get_posts_by_category');

add_action('wp_ajax_get_search_result', 'get_search_result');

add_action('wp_ajax_nopriv_get_search_result', 'get_search_result');

<<<<<<< HEAD





function getBlogPosts($page,$taxId)
{

    $parameters = array(
=======
function getBlogPosts($page)
{
    $pets = new WP_Query(array(
>>>>>>> BlogPage
        'paged' =>$page,
        'posts_per_page' => 2,
        'orderby' => 'date',
        'order' => 'DESC',
        'post_type' => 'post',
        'fields' => 'ids',
        'suppress_filters' => true,
        'post_status' => 'publish'
<<<<<<< HEAD
    );



    if ($taxId!=-1 && !is_null($taxId)){
        $taxQuery = array(
            array(
                'taxonomy' => 'category',
                'field' => 'term_id',
                'terms'=> $taxId

            ));
        $parameters['tax_query'] = $taxQuery;

    }


    $pets = new WP_Query($parameters);





    return $pets;

=======
    ));
    return $pets;
>>>>>>> BlogPage
}


function get_posts_by_category (){

    $page = $_POST["page"];
<<<<<<< HEAD
    $taxId= $_POST['taxId'];
    $newpets = [];

    $pets = getBlogPosts($page,$taxId);
=======

    $newpets = [];

    $pets = getBlogPosts($page);
>>>>>>> BlogPage


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

function getSearchPosts($searchValue)
{
    $search = get_posts(array(
        'posts_per_page' => -1,
        'orderby' => 'date',
        'order' => 'DESC',
        'post_type' => 'post',
        'fields' => 'ids',
        'suppress_filters' => true,
        'post_status' => 'publish',
        's' => $searchValue
    ));
    return $search;
}



function get_search_result (){
$searchValue= $_POST['search_value'];
    $newSearcher = [];


    $search = getSearchPosts($searchValue);

    foreach ($search as $item) {
        $simplesearch = [];
        $simplesearch['link'] =get_permalink($item);
        $simplesearch['title'] = get_the_title($item);

        $newSearcher[]=$simplesearch;
    }
    $blog=[];

    $blog['result']=$newSearcher;

    $result= json_encode($blog);
    echo $result;
    exit;

}
function getAllEpisodes()
{
    $args = array(
        'post_type' => 'post', // тип постов - записи
        'posts_per_page' => -1,
        'fields' => 'ids',
        'post_status' => 'publish',
        'suppress_filters'=> true
    );

    return get_posts($args);
}


