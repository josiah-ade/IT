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
$date2 = get_safe_value($con,$_POST['published_on']);
$time = get_safe_value($con,$_POST['published_time']);
$schedule_post = get_safe_value($con,$_POST['schedule_post']);
$allsave = get_safe_value($con,$_POST['allsave']);
$allsaveid = get_safe_value($con,$_POST['allsaveid']);
$schedule_date = get_safe_value($con,$_POST['schedule_date']);
$schedule_date2 = get_safe_value($con,$_POST['schedule_date2']);
$schedule_time = get_safe_value($con,$_POST['schedule_time']);
$user_details = get_user_details();
$author = $user_details['full_name'];
$date = date("D M j Y");


$val = str_repeat("abcdefghijklmnopqrstuvwxyz1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZ",10);
$shuff = str_shuffle($val);
$id_id = substr($shuff,0,40);

if($schedule_post == 1){

    mysqli_query($con,"insert into pub_schedule(id_id,title,category,author,date,date2,time,image,image_title,contents,tags,schedule_date,schedule_time,s_time) values('$id_id','$title','$category','$author','$date','$date2','$time','$image','$image_title','$contents','$tags','$schedule_date','$schedule_time','$schedule_time')");
    
    if($allsave == 1){
        mysqli_query($con,"delete from post_draft where id='$allsaveid'");
    }
    $arr = array("status"=>0);
    echo json_encode($arr);

}else{

    mysqli_query($con,"insert into pub_post(id_id,title,category,author,date,date2,time,image,image_title,contents,tags,status) values('$id_id','$title','$category','$author','$date','$date2','$time','$image','$image_title','$contents','$tags',1)");

    $arr = array("status"=>1);
    
    if($allsave == 1){
        mysqli_query($con,"delete from post_draft where id='$allsaveid'");
    }
    echo json_encode($arr);

}

?>