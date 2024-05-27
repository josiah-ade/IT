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
$allsaveid = get_safe_value($con,$_POST['allsaveid']);

mysqli_query($con,"update pub_post set title='$title',category='$category',image='$image',image_title='$image_title',contents='$contents',tags='$tags' where id = '$allsaveid'");
$arr = array("status"=>3);
echo json_encode($arr);
?>