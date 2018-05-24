<?php

function blog_script_enqueue(){
	wp_enqueue_style('bootstrap',get_template_directory_uri().'/css/bootstrap.min.css',array(),'1.0','all');
	wp_enqueue_style('font-awesome',get_template_directory_uri().'/css/font-awesome.min.css',array(),'1.0','all');
	wp_enqueue_style('edua-icons',get_template_directory_uri().'/css/edua-icons.css',array(),'1.0','all');
	wp_enqueue_style('animate',get_template_directory_uri().'/css/animate.min.css',array(),'1.0','all');
	wp_enqueue_style('carousel',get_template_directory_uri().'/css/owl.carousel.css',array(),'1.0','all');
	wp_enqueue_style('transition',get_template_directory_uri().'/css/owl.transitions.css',array(),'1.0','all');
	wp_enqueue_style('cuberportfolio',get_template_directory_uri().'/css/cubeportfolio.min.css',array(),'1.0','all');
	wp_enqueue_style('settings',get_template_directory_uri().'/css/settings.css',array(),'1.0','all');
	wp_enqueue_style('bootsnav',get_template_directory_uri().'/css/bootsnav.css',array(),'1.0','all');
	wp_enqueue_style('style',get_template_directory_uri().'/css/style.css',array(),'1.0','all');
	wp_enqueue_style('loader',get_template_directory_uri().'/css/loader.css',array(),'1.0','all');
	wp_enqueue_style('bootstrap',get_template_directory_uri().'/css/bootstrap.min.css',array(),'1.0','all');

	wp_enqueue_script( 'jquery-new', get_template_directory_uri().'/js/jquery-2.2.3.js', array(), '2.2.3', true );
	wp_enqueue_script( 'bootstrap-min', get_template_directory_uri().'/js/bootstrap.min.js', array('jquery-new'), '2.2.3', true );
	wp_enqueue_script( 'bootsnav', get_template_directory_uri().'/js/bootsnav.js', array('jquery-new'), '2.2.3', true );
	wp_enqueue_script( 'appear', get_template_directory_uri().'/js/jquery.appear.js', array('jquery-new'), '2.2.3', true );
	wp_enqueue_script( 'count-to', get_template_directory_uri().'/js/jquery-countTo.js', array('jquery-new'), '2.2.3', true );
	wp_enqueue_script( 'parallax', get_template_directory_uri().'/js/jquery.parallax-1.1.3.js', array('jquery-new'), '2.2.3', true );
	wp_enqueue_script( 'carousel', get_template_directory_uri().'/js/owl.carousel.min.js', array('jquery-new'), '2.2.3', true );
	wp_enqueue_script( 'cuberportfolio', get_template_directory_uri().'/js/jquery.cubeportfolio.min.js', array('jquery-new'), '2.2.3', true );
	wp_enqueue_script( 'tools', get_template_directory_uri().'/js/jquery.themepunch.tools.min.js', array('jquery-new'), '2.2.3', true );
	wp_enqueue_script( 'revolution', get_template_directory_uri().'/js/jquery.themepunch.revolution.min.js', array('jquery-new'), '2.2.3', true );
	wp_enqueue_script( 'layeranimation', get_template_directory_uri().'/js/revolution.extension.layeranimation.min.js', array('jquery-new'), '2.2.3', true );
	wp_enqueue_script( 'navigation', get_template_directory_uri().'/js/revolution.extension.navigation.min.js', array('jquery-new'), '2.2.3', true );
	wp_enqueue_script( 'parallax2', get_template_directory_uri().'/js/revolution.extension.parallax.min.js', array('jquery-new'), '2.2.3', true );
	wp_enqueue_script( 'slideanims', get_template_directory_uri().'/js/revolution.extension.slideanims.min.js', array('jquery-new'), '2.2.3', true );
	wp_enqueue_script( 'video', get_template_directory_uri().'/js/revolution.extension.video.min.js', array('jquery-new'), '2.2.3', true );
	wp_enqueue_script( 'wow-min', get_template_directory_uri().'/js/wow.min.js', array('jquery-new'), '2.2.3', true );
	wp_enqueue_script( 'functions', get_template_directory_uri().'/js/functions.js', array('jquery-new'), '2.2.3', true );
}

add_action( 'wp_enqueue_scripts', 'blog_script_enqueue' );

function blog_theme_support(){
	add_theme_support( 'title-tag' );
	add_theme_support( 'custom-logo' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'menus' );



	$defaults = array(
	'default-image'          => '',
	'width'                  => 0,
	'height'                 => 0,
	'flex-height'            => false,
	'flex-width'             => false,
	'uploads'                => true,
	'random-default'         => false,
	'header-text'            => true,
	'default-text-color'     => '',
	'wp-head-callback'       => '',
	'admin-head-callback'    => '',
	'admin-preview-callback' => '',
);
	add_theme_support( 'custom-header',$defaults );


	register_nav_menu( 'primary', 'Primary Menu' );

	function read_more($word){
	$content = explode(" ", get_the_content( ));
	$word_limit = array_slice($content, 0 , $word);
	echo implode(" ", $word_limit);
	}


	function get_breadcrumb() {
    echo '<a href="'.home_url().'" rel="nofollow">Home</a>';
    if (is_category() || is_single()) {
        echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;";
        the_category(' &nbsp;&nbsp;&#187;&nbsp;&nbsp; ');
            if (is_single()) {
                echo " &nbsp;&nbsp;&#187;&nbsp;&nbsp; ";
                the_title();
            }
    } elseif (is_page()) {
        echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;";
        echo the_title();
    } elseif (is_search()) {
        echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;Search Results for... ";
        echo '"<em>';
        echo the_search_query();
        echo '</em>"';
    }
}




}



add_action('after_setup_theme','blog_theme_support' );


function widgets(){
	register_sidebar(array(
		'name' => 'Top Header Left Option',
		'description' => 'You can add your top header here.',
		'id' => 'header-left'

	));
	register_sidebar(array(
		'name' => 'Top Header Right Social Option',
		'description' => 'You can add your top header here.',
		'id' => 'header-right'

	));
	register_sidebar(array(
		'name' => 'Header Text Option',
		'description' => 'You can add your header text here.',
		'id' => 'header-text'

	));
	register_sidebar(array(
		'name' => 'Custom Menu Option',
		'description' => 'You can add your custom menu here.',
		'id' => 'custom-menu'

	));

	register_sidebar(array(
		'name' => 'Search Option',
		'description' => 'You can add your search option here.',
		'id' => 'search'

	));

	register_sidebar(array(
		'name' => 'Google Maps',
		'description' => 'You can add your google maps here.',
		'id' => 'maps'

	));
}
add_action('widgets_init' , 'widgets' );
























?>