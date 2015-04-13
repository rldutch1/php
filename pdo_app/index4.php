<?php
echo "<br /><br /><a href='index5.php'>Page 6</a><br />";

include_once('connect_pdo.php');

echo '<hr /><br />Part 7 of 8 - Getting last insert ID. <br />';
echo 'Using the lastInsertID() method. Each time this page is opened/refreshed it will <br />';
echo 'insert a row to the guestbook table then use lastInsertID() to grab the id of the last <br />';
echo 'inserted ID. <br />';

//$name = $_POST['name']; //Posted from a form.
//$message = $_POST['message']; //Posted from a form.

function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

$name = generateRandomString(); //"persons name";
$message = "This is a message from {$name}."; // persons name.";

//$query0 = $handler->query('select * from guestbook');

//First method using :name, :message.
//$sql = "insert into guestbook (name, message, posted) values (:name,:message,now())";

//Second method using question marks.
$sql = "insert into guestbook (name, message, posted) values (?,?,now())";

$query = $handler->prepare($sql); //The $sql statement is prepared but not executed here.
						//Using prepare() here instead of query(). The difference between the two
						//is that prepare() will not execute the query, it will only prepare it.


//$query->execute(); //This will produce an error that says invalid parameter number: no parameters were bound.
						//This means that we have to bind the values (:name, :message) that we want to insert into the table.

	//First method to remove the error is creating an array to bind the data.
			//	$query->execute(array(
			//		':name' => $name,
			//		':message' => $message
			//	));

	//Second method is using question marks in the data fields.
					$query->execute(array($name, $message));

	echo $handler->lastInsertID(); //The last insert id comes from the $handler in the connect.php file.


?>