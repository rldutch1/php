<html>

<?php

?>
	<head><h1>PHP Loops</h1>
		<title>PHP Loops</title>

	</head>
	<body>
	<b>For Loop</b><br />
<b>Syntax:</b><br />
for (init counter; test counter; increment counter) {<br />
  code to be executed for each iteration;<br />
}<br />
<br />
<b>Example:</b><br />
		for ($count=0; $count <= 10; $count++) {<br />
			echo "Count is: " . $count . ",";<br />
			}<br />
<br />
	<?php
	echo "<b>Output:</b><br />";
		for ($count=0; $count <= 10; $count++) {
			echo "Count is: " . $count . ", <br />";
			}
	?>
<br /><hr /><br />
	<b>Foreach Loop - used on arrays.</b><br />
<b>Syntax:</b><br />
	foreach ($array as $value) {<br />
  	code to be executed;<br />
}<br />
<br />
	Unlike the "for" statement that works on a boolean, the "foreach" only works on an array.<br />
	foreach looks at each item in the $array and if there are items still in the array, each one will become the $value.<br />
	The $value is a temporary variable that can be referenced in the statement. It is created on the fly using the "as" keyword.<br />
<br />
<b>Example:</b><br />
		$ages = array(4, 8, 15, 16, 23, 42);<br />
		// using each value<br />
		foreach ($ages as $age) {<br />
			echo "Age is " . $age;<br />
		}<br />
<br />
<b>Output:</b><br />
	<?php
		$ages = array(4, 8, 15, 16, 23, 42);
		// using each value
		foreach ($ages as $age) {
			echo "Age is " . $age . "<br />";
		}
?>
<br /><hr /><br />
<b>Foreach Loop - used on arrays and associative arrays.</b><br />
<p>
Using foreach loops on an associative array.<br />
foreach can take each array as a key:value pair.<br />
<br />
<b>Syntax:</b><br />
	foreach ($array as $key => $value){<br />
		code to be executed;<br />
	}<br />
The $key is the $position of the object in the $array. In the array below, the number 4 ($value) is in position zero, 8 ($value) is in position one, etc.
<br />
<br />
<b>Example:</b><br />
		$ages = array(4, 8, 15, 16, 23, 42);<br />
		foreach($ages as $position => $value) {<br />
			echo $position . ": " . $value;<br />
		}<br />
<br />
<b>Output:</b><br />

<?php
		foreach($ages as $position => $key) {
			echo $position . ": " . $key . "<br />";
			}
		echo "<br />";
?>

<br />
<b>Another example with strings and integers in the associative array:</b><br />
		$prices = array("Brand New Computer" => 2000, "1 month in Lynda.com Training Library" => 25, "Learning PHP" => "priceless");<br />
		foreach($prices as $key => $value) {<br />
			if (is_int($value)) { //is_int looks for integers.<br />
				echo $key . ": $" . $value . ".00";<br />
				}<br />
			else {<br />
				echo $key . ": " . $value; //If not an integer then just print it.<br />
				}<br />
		}<br />
<br />
<b>Output:</b><br />
<?php
//Another example:
		$prices = array("Brand New Computer" => 2000, "1 month in Lynda.com Training Library" => 25, "Learning PHP" => "priceless");
		foreach($prices as $key => $value) {
			if (is_int($value)) {
				echo $key . ": $" . $value . ".00<br />"; //is_int looks for integers.
				}
			else {
				echo $key . ": " . $value . "<br />"; //If not an integer then just print it.
				}
		}
	?>
	
<br />
<b>Multi-Dimensional Arrays</b><br />

&nbsp;&nbsp;print_r($rows);<br />

