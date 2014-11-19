<?php setcookie('test', 45, time()+(60*60*24*7)); /*Naming the cookie "test", assigning the value of "45", and setting the expiration to one week from now.*/ ?>
<html>
	<head>
		<title>Cookies</title>
	</head>
	<body>
		<?php
		/*31:46 of 10.Building Web Pages.mp4
		How to make a request to the users web browser to send back a cookie to the server. 
		The syntax of setcookie is: 
			setcookie($name, $value, $expire); //There are a few other arguments that can go between the parentheses.
		REMEMBER: Setting cookies MUST happen before ANY HTML is sent. UNLESS output buffering is turned on. The cookie is
		set at the top of this page. It must be the first line of code before any whitespace or carriage returns.
		
		This page sets the cookie. See cookies_read.php for changing the cookie value and expiration date. 
		*/
		?>
		
		
	</body>
</html>

