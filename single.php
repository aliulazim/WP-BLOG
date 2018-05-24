<?php
get_header();
?>

<!--BLOG SECTION-->
<section id="blog" class="padding-bottom-half padding-top">
 <h3 class="hidden">hidden</h3>
 <div class="container">
     <div class="row">
      <div class="col-md-9 col-sm-8 wow fadeIn" data-wow-delay="400ms">
      <h3></h3>
      <?php
        while (have_posts()) : the_post();?>
        <article class="blog_item padding-bottom-half heading_space">
          <div>
            <h3><?php the_title();?></h3>
    <!-- Nav tabs -->
    <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Home</a>

    </li>
    <li role="presentation"><a href="#image" aria-controls="image" role="tab" data-toggle="tab">Image</a></li>
    <li role="presentation"><a href="#video" aria-controls="video" role="tab" data-toggle="tab">Video</a></li>
    <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Settings</a></li>
    </ul>

    <!-- Tab panes -->
    <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="home"><p class="margin10"><?php the_content();?></p></div>
    <div role="tabpanel" class="tab-pane text-center" id="image"><?php the_post_thumbnail();?></div>
    <div role="tabpanel" class="tab-pane" id="video"><?php echo get_post_meta($post->ID, 'video', true);?></div>
    <div role="tabpanel" class="tab-pane" id="settings">...</div>
    </div>
