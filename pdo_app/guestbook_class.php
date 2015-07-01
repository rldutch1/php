<?php
//This class section would normally be in its own class file that would be required or included into this file.
class GuestbookEntry {
//Creating the properties that are found in the database.
	public $id, $name, $message, $posted,
	$entry; //entry isn't a field in the table. It will be constructed.

 	//Implement a constructor inside of the class. The constructor builds the $entry value.
 	public function __construct() { //There is a double underscore in the __construct method.
 		$this->entry = "{$this->name} posted: {$this->message}"; //The sentence is built here.
 		}

	}


?>
