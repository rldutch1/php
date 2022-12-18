<?php setcookie('test', 0, time()-(60*60*24*7)); /*Setting the cookie value to zero and the expiration date to a time in the past.*/?>
<html>
	<head>
		<title>Reading Cookies from Web Browser</title>
	</head>
	<body>
		<?php
		$var1= 0; //Setting the default value of $var1 to zero.
		if (isset($_COOKIE['test'])){ //If the cookie is set then go to next line. Need to check if the cookie is set. 
		$var1 = $_COOKIE['test']; //$var1 is now set to the value/content of the cookie.
		}
		echo "The COOKIE value or COOKIE content is: " . $var1; //Displaying $var1. If the cookie is not set then the default value will be displayed.

		?>
	</body>
</html>

