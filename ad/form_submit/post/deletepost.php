<?php
require_once('../../config/init.php');


$id=get_safe_value($con,$_POST['id']);
mysqli_query($con,"delete from pub_post where id='$id'");
?>