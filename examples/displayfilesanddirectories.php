<?php
//Source: https://www.php.net/manual/en/function.is-dir.php
 // findfiles.php  -  what is in directory "videoarchive"
    //$dir    = 'images/videoarchive/'; // path from top
echo "D=Directory, F=File.";
    $dir    = './'; // path from top
    $files = scandir($dir);
    $files_n = count($files);

   
    $i=0;
    while($i<=$files_n){
        // "is_dir" only works from top directory, so append the $dir before the file
        if (is_dir($dir.'/'.$files[$i])){  
            $MyFileType[$i] = "D" ; // D for Directory
        } else{
            $MyFileType[$i] = "F" ; // F for File
        }
        // print itemNo, itemType(D/F) and itemname
        echo '<br>'.$i.'. '. $MyFileType[$i].'. ' .$files[$i] ;
        //echo '<br>'.$i.'. '. $MyFileType[$i].'. <a href="https://gemini.lan/~rob/' .$files[$i] . '" target="_blank">' . $files[$i] . '</a>' ;
        $i++;
    }
?>
