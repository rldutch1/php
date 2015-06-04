<?php
echo "<br /><br /><a href='index.php'>Page 1</a><br />";
include_once('connect_pdo.php');

echo '<hr /><br />Part 8 of 8 - Row count. <br />';
echo 'Using the rowCount() method. <br />';

$query = $handler->query('select * from guestbook');
if($query->rowCount()) {
		echo "Number of rows: ", $query->rowCount(),"<br />";
		while($r = $query->fetch(PDO::FETCH_OBJ)){
			echo $r->name, " ", $r->message, " ", $r->posted, "<br />";
		}
	} else {
		echo "No Results";
	}



?>