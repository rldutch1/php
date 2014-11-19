<html>

<head>
<title>First Page
</title>
</head>

<body>
	<?php
	//10.Building Web Pages.mp4
	//The questionmark after the PHP file allows you to send values along with the <a href>. 
	//PHP takes everything after the questionmark and puts it into an array so that it can be used in secondpage.php. This is called a Super Global. 

	//Time: 3:49
	//Stopped at 12:38
	?>
	<?php //17:23
		$linktext = "<Click> & you'll see";
	?>
	
	<?//Passing an ampersand as part of my name through urlencode. 
		//The ampersand will not get ignored by the browser and actually displays. ?>
	<a href="secondpage.php?name=
		<?php echo urlencode("Rob&");  ?>
	&id=42">
	<?php echo htmlspecialchars($linktext); ?>
	</a>
	

</body>

</html>

