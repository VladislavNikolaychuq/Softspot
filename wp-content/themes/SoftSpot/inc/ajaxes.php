<?php
//
//add_action('wp_ajax_get_posts_autocomplete', 'get_posts_autocomplete');
//
//add_action('wp_ajax_nopriv_get_posts_autocomplete', 'get_posts_autocomplete');
//
//add_action('wp_ajax_get_filter_result', 'get_filter_result');
//
//add_action('wp_ajax_nopriv_get_filter_result', 'get_filter_result');
//
//
//function get_posts_autocomplete (){
//
//    $query = $_POST['search_value'];
//
//    $parameters = array(
//        'post_type' => 'tours',
//        'post_status' => 'publish',
//        's' => $query,
//        'fields' => 'ids'
//    );
//
//    $toursQuery = get_posts($parameters);
//    $tours = [];
//    $tours['tours'] = [];
//    foreach ($toursQuery as $postID) {
//        $tourItem = [];
//        $tourItem['link'] = get_permalink($postID);
//        $tourItem['title'] = get_the_title($postID);
//        $tourItem['image'] = get_field('tour_image', $postID);
//        $tourItem['cookingTime'] = "Cooking Time: 20 Minutes";
//        $tours['tours'][] = $tourItem;
//    }
//    $out = json_encode($tours);
//    echo $out;
//    exit;
//
//}
//
//function get_filter_result () {
//
//    $categoryString =  str_replace('\"', '', $_POST['category']);
//    $category = json_decode($categoryString);
//    $cityTermsID = $category[0];
//    $directionTemrsID = $category[1];
//    $typeTemrsID = $category[2];
//
//    $parameters = array(
//        'post_type' => 'tours',
//        'posts_per_page' => -1,
//        'post_status' => 'publish',
//        'fields' => 'ids');
//
//    $taxQuery = array('relation' => 'AND');
//
//    if ($cityTermsID != -1) {
//        $taxQuery[] = array(
//            'taxonomy' => 'city',
//            'field' => 'term_id',
//            'terms' => array($cityTermsID)
//
//        );
//    }
//    if ($directionTemrsID != -1) {
//        $taxQuery[] = array(
//            'taxonomy' => 'direction',
//            'field' => 'term_id',
//            'terms' => array($directionTemrsID)
//
//        );
//    }
//    if ($typeTemrsID != -1) {
//
//        $taxQuery[] = array(
//            'taxonomy' => 'type',
//            'field' => 'term_id',
//            'terms' => array($typeTemrsID)
//        );
//    }
//
//    if (!($typeTemrsID == -1 && $directionTemrsID == -1 && $cityTermsID == -1)) {
//        $parameters["tax_query"] = $taxQuery;
//    }
//
//    $result = array(
//        "result" => count(get_posts($parameters))
//    );
//
//    $result = json_encode($result);
//    echo $result;
//    exit;
//
//}
//
//


