<html>
<head>
<title></title>
<script type="text/javascript" src="js/filename.js"></script>
<link rel="stylesheet" type="text/css" href="css/filename.css" />

<script type="text/javascript">
//alert("Hello");
</script>

</head>
<body>
<p>
$query = $handler->query('select * from guestbook');<br />
if($query->rowCount()) {<br />
		echo "Number of rows: ", $query->rowCount(),"<br />";
		while($r = $query->fetch(PDO::FETCH_OBJ)){<br />
			echo $r->name, " ", $r->message, " ", $r->posted, "<br />";
		}<br />
	} else {<br />
		echo "No Results";<br />
	}<br />
</p>

</body>
</html>

<?php
echo "<br /><br /><a href='index.php'>Page 1</a><br />";
include_once('connect_pdo.php');

echo '<hr /><br />Part 8 of 8 - Row count. <br />';
echo 'Using the rowCount() method. <br />';

$query = $handler->query('select * from guestbook');
if($query->rowCount()) {
		echo "Number of rows: ", $query->rowCount(),"<br />";
		while($r = $query->fetch(PDO::FETCH_OBJ)){
			echo $r->name, " ", $r->message, " ", $r->posted, "<br />";
		}
	} else {
		echo "No Results";
	}
?>


