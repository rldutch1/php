<?php

session_start();
session_regenerate_id(true);
	if ($_SESSION['username'])
	{

	echo "You are logged in as: " . $_SESSION['username'];
	echo "<br />";
	echo "<a href='blobimagesmain.php'>Click here to view images.</a>";
	echo "<br />";
	echo "<a href='membersarea.php'>Members area!<br /></a>";
	echo "<a href='logout.php'>Click here to logout.</a><hr /><br />";

require_once('../includes/pw5.php');
require_once('../includes/functions.php');

echo "
<html>
<title>Graphic File Upload Into Database
</title>
<head>
<link rel=\"stylesheet\" type=\"text/css\" href=\"../../css/journal.css\" />
</head>
<body>
<script type=\"text/javascript\">
</script>
<form action=\"dbimages.php\" method=\"POST\" enctype=\"multipart/form-data\">
	<input type=\"file\" name=\"image\"><input type=\"submit\" name=\"submit\" value=\"Upload\">
</form>

";


if(isset($_POST['submit'])){
	$imageName = mysql_real_escape_string($_FILES["image"]["name"]);
	//print_r($_FILES["image"]); //This will print a bunch of jibberish on the screen.
	$imageData = mysql_real_escape_string(file_get_contents($_FILES["image"]["tmp_name"]));
	$imageType = mysql_real_escape_string($_FILES["image"]["type"]);

	if(substr($imageType,0,5) == "image"){ //read the first five characters.
			//echo "Working code"; 08:11
			$query="insert into blobimages (name, filetype, image) values ('$imageName','$imageType','$imageData');";
			$result=mysql_query($query);
			confirm_query($result);
			echo "Image uploaded!<br />";

	}
	else
	{
			echo "Only images are allowed! <br />";
	}
}
}

//If the session was not set redirect the user back to the login page.
	else
//	header ("location: ../../play/login.html");
	header ("location: ../../play/jlogin.php");
//<div><a href="http://www.robholland.com/php/play/dbimages.php"><img src="dbshowimages.php?id=12"></a></div>
echo "</body>
</html>";

?>
