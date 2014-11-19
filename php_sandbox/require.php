<html>
	<head>
		<title>Require</title>
	</head>
	<body>
	<?php
		require("included_func.php"); //Require does the same thing as include but it throws an error if the file cannot be found or cannot be loaded for some reason. 
		hello("Everyone");
		
		require_once("included_func.php"); //The require_once keeps you from including the same file several times when you are writing your code. It maintains an array of all the files 
		//you have included and if it comes up a second time it will just ignore it. 
		
	?>

	</body>
</html>
