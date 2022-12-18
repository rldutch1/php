<?php
// Start the session
session_start();

//      if(!isset($_SESSION['username'])) :
//      header("Location: ../../../journal/login.php");

?>

<?php
//Program Author: Robert Holland
//Program Name: demo_session1.php
//Creation Date: Sunday, February 19, 2017 13:13:34
//Last Modified:
//Purpose: Session information
//Source: https://www.w3schools.com/php/php_sessions.asp
//----------------------------------------------------------------------------
?>

<!DOCTYPE html>
<html>
<body>

<?php
// Set session variables
$_SESSION["username"] = "TheUserName";
$_SESSION["favcolor"] = "green";
$_SESSION["favanimal"] = "duck";
$_SESSION["pagename"] = $_SERVER['PHP_SELF']; //Can keep track of what page the user is on.
$_SESSION["dttm"] = gmdate("Y-m-d H:i:s",time()+date("Z"));
$_SESSION["dttm_offset"] = strtotime($_SESSION["dttm"]) - (420*60); //AZ time offset.
$_SESSION["curdttm"] = date("Y-m-d H:i:s", $_SESSION["dttm_offset"]);
//$_SERVER['PHP_SELF'] => phpinfo.php
//$_SERVER['SCRIPT_NAME'] => phpinfo.php
//$_SERVER['SCRIPT_FILENAME'] => phpinfo.php
//$_SERVER['PATH_TRANSLATED'] => phpinfo.php

//echo "<a href='demo_session2.php'>Session variables are set.</a><br />";
echo "<button onclick=\"window.location='demo_session2.php';\">Session variables are set.</button>";
?>
<?php
echo "<br /><pre>";
print_r($_SESSION);
echo "</pre><br />";
?>

</body>
</html>