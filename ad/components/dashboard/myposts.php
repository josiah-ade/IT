
<div class="row">
    <div class="col-lg-3 col-6">
        <div class="small-box bg-success">
            <div class="inner">
                <h3><?php get_my_total_posts()?></h3>
                <p>Total Posts</p>
            </div>
            <div class="icon">
                <i class="fas fa-layer-group"></i>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-6">
        <div class="small-box bg-warning">
            <div class="inner">
                <h3><?php get_my_total_inactiveposts()?></h3>
                <p>Total InActive Posts</p>
            </div>
            <div class="icon">
                <i class="fas fa-layer-group"></i>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-6">
        <div class="small-box bg-dark">
            <div class="inner">
                <h3><?php get_my_total_schedule_posts()?></h3>
                <p>Total Scheduled Posts</p>
            </div>
            <div class="icon">
                <i class="fas fa-layer-group"></i>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-6">
        <div class="small-box bg-pink">
            <div class="inner">
                <h3><?php get_my_total_draft_posts()?></h3>
                <p>Total Saved Posts</p>
            </div>
            <div class="icon">
                <i class="fas fa-layer-group"></i>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box">
            <span class="info-box-icon bg-success elevation-1"><i class="fas fa-calendar"></i></span>

            <div class="info-box-content">
                <span class="info-box-text">This Year</span>
                <span class="info-box-number"><?php echo get_my_total_post_this_year() ?></span>
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
                <span class="info-box-text">This Month</span>
                <span class="info-box-number"><?php echo get_my_total_post_this_month() ?></span>
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
                <span class="info-box-text">This Week</span>
                <span class="info-box-number"><?php echo get_my_total_post_this_week() ?></span>
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
                <span class="info-box-text">Today</span>
                <span class="info-box-number"><?php echo get_my_total_post_today() ?></span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>
    <!-- /.col -->
</div>
<div class="row">
    <div class="col-12" style="background: #c5298e; padding-top: 10px">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title" style="font-size: 1.1rem !important;">Latest Posts</h3>
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
                        $get_my_latest_10_posts=get_my_latest_10_posts();
                        while($cat_row=mysqli_fetch_assoc($get_my_latest_10_posts)){
                            $id = $cat_row['id'];
                            $name = $cat_row['title'];
                            $date = $cat_row['date2'];
                            $time = $cat_row['time'];
                            $views = view_ink($cat_row['views']);
                            $imageyxx = $cat_row['image'];
                        ?>
                            <tr>
                                <td><?php get_post_images($imageyxx) ?></td>
                                <td><?php echo $name?></td>
                                <td><?php echo get_post_t_details($date,$time)?></td>
                                <td><?php echo $views?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                  </table>
                </div>
            </div>
        </div>
    </div>
</div>