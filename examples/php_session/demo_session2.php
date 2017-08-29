<?php
session_start();
?>
<?php
//Program Author: Robert Holland
//Program Name: demo_session2.php
//Creation Date: Sunday, February 19, 2017 13:21:04
//Last Modified:
//Purpose: Session information. From this page, we will access the session information we set on the first page ("demo_session1.php").
//Source: https://www.w3schools.com/php/php_sessions.asp
//----------------------------------------------------------------------------
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Echo session variables that were set on previous page
echo "The username is " . $_SESSION["username"] . ". Can insert this information into a database to track who used what page.<br>";
echo "Favorite color is " . $_SESSION["favcolor"] . ".<br>";
echo "Favorite animal is " . $_SESSION["favanimal"] . ".<br>";
$_SESSION["pagename"] = $_SERVER['PHP_SELF'];
echo "Pagename is " . $_SESSION["pagename"] . ". Can insert this information into a database to track who used what page. Each page will need to have it's name entered into a session variable.<br>"; //Can keep track of what page the user is on.
//echo "<a href='demo_session1.php'>Back.</a><br />";
echo "<button onclick=\"window.location='demo_session1.php';\">Back</button>";
//echo "<a href='destroy_session.php'>Destroy Session</a><br />";
echo "<button onclick=\"window.location='destroy_session.php';\">Logout</button>";
?>


<?php
//session_unset(); // remove all session variables
//unset($_SESSION["username"]); // remove only the username session variable

$_SESSION["favcolor"] = "yellow";
echo "<br /><pre>";
print_r($_SESSION);
echo "</pre><br />";
?>

</body>
</html>