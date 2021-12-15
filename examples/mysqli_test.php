<?php
include('../includes/pw5i.php');
include('../includes/functions.php');
//include('mysqli_test1.php');

//echo "\r\n <br /> Holland \r\n <br />";

$query="select id, concat(firstname,\" \", middlename,\" \", lastname) as name from h_person";

$result=mysqli_query($con, $query);
confirm_queryi($result);
$arraydata = array();
		echo "<html><head><title></title></head><body><select>";
while($row = mysqli_fetch_array($result)){
		echo "<option value='" . $row[0] . "'>" . $row[1] . "</option>";
	}
		echo "</select></body></html>";

?>
