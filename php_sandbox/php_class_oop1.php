<?php
//https://www.youtube.com/watch?v=w3XUG6oyINI

//class User {
//	public function __construct() { //This is a constructor method. There is a double underscroe.
//			echo 'Hi from constructor';
//		}
//}
//$variable1 = new User();

//class User {
//	public function __construct($message) { //This is a constructor method. There is a double underscroe.
//			echo 'Hi from ' . $message . '<br />';
//		}
//}
//
//$variable2 = new User('Rob');
//$variable3 = new User('Stan');
//$variable4 = new User('Tracy');

class User { //

	public $age; //assigning a value to age.
	private $password;

	public function __construct($age) {
			$this->age = $age;
			$this->password = 'asdfsdfd';$password;
		}

	public function getPassword($hint){
			if ($hint == 'getit'){
					return $this->password;
				}
			else {
				return '<br />You don\'t have permission';
				}
		}
}

$rob = new User(46);
echo $rob->age;
echo $rob->getPassword('1getit');


?>