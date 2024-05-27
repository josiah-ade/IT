<?php
header("Content-Type: application/xml; charset=utf-8");
echo '<?xml version="1.0" encoding="UTF-8"?>'; 
require('config/init.php');
$base_url = SITE_PATH;
$get_posts_tag = get_posts_tags();
echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . PHP_EOL;
while($row = mysqli_fetch_assoc($get_posts)){
    $title = strtolower($row["title"]);
    $title = str_ireplace(" ","-",$title);
    $date = $row["date2"];
    $time = $row["time"];
    $time = str_ireplace('AM','',$time);
    $time = str_ireplace('PM','',$time);
    $time = str_ireplace(' ','',$time);

    echo '<url>' . PHP_EOL;
    echo '<loc>'.$base_url.'blog/'.$title.'</loc>' . PHP_EOL;
    echo '<lastmod>'.$date.'T'.$time.'+00:00</lastmod>';
    echo '<changefreq>daily</changefreq>' . PHP_EOL;
    echo '<priority>0.6</priority>';
    echo '</url>' . PHP_EOL;
}

echo '</urlset>' . PHP_EOL;
?> 