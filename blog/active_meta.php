<?php
// prx($_SERVER["REQUEST_URI"]);
$link_active = explode('/',$_SERVER["REQUEST_URI"]);
$acive_link = $link_active[3];
$default_active = '';
if($acive_link == ''){
    $default_active = 'active';
}else{
    $acive_link = explode('=',$acive_link);
    if(count($acive_link) > 1){
        $acive_link = $acive_link[1];
    }else{
        $acive_link = '';
    }
    
}
?>