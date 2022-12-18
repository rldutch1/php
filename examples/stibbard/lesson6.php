<?php
if(!session_id()) session_start(); //If session has not been started, start it.
include('header.php');
include('connect.php');
echo "<a href='https://www.youtube.com/watch?v=RcW8mMiIexc' target='_blank'>MySQL PDO Tutorial Lesson 6 - Prepared statements with placeholders</a>";
echo "<br />MySQLi and PDO both support prepared statements. Prepared statements remove the risk of MySQL injection because it doesn't involve inserting strings as text directly into the MySQL queries. There is no longer a need to sanitize the data before sending it to the database. <br />";
echo "<br />An advantage of using bindParam instead of bindValue is that you can use a list of values in your query. <br />";
echo "<br />PDO unlike MySQLi uses named parameters. <br />";

echo "<br /><div class='section1'>//Using bindValue</div><br />

\$query=(\"select * from stibbard where firstname = ?;\"); //Notice the question mark in place of the value that is queried for.<br />
\$tabledata = \$handler->prepare(\$query);<br />
\$tabledata->bindValue(1,'Robert'); //The 1 represents the questionmark in the query. If there were two questionmarks there would be two bindValues but the second one would start with a 2 before the value.<br />
\$tabledata->execute();<br />
while (\$row = \$tabledata->fetch(PDO::FETCH_ASSOC)) {<br />
	echo \"&lt;pre&gt;\" . var_dump(\$row) . \"&lt;/pre&gt;\";<br />
}<br />";

$query=("select * from stibbard where firstname = ?;");
$tabledata = $handler->prepare($query);
$tabledata->bindValue(1,'Robert');
$tabledata->execute();
echo "<div class='grey'>";
while ($row = $tabledata->fetch(PDO::FETCH_ASSOC)) {
	echo "<pre>" . var_dump($row) . "</pre>";
}
echo "</div>";

echo "<br /><div class='section1'>Results in JSON format:</div><br />";
echo "
\$query=(\"select * from stibbard where firstname like ?;\");<br />
\$tabledata = \$handler->prepare(\$query);<br />
\$tabledata->bindValue(1,'%o%');<br />
\$tabledata->execute();<br />
\$results=\$tabledata->fetch(PDO::FETCH_ASSOC); //Using fetch when selecting one row of data produces the result in braces {}, fetchAll = [].<br />
\$json=json_encode(\$results);<br />
echo \"&lt;div&gt;&lt;br /&gt;\" . \$json . \"&lt;br /&gt;&lt;/div&gt;\";";

//For JSON
$query=("select * from stibbard where firstname = ?;");
$tabledata = $handler->prepare($query);
$tabledata->bindValue(1,'Robert');
$tabledata->execute();
$results=$tabledata->fetch(PDO::FETCH_ASSOC); //Using fetch when selecting one row of data produces the result in braces {}, fetchAll = [].
$json=json_encode($results);
echo "<div class='grey'>";
echo "<br />" . $json . "<br />";
echo "</div>";

echo "<br /><div class='section1'>//Using bindValue with wildcards in the search.</div><br />

\$query=(\"select * from stibbard where firstname like ?;\"); //Change the qualifier to \"LIKE\"<br />
\$tabledata = \$handler->prepare(\$query);<br />
\$tabledata->bindValue(1,'%o%'); //The percent sign is the wildcard character. This will search for any firstname with the letter \"o\" in it.<br />
\$tabledata->execute();<br />
while (\$row = \$tabledata->fetch(PDO::FETCH_ASSOC)) {<br />
	echo \"&lt;pre&gt;\" . var_dump(\$row) . \"&lt;/pre&gt;\";<br />
}<br />";

$query=("select * from stibbard where firstname like ?;");
$tabledata = $handler->prepare($query);
$tabledata->bindValue(1,'%o%');
$tabledata->execute();
echo "<br /><div class='section1'>Output from bindValue with wildcards query:</div><br />";
echo "<div class='grey'>";
while ($row = $tabledata->fetch(PDO::FETCH_ASSOC)) {
	echo "<pre>" . var_dump($row) . "</pre>";
}
echo "</div>";

echo "<br /><p class='section1'>Results in JSON format:</p><br />";
echo "
\$query=(\"select * from stibbard where firstname like ?;\");<br />
\$tabledata = \$handler->prepare(\$query);<br />
\$tabledata->bindValue(1,'%o%');<br />
\$tabledata->execute();<br />
\$results=\$tabledata->fetchAll(PDO::FETCH_ASSOC); //Using fetch when selecting multiple rows of data produces the first row of data in braces {}, fetchAll produces all the rows in brackets [].<br />
\$json=json_encode(\$results);<br />
echo \"&lt;div&gt;&lt;br /&gt;\" . \$json . \"&lt;br /&gt;&lt;/div&gt;\";";

//For JSON
$query=("select * from stibbard where firstname like ?;");
$tabledata = $handler->prepare($query);
$tabledata->bindValue(1,'%o%');
$tabledata->execute();
$results=$tabledata->fetchAll(PDO::FETCH_ASSOC); //Using fetch when selecting multiple rows of data produces the first row of data in braces {}, fetchAll produces all the rows in brackets [].
$json=json_encode($results);
echo "<div class='grey'>";
echo "<br />" . $json . "<br />";
echo "</div>";


echo "<br /><p class='section1'>Using multiple question marks ?? to specify that more than one fieldname is being searched for.</p><br />";
echo "
\$query=(\"select * from stibbard where firstname = ? and lastname = ?;\"); //Using a question mark for each field.
\$tabledata = \$handler->prepare(\$query);<br />
\$tabledata->bindValue(1,'Robert');<br />
\$tabledata->bindValue(2,'Holland');<br />
\$tabledata->execute();<br />
while (\$row = \$tabledata->fetch(PDO::FETCH_ASSOC)) {<br />
	echo \"&lt;pre&gt;\" . var_dump(\$row) . \"&lt;/pre&gt;\";<br />
}<br />";

$query=("select * from stibbard where firstname = ? and lastname = ?;");
$tabledata = $handler->prepare($query);
$tabledata->bindValue(1,'Robert');
$tabledata->bindValue(2,'Holland');
$tabledata->execute();
echo "<br /><div class='section1'>Output from multiple question mark query:</div><br />";
echo "<div class='grey'>";
while ($row = $tabledata->fetch(PDO::FETCH_ASSOC)) {
	echo "<pre>" . var_dump($row) . "</pre>";
}
echo "</div>";


echo "<br /><p class='section1'>Results in JSON format:</p><br />";
echo "
\$query=(\"select * from stibbard where firstname like ?;\");<br />
\$tabledata = \$handler->prepare(\$query);<br />
\$tabledata->bindValue(1,'Robert');<br />
\$tabledata->bindValue(2,'Holland');<br />
\$tabledata->execute();<br />
\$results=\$tabledata->fetch(PDO::FETCH_ASSOC);<br />
\$json=json_encode(\$results);<br />
echo \"&lt;div&gt;&lt;br /&gt;\" . \$json . \"&lt;br /&gt;&lt;/div&gt;\";";

//For JSON
$query=("select * from stibbard where firstname = ? and lastname = ?;");
$tabledata = $handler->prepare($query);
$tabledata->bindValue(1,'Robert');
$tabledata->bindValue(2,'Holland');
$tabledata->execute();
$results=$tabledata->fetchAll(PDO::FETCH_ASSOC);
echo "<div class='grey'>";
echo "<br />" . $json . "<br />";
echo "</div>";

echo "<br /><p class='section1'>//Using bindParam to search with variables.</p><br />";
echo "
\$fname = 'Robert'; //Firstname variable.<br />
\$lname = 'Holland'; //Lastname variable.<br />
\$query=(\"select * from stibbard where firstname = ? and lastname = ?;\");<br />
\$tabledata = \$handler->prepare(\$query);<br />
\$tabledata->bindParam(1,\$fname); //Using variable instead of value.<br />
\$tabledata->bindParam(2,\$lname); //Using variable instead of value.<br />
\$tabledata->execute();<br />
echo \"&lt;br /&gt;&lt;div class='section1'&gt;Output from search using bindParam variables query:&lt;/div&gt;&lt;br /&gt;\";<br />
while (\$row = \$tabledata-&gt;fetch(PDO::FETCH_ASSOC)) {<br />
	echo \"&lt;div class='grey'&gt;&lt;pre&gt;\" . var_dump(\$row) . \"&lt;/pre&gt;&lt;/div&gt;\";<br />
}<br />
";


$fname = 'Robert'; //Firstname variable.
$lname = 'Holland'; //Lastname variable.
$query=("select * from stibbard where firstname = ? and lastname = ?;");
$tabledata = $handler->prepare($query);
$tabledata->bindParam(1,$fname); //Using variable instead of value.
$tabledata->bindParam(2,$lname); //Using variable instead of value.
$tabledata->execute();
echo "<br /><div class='section1'>Output from search using bindParam variables query:</div><br />";
echo "<div class='grey'>";
while ($row = $tabledata->fetch(PDO::FETCH_ASSOC)) {
	echo "<pre>" . var_dump($row) . "</pre>";
}
echo "</div>";

echo "<br /><div class='section1'>Results in JSON format:</div><br />";
echo "
\$fname = 'Robert'; //Firstname variable.<br />
\$lname = 'Holland'; //Lastname variable.<br />
\$query=(\"select * from stibbard where firstname = ? and lastname = ?;\");<br />
\$tabledata = \$handler->prepare(\$query);<br />
\$tabledata->bindParam(1,\$fname); //Using variable instead of value.<br />
\$tabledata->bindParam(2,\$lname); //Using variable instead of value.<br />
\$tabledata->execute();<br />
\$results=\$tabledata->fetch(PDO::FETCH_ASSOC);<br />
\$json=json_encode(\$results);<br />
echo \"&lt;div&gt;&lt;br /&gt;\" . \$json . \"&lt;br /&gt;&lt;/div&gt;\";";

$fname = 'Robert'; //Firstname variable.
$lname = 'Holland'; //Lastname variable.
$query=("select * from stibbard where firstname = ? and lastname = ?;");
$tabledata = $handler->prepare($query);
$tabledata->bindParam(1,$fname); //Using variable instead of value.
$tabledata->bindParam(2,$lname); //Using variable instead of value.
$tabledata->execute();
$results=$tabledata->fetchAll(PDO::FETCH_ASSOC);
$json=json_encode($results);
echo "<div class='grey'>";
echo "<br />" . $json . "<br />";
echo "</div>";


echo "<br /><div class='section1'>An advantage of using bindParam is that it allows you to search for a list of items instead of just one.</div><br />";
echo "
\$query=(\"select * from stibbard where firstname = ?;\");<br />
\$fname = array('Robert','Jason','Stanley');<br />
\$tabledata = \$handler-&gt;prepare(\$query);<br />
echo \"&lt;div class='section1'&gt;Output from list search using bindParam.&lt;/div&gt;&lt;br /&gt;\";<br />
echo \"&lt;div class='grey'&gt;\";<br />
foreach (\$fname as \$xyz) {<br />
\$tabledata-&gt;bindParam(1,\$xyz); //Using variable instead of value.<br />
\$tabledata-&gt;execute();<br />
while (\$row = \$tabledata-&gt;fetch(PDO::FETCH_ASSOC)) {<br />
	echo \"&lt;pre&gt;\" . var_dump(\$row) . \"&lt;/pre&gt;\";<br />
}<br />
}<br />
echo \"&lt;/div&gt;\";<br />
";

$query=("select * from stibbard where firstname = ?;");
$fname = array('Robert','Jason','Stanley');
$tabledata = $handler->prepare($query);
echo "<div class='section1'>Output from list search using bindParam.</div><br />";
echo "<div class='grey'>";
foreach ($fname as $xyz) {
$tabledata->bindParam(1,$xyz); //Using variable instead of value.
$tabledata->execute();
while ($row = $tabledata->fetch(PDO::FETCH_ASSOC)) {
	echo "<pre>" . var_dump($row) . "</pre>";
}
}
echo "</div>";

echo "<div class='section1'>Results in JSON format:</div><br />
\$query=(\"select * from stibbard where firstname = ?;\");<br />
\$fname = array('Robert','Jason','Stanley');<br />
\$tabledata = \$handler-&gt;prepare(\$query);<br />
echo \"&lt;div class='section1'&gt;JSON Output from list search using bindParam.&lt;/div&gt;&lt;br /&gt;\";<br />
echo \"&lt;div class='grey'&gt;\";<br />
\$x = array();<br />
foreach (\$fname as \$xyz) {<br />
\$tabledata-&gt;bindParam(1,\$xyz); //Using variable instead of value.<br />
\$tabledata-&gt;execute();<br />
\$results=\$tabledata-&gt;fetch(PDO::FETCH_ASSOC);<br />
\$json=json_encode(\$results);<br />
//echo \"\" . \$json . \",\"; //This puts a trailing comma at the end of the last record.<br />
array_push(\$x,\$json.\",\");<br />
}<br />
echo json_encode(\$x);<br />
echo \"&lt;/div&gt;\";<br />
";

$query=("select * from stibbard where firstname = ?;");
$fname = array('Robert','Jason','Stanley');
$tabledata = $handler->prepare($query);
echo "<div class='section1'>JSON Output from list search using bindParam.</div><br />";
echo "<div class='grey'>";
$x = array();
foreach ($fname as $xyz) {
$tabledata->bindParam(1,$xyz); //Using variable instead of value.
$tabledata->execute();
$results=$tabledata->fetch(PDO::FETCH_ASSOC);
array_push($x,$results);
}
echo json_encode($x);
//echo $x;
echo "</div>";


include('footer.php');
?>