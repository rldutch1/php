<?php
	// 1. Create a database connection:
	$connection = mysql_connect('reallycoolservername', 'theusername', 'thepassword'); //Consider including this from another file.
	if (!$connection) {
		die("Database connection failed: " . mysql_error());
	}
	
	// 2. Select a database to use:
	$db_select = mysql_select_db("thedatabase", $connection);
	if (!$db_select){
		die("Database selection failed: " . mysql_error());
	}
	
?>
