<?php
#Source: http://www.if-not-true-then-false.com/2010/php-calculate-real-differences-between-two-dates-or-timestamps/
echo 'TimeDifferences.php file. Original name was dateDiff.php<br /><hr /><br />';

  // Set timezone
  date_default_timezone_set("UTC");

  // Time format is UNIX timestamp or
  // PHP strtotime compatible strings
  function dateDiff($time1, $time2, $precision = 6) {
    // If not numeric then convert texts to unix timestamps
    if (!is_int($time1)) {
      $time1 = strtotime($time1);
    }
    if (!is_int($time2)) {
      $time2 = strtotime($time2);
    }

    // If time1 is bigger than time2
    // Then swap time1 and time2
    if ($time1 > $time2) {
      $ttime = $time1;
      $time1 = $time2;
      $time2 = $ttime;
    }

    // Set up intervals and diffs arrays
    $intervals = array('year','month','day','hour','minute','second');
    $diffs = array();

    // Loop thru all intervals
    foreach ($intervals as $interval) {
      // Create temp time from time1 and interval
      $ttime = strtotime('+1 ' . $interval, $time1);
      // Set initial values
      $add = 1;
      $looped = 0;
      // Loop until temp time is smaller than time2
      while ($time2 >= $ttime) {
        // Create new temp time from time1 and interval
        $add++;
        $ttime = strtotime("+" . $add . " " . $interval, $time1);
        $looped++;
      }

      $time1 = strtotime("+" . $looped . " " . $interval, $time1);
      $diffs[$interval] = $looped;
    }

    $count = 0;
    $times = array();
    // Loop thru all diffs
    foreach ($diffs as $interval => $value) {
      // Break if we have needed precission
      if ($count >= $precision) {
	break;
      }
      // Add value and interval
      // if value is bigger than 0
      if ($value > 0) {
	// Add s if value is not 1
	if ($value != 1) {
	  $interval .= "s";
	}
	// Add value and interval to times array
	$times[] = $value . " " . $interval;
	$count++;
      }
    }

    // Return string with times
    return implode(", ", $times);
  }


/*
dateDiff function example usage
echo dateDiff("2010-01-26", "2004-01-26") . "\n";
echo dateDiff("2006-04-12 12:30:00", "1987-04-12 12:30:01") . "\n";
echo dateDiff("now", "now +2 months") . "\n";
echo dateDiff("now", "now -6 year -2 months -10 days") . "\n";
echo dateDiff("2009-01-26", "2004-01-26 15:38:11") . "\n";

Output:

6 years
18 years, 11 months, 30 days, 23 hours, 59 minutes, 59 seconds
2 months
6 years, 2 months, 10 days
4 years, 11 months, 30 days, 8 hours, 21 minutes, 49 seconds

UNIX timestamp and precision examples

echo dateDiff(time(), time()-1000000, 1) . "\n";
echo dateDiff(time(), time()-1000000, 3) . "\n";
echo dateDiff(time(), time()-1000000, 6) . "\n";

Output:

11 days
11 days, 13 hours, 46 minutes
11 days, 13 hours, 46 minutes, 40 seconds

Converting text format back to UNIX timestamp example

$time1 = time();
$time2 = $time1-10000000;
echo $diff = dateDiff($time1, $time2) . "\n";
echo $time1 . "\n";
echo strtotime(" +".$diff, $time2) . "\n";

Output:

3 months, 23 days, 17 hours, 46 minutes, 40 seconds
1264514564
1264514564
*/

