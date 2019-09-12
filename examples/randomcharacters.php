<?php 
//Program Author: Robert Holland
//Program Name: randomcharacters.php
//Creation Date: Thursday, September 12, 2019 20:33:43
//Last Modified:
//Purpose: Generate random characters.
//Request #:
//----------------------------------------------------------------------------

function generateRandomString($length) {
$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
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
$randomname = generateRandomString(64); //Pass the number of random characters to generate.
echo $randomname . "\r\n";
?>
