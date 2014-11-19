<!-- 45:28 of 5.Exploring Data Types.mp4 -->
<html>
	<head>
	<title>Array Functions</title>
	</head>
	<body>
	<?php $array1 = array(4,8,15,16,23,42); ?>
	Count: <?php echo count($array1); //Shows how many items are in the array. ?><br />
	Max value: <?php echo max($array1); //Shows the highest nubmer in the array.?><br />
	Min value: <?php echo min($array1); //Shows the lowest number in the array. ?><br /> 
	<br />
	Sort: <?php sort($array1); print_r($array1); ?><br />
	Reverse Sort: <?php rsort($array1); print_r($array1); ?><br />
	<br />
	Implode: <?php echo $string1 = implode(" * ", $array1); //Separating the values in the array with an asterisk. ?><br />
	Explode: <?php print_r(explode(" * ", $string1)); //Removing the asterisk and returning it back into an array. ?><br />
	<br />
	In array returns a boolean: <?php echo in_array(3, $array1). " <-- Nothing if false and 1 if true."; //returns true or false if the object you are looking for "3" is in the array. It will return nothing if it is false and 1 if it is true. ?><br />
	In array returns a boolean: <?php echo in_array(15, $array1). " <-- Nothing if false and 1 if true."; //returns true or false if the object you are looking for "15" is in the array. It will return nothing if it is false and 1 if it is true. ?><br />

	
	</body>
</html>
<!-- Stopped at 1:11:07 -->

