<?php
 // Set timezone
 date_default_timezone_set('UTC');
 
 // Start date
 $date = '2009-12-06';
 // End date
 $end_date = '2020-12-31';
 
 while (strtotime($date) <= strtotime($end_date)) {
                echo "$date\n";
                $date = date ("Y-m-d", strtotime("+1 day", strtotime($date)));
 }
 
?>
