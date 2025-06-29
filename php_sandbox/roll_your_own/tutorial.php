<?php
//https://culttt.com/2012/10/01/roll-your-own-pdo-php-class/
include "database.class.php";

//// Define DB configuration in this local file to make connections more flexable to different DBs.
//define("DB_HOST", "localhost");
//define("DB_USER", "username");
//define("DB_PASS", "password");
//define("DB_NAME", "database");

//public function __construct() {
//// Set DSN
//$dsn = "mysql:host=" . $this->host . ";dbname=" . $this->dbname;
//}

// Instantiate database connection.
$database = new Database();

$database->myQuery(
    "INSERT INTO mytable (FName, LName, Age, Gender) VALUES (:fname, :lname, :age, :gender)"
);

$database->bind(":fname", "VeryLoudBarky3");
$database->bind(":lname", "Holland");
$database->bind(":age", "10");
$database->bind(":gender", "Male");

//$database->execute();
//
//echo $database->lastInsertId();

  if($database->run()){

  echo "record inserted";
  $lastid = $database->lastInsertId(); //Getting the last inserted ID
  echo "Last ID = " . $lastid . "\r\n";
  }

//Insert multiple records using a Transaction
//The next test we will try is to insert multiple records using a Transaction so that we don’t have to repeat the query.
//
//The first thing we need to do is to begin the Transaction.
$database->beginTransaction();

//Next we set the query.
$database->myQuery(
    "INSERT INTO mytable (FName, LName, Age, Gender) VALUES (:fname, :lname, :age, :gender)"
);

//Bind data for the 1st query.
$database->bind(":fname", "BigPuppy3");
$database->bind(":lname", "Holland");
$database->bind(":age", "10");
$database->bind(":gender", "Female");

//Execute the 1st query.
  if($database->run()){

  echo "record inserted";
  $lastid = $database->lastInsertId(); //Getting the last inserted ID
  echo "Last ID = " . $lastid . "\r\n";
  }

//Bind data for the 2nd query.
$database->bind(":fname", "FamilyPet3");
$database->bind(":lname", "Holland");
$database->bind(":age", "10");
$database->bind(":gender", "Female");

//Execute the 2nd query.
if($database->run()){

echo "record inserted";
$lastid = $database->lastInsertId(); //Getting the last inserted ID
echo "Last ID = " . $lastid . "\r\n";
}

$database->endTransaction();
