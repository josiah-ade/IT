<?php
require('config/init.php');

$shower = false;
if(isset($_GET['crack']) && isset($_GET['pack'])!=''){
    $crack = get_safe_value($con,$_GET['crack']);
    $pack = get_safe_value($con,$_GET['pack']);

    if($crack !== '' && $pack !== ''){
        $checkres = mysqli_query($con,"select id from x_users_x where vi_x='$crack' and ses_id='$pack'");
        // prx($checkres);
        $check = mysqli_num_rows($checkres);
        
        if($check > 0){
            $res = mysqli_query($con, "select * from x_images_x order by id desc");
            $shower = true;
        }
    }
}
?>