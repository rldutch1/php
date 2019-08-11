<?php
//https://hotexamples.com/examples/-/-/exif_read_data/php-exif_read_data-function-examples.html
//$dat = exif_read_data("20190627012940.P6270046.JPG","EXIF");

foreach (glob("*.JPG"|"*.jpg") as $filename) {
    $dat1 = exif_read_data($filename,"EXIF");
    echo "mv " . $dat1["FileName"] . " " . str_replace(" ", "", str_replace(":", "", $dat1["DateTimeOriginal"])) . "." . $dat1["FileName"] . "\n";
}

?>
