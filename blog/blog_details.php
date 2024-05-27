<div class="col-lg-8 col-md-12">
    <div class="blog-details-desc">
        <div class="article-content">
            <h3><?php echo $get_posts_details['title'] ?></h3>
            <div class="entry-meta">
                <ul>
                    <li> <span>Posted On:</span>  <a href="javascript:void(0)"><?php echo $get_posts_details['date'] ?></a></li>
                    <li> <span>Posted By:</span>  <a href="javascript:void(0)"><?php echo $get_posts_details['author'] ?></a></li>
                </ul>
            </div>
            <div class="article-hed">
                <div class="article-share">
                    <ul class="social">
                        <li><span>Share:</span></li>
                        <li><a target = "_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php get_url() ?>"> <i class="fab fa-facebook-f"></i></a></li>
                        <li><a target = "_blank" href="https://www.twitter.com/intent/tweet?url=<?php get_url() ?>"> <i class="fab fa-twitter"></i></a></li>
                        <li><a target = "_blank" href="https://www.linkedin.com/shareArticle?mini=true&url=<?php get_url() ?>"> <i class="fab fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
            <?php echo $get_posts_details['contents'] ?>
        </div>
        <div class="article-footer">
            <div class="article-tags"> <span>Tag:</span>
            <?php 
                for($i = 0; $i < count($tags); $i++){
            ?>
                <a href="blog/tags?filter=<?php echo adjust($tags[$i])?>"><?php echo ucfirst($tags[$i])?></a>
            <?php } ?>
            </div>
            <div class="article-share">
                <ul class="social">
                    <li><span>Share:</span></li>
                    <li><a target = "_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php get_url() ?>"> <i class="fab fa-facebook-f"></i></a></li>
                    <li><a target = "_blank" href="https://www.twitter.com/intent/tweet?url=<?php get_url() ?>"> <i class="fab fa-twitter"></i></a></li>
                    <li><a target = "_blank" href="https://www.linkedin.com/shareArticle?mini=true&url=<?php get_url() ?>"> <i class="fab fa-linkedin"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>