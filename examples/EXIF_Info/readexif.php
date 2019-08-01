<?php

$dat = exif_read_data("20190627012940.P6270046.JPG","EXIF");
print_r($dat);
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
echo json_encode($dat);
 

?>
