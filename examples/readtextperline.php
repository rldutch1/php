<?php
//http://www.tizag.com/phpT/php-string-explode.php
//read text per line and convert to array

//for example, the input file is readtextperline.txt
//the input file contains text below

//++++++++++++++++++++++++++

//read value per line

$data = file_get_contents("readtextperline.txt"); //read the file
$convert = explode("\n", $data); //create array separate by new line
echo "Line count: " . count($convert) . "\n";

for ($i=0;$i<count($convert);$i++)
{
    echo $convert[$i] . "\n"; //write value by index and add carriage return.
}

//The third argument doesn't seem to be working in this next example.
$convert1 = explode("\n", $data,5); //Using the third (optional) argument which allows you to set the number of pieces explode can return. This means it will stop exploding once the number of pieces equals the set limit.
echo "Line count: " . count($convert1) . "\n";

for ($i=0;$i<count($convert1);$i++)
{
    echo $convert1[$i] . "\n"; //write value by index and add carriage return.
}

//++++++++++++++++++++++++++

?>

