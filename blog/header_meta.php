<?php
$get_meta = get_meta();
$link_active = explode('/',$_SERVER["REQUEST_URI"]);
$acive_link = $link_active[3];

$meta_title = '';
$description = '';
$meta_description = '';
$meta_keywords = '';
$url = '';
$type = 'website';
$image = '';

if($acive_link != ''){
    if(isset($_GET['title']) && $_GET['title'] != ''){
        $title = $_GET['title'];
        // prx($title);
        $get_posts_details = get_posts_details($title);
        if($get_posts_details == false){
            redirect(SITE_PATH.'blog');
        }
        $tags = $get_posts_details['tags'];
        $tags = explode(',',$tags);
        $get_similar_posts = get_similar_posts($title);
        $meta_title = $get_posts_details['title'];
        $m_description = strip_tags($get_posts_details['contents']);
        $m_description =  stristr($m_description,'.',true).'.';
        $meta_description = $m_description;
        $meta_keywords = $get_posts_details['tags'];
        $url = $get_meta['url'];
        $image = $get_posts_details['image'];
    }else{
        $filter = $get_meta['meta_title'];
        if(isset($_GET['filter']) && $_GET['filter'] != ''){
            $filter = ucfirst($_GET['filter']);
        }
        $meta_title = $filter;
        $meta_description = $get_meta['meta_description'];
        $meta_keywords = $get_meta['meta_keywords'];
        $url = $get_meta['url'];
    }
    
}else{
    $meta_title = $get_meta['meta_title'];
    $meta_description = $get_meta['meta_description'];
    $meta_keywords = $get_meta['meta_keywords'];
    $url = $get_meta['url'];
}

?>