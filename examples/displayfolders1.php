<?php
   //$all_dirs = glob($somePath . '/*' , GLOB_ONLYDIR);
   $all_dirs = glob($somePath . './*' , GLOB_ONLYDIR);
   //print_r($all_dirs);
   foreach($all_dirs as $dirs){
   	echo "Directoryname: " . $dirs . "\r\n";
   }
?>
