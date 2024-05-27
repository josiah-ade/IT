<?php
require('../../config/init.php');

$cid=get_safe_value($con,$_POST['cid']);
$res=mysqli_query($con,"delete from messages where id='$cid'");
?>