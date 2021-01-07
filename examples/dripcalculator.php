<!DOCTYPE HTML>  
<html>
<head>
</head>
<body>  

<?php
// define variables and set to empty values
$millileters = $minutes = $sdf = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
$millileters = test_input($_POST["mils"]);
$minutes = test_input($_POST["minutes"]);
$sdf = test_input($_POST["sdf"]);

//  $millileters = 1000;
//  $minutes = 30;
//  $sdf = 10;
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
//	$minutes = $hours * 60; //Not needed because the form is asking for minutes.
	$gtt_min = (($millileters / $minutes) * $sdf);

?>

<h2>Drip Calculator</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
<table>
  <tr><td>Millileters: </td><td><input type="text" name="mils"></td></tr>
  <tr><td>Minutes: </td><td><input type="text" name="minutes"></td></tr>
  <tr><td>Standard Drip Factor: </td><td><input type="text" name="sdf"></td></tr>
  <tr><td colspan="2" align="right"><input type="submit" name="submit" value="Submit"> </td></tr> 
</table>
</form>

<?php
echo "<br /><hr />Formula: ((" . $millileters . " / " . $minutes . ") " . $sdf . ").<br />";
echo "<br /><hr /><b>" . $millileters . " mL</b> over <b>" . $minutes . " minutes</b> with a standard drip factor of <b>" . $sdf . "</b> is: <b>" . $gtt_min . "</b> drops/min";
	
?>

</body>
</html>