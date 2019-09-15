<?php
//After working on this file, I found a nice utility called exiftool that works really nice with EXIF information in files. I have found it is more efficient than the PHP exif functions.

//https://hotexamples.com/examples/-/-/exif_read_data/php-exif_read_data-function-examples.html
//$dat = exif_read_data("20190627012940.P6270046.JPG","EXIF");

foreach (glob("*.JPG"|"*.jpg") as $filename) {
    $dat1 = exif_read_data($filename,"EXIF");
    echo "mv " . $dat1["FileName"] . " " . str_replace(" ", "", str_replace(":", "", $dat1["DateTimeOriginal"])) . "." . $dat1["FileName"] . "\n";
}

?>
