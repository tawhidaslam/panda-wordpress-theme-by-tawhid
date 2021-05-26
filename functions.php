<?php
function panda_functions(){
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('custom-header');
    add_theme_support('post-thumbnails');

    register_nav_menus(array(
        'primary'     => 'PRIMARY MENU',
    ));
}
add_action('after_setup_theme','panda_functions');

add_image_size('blog-post-image-size','400','250');


function panda_css_js(){

    wp_enqueue_style('bootstrap', get_template_directory_uri().'/css/bootstrap.min.css');
    wp_enqueue_style('main-style',get_stylesheet_uri());

    wp_enqueue_script('jquery');
    wp_enqueue_script('Popper', get_template_directory_uri().'/js/popper.min.js');
    wp_enqueue_script('slimjs', get_template_directory_uri().'/js/jquery-slim.min.js');
    wp_enqueue_script('jquery-ui-datepicker');
    wp_enqueue_script('custom', get_template_directory_uri().'/js/custom.js');


}
add_action('wp_enqueue_scripts','panda_css_js');

function panda_sidebar_register(){
 register_sidebar(array(
     'id'     =>      'main-sidebar',
     'name'   =>      'Main sidebar',
     'before_widget' => '<div class="wid-style">',
     'after_widget'  => '</div>',
     'before_title'  => '<h2 class="text-dark">',
     'after_title'   => '</h2>'
 ));
 register_sidebar(array(
    'id'     =>      'footer_one',
    'name'   =>      'Footer One',
    'before_widget' => '<div class="wid-style">',
    'after_widget'  => '</div>',
    'before_title'  => '<h2 class="text-dark">',
    'after_title'   => '</h2>'
));
register_sidebar(array(
    'id'     =>      'footer_two',
    'name'   =>      'Footer two',
    'before_widget' => '<div class="wid-style">',
    'after_widget'  => '</div>',
    'before_title'  => '<h2 class="text-dark">',
    'after_title'   => '</h2>'
));
register_sidebar(array(
    'id'     =>      'footer_three',
    'name'   =>      'Footer three',
    'before_widget' => '<div class="wid-style">',
    'after_widget'  => '</div>',
    'before_title'  => '<h2 class="text-dark">',
    'after_title'   => '</h2>'
));
register_sidebar(array(
    'id'     =>      'footer_copyright',
    'name'   =>      'Footer Copyright',
    'before_widget' => '<div class="wid-style">',
    'after_widget'  => '</div>',
    'before_title'  => '<h2 class="text-dark">',
    'after_title'   => '</h2>'
));
}
add_action('widgets_init','panda_sidebar_register');

?>
