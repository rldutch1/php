<html>
<!-- 7.Control Structures Part 2 Loops.mp4 -->
<!-- 24:08 pointers -->

	<head>
		<title>Loops: pointers</title>
		
	</head>
	<body>
	<?php
	/*The computer always maintains a pointer that points to the current value of an array. 
	By default it is always the first value in the array and when we start looping through the array, the computer 
	moves the pointer along the array to get each value and keep track of which value it has already sent/displayed.
	*/
		$ages = array(4, 8, 15, 16, 23, 42);
			echo "1: " . current($ages) . "<br />"; //The current() function will find the current pointer value. Here I am echoing it.
			next($ages); //Next manually moves the pointer along the array().
			echo "2: " . current($ages) . "<br />"; 
			reset($ages); //Resets the value of the pointer to the first value in the array().
			echo "3: " . current($ages) . " Value has been reset to the first item in the array().<br />";
	echo "<br />";
	
	//While loop that moves the array pointers 27:00
		while ($age = current($ages)) {//Not using a double "=" sign because we are not assigning a value (boolean) to $age. We are
		// saying that as long as there is a current value($age) in the array, display it.
		echo $age . ", <br />";
		next($ages);
		}
	
?>
</body>
</html>