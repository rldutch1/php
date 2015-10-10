<?php
$db_server = 'localhost';
$db_user = 'dbuser';
$db_password = 'dbpassword';
$db_dbname = 'dbname';

$con = mysqli_connect($db_server, $db_user, $db_password, $db_dbname);
	if(!$con){
			die("Failed to connect to the database: " . mysqli_error($con));
		}
	if (mysqli_connect_errno()){
			die("Error data : " . mysqli_connect_errno()." : ". mysqli_connect_error());
		}
//	else {
//			echo "Connected successfully! <br />\r\n";
//		}
?>
