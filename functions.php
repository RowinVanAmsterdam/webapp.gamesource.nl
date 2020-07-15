<?php

//redirect to home after login
function custom_blockusers_init() {
    if ( is_user_logged_in() && is_admin() && !current_user_can( 'administrator' ) ) {
        wp_redirect( home_url() );
        exit;
    }
}
add_action( 'init', 'custom_blockusers_init' ); // Hook into 'init'

//hide admin bar for all except admins
add_action('after_setup_theme', 'remove_admin_bar');

function remove_admin_bar() {
    if (!current_user_can('administrator') && !is_admin()) {
        show_admin_bar(false);
    }
}

//check user login status
global $userLoginStatus;
$userLoginStatus = is_user_logged_in();

//loginform styles
function my_login_stylesheet() {
    wp_enqueue_style( 'import', get_template_directory_uri() . '/assets/styles_css/import.css' );
}
add_action( 'login_enqueue_scripts', 'my_login_stylesheet' );

add_theme_support( 'post-thumbnails' );

//removes hardcoded image height and width
function remove_img_attr ($html) {
    return preg_replace('/(width|height)="\d+"\s/', "", $html);
}

add_filter( 'post_thumbnail_html', 'remove_img_attr' );

add_action( 'wp_enqueue_scripts', 'my_script_holder' );

function my_script_holder() {
    wp_register_script( 'main', get_template_directory_uri() . '/assets/js/main.js', array(), 1.1, true );
    wp_enqueue_script( 'main' );
}

global $test;

foreach ($_GET as $key => $post_data) {
    if (is_array($post_data)) {
        $test = $post_data;
    } else {
        $test = $post_data;
    }
}

global $path;
global $item;

$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$path = explode("/", $actual_link);
//$item = array_search("reviews",$path,true);
//$item = array_keys($path[0], "previews");
if(in_array("previews", $path))
{
    $item = "Previews";
}

if(in_array("reviews", $path))
{
    $item = "Reviews";
}

if (isset($_POST['inform_submit'])) {
    $inform_name = $_POST['inform_name'];
    $inform_mailFrom = "info@flutcadeau.nl";
    $inform_mailSend = $_POST['inform_email'];
    $subject = 'Cadeau doorgegeven';
    $inform_store = $_POST['inform_store'];
    $inform_link = $_POST['inform_link'];
    $inform_description = $_POST['inform_description'];

    $mailTo = "info@flutcadeau.nl";
    $headers = "From: ".$inform_mailFrom;
    $txt = "Bezoeker: \n".$inform_name."\n\nBezoeker E-mail: \n".$inform_mailSend."\n\nWinkel: \n".$inform_store."\n\nLink naar winkel: \n".$inform_link."\n\nOmschrijving: \n".$inform_description;

    mail($mailTo, $subject, $txt, $headers);
    header("Location: .");
}

define('WP_SCSS_ALWAYS_RECOMPILE', true);

//homepage url
$home = home_url();

//add user role
function xx__update_custom_roles() {
    if ( get_option( 'custom_roles_version' ) < 1 ) {
        add_role( 'user', 'User', array( 'read' => true, 'level_0' => true ) );
        update_option( 'custom_roles_version', 1 );
    }
}
add_action( 'init', 'xx__update_custom_roles' );