<?php wp_link_pages(); ?>
    </div>
            
        </article>
      <?php endwhile;?>
        <div class="share clearfix heading_space">
          <p class="pull-left"><strong>Share This Article:</strong></p>
          <ul class="pull-right">
            <li><a href="#."><i class="fa fa-facebook"></i></a></li>
            <li><a href="#."><i class="icon-twitter4"></i></a></li>
            <li><a href="#."><i class="icon-dribbble5"></i></a></li>
            <li><a href="#."><i class="icon-instagram"></i></a></li>
            <li><a href="#."><i class="icon-vimeo4"></i></a></li>
        </ul>
        </div>
        <div class="row">
        <div class="col-md-6">
        <?php
          if(get_previous_post($in_same_cat = true)){


        ?>
        <article class="blog_newest text-left heading_space border_radius">
          <h2 class="hidden">Share This Article:</h2>
          <?php 
              $prevPost = get_previous_post();
              $prevthumbnail = get_the_post_thumbnail($prevPost->ID,array(50,50));

          ?>
          <span class="post_img"><?php previous_post_link('%link', $prevthumbnail,$in_same_cat = true); ?></span>
          <div class="text">
          <i class="link">Previous Post</i>
            <?php
              $format = '<span class="post_title">%link</span>';
              previous_post_link( $format, $link = '%title', $in_same_cat = true );
            ?>
          
          </div>
          </article>
          <?php
            } else{
              
            }
          ?>
        </div>
        <div class="col-md-6">
        <?php
          if(get_next_post($in_same_cat = true)){


        ?>
        <article class="blog_newest text-right heading_space border_radius">
          <h2 class="hidden">Share This Article:</h2>
          <div class="text">
          <i class="link">Next Post</i>
          <?php
              $format = '<span class="post_title">%link</span>';
              next_post_link( $format, $link = '%title', $in_same_cat = true );
            ?>
          </div>
          <?php 
              $nextPost = get_next_post();
              $nextthumbnail = get_the_post_thumbnail($nextPost->ID,array(50,50));

          ?>
          <span class="post_img"><?php next_post_link('%link', $nextthumbnail, $in_same_cat = true ); ?></span>
          </article>
          <?php
            } else{
              
            }
          ?>
        </div>
        </div>  
        <article>
        <?php
          comments_template( );
        ?>
        <h3 class="heading bottom25">3 Comments<span class="divider-left"></span></h3>
        <div class="profile_border">
          <div class="profile top20 bottom20">
            <div class="p_pic"><img src="images/profile2.png" alt="instructure"></div>
            <div class="profile_text">
              <h5><strong>JOHN PARKER</strong>  -  <span> Great for Starters</span></h5>
              <ul class="comment">
                 <li><a href="#.">Jan 28, 2016 - 10:07 pm</a></li>
              </ul>
              <p>Vivamus bibendum nibh in dolor pharetra, a euismod nulla dignissim. Aenean viverra tincidunt nibh, in imperdiet nunc. Suspendisse eu ante pretium.</p>
              <a class="readmore" href="#.">LEAVE A REPLY</a>
            </div>
          </div>
        </div>
        <div class="profile_border">
          <div class="profile top20 bottom20">
            <div class="p_pic"><img src="images/profile3.png" alt="instructure"></div>
            <div class="profile_text">
              <h5><strong>JOHN PARKER</strong>  -  <span>Excellent Work</span></h5>
              <ul class="comment">
                 <li><a href="#.">Jan 28, 2016 - 10:07 pm</a></li>
              </ul>
              <p>Vivamus bibendum nibh in dolor pharetra, a euismod nulla dignissim. Aenean viverra tincidunt nibh, in imperdiet nunc. Suspendisse eu ante pretium.</p>
              <a class="readmore" href="#.">LEAVE A REPLY</a>
            </div>
          </div>
        </div>
        <div class="profile_border heading_space">
          <div class="profile top20 bottom20">
            <div class="p_pic"><img src="images/profile4.png" alt="instructure"></div>
            <div class="profile_text">
              <h5><strong>JOHN PARKER</strong>  -  <span>Awesome Quality</span></h5>
              <ul class="comment">
                 <li><a href="#.">Jan 28, 2016 - 10:07 pm</a></li>
              </ul>
              <p>Vivamus bibendum nibh in dolor pharetra, a euismod nulla dignissim. Aenean viverra tincidunt nibh, in imperdiet nunc. Suspendisse eu ante pretium.</p>
              <a class="readmore" href="#.">LEAVE A REPLY</a>
            </div>
          </div>
        </div>
        <h2 class="heading bottom25">Leave A Reply<span class="divider-left"></span></h2>
        <form class="findus heading_space">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Name" required>
        </div>
        <div class="form-group">
          <input type="email" class="form-control" placeholder="Email" required>
        </div>
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Website" required>
        </div>
        <textarea placeholder="Comment"></textarea>
        <button type="submit" class="btn_common yellow border_radius">post your comment</button>
      </form>
        </article>
      </div>
      <div class="col-md-3 col-sm-4 wow fadeIn" data-wow-delay="400ms">
        <aside class="sidebar bg_grey border-radius">
          <div class="widget heading_space">
            <form class="widget_search border-radius" action="<?php echo home_url("/"); ?>" method="get">
              <div class="input-group">
                <input type="search" value="<?php echo get_search_query() ?>" name="s"  class="form-control" placeholder="Search Here" required>
                <i class="input-group-addon icon-icons185"></i>
              </div>
            </form>
          </div>
          <div class="widget heading_space">
            <h3 class="bottom20">Featured Posts</h3>
            <?php
               $postcat = get_the_category($post->ID);
               $args = array('category__and' => array(5, $postcat[1]->term_taxonomy_id),'posts_per_page' => 3);
               $feature = new WP_Query( $args );
              if ( $feature->have_posts() ) while ( $feature->have_posts() ) : $feature->the_post();
            ?>
            <div class="media">
              <a class="media-left" href="<?php the_permalink();?>"><?php the_post_thumbnail(array(50,50));?></a>
              <div class="media-body">
                <h5 class="bottom5"><?php the_title();?></h5>
                <p class="margin10"><?php read_more(10);?>[…]
              </p>
                <a href="<?php the_permalink();?>" class="btn-primary border_radius bottom5">Read More</a>
              </div>
            </div>
        <?php endwhile;?>
          </div>
          <div class="widget heading_space">
            <?php the_widget( 'WP_Widget_Tag_Cloud' ); ?> 
          </div>
        </aside>
      </div>
    </div>
  </div>
</section>


<?php
get_footer();
?>