<?php 
require('config/init.php') ;
$get_socials = get_socials();
$get_meta = get_meta();
?>
<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<base href="<?php echo SITE_PATH?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Title -->
	<title><?php echo $get_meta['title'] ?></title>
	<meta name="description" content="<?php echo $get_meta['meta_description']?>">
    <meta name="keywords" content="<?php echo $get_meta['meta_keywords']?>">
    <meta property="og:url" content="<?php echo $get_meta['url']?>" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?php echo $get_meta['meta_title']?>" />
    <meta property="og:description" content="<?php echo $get_meta['meta_description']?>" />
    <meta property="og:image" content="" />
	<link rel="stylesheet" href="assets/css/font.css">
	<!-- Favicon -->
	<link rel="icon" type="image/png" href="assets/img/favicon.png">
	<!-- Bootstrap Min CSS -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<!-- Animate Min CSS -->
	<link rel="stylesheet" href="assets/css/animate.min.css">
	<!-- FlatIcon CSS -->
	<link rel="stylesheet" href="assets/css/flaticon.css">
	<!-- Font Awesome Min CSS -->
	<link rel="stylesheet" href="assets/css/fontawesome.min.css">
	<!-- Bootstrap Icon CSS -->
	<link rel="stylesheet" href="assets/css/bootstrap-icons.css">
	<!-- Mean Menu CSS -->
	<link rel="stylesheet" href="assets/css/meanmenu.css">
	<!-- SweetAlert -->
	<link rel="stylesheet" href="assets/css/sweetalert.css">
	<!-- Magnific Popup Min CSS -->
	<link rel="stylesheet" href="assets/css/magnific-popup.min.css">
	<!-- Swiper Min CSS -->
	<link rel="stylesheet" href="assets/css/swiper.min.css">
	<!-- Owl Carousel Min CSS -->
	<link rel="stylesheet" href="assets/css/owl.carousel.min.css">
	<!-- Style CSS -->
	<link rel="stylesheet" href="assets/css/style.css">
	<!-- Responsive CSS -->
	<link rel="stylesheet" href="assets/css/responsive.css">
</head>