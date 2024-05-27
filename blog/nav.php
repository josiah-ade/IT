<?php 
require('active_meta.php');
?>
<div class="navbar-section">
		<div class="techvio-responsive-nav">
			<div class="container">
				<div class="techvio-responsive-menu">
					<div class="logo">
						<a href="<?php echo SITE_PATH ?>">
							<img src="assets/img/stackpro-logo-black.png" class="white-logo" alt="logo">
							<img src="assets/img/stackpro-logo-black.png" class="black-logo" alt="logo">
						</a>
					</div>
				</div>
			</div>
		</div>
		<div class="techvio-nav">
			<div class="container">
				<nav class="navbar navbar-expand-md navbar-light">
					<a class="navbar-brand" href="blog">
						<img src="assets/img/stackpro-logo-black.png" class="white-logo" alt="logo">
						<img src="assets/img/stackpro-logo-black.png" class="black-logo" alt="logo">
					</a>
					<div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
						<ul class="navbar-nav">
                            <li class="nav-item"> 
                                <a href="blog" class="nav-link <?php echo $default_active ?>">Home</a>
                            </li>
                            <?php while($row = mysqli_fetch_assoc($get_categories)){
                                $link = '';
                                if(ucfirst($acive_link) == $row['title']){
                                    $link = 'active';
                                }
                            ?>
                                <li class="nav-item"> 
                                    <a href="blog/categories?filter=<?php echo strtolower($row['title']) ?>" class="nav-link <?php echo $link?>"><?php echo $row['title'] ?></a>
                                </li>
                            <?php } ?>
						</ul>
                        <div class="other-option">
							<a class="default-btn" href="contact">Contact Us<span></span></a>
						</div>
					</div>
				</nav>
			</div>
		</div>
	</div>
	<div class="article_article-progress__OnH5x"></div>
	<!-- End Navbar Section -->