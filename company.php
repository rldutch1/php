<?php
include_once('../includes/functions.php');
include_once('../includes/pw5.php');

$query="select * from company";
confirm_query($query);
$res = mysql_query($query);
$result = array();

while( $row = mysql_fetch_array($res)) //Loop through the results.
    array_push($result, array('name' => $row[1],
                              'age' => $row[2],
                              'company' => $row[3]
                              )); //Store the results in an array.
    echo json_encode(array("result" => $result));
    
?>