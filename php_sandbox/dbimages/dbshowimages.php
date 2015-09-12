<?php
include('connect_pdo.php');
//http://stackoverflow.com/questions/5999466/php-retrieve-image-from-mysql-using-pdo

	$id = htmlentities($_GET['id']);
	$query = $handler->prepare("select * from blobimages where id = :id;");
	$query->bindParam(':id',$id);
	$query->execute();

	while($r=$query->fetch(PDO::FETCH_OBJ)){
		$imageData = $r->image;
		$imageType = $r->filetype; //The file extension (ie. jpg, png, gif, etc.)
		$imageName = $r->name;
	}

	header("content-type: $imageType"); //Can make it dynamic so that all images will show.
	echo $imageData;
?>

