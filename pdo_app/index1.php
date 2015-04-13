<?php
echo "<br /><br /><a href='index2.php'>Page 3</a><br />";

include_once('connect_pdo.php');
require('guestbook_class.php'); //Removed the Guestbook class section below and put it in a separate file.

$query1 = $handler->query('select * from guestbook');
$query2 = $handler->query('select * from guestbook');

//Method #4: Part 4 of 8 - Fetching data into a class.
echo '<hr /><br />Part 4 of 8 - Fetching data into a class. <br />';
echo 'Using the set, fetch, mode method. <br />';

////This class section would normally be in its own class file that would be required or included into this file.
//class GuestbookEntry {
////Creating the properties that are found in the database.
//	public $id, $name, $message, $posted,
//	$entry; //Entry isn't a field in the table. It will be constructed.
//
// 	//Implement a constructor inside of the class. The constructor builds the $entry value.
// 	public function __construct() {
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

