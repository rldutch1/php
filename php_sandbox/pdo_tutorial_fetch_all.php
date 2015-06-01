<?php
//https://www.youtube.com/watch?v=izeoWWYOnoY
	include 'pdo_tutorial_connect.php';

$stmt = $db->query("select * from names");
//Fetch_all returns all of the data from the table at once and you use
//PHP to loop through the data. FetchAll uses more memory because it returns
//the entire table to the $results.

$results = $stmt->fetchAll(); //Gives both numeric and associative results. Similar to PDO::FETCH_BOTH.
echo "Both numeric and associative results are the same.<br />";
foreach($results as $row){
echo "<br /> Displaying numeric results.<br />";
	$firstname = htmlentities($row['1']);
	$lastname = htmlentities($row['2']);
	$postcode = htmlentities($row['3']);
	echo $firstname . ' ' .$lastname . ' ' . $postcode . "<br />";

echo "<br /> Displaying associative results.<br />";
	$firstname = htmlentities($row['firstname']);
	$lastname = htmlentities($row['lastname']);
	$postcode = htmlentities($row['postcode']);
	echo $firstname . ' ' . $lastname . ' ' . $postcode . '<br />';
}

?>