<?php

include_once('connect_pdo.php');

echo '<hr /><br />Part 6 of 8 - Prepared statements to insert data into table. <br />';
echo '. <br />';

//$name = $_POST['name']; //Posted from a form.
//$message = $_POST['message']; //Posted from a form.

$name = "Olga";
$message = "This is a message from Olga.";

//$query0 = $handler->query('select * from guestbook');

//First method using :name, :message.
//$sql = "insert into guestbook (name, message, posted) values (:name,:message,now())";

//Second method using question marks.
$sql = "insert into guestbook (name, message, posted) values (?,?,now())";

$query = $handler->prepare($sql); //The $sql statement is prepared but not executed here.
						//Using prepare() here instead of query(). The difference between the two
						//is that prepare() will not execute the query, it will only prepare it.


//$query->execute(); //This will produce an error that says invalid parameter number: no parameters were bound.
						//This means that we have to bind the values (:name, :message) that we want to insert into the table.

	//First method to remove the error is creating an array to bind the data.
			//	$query->execute(array(
			//		':name' => $name,
			//		':message' => $message
			//	));

	//Second method is using question marks in the data fields.
					$query->execute(array($name, $message));


echo "<br /><br /><a href='index4.php'>Page 5</a><br />";

?>