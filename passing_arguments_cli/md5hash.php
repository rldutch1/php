<?php
$filename = $argv[0];
//Take two arguments from the command line and md5 hash the first one. Use quotes on the command line if the argument has spaces in it.
$str = md5($argv[1]);
$str1 = $argv[2];
echo $filename . " says: \r\n";
echo "update webusers set password = '" . $str . "' where username = '".$str1."';\r\n";


?>
