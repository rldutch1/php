<?php
session_start();
/*
//http://stackoverflow.com/questions/10511893/prevent-back-button-after-logout
Implement this in PHP and not javascript.
At the top of each page, check to see if the user is logged in. If not, they should be redirected to a login page:

<?php
      if(!isset($_SESSION['logged_in'])) :
      header("Location: login.php");
?>

As you mentioned, on logout, simply unset the logged_in session variable, and destroy the session:
<?php
      unset($_SESSION['logged_in']);
      session_destroy();
?>
If the user clicks back now, no logged_in session variable will be available, and the page will not load.
*/
?>
<!DOCTYPE html>
<html>
<body>

<?php
// remove all session variables
session_unset();
unset($_SESSION["username"]);

// destroy the session
session_destroy();
header ("location: demo_session1.php");
?>
</body>
</html>
