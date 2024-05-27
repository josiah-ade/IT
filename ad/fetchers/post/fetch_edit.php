<?php

if(isset($_GET['id']) && $_GET['id'] > 0){
    $link3=get_safe_value($con,$_GET['id']);
    $get_pub_post = get_pub_post($link3);
    if($get_pub_post == false){
        redirect(SITE_PATH_ADMIN.'post');
    }
    $title = $get_pub_post['title'];
    $category = $get_pub_post['category'];
    $date = $get_pub_post['date'];
    $time = $get_pub_post['time'];
    $contents = $get_pub_post['contents'];
    $tags = $get_pub_post['tags'];
    $get_category_x = get_category_x();
    
}else{
    redirect(SITE_PATH_ADMIN.'post');
}
?>