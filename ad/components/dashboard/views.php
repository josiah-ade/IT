<div class="row">
    <div class="col-lg-3 col-6">
        <div class="small-box bg-success">
            <div class="inner">
                <h4><?php get_alltime_pageviews()?></h4>
                <p>Pageviews (All Time)</p>
            </div>
            <div class="icon">
                <i class="fas fa-eye"></i>
            </div>
            <a href="posts/post" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <div class="col-lg-3 col-6">
        <div class="small-box bg-pink">
            <div class="inner">
                <h4><?php echo get_pageviews_this_year()?></h4>
                <p>Pageviews (This Year)</p>
            </div>
            <div class="icon">
                <i class="far fa-eye"></i>
            </div>
            <a href="posts/post" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <div class="col-lg-3 col-6">
        <div class="small-box bg-dark">
            <div class="inner">
                <h4><?php echo get_pageviews_monty()?></h4>
                <p>Pageviews (This Month)</p>
            </div>
            <div class="icon">
                <i class="fas fa-eye-slash"></i>
            </div>
            <a href="posts/post" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <div class="col-lg-3 col-6">
        <div class="small-box bg-primary">
            <div class="inner">
                <h4><?php echo get_pageviews_week()?></h4>
                <p>Pageviews (This Week)</p>
            </div>
            <div class="icon">
                <i class="far fa-eye-slash"></i>
            </div>
            <a href="posts/post" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box">
            <span class="info-box-icon bg-dark elevation-1"><i class="fas fa-calendar"></i></span>

            <div class="info-box-content">
                <span class="info-box-text">Today</span>
                <span class="info-box-number"><?php echo get_pageviews_today() ?></span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>
    <!-- /.col -->
    <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box mb-3">
            <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-calendar-alt"></i></span>

            <div class="info-box-content">
                <span class="info-box-text">Yesterday</span>
                <span class="info-box-number"><?php echo get_pageviews_yesterday() ?></span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>
    <!-- /.col -->

    <!-- fix for small devices only -->
    <div class="clearfix hidden-md-up"></div>

    <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box mb-3">
            <span class="info-box-icon bg-pink elevation-1"><i class="fas fa-calendar-check"></i></span>

            <div class="info-box-content">
                <span class="info-box-text">Three Days Ago</span>
                <span class="info-box-number"><?php echo get_pageviews_3daysago() ?></span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>
    <!-- /.col -->
    <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box mb-3">
            <span class="info-box-icon bg-primary elevation-1"><i class="fas fa-calendar-times"></i></span>

            <div class="info-box-content">
                <span class="info-box-text">Four Days Ago</span>
                <span class="info-box-number"><?php echo get_pageviews_4daysago() ?></span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>
    <!-- /.col -->
</div>
<div class="row">
    <div class="col-12">
        <div class="small-box bg-dark">
            <div class="inner">
                <h3><?php get_total_post_views()?></h3>
                <p>Total Posts Views</p>
            </div>
            <div class="icon">
                <i class="fas fa-eye"></i>
            </div>
            <a href="posts/post" target="_blank" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box">
            <span class="info-box-icon bg-success elevation-1"><i class="fas fa-calendar"></i></span>

            <div class="info-box-content">
                <span class="info-box-text">Views This Year</span>
                <span class="info-box-number"><?php echo get_post_current_views_this_year() ?></span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>
    <!-- /.col -->
    <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box mb-3">
            <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-calendar-alt"></i></span>

            <div class="info-box-content">
                <span class="info-box-text">Views This Month</span>
                <span class="info-box-number"><?php echo get_post_current_views_this_month() ?></span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>
    <!-- /.col -->

    <!-- fix for small devices only -->
    <div class="clearfix hidden-md-up"></div>

    <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box mb-3">
            <span class="info-box-icon bg-dark elevation-1"><i class="fas fa-calendar-check"></i></span>

            <div class="info-box-content">
                <span class="info-box-text">Views This Week</span>
                <span class="info-box-number"><?php echo get_post_current_views_this_week() ?></span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>
    <!-- /.col -->
    <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box mb-3">
            <span class="info-box-icon bg-pink elevation-1"><i class="fas fa-calendar-times"></i></span>

            <div class="info-box-content">
                <span class="info-box-text">Views Today</span>
                <span class="info-box-number"><?php echo get_post_current_views_this_today() ?></span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>
    <!-- /.col -->
