<?php
function checK_user_ck(){
    if(isset($_COOKIE["LTRU"])){
        $check = true;
    }else{
        $check = false;
    }

    return $check;
}
function get_safe_value($con,$str){
    if($str!=''){
        $str=trim($str);
        return mysqli_real_escape_string($con,$str);
    }
}
function redirect($link){
    ?>
    <script>
        window.location.href='<?php echo $link?>';
    </script>
    <?php
}
function prx($arr){
    echo '<pre>';
    print_r($arr);
    die();
}
function view_ink($num){
    if($num != NULL){
        if( $num > 1000 ) {

            $x = round($num);
            $x_number_format = number_format($x);
            $x_array = explode(',', $x_number_format);
            $x_parts = array('k', 'm', 'b', 't');
            $x_count_parts = count($x_array) - 1;
            $x_display = $x;
            $x_display = $x_array[0] . ((int) $x_array[1][0] !== 0 ? '.' . $x_array[1][0] : '');
            $x_display .= $x_parts[$x_count_parts - 1];
            
            return $x_display;
        }
    
        return $num;
    }else{
        return 0 ;
    }
    
}
function get_total_message(){
    global $con;
    $res=mysqli_query($con,"select count(id) as total from messages");
    $row=mysqli_fetch_assoc($res);
    echo view_ink($row['total']);
}
function get_blog_category_x(){
    global $con;
    $res=mysqli_query($con,"select * from blog_categories");
    return $res;
}
function get_total_blog_categoriees(){
    global $con;
    $res=mysqli_query($con,"select count(id) as total from blog_categories");
    $row=mysqli_fetch_assoc($res);
    echo view_ink($row['total']);
}
function get_total_posts(){
    global $con;
    $res=mysqli_query($con,"select count(id) as total from pub_post");
    $row=mysqli_fetch_assoc($res);
    echo view_ink($row['total']);
}
function get_my_total_posts(){
    global $con;
    $user_details = get_user_details();
    $full_name = $user_details['full_name'];
    $res=mysqli_query($con,"select count(id) as total from pub_post where author='$full_name'");
    $row=mysqli_fetch_assoc($res);
    echo view_ink($row['total']);
}

function get_active_posts(){
    global $con;
    $res=mysqli_query($con,"select count(id) as total from pub_post where status=1");
    $row=mysqli_fetch_assoc($res);
    echo view_ink($row['total']);
}
function get_inactive_posts(){
    global $con;
    $res=mysqli_query($con,"select count(id) as total from pub_post where status=0");
    $row=mysqli_fetch_assoc($res);
    echo view_ink($row['total']);
}
function get_my_total_inactiveposts(){
    global $con;
    $user_details = get_user_details();
    $full_name = $user_details['full_name'];
    $res=mysqli_query($con,"select count(id) as total from pub_post where author='$full_name' and status = 0");
    $row=mysqli_fetch_assoc($res);
    echo view_ink($row['total']);
}
function get_category_x(){
    global $con;
    $res=mysqli_query($con,"select * from blog_categories where status = 1");
    return $res;
}
function convert_time_str($time){
    $newtime = strtotime($time);
    return date('D M j Y',$newtime);
}
function dateAdjuster(){
    // echo "<pre>";
    $date = date('Y-m-d');
    $expload = explode("-",$date);
    $year = $expload[0];
    $month = $expload[1];
    $day = $expload[2];
    if(strlen($month) == 1){
        $month = "0".$month;
    }
    if(strlen($day) == 1){
        $day = "0".$day;
    }
    $newDate = $year."-".$month."-".$day;
    echo $newDate;
    // die();
}
function get_user_id(){
    if(isset($_COOKIE["LTRU"])){
        $uid=$_COOKIE["LTRU"];
        return $uid;
    }
}
function get_user_details(){
    global $con;
    $uid = get_user_id();
    $ruser=mysqli_query($con,"select * from x_users_x where vi_x='$uid'");
    $row=mysqli_fetch_assoc($ruser);
    return $row;
}
function get_pub_post($uid){
    global $con;
    $res=mysqli_query($con,"select * from pub_post where id='$uid'");
    $check = mysqli_num_rows($res);
    if($check > 0){
        $row = mysqli_fetch_assoc($res);
        return $row;
    }else{
        return false;
    }
    
}
function get_total_schedules(){
    global $con;
    $res=mysqli_query($con,"select count(id) as total from pub_schedule");
    $row=mysqli_fetch_assoc($res);
    echo view_ink($row['total']);
}
function get_my_total_schedule_posts(){
    global $con;
    $user_details = get_user_details();
    $full_name = $user_details['full_name'];
    $res=mysqli_query($con,"select count(id) as total from pub_schedule where author='$full_name'");
    $row=mysqli_fetch_assoc($res);
    echo view_ink($row['total']);
}
function get_total_drafts(){
    global $con;
    $res=mysqli_query($con,"select count(id) as total from post_draft");
    $row=mysqli_fetch_assoc($res);
    echo view_ink($row['total']);
}
function get_my_total_draft_posts(){
    global $con;
    $user_details = get_user_details();
    $full_name = $user_details['full_name'];
    $res=mysqli_query($con,"select count(id) as total from post_draft where author='$full_name'");
    $row=mysqli_fetch_assoc($res);
    echo view_ink($row['total']);
}
function get_pub_schedule($uid){
    global $con;
    $res=mysqli_query($con,"select * from pub_schedule where id='$uid'");
    $check = mysqli_num_rows($res);
    if($check > 0){
        $row = mysqli_fetch_assoc($res);
        return $row;
    }else{
        return false;
    }
    
}
function get_pub_drafts($uid){
    global $con;
    $res=mysqli_query($con,"select * from post_draft where id='$uid'");
    $check = mysqli_num_rows($res);
    if($check > 0){
        $row = mysqli_fetch_assoc($res);
        return $row;
    }else{
        return false;
    }
    
}


