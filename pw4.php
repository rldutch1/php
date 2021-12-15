<?php

//database server
define('db_server', 'dbname.db.2627262.hostedresource.com');
//define('db_server', 'localhost');

//user, password, and database variables

$db_user = 'dbuser';
$db_password = 'dbpassword';
$db_dbname = 'dbname';

//echo $q;
$con = mysql_connect(db_server, $db_user, $db_password);
 if (!$con)
   {
   die('Could not connect: ' . mysql_error());
   }

mysql_select_db($db_dbname, $con);

?>
