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

    if (!empty($argv[1]) && !empty($argv[2])){
	$username = $argv[1];
	$password = $argv[2];
    $hashedpass = password_hash($password, PASSWORD_BCRYPT); //The password_hash function returns a string that contains both the hash and the salt.
    echo "The username is: " . $username . " and password is: " . $hashedpass . "\r\n";
    echo "\r\n";
    echo "update webusers set password = '" . $hashedpass . "' where username = '" . $username . "';\r\n";
    echo "\r\n";


    	if (password_verify($password, $hashedpass)){
    	echo "Password verified, access granted!\r\n";
    	}
    	else{
    		echo "Password not verified, access denied!\r\n";
    	}
		}
		else {
			echo "Username and/or password are blank. Please try again.\r\n";
			echo "Example: php -f bcrypt.php Username Password \r\n";
		}
?>
