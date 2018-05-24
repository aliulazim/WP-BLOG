<?php
get_header();
/*
Template Name: Search
*/
?>


<!--BLOG SECTION-->
<section id="blog" class="padding">
  <div class="container">
    <h2 class="hidden">Our Blog</h2>
    <div class="row">
      <div class="col-md-9">
      <h2 class="text-center" style="margin-bottom: 20px;">Search Result for <?php /* Search Count */ $allsearch = &new WP_Query("s=$s&showposts=-1"); $key = wp_specialchars($s, 1); $count = $allsearch->post_count; _e(''); _e('<span class="search-terms">"'); echo $key; _e('"</span>'); _e(' &mdash; '); echo $count . ' '; _e('articles'); wp_reset_query(); ?></h2>
      <?php if( have_posts()):
            while ( have_posts()) : the_post(); 
            
          
        ?>
        <article class="blog_item heading_space wow fadeInLeft" data-wow-delay="300ms">
          <div class="row">
            <div class="col-md-5 col-sm-5 heading_space">
              <div class="image"><?php the_post_thumbnail();?></div>
            </div>
            <div class="col-md-7 col-sm-7 heading_space">
              <h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
              <ul class="comment margin10">
                <li><a href=""><?php the_time('l ; F j, Y, g:i a')?></a></li>
                <li><a href="#."><i class="icon-comment"></i> 5</a></li>
              </ul>
              <p class="margin10"><?php read_more(20);?>[…]
              </p>
              <a class=" btn_common btn_border margin10 border_radius" href="<?php the_permalink();?>">Read More</a>
            </div>
          </div>
        </article>
    <?php endwhile; ?>
        <?php else: ?>
<h2 class="text-center">No results found for '<?php echo get_search_query(); ?>'</h2>
<?php endif; ?>
        <div class="pager_nav wow fadeIn" data-wow-delay="600ms">

          <ul class="pagination">
          <?php wp_pagenavi(); ?>
            
          </ul>
        </div>
      </div>
      <div class="col-md-3">
        <aside class="sidebar bg_grey border-radius wow fadeIn" data-wow-delay="300ms">
          <div class="widget heading_space">
            <form class="widget_search border-radius" action="<?php echo home_url("/"); ?>" method="get">
              <div class="input-group">
                <input type="search" value="<?php echo get_search_query() ?>" name="s"  class="form-control" placeholder="Search Here" required>
                <button type="submit" class=" btn blue"><i class="input-group-addon icon-icons185"></i></button>
              </div>
            </form>
          </div>
          <div class="widget heading_space">
            <h3 class="bottom20">Featured Posts</h3>
            <?php
               $first_query = new WP_Query('posts_per_page=3&cat=5'); 
              if ( $first_query->have_posts() ) while ( $first_query->have_posts() ) : $first_query->the_post();
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
<!--BLOG SECTION-->


<?php
get_footer();
?>