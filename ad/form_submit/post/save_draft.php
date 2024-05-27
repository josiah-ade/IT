<?php 
require_once('../../config/init.php');

$title = get_safe_value($con,$_POST['title']);
$contents = get_safe_value($con,$_POST['content']);
$category = get_safe_value($con,$_POST['category']);
$tags = get_safe_value($con,$_POST['tags']);
$tags = ucwords($tags);
$date = get_safe_value($con,$_POST['published_on']);
$time = get_safe_value($con,$_POST['published_time']);
$schedule_post = get_safe_value($con,$_POST['schedule_post']);
$allsave = get_safe_value($con,$_POST['allsave']);
$allsaveid = get_safe_value($con,$_POST['allsaveid']);
$schedule_date = get_safe_value($con,$_POST['schedule_date']);
$schedule_time = get_safe_value($con,$_POST['schedule_time']);
$user_details = get_user_details();
$author = $user_details['full_name'];

if($allsave == 1){
    mysqli_query($con, "update post_draft set title='$title',date='$date',time='$time',category='$category',contents='$contents',tags='$tags',schedule_post='$schedule_post',schedule_date='$schedule_date',schedule_time='$schedule_time' where id='$allsaveid'");
    $arr = array("status"=>2);
    echo json_encode($arr);
}else{
    $val = str_repeat("abcdefghijklmnopqrstuvwxyz1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZ",10);
    $shuff = str_shuffle($val);
    $id_id = substr($shuff,0,100);
    mysqli_query($con, "insert into post_draft(id_id,title,category,author,date,time,contents,tags,schedule_post,schedule_date,schedule_time) values('$id_id','$title','$category','$author','$date','$time','$contents','$tags','$schedule_post','$schedule_date','$schedule_time')");
    $currentId = mysqli_insert_id($con);
    $arr = array("status"=>1, "id"=>$currentId);
    echo json_encode($arr);
}

?>