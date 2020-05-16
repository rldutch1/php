<?php

//Display the current filename:
 echo "This filename is: " . basename(__FILE__) . "<br />\r\n";

//Use "glob" to collect filenames in a directory and display them:
	foreach(glob('*.*') as $file) {
		echo "<a href='" . $file . "'>" . $file . "</a>\r\n";
	}
?>

