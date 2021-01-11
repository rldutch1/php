<html>

<?php

?>
	<head><h1>PHP Loops</h1>
		<title>PHP Loops</title>

	</head>
	<body>
	<b>For Loop</b><br />
<b>Syntax:</b><br />
for (init counter; test counter; increment counter) {<br />
  code to be executed for each iteration;<br />
}<br />
<br />
<b>Example:</b><br />
		for ($count=0; $count <= 10; $count++) {<br />
			echo "Count is: " . $count . ", <br />";<br />
			}<br />
<br />
	<?php
	echo "<b>Output:</b><br />";
		for ($count=0; $count <= 10; $count++) {
			echo "Count is: " . $count . ", <br />";
			}
	?>
<br /><hr /><br />
	<b>Foreach Loop - used on arrays.</b><br />
<b>Syntax:</b><br />
	foreach ($array as $value) {<br />
  	code to be executed;<br />
}<br />
<br />
	Unlike the "for" statement that works on a boolean, the "foreach" only works on an array.<br />
	foreach looks at each item in the $array and if there are items still in the array, each one will become the $value.<br />
	The $value is a temporary variable that can be referenced in the statement. It is created on the fly using the "as" keyword.<br />
<br />
<b>Example:</b><br />
		$ages = array(4, 8, 15, 16, 23, 42);<br />
		// using each value
		foreach ($ages as $age) {<br />
			echo "Age is " . $age;<br />
		}<br />
<br />
<b>Output:</b><br />
	<?php
		$ages = array(4, 8, 15, 16, 23, 42);
		// using each value
		foreach ($ages as $age) {
			echo "Age is " . $age . "<br />";
		}
?>
<br /><hr /><br />
<b>Foreach Loop - used on arrays and associative arrays.</b><br />
<p>
Using foreach loops on an associative array.<br />
foreach can take each array as a key:value pair.<br />
<br />
<b>Syntax:</b><br />
	foreach ($array as $key => $value){<br />
		code to be executed;<br />
	}<br />
The $key is the $position of the object in the $array. In the array below, the number 4 ($value) is in position zero, 8 ($value) is in position one, etc.
<br />
<br />
<b>Example:</b><br />
		$ages = array(4, 8, 15, 16, 23, 42);<br />
		foreach($ages as $position => $value) {<br />
			echo $position . ": " . $value;<br />
		}<br />
<br />
<b>Output:</b><br />

<?php
		foreach($ages as $position => $key) {
			echo $position . ": " . $key . "<br />";
			}
		echo "<br />";
?>

<br />
<b>Another example with strings and integers in the associative array:</b><br />
		$prices = array("Brand New Computer" => 2000, "1 month in Lynda.com Training Library" => 25, "Learning PHP" => "priceless");<br />
		foreach($prices as $key => $value) {<br />
			if (is_int($value)) { //is_int looks for integers.<br />
				echo $key . ": $" . $value . ".00";<br />
				}<br />
			else {<br />
				echo $key . ": " . $value; //If not an integer then just print it.<br />
				}<br />
		}<br />
<br />
<b>Output:</b><br />
<?php
//Another example:
		$prices = array("Brand New Computer" => 2000, "1 month in Lynda.com Training Library" => 25, "Learning PHP" => "priceless");
		foreach($prices as $key => $value) {
			if (is_int($value)) {
				echo $key . ": $" . $value . ".00<br />"; //is_int looks for integers.
				}
			else {
				echo $key . ": " . $value . "<br />"; //If not an integer then just print it.
				}
		}
	?>
<br /><hr /><br />
	<b>Do While Loop.</b><br />
<br />
<b>Syntax:</b><br />
do {<br />
code to be executed;<br />
} <br />
while (condition is met);<br />
<br />
<b>Example:</b><br />
		$x = 0;<br />
		do {<br />
  		echo "The number is: $x";<br />
  		$x++;<br />
		} <br />
		while ($x <= 10);<br />
<br />
<b>Output:</b><br />
	<?php
		$x = 0;
		do {
  		echo "The number is: $x <br>";
  		$x++;
		} while ($x <= 10);
	?>

<br /><hr /><br />
	<b>While Loop.</b><br />
<br />
<b>Syntax:</b><br />
		while($x <= 100) {<br />
  		code to be executed;<br />
  	}<br />
  	$x+=10;<br />
<br />
<b>Example:</b><br />
		$x = 0;<br />
		while($x <= 100) {<br />
  		echo "The number is: $x";<br />
  		$x+=10;<br />
		}<br />
<br />
<b>Output:</b><br />
	<?php
		$x = 0;
		while($x <= 100) {
  		echo "The number is: $x <br>";
  		$x+=10;
		}
	?>
<br /><hr /><br />
</body>
</html>