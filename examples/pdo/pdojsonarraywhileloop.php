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
	$handler = new PDO('mysql:host=localhost; dbname=deleteme', 'testing', 'Testing1!');
	$handler->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e) { //Return the PDO exception "$e".
	//die('Sorry database problem.'); //Production message.
	echo $e->getMessage(); //Show specific error message. Development.
}

//No carriage return after the end. It screws up header information when included.

$statement = $handler->prepare("select newname, description from vw_jquery_videos order by newname;");
$statement->execute(); //Run the prepared query. Prevents MySQL injection.
$results=$statement->fetchAll(PDO::FETCH_NUM); //fetchAll creates an array of the data.
$json=json_encode($results);
echo $json . "<br />\r\n";
echo "------------<br />\r\n";
echo "<pre>" . print_r($results) . "</pre>";

//Diplaying each record.
$statement1 = $handler->prepare("select newname, description from vw_jquery_videos order by newname;");
$statement1->execute(); //Run the prepared query. Prevents MySQL injection.

			while($r = $statement1->fetch(PDO::FETCH_BOTH)){
				echo $r[0], $r[1];
			}
?>
