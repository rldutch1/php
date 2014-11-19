<html>

<head>
<title>User Defined Functions Global Variables</title>
</head>
<body>
	<?php
	/*
	<!-- 8.User-Defined Functions.mp4 -->
	<!-- 25:46 -->
	http://www.robholland.com/php/php_sandbox/functions2.php
	*/
		$bar = "outside variable"; //This variable is outside of the function below which defines a variable of the same name. 
		function foo(){
			$bar = "inside variable"; //There is no relation to the variable of the same name that is outside of this function. 
			
		}
		foo();
			echo $bar . "<br />"; //This will echo the value of the "outside" variable $bar and not the one inside the function.
		
		echo "<br />";
		
	//Another example of how a variable outside of the function has no relation to the one inside the function.
		$bar = "outside variable"; //This time $bar is still equal to "outside". 
		function foo1($bar){ //This $bar has no relation to the one outside the function.
			$bar = "inside variable"; //$bar now equals "inside". 
			return $bar; //Making $bar available outside the function.
		}
		$bar = foo1($bar); //Assigning the variable $bar to the result of the function foo1 with the argument ($bar). This overwrites the assignment of $bar on line 20.
			echo $bar . "<br />"; //This will echo the value of the "inside" variable $bar on line 22 and not the one outside the function on line 20.
	echo "<br />";
	
	//Using a global variable inside of a function. 
	//29:17
		$bar = "Global Variable"; //This is a global variable.
		function foo2(){
			global $bar; //Use the keyword global to pull the global variable from outside the function to the inside. 
			echo $bar . " - The function is echoing the global variable here. <br />"; //Sending the global variable to the browser.
			$bar = "Changed global variable from inside the function. <br />"; //Changing the global variable and sending to the browser.
			
		}
		foo2();
			echo $bar . "<br />";
		
		//Assigning default values for an argument in a function.
		//32:28
		function paint($color) { //Assigning the $color variable as an argument to the paint function. No default value has been assigned.
			echo "The color of the room is {$color}. Using the argument value of 'blue' because it was passed to the function. <br /> "; //Writing it out to the browser.
		
		}
		paint("blue"); //Assigning the color blue to the $color argument. 
		
		function paint1($color="red") { //Assigning a default value of red to the color variable. 
			echo "The color of the room is {$color}. Using the default value of 'red' because no argument was passed to the function. <br /> "; //Writing out to the browser.
		
		}
		paint1(); //If no argument is passed to the function then the default value of red will be displayed.

		function paint2($room="office", $color="red") { //Assigning a default value of red to the color variable. 
			echo "The color of the {$room} is {$color}. Using the default values of 'office' and 'red' because no argument was passed to the function. <br /> "; //Writing out to the browser.
		
		}
		paint2(); //If no argument is passed to the function then the default values will be displayed.

		function paint3($room="office", $color="red") { //Assigning a default value of red to the color variable. 
			echo "The color of the {$room} is {$color}. Using the argument values of 'bedroom' and 'green' that were passed to the function. <br /> "; //Writing out to the browser.
		
		}
		paint3("bedroom", "green"); //These two arguments will be passed to the function and will be displayed.

	//If you do not assign a default value then the variable becomes required and will need to have a value. 
		function paint4($room="office", $color){
			echo "The color of the {$room} is {$color}. If nothing is entered for 'room' then it will default to 'office'. 'color' is required to have a value. <br />";
		
		}
		paint4("kitchen", "white"); //Both arguments will be passed to the function but only the second argument "white" is required.
		//As a rule, you will want to have any required arguments come first in your function. This way, I only need to specify one argument which will satisfy the required one. See paint5() function below.
		
		function paint5($room, $color="red"){ //$room comes first in the function and is a required value because I did not specify a default. 
			echo "The color of the {$room} is {$color}. 'room' is required to have a value and 'color' defaults to red. <br />";

		}
		paint5("living room"); //Only passing one argument to the paint5 function. The function will still display both the room and the color because $color has a default value.
		
		echo "<br /><br />I am echoing the PHP function get_defined_functions() just to see what it looks like. It is supposed to show all of the functions that are defined for this page/document <pre>";
		$joebob = get_defined_vars();
			 print_r($joebob);
		echo "<pre />";
	?>
		
</body>
</html>
