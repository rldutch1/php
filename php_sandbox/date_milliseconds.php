<?php
echo "------\r\n<br />";
echo "Source: https://stackoverflow.com/questions/17909871/getting-date-format-m-d-y-his-u-from-milliseconds/17909891" . "\r\n<br />";

echo "------\r\n<br />";
echo "Date: " . date("Y/m/d H:i:s.u") . " <-- Unformatted milliseconds. \r\n<br />"; //Using date() function.

echo "------\r\n<br />";
$micro_date = microtime();
$date_array = explode(" ",$micro_date);
$date = date("Y-m-d H:i:s",$date_array[1]); //Appending microtime() function to date() function.
echo "Date: $date:" . $date_array[0]." <-- Milliseconds defined. \r\n<br />";

echo "------\r\n<br />";
$t = microtime(true);
$micro = sprintf("%06d",($t - floor($t)) * 1000000);
$d = new DateTime( date('Y-m-d H:i:s.'.$micro, $t) ); //Using dateTime() function.

print "Date: " . $d->format("Y-m-d H:i:s.u") . " <-- Milliseconds formatted. \r\n<br />"; // note at point on "u"
echo "------\r\n<br />";

print "20 Digit Date: " . $d->format("YmdHisu") . " <-- Nice 20 Digit Timestamp. \r\n<br />"; // note at point on "u"
echo "------\r\n<br />";

?>