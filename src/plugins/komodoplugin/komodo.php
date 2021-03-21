<?php

/*
Plugin Name: Komodo Test
Plugin URI: 
Description: Plugin that pulls data from a form and presents it somewhere...
Version: 0.1
Author: Isaac Elgie
Author URI: 
*/

function komodo_test_plugin() {	 
    return '<div class="komodo-form-wrapper"><input type="text" placeholder="Name">
    <input type="text" placeholder="Address">
    <input type="email" placeholder="Email">
    <input type="tel" placeholder="Telephone">
    <textarea placeholder="Message..." rows="5"></textarea>
    <button type="submit" href="/">Submit</button></div>';
}

add_shortcode('komodo', 'komodo_test_plugin');