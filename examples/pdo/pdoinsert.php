// ----------------------------------------------------------------------------
// Script Author: Robert Holland 
// Script Name: pdoinsert.php
// Creation Date: Friday, November 24, 2017 7:53:13 PM
// Last Modified: 
// Version: 1.0.0 
// Purpose: 
// ----------------------------------------------------------------------------

<?php
include('connect.php');

$fname = htmlentities($_POST['firstname']);
$mname = htmlentities($_POST['middlename']);
$lname = htmlentities($_POST['lastname']);
$bdate = htmlentities($_POST['birthdate']);

$stmt = $handler->prepare("insert into test (firstname, middlename, lastname, birthdate) values (:firstname, :middlename, :lastname, :birthdate);");

$stmt->bindParam(':firstname', $fname);
$stmt->bindParam(':middlename', $mname);
$stmt->bindParam(':lastname', $lname);
$stmt->bindParam(':birthdate', $bdate);
$stmt->execute();
//header('Location: ../index.php');
?>