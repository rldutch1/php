<?php
/*
mysql> describe tasktracker;
+----------+---------------+------+-----+-------------------+-----------------------------+
| Field    | Type          | Null | Key | Default           | Extra                       |
+----------+---------------+------+-----+-------------------+-----------------------------+
| id       | int(11)       | NO   | PRI | NULL              | auto_increment              |
| tasklist | varchar(1000) | NO   |     | NULL              |                             |
| cur_dttm | timestamp     | NO   |     | CURRENT_TIMESTAMP | on update CURRENT_TIMESTAMP |
| utc_dttm | datetime      | NO   |     | NULL              |                             |
+----------+---------------+------+-----+-------------------+-----------------------------+
4 rows in set (0.00 sec)

mysql> insert into tasktracker (tasklist) values (utc_timestamp());

*/

//database server
define('db_server', 'dbname.db.2627262.hostedresource.com');
//define('db_server', 'localhost');

//user, password, and database variables
$db_user = 'dbuser';
$db_password = 'dbpassword';
$db_dbname = 'dbname';

 $con = mysql_connect(db_server, $db_user, $db_password);
 if (!$con)
   {
   die('Could not connect: ' . mysql_error());
   }

mysql_select_db($db_dbname, $con);
$tasklist = urlencode(tasklist);
$sql="INSERT INTO tasktracker (tasklist,utc_dttm)
 VALUES
 ('$_POST[$tasklist]',utc_timestamp())";

/*
$sql="INSERT INTO tasktracker (tasklist, utc_dttm)
 VALUES
 ('$_POST[tasklist]',utc_timestamp())";
*/

/*
$sql="INSERT INTO disneymovies (title, disc)
 VALUES
 ('$_POST[title]','$_POST[disc]')";
*/

if (!mysql_query($sql,$con))
   {
   die('Error: ' . mysql_error());
   }

 echo "1 record added";


mysql_close($con)

?>
