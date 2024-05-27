<div class="col-lg-12 col-md-12">
    <div class="row">
        <div class="col-12">
            <div class="blog_compo_box">
                <h3>All Stories</h3>
                <p>Every thing you need to know about what we do</p>
            </div>
        </div>
        <?php while($row = mysqli_fetch_assoc($get_posts)) {?>
        <div class="col-lg-4 col-md-6">
            <a href="blog/<?php echo adjust($row['title'])?>" class="blog-link-single">
                <div class="blog-single-item">
                    <div class="blog-image">
                        <img src="<?php echo $row['image']?>" alt="image">
                    </div>
                    <div class="blog-description">
                        <div class="blog-info">
                            <h6><?php echo $row['category']?></h6>
                            <p><?php echo $row['date']?></p>
                        </div>
                        <div class="blog-text">
                            <h3><?php echo $row['title']?></h3>
                        </div>
                        <div class="blog-author">
                            <h6><span>by</span> <?php echo $row['author']?></h6>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <?php } ?>
    </div>
</div>