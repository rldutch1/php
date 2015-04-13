<?php
//http://stackoverflow.com/questions/4356289/php-random-string-generator

//$length1 = $argv[1];
//echo $length1, " \r\n";

function generateRandomString($length = 10) { // default length is 10.
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

//Output the random string with the call below:

// Echo the random string.
// Optionally, you can give it a desired string length.
//echo "The random string is: ", generateRandomString(), "\r\n"; //Can change length in parenthesis.

?>
<?php
//$filename = $argv[0];
////Take one argument from the command line and md5 hash it. Use quotes on the command line if the argument has spaces in it.
//$str = $argv[1];
//$x = md5($str);
////echo $x . "\r\n";
//echo $filename . " says: \r\n";
//echo "update webusers set password = '" . $x . "' where username = 'rob';\r\n";


?>
