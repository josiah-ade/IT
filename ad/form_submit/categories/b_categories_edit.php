<?php
global $con;
if(isset($_GET['id']) && $_GET['id'] > 0){
    $checkeditid=get_safe_value($con,$_GET['id']);
}else{
    redirect(SITE_PATH_ADMIN.'category/blog_categories');
}
$chekdatabase=mysqli_query($con,"select * from blog_categories where id='$checkeditid'");
$checkconfirm=mysqli_num_rows($chekdatabase);
if($checkconfirm > 0){
    $fetch=mysqli_fetch_assoc($chekdatabase);
    $title=$fetch['title'];
    $jude = $title;
    $icon=$fetch['icon'];
    $description=$fetch['description'];
    $seo_title=$fetch['seo_title'];
    $seo_description=$fetch['seo_description'];
    $seo_keywords=$fetch['seo_keywords'];
    $g_status=$fetch['status'];

    if(isset($_POST['submit'])){
        $title=get_safe_value($con,$_POST['title']);
        $icon=get_safe_value($con,$_POST['pickeric']);
        $description=get_safe_value($con,$_POST['description']);
        $seo_title=get_safe_value($con,$_POST['seo_title']);
        $seo_description=get_safe_value($con,$_POST['seo_description']);
        $seo_keywords=get_safe_value($con,$_POST['seo_keywords']);
        
        mysqli_query($con,"update blog_categories set title='$title',icon='$icon',description='$description',seo_title='$seo_title',seo_description='$seo_description',seo_keywords='$seo_keywords',status='$g_status' where id='$checkeditid'");
        mysqli_query($con,"update post set category='$title' where category='$jude'");
        redirect(SITE_PATH_ADMIN.'category/blog_categories');
    }
}else{
    redirect(SITE_PATH_ADMIN.'category/blog_categories');
}
?>