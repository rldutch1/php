<?php //Generate dropdown list.
include('updatetable_sqli.php');
include('../../includes/functions.php');

echo "<html>
<head>
<title></title>
<script type='text/javascript' src='updatetable_checkbox.js'></script>
<script type='text/javascript' src='jquery-2.1.1.min.js'></script>
<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js'></script>
<script type='text/javascript' src='jquery.tablesorter.js'></script>
<script>
$(document).ready(function(){
  $(':checkbox').wrap('<span style='background-color:red' />');
});
</script>
</head><body>";


echo "<form name='p_list' action='updatetable_checkbox2.php' method='post'>
Iview display terms found <br />
<select id='optiondown' name='optiondown'>";

//Query concatinates two columns and places a period between them:
$query="SELECT term, concat(term, '.', change_to) FROM iview_terms_list where active_ind = 1 order by term;";

		$result=mysqli_query($con, $query);
			confirm_queryi($result);
		$arraydata1 = array();

//Begin Generate the option list dropdown from the returned data:
			while($row = mysqli_fetch_array($result)){
			echo "<option value='" . $row[1] . "'>" . $row[0] . "</option>";
			}
			echo "</select>
			<input type='hidden' name='test_text' id='text_content' value='' />
			<button type='button' name='prg_name' onclick='updatetable_checkbox2()'>Click to Display Program(s)</button>
<br /><hr />
			</form>";
//End Generate option list dropdown:

echo "<div id='iviewdisplay'></div>";

			echo "</body></html>";
?>

