<?php
//read text per line and convert to array

//for example, the input file is readtextperline.txt
//the input file contains text below

//one
//two
//three
//four
//five

//++++++++++++++++++++++++++

//read value per line

$data = file_get_contents("readtextperline.txt"); //read the file
$convert = explode("\n", $data); //create array separate by new line
echo "Line count: " . count($convert) . "\n";

for ($i=0;$i<count($convert);$i++)
{
    echo $convert[$i] . "\n"; //write value by index and add carriage return.
}

//++++++++++++++++++++++++++

//Output :

//one, two, three, four, five,
?>

