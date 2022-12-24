<?php
echo "<br />
<&#63;php<br />
//http://www.tizag.com/phpT/php-string-explode.php<br />
//read text per line and convert to array<br />
<br />
//for example, the input file is readtextperline.txt<br />
//the input file contains text below<br />
<br />
//++++++++++++++++++++++++++<br />
<br />
//read value per line<br />
<br />
\$data = file_get_contents(\"readtextperline.txt\"); //read the file<br />
\$convert = explode(\"\n\", \$data); //create array separate by new line<br />
echo \"Line count: \" . count(\$convert) . \"&lt;br /&gt;\";<br />
<br />
for (\$i=0;\$i&lt;count(\$convert);\$i++)<br />
{<br />
    echo \$convert[\$i] . \"&lt;br /&gt;\"; //write value by index and add carriage return.<br />
}<br />
<br />
//Output specified number of records in this next example.<br />
\$convert1 = explode(\"\\n\", \$data,5); //Using the third (optional) argument which allows you to set the number of pieces explode can return. This means it will stop exploding once the number of pieces equals the set limit.<br />
echo \"Line count: \" . count(\$convert1) . \"&lt;br /&gt;\";<br />
<br />
for (\$i=0;\$i&lt;count(\$convert1);\$i++)<br />
{ //echo \"&lt;pre&gt;\" . print_r(\$convert1) . \"&lt;/pre&gt;\";<br />
		\$x=\$i+1;<br />
    echo \"&lt;b&gt;\" . \$x . \": \" . \$convert1[\$i] . \" -----&lt;/b&gt;&lt;br /&gt;\"; //write value by index and add carriage return.<br />
    //Can apply different formatting to the selected 5 records. (Top 5 finishers in a race etc.)<br />
}<br /><br />
//++++++++++++++++++++++++++<br />
<br />
&#63;><br />";

//http://www.tizag.com/phpT/php-string-explode.php
//read text per line and convert to array

//for example, the input file is readtextperline.txt
//the input file contains text below

//++++++++++++++++++++++++++

//read value per line

$data = file_get_contents("readtextperline.txt"); //read the file
$convert = explode("\n", $data); //create array separate by new line
echo "Line count: " . count($convert) . "<br />";

for ($i=0;$i<count($convert);$i++)
{
    echo $convert[$i] . "<br />"; //write value by index and add carriage return.
}

//Output specified number of records in this next example.
$convert1 = explode("\n", $data,5); //Using the third (optional) argument which allows you to set the number of pieces explode can return. This means it will stop exploding once the number of pieces equals the set limit.
echo "Line count: " . count($convert1) . "<br />";

for ($i=0;$i<count($convert1);$i++)
{ //echo "<pre>" . print_r($convert1) . "</pre>";
		$x=$i+1;
    echo "<b>" . $x . ": " . $convert1[$i] . " -----</b><br />"; //write value by index and add carriage return.
    //Can apply different formatting to the selected 5 records. (Top 5 finishers in a race).
}

//++++++++++++++++++++++++++
echo "<br /><br />";
?>
