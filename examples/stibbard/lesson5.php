<?php
if(!session_id()) session_start(); //If session has not been started, start it.
include('connect.php');
include('header.php');
//MySQL PDO Tutorial Lesson 5 - FetchAll method
echo "
<a href='https://www.youtube.com/watch?v=6mkCwcsbh0U'>MySQL PDO Tutorial Lesson 5 - FetchAll method</a><br /><br />
\$query=(\"select * from stibbard;\"); <br />
\$tabledata = \$handler->prepare(\$query); //\$handler is in the connect.php file.<br />
\$tabledata->execute(); //Execute the prepared statement.<br />
 <br />
//Results in table format: <br />
echo \"&lt;table border='1'&gt;&lt;tr&gt;&lt;th&gt;ID&lt;/th&gt;&lt;th&gt;Firstname&lt;/th&gt;&lt;th&gt;Lastname&lt;/th&gt;&lt;th&gt;Postcode&lt;/th&gt;&lt;/tr&gt;\"; <br />
\$the = \$tabledata-&gt;fetchAll(PDO::FETCH_BOTH);<br />
foreach(\$the as \$row) {<br />
<br />
	\$id_num = htmlentities(\$row[0]);<br />
	\$firstname_num = htmlentities(\$row[1]);<br />
	\$lastname_num = htmlentities(\$row[2]);<br />
	\$postcode_num = htmlentities(\$row[3]);<br />
<br />
	\$id_assoc = htmlentities(\$row['id']);<br />
	\$firstname_assoc = htmlentities(\$row['firstname']);<br />
	\$lastname_assoc = htmlentities(\$row['lastname']);<br />
	\$postcode_assoc = htmlentities(\$row['postcode']);<br />
<br />
	echo \"&lt;tr&gt;&lt;td&gt;\" . \$id_num . \"&lt;/td&gt;&lt;td&gt;\" . \$firstname_num . \"&lt;/td&gt;&lt;td&gt;\" . \$lastname_num . \"&lt;/td&gt;&lt;td&gt;\" . \$postcode_num . \"&lt;/td&gt;&lt;tr&gt;\";<br />
	echo \"&lt;tr&gt;&lt;td&gt;\" . \$id_assoc . \"&lt;/td&gt;&lt;td&gt;\" . \$firstname_assoc . \"&lt;/td&gt;&lt;td&gt;\" . \$lastname_assoc . \"&lt;/td&gt;&lt;td&gt;\" . \$postcode_assoc . \"&lt;/td&gt;&lt;tr&gt;\";<br />
}<br />
echo \"&lt;/table&gt;\"; <br /><br />
<div class='section1'>
You can use fetchAll(PDO::FETCH_BOTH) in the foreach loop to get both the Numerical and Associative arrays.<br />
You can use either \$row[columnname] or \$row[1]. Returns twice as much data but allows greater flexibility on how you handle the data. Not recommended for large database tables.<br /><br />

The table below is a result of executing the prepared statement and displaying the data from the fetchAll as NUM and ASSOC.
</div>";

$query=("select * from stibbard;");
$tabledata = $handler->prepare($query);
$tabledata->execute();

//Results in table format:
echo "<table><tr><th>ID</th><th>Firstname</th><th>Lastname</th><th>Postcode</th></tr>";

$the = $tabledata->fetchAll(PDO::FETCH_BOTH);
foreach($the as $row) {

	$id_num = htmlentities($row[0]);
	$firstname_num = htmlentities($row[1]);
	$lastname_num = htmlentities($row[2]);
	$postcode_num = htmlentities($row[3]);

	$id_assoc = htmlentities($row['id']);
	$firstname_assoc = htmlentities($row['firstname']);
	$lastname_assoc = htmlentities($row['lastname']);
	$postcode_assoc = htmlentities($row['postcode']);

	echo "<tr><td>" . $id_num . "</td><td>" . $firstname_num . "</td><td>" . $lastname_num . "</td><td>" . $postcode_num . "</td><tr>" .
	"<tr><td>" . $id_assoc . "</td><td>" . $firstname_assoc . "</td><td>" . $lastname_assoc . "</td><td>" . $postcode_assoc . "</td><tr>";
}
echo "</table><br /><br />";
echo "<div class='section1'>The difference between fetch and fetchAll is that fetchAll returns twice as much data because it will fetch both the associative array and numerical array.</div>";

echo "<br /><div class='section1'>fetchAll(PDO::FETCH_BOTH) results in JSON format:</div><br />";
echo "<br />
\$tabledata1 = \$handler->prepare(\$query);<br />
\$tabledata1->execute();<br />
\$results=\$tabledata1->fetchAll(PDO::FETCH_BOTH);<br />
\$json=json_encode(\$results);<br />
echo \$json;<br /><br />
";

//For JSON
$tabledata1 = $handler->prepare($query);
$tabledata1->execute();
$results=$tabledata1->fetchAll(PDO::FETCH_BOTH);
$json=json_encode($results);
echo "<div class='grey'>";
echo "<br />" . $json . "<br />";
echo "</div>";
include('footer.php');
?>