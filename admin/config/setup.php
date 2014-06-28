<?php

/* Setup File */

error_reporting(0);

# Database connection
include('../config/connection.php');

#Constants:
define('D_TEMPLATE','template');

# Functions:
include('functions/data.php');
include('functions/template.php');
include('functions/sandbox.php');


# Site setup:
$debug = data_setting_value($dbc, 'debug-status');


$site_title = 'The Reef Shack';

/* If page has a vlaue in url use it else default to home page */ 

if(isset($_GET['page'])) {
	
	$page = $_GET['page']; // Set $pageid to equal the value given in the URL
	
} else {
	
	$page = 'dashbaord'; //Set $pageid equal to 1 or the Home page.
}


# Page Setup:
include('config/queries.php');
						


# User Setup:
$user = data_user($dbc, $_SESSION['username']);

?>