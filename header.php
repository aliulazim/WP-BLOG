<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">


<link rel="icon" href="images/favicon.png">

<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<?php wp_head();?>
</head>

<body>
<a href="#" class="scrollToTop"><i class="fa fa-angle-up"></i></a>
<!--Loader-->
<div class="loader">
  <div class="bouncybox">
      <div class="bouncy"></div>
    </div>
</div>

<div class="topbar">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="pull-left">
        <?php dynamic_sidebar('header-left');?>
        </div>
        <ul class="social_top pull-right">
          <?php dynamic_sidebar('header-right');?>
        </ul>

      </div>
    </div>
  </div>
</div>

<!--Header-->
<header>
  <nav class="navbar navbar-default navbar-sticky bootsnav">
    <div class="container"> 
       <div class="search_btn btn_common"><i class="icon-icons185"></i></div>
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
          <i class="fa fa-bars"></i>
        </button>
        <a class="navbar-brand" href="index.html">
        <img src="<?php echo esc_url(get_template_directory_uri());?>/images/logo.png" class="logo logo-scrolled" alt="">
        </a>
      </div>
      <div class="collapse navbar-collapse" id="navbar-menu">
        
          <?php wp_nav_menu(array('theme_location'=>'primary'));?>
        
      </div>
    </div>   
  </nav>
</header>

<!--Search-->
<div id="search">
  <button type="button" class="close">×</button>
  <form action="<?php echo home_url("/"); ?>" method="get">
    <input type="search" value="<?php echo get_search_query() ?>" name="s"  placeholder="Search here...."  required/>
    <button type="submit" class="btn btn_common blue">Search</button>
  </form>
</div>

<!--Page Header-->
<section class="page_header padding-top" style="background-image: url(<?php header_image(); ?>);">
  <div class="container">
    <div class="row">
      <div class="col-md-12 page-content">
        <?php dynamic_sidebar('header-text');?>
        <div class="page_nav">
        <?php get_breadcrumb(); ?>
      
      </div>
      </div>
    </div>
  </div>
</section>