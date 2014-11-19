<?php
	/* A session is a file that is stored on a web server. 
	Can store a lot more information in a session than you can in a cookie.
	We use cookies to find out what file belongs to a particular user and get their information from it. 
	The session stores information on the server not on the users browser.
	There is a downside to creating sessions because you create a file on your server with the session data for each session. 
	$_SERVER and $_HOST are two Super Globals that can help in managing and using sessions. 
	$_session_start() has to be the absolute first thing in the page before anything else is loaded. 
	*/
	session_start(); //Go to the users browser and find the session cookie. If there is no session cookie, then make one. 
?>
<html>
	<head>
		<title>Sessions</title>
	</head>
	<body>
	<?php //43:51 10.Building Web Pages.mp4 
		$_SESSION['first_name'] = "Robert";
		$_SESSION['last_name'] = "Holland";
		
		$name = $_SESSION['first_name'] . " " . $_SESSION['last_name'];
		echo $name; 
	?>
	</body>
</html>

