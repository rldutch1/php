<?php


include('onselect_connect_pdo.php');

$firstname = $_POST['element_1_1'];
$lastname = $_POST['element_1_2'];
$birthdate = $_POST['element_2_3'] . "-" . $_POST['element_2_1'] . "-" . $_POST['element_2_2'];
$hometown = $_POST['element_3'];
$job = $_POST['element_4'];

//$query="insert into h_mar (firstname, lastname, birthdate, hometown, job, symptom) values
//				($x1, $x2, '" . $x3 ."', {$x4}, '" . $x5 . "', '" . $x6 . "');";
$ip=$handler->prepare("insert into onselect (firstname, lastname, birthdate, hometown, job) values (:firstname, :lastname, :birthdate, :hometown, :job);");
				$ip->bindValue(':firstname',$firstname,PDO::PARAM_STR);
				$ip->bindValue(':lastname',$lastname,PDO::PARAM_STR);
				$ip->bindParam(':birthdate',$birthdate,PDO::PARAM_INT);
				$ip->bindValue(':hometown',$hometown,PDO::PARAM_STR);
				$ip->bindValue(':job',$job,PDO::PARAM_STR);
$ip->execute();
$last_id = $handler->lastInsertID(); //This is used to match the record for the h_temp table.

//    echo "New record created successfully. Last inserted ID is: " . $last_id;
$q1="Record added successfully.<br />";
echo "<br /><br /><a href='onselectadd_pdo.php'>Add another person</a> or <a href='onselect_pdo.php'>Go Back.</a>";
?>
