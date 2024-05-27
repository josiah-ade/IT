<?php
require('header.php');
$get_posts = get_posts();
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
				<?php require('center.php')?>
			</div>
		</div>
	</section>
	<!-- End Blog Section -->
	
	<?php require('../footer.php')?>
	
</body>

</html>