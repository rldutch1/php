<?php
$filename = $argv[0];
//Take two arguments from the command line and md5 hash the first one. Use quotes on the command line if the argument has spaces in it.
$str = md5($argv[1]);
$str1 = $argv[2];
echo $filename . " says: \r\n";
echo "update webusers set password = '" . $str . "' where username = '".$str1."';\r\n";

/*

//Some sample code to update old md5 logins to new bcrypt without the end user knowing:
//http://stackoverflow.com/questions/31721348/verifying-md5-passwords-using-password-verify
//What you can do is to hash the already MD5-hashed passwords via password_hash() and put an
//additional flag for these old passwords in your database, so you know to double-verify
//them afterwards.

$passwordCompare = ($passwordIsOldFlag === true)
    ? md5($passwordInput)
    : $passwordInput;

if (password_verify($passwordCompare, $passwordHash))
{
    if ($passwordisOldFlag === true)
    {
        $passwordNewHash = password_hash($passwordInput, PASSWORD_DEFAULT);

        // Here, you'd update the database with the new, purely bcrypt hash
        // and set your passwordIsOldFlag to 0 as well
    }
}

*/
?>
