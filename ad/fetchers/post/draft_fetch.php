<?php

require_once('../../config/init.php');

$requestData= $_REQUEST;

$sql="select * from post_draft order by id desc";
$res=mysqli_query($con,$sql);
$totalData = mysqli_num_rows($res);
$totalFiltered = $totalData;

$sql="select * from post_draft where 1=1";
if( !empty($requestData['search']['value']) ) {  
	$sql.=" and ( title LIKE '".$requestData['search']['value']."%' ";    
	$sql.=" or date LIKE '".$requestData['search']['value']."%' ";
    $sql.=" or category LIKE '".$requestData['search']['value']."%' ) ";
}
$res=mysqli_query($con, $sql);
$totalFiltered = mysqli_num_rows($res);
$sql.=" order by id desc  limit ".$requestData['start']." ,".$requestData['length']."   ";
$res=mysqli_query($con, $sql);
$data = array();

while ($row = mysqli_fetch_assoc($res)) {
    
    $title = $row['title'];
    $titleee = strtolower($row['title']);
    $id = $row['id'];
    $date = convert_time_str($row['date']);
    $time = $row['time'];
    $category = $row['category'];
    $author = $row['author'];

    $action = '
        <a href="posts/edit_draft?id='.$id.'" target="_blank" class="btn btn-primary btn-xs mright"><i class="fas fa-edit"></i> Edit</a> <button  onclick="addeletedraft('.$id.')" class="btn btn-danger btn-xs"><i class="fas fa-trash"></i> Delete</button>
    ';
   
	$data[] = array($title,$author,$date,$time,$category,$action);
}

$json_data = array(
    "draw"            => intval( $requestData['draw'] ), 
    "recordsTotal"    => intval( $totalData ),  
    "recordsFiltered" => intval( $totalFiltered ), 
    "data"            => $data   
    );

echo json_encode($json_data);  
// prx($json_data);
?>