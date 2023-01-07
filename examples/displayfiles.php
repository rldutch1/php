<!DOCTYPE html>
<html>
<head>

<style>
p {background-color: green;}
tr.grn {background-color: #02f543;}
</style>
<script>
</script>
</head>
<body>
<div style='width: 100%; font-size: 40px; font-weight: bold; text-align: center;'>
Rob's Page
</div>
<table width='99%'><caption></caption>
<?php
//Source: https://www.php.net/manual/en/function.is-dir.php
//https://stackoverflow.com/questions/3654295/remove-empty-array-elements
 // findfiles.php  -  what is in directory "videoarchive"
    //$dir    = 'images/videoarchive/'; // path from top

    $dir    = './'; // path from top
    $files = scandir($dir);
    $files_n = count($files);
   
    $i=2; //Starting at 2 to remove "." and ".." directories.
    while($i<=$files_n){
        // "is_dir" only works from top directory, so append the $dir before the file
        if (is_dir($dir.'/'.$files[$i])){  
            $MyFileType[$i] = "" ; // set to empty if a file is found.
            //'. <a href="https://gemini.lan/~rob/' .$files[$i] . '" target="_blank">' . $files[$i] . '</a>'
        } else{
            $MyFileType[$i] = '<tr><td><a href="https://gemini.lan/~rob/' .$files[$i] . '" target="_blank">' . $files[$i] . '</a></td></tr>'  ; // D for Directory
        }
        //echo '<br>'.$i.'. '. $MyFileType[$i].'. ' .$files[$i] ;
        // Check if $MyFileType[$i] is not empty.
        if(!is_null($MyFileType[$i]) && $MyFileType[$i]  !== ''){
        	echo $MyFileType[$i].''; //If not empty, display it.
        };
        
        $i++;
    }

?>
</table>
</body>
</html>

<?php 
//$d = opendir("./");
//while(false !== ($f = readdir($d))) {
//    echo "<br />";
//        $dName = "./" . $f;
//        if(is_dir($dName)) {
//            echo "<b>Works:" . $dName . "</b>";
//        }
//}
?>