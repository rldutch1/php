<?php
//Function Example Here
include_once('../includes/pw5.php');
require_once('../includes/functions.php');

function imageCount() { //Show the number of images in the database.
	$query2 = "select max(id) maxid from blobimages;";
	$result2 = mysql_query($query2);
	confirm_query($result2);
	while($row = mysql_fetch_row($result2)){
		$maxid = $row[0];
		return $maxid; //Function Example: had to use (return) to get imageCount value to show up.
	}
}


?>

