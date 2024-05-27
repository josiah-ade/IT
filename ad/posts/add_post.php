<?php 
require('../header.php');
$get_category_x = get_category_x();
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Add New Post</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo SITE_PATH_ADMIN ?>">Home</a></li>
              <li class="breadcrumb-item"><a href="posts/post" class="ac">Post</a></li>
              <li class="breadcrumb-item active">Add New Post</li>
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
                <form id="postFormSubmit" method="post" enctype="multipart/form-data">
                    <div class="card-header headreplt">
                        <div class="hesderfirst">
                            <a class="btn btn-secondary" href="post"><i class="fas fa-hand-point-left"></i> Back To Post</a>
                        </div>
                        <div class="mr-10">
                            <button id="postSaveBtn" type="button" class="btn btn-primary btn-block"><i class="fas fa-save"></i> Save</button>
                            <button type="submit" id="postSaveBtn2" class="btn btn-primary btn-block btnpri" disabled style="display: none; margin-top: 0;"><span class="spinner-border spinner-border-sm"></span> Saving ...</button> 
                        </div>
                        <div>
                            <button id="postSubmit" type="submit" class="btn btn-dark btn-block"><i class="fab fa-telegram-plane"></i> Publish</button>
                            <button id="postSubmit2" type="submit" class="btn btn-dark btn-block" disabled style="display: none;margin-top: 0;"><span class="spinner-border spinner-border-sm"></span> Publishing ...</button> 
                        </div>
                    </div>
                    <!-- <div class=""></div> -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-8 col-lg-9 col-xl-9">
                                <div class="col-12 form-group juji">
                                    <label >Title</label>
                                    <input type="text" id="newPosttitle" name="title" value="" class="form-control" placeholder="Title" >
                                </div>
                                <div class="contscroller">
                                <div class="col-12 form-group juji">
                                    <label >Content</label>
                                    <textarea id="summernote" name="content"></textarea>
                                    
                                </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-4 col-lg-3 col-xl-3 vlexcaol">
                            <div class="col-12 form-group juji">
                                <label>Category</label>
                                <select class="form-control select2 select2-danger" id="post_categoryk" name="category">
                                    <option value="0">Select Category</option>
                                    <?php while($row=mysqli_fetch_assoc($get_category_x)){?>
                                    <option value="<?php echo $row['title']?>"><?php echo $row['title']?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="col-12 form-group juji">
                                <label>Tags</label>
                                <textarea name="tags" id="post_tags" class="form-control form-controlzz" placeholder="sepreated by commas"></textarea>
                                <div id="classerID" class="d-none"></div>
                                <input class="d-none" id="schedule_postxxxxxx" />
                                <input class="d-none" id="site_pather" value="<?php echo SITE_PATH_LOGIN ?>" />
                                <input class="d-none" id="site_pather2" value="<?php echo SITE_PATH_ADMIN.'posts/post' ?>" />
                                <input class="d-none" id="editPal" value="0" />
                            </div>
                            <div class="col-12 form-group juji">
                                <label>Started On</label>
                                <div class="input-group date" id="reserverDate1" >
                                    <input type="text" id="post_published_date1x" name="published_onx" class="form-control"  value="<?php echo convert_time_str(date('Y-m-d')) ?>" readonly/>
                                    <input type="text" id="post_published_date1" name="published_on" class="form-control d-none"  value="<?php echo dateAdjuster() ?>" readonly/>
                                    <input name="published_time" class="d-none" id="published_time" value="0"/>
                                </div>
                            </div>
                            
                            <div class="col-12  form-group juji">
                                <div class="custom-control custom-checkbox">
                                <input class="custom-control-input custom-control-input-danger" type="checkbox" id="customCheckbox4" >
                                
                                <input name="first_image" class="d-none" id="first_image" value=""/>
                                <input name="first_image_title" class="d-none" id="first_image_title" value=""/>
                                <input name="schedule_post" class="d-none" id="schedule_post" value="0"/>
                                <input name="allsave" class="d-none" id="allsave_draft" value="0"/>
                                <input name="allsaveid" class="d-none" id="allsave_id" value=""/>
                                <input class="d-none" id="stopDraftSaving" value="0"/>
                                <label for="customCheckbox4" class="custom-control-label">Schedule Post</label>
                                </div>
                            </div>
                            <div class="col-12 form-group juji">
                                <div id="setDateHere" class="col-12 form-group juji d-none">
                                    <div class="row">
                                    <div class="col-8 padcu">
                                        <input type="text" id="schedule_date2" name="schedule_date2" value="" class="form-control-plaintext" placeholder="Date">
                                        <input type="text" id="schedule_date" name="schedule_date" value="" class="form-control-plaintext d-none" placeholder="Date">
                                    </div> 
                                    <div class="col-4 padcu">
                                        <input type="text" id="schedule_time" name="schedule_time" value="" class="form-control-plaintext" placeholder="Time">
                                    </div>
                                    </div>
                                    <input type="text" id="schedule_date_orig" name="schedule_date_orig" value="" class="form-control v-none">
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </form>
                </div>
            </div>
      </div>
      <?php require('../components/post/post_components.php'); ?>
    <div id="containerForWidg" class="containerForWidg"></div>
    </div></div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php require('../footer.php') ?>
<script src="assets/js/dater.js"></script>
