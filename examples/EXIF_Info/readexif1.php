<?php
//https://hotexamples.com/examples/-/-/exif_read_data/php-exif_read_data-function-examples.html
//https://stackoverflow.com/questions/4901133/json-and-escaping-characters
//$dat = exif_read_data("20190627012940.P6270046.JPG","EXIF");
//print_r($dat);

//print_r($dat);
//public static function convert_from_latin1_to_utf8_recursively($dat)
//   {
//      if (is_string($dat)) {
//         return utf8_encode($dat);
//      } elseif (is_array($dat)) {
//         $ret = [];
//         foreach ($dat as $i => $d) $ret[ $i ] = self::convert_from_latin1_to_utf8_recursively($d);
//
//         return $ret;
//      } elseif (is_object($dat)) {
//         foreach ($dat as $i => $d) $dat->$i = self::convert_from_latin1_to_utf8_recursively($d);
//
//         return $dat;
//      } else {
//         return $dat;
//      }
//		}
//
//// Sample use
//// Just pass your array or string and the UTF8 encode will be fixed
//$data = convert_from_latin1_to_utf8_recursively($dat);
//echo json_encode($dat);

/*
Array
(
    [FileName] => 20190627012940.P6270046.JPG
    [FileDateTime] => 1564115349
    [FileSize] => 915268
    [FileType] => 2
    [MimeType] => image/jpeg
    [SectionsFound] => ANY_TAG, IFD0, THUMBNAIL, EXIF, GPS, INTEROP
    [COMPUTED] => Array
        (
            [html] => width="2560" height="1920"
            [Height] => 1920
            [Width] => 2560
            [IsColor] => 1
            [ByteOrderMotorola] => 0
            [ApertureFNumber] => f/2.8
            [UserComment] =>
            [UserCommentEncoding] => UNDEFINED
            [Thumbnail.FileType] => 2
            [Thumbnail.MimeType] => image/jpeg
        )

    [ImageDescription] => OLYMPUS DIGITAL CAMERA
    [Make] => OLYMPUS IMAGING CORP.
    [Model] => TG-1
    [Orientation] => 1
    [XResolution] => 314/1
    [YResolution] => 314/1
    [ResolutionUnit] => 2
    [Software] => Version 1.0
    [DateTime] => 2019:06:27 01:29:41
    [Artist] =>
    [YCbCrPositioning] => 2
    [Copyright] =>
    [Exif_IFD_Pointer] => 194
    [GPS_IFD_Pointer] => 674
    [UndefinedTag:0xC4A5] => PrintIM0300%

8
P` 	

 	'
                           ''''^''''@@@@@@@@@@@@
    [THUMBNAIL] => Array
        (
            [Compression] => 6
            [XResolution] => 72/1
            [YResolution] => 72/1
            [ResolutionUnit] => 2
            [JPEGInterchangeFormat] => 13012
            [JPEGInterchangeFormatLength] => 7302
        )

    [ExposureTime] => 1/160
    [FNumber] => 28/10
    [ExposureProgram] => 5
    [ISOSpeedRatings] => 100
    [UndefinedTag:0x8830] => 1
    [ExifVersion] => 0230
    [DateTimeOriginal] => 2019:06:27 01:29:41
    [DateTimeDigitized] => 2019:06:27 01:29:41
    [ComponentsConfiguration] => 
    [ExposureBiasValue] => 0/10
    [MaxApertureValue] => 200/100
    [MeteringMode] => 5
    [LightSource] => 255
    [Flash] => 16
    [FocalLength] => 450/100
    [MakerNote] => OLYMPUS
    [UserComment] =>
    [FlashPixVersion] => 0100
    [ColorSpace] => 1
    [ExifImageWidth] => 2560
    [ExifImageLength] => 1920
    [InteroperabilityOffset] => 788
    [FileSource] => 
    [CustomRendered] => 0
    [ExposureMode] => 0
    [WhiteBalance] => 1
    [DigitalZoomRatio] => 100/100
    [FocalLengthIn35mmFilm] => 25
    [SceneCaptureType] => 0
    [GainControl] => 0
    [Contrast] => 1
    [Saturation] => 0
    [Sharpness] => 1
    [GPSVersion] => 
    [GPSLatitudeRef] =>
    [GPSLatitude] => Array
        (
            [0] => 0/0
            [1] => 0/0
            [2] => 0/0
        )

    [GPSLongitudeRef] =>
    [GPSLongitude] => Array
        (
            [0] => 0/0
            [1] => 0/0
            [2] => 0/0
        )

    [GPSStatus] => V
    [GPSImgDirectionRef] => M
    [GPSImgDirection] => 32600/100
    [GPSAreaInformation] => UNICODE
    [InterOperabilityIndex] => R98
    [InterOperabilityVersion] => 0100
)

*/

foreach (glob("*.JPG") as $filename) {
    $dat1 = exif_read_data($filename,"EXIF");
    echo "mv " . $dat1["FileName"] . " " . str_replace(" ", "", str_replace(":", "", $dat1["DateTimeOriginal"])) . "." . $dat1["FileName"] . "\n";
}

?>
