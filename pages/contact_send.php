<?php
require_once('../config/database.php');
require_once('../config/function.php');


if($_POST){
    $name = get_safe_value($con, $_POST['name']);
    $email = get_safe_value($con, $_POST['email']);
    $phone = get_safe_value($con, $_POST['phone']);
    $subject = get_safe_value($con, $_POST['subject']);
    $message = get_safe_value($con, $_POST['message']);
    $time = get_safe_value($con, $_POST['time_upload']);
    $date = date("D M j Y");

    if(mysqli_query($con,"insert into messages (name,email,phone,subject,message,date,time,status) values ('$name','$email','$phone','$subject','$message','$date','$time',1)")){
        $arr = array('status' => 1,'data' => 'Success');
        echo json_encode($arr);
    }else{
        $arr = array('status' => 0,'data' => 'Error Occured Please Try Again Later');
        echo json_encode($arr);
    }

}else{
    redirect(SITE_PATH);
}
?>
