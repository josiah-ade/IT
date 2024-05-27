<?php 
require('config/init.php');
$checK_user_ck = checK_user_ck();
if($checK_user_ck){
  redirect(SITE_PATH_ADMIN);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin</title>
  <link rel="icon" href="assets/img/favicon.png" type="image/x-icon"/>
  <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png" />
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="assets/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="assets/css/main.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/sweetalert.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="javascript:void(0)">
      <svg xmlns="http://www.w3.org/2000/svg" version="1.0" width="159px" viewBox="0 0 247.000000 43.000000" preserveAspectRatio="xMidYMid meet">
        <g transform="translate(0.000000,43.000000) scale(0.100000,-0.100000)" fill="#000000" stroke="none">
          <path d="M10 412 c0 -16 59 -322 75 -389 4 -16 13 -23 29 -23 20 0 35 24 120 204 53 113 96 210 96 216 0 7 -16 10 -42 8 l-41 -3 -56 -124 -56 -125 -24 127 -23 127 -39 0 c-31 0 -39 -4 -39 -18z"/>
          <path d="M947 423 c-4 -3 -7 -21 -7 -39 l0 -33 63 -3 63 -3 -22 -160 c-13 -88 -23 -166 -24 -172 0 -9 15 -13 44 -13 l45 0 7 57 c4 32 14 110 23 173 l16 115 65 3 c69 3 80 11 80 55 l0 27 -173 0 c-96 0 -177 -3 -180 -7z"/>
          <path d="M1356 394 c-34 -33 -8 -82 38 -70 32 8 40 42 15 67 -23 23 -33 24 -53 3z"/>
          <path d="M390 279 c-84 -34 -123 -133 -84 -215 21 -44 59 -64 123 -64 72 0 98 12 103 50 4 28 3 31 -16 25 -12 -4 -42 -9 -67 -12 -40 -5 -48 -2 -63 18 -31 44 -23 49 79 49 l95 0 0 31 c0 92 -86 151 -170 118z m84 -71 c15 -24 5 -30 -50 -26 l-49 3 23 23 c26 26 59 26 76 0z"/>
          <path d="M694 276 c-98 -43 -121 -184 -41 -252 28 -24 37 -26 103 -22 40 2 75 5 77 8 3 3 8 20 12 39 7 31 5 33 -11 26 -36 -14 -101 -17 -123 -6 -13 7 -21 21 -21 36 0 25 1 25 90 25 l90 0 0 38 c0 51 -19 84 -60 104 -42 21 -74 22 -116 4z m84 -58 c25 -25 13 -38 -33 -38 -49 0 -53 4 -28 32 19 21 44 23 61 6z"/>
          <path d="M1603 270 c-27 -16 -33 -17 -33 -5 0 11 -11 15 -40 15 -22 0 -40 -2 -40 -5 0 -7 -29 -203 -35 -243 l-6 -33 43 3 43 3 11 83 c15 104 17 108 52 126 49 25 57 5 43 -102 -15 -119 -16 -112 28 -112 43 0 43 0 56 117 8 62 26 92 67 106 38 13 41 -24 12 -191 l-5 -33 43 3 43 3 14 102 c15 116 7 157 -36 174 -38 14 -57 11 -97 -16 l-36 -24 -24 24 c-30 30 -60 32 -103 5z"/>
          <path d="M2055 276 c-99 -43 -124 -183 -44 -251 26 -21 41 -25 93 -25 70 0 92 12 102 54 6 26 5 28 -12 21 -10 -4 -40 -10 -66 -12 -55 -6 -78 7 -78 43 0 23 2 24 90 24 l90 0 0 35 c0 95 -87 150 -175 111z m83 -58 c25 -25 13 -38 -33 -38 -48 0 -55 9 -29 34 18 19 45 21 62 4z"/>
          <path d="M2334 276 c-34 -15 -59 -63 -49 -95 3 -11 24 -36 47 -55 28 -24 39 -40 34 -52 -4 -11 -13 -14 -29 -10 -66 18 -64 19 -70 -11 -8 -39 4 -46 77 -51 59 -4 67 -2 90 21 41 41 35 82 -19 133 -56 51 -58 69 -9 60 19 -4 42 -10 50 -13 10 -4 14 4 14 30 0 30 -4 37 -31 46 -41 14 -67 13 -105 -3z"/>
          <path d="M1330 275 c0 -12 -31 -233 -35 -252 -5 -21 -2 -23 38 -23 l44 0 11 93 c6 50 15 113 18 140 l7 47 -42 0 c-22 0 -41 -2 -41 -5z"/>
        </g>
      </svg>
</a>
  </div>
  <!-- /.login-logo -->
  <div class="card loko cdf_lo">
    <div id="loaderr" class="loaderr">
        <div  class="loaderbar"></div>
    </div>
    <div class="card-body login-card-body">
        <p class="login-box-msg" style="font-weight: 600;"><i class="fas fa-sign-in-alt"></i> Sign in to start your session</p>
        <form id="admlogin" method="post">
            <div class="input-group mb-3">
                <input type="email" class="form-control" placeholder="Email" name="lemail" id="lemail" autocomplete="off">
                <div class="input-group-append">
                    <div class="input-group-text">
                    <span class="fas fa-envelope"></span>
                    </div>
                </div>
            </div>
            <p id="lemail_error" class="error_report"></p>
            <div class="input-group mb-3">
                <input type="password" class="form-control" placeholder="Password" name="lppassword" id="lppassword" autocomplete="off">
                <div class="input-group-append">
                    <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                    </div>
                </div>
            </div>
            <p id="lpassword_error" class="error_report"></p>
            <div class="row">
            <div class="col-6">
                <input type="hidden" id="redireclogin" value="<?php echo SITE_PATH_ADMIN.'dashboard'?>">
                <input type="hidden" name="time_upload_loggg" id="time_upload_loggg">
            </div>
            <!-- /.col -->
            <div class="col-6">
                <button id="adlogsub" type="submit" class="btn btn-primary btn-block">Sign In</button>
                <button type="submit" id="adlogsubrole" class="btn btn-primary btn-block btnpri" disabled style="display: none;"><span class="spinner-border spinner-border-sm"></span> Loging In ...</button> 
            </div>
            <!-- /.col -->
            </div>
      </form>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="assets/js/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="assets/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="assets/js/main.min.js"></script>
<script src="assets/js/sweetalert2.min.js"></script>
<script src="assets/js/style.js"></script>
</body>
</html>
