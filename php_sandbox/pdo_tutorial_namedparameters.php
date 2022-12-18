<?php
//https://www.youtube.com/watch?v=RcW8mMiIexc
	include 'pdo_tutorial_connect.php';
echo "<a href='https://www.youtube.com/watch?v=iKWSG1MfEWo' target='_blank'>Lesson 7 - Prepared statements with named parameters.</a><br />";
$stmt = $db->prepare("select * from names where firstname = :firstname"); //Using "=".
//$stmt = $db->prepare("select * from names where firstname like ?"); //Using "LIKE".
//$stmt->bindValue(1,'Andy'); //=:searching for one value.
//$stmt->bindValue(1,'2'); //LIKE:wildcard search for anything with the letter "e".
//$stmt->bindValue(2,'%e%');

$names = array('Belinda','Emma','Godfrey','Hettie','Freddie','Brian');
//foreach ($names as $name) {
$stmt->bindValue(':firstname','Belinda',PDO::PARAM_STR);
$stmt->execute();

//Fetch returns the database contents one row at a time and you loop through
//using a while loop. Fetch uses less memory than fetchAll but fetch creates
//more queries because it sends a query to the database for each row it returns.
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
//while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
//while ($row = $stmt->fetch(PDO::FETCH_BOTH)) {

	echo htmlentities($row['firstname']) . " " . htmlentities($row['lastname']) . " " . htmlentities($row['postcode']) . " " . "<br />";
	//echo "<pre>" . var_dump($row) . "</pre>";

}
//}
echo "<div><br /><img src='lesson6_bindValue.png'><br /></div>";
echo "<div><br /><img src='lesson6_bindParam.png'><br /></div>";
echo "<div><br /><img src='lesson6_bindParam1.png'><br /></div>";
echo "<div><br /><img src='lesson6_bindParam2.png'><br /></div>";
echo "<div><br /><img src='lesson6_bindParam3.png'><br /></div>";
?>


