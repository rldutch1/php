<html>
<!-- 7.Control Structures Part 2 Loops.mp4 -->
<!-- 11:10 foreach Loops -->
<?php
/*
Syntax:
	foreach ($array as $value)
		statement;

	Unlike the "for" statement that works on a boolean, the "foreach" only works on an array.
	foreach looks at each item in the $array and if there are items still in the array, each one will become the $value.
	The $value is a temporary variable that can be referenced in the statement. It is created on the fly using the "as" keyword.
*/
?>
	<head>
		<title>Loops</title>

	</head>
	<body>
	<h3>For Loop</h3><br />
	<?php
		for ($count=0; $count <= 10; $count++) {
			echo "Count is: " . $count . ", <br />";
			}
	?>

	<h3>Foreach Loop - used on arrays.</h3><br />
	<?php
		$ages = array(4, 8, 15, 16, 23, 42);
		// using each value
		foreach ($ages as $age) {
			echo "Age is " . $age . "<br />";
		}
		echo "<br />";


/*
Using foreach loops on an associative array.
foreach can take each array as a key:value pair.
Syntax:
	foreach ($array as $key => $value)
		statement;
The $key is the $position of the object in the $array. For instance: the number 4($value) is in position zero, 8($value) is in position one, etc.

*/
		// using each key => value pair
	echo "<h3>Foreach Loop - used on associative arrays.</h3><br />";
		foreach($ages as $position => $key) {
			echo $position . ": " . $key . " RLH<br />";
			}
		echo "<br />";

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

	<h3>Do While Loop - used on arrays.</h3><br />
	<?php
		$x = 1;
		do {
  		echo "The number is: $x <br>";
  		$x++;
		} while ($x <= 5);
	?>

	<h3>While Loop - used on arrays.</h3><br />
	<?php
		$x = 0;
		while($x <= 100) {
  		echo "The number is: $x <br>";
  		$x+=10;
		}
	?>
	
</body>
</html>