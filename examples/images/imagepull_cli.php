<?php

try {
	//include('x.php');
	$handler = new PDO('mysql:host=127.0.0.1;dbname=thedatabase;', 'theusername', 'thepassword'); //Setting the handler. See next line if this line fails.
	$handler->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //Setting the attributes for the handler that we want to see if exception error.
}
//global $handler
catch(PDOException $e) { //Return the PDO exception and naming it $e.
//	echo 'Caught';
//	die('Sorry database problem.'); //Production message.
	echo $e->getMessage(); //Show specific error message. Development.
}

	$id = htmlentities($argv[1]); //php -f imagepull_cli.php 13
//	$id = htmlentities($_GET['id']); //http://localhost/imagepull_cli.php?id=13
//	$id = "55";
	$query = $handler->prepare("select * from blobimages where id = :id;");
	$query->bindParam(':id',$id);
	$query->execute();

	while($r=$query->fetch(PDO::FETCH_OBJ)){
		$imageData = $r->image;
		$imageType = $r->filetype;
		$imageName = $r->name;
		//Header that gets sent to the browser.
		header("content-type: $imageType");
    //Parse the file extension using strpbrk and str_replace.
    $ext = str_replace("/","",strpbrk($imageType,"/"));
		//Creating the image file that is pulled from the database.
		$thefile = fopen("{$imageName}.{$ext}", "w") or die("Unable to open file!");
    fwrite($thefile, $imageData);
    fclose($thefile);
	}
	/*The blobimages database table:
	+----------+------------------+------+-----+---------+----------------+
	| Field    | Type             | Null | Key | Default | Extra          |
	+----------+------------------+------+-----+---------+----------------+
	| id       | int(11) unsigned | NO   | PRI | NULL    | auto_increment |
	| name     | varchar(255)     | NO   |     | NULL    |                |
	| filetype | varchar(128)     | NO   |     | NULL    |                |
	| image    | longblob         | NO   |     | NULL    |                |
	+----------+------------------+------+-----+---------+----------------+

	//Filetype examples:
	+-----------------+
	| filetype        |
	+-----------------+
	| image/png       |
	| image/jpeg      |
	| application/pdf |
	| image/gif       |
	| image/pjpeg     |
	+-----------------+
	*/
?>