function get_total_post_this_year(){
    global $con;
    $res = mysqli_query($con,'select count(id) AS total FROM pub_post WHERE YEAR(date2) = YEAR(now())');
    $row = mysqli_fetch_assoc($res);
    return view_ink($row['total']);
}
function get_my_total_post_this_year(){
    global $con;
    $user_details = get_user_details();
    $full_name = $user_details['full_name'];
    $res=mysqli_query($con,"select count(id) as total from pub_post where YEAR(date2) = YEAR(now()) and author='$full_name'");
    $row=mysqli_fetch_assoc($res);
    echo view_ink($row['total']);
}
function get_total_post_this_month(){
    global $con;
    $res = mysqli_query($con,'select COUNT(id) AS total FROM pub_post WHERE MONTH(date2) = MONTH(now()) AND YEAR(date2) = YEAR(now())');
    $row = mysqli_fetch_assoc($res);
    return view_ink($row['total']);
}
function get_my_total_post_this_month(){
    global $con;
    $user_details = get_user_details();
    $full_name = $user_details['full_name'];
    $res=mysqli_query($con,"select count(id) as total from pub_post where MONTH(date2) = MONTH(now()) AND YEAR(date2) = YEAR(now()) AND author='$full_name'");
    $row=mysqli_fetch_assoc($res);
    echo view_ink($row['total']);
}
function get_total_post_this_week(){
    global $con;
    $res = mysqli_query($con,'select COUNT(id) AS total FROM pub_post WHERE WEEK(date2) = WEEK(now())');
    $row = mysqli_fetch_assoc($res);
    return view_ink($row['total']);
}
function get_my_total_post_this_week(){
    global $con;
    $user_details = get_user_details();
    $full_name = $user_details['full_name'];
    $res=mysqli_query($con,"select count(id) as total from pub_post WHERE WEEK(date2) = WEEK(now()) AND author='$full_name'");
    $row=mysqli_fetch_assoc($res);
    echo view_ink($row['total']);
}
function get_total_post_today(){
    global $con;
    $res = mysqli_query($con,'select COUNT(id) AS total FROM pub_post WHERE DATE(date2) = CURRENT_DATE');
    $row = mysqli_fetch_assoc($res);
    return view_ink($row['total']);
}
function get_my_total_post_today(){
    global $con;
    $user_details = get_user_details();
    $full_name = $user_details['full_name'];
    $res=mysqli_query($con,"select count(id) as total from pub_post WHERE DATE(date2) = CURRENT_DATE AND author='$full_name'");
    $row=mysqli_fetch_assoc($res);
    echo view_ink($row['total']);
}
function get_latest_10_posts(){
    global $con;
    $res = mysqli_query($con,"select * from pub_post order by id desc limit 10");
    return $res;
}
function get_my_latest_10_posts(){
    global $con;
    $user_details = get_user_details();
    $full_name = $user_details['full_name'];
    $res=mysqli_query($con,"select * from pub_post where author='$full_name' order by id desc limit 10");
    return $res;
}
function get_alltime_pageviews(){
    global $con;
    $res=mysqli_query($con,"select sum(views) as total from site_views");
    $row=mysqli_fetch_assoc($res);
    echo view_ink($row['total']);
}
function get_pageviews_this_year(){
    global $con;
    $res = mysqli_query($con,"select count(id) as total from site_views where YEAR(date) = YEAR(now())");
    $row = mysqli_fetch_assoc($res);
    if($row['total'] !== null){
        return view_ink($row['total']);
    }else{
        return 0;
    }
}
function get_pageviews_monty(){
    global $con;
    $res = mysqli_query($con,"select count(id) as total from site_views where MONTH(date) = MONTH(now()) AND YEAR(date) = YEAR(now())");
    $row = mysqli_fetch_assoc($res);
    if($row['total'] !== null){
        return view_ink($row['total']);
    }else{
        return 0;
    }
}
function get_pageviews_week(){
    global $con;
    $res = mysqli_query($con,"select count(id) as total from site_views where WEEK(date) = WEEK(now())");
    $row = mysqli_fetch_assoc($res);
    if($row['total'] !== null){
        return view_ink($row['total']);
    }else{
        return 0;
    }
}
function get_pageviews_today(){
    global $con;
    $res = mysqli_query($con,"select count(id) as total from site_views WHERE DATE(date) = CURRENT_DATE");
    $row = mysqli_fetch_assoc($res);
    if($row['total'] !== null){
        return view_ink($row['total']);
    }else{
        return 0;
    }
}
function get_pageviews_yesterday(){
    global $con;
    $res = mysqli_query($con,"select count(id) as total from site_views WHERE DATE(date) =  SUBDATE(CURRENT_DATE, INTERVAL 1 DAY)");
    $row = mysqli_fetch_assoc($res);
    if($row['total'] !== null){
        return view_ink($row['total']);
    }else{
        return 0;
    }
}
function get_pageviews_3daysago(){
    global $con;
    $res = mysqli_query($con,"select count(id) as total from site_views WHERE DATE(date) =  SUBDATE(CURRENT_DATE, INTERVAL 2 DAY)");
    $row = mysqli_fetch_assoc($res);
    if($row['total'] !== null){
        return view_ink($row['total']);
    }else{
        return 0;
    }
}
function get_pageviews_4daysago(){
    global $con;
    $res = mysqli_query($con,"select count(id) as total from site_views WHERE DATE(date) =  SUBDATE(CURRENT_DATE, INTERVAL 3 DAY)");
    $row = mysqli_fetch_assoc($res);
    if($row['total'] !== null){
        return view_ink($row['total']);
    }else{
        return 0;
    }
}
function get_total_post_views(){
    global $con;
    $res=mysqli_query($con,"select sum(views) as total from post_views");
    $row=mysqli_fetch_assoc($res);
    echo view_ink($row['total']);
}
function get_post_current_views_this_year(){
    global $con;
    $res=mysqli_query($con,"select sum(views) as total from post_views WHERE YEAR(date) = YEAR(now())");
    $row=mysqli_fetch_assoc($res);
    echo view_ink($row['total']);
}
function get_post_current_views_this_month(){
    global $con;
    $res=mysqli_query($con,"select sum(views) as total from post_views WHERE MONTH(date) = MONTH(now()) AND YEAR(date) = YEAR(now())");
    $row=mysqli_fetch_assoc($res);
    echo view_ink($row['total']);
}
function get_post_current_views_this_week(){
    global $con;
    $res=mysqli_query($con,"select sum(views) as total from post_views WHERE WEEK(date) = WEEK(now())");
    $row=mysqli_fetch_assoc($res);
    echo view_ink($row['total']);
}
function get_post_current_views_this_today(){
    global $con;
    $res=mysqli_query($con,"select sum(views) as total from post_views WHERE DATE(date) = CURRENT_DATE");
    $row=mysqli_fetch_assoc($res);
    echo view_ink($row['total']);
}

