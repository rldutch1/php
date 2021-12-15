<html>
<!-- 6.Control Structures Part 1 Logical Expressions.mp4 -->
	<head>
		<title>Logical Expressions</title>
		
	</head>
	<body>
	<?php
		$a = 4;
		$b = 3;
		if ($a > $b){
				echo "a is larger than b <br />";
			} //If you have more than one line of code that you want to execute as a statement, use the curly braces.
				//Everything that is inside the braces will be executed if $a is greater than $b.
				//You can use the following operators:
					// less than <
					// less than or equal to <=
					// greater than >
					// greater than or equal to >=
					// equal to ==
					// not equal to !=
					// AND &&
					// OR ||
		else if ($a < $b){
				echo "b is larger than a <br />";
			}
		else {
				echo "a is equal to b <br />";
			}
		$c = 1;
		$d = 20;
		if (($a > $b) && ($c > $d)) {
				echo "a is larger than b AND ";
				echo "c is larger than d <br />";
			}
		if (($a > $b) || ($c > $d)) {
				echo "a is larger than b OR ";
				echo "c is larger than d <br />";
			}
		else {
			echo "neither a is larger thatn b or c is larger than d <br />";
			}
		unset($a); //The value of "a" is set to 4 above. The unset clears the value to nothing. 
		if (!isset($a)) { //If "a" is not set then set the value of "a" to 100.
				$a = 100; //"a" is now 100 instead of 4.
			}
			echo $a . "<br />";
		if (is_int($a)){ //If "a" is an integer then set it to a string.
				settype($a, "string");
			}
			echo gettype($a);
		//Stopped at 14:45.
	?>

	</body>
</html>
