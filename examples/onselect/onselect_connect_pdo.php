<?php
//Program Author: Robert Holland
//Program Name: onselect_connect1.php
//Creation Date: Sunday, March 18, 2018 5:10:28 PM
//Last Modified:
//Purpose:
//Request #:
//----------------------------------------------------------------------------
//PDO connect
try {
	$handler = new PDO('mysql:host=localhost; dbname=deleteme', 'testing', 'Testing1!');
	$handler->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e) { //Return the PDO exception "$e".
	//die('Sorry database problem.'); //Production message.
	echo $e->getMessage(); //Show specific error message. Development.
}

//No carriage return after the end. It screws up header information when included.
?>