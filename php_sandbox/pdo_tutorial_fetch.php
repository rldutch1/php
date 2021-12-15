<?php
//https://www.youtube.com/watch?v=izeoWWYOnoY
	include 'pdo_tutorial_connect.php';

$stmt = $db->query("select * from names");
//Fetch returns the database contents one row at a time and you loop through
//using a while loop. Fetch uses less memory than fetchAll but fetch creates
//more queries because it sends a query to the database for each row it returns.
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
//while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
//while ($row = $stmt->fetch(PDO::FETCH_BOTH)) {

	echo htmlentities($row['firstname']) . " " . htmlentities($row['lastname']) . " " . htmlentities($row['postcode']) . " " . "<br />";
	echo "<pre>" . var_dump($row) . "</pre>";

}

?>