<?php
require_once('../../config/init.php');

$requestData= $_REQUEST;

$sql="select * from pub_post where status = 1";
$res=mysqli_query($con,$sql);
$totalData = mysqli_num_rows($res);
$totalFiltered = $totalData;

$sql="select * from pub_post where 1=1 and status = 1";
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
    $id = $row['id'];
    $date = $row['date'];
    $category = $row['category'];
    $author = $row['author'];
    $stats = $row['status'];
    $image = $row['image'];
    $views = $row['views'];
    $views = view_ink($views);
    $thumb = '<img src="'.$image.'" alt="err" class="img-thumbnail" style="width:70px;">';
    if($stats==1){
        $status = '
        <a onclick="adtoggle('.$id.')" data-toggle="tooltip" title="Active!">
        <i class="fas fa-toggle-on tgo adtgo'.$id.'"></i>
        <input id="ad_tog'.$id.'" type="hidden" value="'.$stats.'">
        </a>';
    }else{
        $status = '
        <a onclick="adtoggle('.$id.')" data-toggle="tooltip" title="Not Active!">
        <i class="fas fa-toggle-off tgo adtgo'.$id.'"></i>
        <input id="ad_tog'.$id.'" type="hidden" value="'.$stats.'">
        </a>';
    }
    $newtitle = '<a href="'.SITE_PATH_L.'blog/'.$title.'" target="blank">'.$title.'</a>';
    $action = '
        <a href="posts/edit_post?id='.$id.'" target="_blank" class="btn btn-primary btn-xs mright"><i class="fas fa-edit"></i> Edit</a> <button  onclick="addelete('.$id.')" class="btn btn-danger btn-xs"><i class="fas fa-trash"></i> Delete</button>
    ';
	$data[] = array($thumb,$newtitle,$date,$category,$author,$views,$status,$action);
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