<?php

//Display the current filename:
 echo "This filename is: " . basename(__FILE__) . "<br />\r\n";

//Display all files in a directory using "glob":
	foreach(glob('*.*') as $file) {
		echo "<a href='" . $file . "'>" . $file . "</a>\r\n";
	}
?>

