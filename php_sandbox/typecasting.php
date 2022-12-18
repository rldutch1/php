<!--59:25 5.Exploring Data Types.mp4 --> 
<html>
	<head>
		<title>Type Casting</title>
		
	</head>
	<body>
	<?php
	//Typecasting is when PHP tries to convert strings that are actually numbers into numbers.
		$var1 = "2"; //This is a string called 2. PHP will "typecast" it as a 2 and add 3 to it in the next line. 
		$var1 += 3; //Adding 3 to the string 2. It will not append the 3 to the 2 but will actually do the math. 
		echo $var1 . "<br />"; //Will display 5. 
		$var1 += "3"; //This will add 3 to the 5 and display 8.
		echo $var1 . "<br />"; //Will display 8. 
		$anotherexample = "2 brown foxes 2";
		$anotherexample += 3; //This will display 5 because typecasting will try to get the first number from a string. The string has to begin with a number before typcasting will work.
		echo $anotherexample . "<br />"; 
		$var2 = $var1 + 3;
		echo $var2 . "<br />";
	?>
	
	<?php
		$var4 = "2 brown foxes";
		$var5 = $var4 + 3;
		echo "var" . $var5 . " = " . $var5 . "<br />";
		echo "$var4 type is: " . gettype($var4); echo "<br />"; //gettype shows the type of variable you are working with: string or integer. This will show the word string.
		echo "$var5 type is: " . gettype($var5); echo "<br />"; //This will show the word integer.
		//You can switch the type to a string manually by using settype(,);
		settype($var5, "string"); echo "<br />";
		echo "var5 is now a " . gettype($var5); echo "<br />";
		//Switching var4 to an integer.
		$var6 = (int) $var4; //var6 is now var4 as an integer.
		
		//You can test for which type you are using using the examples below.
		echo "Testing for which type var4 is: <br />";
		echo is_array($var4) . "<br />";
		echo is_bool($var4) . "<br />";
		echo is_float($var4) . "<br />";
		echo is_int($var4) . "<br />";
		echo is_null($var4) . "<br />";
		echo is_numeric($var4) . "<br />";
		echo is_string($var4) . "<br />";
	?>
	</body>

<!-- Stopped at 1:01:48 -->
</html>
