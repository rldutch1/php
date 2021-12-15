<?php
//This file will list all the files in the directory that it is located in.
//Source: http://www.sitepoint.com/forums/showthread.php?907442-List-Out-The-Files-in-a-Directory-for-Download
$thelist = "";
  if ($handle = opendir('.')) {
    while (false !== ($file = readdir($handle))) {
      if ($file != "." && $file != "..") {
        $thelist .= '<li><a href="'.$file.'">'.$file.'</a></li>';
      }
    }
    closedir($handle);
  }
?>
<h1>List of scanned files:</h1>
<ul><?php echo $thelist; ?></ul>
