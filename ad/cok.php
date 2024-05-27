<?php
require('config/init.php');
$val = str_repeat("abcdefghijklmnopqrstuvwxyz1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZ",5);
$shuff = str_shuffle($val);
$shuff2 = str_shuffle($shuff);
$substr1 = substr($shuff,0,100);
$substr2 = substr($shuff2,0,50);
mysqli_query($con,"update x_users_x set vi_x='$substr1',ses_id='$substr2' where id=1");
setcookie("ROLEPREX", 1, time() + (3600 * 24), "/");
setcookie("LTRU", $substr1, time() + (3600 * 24), "/");
setcookie("LTRUSES", $substr2, time() + (3600 * 24), "/");
?>