<?php

if(!session_id()) session_start(); //If session has not been started, start it.

if(!session_id()
	  {
	    session_start();
		      }
)

// Logout button code:
<button onclick=\"window.location='logout.php';\">Home</button>

//logout.php code:
// Remove all session variables
session_unset();

// destroy the session
session_destroy();

//Redirect page back to index.php after logout.
@header('location:index.php');
?>
