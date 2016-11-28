<?php

$serverName = "phx04134.bhs.bannerhealth.com"; //Servername/Instancename

//Since UID and password are not specified the connection will attempt using the Windows authentication.

$conn = new PDO("sqlsrv:server=$serverName; Database=Canned_mPage", "mpage", "mpage");

	if($conn) {
		echo "Connection established.<br />";
	}
	else {
		echo "Connection failed.<br />";
		die(print_r(sqlsrv_errors(), true));
	}

//Print the contents of the table.
	$sql = 'select * from mpage_settings';
	foreach ($conn -> query($sql) as $row) {
		print $row['Topic Name'] . "\t";
		print $row['Filter Name'] . "\t";
		print $row['Saved Value'] . "\t";
	}

?>