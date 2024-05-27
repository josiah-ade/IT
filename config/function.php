<?php
function get_safe_value($con,$str){
    if($str!=''){
        $str=trim($str);
        return mysqli_real_escape_string($con,$str);
    }
}
function prx($arr){
    echo '<pre>';
    print_r($arr);
    die();
}
function get_socials(){
    global $con;
    $res = mysqli_query($con,'select * from socials');
    $row = mysqli_fetch_assoc($res);
    return $row;
}

function get_meta() {
    global $con;
    $res = mysqli_query($con, 'select * from meta_data');
    $row = mysqli_fetch_assoc($res);
    return $row;
}

function redirect($link){
    ?>
    <script>
        window.location.href='<?php echo $link?>';
    </script>
    <?php
}

function get_posts(){
    global $con;
    $res = mysqli_query($con, 'select * from pub_post where status = 1');
    return $res;
}
function get_popular_posts(){
    global $con;
    $res = mysqli_query($con, 'select * from pub_post where status = 1 order by views desc');
    return $res;
}

function get_categories(){
    global $con;
    $res = mysqli_query($con, 'select * from blog_categories where status = 1');
    return $res;
}

function adjust($val){
    $val = strtolower($val);
    $val = str_ireplace(' ', '-', $val);
    echo $val;
}

function get_posts_cat($cat){
    global $con;
    $res = mysqli_query($con, "select * from pub_post where category = '$cat' and status = 1");
    return $res;
}

function get_posts_tag($tag){
    global $con;
    $res = mysqli_query($con, "select * from pub_post where tags like '%$tag%' and status = 1");
    return $res;
}

function get_similar_posts($title){
    global $con;
    $title = str_ireplace('-', ' ', $title);
    $res = mysqli_query($con, "select * from pub_post where not title = '$title' and status = 1");
    return $res;
}

function get_posts_details($title){
    global $con;
    $title = str_ireplace('-', ' ', $title);
    // prx($title);
    $res = mysqli_query($con, "select * from pub_post where title = '$title' and status = 1");
    $count = mysqli_num_rows($res);
    $row = mysqli_fetch_assoc($res);
    if($count > 0){
        return $row;
    }else{
        return false;
    }
    
}

function get_url(){
    
    if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on'){
        $link = "https";
    }else{
        $link = "http";
    }
    
    $link .= "://";
    $link .= $_SERVER['HTTP_HOST'];
    $link .= $_SERVER['REQUEST_URI'];
    echo $link;
}
function get_posts_cats(){
    global $con;
    $res = mysqli_query($con, "select * from blog_categories");
    return $res;
}

function get_posts_tags(){
    global $con;
    $res = mysqli_query($con, "select * from pub_post");
    return $res;
}
?>