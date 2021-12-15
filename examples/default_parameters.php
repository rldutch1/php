<?php
echo "Hello World!\r\n<br>";

$a = 0;
// True because $a is set
if (isset($a)) {
  echo "Variable 'a' is set.\r\n<br>";
}

$b = null;
// False because $b is NULL
if (isset($b)) {
  echo "Variable 'b' is set.\r\n<br>";
}
else if (is_null($b)){
	echo "Variable 'b' is not set because it is null.\r\n<br>";
}

//$firstname = null;
//$lastname  = null;

function hello($firstname = null, $lastname = null){
if (isset($firstname) && isset($lastname)) {
echo "Hello {$firstname} {$lastname}\r\n<br>";
}
else if (!isset($lastname)){ //If second argument is not set.
echo "Hello {$firstname}.\r\n<br>";//Only echo the first argument.
}
}

function hello1($firstname){
// True because $a and $b are set
if (isset($firstname)) {
  echo "Hello {$firstname}.\r\n<br>";
}
}

hello1("Robert-hello1");
hello("Robert", "Holland-hello");
hello("Aiko", null); //The second argument must be present even if it is empty.

?>
