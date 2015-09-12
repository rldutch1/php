<?php

include('connect_pdo.php');
require('blobimage_class.php');

$query0 = $handler->query('select max(id) as maxid from blobimages');
$query0->setFetchMode(PDO::FETCH_CLASS, 'ImageCount'); //Fetching the ImageCount class in blobimage_class.php.

echo "
<html>
<title>Images</title>
<head>

<script src='http://code.jquery.com/jquery-latest.min.js'></script>
<link rel='stylesheet' type='text/css' href='filename.css' />

</head>
<style>
body
{
background-color:#c0c0c0;
}
</style>
<body>

<table>
<tr>
	<td colspan='1'></td>
	<td align='center'></td>
	<td colspan='1'></td>
</tr>

<tr>
<td colspan='3'>
<hr />
</td>
</tr>

<tr>
<td width='33%' align='left'>
XXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
</td>
<td width='33%' align='center'>
<a href='dbimages.php'>Upload Images.</a>
</td>
<td width='33%' align='right'>
XXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
</td>
</tr>
</table>
<br />
<div>
<form action='blobimageshow.php' method='POST'>
	Image ID: <input type='text' name='id' />";

	while($r = $query0->fetch()) {
	echo "<input type='submit' name='submit' value='Submit'> (highest image number is: $r->imagecount)"; //Output the sentence created in the class.
	}

echo "
	<br />
</form>
</div>
<div id='myDiv'></div>
</body>
</html>";

?>
