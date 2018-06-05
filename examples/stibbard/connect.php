<?php
if(!session_id()) session_start(); //If session has not been started, start it.
//PDO Connect method: MySQL PDO Tutorial Lesson 1 - Connection
//PDO Try/Catch method: MySQL PDO Tutorial Lesson 2 - Error catching
try {
	$handler = new PDO('mysql:host=localhost;dbname=stibbard;', 'stibbard', 'stibbard'); //Setting the handler. See next line if this line fails.
	$handler->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //Setting the attributes for the handler that we want to see if exception error.
}
//global $handler
catch(PDOException $e) { //Return the PDO exception and naming it $e.
//	echo 'Caught';
//	die('Sorry database problem.'); //Production message.
	echo $e->getMessage(); //Show specific error message. Development.
}
//DO NOT PUT A SPACE AFTER THE END TAG. YOU WILL SEE HEADER ALREADY SENT MESSAGES.
?>
