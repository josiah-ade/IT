<?php
require_once('../../config/init.php');


$ad_tog=get_safe_value($con,$_POST['ad_tog']);
$id=get_safe_value($con,$_POST['id']);
if($ad_tog==1){
    $cstas=0;
}else{
    $cstas=1;
}
mysqli_query($con,"update pub_post set status='$cstas' where id='$id'");
?>