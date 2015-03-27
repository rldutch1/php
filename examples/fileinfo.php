<?php
//http://php.net/manual/en/function.finfo-file.php

$finfo = finfo_open(FILEINFO_MIME_TYPE); // return mime type ala mimetype extension
foreach (glob("*") as $filename) {
    echo finfo_file($finfo, $filename) . "\n";
}
finfo_close($finfo);
?>

