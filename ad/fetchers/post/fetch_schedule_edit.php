<?php

if(isset($_GET['id']) && $_GET['id'] !=''){
    $link3=get_safe_value($con,$_GET['id']);
    $get_pub_post = get_pub_schedule($link3);
    if($get_pub_post == false){
        redirect(SITE_PATH_ADMIN.'schedule_post');
    }
    $title = $get_pub_post['title'];
    $author = $get_pub_post['author'];
    $category = $get_pub_post['category'];
    $date = $get_pub_post['date'];
    $date2 = $get_pub_post['date2'];
    $time = $get_pub_post['time'];
    $contents = $get_pub_post['contents'];
    $tags = $get_pub_post['tags'];
    $schedule_date = $get_pub_post['schedule_date'];
    $schedule_time = $get_pub_post['schedule_time'];
    $check1 = "checked";
    $cssD = '';
    $get_category_x = get_category_x();
}else{
    redirect(SITE_PATH_ADMIN.'schedule_post');
}
?>