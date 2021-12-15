<?php
if(!session_id()) session_start(); //If session has not been started, start it.
include('header.php');
include('connect.php');
echo "<a href='https://www.youtube.com/watch?v=iKWSG1MfEWo'>MySQL PDO Tutorial Lesson 7 - Prepared statements with named parameters.</a><br />";

echo "<br />
\$query=(\"select * from stibbard where firstname = :firstname;\");<br />
\$fname = array('Robert','Jason','Stanley');<br />
\$tabledata = \$handler-&gt;prepare(\$query);<br />
echo \"&lt;div class='section1'&gt;Output from list search using named parameter.&lt;/div&gt;&lt;br /&gt;\";<br />
echo \"&lt;div class='grey'&gt;\";<br />
foreach (\$fname as \$xyz) {<br />
\$tabledata-&gt;bindParam(':firstname',\$xyz); //Using variable instead of value.<br />
\$tabledata-&gt;execute();<br />
while (\$row = \$tabledata-&gt;fetch(PDO::FETCH_ASSOC)) {<br />
	echo \"&lt;pre&gt;\" . var_dump(\$row) . \"&lt;/pre&gt;\";<br />
}<br />
}<br />
echo \"&lt;/div&gt;\";<br />
";

$query=("select * from stibbard where firstname = :firstname;");
$fname = array('Robert','Jason','Stanley');
$tabledata = $handler->prepare($query);
echo "<div class='section1'>Output from list search using named parameter.</div><br />";
echo "<div class='grey'>";
foreach ($fname as $xyz) {
$tabledata->bindParam(':firstname',$xyz); //Using variable with named parameter.
$tabledata->execute();
while ($row = $tabledata->fetch(PDO::FETCH_ASSOC)) {
	echo "<pre>" . var_dump($row) . "</pre>";
}
}
echo "</div>";

echo "
//In array.<br />
\$query=(\"select * from stibbard where firstname = :firstname;\");<br />
\$fname = array('Robert','Jason','Stanley');<br />
\$tabledata = \$handler-&gt;prepare(\$query);<br />
echo \"&lt;div class='section1'&gt;JSON Output from list search using named parameter.&lt;/div&gt;&lt;br /&gt;\";<br />
echo \"&lt;div class='grey'&gt;\";<br />
\$abc = array();<br />
foreach (\$fname as \$xyz) {<br />
\$tabledata-&gt;bindParam(':firstname',\$xyz); //Using variable with named parameter.<br />
\$tabledata-&gt;execute();<br />
\$results = \$tabledata-&gt;fetch(PDO::FETCH_ASSOC);<br />
//\$json_encode(\$results);<br />
array_push(\$abc, \$results);<br />
}<br />
echo json_encode(\$abc);<br />
<br />
echo \"&lt;/div&gt;\";<br />
";

//In array.
$query=("select * from stibbard where firstname = :firstname;");
$fname = array('Robert','Jason','Stanley');
$tabledata = $handler->prepare($query);
echo "<div class='section1'>JSON Output from list search using named parameter.</div><br />";
echo "<div class='grey'>";
$abc = array();
foreach ($fname as $xyz) {
$tabledata->bindParam(':firstname',$xyz); //Using variable with named parameter.
$tabledata->execute();
$results = $tabledata->fetch(PDO::FETCH_ASSOC);
//$json_encode($results);
array_push($abc, $results);
}
echo json_encode($abc);
echo "</div>";

echo "<br />
\$query=(\"select * from stibbard where firstname = :firstname;\");<br />
\$tabledata = \$handler-&gt;prepare(\$query);<br />
\$xyz = 'Robert';<br />
echo \"&lt;div class='section1'&gt;Output using bindParam with named parameter without the array.&lt;/div&gt;&lt;br /&gt;\";<br />
echo \"&lt;div class='grey'&gt;\";<br />
\$tabledata-&gt;bindParam(':firstname',\$xyz); //Using variable instead of value.<br />
\$tabledata-&gt;execute();<br />
while (\$row = \$tabledata-&gt;fetch(PDO::FETCH_ASSOC)) {<br />
	//echo \"&lt;pre&gt;\" . var_dump(\$row) . \"&lt;/pre&gt;\";<br />
	\$firstname = htmlentities(\$row['firstname']);<br />
	\$lastname = htmlentities(\$row['lastname']);<br />
	\$postcode = htmlentities(\$row['postcode']);<br />
	echo \$firstname . \" \" . \$lastname . \" \" . \$postcode . \"&lt;br /&gt;\";<br />
}<br />
echo \"&lt;/div&gt;\";<br />
";

$query=("select * from stibbard where firstname = :firstname;");
$tabledata = $handler->prepare($query);
$xyz = 'Robert';
echo "<div class='section1'>Output using bindParam with named parameter without the array.</div><br />";
echo "<div class='grey'>";
$tabledata->bindParam(':firstname',$xyz); //Using variable instead of value.
$tabledata->execute();
while ($row = $tabledata->fetch(PDO::FETCH_ASSOC)) {
	//echo "<pre>" . var_dump($row) . "</pre>";
	$firstname = htmlentities($row['firstname']);
	$lastname = htmlentities($row['lastname']);
	$postcode = htmlentities($row['postcode']);
	echo $firstname . " " . $lastname . " " . $postcode . "<br />";
}
echo "</div>";

echo "<br />
echo \"&lt;br /&gt;&lt;div class='section1'&gt;Specifying the type of data with PDO::PARAM_STR. Can also use PDO::PARAM_INT and PDO::PARAM_BOOL. With MySQL you don't need to specify the type of data because MySQL has typecasting which automatically select the type of data.&lt;/div&gt;\";<br />
\$query=(\"select * from stibbard where firstname = :firstname;\");<br />
\$tabledata = \$handler-&gt;prepare(\$query);<br />
\$tabledata-&gt;bindValue(':firstname','Robert',PDO::PARAM_STR); //Using value instead of \$varable.<br />
\$tabledata-&gt;execute();<br />
echo \"&lt;div class='section1'&gt;Output using bindValue with named parameter without the array.&lt;/div&gt;&lt;br /&gt;\";<br />
echo \"&lt;div class='grey'&gt;\";<br />
while (\$row = \$tabledata-&gt;fetch(PDO::FETCH_ASSOC)) {<br />
	//echo \"&lt;pre&gt;\" . var_dump(\$row) . \"&lt;/pre&gt;\";<br />
	\$firstname = htmlentities(\$row['firstname']);<br />
	\$lastname = htmlentities(\$row['lastname']);<br />
	\$postcode = htmlentities(\$row['postcode']);<br />
	echo \$firstname . \" \" . \$lastname . \" \" . \$postcode . \"&lt;br /&gt;\";<br />
}<br />
echo \"&lt;/div&gt;\";<br />
";

echo "<br /><div class='section1'>Specifying the type of data with PDO::PARAM_STR. Can also use PDO::PARAM_INT and PDO::PARAM_BOOL. With MySQL you don't need to specify the type of data because MySQL has typecasting which automatically select the type of data.</div>";
$query=("select * from stibbard where firstname = :firstname;");
$tabledata = $handler->prepare($query);
$tabledata->bindValue(':firstname','Robert',PDO::PARAM_STR); //Using value instead of \$varable.
$tabledata->execute();
echo "<div class='section1'>Output using bindValue with named parameter without the array.</div><br />";
echo "<div class='grey'>";
while ($row = $tabledata->fetch(PDO::FETCH_ASSOC)) {
	//echo "<pre>" . var_dump($row) . "</pre>";
	$firstname = htmlentities($row['firstname']);
	$lastname = htmlentities($row['lastname']);
	$postcode = htmlentities($row['postcode']);
	echo $firstname . " " . $lastname . " " . $postcode . "<br />";
}
echo "</div>";

echo "<br />
echo \"&lt;br /&gt;&lt;div class='section1'&gt;Specifying the type of data that is used with PDO::PARAM_INT.&lt;/div&gt;\";<br />
\$query=(\"select * from stibbard where id = :id;\");<br />
\$tabledata = \$handler-&gt;prepare(\$query);<br />
\$xyz = 1;<br />
\$tabledata-&gt;bindParam(':id',\$xyz,PDO::PARAM_INT); //Using variable instead of value.<br />
\$tabledata-&gt;execute();<br />
echo \"&lt;div class='section1'&gt;Output using bindParam with named parameter without the array.&lt;/div&gt;&lt;br /&gt;\";<br />
echo \"&lt;div class='grey'&gt;\";<br />
while (\$row = \$tabledata-&gt;fetch(PDO::FETCH_ASSOC)) {<br />
	//echo \"&lt;pre&gt;\" . var_dump(\$row) . \"&lt;/pre&gt;\";<br />
	\$firstname = htmlentities(\$row['firstname']);<br />
	\$lastname = htmlentities(\$row['lastname']);<br />
	\$postcode = htmlentities(\$row['postcode']);<br />
	echo \$firstname . \" \" . \$lastname . \" \" . \$postcode . \"&lt;br /&gt;\";<br />
}<br />
echo \"&lt;/div&gt;\";<br />
";

echo "<br /><div class='section1'>Specifying the type of data that is used with PDO::PARAM_INT.</div>";
$query=("select * from stibbard where id = :id;");
$tabledata = $handler->prepare($query);
$xyz = 1;
$tabledata->bindParam(':id',$xyz,PDO::PARAM_INT); //Using variable instead of value.
$tabledata->execute();
echo "<div class='section1'>Output using bindParam with named parameter without the array.</div><br />";
echo "<div class='grey'>";
while ($row = $tabledata->fetch(PDO::FETCH_ASSOC)) {
	//echo "<pre>" . var_dump($row) . "</pre>";
	$firstname = htmlentities($row['firstname']);
	$lastname = htmlentities($row['lastname']);
	$postcode = htmlentities($row['postcode']);
	echo $firstname . " " . $lastname . " " . $postcode . "<br />";
}
echo "</div>";

include('footer.php');
?>