<?php
require_once('../includes/pw5.php');
require_once('../includes/functions.php');

if(isset($_GET['id']))
{
	$id = mysql_real_escape_string($_GET['id']);
	$query = "select * from blobimages where id = '$id';";
	$query1 = "select id, name from blobimages order by id;";
	$query2 = "select count(*) from blobimages;";
	
	$result = mysql_query($query);
	confirm_query($result);
	$result1 = mysql_query($query1);
	confirm_query($result1);
	$result2 = mysql_query($query2);
	confirm_query($result2);
	
	while($row = mysql_fetch_assoc($result))
	{
		$imageData = $row["image"];
		$imageType = $row["filetype"];
		$imageName = $row["name"];
	}
//	header("content-type: image/jpeg");
	
	header("content-type: image/$imageType"); //Can make it dynamic so that all images will show.
	echo $imageData . "<br />";
	//echo $imageName . "<br />";

}
else
{
	echo "Error!<br />";
}


?>

