<?php
session_start();
//http://www.robholland.net/php/examples/php_session/test1.php
//http://www.robholland.net/php/examples/php_session/test2.php

date_default_timezone_set("utc");
$utc_dttm = gmdate("Y-m-d H:i:s",time()+date("Z"));
$dttm_offset = strtotime($utc_dttm) - (420*60); //AZ time offset.
$cur_dttm = date("Y-m-d H:i:s", $dttm_offset);

// Set session variables
$_SESSION["username"] = "TheUserName";//Get this information from the index.php login
$_SESSION["favcolor"] = "green";
$_SESSION["favanimal"] = "duck";
$_SESSION["pagename"] = $_SERVER['PHP_SELF']; //Can keep track of what page the user is on.
$_SESSION["utc"] = gmdate("Y-m-d H:i:s",time()+date("Z"));
$_SESSION["dttm_offset"] = strtotime($_SESSION["utc"]) - (420*60); //AZ time offset.
$_SESSION["curdttm"] = date("Y-m-d H:i:s", $_SESSION["dttm_offset"]);
//PDO connect method:
try {
	$handler = new PDO('mysql:host=localhost;dbname=robdba5', 'robdba5', 'D3v3r3ux!'); //Setting the handler. See next line if this line fails.
	$handler->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //Setting the attributes for the handler that we want to see if exception error.
}
//global $handler
catch(PDOException $e) { //Return the PDO exception and naming it $e.
//	echo 'Caught';
//	die('Sorry database problem.'); //Production message.
	echo $e->getMessage(); //Show specific error message. Development.
}
//Insert user and page information into Journal4.
$stmt = $handler->prepare('INSERT INTO journal4 (cur_dttm, utc_dttm, pagename, username) VALUES (:cur_dttm, :utc_dttm, :pagename, :username);');
$stmt->bindValue(':cur_dttm', $_SESSION["curdttm"]);
$stmt->bindValue(':utc_dttm', $_SESSION["utc"]);
$stmt->bindValue(':pagename', $_SESSION["pagename"]);
$stmt->bindValue(':username', $_SESSION["username"]);
$stmt->execute();

echo "<br />";
echo "<button onclick=\"window.location='destroy_session1.php';\">Logout</button><br />";
?>