<?php
//https://www.youtube.com/watch?v=w3XUG6oyINI

//class User {
//	public function __construct() { //This is a constructor method. There is a double underscroe.
//			echo 'Hi from constructor';
//		}
//}
//$variable1 = new User();

class User {
	public function __construct($message) { //This is a constructor method. There is a double underscroe.
			echo 'Hi from ' . $message . '<br />';
		}
}

$variable2 = new User('Rob');
$variable3 = new User('Stan');
$variable4 = new User('Tracy');
?>