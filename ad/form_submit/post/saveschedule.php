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
$schedule_post = get_safe_value($con,$_POST['schedule_post']);
$allsave = get_safe_value($con,$_POST['allsave']);
$allsaveid = get_safe_value($con,$_POST['allsaveid']);
$schedule_date = get_safe_value($con,$_POST['schedule_date']);
$schedule_date2 = get_safe_value($con,$_POST['schedule_date2']);
$schedule_time = get_safe_value($con,$_POST['schedule_time']);

mysqli_query($con,"update pub_schedule set title='$title',category='$category',image='$image',image_title='$image_title',contents='$contents',tags='$tags',schedule_date='$schedule_date',schedule_time='$schedule_time',s_time='$schedule_time' where id = '$allsaveid'");
$arr = array("status"=>1);
echo json_encode($arr);
?>