</div>
<div class="row" style="background: #c5298e; padding-top: 10px">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title" style="font-size: 1.1rem !important;">Most Viewed Post (Today)</h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
            </div>
            <div class="card-body">      
                <div class="table-responsive">
                  <table class="table m-0 table-striped table-bordered table-dark">
                    <thead>
                        <tr>
                            <th>Image</th>
                            <th>Title</th>
                            <th>Date</th>
                            <th><i class="fas fa-eye" data-toggle="tooltip" data-placement="top" title="total views"></i></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $get_top_view_today=get_top_view_today();
                        while($cat_row2=mysqli_fetch_assoc($get_top_view_today)){
                            $idd = $cat_row2['id'];
                            $namee = $cat_row2['title'];
                            $datee = $cat_row2['date'];
                            $viewss = view_ink($cat_row2['total']);
                            $image = $cat_row2['image'];
                            
                        ?>
                            <tr>
                                <td><?php get_post_images($image) ?></td>
                                <td><?php echo $namee?></td>
                                <td><?php echo $datee?></td>
                                <td><?php echo $viewss?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                  </table>
                </div>
            </div>
            <div class="card-footer text-center">
                <a href="posts/post" class="uppercase" style="color: #c5298e">View All Post</a>
            </div>
        </div>
    </div>
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title" style="font-size: 1.1rem !important;">Most Viewed Posts (Yesterday)</h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
            </div>
            <div class="card-body">      
                <div class="table-responsive">
                  <table class="table m-0 table-striped table-bordered table-dark">
                    <thead>
                        <tr>
                            <th>Image</th>
                            <th>Title</th>
                            <th>Date</th>
                            <th><i class="fas fa-eye" data-toggle="tooltip" data-placement="top" title="total views"></i></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $get_top_view_yesterday=get_top_view_yesterday();
                        while($cat_row3=mysqli_fetch_assoc($get_top_view_yesterday)){
                            $idy = $cat_row3['id'];
                            $namey = $cat_row3['title'];
                            $datey = $cat_row3['date'];
                            $viewsy = view_ink($cat_row3['total']);
                            $imagey = $cat_row3['image'];
                        ?>
                            <tr>
                                <td><?php get_post_images($imagey) ?></td>
                                <td><?php echo $namey?></td>
                                <td><?php echo $datey?></td>
                                <td><?php echo $viewsy?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                  </table>
                </div>
            </div>
            <div class="card-footer text-center">
                <a href="posts/post" class="uppercase" style="color: #c5298e">View All Post</a>
            </div>
        </div>
    </div>
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title" style="font-size: 1.1rem !important;">Most Viewed Posts (3 Days Ago)</h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
            </div>
            <div class="card-body">      
                <div class="table-responsive">
                  <table class="table m-0 table-striped table-bordered table-dark">
                    <thead>
                        <tr>
                            <th>Image</th>
                            <th>Title</th>
                            <th>Date</th>
                            <th><i class="fas fa-eye" data-toggle="tooltip" data-placement="top" title="total views"></i></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $get_top_view_3daysago=get_top_view_3daysago();
                        while($cat_row4=mysqli_fetch_assoc($get_top_view_3daysago)){
                            $ida = $cat_row4['id'];
                            $namea = $cat_row4['title'];
                            $datea = $cat_row4['date'];
                            $viewsa = view_ink($cat_row4['total']);
                            $imageyx = $cat_row4['image'];
                        ?>
                            <tr>
                                <td><?php get_post_images($imageyx) ?></td>
                                <td><?php echo $namea?></td>
                                <td><?php echo $datea?></td>
                                <td><?php echo $viewsa?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                  </table>
                </div>
            </div>
            <div class="card-footer text-center">
                <a href="posts/post" class="uppercase" style="color: #c5298e">View All Post</a>
            </div>
        </div>
    </div>
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title" style="font-size: 1.1rem !important;">Most Viewed Posts (This Week)</h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
            </div>
            <div class="card-body">      
                <div class="table-responsive">
                  <table class="table m-0 table-striped table-bordered table-dark">
                    <thead>
                        <tr>
                            <th>Image</th>
                            <th>Title</th>
                            <th>Date</th>
                            <th><i class="fas fa-eye" data-toggle="tooltip" data-placement="top" title="total views"></i></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $get_top_view_week=get_top_view_week();
                        while($cat_row4=mysqli_fetch_assoc($get_top_view_week)){
                            $ida = $cat_row4['id'];
                            $namea = $cat_row4['title'];
                            $datea = $cat_row4['date'];
                            $viewsa = view_ink($cat_row4['total']);
                            $imageyx = $cat_row4['image'];
                        ?>
                            <tr>
                                <td><?php get_post_images($imageyx) ?></td>
                                <td><?php echo $namea?></td>
                                <td><?php echo $datea?></td>
                                <td><?php echo $viewsa?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                  </table>
                </div>
            </div>
            <div class="card-footer text-center">
                <a href="posts/post" class="uppercase" style="color: #c5298e">View All Post</a>
            </div>
        </div>
    </div>
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title" style="font-size: 1.1rem !important;">Most Viewed Posts (This Month)</h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
            </div>
            <div class="card-body">      
                <div class="table-responsive">
                  <table class="table m-0 table-striped table-bordered table-dark">
                    <thead>
                        <tr>
                            <th>Image</th>
                            <th>Title</th>
                            <th>Date</th>
                            <th><i class="fas fa-eye" data-toggle="tooltip" data-placement="top" title="total views"></i></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $get_top_view_month=get_top_view_month();
                        while($cat_row4=mysqli_fetch_assoc($get_top_view_month)){
                            $ida = $cat_row4['id'];
                            $namea = $cat_row4['title'];
                            $datea = $cat_row4['date'];
                            $viewsa = view_ink($cat_row4['total']);
                            $imageyx = $cat_row4['image'];
                        ?>
                            <tr>
                                <td><?php get_post_images($imageyx) ?></td>
                                <td><?php echo $namea?></td>
                                <td><?php echo $datea?></td>
                                <td><?php echo $viewsa?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                  </table>
                </div>
            </div>
            <div class="card-footer text-center">
                <a href="posts/post" class="uppercase" style="color: #c5298e">View All Post</a>
            </div>
        </div>
    </div>
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title" style="font-size: 1.1rem !important;">Most Viewed Posts (This Year)</h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
            </div>
            <div class="card-body">      
                <div class="table-responsive">
                  <table class="table m-0 table-striped table-bordered table-dark">
                    <thead>
                        <tr>
                            <th>Image</th>
                            <th>Title</th>
                            <th>Date</th>
                            <th><i class="fas fa-eye" data-toggle="tooltip" data-placement="top" title="total views"></i></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $get_top_view_year=get_top_view_year();
                        while($cat_row4=mysqli_fetch_assoc($get_top_view_year)){
                            $ida = $cat_row4['id'];
                            $namea = $cat_row4['title'];
                            $datea = $cat_row4['date'];
                            $viewsa = view_ink($cat_row4['total']);
                            $imageyx = $cat_row4['image'];
                        ?>
                            <tr>
                                <td><?php get_post_images($imageyx) ?></td>
                                <td><?php echo $namea?></td>
                                <td><?php echo $datea?></td>
                                <td><?php echo $viewsa?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                  </table>
                </div>
            </div>
            <div class="card-footer text-center">
                <a href="posts/post" class="uppercase" style="color: #c5298e">View All Post</a>
            </div>
        </div>
    </div>
    <div class="col-12" >
        <div class="card">
            <div class="card-header">
                <h3 class="card-title" style="font-size: 1.1rem !important;">Most Viewed Posts (All Time)</h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
            </div>
            <div class="card-body">      
                <div class="table-responsive">
                  <table class="table m-0 table-striped table-bordered table-dark">
                    <thead>
                        <tr>
                            <th>Image</th>
                            <th>Title</th>
                            <th>Date</th>
                            <th><i class="fas fa-eye" data-toggle="tooltip" data-placement="top" title="total views"></i></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $get_top_view_alltime=get_top_view_alltime();
                        while($cat_row=mysqli_fetch_assoc($get_top_view_alltime)){
                            $id = $cat_row['id'];
                            $name = $cat_row['title'];
                            $date = $cat_row['date'];
                            $views = view_ink($cat_row['views']);
                            $imageyxx = $cat_row['image'];
                        ?>
                            <tr>
                                <td><?php get_post_images($imageyxx) ?></td>
                                <td><?php echo $name?></td>
                                <td><?php echo $date?></td>
                                <td><?php echo $views?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                  </table>
                </div>
            </div>
            <div class="card-footer text-center">
                <a href="posts/post" class="uppercase" style="color: #c5298e">View All Post</a>
            </div>
        </div>
    </div>
</div>