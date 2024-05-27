<?php 
require_once('../../config/init.php');

// prx($_POST);

$title = get_safe_value($con,$_POST['title']);
$image = get_safe_value($con,$_POST['first_image']);
$image_title = get_safe_value($con,$_POST['first_image_title']);
$contents = get_safe_value($con,$_POST['content']);
$category = get_safe_value($con,$_POST['category']);
$tags = get_safe_value($con,$_POST['tags']);
$tags = ucwords($tags);
$date2xxx = get_safe_value($con,$_POST['published_on']);
$time = get_safe_value($con,$_POST['published_time']);
$schedule_post = get_safe_value($con,$_POST['schedule_post']);
$allsave = get_safe_value($con,$_POST['allsave']);
$allsaveid = get_safe_value($con,$_POST['allsaveid']);
$schedule_date = get_safe_value($con,$_POST['schedule_date']);
$schedule_date2 = get_safe_value($con,$_POST['schedule_date2']);
$schedule_time = get_safe_value($con,$_POST['schedule_time']);
$user_details = get_user_details();
$author = get_safe_value($con,$_POST['u_artname']);
$date = date("D M j Y");
$date2 = date("Y-m-d");


$val = str_repeat("abcdefghijklmnopqrstuvwxyz1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZ",10);
$shuff = str_shuffle($val);
$id_id = substr($shuff,0,40);

if(mysqli_query($con,"insert into pub_post(id_id,title,category,author,date,date2,time,image,image_title,contents,tags,status) values('$id_id','$title','$category','$author','$date','$date2','$time','$image','$image_title','$contents','$tags',1)")){
    mysqli_query($con,"delete from pub_schedule where id='$allsaveid'");

    $arr = array("status"=> 1);
    echo json_encode($arr);
}

?>