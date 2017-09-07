<?php //I Google searched for: "How to use Wordpress wp-blog-header for authentication". ?>

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

/*
https://stackoverflow.com/questions/29966695/wordpress-how-to-use-authentication-for-other-code
You only need to require 'wp-load.php' in your seperate PHP file. wp-load.php is in the root of your WordPress installation. You should modify the path if the script is somewhere else. Like this,
*/
<?php

    require_once 'wp-load.php';

    if( is_user_logged_in() ) {
        // true
    } else {
        // false
    }

?>

<?php
//https://stackoverflow.com/questions/2810124/how-to-add-a-php-page-to-wordpress/39800534#39800534
?>

<?php
//https://stackoverflow.com/questions/22748947/how-to-authenticate-a-wordpress-user-in-external-script
/*
For anyone else who finds this I simply had to add some global variables as well as passed a string username into wp_authenticate instead of the user id and finally included wp-blog-header.php instead of wp-load.php. Here is my final code:
*/
function authentication ($user, $pass){
  global $wp, $wp_rewrite, $wp_the_query, $wp_query;

  if(empty($user) || empty($pass)){
    return false;
  } else {
    require_once('/home/USERNAME/public_html/DOMAIN/wp-blog-header.php');
    $status = false;
    $auth = wp_authenticate($user, $pass );
    if( is_wp_error($auth) ) {
      $status = false;
    } else {
      $status = true;
    }
    return $status;
  }
}
?>
