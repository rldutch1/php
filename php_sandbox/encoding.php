<html>
	<head>
	<title>Encoding</title>
	</head>

<body>

	<?php
	//10.Building Web Pages.mp4
	//The questionmark after the PHP file allows you to send values along with the <a href>. 
	//PHP takes everything after the questionmark and puts it into an array so that it can be used in secondpage.php. This is called a Super Global. 

	//Time: 3:49
	//Stopped at 26:15


	/* Retrieving information from users.
	URLs/Links		GET
	Forms			POST
	Cookies			COOKIE
	
	*/
	
	?>
	<?php 
		$url_page = 'php/created/page/url.php';
		$param1 = 'this is a string';
		$param2 = '"bad"/<>characters$';
		$linktext = "<Click> & you'll see";
	
	//Cleaning up the URL link
	$url = "http://localhost/"; //Assigning the localhost address to $url.
	$url .= rawurlencode($url_page); //Appending the $url_page to $url and encoding it so that it is safe. The url_page comes before the questionmark so it needs to be rawurlencoded.
	$url .= "?param1=" . urlencode($param1); //Prepending the questionmark(?) and the word param1= before the urlencoded $param1.
	$url .= "&param2=" . urlencode($param2); //Prepending the ampersand(&) and the word param2= before the urlencoded $param2.
	
	/*
	This is a comment in php.
	*/
	?>
	
	
	
	<a href="<?php echo htmlspecialchars($url); /*htmlspecialcharacters escapes any bad html that might do harm to the html page. */?>" >
			<?php echo htmlspecialchars($linktext); ?>
	</a>
	
	


</body>
</html>