/*
echo "Aiko Holland is: " . dateDiff("now", "2015-03-01 00:00:00") . ".<br />";
echo "Jason Holland is: " . dateDiff("now", "2008-04-03 16:09:00") . ".<br />";
echo "Jeanette Holland is: " . dateDiff("now", "1968-12-27 00:00:00") . ".<br />";
echo "Keira Holland is: " . dateDiff("now", "2008-12-01 01:24:00") . ".<br />";
echo "Leah Holland is: " . dateDiff("now", "2004-12-03 16:29:00") . ".<br />";
echo "Oral Lester Smithers is: " . dateDiff("now", "1940-07-12 00:00:00") . ".<br />";
echo "Lisa (Smithers) Eddy is: " . dateDiff("now", "1966-04-26 00:00:00") . ".<br />";
echo "Patricia (Spriggs) Holland is: " . dateDiff("now", "1942-01-02 00:00:00") . ".<br />";
echo "Priscilla (Spriggs) Smithers is: " . dateDiff("now", "1942-01-02 00:00:00") . ".<br />";
echo "Robert D. Spriggs is: " . dateDiff("now", "1915-11-27 00:00:00") . ".<br />";
echo "Robert Holland is: " . dateDiff("now", "1968-07-08 10:07:00") . ".<br />";
echo "Robin Spriggs is: " . dateDiff("now", "1955-01-01 00:00:00") . ".<br />";
echo "Shiela (Smithers) Taylor is: " . dateDiff("now", "1963-04-01 00:00:00") . ".<br />";
echo "Stanley Holland is: " . dateDiff("now", "1968-07-08 10:05:00") . ".<br />";
echo "Vernon C. Holland III is: " . dateDiff("now", "1964-09-09 00:00:00") . ".<br />";
*/

echo "<table>";
echo "<tr><td title='2015-03-01'>Aiko Holland is: " . dateDiff("now", "2015-03-01 00:00:00") . ".</td></tr>";
echo "<tr><td title='2008-04-03 16:09:00'>Jason Holland is: " . dateDiff("now", "2008-04-03 16:09:00") . ".</td></tr>";
echo "<tr><td title='1968-12-27'>Jeanette Holland is: " . dateDiff("now", "1968-12-27 00:00:00") . ".</td></tr>";
echo "<tr><td title='2008-12-01 01:24:00'>Keira Holland is: " . dateDiff("now", "2008-12-01 01:24:00") . ".</td></tr>";
echo "<tr><td title='2004-12-03 16:29:00'>Leah Holland is: " . dateDiff("now", "2004-12-03 16:29:00") . ".</td></tr>";
echo "<tr><td title='1940-07-12'>Oral Lester Smithers is: " . dateDiff("now", "1940-07-12 00:00:00") . ".</td></tr>";
echo "<tr><td title='1966-04-26'>Lisa (Smithers) Eddy is: " . dateDiff("now", "1966-04-26 00:00:00") . ".</td></tr>";
echo "<tr><td title='1942-01-02'>Patricia (Spriggs) Holland is: " . dateDiff("now", "1942-01-02 00:00:00") . ".</td></tr>";
echo "<tr><td title='1942-01-02'>Priscilla (Spriggs) Smithers is: " . dateDiff("now", "1942-01-02 00:00:00") . ".</td></tr>";
echo "<tr><td title='1915-11-27'>Robert D. Spriggs is: " . dateDiff("now", "1915-11-27 00:00:00") . ".</td></tr>";
echo "<tr><td title='1968-07-08 10:07:00'>Robert Holland is: " . dateDiff("now", "1968-07-08 10:07:00") . ".</td></tr>";
echo "<tr><td title='1955-01-01'>Robin Spriggs is: " . dateDiff("now", "1955-01-01 00:00:00") . ".</td></tr>";
echo "<tr><td title='1963-04-01'>Shiela (Smithers) Taylor is: " . dateDiff("now", "1963-04-01 00:00:00") . ".</td></tr>";
echo "<tr><td title='1968-07-08 10:05:00'>Stanley Holland is: " . dateDiff("now", "1968-07-08 10:05:00") . ".</td></tr>";
echo "<tr><td title='1964-09-09'>Vernon C. Holland III is: " . dateDiff("now", "1964-09-09 00:00:00") . ".</td></tr>";
echo "</table>";

//echo "<br />" . dateDiff("now", "1964-09-09 00:00:00") . "<br />";
//echo(strtotime("+5 hours") . "<br>");
$thedays = "167";
$f = strtotime("+167 days");
echo "<br /><br />Password will expire in " . $thedays . " days from now on: " . date('Y-M-d H:i:s', $f) . "<br />";
?>
