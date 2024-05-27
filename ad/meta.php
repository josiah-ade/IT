<?php

$link_value = substr($_SERVER["REQUEST_URI"],strrpos($_SERVER["REQUEST_URI"],"/")+1);
if(explode('?',$link_value)){
    $link_value = explode('?',$link_value)[0];
}

$dashboard_active = '';
$messages_active = '';
$blog_categories_active = '';
$post_active = '';

if($link_value == 'dashboard'){
    $dashboard_active = 'active';
}elseif($link_value == 'messages'){
    $messages_active = 'active';
}elseif($link_value == 'blog_categories' || $link_value == 'b_categories_add' || $link_value == 'b_categories_edit'){
    $blog_categories_active = 'active';
}elseif($link_value == 'post' || $link_value == 'edit_post' || $link_value == 'add_post' || $link_value == 'activepost' || $link_value == 'inactivepost' || $link_value == 'schedule_post' || $link_value == 'drafts'){
    $post_active = 'active';
}
?>