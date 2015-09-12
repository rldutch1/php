<?php
class ImageCount {
//Creating the properties that are found in the database.
	public $id,
	$imagecount; //Entry isn't a field in the table. It will be constructed.

//Implement a constructor inside of the class. The constructor builds the $entry value.
	public function __construct() { //There is a double underscore in the __construct method.
		$this->imagecount = "{$this->maxid}";
	}
}

class TemplateExample {
//Creating the properties that are found in the database.
	public $id, $fieldname1, $fieldname2, $fieldname3,
	$somevariable; //somevariable isn't a field in the table. It will be constructed.

 	//Implement a constructor inside of the class. The constructor builds the $somevariable value.
 	public function __construct() { //There is a double underscore in the __construct method.
 		$this->somevariable = "{$this->fieldname1} some text to display {$this->fieldname2} some more text to display {$this->fieldname3}"; //The sentence is built here.
 		}
	}
?>
