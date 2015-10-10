<?php
include('pw.php');
include('weightchart.php');
include('test.php');

//JSON Data from weightchart.php.
echo "First One<br />" . $xxx . "<br />";

//The Hello World message from test.php.
echo "<br />" . $xyz . "<br />";


echo "
ColorQube 8700X <br />
vs. Lexmark X748de <br />
vs. HP M575 <br />
vs. Ricoh Aficio MP C305 <br />

";
echo "<br />";

//The Database Username from pw.php.
echo $db_user;

//The JSON from test.php.
echo "<br />Stripped JSON from test.php.<br />" . $RLH;

?>
