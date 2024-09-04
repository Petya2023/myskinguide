<?php
function myskinguide_files()
{
    wp_enqueue_style('myskinguide-icons', get_theme_file_uri('fontawesome-free-6.6.0-web/css/all.css'));
    wp_enqueue_style('myskinguide_main_styles', get_theme_file_uri('assets/dist/main.css'));
    wp_enqueue_style('bootstrap-style', '//cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css');
    wp_enqueue_script('bootsrap-script', '//cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js');
}

add_action('wp_enqueue_scripts', 'myskinguide_files');
?>