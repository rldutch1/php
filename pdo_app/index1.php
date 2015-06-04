<?php
echo "<br /><br /><a href='index2.php'>Page 3</a><br />";

include_once('connect_pdo.php');
require('guestbook_class.php'); //Removed the Guestbook class section below and put it in a separate file.

$query1 = $handler->query('select * from guestbook');
$query2 = $handler->query('select * from guestbook');

//Method #4: Part 4 of 8 - Fetching data into a class.
echo '<hr /><br />Part 4 of 8 - Fetching data into a class. <br />';
echo 'Using the set, fetch, mode method. <br />';
echo '$query1 = $handler->query(\'select * from guestbook\');<br />
$query2 = $handler->query(\'select * from guestbook\');<br /><br />
$query0 = $handler->query(\'select * from guestbook\');<br />
$query0->setFetchMode(PDO::FETCH_CLASS, \'GuestbookEntry\'); //Fetching the Guestbook class above.<br />
	while($r = $query0->fetch()) {<br />
	echo $r->entry, \'&ltbr /&gt\'; //Output the sentence created in the class (guestbook_class.php).<br />
	}<br />

////This class section is in its own class file that is required into this file.<br />
//class GuestbookEntry {<br />
////Creating the properties that are found in the database.<br />
//	public $id, $name, $message, $posted,<br />
//	$entry; //Entry isn\'t a field in the table. It will be constructed.<br />
//<br />
// 	//Implement a constructor inside of the class. The constructor builds the $entry value.<br />
// 	public function __construct() { //There is a double underscore.<br />
// 		$this->entry = "{$this->name} posted: {$this->message}"; //The sentence is built here.<br />
// 		}<br />
//	}<br /><br />
';

////This class section would normally be in its own class file that would be required or included into this file.
//class GuestbookEntry {
////Creating the properties that are found in the database.
//	public $id, $name, $message, $posted,
//	$entry; //Entry isn't a field in the table. It will be constructed.
//
// 	//Implement a constructor inside of the class. The constructor builds the $entry value.
// 	public function __construct() { //There is a double underscore.
// 		$this->entry = "{$this->name} posted: {$this->message}"; //The sentence is built here.
// 		}
//
//	}


// Use a while loop to iterate through the data that is fetched.
//Set fetch mode.
$query0 = $handler->query('select * from guestbook');
$query0->setFetchMode(PDO::FETCH_CLASS, 'GuestbookEntry'); //Fetching the Guestbook class above.
	while($r = $query0->fetch()) {
	//echo '<pre>', print_r($r), '</pre><br />'; //Shows all of the selected fields and the manually created $entry.
	echo $r->entry, '<br />'; //Output the sentence created in the class.
	}


?>

