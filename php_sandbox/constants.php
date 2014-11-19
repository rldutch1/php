<!--1:07:24 5.Exploring Data Types.mp4 --> 
<html>
	<head>
		<title>Constants</title>
		
	</head>
	<body>
	<?php
	$max_width = 980;
	define("MAX_WIDTH", 980); //use the keyword "define" to create a constant. Constants are only valid on the page they are used on (current request). 
	//If you open a new page then you can have another constant of the same name with a different value.
	echo MAX_WIDTH . " This is a constant <br />";
	//MAX_WIDTH += 1; //Trying to add 1 to the constant. Cannot do it because it is a constant. It will always have the same value.
	// echo MAX_WIDTH; //Will produce an error because the constant cannot be changed.
	//You can create a variable of the same name and you can change the varible.
	$max_width += 1;
	echo $max_width . " This is a variable <br />";
	?>
	</body>
</html>
