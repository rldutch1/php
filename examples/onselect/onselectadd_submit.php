<?php

//echo "<html><head><title>MySQLi</title></head><body>";
//echo "<h1>Submit button doesn't do anything just yet.</h1>";
//echo "<br /><a href='onselectadd.php'>Go Back</a>";
//echo "</body></html>";
$firstname = $_POST['element_1_1'];
$lastname = $_POST['element_1_2'];
$birthdate = $_POST['element_2_3'] . "-" . $_POST['element_2_1'] . "-" . $_POST['element_2_2'];
$hometown = $_POST['element_3'];
$job = $_POST['element_4'];

$all = $firstname . "-" . $lastname . "-" . $birthdate . "-" . $hometown . "-" . $job;
echo $all;
    //echo "New record created successfully. Last inserted ID is: " . $last_id;

echo "<br /><br /><a href='onselectadd.php'>Add another person</a> or <a href='onselect.php'>Go Back.</a>";
?>
