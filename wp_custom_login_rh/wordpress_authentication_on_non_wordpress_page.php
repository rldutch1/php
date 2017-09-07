<?php
/*
Q: https://wordpress.stackexchange.com/questions/26457/how-to-use-wordpress-authentication-on-non-wordpress-page
A: Just add this at the top of your file:
*/
require_once($_SERVER['DOCUMENT_ROOT'].'/wp-blog-header.php');

// If you run multisite, you might need this to prevent 404 error
header('HTTP/1.1 200 OK');
//Note that the file must be in the same folder as your theme.

//Then you can use is_user_logged_in before executing the rest of the script. If use is not logged in, then just trigger the login form or a login plugin
?>
