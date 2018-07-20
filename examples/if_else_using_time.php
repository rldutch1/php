<?php
//session_start();
//session_regenerate_id(true);
$h = '7';// Hour for time zone goes here e.g. +7 or -4, just remove the + or -
$hm = $h * 60; //minutes
$ms = $hm * 60; //milliseconds
//$gmdate = gmdate('Y-m-d H:i:s', time()-($ms)); // the '-' (Minus sign) can be switched to a plus if that's what your time zone is.
//echo '<br />Your current time now is: ' . $gmdate . '.<br />' ;
//echo 'Your current hour is: ' . $gmdate = gmdate('H', time()-($ms));
$gmdate = gmdate('H', time()-($ms));

if ($gmdate<"12")
  {
  echo "The hour is: " . $gmdate . " Have a good morning!";
  }
elseif ($gmdate<"18")
  {
  echo "The hour is: " . $gmdate . " Have a good afternoon!";
  }
else
  {
  echo "The hour is: " . $gmdate . " Have a good night!";
  }
?>
