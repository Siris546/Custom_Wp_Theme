<?php

/**
 * Theme functions
 * 
 * @package Aquila
 */

use AQUILA_THEME\Inc\AQUILA_THEME as THEME;

// echo '<pre>';
// print_r(get_template_directory_uri());
// wp_die();

if(!defined('AQUILA_DIR_PATH')){
   define('AQUILA_DIR_PATH', untrailingslashit(get_template_directory()));
}

if(!defined('AQUILA_DIR_URI')){
   define('AQUILA_DIR_URI', untrailingslashit(get_template_directory_uri()));
}
// echo '<pre>';
// print_r(AQUILA_DIR_PATH);
// wp_die();

require_once AQUILA_DIR_PATH. '/inc/helpers/autoloader.php';
function aquila_get_theme_instance(){
  THEME::get_instance();
}

aquila_get_theme_instance();

function aquila_enqueue_scripts()
{
   // wp_enqueue_style( 'stylesheet', get_stylesheet_uri(),[],filemtime(get_template_directory().'/style.css'),'all'); //get_template_directory_uri().'/ style.css' ->this can also be used instead of get_stylesheet_uri().
   // wp_enqueue_script('main-js', get_template_directory_uri().'/assets/main.js', [], filemtime(get_template_directory().'/assets/main.js'),true);

   // wp_register_style('stylesheet', get_stylesheet_uri(),[],filemtime(get_template_directory().'/style.css'),'all');
   // if( some_condition){
   //     wp_enqueue_style('stylesheet');
   // } this is how we can register and enqueue a style. perks is that we can use the registered style anywhere in the theme and also enqueue it on the basis of some conditions.
}


