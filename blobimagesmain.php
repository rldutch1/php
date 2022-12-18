<?php
session_start();
session_regenerate_id(true);

	if ($_SESSION['username'])
	{

include_once('../includes/pw5.php');
include_once('../includes/functions.php');
include_once('blobimagefunctions.php');

echo "
<html>
	<div class='right'>" . dateShow() . "</div><br />
<title></title>
<head>

<script src=\"http://code.jquery.com/jquery-latest.min.js\"></script>
<link rel=\"stylesheet\" type=\"text/css\" href=\"../../css/journal.css\" />


</head>
<body>

	<a href='logout.php' class='moreright1'>Logout</a><br />
	<a href='membersarea.php' class='left'>Members area!</a><br />
	<a href='dbimages.php' class='left'>Upload Images.</a><br />


<form action=\"blobimageshow.php\" method=\"POST\">
	Image ID: <input type=\"text\" name=\"id\" /> of " . imageCount() . ".
	<input type=\"submit\" name=\"submit\" value=\"Submit\"><br />
</form>
<div id=\"myDiv\"></div>
</body>
</html>";


//echo "Hello this is a test number " . imageCount() . " images.";

}
//If the session was not set redirect the user back to the login page.
	else
	header ("location: login.php");
	//	You are logged in as: " . $_SESSION['username'] . "<br />
	//<a href='logout.php' class='moreright1'>Logout</a>
?>
