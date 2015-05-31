<?php

	include 'pdo_tutorial_connect.php';

foreach($db->query("select * from names") as $row) {
	echo htmlentities($row['firstname']) . " "
	 . htmlentities($row['lastname']) . " "
	  . htmlentities($row['postcode']) . " " . "<br />";
}


?>