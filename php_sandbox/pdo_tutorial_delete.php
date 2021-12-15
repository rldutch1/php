<?php
echo "<a href='https://www.youtube.com/watch?v=7Rt-wXLud7o' target='_blank'>Lesson 8 Insert, Update and delete records - Youtube Video<a/><br /><br />";

include('pdo_tutorial_connect.php');

$stmt = $db->prepare("delete from names where firstname = :firstname;");

$stmt->bindValue(':firstname', 'Karyn');
$stmt->execute();


?>

<?php
//echo "<img src='lesson8_pdo_tutorial_insert.png'/><br /><br /><img src='lesson8_pdo_tutorial_insert1.png'/><br />Update field in database table.<br />";
?>