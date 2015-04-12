<?php
echo "<br /><br /><a href='index3.php'>Page 4</a><br />";

include_once('connect_pdo.php');

echo '<hr /><br />Part 5 of 8 - Fetching all of the data without using while loop. <br />';
echo 'Using fetchAll(). <br />';

$query0 = $handler->query('select * from guestbook');
	//echo '<pre>', print_r($query0->fetchAll(PDO::FETCH_ASSOC)), '</pre>'; //fetchAll grabs all of the data.
	$results = $query0->fetchAll(PDO::FETCH_ASSOC);

	if(count($results)) {
		echo 'There are results.';
	}
	else {
		echo 'There are no results.';
	}

	echo "<pre>",print_r($results),"</pre>";


?>

