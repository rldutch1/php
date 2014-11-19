<html>
	<head>
		<title>Arrays</title>
	</head>
	<body>

<?php
include_once('../includes/functions.php');
include_once('../includes/pw5.php');

$query="select * from company";
confirm_query($query);
$res = mysql_query($query);
$result = array();
// Example:
while( $row = mysql_fetch_array($res)) //Loop through the results.
    array_push($result, array('name' => $row[1],
                              'age' => $row[2],
                              'company' => $row[3]
                              )); //Store the results in an array.
    echo "<b>JSON Output: </b><br />" . json_encode(array("result" => $result)) . "<br /><br />";
//		echo $result.name[0];
//		echo $result.age[0];
//		echo $result.company[0];
//		echo "Peter is " . $result[1]['name'] . " years old.";

		echo "<b>Displaying data from the array:</b><br />";
		echo $result[1]['name'] . " " . $result[1]['age'] . " " . $result[1]['company'];
		echo "<br /><br />";
	

		echo "<b>Loop Through an Associative Array and Display The Data:</b><br />";
	foreach ($result as $x=>$x_value) {
		echo "Key=" . $x . ", Name=" . $x_value['name'] . ", Age=" . $x_value['age'] . ", Company=" . $x_value['company'] . "<br />";
		}
		echo "<br /><br />";
		
		echo "<b>Loop Through An Associative Array and Display The Data In A Table With Links Created From Data In The Table:</b><br />";
		echo "<html><head></head><title></title><body><table><tr><th>Position</th><th>Name</th><th>Age</th><th>Company</th></tr>";
	foreach ($result as $x=>$x_value) {
		echo "<tr><td>" . $x . "</td><td>" . $x_value['name'] . "</td><td>" . $x_value['age'] . "</td><td><a href='http://www.robholland.com/{$x_value['company']}'>" . $x_value['company'] . "</a></td></tr>";
		}
		echo "</table>";
		echo "<br /><br />";	

		echo "<b>Using the print_r function surrounded by &lt;pre&gt;&lt;/pre&gt; tags:</b><br />";
		echo "<pre>";
		 
		print_r($result);
		echo "</pre>";
		
		echo "<br /><br />";
		
		echo "<b>Using the print_r function without the &lt;pre&gt;&lt;/pre&gt; tags:</b><br />";
		print_r($result);
		echo "<br /><br />The End.";

?>


	</body>
</html>