<?php 
require('../header.php') ;
require('../form_submit/categories/b_categories_edit.php');
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Edit Blog Categories</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo SITE_PATH_ADMIN ?>">Home</a></li>
              <li class="breadcrumb-item active">Edit Blog Categories</li>
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
                <a class="btn btn-primary btn-sm mb-2" href="category/blog_categories"><i class="fas fa-hand-point-left"></i> Back To Category</a>
              </div>
              <div class="card-body">
                <form method="post">
                  <div class="row">
                      <div class="col-8 form-group juji">
                          <label >Title</label>
                          <input type="text" id="title" name="title" value="<?php echo $title?>" class="form-control" placeholder="Title" required>
                      </div>
                      <div class="col-4 form-group juji">
                          <div class="labe">Choose Category Icon</div>
                          <button id="icpicker" class="btn btn-primary" role="iconpicker" data-selected-class="btn-primary" data-unselected-class="btn-info"></button>
                          <input id="pickeric" name="pickeric" type="hidden" value="<?php echo $icon?>">
                          <input id="myicon" type="hidden" value="<?php echo $icon?>">
                      </div>
                      <div class="col-12 form-group juji">
                          <label >Description</label>
                          <textarea id="description" name="description" class="form-control" placeholder="Decription" rows="5"><?php echo $description?></textarea>
                      </div>
                      <div class="col-12 form-group juji klexseo">
                          <div class="labe dashed">SEO TAGS</div>
                      </div>
                      <div class="col-12 form-group juji">
                          <div class="expla"><p>This is used for SEO on search engines to find your site. Using relevant title, keywords and description will help rank higher on search engines.</p></div>
                      </div>
                      <div class="col-12 form-group juji">
                          <label >Title</label>
                          <input type="text" id="seo_title" name="seo_title" value="<?php echo $seo_title?>" class="form-control" placeholder="Title">
                      </div>
                      <div class="col-12 form-group juji">
                          <label >Description</label>
                          <textarea id="seo_description" name="seo_description" class="form-control" placeholder="Decription" rows="3"><?php echo $seo_description?></textarea>
                      </div>
                      <div class="col-12 form-group juji">
                          <label >Keywords</label>
                          <textarea id="seo_keywords" name="seo_keywords" class="form-control" placeholder="Keywords" rows="3"><?php echo $seo_keywords?></textarea>
                          <p class="relkey">Use relevant keywords for better result and seprate each keywords with a comma.</p>
                      </div>
                      <div class="col-12 form-group juji">
                          <button type="submit" class="btn btn-primary" name="submit"><i class="fas fa-save"></i> Submit</button>
                      </div>
                  </div>
                </form>
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
