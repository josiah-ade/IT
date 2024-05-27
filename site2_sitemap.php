<?php
header("Content-Type: application/xml; charset=utf-8");
echo '<?xml version="1.0" encoding="UTF-8"?>'; 
require('config/init.php');
$base_url = SITE_PATH;
$get_posts_cats = get_posts_cats();
echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . PHP_EOL;
while($row = mysqli_fetch_assoc($get_posts_cats)){
    $title = strtolower($row["title"]);
    

    echo '<url>' . PHP_EOL;
    echo '<loc>'.$base_url.'blog/categories?filter='.$title.'</loc>' . PHP_EOL;
    echo '<priority>0.6</priority>';
    echo '</url>' . PHP_EOL;
}

echo '</urlset>' . PHP_EOL;
?> 