<?php

function s1_security_scripts_and_styles() {

    $ver = '1.0.0';
    
    wp_register_style('maincss', get_template_directory_uri() . '/assets/css/main.css', array(), $ver, 'all');
    wp_enqueue_style('maincss');

    wp_register_script('mainjs', get_template_directory_uri() . '/assets/js/main.js', 'NULL', $ver, false);
    wp_enqueue_script('mainjs');

    wp_register_style('trazimcss', get_template_directory_uri() . '/assets/css/trazim.css', array(), $ver, 'all');
    wp_enqueue_style('trazimcss');

    wp_register_style('uslugecss', get_template_directory_uri() . '/assets/css/usluge.css', array(), $ver, 'all');
    wp_enqueue_style('uslugecss');

    wp_enqueue_style( 'mytheme-icons', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css', array());
}

add_action('wp_enqueue_scripts', 's1_security_scripts_and_styles');