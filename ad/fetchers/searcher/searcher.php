<?php
require_once('../../config/init.php');



$querry = get_safe_value($con, $_POST['val']);

$res ="select * from x_images_x where title like '%$querry%'";
$result=mysqli_query($con,$res);
if(mysqli_num_rows($result)>0){
    while ($row=mysqli_fetch_assoc($result)){
       $images = $row['url'];
       $title = ucwords($row['title']);

        echo '
        <div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2 rempad ">
            <i class="fas fa-check flaterk"></i>
            <img class="imgaego img-thumbnail" src="'.$images.'" />
            <h6>'.$title.'</h6>
        </div>
        ';
    }
}else{
    echo '<div class="col-12 colex"><h6>No result found for '.$querry.'</h6></div>';
}

?>