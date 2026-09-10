<?php 

function theme_setup(){
 add_theme_support('custom-logo');
    add_theme_support('custom-header');
    add_theme_support('custom-background');
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));
    register_nav_menus(array(
        "Main_menu" => "Main menu",
        "Footer" => "this is footer"
    ));
    add_post_type_support('page', 'thumbnail');   // featured image
    add_theme_support('post-thumbnails');
    add_post_type_support('page', 'excerpt');
    add_post_type_support('page', 'editor');      // content editor
    add_post_type_support('page', 'comments');    // comments
    add_image_size("card", 400, 300, true);
    // Title
    add_theme_support('title-tag'); 
}
add_action('after_setup_theme', 'theme_setup');