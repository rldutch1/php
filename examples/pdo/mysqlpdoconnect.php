<?php
//Program Author: Robert Holland
//Program Name: pdoconnect.php
//Creation Date: Friday, November 24, 2017 7:50:13 PM
//Last Modified:
//Purpose:
//Request #:
//----------------------------------------------------------------------------
//PDO connect
try {
	$handler = new PDO('mysql:host=servername; dbname=databasename', 'dbusername', 'dbpassword');
	$handler->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e) { //Return the PDO exception "$e".
	//die('Sorry database problem.'); //Production message.
	echo $e->getMessage(); //Show specific error message. Development.
}

//No carriage return after the end. It screws up header information when included.
?>