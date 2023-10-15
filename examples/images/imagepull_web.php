<?php
echo "
&lt;?php<br />
<br />
try {<br />
	//include('x.php');//x.php has the connection string below.<br />
	\$handler = new PDO('mysql:host=127.0.0.1;dbname=thedatabase;', 'theusername', 'thepassword'); //Setting the handler. See next line if this line fails.<br />
	\$handler-&gt;setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //Setting the attributes for the handler that we want to see if exception error.<br />
}<br />
//global \$handler<br />
catch(PDOException \$e) { //Return the PDO exception and naming it \$e.<br />
//	echo 'Caught';<br />
//	die('Sorry database problem.'); //Production message.<br />
	echo \$e-&gt;getMessage(); //Show specific error message. Development.<br />
}<br />
<br />
//	\$id = htmlentities(\$argv[1]);<br />
	\$id = htmlentities(\$_GET['id']);<br />
//	\$id = \"55\";<br />
	\$query = \$handler-&gt;prepare(\"select * from blobimages where id = :id;\");<br />
	\$query-&gt;bindParam(':id',\$id);<br />
	\$query-&gt;execute();<br />
<br />
	while(\$r=\$query-&gt;fetch(PDO::FETCH_OBJ)){<br />
		\$imageData = \$r-&gt;image;<br />
		\$imageType = \$r-&gt;filetype;<br />
		\$imageName = \$r-&gt;name;<br />
		//Header that gets sent to the browser.<br />
		header(\"content-type: \$imageType\");<br />
		//Display the image:<br />
		echo \$imageData;<br />
	}<br /><br />

?&gt;<br /><br />
";


try {
	//include('x.php');//x.php has the connection string below.
	$handler = new PDO('mysql:host=127.0.0.1;dbname=thedatabase;', 'theusername', 'thepassword'); //Setting the handler. See next line if this line fails.
	$handler->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //Setting the attributes for the handler that we want to see if exception error.
}
//global $handler
catch(PDOException $e) { //Return the PDO exception and naming it $e.
//	echo 'Caught';
//	die('Sorry database problem.'); //Production message.
	echo $e->getMessage(); //Show specific error message. Development.
}

//	$id = htmlentities($argv[1]);
	$id = htmlentities($_GET['id']);
//	$id = "55";
	$query = $handler->prepare("select * from blobimages where id = :id;");
	$query->bindParam(':id',$id);
	$query->execute();

	while($r=$query->fetch(PDO::FETCH_OBJ)){
		$imageData = $r->image;
		$imageType = $r->filetype;
		$imageName = $r->name;
		//Header that gets sent to the browser.
		header("content-type: $imageType");
		//Display the image:
		echo $imageData;
	}
/*The blobimages database table:
+----------+------------------+------+-----+---------+----------------+
| Field    | Type             | Null | Key | Default | Extra          |
+----------+------------------+------+-----+---------+----------------+
| id       | int(11) unsigned | NO   | PRI | NULL    | auto_increment |
| name     | varchar(255)     | NO   |     | NULL    |                |
| filetype | varchar(128)     | NO   |     | NULL    |                |
| image    | longblob         | NO   |     | NULL    |                |
+----------+------------------+------+-----+---------+----------------+

//Filetype examples:
+-----------------+
| filetype        |
+-----------------+
| image/png       |
| image/jpeg      |
| application/pdf |
| image/gif       |
| image/pjpeg     |
+-----------------+
*/

?>
