<?php
if(!session_id()) session_start(); //If session has not been started, start it.

// remove all session variables
session_unset();

// destroy the session
session_destroy();
@header('location:index.php');
?>
