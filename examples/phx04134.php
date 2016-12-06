<?php

$serverName = "phx04134.bhs.bannerhealth.com"; //Servername/Instancename

//Since UID and password are not specified the connection will attempt using the Windows authentication.

$handler = new PDO("sqlsrv:server=$serverName; Database=Canned_mPage", "mpage", "mpage");

	if($handler) {
		echo "Connection established.<br />";
	}
	else {
		echo "Connection failed.<br />";
		die(print_r(sqlsrv_errors(), true));
	}

//Print the contents of the table.
	$sql = 'select * from mpage_settings';
	foreach ($handler -> query($sql) as $col) {
		print $col[0] . "\t";
		print $col[1] . "\t";
		print $col[2] . "\t";
		print $col[3] . "\t";
		print $col[4] . "\t";
		print $col[5] . "\t";
		print $col[6] . "\t";
		print $col[7] . "\t";
		print $col[8] . "\t";
		print $col[9] . "\t";
		print $col[10] . "\t";
		print $col[11] . "\t";
		print $col[12] . "\t";
		print $col[13] . "\t";
		print $col[14] . "\t";
		print $col[15] . "\t";
		print $col[16] . "\t";
		print $col[17] . "\t";
		print $col[18] . "\t";
		print $col[19] . "\t";
		print $col[20] . "\t";
		print $col[21] . "\t";
	}

?>