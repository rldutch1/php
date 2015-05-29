<?php

try {
$db = new PDO('mysql:host=localhost;dbname=testdb;charset=utf8','test','test');

//var_dump($db);
	}

catch(Exception $e) {
		echo "An error has occurred!";
		//echo $e->getMessage();
	}
?>