<?php

get_header();
/*
Template Name: Contact
*/
?>

<!--BLOG SECTION-->
<section id="blog" class="padding-bottom-half padding-top">
 <h3 class="hidden">hidden</h3>
 <div class="container">
     <div class="row">
      <div class="col-md-9 col-sm-8 wow fadeIn" data-wow-delay="400ms">
      
        <?php
        while (have_posts()) : the_post();?>
        <h2 class="heading bottom25"><?php the_title();?><span class="divider-left"></span></h2>
        <?php the_content();?>
      <?php endwhile;?>
        
        
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
            <h3 class="bottom20"></h3>
            <?php dynamic_sidebar('maps');; ?> 
          </div>
          <div class="widget heading_space">
            
          </div>
        </aside>
      </div>
    </div>
  </div>
</section>


<?php
get_footer();
?>