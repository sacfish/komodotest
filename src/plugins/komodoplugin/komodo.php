<?php

/*
Plugin Name: Komodo Test
Plugin URI: 
Description: Plugin that pulls data from a form and presents it somewhere...
Version: 0.1
Author: Isaac Elgie
Author URI: 
*/

//Add a tab in the Wordpress dashboard to display data from the form
function komodo_add_page() {
    add_menu_page('Komodo Test Plugin Page', 'Komodo Plugin', 'manage_options', 'komodo-test', 'komodo_page_content', 'dashicons-email-alt2', 26);
}
add_action('admin_menu', 'komodo_add_page');

//Page layout for the plugin data page
function komodo_page_content(){
    return require_once( plugin_dir_path( __FILE__ ) . 'includes/komodo-output-template.php' );
}

//Returns the layout of the form
function komodo_form() {	 
    $content = include_once( plugin_dir_path( __FILE__ ) . 'includes/komodo-form-template.php' );
    return $content;
}

//Add the shortcode "[komodo]" which adds the form to the page
add_shortcode('komodo', 'komodo_form');

//I couldn't for the life of me work out why I couldn't link the stylesheet... :
add_action( 'wp_enqueue_scripts', 'komodo_css', 50 );
function komodo_css() {
    wp_enqueue_style( 'k-styles', plugin_dir_url( __FILE__ ) . 'komodo-styles.css', array(), '1.0');
}
