<?php
include('updatetable_sqli.php');
include('../../includes/functions.php');

//Catch the checkbox information from the form in updatetable_checkbox2.php:
$term_id = $_POST["ckbox"];
$same_query = $_POST["samequery"];

//Using implode to turn the checkbox information into a comma delimited string and assing that string to a variable:
$x=implode(" , ", $term_id);

//Update the database table with the current Arizona timestamp and comma delimited data:
$query="update iview_terms6 set checked = 1, dttm = date_add(utc_timestamp(), interval -7 hour) where id in (" . $x . ");";
echo $same_query;
mysqli_query($con,$query);

mysqli_close($con);

//After updating the table, redirect the user back to the form:
//header("Location: updatetable_checkbox1.php");

?>
