<?php require('header.php') ?>
<body>
	
    <?php require('nav.php') ?>
	
	<!-- Start Page Title Section -->
	<div class="page-title-area">
		<div class="d-table">
			<div class="d-table-cell">
				<div class="container">
					<div class="page-title-content">
						<h2>Contact Us</h2>
						<ul>
							<li><a href="<?php echo SITE_PATH ?>">Home</a></li>
							<li>Contact Us</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Page Title Section -->
    <!-- Start Contact Section -->
	<div class="contact-section section-padding">
		<div class="container">
			<div class="section-title">
				<h6 class="sub-title">Let's Talk</h6>
				<h2>Contact Us</h2>
			</div>
			<div class="row align-items-center">
				<div class="col-lg-10 offset-lg-1">
					<div class="contact-form">
						<p class="form-message"></p>
						<form id="contact-form" class="contact-form form" method="POST">
							<div class="row">
								<div class="col-lg-6 col-md-6">
									<div class="form-group">
										<input type="text" name="name" id="name" class="form-control" required placeholder="Your Name">
									</div>
								</div>
								<div class="col-lg-6 col-md-6">
									<div class="form-group">
										<input type="email" name="email" id="email" class="form-control" required placeholder="Your Email">
									</div>
								</div>
								<div class="col-lg-6 col-md-6">
									<div class="form-group">
										<input type="text" name="phone" id="phone" required class="form-control" placeholder="Your Phone">
									</div>
								</div>
								<div class="col-lg-6 col-md-6">
									<div class="form-group">
										<input type="text" name="subject" id="subject" class="form-control" required placeholder="Your Subject">
										<input type="hidden" value="<?php echo SITE_PATH ?>" id='redirect'/>
										<input type="hidden" value="" name = "time_upload" id="time_upload" />
									</div>
								</div>
								<div class="col-lg-12 col-md-12">
									<div class="form-group">
										<textarea name="message" class="form-control" id="message" cols="30" rows="6" placeholder="Your Message"></textarea>
									</div>
								</div>
								<div class="col-lg-12">
									<button type="submit" id="loader" class="default-btn submit-btn">Send Message <span></span></button>
									<button id="loader2" class="btn btn-primary btnxx" type="button" disabled>
									<span class="spinner-border spinner-border-sm" aria-hidden="true"></span>
  									<span role="status">Loading...</span>
									</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Contact Section -->
	
<?php require('footer.php') ?>
</body>

</html>