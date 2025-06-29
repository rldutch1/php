<?php
//How to write prepare and execute statements in OOP PDO?
//https://stackoverflow.com/questions/42551050/how-to-write-prepare-and-execute-statements-in-oop-pdo
//https://culttt.com/2012/10/01/roll-your-own-pdo-php-class/

class Database
{
//Sometimes the host can cause (Fatal error: Uncaught Error: Call to a member function prepare) if you are using a DNS name for the host. Try using a loopback 127.0.0.1 address if you are experiencing issues.
private $host = "TheDatabaseServerName";
private $dbName = "TheDatabaseName";
private $user = "TheDatabaseUser";
private $pass = "TheDatabasePassword";
private $charset = 'utf8';

private $dbh;
private $error;
private $stmt;

//connection
//When a class has a construct method, it is automatically called on all newly-created objects. 
//This enables you to set up any initialization you might need on the new object before it is used.
public function __construct()
{
	//Set DSN:
		$dsn = "mysql:host=" . $this->host . ";dbname=" . $this->dbName . ";charset=" . $this->charset;
	//Set options:
		$option0 = array( //Fetch assoc.
		PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
		PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
		PDO::ATTR_EMULATE_PREPARES => false
	);
		$option1 = array( //Fetch num.
		PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
		PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_NUM,
		PDO::ATTR_EMULATE_PREPARES => false
	);
		$option2 = array( //Fetch both.
		PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
		PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_BOTH,
		PDO::ATTR_EMULATE_PREPARES => false
	);

try {
	// setup connection
		$this->dbh = new PDO($dsn, $this->user, $this->pass, $option0);
	}
catch (PDOException $e) {
	//catch any errors
	//There is a cool looking function called MakePrettyException on this webpage https://www.php.net/manual/en/exception.gettrace.php

		$this->error = $e->getMessage();
		//$this->error = var_dump($e->getTrace());
}
}

//prepare statement
public function myQuery($query)
{
		$this->stmt = $this->dbh->prepare($query);
}

//bind values
public function bind($param, $value, $type = null)
{
	if (is_null($type)) {
	switch (true) {
	case is_int($value):
		$type = PDO::PARAM_INT;
	break;
	case is_bool($value):
		$type = PDO::PARAM_BOOL;
	break;
	case is_null($value):
		$type = PDO::PARAM_NULL;
	break;
	default:
		$type = PDO::PARAM_STR;
	}
}
//actual value binding
	$this->stmt->bindValue($param, $value, $type);
}
//execute statement
public function run()
{
	return $this->stmt->execute();
}

//Return a single row of data.
public function SingleRow(){
$this->run();
return $this->stmt->fetch();
}

//Return multiple rows of data.
public function All(){
$this->run();
return $this->stmt->fetchall();
}

//Count number of rows of data.
public function rowCount() {
    return $this->stmt->rowCount();
}

//Return last_InsertId.
public function lastInsertId(){
return $this->dbh->lastInsertId();
}

//Begin Transaction.
public function beginTransaction() {
    return $this->dbh->beginTransaction();
}

//End Transaction.
public function endTransaction() {
    return $this->dbh->commit();
}

//Debug Dump Parameters
public function debugDumpParams() {
    return $this->stmt->debugDumpParams();
}
}

?>
