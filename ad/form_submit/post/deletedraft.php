<?php
require_once('../../config/init.php');


$id=get_safe_value($con,$_POST['id']);
mysqli_query($con,"delete from post_draft where id='$id'");
?>