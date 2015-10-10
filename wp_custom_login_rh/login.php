<?php
require_once('../wp-blog-header.php');
?>

<?php 
	$uid = $_POST['txtuid'];
	$pwd = $_POST['txtpwd'];
 
	if(!user_pass_ok( $uid, $pwd ))
		echo "Login Failed!";
	else
		echo "Welcome {$uid}!!";
 
?>
