<?php
require_once('../../config/init.php');

$requestData= $_REQUEST;

$sql="select * from pub_schedule";
$res=mysqli_query($con,$sql);
$totalData = mysqli_num_rows($res);
$totalFiltered = $totalData;

$sql="select * from pub_schedule where 1=1";
if( !empty($requestData['search']['value']) ) {  
	$sql.=" and ( title LIKE '".$requestData['search']['value']."%' ";    
	$sql.=" or date LIKE '".$requestData['search']['value']."%' ";
    $sql.=" or date2 LIKE '".$requestData['search']['value']."%' ";
    $sql.=" or schedule_date LIKE '".$requestData['search']['value']."%' ";
    $sql.=" or category LIKE '".$requestData['search']['value']."%' ) ";
}
$res=mysqli_query($con, $sql);
$totalFiltered = mysqli_num_rows($res);
$sql.=" order by id desc  limit ".$requestData['start']." ,".$requestData['length']."   ";
$res=mysqli_query($con, $sql);
$data = array();
while ($row = mysqli_fetch_assoc($res)) {

    $title = $row['title'];
    $id = $row['id'];
    $category = $row['category'];
    $author = $row['author'];
    $image = $row['image'];
    $date = convert_time_str($row['date2']);
    $schedule_date = convert_time_str($row['schedule_date']);
    $schedule_time = $row['schedule_time'];
    $thumb = '<img src="'.$image.'" alt="err" class="img-thumbnail" style="width:70px;">';
 
    $action = '
        <a href="posts/schedule_edit_post?id='.$id.'" target="_blank" class="btn btn-primary btn-xs mright"><i class="fas fa-edit"></i> Edit</a> <button  onclick="deleteschedule('.$id.')" class="btn btn-danger btn-xs"><i class="fas fa-trash"></i> Delete</button>
    ';
	$data[] = array($thumb,$title,$date,$category,$author,$schedule_date,$schedule_time,$action);
    // $data[] = array($thumb,$newtitle,$date,$category,$author,$views,$status,$action);
}

$json_data = array(
    "draw"            => intval( $requestData['draw'] ), 
    "recordsTotal"    => intval( $totalData ),  
    "recordsFiltered" => intval( $totalFiltered ), 
    "data"            => $data   
    );

echo json_encode($json_data);  
?>