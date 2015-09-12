<?php

include('connect_pdo.php');

echo "
<html>
<title>DBImages</title>
<head>
<link rel='stylesheet' type='text/css' href='filename.css' />
</head>
<style>
body
{
background-color:#c0c0c0;
}
</style>
<body>
<table>
<tr>
<td><a href='blobimagesmain.php'>Click here to view images.</a></td>
</tr>
</table>
<br /><br />
<script type='text/javascript'>
</script>
<form action='dbimages.php' method='POST' enctype='multipart/form-data'>
	Insert image into database:<br />
	<input type='file' name='image'><input type='submit' name='submit' value='Upload'>
</form>

";


if(isset($_POST['submit'])){
	$imageName = htmlentities($_FILES["image"]["name"]);
	$imageData = file_get_contents($_FILES["image"]["tmp_name"]);
	//print_r(file_get_contents($_FILES["image"]["tmp_name"])); //This will print a bunch of jibberish on the screen.
	$imageType = htmlentities($_FILES["image"]["type"]);
	$imageSize = getimagesize($_FILES["image"]["tmp_name"]);
	$imageinfo = substr($imageType,0,5);

	if(substr($imageType,0,5) == "image"){ //read the first five characters.
			$statement = $handler->prepare("insert into blobimages (name, filetype, image) values (:imageName, :imageType, :imageData);");
			$statement->bindParam(":imageName", $imageName);
			$statement->bindParam(":imageData", $imageData, PDO::PARAM_LOB); //PDO::PARAM_LOB is used to stream large binary objects
			$statement->bindParam(":imageType", $imageType);
			$statement->execute();
			echo "Image uploaded!<br />";

	}
	else
	{
			echo "Only images are allowed! <br />";
	}
}

echo "</body>
</html>";

?>
