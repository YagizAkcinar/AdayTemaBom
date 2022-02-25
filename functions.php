<?php
//CSS Tanımları
function csekle(){

wp_register_style('fonts',  get_template_directory_uri().'https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap', array(), 1, 'all' );
wp_enqueue_style('fonts');


wp_register_style('web-fonts', get_template_directory_uri().'/https://fonts.googleapis.com/css2?family=Grenze+Gotisch:wght@100;200;300;400;500;600;700;800;900&family=Grenze:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap', array(), 1, 'all' );
wp_enqueue_style('web-fonts');


wp_register_style('bootstrap', get_template_directory_uri().'/css/bootstrap.min.css', array(), 1, 'all' );
wp_enqueue_style('bootstrap');


wp_register_style('all', get_template_directory_uri().'/css/all.min.css', array(), 1, 'all' );
wp_enqueue_style('all');


wp_register_style('slick', get_template_directory_uri().'/css/slick.css', array(), 1, 'all' );
wp_enqueue_style('slick');


wp_register_style('simple-line-icons', get_template_directory_uri().'/css/simple-line-icons.css', array(), 1, 'all' );
wp_enqueue_style('simple-line-icons');


wp_register_style('style', get_template_directory_uri().'/css/style.css', array(), 1, 'all' );
wp_enqueue_style('style');

}
add_action('wp_enqueue_scripts', 'csekle');


//JS Tanımları

function jsekle(){

wp_register_script('jQuery', get_template_directory_uri().'/js/jquery.min.js', array(), 1, 1);
wp_enqueue_script('jQuery');

wp_register_script('popper', get_template_directory_uri().'/js/popper.min.js', array(), 1, 1);
wp_enqueue_script('popper');

wp_register_script('bootstrap', get_template_directory_uri().'/js/bootstrap.min.js', array(), 1, 1);
wp_enqueue_script('bootstrap');

wp_register_script('slick', get_template_directory_uri().'/js/slick.min.js', array(), 1, 1);
wp_enqueue_script('slick');

wp_register_script('sticky-sidebar', get_template_directory_uri().'/js/jquery.sticky-sidebar.min.js', array(), 1, 1);
wp_enqueue_script('sticky-sidebar');

wp_register_script('custom', get_template_directory_uri().'/js/custom.js', array(), 1, 1);
wp_enqueue_script('custom');

    
}

add_action('wp_enqueue_scripts', 'jsekle');


//Menü Ekleme

add_theme_support('menus');

register_nav_menus(array('ust-menu' => __('Üst Menü', 'theme')));




      
 
      
      
      
      
          
      
      


?>      