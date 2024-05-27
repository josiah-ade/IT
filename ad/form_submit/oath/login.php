<?php
require_once('../../config/init.php');


$email=get_safe_value($con, $_POST["lemail"]);
$password=get_safe_value($con, $_POST["lppassword"]);
$time=get_safe_value($con, $_POST["time_upload_loggg"]);
$date = date("D, F j,Y");

$res=mysqli_query($con,"select id,email,pas,role from x_users_x where email='$email'");
$check=mysqli_num_rows($res);
if($check > 0){
    $row = mysqli_fetch_assoc($res);
    $getpas = $row['pas'];
    $fid=$row['id'];
    $role=$row['role'];
    $password_v = password_verify($password, $getpas);
    if($password_v){
        if($role == 1){
            $arr = array("status"=>"invalid","data"=>"You Don't Have Admin Privilege");
            echo json_encode($arr);
        }else{
            $val = str_repeat("abcdefghijklmnopqrstuvwxyz1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZ",5);
            $shuff = str_shuffle($val);
            $shuff2 = str_shuffle($shuff);
            $substr1 = substr($shuff,0,100);
            $substr2 = substr($shuff2,0,50);

            mysqli_query($con,"update x_users_x set vi_x='$substr1',last_login_date='$date',last_login_time='$time',ses_id='$substr2' where id='$fid'");
            setcookie("ROLEPREX", $role, time() + (3600 * 24), "/");
            setcookie("LTRU", $substr1, time() + (3600 * 24), "/");
            setcookie("LTRUSES", $substr2, time() + (3600 * 24), "/");
            $arr = array("status"=>"success","data"=>"Account Login Successfully");
            
            echo json_encode($arr);
        }
    }else{
        $arr = array("status"=>"invalid","data"=>"Details Not Correct, Please Input Correct Details");
        echo json_encode($arr);
    }
}else{
    $arr = array("status"=>"invalid","data"=>"Details Not Correct, Please Enter Correct Details");
    echo json_encode($arr);
}
?>
