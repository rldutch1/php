<?php
//PDO connect method:
try {
	$handler = new PDO('mysql:host=localhost;dbname=databaseimage', 'databaseimage', 'databaseimage1'); //Setting the handler. See next line if this line fails.
	$handler->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //Setting the attributes for the handler that we want to see if exception error.
}
//global $handler
catch(PDOException $e) { //Return the PDO exception and naming it $e.
//	echo 'Caught';
//	die('Sorry database problem.'); //Production message.
	echo $e->getMessage(); //Show specific error message. Development.
}

?>
