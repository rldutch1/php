<?php

$data='<?php
/* $_GET is set even for command line
 execution, this may depend on your php.ini settings.  $argv suffers from the same
 ambiguity, so isset($argv) may not work either, though it is far less likely to
 be set when accessing over the web.  If you find this does not work, try testing
 for an argument count in $argc.
*/
if (isset($argv)) {
    $argument1 = $argv[1];
    $argument2 = $argv[2];
echo "\r\n";
echo md5($argument1)."\r\n";
echo md5($argument2)."\r\n";
}
else {
    $argument1 = $_GET["argument1"];
    $argument2 = $_GET["argument2"];
echo "\r\n";
echo md5($argument1)."<br />";
echo md5($argument2)."<br />";
echo "Current date and time: " . md5(date("Y-m-d H:i:s"))."<br />";

$dt = new DateTime();
$dt->setTimezone(new DateTimeZone("America/Phoenix"));
$dt->setTimestamp(time());
echo "UTC: " . $dt->format("Y-m-d H:i:su");
}
/*Source: http://stackoverflow.com/questions/9612166/passing-command-line-arguments-to-a-php-script*/
/*Example site: http://www.miraclesalad.com/webtools/md5.php */
?>';

echo nl2br(htmlentities($data)) . "<br /><hr />";

/* $_GET is set even for command line
 execution, this may depend on your php.ini settings.  $argv suffers from the same
 ambiguity, so isset($argv) may not work either, though it is far less likely to
 be set when accessing over the web.  If you find this does not work, try testing
 for an argument count in $argc.
*/
if (isset($argv)) {
    $argument1 = $argv[1];
    $argument2 = $argv[2];
echo "\r\n";
echo md5($argument1)."\r\n";
echo md5($argument2)."\r\n";
}
else {
    $argument1 = $_GET["argument1"];
    $argument2 = $_GET["argument2"];
echo "\r\n";
echo md5($argument1)."<br />";
echo md5($argument2)."<br />";
echo "Current date and time: " . md5(date("Y-m-d h:i:s:m"))."<br />";
echo "UTC: " . date("Y-m-d H:i:su")."<br />";

$dt = new DateTime();
$dt->setTimezone(new DateTimeZone('America/Phoenix'));
$dt->setTimestamp(time());
echo $dt->format("Y-m-d H:i:su");
}
/*Source: http://stackoverflow.com/questions/9612166/passing-command-line-arguments-to-a-php-script*/
/*Example site: http://www.miraclesalad.com/webtools/md5.php */
?>

