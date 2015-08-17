<?php
//include_once('../includes/pw5new.php');
//include_once('../includes/functions.php');
//
////$query="select id, name from blobimages where id = $id;";
//$query="select id, name, filetype from blobimages where image != \"NULL\";";
////$query="select id, name, filetype from blobimages where id = 42;";
//$result=mysql_query($query);
//confirm_query($result);
//$arraydata = array();
//
//while ($row = mysql_fetch_array($result))
//        array_push($arraydata, array(
//                'id' => $row[0],
//                'name' => $row[1],
//                'filetype' => $row[2]
//                ));
//        echo json_encode(array("imagelist" => $arraydata));

//	$servername='ALIENWARE';
ini_set('display_errors',1);
error_reporting(E_ALL);

//https://www.youtube.com/watch?v=72XCFF4YiOw  (8:10 minute mark).
//This isn't working yet.
	$servername='ALIENWARE\\SQLEXPRESS';
	$connectioninfo=array('Database'=>'Holland');
	$conn=sqlsrv_connect($servername, $connectioninfo);
		if($conn){
			echo 'Connection established<br />';
		}
		else{
			echo 'Connection failure<br />';
			die(print_r(sqlsrv_errors(), TRUE));
		}
?>
