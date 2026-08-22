<?php

 function my_theme_assets(){
   $themePath = get_template_directory_uri();

    wp_enqueue_style('tailwind-registration', $themePath . '/assets/css/output.css', array(), filemtime(get_template_directory(). '/assets/css/output.css'));
   

    wp_enqueue_style('main-style', get_stylesheet_uri());

    wp_enqueue_script('main-script', $themePath . '/assets/js/script.js');
 }

 add_action('wp_enqueue_scripts', 'my_theme_assets');

 function post_thumbnail(){
   add_theme_support('post-thumbnails');

   register_nav_menus([
      'primary' => 'Primary Menu' , 
      'footer' => 'Fooeter Menu'
   ]);
 }

 add_action('after_setup_theme','post_thumbnail');
?>