<?php
//This class section would normally be in its own class file that would be required or included into this file.
class GuestbookEntry {
//Creating the properties that are found in the database.
	public $id, $name, $message, $posted,
	$entry; //Entry isn't a field in the table. It will be constructed.

 	//Implement a constructor inside of the class. The constructor builds the $entry value.
 	public function __construct() { //There is a double underscore in the __construct method.
 		$this->entry = "{$this->name} posted: {$this->message}"; //The sentence is built here.
 		}

	}

class GuestbookEntry1 {
//Creating the properties that are found in the database.
	public $id,
	$entry1; //Entry isn't a field in the table. It will be constructed.

 	//Implement a constructor inside of the class. The constructor builds the $entry value.
 	public function __construct() { //There is a double underscore in the __construct method.
 		$this->entry1 = "{$this->maxid} Guestbook Entries!"; //The sentence is built here.
 		}

	}
?>
