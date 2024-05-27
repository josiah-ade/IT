<?php
require('../../config/init.php');

if($_REQUEST){
    $requestData= $_REQUEST;

    $sql="select * from messages";
    $res=mysqli_query($con,$sql);
    $totalData = mysqli_num_rows($res);
    $totalFiltered = $totalData;

    $sql="select * from messages where 1=1";
    if( !empty($requestData['search']['value']) ) {  
        $sql.=" and ( name LIKE '".$requestData['search']['value']."%' ";    
        $sql.=" or email LIKE '".$requestData['search']['value']."%' ) ";

    }
    $res=mysqli_query($con, $sql);
    $totalFiltered = mysqli_num_rows($res);
    $sql.=" order by id desc  limit ".$requestData['start']." ,".$requestData['length']."   ";
    $res=mysqli_query($con, $sql);
    $data = array();
    while ($row = mysqli_fetch_assoc($res)) {

        $name = $row['name'];
        $id = $row['id'];
        $email = $row['email'];
        $date = $row['date'];
        $time = $row['time'];
        $message = $row['message'];

        $action = '
            <button onclick="messageview('.$id.')" class="btn btn-primary btn-xs mright"><i class="fas fa-eye"></i> View</button>
            <button onclick="messagedelete('.$id.')" class="btn btn-danger btn-xs"><i class="fas fa-trash"></i> Delete</button>
        ';
        
        $data[] = array($id,$name,$email,$date,$time,$action);
    }

    $json_data = array(
        "draw"            => intval( $requestData['draw'] ), 
        "recordsTotal"    => intval( $totalData ),  
        "recordsFiltered" => intval( $totalFiltered ), 
        "data"            => $data   
        );

    echo json_encode($json_data);
}else{
    redirect(SITE_PATH_ADMIN);
}
  

?>