Array<br />
&nbsp;&nbsp;(<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[0] => Array<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[TABLE_NAME] => vw_customer_display_nodocs<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[IS_UPDATABLE] => YES<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;)<br />
<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[1] => Array<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[TABLE_NAME] => vw_ffl_book1<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[IS_UPDATABLE] => YES<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;)<br />
<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[2] => Array<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[TABLE_NAME] => vw_ffl_book2<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[IS_UPDATABLE] => YES<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;)<br />
<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[3] => Array<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[TABLE_NAME] => vw_ffl_bustax_docs<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[IS_UPDATABLE] => YES<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;)<br />
<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[4] => Array<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[TABLE_NAME] => vw_ffl_license_docs<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[IS_UPDATABLE] => YES<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;)<br />
<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[5] => Array<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[TABLE_NAME] => vw_ffl_ntn_inv_num<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[IS_UPDATABLE] => YES<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;)<br />
<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[6] => Array<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[TABLE_NAME] => vw_ffl_weapondocs<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[IS_UPDATABLE] => YES<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;)<br />
<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[7] => Array<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[TABLE_NAME] => vw_fflbook_transaction_number<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[IS_UPDATABLE] => YES<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;)<br />
<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[8] => Array<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[TABLE_NAME] => vw_ffl_not_disposed<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[IS_UPDATABLE] => YES<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;)<br />
<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[9] => Array<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[TABLE_NAME] => vw_ffl_disposed<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[IS_UPDATABLE] => YES<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;)<br />
&nbsp;&nbsp;)<br />
<br />
<br />
&nbsp;&nbsp;echo $rows[0]['TABLE_NAME'] . "\r\n";<br />
<br />
<br />
&nbsp;&nbsp;foreach ($rows[0] as $key[0] => $value) {<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo "$key[0]: $value\n";<br />
&nbsp;&nbsp;}<br />
<br />
<br />
&nbsp;&nbsp;function myfunction($value,$key)<br />
&nbsp;&nbsp;&nbsp;&nbsp;{<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo "The key $key has the value $value.\r\n";<br />
&nbsp;&nbsp;&nbsp;&nbsp;}<br />
&nbsp;&nbsp;&nbsp;&nbsp;$i=count($rows);<br />
&nbsp;&nbsp;&nbsp;&nbsp;for($x = 0; $x < $i; $x++){<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array_walk($rows[$x],"myfunction");<br />
&nbsp;&nbsp;}<br />
<br />
<br />
&nbsp;&nbsp;$i=count($rows);<br />
&nbsp;&nbsp;for($x = 0; $x < $i; $x++){<br />
&nbsp;&nbsp;&nbsp;&nbsp;foreach($rows[$x] as $key => $value){<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo "$key: $value \r\n";<br />
&nbsp;&nbsp;&nbsp;&nbsp;}<br />
&nbsp;&nbsp;&nbsp;&nbsp;}<br />
<br />
<br />
&nbsp;&nbsp;$i=count($rows);<br />
&nbsp;&nbsp;for($x = 0; $x < $i; $x++){<br />
&nbsp;&nbsp;&nbsp;&nbsp;echo $rows[$x]['TABLE_NAME'] . " " . $rows[$x]['IS_UPDATABLE'] . "\r\n";<br />
&nbsp;&nbsp;}<br />
<br /><hr /><br />
	<b>Do While Loop.</b><br />
<br />
<b>Syntax:</b><br />
do {<br />
code to be executed;<br />
} <br />
while (condition is met);<br />
<br />
<b>Example:</b><br />
		$x = 0;<br />
		do {<br />
  		echo "The number is: $x";<br />
  		$x++;<br />
		} <br />
		while ($x <= 10);<br />
<br />
<b>Output:</b><br />
	<?php
		$x = 0;
		do {
  		echo "The number is: $x <br>";
  		$x++;
		} while ($x <= 10);
	?>

<br /><hr /><br />
	<b>While Loop.</b><br />
<br />
<b>Syntax:</b><br />
		while($x <= 100) {<br />
  		code to be executed;<br />
  	}<br />
  	$x+=10;<br />
<br />
<b>Example:</b><br />
		$x = 0;<br />
		while($x <= 100) {<br />
  		echo "The number is: $x";<br />
  		$x+=10;<br />
		}<br />
<br />
<b>Output:</b><br />
	<?php
		$x = 0;
		while($x <= 100) {
  		echo "The number is: $x <br>";
  		$x+=10;
		}
	?>
<br /><hr /><br />
</body>
</html>