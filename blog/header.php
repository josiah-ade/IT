<?php 
require('../config/init.php') ;
require('header_meta.php');
$get_socials = get_socials();
$get_categories = get_categories();
?>
<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<base href="<?php echo SITE_PATH?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Title -->
	<title><?php echo $meta_title ?></title>
	<meta name="description" content="<?php echo $meta_description ?>">
    <meta name="keywords" content="<?php echo $meta_keywords ?>">
	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:url" content="<?php echo $url ?>">
	<meta name="twitter:title" content="<?php echo $meta_title ?>">
	<meta name="twitter:desc" content="<?php echo $meta_description ?>">
	<meta name="twitter:description" content="<?php echo $meta_description ?>">
	<meta name="twitter:image" content="<?php echo $image ?>">
    <meta property="og:url" content="<?php echo $url ?>" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?php echo $meta_title ?>" />
    <meta property="og:description" content="<?php echo $meta_description ?>" />
    <meta property="og:image" content="<?php echo $image ?>" />
	<!-- Google Fonts -->
	<link rel="stylesheet" href="assets/css/font.css">
	<link href="https://fonts.googleapis.com/css2?family=Dosis:wght@400;500;600;700;800&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Catamaran:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
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