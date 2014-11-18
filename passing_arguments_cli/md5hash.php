
<?php
$str = $argv[1];
$x = md5($str);
echo $x . "\r\n";
echo "update webusers set password = '" . $x . "' where username = 'rob';\r\n";


?>
