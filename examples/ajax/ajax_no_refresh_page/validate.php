<?php

//echo "Working ...";

	$name = $_POST['postname'];
	$age = $_POST['postage'];

if($age >= 18){
	echo "1";
	}
else {
	echo ""; //Echoing 0 gets sent to the page.
	}

//	$carselect = intval($_GET['q']);
	$carselect = $_GET['q'];
	if($carselect == "1"){
		echo "Volvo";
	}
	if($carselect == "2"){
		echo "Saab";
	}
	if($carselect == "3"){
		echo "Opal";
	}
	if($carselect == "4"){
		echo "Audi";
	}
	


?>