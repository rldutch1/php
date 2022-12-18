<?php
include('onselect_connect_pdo.php');

$firstname = $_POST['element_1_1'];
$lastname = $_POST['element_1_2'];
$birthdate = $_POST['element_2_3'] . "-" . $_POST['element_2_1'] . "-" . $_POST['element_2_2'];
$hometown = $_POST['element_3'];
$job = $_POST['element_4'];

//$all = $firstname . "-" . $lastname . "-" . $birthdate . "-" . $hometown . "-" . $job;
//echo $all;

$ip=$handler->prepare("insert into onselect (firstname, lastname, birthdate, hometown, job) values (:firstname, :lastname, :birthdate, :hometown, :job);");
				$ip->bindValue(':firstname',$firstname,PDO::PARAM_STR);
				$ip->bindValue(':lastname',$lastname,PDO::PARAM_STR);
				$ip->bindParam(':birthdate',$birthdate,PDO::PARAM_STR);
				$ip->bindValue(':hometown',$hometown,PDO::PARAM_STR);
				$ip->bindValue(':job',$job,PDO::PARAM_STR);
$ip->execute();
$last_id = $handler->lastInsertID(); //

    echo "New record created successfully. Last inserted ID is: " . $last_id;

echo "<br /><br /><a href='onselectadd_pdo.php'>Add another person</a> or <a href='onselect_pdo.php'>Go Back.</a>";
?>
