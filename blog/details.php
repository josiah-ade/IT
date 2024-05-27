<?php
require('header.php');
if(isset($_GET['title']) && $_GET['title'] != ''){
    $title = $_GET['title'];
    $get_posts_details = get_posts_details($title);
    if($get_posts_details == false){
        redirect(SITE_PATH.'blog');
    }
    $tags = $get_posts_details['tags'];
    $tags = explode(',',$tags);
    $get_similar_posts = get_similar_posts($title);
}else{
    redirect(SITE_PATH.'blog');
}

?>

<body>
	
	<?php require('nav.php') ?>
	<!-- Start Page Title Section -->
	<div class="page-title-area2" style="display: none;">
		
	</div>
	<!-- End Page Title Section -->
	
	<!-- Start Blog Details Section -->
	<section class="blog-details-area ptb-100">
		<div class="container">
			<div class="row">
                <?php require('blog_details.php') ?>
                <?php require('sidebar.php') ?>
            </div>
		</div>
	</section>
	<!-- End Blog Section -->
	
	<?php require('../footer.php')?>
	
</body>

</html>