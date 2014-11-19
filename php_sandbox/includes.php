<html>
	<head>
		<title>Includes</title>
	</head>
	<body>
	<?php 
	//1:05:07 of 10.Building.Web.Pages.mp4.
		include("included_func.php"); //Include will include the php from another file. We can have a separate file that has all of our functions and just include them only once.
		hello("Everyone"); //The hello variable is inside included_func.php and I am calling it here and passing it "Everyone".
	?>

	</body>
</html>

