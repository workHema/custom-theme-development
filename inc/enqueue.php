<?php

function link_files(){
$theme_uri = get_template_directory_uri();
wp_enqueue_style('bootstrap.min.css', $theme_uri.'/assets/plugins/bootstrap/bootstrap.min.css');
wp_enqueue_style('ionicons', $theme_uri.'/assets/plugins/Ionicons/css/ionicons.min.css');
wp_enqueue_style('animate', $theme_uri.'/assets/plugins/animate-css/animate.css');
wp_enqueue_style('magnific-popup', $theme_uri.'/assets/plugins/magnific-popup/magnific-popup.css');

wp_enqueue_style('slick', $theme_uri.'/assets/plugins/slick/slick.css');
wp_enqueue_style('style', $theme_uri.'/assets/css/style.css');

// script file  
wp_enqueue_script('jquery', $theme_uri.'/assets/plugins/jquery/jquery.min.js');
wp_enqueue_script(
        'bootstrap',
        $theme_uri . '/assets/plugins/bootstrap/bootstrap.min.js',
        array('jquery'),
        '3.1.0',
        true
    );

    wp_enqueue_script('jquery');
    // Slick
    wp_enqueue_script(
        'slick',
        $theme_uri . '/assets/plugins/slick/slick.min.js',
        array('jquery'),
        null,
        true
    );

    // Magnific Popup
    wp_enqueue_script(
        'magnific-popup',
        $theme_uri . '/assets/plugins/magnific-popup/jquery.magnific-popup.min.js',
        array('jquery'),
        null,
        true
    );

    // Shuffle
    wp_enqueue_script(
        'shuffle',
        $theme_uri . '/assets/plugins/shuffle/shuffle.min.js',
        array('jquery'),
        null,
        true
    );

    // SyoTimer
    wp_enqueue_script(
        'syotimer',
        $theme_uri . '/assets/plugins/SyoTimer/jquery.syotimer.min.js',
        array('jquery'),
        null,
        true
    );

    // Google Maps API
    wp_enqueue_script(
        'google-maps',
        'https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places',
        array(),
        null,
        true
    );

    // Google Map
    wp_enqueue_script(
        'google-map',
        $theme_uri . '/assets/plugins/google-map/map.js',
        array('google-maps'),
        null,
        true
    );

    // Main Script
   wp_enqueue_script('main-script', $theme_uri.'/assets/js/script.js', array('jquery', 'slick'), null, true);
 

}

add_action('wp_enqueue_scripts', 'link_files');




//  <!-- Main jQuery -->
//     <script src="plugins/jquery/jquery.min.js"></script>
//     <!-- Bootstrap 3.1 -->
//     <script src="plugins/bootstrap/bootstrap.min.js"></script>
//     <!-- slick Carousel -->
//     <script src="plugins/slick/slick.min.js"></script>
//     <script src="plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
//     <!-- filter -->
//     <script src="plugins/shuffle/shuffle.min.js"></script>
//     <script src="plugins/SyoTimer/jquery.syotimer.min.js"></script>
//     <!-- Google Map -->
//     <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU&libraries=places"></script>
//     <script src="plugins/google-map/map.js"></script>

//     <script src="js/script.js"></script>
