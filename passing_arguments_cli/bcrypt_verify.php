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
$password = $argv[1];
$hashedpass = $argv[2]; //Use single quotes if you want to paste the hash here or at the CLI.


  if (!empty($password) && !empty($hashedpass)){
    	if (password_verify($password, $hashedpass)){
			echo "Password verified, access granted!\r\n";
    	}
    	else{
    		echo "Password not verified, access denied!\r\n";
    	}
	}
	else {
		echo "Username and/or password are blank. Please try again.\r\n";
		echo "Example: php -f bcrypt_verify.php Holland '$2y$10$xfxl5pY6CP0TGE6CoKmOlO/aYxFo00eptwG4MZKnvo2DXaNM6bBPi'";
	}
?>
