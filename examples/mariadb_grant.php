<?php
// ----------------------------------------------------------------------------
// Script Author: Robert Holland
// Script Name: mariadb_grant.php
// Creation Date: Fri Jan 20 2023 23:20:08 GMT-0700 (MST)
// Last Modified: 20230120232231
// Copyright (c)2023
// Version: 1.0.0
// Purpose: Generate MariaDB GRANT statements for databases (You will need to manually remove system DBs).
// ----------------------------------------------------------------------------

//How to write prepare and execute statements in OOP PDO?
//https://stackoverflow.com/questions/42551050/how-to-write-prepare-and-execute-statements-in-oop-pdo
//https://stackoverflow.com/questions/18679448/pdo-class-is-this-technically-correct

include'connect.php';


$dbshow = new Connection(); //Instantiate a new connection.
$dbshow->myQuery("show databases;");
$rows = $dbshow->All();

//Generate random string of specified length.
  function generateRandomString($length) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    //$characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'; //Random uppercase and lowercase letters only.
    //$characters = 'abcdefghijklmnopqrstuvwxyz'; //Random lowercase letters only.
    //$characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ'; //Random uppercase letters only.
    //$characters = '0123456789'; //Random numbers only.
    $charactersLength = strlen($characters);
    $randomString = '';
  for ($i = 0; $i < $length; $i++) {
    $randomString .= $characters[rand(0, $charactersLength - 1)];
  }
    return $randomString;
  }
//$ThePassword = generateRandomString(64); //Pass the number of random characters to generate.
//echo $ThePassword . "\r\n";

function myfunction($value,$key)
 {
 	$dbusername = "XXXXX";
 	$ThePassword = generateRandomString(8); //Random 8 characters.
 //echo "The key $key has the value $value. ";
 echo "CREATE USER '$dbusername'@'%' IDENTIFIED VIA mysql_native_password USING '$ThePassword'; \r\n";
 echo "GRANT USAGE ON $value.* TO '$dbusername'@'%' REQUIRE NONE WITH MAX_QUERIES_PER_HOUR 0 MAX_CONNECTIONS_PER_HOUR 0 MAX_UPDATES_PER_HOUR 0 MAX_USER_CONNECTIONS 0; GRANT ALL PRIVILEGES ON `$value`.* TO '$dbusername'@'%'; GRANT ALL PRIVILEGES ON `$value\_%`.* TO '$dbusername'@'%'; \r\n";
 //Example:
 //GRANT USAGE ON robdba3.* TO 'robdba5'@'%' REQUIRE NONE WITH MAX_QUERIES_PER_HOUR 0 MAX_CONNECTIONS_PER_HOUR 0 MAX_UPDATES_PER_HOUR 0 MAX_USER_CONNECTIONS 0; GRANT ALL PRIVILEGES ON `robdba3`.* TO 'robdba5'@'%'; GRANT ALL PRIVILEGES ON `robdba3\_%`.* TO 'robdba5'@'%';
 }
 $i=count($rows);
 for($x = 0; $x < $i; $x++){
 array_walk($rows[$x],"myfunction");
 }
?>
