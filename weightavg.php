<?
include('includes/pw3.php');
include('mysql_to_json.class.php');

//database server
define('db_server', 'dbname.db.2627262.hostedresource.com');
//define('db_server', 'localhost');

$q=$_POST["weightday"];
$r=$_POST["weightpounds"];
$s=$_POST["workout"];


//echo $q;
$con = mysql_connect(db_server, $db_user, $db_password);
 if (!$con)
   {
   die('Could not connect: ' . mysql_error());
   }

mysql_select_db($db_dbname, $con);


//$query="insert into weight (date, pounds, workout) values ('".$q."','".$r."','".$s."');" .
$query="select avg(pounds) from weight order by date desc limit 10;";


if (!mysql_query($query,$con))
   {
   die('Error: ' . mysql_error());
   }
/*else
	{
		echo "<hr />" . $q . " " . $r . " " . $s . " <br />record added.";
	}
*/
//create a new instance of mysql_to_json
$mtj = new mysql_to_json($query);

//show the json output
echo $mtj->get_json();


mysql_close($con)

?>
