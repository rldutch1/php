<?php
$db_server = 'localhost';
$db_user = 'user';
$db_password = 'password';
$db_dbname = 'database';

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
