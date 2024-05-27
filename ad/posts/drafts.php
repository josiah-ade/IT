<?php require('../header.php') ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Saved Posts</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo SITE_PATH_ADMIN ?>">Home</a></li>
              <li class="breadcrumb-item active">Saved Posts</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card card-primary card-outline loko">
                    <div class="card-header">
                        <a class="btn btn-primary btn-sm mb-2" href="posts/add_post"><i class="fas fa-plus"></i> Add New Post</a>
                    </div>
                    <div class="card-header">
                        <a href="posts/post" class="btn btn-danger btn-sm mb-2">Total Posts <span class="badge"><?php get_total_posts()?></span></a>

                        <a href="posts/activepost" class="btn btn-primary btn-sm mb-2">Active Posts <span class="badge"><?php get_active_posts()?></span></a>
                        
                        <a href="posts/inactivepost" class="btn btn-secondary btn-sm mb-2">InActive Posts <span class="badge"><?php get_inactive_posts()?></span></a>

                        <a href="posts/schedule_post" class="btn btn-dark btn-sm mb-2">Schedule Posts <span class="badge"><?php get_total_schedules()?></span></a>

                        <a href="posts/drafts" class="btn btn-warning btn-sm mb-2">Saved Posts <span class="badge"><?php get_total_drafts()?></span></a>

                    </div>
                    <div id="loaderr" class="loaderr">
                            <div  class="loaderbar"></div>
                    </div>
                    <div class="card-body">
                        <table id="draftpost_table" class="table table-bordered table-striped nowrap" style="width: 100%;">
                            <thead>
                                <tr>
                                <th>Title</th>
                                <th>Arthur</th>
                                <th>Date</th>
                                <th>Time</th>
                                <th>Category</th>
                                <th>Action</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php require('../footer.php') ?>
