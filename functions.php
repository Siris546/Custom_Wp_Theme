<?php
/**
 * Theme functions
 * 
 * @package Aquila
 */

// echo '<pre>';
// print_r(filemtime(get_template_directory().'/style.css'));
// wp_die();

 function aquila_enqueue_scripts(){
    // wp_enqueue_style( 'stylesheet', get_stylesheet_uri(),[],filemtime(get_template_directory().'/style.css'),'all'); //get_template_directory_uri().'/ style.css' ->this can also be used instead of get_stylesheet_uri().
    // wp_enqueue_script('main-js', get_template_directory_uri().'/assets/main.js', [], filemtime(get_template_directory().'/assets/main.js'),true);

    wp_register_style('stylesheet', get_stylesheet_uri(),[],filemtime(get_template_directory().'/style.css'),'all');
    wp_register_script('main-js', get_template_directory_uri().'/assets/main.js', [], filemtime(get_template_directory().'/assets/main.js'),true);

    wp_enqueue_style('stylesheet');
    wp_enqueue_script('main-js');

    // wp_register_style('stylesheet', get_stylesheet_uri(),[],filemtime(get_template_directory().'/style.css'),'all');
    // if( some_condition){
    //     wp_enqueue_style('stylesheet');
    // } this is how we can register and enqueue a style. perks is that we can use the registered style anywhere in the theme and also enqueue it on the basis of some conditions.
 }

 add_action( 'wp_enqueue_scripts', 'aquila_enqueue_scripts');
?>