<?php

function mytheme_script_enque() {

    wp_enqueue_style('mystyle', get_template_directory_uri().'/css/main.css');
    wp_enqueue_script('jqu', get_template_directory_uri().'/js/jquery.min.js',array(), '1.0.0', true);
    wp_enqueue_script('Mjs', get_template_directory_uri().'/js/Mscript.js',array(), '1.0.0', true);
}

 add_action('wp_enqueue_scripts', 'mytheme_script_enque');

add_action( 'wp_ajax_ajax_call', 'ajax_call' );
add_action( 'wp_ajax_nopriv_ajax_call', 'ajax_call' );

function ajax_call(){
	if(!empty($_POST['post_id']))
    {
        $post = get_post( $_POST['post_id'] );

       echo qtrans_use('gu', $post->post_content, fasle);
    }	

    die();
}


 function mytheme_setup(){
     add_theme_support('menus');
     register_nav_menu('primary', 'Primary Header Navigation');
     register_nav_menu('secondary', ' Footer Navigation');
 }
 
 add_action('init', 'mytheme_setup');
 

 
 ?>
 
 <?php 

add_theme_support('custom-background');
add_theme_support('custom-header');
add_theme_support('post-thumbnails');

add_theme_support('post-formats',array('aside', 'image', 'video'));
 ?>


 <?php 

 function mytheme_widget_setup(){

 		   /**
 			* Creates a sidebar
 			* @param string|array  Builds Sidebar based off of 'name' and 'id' values.
 			*/
 			$args1 = array(
 				'name'          => __('Sidebar1'),
 				'id'            => 'sidebar-1',
 				'description'   => 'Top Sidebar',
 				'class'         => 'topside',
 				'before_widget' => '<li id="%1" class="widget %2">',
 				'after_widget'  => '</li>',
 				'before_title'  => '<h2 class="widgettitle">',
 				'after_title'   => '</h2>'
 			);
 		
 			register_sidebar( $args1 );

 			$args2 = array(
 				'name'          => __('Sidebar2'),
 				'id'            => 'sidebar-2',
 				'description'   => 'Bootom Sidebar',
 				'class'         => 'bottomside',
 				'before_widget' => '<li id="%1" class="widget %2">',
 				'after_widget'  => '</li>',
 				'before_title'  => '<h2 class="widgettitle">',
 				'after_title'   => '</h2>'
 			);
 		
 			register_sidebar( $args2 );
 		

 }
 add_action('widgets_init', 'mytheme_widget_setup')


 ?>
