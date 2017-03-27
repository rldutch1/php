<?php
// Prints the day, date, month, year, time, AM or PM
$date1 = date("l jS \of F Y H:i:s "); //UTC
$dayNumber = date("z") + 1; //Zero based.
echo $dayNumber . "/r/n";
echo $date1 . "/r/n";
?>
