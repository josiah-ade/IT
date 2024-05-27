<?php

if(isset($_GET['id']) && $_GET['id'] !=''){
    $link3=get_safe_value($con,$_GET['id']);
    $get_pub_drafts = get_pub_drafts($link3);
    if($get_pub_drafts == false){
        redirect(SITE_PATH_ADMIN.'posts/drafts');
    }
    $idDraft = $get_pub_drafts['id'];
    $title = $get_pub_drafts['title'];
    $category = $get_pub_drafts['category'];
    $date = $get_pub_drafts['date'];
    $time = $get_pub_drafts['time'];
    $contents = $get_pub_drafts['contents'];
    $tags = $get_pub_drafts['tags'];
    $schedule_post = $get_pub_drafts['schedule_post'];
    $schedule_date = $get_pub_drafts['schedule_date'];
    $schedule_time = $get_pub_drafts['schedule_time'];
    if($schedule_post == 1){
        $check1 = "checked";
        $cssD = '';
    }else{
        $check1 = 0;
        $cssD = 'd-none';
    }
    $get_category_x = get_category_x();
}else{
    redirect(SITE_PATH_ADMIN.'posts/drafts');
}
?>