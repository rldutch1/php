<html>

<head>
<title>Test Page
</title>
</head>

<body>

	<?php 
		$linktext = "<Click> & you'll see";
	?>
	
	<?//Passing an ampersand as part of my name through urlencode. 
		//The ampersand will not get ignored by the browser and actually displays. ?>
	<a href="secondpage.php?name=<?php echo urlencode("Rob&");  ?>&id=42">
	<?php echo htmlspecialchars($linktext); ?>
	</a>
	
			<form action="process.php" method="post">
		Username: <input type="text" name="username" value="" /><br />
		Password: <input type="password" name="password" value=""/><br />
		<input type="submit" name="submit" value="Submit" /><br />
		</form>

</body>

</html>
