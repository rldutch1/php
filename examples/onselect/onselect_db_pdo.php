<?php include('onselect_connect_pdo.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<!-- Source: https://www.w3schools.com/php/php_ajax_database.asp -->
<style>
table {
    width: 100%;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>

<?php
$q = intval($_GET['q']);

//***************************************************************************

$statement = $handler->prepare("select  firstname, lastname, birthdate, (CASE
	when TIMESTAMPDIFF(YEAR, birthdate, CURDATE()) >= 1 then concat(TIMESTAMPDIFF(YEAR, birthdate, CURDATE()), ' year(s)')
	when TIMESTAMPDIFF(MONTH, birthdate, CURDATE()) >= 1 then concat(TIMESTAMPDIFF(MONTH, birthdate, CURDATE()), ' month(s)')
	when TIMESTAMPDIFF(DAY, birthdate, CURDATE()) >= 1 then concat(TIMESTAMPDIFF(DAY, birthdate, CURDATE()), ' day(s)')
	else concat('Less than a day old')
	END
) as age, hometown, job from onselect where id = '".$q."'");
$statement->execute(); //Run the prepared query. Prevents MySQL injection.

$RowCount = $statement->rowCount(); //Count the number of rows returned.

echo "
			<table>
			<tr>
			<th>Firstname</th>
			<th>Lastname</th>
			<th>birthdate</th>
			<th>Age</th>
			<th>Hometown</th>
			<th>Job</th>
			</tr>";
			while($r = $statement->fetch(PDO::FETCH_OBJ)){
	    echo "<tr>";
  	  echo "<td>" . $r->firstname . "</td>";
    	echo "<td>" . $r->lastname . "</td>";
    	echo "<td>" . $r->birthdate . "</td>";
      echo "<td>" . $r->age . "</td>";
    	echo "<td>" . $r->hometown . "</td>";
    	echo "<td>" . $r->job . "</td>";
    	echo "</tr>";
			}
echo "</table>";
//***************************************************************************

?>
</body>
</html>
