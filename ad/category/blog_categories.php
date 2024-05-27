<?php require('../header.php') ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Blog Categories</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo SITE_PATH_ADMIN ?>">Home</a></li>
              <li class="breadcrumb-item active">Blog Categories</li>
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
                <a class="btn btn-primary btn-sm mb-2" href="category/b_categories_add"><i class="fas fa-plus"></i> Add Category</a>
              </div>
              <div class="card-header">
                <button class="btn btn-dark btn-sm mb-2">Categories <span class="badge"><?php get_total_blog_categoriees()?></span></button>
              </div>
              <div id="loadercc" class="loaderr">
                     <div  class="loaderbar"></div>
               </div>
              <div class="card-body">
                <table id="example_catdelete" class="table table-bordered table-striped nowrap" style="width: 100%;">
                  <thead>
                  <tr>
                    <th>Name</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php
                      $get_category=get_blog_category_x();
                      while($cat_row=mysqli_fetch_assoc($get_category)){
                        $stats= $cat_row['status'];
                    ?>
                      <tr id="dele_cat_<?php echo $cat_row['id']?>">
                        <td><i class="<?php echo $cat_row['icon']?> iccat"></i> <?php echo $cat_row['title']?></td>
                        <td>
                          <a onclick="chtoggle(<?php echo $cat_row['id']?>)">
                          <?php if($stats==1){?>
                            <i class="fas fa-toggle-on tgo tgo<?php echo $cat_row['id']?>"></i>
                          <?php }else{?>
                            <i class="fas fa-toggle-off tgo tgo<?php echo $cat_row['id']?>"></i>
                          <?php }?>
                          <input id="sta_us<?php echo $cat_row['id']?>" type='hidden' value="<?php echo $cat_row['status']?>">
                          </a>
                        </td>
                        <td><a href="category/b_categories_edit?id=<?php echo $cat_row['id']?>" class="btn btn-primary btn-xs mright"><i class="fas fa-edit"></i> Edit</a> <button  onclick="chdelete(<?php echo $cat_row['id']?>)" class="btn btn-danger btn-xs"><i class="fas fa-trash"></i> Delete</button></td>
                        
                      </tr>
                    <?php } ?>
                  </tbody>
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
