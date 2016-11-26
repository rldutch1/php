<?php
/**
 * We just want to hash our password using the current DEFAULT algorithm.
 * This is presently BCRYPT, and will produce a 60 character result.
 *
 * Beware that DEFAULT may change over time, so you would want to prepare
 * By allowing your storage to expand past 60 characters (255 would be good)
 */

//Source: http://php.net/manual/en/function.password-hash.php

$filename = $argv[0];
$username = $argv[1];
//$str = $argv[2];
//$password = password_hash($str, PASSWORD_DEFAULT);
$password = password_hash($argv[2], PASSWORD_DEFAULT);
echo "The username is: " . $username . " and password is: " . $password . "\r\n";
echo "update webusers set password = '" . $password . "' where username = '" . $username . "';\r\n";

?>
