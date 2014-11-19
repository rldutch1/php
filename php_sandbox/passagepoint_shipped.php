<?php
include_once("db_connect.php");
$query="use robdba3;
select 
	ppc.firstname 
	,ppc.lastname
	,ppc.title
	,ppc.email
	,ppmf.company
	,ppmf.address1
	,ppmf.address2
	,ppmf.city
	,ppmf.state
	,ppmf.zip
	,ppsn.mfg_serial_number
	,ppsn.us_embassy_number
	,ppsn.model
	,ppinv.inv_po_num

from 

pp_contacts ppc
	
	join pp_shipped_equipment ppse on ppc.mfg_id = ppse.mfg_id
	join pp_serialnumbers ppsn on ppse.serial_id = ppsn.serial_id
	join pp_manufacturers ppmf on ppc.mfg_id = ppmf.mfg_id
	join pp_invoice ppinv on ppsn.inv_id = ppinv.inv_id

order by ppc.lastname, ppsn.us_embassy_number;"

$result=mysql_query($query, $connection);
	if (!$result) {
		die("Database query failed: " . mysql_error());
	}

	while ($row = mysql_fetch_array($result)) {
		echo $row[FirstName] . " " . [LastName] . " " . [Title] . " " . [email]
		 . " " . [Company] . " " . [Address1] . " " . [Address2] . " " . [City] . " " . [State]
		 . " " . [ZIP] . " " . [US_Embassy_Number] . " " . [Model] . " " . [purchase_order] . "<br />";

		}



?>
