<?php 

function cobrakai_files(){
    wp_enqueue_script('main-cobrakai-js', get_theme_file_uri('/build/index.js'), array('jquery'), '1.0', true);
    wp_enqueue_style('google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
    wp_enqueue_style('google-fonts-marker', '//fonts.googleapis.com/css2?family=Permanent+Marker&display=swap');
    wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style('cobrakai_main_styles', get_theme_file_uri('/build/style-index.css'));
    wp_enqueue_style('cobrakai_extra_styles', get_theme_file_uri('/build/index.css'));
}

add_action('wp_enqueue_scripts', 'cobrakai_files');

function cobrakai_features(){
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_image_size('dojoSquare', 200, 200, true);
    add_image_size('dojoBigSquare', 287, 287, true);
    add_image_size('charPortrait', 300, 400, true);
}

add_action('after_setup_theme', 'cobrakai_features');



?>