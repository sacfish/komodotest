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
    add_menu_page('Komodo Test Plugin Page', 'Komodo Test', 'manage_options', 'komodo-test', 'komodo_page_content', 'dashicons-email-alt2', 26);
}
add_action('admin_menu', 'komodo_add_page');

//Page layout for the plugin data page
function komodo_page_content(){
    return require_once( plugin_dir_path( __FILE__ ) . 'includes/komodo-output-template.php' );
}

//Returns the layout of the form
function komodo_form() {	 
    $content = '';
    $content .= '<form action="/" method="post" class="komodo-form-wrapper">';
    $content .= '<label for="komodo_name">Name</label>';
    $content .= '<input type="text" name="komodo_name" placeholder="Name">';
    $content .= '<label for="komodo_address">Address</label>';
    $content .= '<input type="text" name="komodo_address" placeholder="Address">';
    $content .= '<label for="komodo_email">Email</label>';
    $content .= '<input type="email" name="komodo_email" placeholder="Email">';
    $content .= '<label for="komodo_telephone">Telephone</label>';
    $content .= '<input type="tel" name="komodo_telephone" placeholder="Telephone">';
    $content .= '<label for="komodo_message">Message</label>';
    $content .= '<textarea name="komodo_message" placeholder="Message..." rows="5"></textarea>';
    $content .= '<button type="submit" name="komodo_submit" href="#">Submit</button>';
    $content .= '</form>';
    return $content;
}

//Add the shortcode "[komodo]" which adds the form to the page
add_shortcode('komodo', 'komodo_form');

function komodo_form_capture() {
    if(isset($_POST['komodo_submit'])){
        $name = sanitize_text_field($_POST['komodo_name']);
        $address = sanitize_text_field($_POST['komodo_address']);
        $email = sanitize_email($_POST['komodo_email']);
        $telephone = sanitize_text_field($_POST['komodo_telephone']);
        $message = sanitize_text_field($_POST['komodo_message']);

        $connect = mysql_connect('http://localhost:3306', 'komodotestuser', 'komodotestpass'); 
        if (!$connect) { 
            die('Connection Failed: ' . mysql_error());
        }

        if(!mysqli_select_db($connect, 'komodotestdb')){
            echo 'Database not selected';
        }

        $sql = "INSERT INTO komodo_submissions (komodo_name,komodo_address,komodo_email,komodo_telephone,komodo_message) VALUES ('$name','$address','$email','$telephone','$message')";

        if(!mysqli_query($connect,$sql)){
            echo 'Data not inserted';
        } else {
            echo 'Data inserted';
        }
    }

    header("refresh:2", "url=/");
}
add_action('wp_head', 'komodo_form_capture');
