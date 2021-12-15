<?php
//http://stackoverflow.com/questions/19273623/getting-value-and-text-of-select-option-with-php?rq=1

//Connection files and common functions:
include('updatetable_sqli.php');
include('../../includes/functions.php');

//Build the DOM:
echo "<html><head><title></title>
<script type='text/javascript' src='jquery-2.1.1.min.js'></script>
<script type='text/javascript' src='jquery.tablesorter.js'></script>
</head><body>";

//Set the two colors for the alternating rows of the table and set the style:
$color1 = "#CCD7E3";
$color2 = "#F4F9FF";
echo "<style>table {border-collapse:collapse;} th {background-color:#00FFFF;}</style>";

//Start the form and set the action to update the table:
echo "<form name='p_list' action='updatetable_checkbox3.php' method='post'>";

$ddselection=mysql_escape_string($_POST['optiondown']);

// Using explode to split the concatinated field from the dropdown selection in updatetable_checkbox1.php.
// The delimeter is a period and explode creates an array of the data in front of the period [0] and after the period [1]:
$ddselection_split=explode('.', $ddselection);

//Assign result zero to $ddselection_old and result one to $ddselection_new:
$ddselection_old=$ddselection_split[0];
$ddselection_new=$ddselection_split[1];
$query="SELECT * FROM iview_terms6 WHERE term = '" . $ddselection_old . "' and checked = 0;";

		$result=mysqli_query($con, $query);
			confirm_queryi($result);

//Count number of rows returned from the query:
		$num_rows = mysqli_num_rows($result);

//If no rows are returned then display a message to the user:
	if ($num_rows === 0){
		echo "Check complete for " . $ddselection_old . ". Please select another iview term.";
		}
//If rows are returned, display them.
	else {
		$arraydata2 = array();

//Build the table:
			echo "<table id='myTable' class='tablesorter' border='1'>
			<caption>
			<h3>Programs with " . $ddselection_old . "</h3><br /><b>"
			. $ddselection_old . "</b> will change to: <b>" . $ddselection_new . "</b>
			<br />" . $num_rows . " rows returned.
			</caption>
			<thead>
			<tr>
			<th>Program Name</th>
			<th>Code Snippet</th>
			<th>Remove</th>
			</tr>
			</thead><tbody>
			";

			$row_count=0;
			while($row = mysqli_fetch_array($result)){

//Assign the alternating colors to the rows. If $row_count is divisable by two then $color1 (Even numbered rows) else $color2:
						$row_color = ($row_count % 2) ? $color1 : $color2;

//(htmlentities) Display all of the funky characters from the database table also the name attribute for the checkbox is an array:
			echo "
			<tbody>
			<tr bgcolor='" . $row_color . "'>
			<th>" . $row[2] . "</th>
			<td>" . htmlentities($row[3]) . "</td>
			<td><center><input type='checkbox' value='" . $row[0] . "' name='ckbox[]'></center></td>
			</tr></tbody>";
						$row_count++;
			}

			echo "</tbody></table><br />
			<input type='submit' value='Remove Selected' name='submit'>
			<input type='hidden' value='".$query."' name='samequery'</form>";
	}
			echo "</body></html>";
//			header('Location: somefile.php');

?>

