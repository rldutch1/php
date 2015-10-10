<?php
session_start();
	if ($_SESSION['username'])
	{

	echo "You are logged in as: " . $_SESSION['username'];
	echo "<br />";
	echo "<a href='logout.php'>Click here to logout.</a>";
	echo "<br />";

include_once('../includes/pw5.php');
include_once('../includes/functions.php');

$id = $_POST['id'];
$query="select id, name from blobimages where id = $id;";
$result=mysql_query($query);
confirm_query($result);

while ($row = mysql_fetch_assoc($result))
$name=$row['name'];
	{
	//echo $row['id'] . " " . $row['name'] . "<br />";
	//echo "<a href=\"http://www.robholland.com/journal.html\"><img src=\"dbshowimages.php?id=12\"></a>";
	//echo "<a href=\"http://www.robholland.com/journal.html\">$name<br /><img src=\"dbshowimages.php?id=$id\"></a> \r\n";
	echo "<a href=\"http://www.robholland.com/php/play/blobimagesmain.php\">$id. $name<br /><img src=\"dbshowimages.php?id=$id\"></a> \r\n";
	
	}
//else
	//die("No data to display!");

//<a href="http://www.robholland.com/journal.html"><img src="dbshowimages.php?id=12"></a>


}
//If the session was not set redirect the user back to the login page.
	else
//	header ("location: ../../play/login.html");
	header ("location: ../../play/jlogin.php");




?>
