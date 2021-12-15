<?php
//Generate random string of characters. The number of characters depends on the integer entered as an argument.

include('random1.php');
$size = $argv[1];
echo generateRandomString($size), "\r\n";

?>
