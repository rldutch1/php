<?php
//After working on this file, I found a nice utility called exiftool that works really nice with EXIF information in files. I have found it is more efficient than the PHP exif functions.

//$img="20190627012932.P6270045.JPG";
//$directory="/home/rob/Downloads/Github/php/examples/EXIF_Info/";

/**
 * This function extracts the EXIF data from a JPG image and convert then convert the GPS coordinates in degree
 *
 * @param $img
 * @param $directory
 *
 */
function readJPGExifData($img, $directory)
{
    $imgDir = $directory . $img;
    //reading exif data
    $exif = exif_read_data($imgDir, 0, true);
    //preparing the GPS coordinates
    $gpsLat = $exif["GPS"]["GPSLatitude"];
    $degLat = $gpsLat[0];
    $minLat = $gpsLat[1];
    $secLat = $gpsLat[2];
    $gpsLng = $exif["GPS"]["GPSLongitude"];
    $degLon = $gpsLng[0];
    $minLon = $gpsLng[1];
    $secLon = $gpsLng[2];
    //converting GPS lat data to degree
    $secLat = $secLat[0] . $secLat[1] . "," . $secLat[2] . $secLat[3] . $secLat[4];
    $minLat2 = $minLat / 60;
    $secLat2 = $secLat * (1 / 3600);
    $lat = $degLat + $minLat2 + $secLat2;
    //Lat coordinate - degree
    //converting GPS long data to degree
    $secLon = $secLon[0] . $secLon[1] . "," . $secLon[2] . $secLon[3] . $secLon[4];
    $minLon2 = $minLon / 60;
    $secLon2 = $secLon * (1 / 3600);
    $lng = $degLon + $minLon2 + $secLon2;
    return $lat;
    return $lng;
    echo $lat . " " . $lng;
    //Long coordinate - degree
    //creating Drupal content with the image lat, lng data
    createContentFromImage($lat, $lng, $img);
    //removing the image to prevent any kind of confusion next time
    @unlink($_SERVER["DOCUMENT_ROOT"] . $imgDir);
}

readJPGExifData("20190627012932.P6270045.JPG","/home/rob/Downloads/Github/php/examples/EXIF_Info/");
?>
