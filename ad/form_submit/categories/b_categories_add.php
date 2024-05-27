<?php
global $con;
if(isset($_POST['submit'])){
    $title=get_safe_value($con,$_POST['title']);
    $icon=get_safe_value($con,$_POST['pickeric']);
    $description=get_safe_value($con,$_POST['description']);
    $seo_title=get_safe_value($con,$_POST['seo_title']);
    $seo_description=get_safe_value($con,$_POST['seo_description']);
    $seo_keywords=get_safe_value($con,$_POST['seo_keywords']);
    
    mysqli_query($con,"insert into blog_categories(title,icon,description,seo_title,seo_description,seo_keywords,status) value('$title','$icon','$description','$seo_title','$seo_description','$seo_keywords',1)");
    redirect(SITE_PATH_ADMIN.'category/blog_categories');
}
?>