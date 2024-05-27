<?php require('header.php') ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Messages</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo SITE_PATH_ADMIN ?>">Home</a></li>
              <li class="breadcrumb-item active">Messages</li>
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
                        <button class="btn btn-primary btn-sm mb-2">Total Messages <span class="badge"><?php get_total_message()?></span></button>
                    </div>
                    <div id="loaderr" class="loaderr">
                        <div  class="loaderbar"></div>
                    </div>
                    <div class="card-body">
                        <table id="contact_messages" class="table table-bordered table-striped nowrap" style="width: 100%;">
                            <thead>
                                <tr>
                                <th>ID</th>
                                <th>Full Name</th>
                                <th>Email</th>
                                <th>Date</th>
                                <th>Time</th>
                                <th>Action</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
            <div id="mobi_ccview" class="pop_up2xconvey">
            <div class="pop_up_conxey">
                <div class="card-header">
                    <h6 class="t-cen">From - <span id="tcen_t"></span></h6>
                </div>
                <div class="card-header">
                    <h6 class="t-cen">Subject - <span id="tcen_t2"></span></h6>
                </div>
                <div class="card  mobizyc">
                    <div style="display: none !important;" id="msger_load" class="chat_content_inner_load">
                        <div class="marg_cen"><span class="spinner-border spinner-border-lg spinix"></span></div>
                    </div>
                    <div id="stichert" class="clsdfg"></div>
                    <div class="card-footer foot_class" style="background-color: unset;">
                        <button id="closeactyu" class="btn btn-primary btn-md">Close</button>
                    </div>
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
