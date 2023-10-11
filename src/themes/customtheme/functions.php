<?php

function customtheme_theme_support(){
    //Adds dynamic title tag support
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme','customtheme_theme_support');

function customtheme_register_styles() {

    wp_enqueue_style('customtheme-style', get_template_directory_uri() . "/style.css", array('customtheme-reset','customtheme-theme'), rand(111,9999), 'all');
    wp_enqueue_style('customtheme-reset',  get_template_directory_uri() . "/assets/css/reset.css", array(),  rand(111,9999), 'all');
    wp_enqueue_style('customtheme-theme', get_template_directory_uri() . "/assets/css/theme.css", array(), rand(111,9999), 'all');
}

add_action('wp_enqueue_scripts','customtheme_register_styles');

function customtheme_register_scripts() {
    
    wp_enqueue_script('customtheme-main', get_template_directory_uri() . "/assets/js/main.js", array(), rand(111,9999), 'all');
}

add_action('wp_enqueue_scripts','customtheme_register_scripts');



function custom_last_4_posts_query() {
    $args = array(
        'posts_per_page' => 4,
        );
        $query = new WP_Query($args);
        
        return $query;
    }
?>