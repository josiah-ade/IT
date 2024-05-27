<?php
require('config/init.php');
require('meta.php');
$checK_user_ck = checK_user_ck();
if(!$checK_user_ck){
  redirect(SITE_PATH_ADMIN.'login');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <base href="<?php echo SITE_PATH_ADMIN ?>">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="robots" content="noindex,nofollow">
  <title>Admin</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="icon" href="assets/img/favicon.png" type="image/x-icon"/>
  <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png" />
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="assets/css/all.min.css">
   <!-- DataTables -->
   <link rel="stylesheet" href="assets/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="assets/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="assets/css/buttons.bootstrap4.min.css">
  <link rel="stylesheet" href="assets/css/select2.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="assets/css/spectrum.min.css">
  <link rel="stylesheet" href="assets/css/main.min.css">
  <link rel="stylesheet" href="assets/css/bootstrap-iconpicker.min.css">
  <link rel="stylesheet" href="assets/css/sweetalert.css">
  <link rel="stylesheet" href="assets/css/toastr.min.css">
  <link rel="stylesheet" href="assets/css/tempus.css">
  <link rel="stylesheet" href="assets/css/select2.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/summernote-bs4.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    
  </nav>
  <!-- /.navbar -->
    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?php echo SITE_PATH_ADMIN ?>" class="brand-link">
      <img src="assets/img/logo.png" alt="Logo" class="brand-image">
      <span class="brand-text font-weight-light" style="visibility: hidden;"> 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="dashboard" class="nav-link <?php echo $dashboard_active ?>">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="category/blog_categories" class="nav-link <?php echo $blog_categories_active ?>">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Blog Categories
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="posts/post" class="nav-link <?php echo $post_active ?>">
              <i class="nav-icon fas fa-layer-group"></i>
              <p>
                Post
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="messages" class="nav-link <?php echo $messages_active ?>">
              <i class="nav-icon fas fa-comment"></i>
              <p>
                Messages
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>