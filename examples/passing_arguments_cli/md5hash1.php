<?php
$filename = $argv[0];
//Take one argument from the command line and md5 hash it. Use quotes on the command line if the argument has spaces in it.
$str = $argv[1];
$x = md5($str);
echo $str . " is: $x \r\n";
//echo $x . "\r\n";

?>
