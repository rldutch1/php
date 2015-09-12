<?php
include('connect_pdo.php');

$id = htmlentities($_POST['id']);

$statement = $handler->prepare("select id, name from blobimages where id = :id;");
$statement->bindParam(":id", $id);
$statement->execute();

			while($r = $statement->fetch(PDO::FETCH_OBJ)){
			echo "<a href='blobimagesmain.php'>",$r->id, " ", $r->name,  "<br /><img src='dbshowimages.php?id=",$r->id,"'></a> \r\n"; //When the image is clicked the browser will go to blobimagesmain.php.
			}

?>
