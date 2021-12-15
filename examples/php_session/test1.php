<?php
include_once('header.php');
$_SESSION["pagename"] = $_SERVER['PHP_SELF'];

echo "Current date and time is: " . $cur_dttm . ".<br />";
echo "Current UTC date and time is: " . $utc_dttm . ".<br />";

?>
