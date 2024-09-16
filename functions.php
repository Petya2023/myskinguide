<?php
function myskinguide_files()
{
    wp_enqueue_script('main-js', get_theme_file_uri('/assets/dist/script.js'), array(), '1.0', true);
    wp_enqueue_style('myskinguide-icons', get_theme_file_uri('fontawesome-free-6.6.0-web/css/all.css'));
    wp_enqueue_style('myskinguide_main_styles', get_theme_file_uri('assets/dist/main.css'));
    wp_enqueue_style('bootstrap-style', get_theme_file_uri('bootstrap-5.3.3-dist/css/bootstrap-grid.css'));
    // wp_enqueue_style('bootstrap-css', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css');
    wp_enqueue_script('bootstrap-js', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js', array('jquery'), null, true);
    // wp_enqueue_script('bootsrap-script', get_theme_file_uri('/bootstrap-5.3.3-dist/js/bootstrap.min.js'), array('jquery'), null, true);
    wp_enqueue_style('font-family', '//rsms.me/inter/inter.css');
    // wp_enqueue_script('splide', 'splide-4.1.3/splide-4.1.3/dist/js/splide.min.js');
}

add_action('wp_enqueue_scripts', 'myskinguide_files');