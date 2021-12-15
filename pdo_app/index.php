<?php
echo "<br /><br /><a href='index1.php'>Page 2</a><br />";

include_once('connect_pdo.php');

$query0 = $handler->query('select * from guestbook');
$query1 = $handler->query('select * from guestbook');
$query2 = $handler->query('select * from guestbook');

//Method #1:
echo '<hr /><br />Method 1: <br />';
echo '$query0 = $handler->query(\'select * from guestbook\');<br />
	while($r = $query0->fetch()) {<br />
		echo $r[\'message\'];<br />
	}<br /><br />Result: <br />
';

// Use a while loop to iterate through the data that is fetched.
	while($r = $query0->fetch()) {
		echo $r['message'], '<br />';
	}


//Method #2:
echo '<hr /><br />Method 2: <br />
$query1 = $handler->query(\'select * from guestbook\');<br />
Can use: $r = $query->fetch(PDO::FETCH_NUM);<br />
or $r = $query->fetch(PDO::FETCH_BOTH);<br />
$r = $query1->fetch(PDO::FETCH_ASSOC);<br />
echo \'&ltpre&gt\',print_r($r), \'&lt/pre&gt\';<br />
Result:<br />
';
//echo htmlentities(echo '<pre>',print_r($r), '</pre>';<br />Result: <br />);, ENT_QUOTES);
//$r = $query->fetch(); //Will fetch both the associative and numeric arrays.
//$r = $query->fetch(PDO::FETCH_BOTH); //Will fetch both the associative and numeric arrays (same as above).
//$r = $query->fetch(PDO::FETCH_NUM); //Will fetch the numeric array only.
$r = $query1->fetch(PDO::FETCH_ASSOC); //Will fetch the associative array only.
echo '<pre>', print_r($r), '</pre>'; //This will print whatever is fetched.

//$r = $query->fetch(PDO::FETCH_OBJ); //Will fetch the array as an anonymous object. print_r will show stdClass Object.


//Method #3:
echo '<hr /><br />Method 3:<br />
$query2 = $handler->query(\'select * from guestbook\');<br />
while($r = $query2->fetch(PDO::FETCH_OBJ))<br />
echo $r->message, \'&ltbr /&gt\';//Notice how "message" is addressed directly instead of wrapping it in brackets and single quotes.<br />Result: <br /><br />';
while($r = $query2->fetch(PDO::FETCH_OBJ)) { //Iteration through the objects in the anonymous object. 2:50 part 3 of 8.
		echo $r->message, '<br />';//Notice how "message" is addressed directly instead of wrapping it in brackets and single quotes.
}


?>

