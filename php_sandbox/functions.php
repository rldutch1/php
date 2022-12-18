<html>
<!-- 8.User-Defined Functions.mp4 -->
<head>
<title>User Defined Funtions</title>
</head>
<body>
	<?php
/* Syntax:
	function name($arguments) {
		statement;
	}
*/
		function say_hello() {
			echo "Hello World!<br />";
			} //The steps above only define the function.
		say_hello(); //This step calls the function so that it will display "Hello World!" in the browser. It calls the function with no arguments. The arguments would appear between the ().


		function say_hello2($word) { //This function has an argument in it.
			echo "Hello {$word}!<br />";
		}
		say_hello2("World"); //Insert the argument that you want to display.
		say_hello2("Everyone"); //Change the argument and display it too.
		say_hello2("This is another one"); //Changing once again.
		say_hello2("is constant, everything else is an argument");
		$name = "Rob Holland"; //Create a new variable and use it as an argument.
		say_hello2($name); //Using new variable as an argument.

		function say_hello3($greeting, $target, $punct) {
			echo "This is a greeting. " . $greeting . ", " . $target . $punct . "<br />";
		}
		say_hello3("Hello", $name, "!"); //Always need to use the same exact number of arguments that are defined in your function ($greeting, $target, $punct).
		//You don't need to use the same variable names that were defined in your function. Here I used the variable $name and not $target. You only need
		// to use the same number of variables that were defined.

		echo "<br />";
		//New Example - Returning values in the next movie. Starts at 17:58 of 8.User-Defined Functions.mp4.
			function addition($val1, $val2) {
				$sum = $val1 + $val2;
				return $sum; //This returns the result of $sum out of the function so that it can be used outside of the function.
			}

			$new_val = addition(3,4); //From outside the addition function I am passing two arguments to the addition function and assigning the result to $new_val.
			echo $new_val; //Returning the result of the addition function.
		//Stressing the point of returning a value or echoing a value from a function even if you are not using the word return.
			if (addition(5,6) == 11) {
				echo "<br />Yes 5+6 = 11.";
			}

		//"return" only returns one value. If you need to return more than one value from a function you have to use an array.
		//Example:
		function add_subt($val1, $val2) {
			$add = $val1 + $val2; //Adding the two values.
			$subt = $val1 - $val2; //Subtracting the two values.
			$result = array($add, $subt); //Assigning the values of $add and $subt to the variable $result.
			return $result; //returning the values in the array so they can be used outside of the function.

		}
		//$result is "returned", the add_subt() function we can now use it (with arguments) and assign it to a variable ($result_array).
		$result_array = add_subt(10,5); //Assigning the result of the add_subt() function to the $result_array variable.
		echo "<br />";
		echo "Add: " . $result_array[0] . "<br />"; //Echoing the first item in the array.
		echo "Subt: " . $result_array[1] . "<br />"; //Echoing the second item in the array.

		//From outside the add_subt() function we can now use it (with arguments) and assign it to a variable.
		$result_array1 = add_subt(10,5); //Assigning the result of the add_subt() function to the $result_array variable.
		echo "<br />";

		$i = count($result_array1);
		echo "Number of items in array: {$i}.<br />";
		for ($count=0; $count<count($result_array1); $count++){
		echo "Result of items at position: " . $count . " is: " . $result_array1[$count] . ".<br />"; //Echoing the items in the array.
		//echo "Result is: " . $result_array1[$count] . "<br />"; //Echoing the items in the array.
		}
		?>

</body>
</html>
