<?php 
//Program Author: Robert Holland
//Program Name: randomcharacters.php
//Creation Date: Thursday, September 12, 2019 20:33:43
//Last Modified:
//Purpose: Generate a specified number of random characters.
//Request #:
//----------------------------------------------------------------------------

if ($argc == 2) { //Needed to check for \$argc on Ubuntu because isset(argv[0]) wasn't working.
//echo $argc . "\r\n";	
    $length = $argv[1];
if (is_int(intval($length))) { //Need to check if this is an integer.
//echo "argc is: " . $argc;
//echo $length."\r\n";
$randomname = generateRandomString($length); //Pass the number of random characters to generate.
echo $randomname . "\r\n";
	}
}
else {
//echo "\$argc does not equal 1.\r\n";	
echo "No number given.\r\n";
}

function generateRandomString($length) {
$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'; //Random letters and numbers.
//$characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'; //Random letters only.
//$characters = 'abcdefghijklmnopqrstuvwxyz'; //Random lowercase letters only.
//$characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ'; //Random uppercase letters only.
//$characters = '0123456789'; //Random numbers only.
$charactersLength = strlen($characters);
$randomString = '';
for ($i = 0; $i < $length; $i++) {
$randomString .= $characters[rand(0, $charactersLength - 1)];
}
return $randomString;
}
//$randomname = generateRandomString($length); //Pass the number of random characters to generate.
//echo $randomname . "\r\n";
?>
