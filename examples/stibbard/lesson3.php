<?php
if(!session_id()) session_start(); //If session has not been started, start it.
include('connect.php');
include('header.php');
echo "
<a href='https://www.youtube.com/watch?v=W7OeGrpa5W4'>MySQL PDO Tutorial Lesson 3 - Query method</a> and <a href='https://www.youtube.com/watch?v=izeoWWYOnoY'>MySQL PDO Tutorial Lesson 4 - Fetch method</a><br /><br />
The PHP code for this lesson is in the next 4 lines but I changed it to a prepared statment further down. <br />
include('connect.php'); <br />
//foreach(\$handler->query(\"select * from stibbard;\")) { <br />
//	echo htmlentities(\$row['firstname']) . \" \" . htmlentities(\$row['lastname']) . \" \" . htmlentities(\$row['postcode']) . \". \"; <br />
//} <br />

\$query=(\"select * from stibbard;\"); <br />
\$tabledata = \$handler->prepare(\$query); //\$handler is in the connect.php file.<br />
\$tabledata->execute(); //Execute the prepared statement.<br />
 <br />
//Results in table format: <br />
echo \"&lt;table&gt;&lt;tr&gt;&lt;th&gt;ID&lt;/th&gt;&lt;th&gt;Firstname&lt;/th&gt;&lt;th&gt;Lastname&lt;/th&gt;&lt;th&gt;Postcode&lt;/th&gt;&lt;/tr&gt;\"; <br />
while (\$row = \$tabledata-&gt;fetch(PDO::FETCH_NUM)) { <br />
	echo \"&lt;tr&gt;&lt;td&gt;\" . \$row[0] . \"&lt;/td&gt;&lt;td&gt;\" . \$row[1] . \"&lt;/td&gt;&lt;td&gt;\" . \$row[2] . \"&lt;/td&gt;&lt;td&gt;\" . \$row[3] . \"&lt;/td&gt;&lt;/tr&gt;\"; <br />
	//echo \"&lt;pre&gt;\" . var_dump(\$row) . \"&lt;/pre&gt;\"; <br />
} <br />
echo \"&lt;/table&gt;\"; <br />

You can use fetch(PDO::FETCH_ASSOC) in the while loop but you will have to type the actual column name in \$row[columnname]<br />
You can use fetch(PDO::FETCH_BOTH) in the while loop which allows you to use either \$row[columnname] or \$row[1]. \"BOTH\" returns twice as much data but allows greater flexibility on how you handle the data.<br />
<div class='section1'>The table below is a result of the above PHP query and output of the while loop!</div><br />";

//$query=("select * from stibbard");
$query=("select id, firstname, lastname, postcode from stibbard order by id desc limit 0, 10;");
$tabledata = $handler->prepare($query);
$tabledata->execute();

//Results in table format:
echo "<table><tr><th>ID</th><th>Firstname</th><th>Lastname</th><th>Postcode</th></tr>";
while ($row = $tabledata->fetch(PDO::FETCH_NUM)) {
	echo "<tr><td>" . $row[0] . "</td><td>" . $row[1] . "</td><td>" . $row[2] . "</td><td>" . $row[3] . "</td></tr>";
	//echo "<pre>" . var_dump($row) . "</pre>";
}
echo "</table>";

echo "<br /><div class='section1'>Results in JSON format:</div><br />";
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
echo $json;
echo "<br /><br />";
include('footer.php');
?>