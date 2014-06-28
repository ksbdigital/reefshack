<?php 

/* Setup File */
#error_reporting(0);
error_reporting(E_ALL ^ E_NOTICE);

# Database connection
include('config/connection.php');

#Constants:
define('D_TEMPLATE','template');
define('D_VIEW','views');


# Fucntions:
include('functions/sandbox.php');
include('functions/data.php');
include('functions/template.php');

# Site setup:
$debug = data_setting_value($dbc, 'debug-status');

$path = get_path();

$site_title = 'The Reef Shack';

/* If page has a value in url use it else default to home page */ 

if(!isset($path['call_parts'][0]) || $path['call_parts'][0] == '' ) {
	
	//$path['call_parts'][0] = 'home'; // Set $path['call_parts'][0] to equal the value given in the URL
	header('location: home '); //redirect to home page from domain name.
	
}

# Page Setup:
$page = data_page($dbc, $path['call_parts'][0]);




?>