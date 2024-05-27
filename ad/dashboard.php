<?php require('header.php') ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo SITE_PATH_ADMIN ?>">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="card card-primary card-outline loko">
          <div class="card-body">
            <ul id="nav-pills" class="nav nav-tabs xce">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#menu1"><i class="fas fa-edit"></i> Posts</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#menu2"><i class="fas fa-layer-group"></i> My Posts</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#menu3"><i class="fas fa-eye-slash"></i> Stats</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#menu4"><i class="fas fa-eye"></i> My Stats</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#menu5"><i class="fas fa-users"></i> Arthurs</a>
                </li>
            </ul>
            <div class="tab-content cooxz">
                <div class="tab-pane fade show active" id="menu1">
                    <?php require('components/dashboard/posts.php'); ?>
                </div>
                <div class="tab-pane fade" id="menu2">
                    <?php require('components/dashboard/myposts.php'); ?>
                </div>
                <div class="tab-pane fade" id="menu3">
                    <?php require('components/dashboard/views.php'); ?>
                </div>
                <div class="tab-pane fade" id="menu4">
                    <?php require('components/dashboard/poststats.php'); ?>
                </div>
                <div class="tab-pane fade" id="menu5">
                    <?php require('components/dashboard/arthurs.php'); ?>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php require('footer.php') ?>
