<?php
//Program Author: Robert Holland
//Program Name: pdooutput.php
//Creation Date: Friday, November 24, 2017 7:54:13 PM
//Last Modified:
//Purpose:
//Request #:
//----------------------------------------------------------------------------
//MySQL PDO Output

require('pdoconnect.php');
//$statement = $handler->prepare("select * from thetablename order by id;"); 
$statement = $handler->prepare("select this from that order by this_id; "); 
$statement->execute(); //Run the prepared query. Prevents MySQL injection.

$RowCount = $statement->rowCount(); //Count the number of rows returned.

//Send records to HTML table in browser.
echo "
<html>
<head>
	<script type='text/javascript' src='../js/jquery-1.11.3.js'></script>
	<script type='text/javascript' src='js/custom.js'></script> </head> <style>
	th {text-align: left; background-color: #d0e4fe;}
	table, th, td {border-collapse:collapse; border: 1px solid black;}

/* Tooltip container */
.tooltip {
    position: relative;
    display: inline-block;
/*     border-bottom: 1px dotted black;  If you want dots under the hoverable text */
}

/* Tooltip text */
.tooltip .tooltiptext {
    visibility: hidden;
    width: 120px;
    background-color: black;
    color: #fff;
    text-align: center;
    padding: 5px 0;
    border-radius: 6px;
 
    /* Position the tooltip text - see examples below! */
    position: absolute;
    z-index: 1;
}

/* Show the tooltip text when you mouse over the tooltip container */ .tooltip:hover .tooltiptext {
    visibility: visible;
}
</style>
<body>
<table id='us_states' class='tablesorter'> <thead> <tr>
	<th></th>
	<th>State</th>
	<th>Capital</th>
	<th>Date Formed</th>
	<th>Size</th>
	<th>Edit</th>
<tr>
</thead>
<tbody>
<tr>
";
			while($r = $statement->fetch(PDO::FETCH_OBJ)){
			$id_column = $r->id;
			$state_column = $r->state;
			$capital_column = $r->capital;
			$date_formed_column = $r->date_formed;
			$statedata_column = $r->data;
			$sq_miles_column = $r->sq_miles;
			echo "<tr><td>" . $id_column . "</td>
			<td>" . $state_column . "</td>
			<td>" . $capital_column . "</td>
			<td class='tooltip'><span class='tooltiptext'>" . $statedata_column . "</span>" . $date_formed_column . "</td>
			<td>" . number_format($sq_miles_column) . " sqm.</td>
			<td><input type='radio' name='edit' id='" . $id_column . "'></td>
			</tr>";
			}
echo "</tbody></table>";
<!-- <div class='tooltip'>Hover over me
  <span class='tooltiptext'>Tooltip text</span> </div> --> "; 
?>