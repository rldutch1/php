<?php

//Display the current filename:
# echo "This filename is: " . basename(__FILE__) . "<br /><br />";

//Use "glob" to collect filenames in a directory and display them:
  $files = glob("*.{avi,mp4,mts,php,png,PNG}", GLOB_BRACE);
   foreach($files as $file) {
	   echo "<a href='" . $file . "' target='_blank'>" . $file . "</a><br />";
	}

?>
