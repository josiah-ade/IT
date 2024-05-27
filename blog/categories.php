<?php
require('header.php');
if(isset($_GET['filter']) && $_GET['filter'] > 0){
    $filter = $_GET['filter'];
    // prx($filter);
    $get_posts_cat = get_posts_cat($filter);
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
	
	<!-- Start Blog Section -->
	<section class="blog-section pt-100 pb-100">
		<div class="container">
			<div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="row">
                        <div class="col-12">
                            <div class="blog_compo_box">
                                <h3><?php echo ucfirst($filter) ?></h3>
                            </div>
                        </div>
                        <?php while($row = mysqli_fetch_assoc($get_posts_cat)) {?>
                        <div class="col-lg-4 col-md-6">
                            <a href="blog/<?php echo adjust($row['title'])?>" class="blog-link-single">
                                <div class="blog-single-item">
                                    <div class="blog-image">
                                        <img src="<?php echo $row['image']?>" alt="image">
                                    </div>
                                    <div class="blog-description">
                                        <div class="blog-info">
                                            <h6><?php echo $row['category']?></h6>
                                            <p><?php echo $row['date']?></p>
                                        </div>
                                        <div class="blog-text">
                                            <h3><?php echo $row['title']?></h3>
                                        </div>
                                        <div class="blog-author">
                                            <h6><span>by</span> <?php echo $row['author']?></h6>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
		</div>
	</section>
	<!-- End Blog Section -->
	
	<?php require('../footer.php')?>
	
</body>

</html>