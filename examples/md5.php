<?php
/* I actually went back and tested, and $_GET is indeed set even for command line
 execution, this may depend on your php.ini settings.  $argv suffers from the same
 ambiguity, so isset($argv) may not work either, though it's far less likely to
 be set when accessing over the web.  If you find this doesn't work, try testing
 for an argument count in $argc
*/
if (isset($argv)) {
    $argument1 = $argv[1];
    $argument2 = $argv[2];
echo "\r\n";
echo md5($argument1)."\r\n";
echo md5($argument2)."\r\n";
}
else {
    $argument1 = $_GET['argument1'];
    $argument2 = $_GET['argument2'];
echo "\r\n";
echo md5($argument1)."<br />";
echo md5($argument2)."<br />";
}
/*Source: http://stackoverflow.com/questions/9612166/passing-command-line-arguments-to-a-php-script*/
/*Example site: http://www.miraclesalad.com/webtools/md5.php */
?>

