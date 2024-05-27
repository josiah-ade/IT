<div class="col-lg-4 col-md-12 mt-30">
    <aside class="widget-area" id="secondary">
        <section class="widget widget_techvio_posts_thumb">
            <h3 class="widget-title">Similar Posts</h3>
                <div class="row mt-50">
                    <?php while($row = mysqli_fetch_assoc($get_similar_posts)){ ?>
                        <div class="col-12">
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
        </section>
    </aside>
</div>