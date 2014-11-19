<!-- 32:56 of 5.Exploring Data Types.mp4 -->
<html>
	<head>
		<title>Arrays</title>
	</head>
	<body>
	<?php echo "Example: <a href='http://www.robholland.com/php/play/company2.php'>Company2 Array Testing</a><br />"; ?>
	<?php $array1 = array(4,8,15,16,23,42); ?>
	<?php echo $array1[0]; ?><br />
	<?php $array2 = array(6, "Fox", "Dog", array("x", "y", "z")); ?>
	<?php $array2a = array(6, "Fox", "Dog", array("x", "y", "z")); ?>
	<?php echo $array2[2]; //Shows the word dog. ?><br />
	<?php echo $array2[3]; //3 is the 4th object in the array2 and is another array. Will display the word array.?><br />
	<?php echo $array2[3][1]; //1 is the second object in the second array. The letter y. ?><br />
	<pre>The array looks like this:<br /> <?php print_r($array2); //I just want to see what an array of an array looks like printed out. ?></pre>
	<?php $array2[3] = "Cat"; //Setting the 4th position in array2 equal to the word cat. It used to display the word array; see above. ?><br />
	<?php echo $array2[3]; //Shows the word Cat. ?><br />
	<?php echo $array2[2]; //Shows the word Dog ?><br />
	<br />
	<?php $array3 = array("first_name" => "Robert", "last_name" => "Holland"); //associative array assigns a name to a value. ?>
	<?php echo $array3["first_name"]; //You can just call or echo the name to see the value.?><br />
	<?php echo $array3["first_name"]. " " . $array3["last_name"]; //You can just call or echo the name to see the value.?>
	<?php $array3["first_name"] = "Stanley"; //Changing the first name to Stanley?><br />
	<?php echo $array3["first_name"] . " " . $array3["last_name"]; ?>
	<br />
	<?php //If you want to see what is inside an array use the print_r command
		print_r($array2);
	?>
	<br />
	<pre>
	<?php //If you want to see what is inside an array in a more readable format use the HTML <pre> tag. 
		print_r($array2);
	?>
	<?php $rlh = json_encode($array2a); echo "Array2: " . $rlh; ?>
	</pre>


	</body>
</html>

