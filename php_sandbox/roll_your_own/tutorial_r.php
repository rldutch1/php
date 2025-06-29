<?php
//https://culttt.com/2012/10/01/roll-your-own-pdo-php-class/
include "database.class.php";

// Instantiate database connection.
$database = new Database();
$database->myQuery("show databases;");
$database->myQuery("select FName, LName, Age, Gender from mytable where id > :id;");
$database->bind(':id',0);
$rows = $database->All();

echo '<pre>';
print_r($rows);
echo '</pre>';

////Works7:
// $i=count($rows);
// for($x = 0; $x < $i; $x++){
// $y = $rows[$x];
// echo $y['TABLE_NAME'] . " " . $y['IS_UPDATABLE'] . " ";
// }