function get_top_view_today(){
    global $con;
    $res = mysqli_query($con,"select pub_post.*,post_views.posts_id,sum(post_views.views) as total from pub_post,post_views where not status=5 and pub_post.id_id=post_views.posts_id and DATE(post_views.date) = CURRENT_DATE group by pub_post.id order by sum(post_views.views) desc limit 10");
    return $res;
}
function get_top_view_yesterday(){
    global $con;
    $res = mysqli_query($con,"select pub_post.*,post_views.posts_id,sum(post_views.views) as total from pub_post,post_views where not status=5 and pub_post.id_id=post_views.posts_id and DATE(post_views.date) = SUBDATE(CURRENT_DATE, INTERVAL 1 DAY) group by pub_post.id order by sum(post_views.views) desc limit 10");
    return $res;
}
function get_top_view_3daysago(){
    global $con;
    $res = mysqli_query($con,"select pub_post.*,post_views.posts_id,sum(post_views.views) as total from pub_post,post_views where not status=5 and pub_post.id_id=post_views.posts_id and DATE(post_views.date) = SUBDATE(CURRENT_DATE, INTERVAL 2 DAY) group by pub_post.id order by sum(post_views.views) desc limit 10");
    return $res;
}
function get_top_view_week(){
    global $con;
    $res = mysqli_query($con,"select pub_post.*,post_views.posts_id,sum(post_views.views) as total from pub_post,post_views where not status=5 and pub_post.id_id=post_views.posts_id and WEEK(post_views.date) = WEEK(NOW()) group by pub_post.id order by sum(post_views.views) desc limit 10");
    return $res;
}
function get_top_view_month(){
    global $con;
    $res = mysqli_query($con,"select pub_post.*,post_views.posts_id,sum(post_views.views) as total from pub_post,post_views where not status=5 and pub_post.id_id=post_views.posts_id and (MONTH(post_views.date) = MONTH(NOW()) AND YEAR(post_views.date) = YEAR(now())) group by pub_post.id order by sum(post_views.views) desc limit 10");
    return $res;
}
function get_top_view_year(){
    global $con;
    $res = mysqli_query($con,"select pub_post.*,post_views.posts_id,sum(post_views.views) as total from pub_post,post_views where not status=5 and pub_post.id_id=post_views.posts_id and YEAR(post_views.date) = YEAR(now()) group by pub_post.id order by sum(post_views.views) desc limit 10");
    return $res;
}
function get_top_view_alltime(){
    global $con;
    $res = mysqli_query($con,"select * from pub_post where not status=5 order by views desc limit 10");
    return $res;
}
function get_post_images($image){
    $thumb = '<img src="'.$image.'" alt="err" class="img-thumbnail" style="width:70px;">';
    echo $thumb;
}
function time_minus_js($date,$time1){
    ?>
    <script>

        var d = new Date();
        var v_sersion = d.toLocaleTimeString(navigator.language, {
            hour: '2-digit',
            minute:'2-digit',
            second:'2-digit'
        });
        var date='<?php echo $date?>';
        var time1='<?php echo $time1?>';

        var year = date.slice(0,4);
        var mon = date.slice(5,7);
        var month = Number(mon) - 1;
        var day = date.slice(8,10);
        var hou = time1.slice(0,2);
        var minute = time1.slice(3,5);
        var sec = time1.slice(6,8);
        var loclity = time1.slice(9,11);
        if(loclity == "AM"){
            var hour = Number(hou);
        }else{
            var hour = Number(hou) + 12;
        }
        
        var tod = new Date();
        var old = new Date(year,month,day,hour,minute,sec);
        var dif1 = tod.getTime();
        var dif2 = old.getTime();
        var diffrence = (dif1 - dif2) /1000;
        var secc = Math.abs(Math.round(diffrence));
        var diffrence2 = diffrence / 60;
        var di = Math.abs(Math.round(diffrence2));
        var div = Math.round(di / 60);
        var min = di;
        if(secc < 60 ){
            divide = secc + ' seconds ago';
        }else if(min == 1 ){
            divide  = min + ' minute ago';
        }else if(min > 1 && min < 60){
            divide = min + ' minutes ago';
        }else if(div == 1){
            divide = div + ' hour ago';
        }else{
            divide = div + ' hours ago';
        }
        
    </script>
    <?php
    echo $getit =  "<script>document.writeln(divide);</script>";
}
function get_post_t_details($old_date,$old_time){
    $current_date = date('Y-m-d');

    $new_date = date_create($current_date);
    $old_datee = date_create($old_date);

    $confirm = date_diff($new_date, $old_datee);
    $differenceFormat = '%a';
    $jude =  $confirm->format($differenceFormat);
    if($jude <= 29){
        if($jude >=2){
            if($jude <= 6){
                echo $jude." "."days ago";
            }else if($jude >= 7 && $jude <= 13){
                echo "1 week ago";
            }else if($jude >= 14 && $jude <= 20){
                echo "2 weeks ago";
            }else if($jude >= 21 && $jude <= 29){
                echo "3 weeks ago";
            }
        }else if($jude == 1){
            echo "Yesterday";
        }else{
            time_minus_js($old_date,$old_time);
        }
    }else if($jude >= 30 && $jude <= 59){
        echo "1 month ago";
    }else if($jude >= 60 && $jude <= 89){
        echo "2 months ago";
    }else if($jude >= 90 && $jude <= 119){
        echo "3 months ago";
    }else if($jude >= 120 && $jude <= 149){
        echo "4 months ago";
    }else if($jude >= 150 && $jude <= 179){
        echo "5 months ago";
    }else if($jude >= 180 && $jude <= 209){
        echo "6 months ago";
    }else if($jude >= 210 && $jude <= 239){
        echo "7 months ago";
    }else if($jude >= 240 && $jude <= 269){
        echo "8 months ago";
    }else if($jude >= 270 && $jude <= 299){
        echo "9 months ago";
    }else if($jude >= 300 && $jude <= 329){
        echo "10 months ago";
    }else if($jude >= 330 && $jude <= 359){
        echo "11 months ago";
    }else if($jude >= 360){
        echo "1 year ago";
    }
}



?>