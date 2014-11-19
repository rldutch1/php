<?php
	//30:41
	/*
	Connecting to a database using PHP involves 5 steps:
	1. Create a connection.
	2. Select a database.
	3. Perform database query.
	4. Use returned data (if any).
	5. Close connection.
	*/
	include_once("db_connect.php"); //Steps 1 and 2 are in this file. 

?>
<html>
	<head>
		<title>Basic</title>
	</head>
	<body>
	<?php 
		//Step 3. Perform database query.
		$result = mysql_query("select * from subjects", $connection); //$result is a resource. If I echo $result it will show "Resource id #4".
		if (!$result) {
			die("Database query failed: " . mysql_error());
		}
		//echo $result;
		
		//Step 4. Use returned data.
		while ($row = mysql_fetch_array($result)) {
			echo $row[menu_name] . " " . $row[position] . "<br />";//Instead of the column names, you can also use the position in the associative array like 1 and 2. 
		}
		
	?>
	</body>
</html>
	<?php
		//Step 5. Close the connection.
		mysql_close($connection); //Closing the database connection.
	?>
