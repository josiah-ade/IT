<?php
require_once('../../config/init.php');


$type=get_safe_value($con,$_POST['typee']);

$cat_id=get_safe_value($con,$_POST['id']);
mysqli_query($con,"delete from blog_categories where id='$cat_id'");
?>