<?php
require('../../config/init.php');

// global $con;

$cid=get_safe_value($con,$_POST['cid']);
$res = mysqli_query($con,"select * from messages where id='$cid'");
$row = mysqli_fetch_assoc($res);
$message = $row['message'];
$email = $row['email'];
$subject = $row['subject'];
$arr = array("message"=>$message,"email"=>$email,"subject"=>$subject);
echo json_encode($arr);
?>