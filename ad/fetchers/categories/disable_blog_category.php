<?php
require_once('../../config/init.php');


$type=get_safe_value($con,$_POST['typee']);
$cat_status=get_safe_value($con,$_POST['cat_status']);
if($cat_status==1){
    $cstas=0;
}else{
    $cstas=1;
}

$cat_id=get_safe_value($con,$_POST['id']);
mysqli_query($con,"update blog_categories set status='$cstas' where id='$cat_id'");
?>