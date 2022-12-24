<?php 
echo "
&lt;?php<br />
// Prints the day, date, month, year, military time.<br />
\$date1 = date(\"l jS \of F Y H:i:s \"); //UTC<br />
\$dayNumber = date(\"z\") + 1; //Zero based.<br />
echo \"Day: \" . \$dayNumber . \"&lt;br /&gt;\";<br />
echo \$date1 . \"&lt;br /&gt;\";<br />
?&gt;<br />
";
?>

<?php
echo "<hr />Result:<br />";
// Prints the day, date, month, year, military time.
$date1 = date("l jS \of F Y H:i:s "); //UTC
$dayNumber = date("z") + 1; //Zero based.
echo "Day: " . $dayNumber . "<br />";
echo $date1 . "<br />";
?>
