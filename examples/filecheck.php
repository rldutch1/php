<?php
// ----------------------------------------------------------------------------
// Script Author: Robert Holland
// Script Name: filecheck.php
// Creation Date: Thu Mar 30 2017 09:43:44 GMT-0700 (US Mountain Standard Time)
// Last Modified:
// Copyright (c)2017
// Version: 1.0.0
// Purpose: Check if a file exists on a network share.
// ----------------------------------------------------------------------------

$data = '$file = "\\\\server1\\abc\\123\\test.accdb";
if (is_file($file)) {
	    echo "File exists.\r\n";
}
else {
	    echo "File does not exist.\r\n";
}
?>';

echo nl2br(htmlentities($data)) . "<br /><hr />";

$file = "\\\\server1\\abc\\123\\test.accdb";
if (is_file($file)) {
	    echo "File exists.\r\n";
}
else {
	    echo "File does not exist.\r\n";
}
?>