<?php

include_once('connect_pdo.php');

$query0 = $handler->query('select * from guestbook');
$query1 = $handler->query('select * from guestbook');
$query2 = $handler->query('select * from guestbook');

//Method #1:
echo '<hr /><br />Method 1: Using $r = $query0->fetch() <br /> echo $r[\'message\'];<br />Result: <br />';

// Use a while loop to iterate through the data that is fetched.
	while($r = $query0->fetch()) {
		echo $r['message'], '<br />';
	}


//Method #2:
echo '<hr /><br />Method 2: Using $r = $query1->fetch(PDO::FETCH_ASSOC);
<br />Can use: $r = $query->fetch(PDO::FETCH_NUM);<br />
and $r = $query->fetch(PDO::FETCH_BOTH);<br />print_r($r)<br />Result: <br />';
//$r = $query->fetch(); //Will fetch both the associative and numeric arrays.
//$r = $query->fetch(PDO::FETCH_BOTH); //Will fetch both the associative and numeric arrays (same as above).
//$r = $query->fetch(PDO::FETCH_NUM); //Will fetch the numeric array only.
$r = $query1->fetch(PDO::FETCH_ASSOC); //Will fetch the associative array only.
echo '<pre>', print_r($r), '</pre>'; //This will print whatever is fetched.

//$r = $query->fetch(PDO::FETCH_OBJ); //Will fetch the array as an anonymous object. print_r will show stdClass Object.


//Method #3:
echo '<hr /><br />Method 3: Using $r = $query2->fetch(PDO::FETCH_OBJ)<br />echo $r->message<br />Result: <br />';
while($r = $query2->fetch(PDO::FETCH_OBJ)) { //Iteration through the objects in the anonymous object. 2:50 part 3 of 8.
		echo $r->message, '<br />';//Notice how "message" is addressed directly instead of wrapping it in brackets and single quotes.
}

echo "<br /><br /><a href='index1.php'>Page 2</a><br />";

?>

