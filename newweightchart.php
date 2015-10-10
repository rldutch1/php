<?php
//database server
define('db_server', 'dbname.db.2627262.hostedresource.com');

//user, password, and database variables
$db_user = 'dbusername';
$db_password = 'dbpassword';
$db_dbname = 'databasename';

function outputQueryResults() {
        //$q=$_POST["title"];
        //run select query
        $select_query = "select date, pounds from weight order by date desc limit 4;";
        $result = mysql_query($select_query) or die ("Bad query: " . mysql_error() );
        //output HTML


while ($row = mysql_fetch_row($result)){ //This line works on MySQL version 5.5.27
        echo "[";
        foreach ($row as $val) {
                echo "'$val',";
        }
        echo "],\n";
}
        echo "Line 24\n";
}


/*
while($row = mysql_fetch_assoc($result))
	{
		
		$Date = $row["date"];
		$Pounds = $row["pounds"];
		echo "['" . $Date . "','" . $Pounds . "']";	
	}

while($row = mysql_fetch_assoc($result))
	{
		$imageData = $row["image"];
		$imageType = $row["filetype"];
		$imageName = $row["name"];
	}
*/

//Connect to the Database Server
 $con = mysql_connect(db_server, $db_user, $db_password);
 if (!$con)
   {
   die('Could not connect: ' . mysql_error());
   }
        else {
               // echo "Search Results...\n";
        }
//select database name
mysql_select_db($db_dbname);

//run query and output results
outputQueryResults();

//close database connection
mysql_close($con)

/* FROM PHP THE DATA HAS TO LOOK LIKE THIS TO BE IN THE CHART
          ['2013-06-11', 194.1],
          ['2013-06-10', 191.3],
          ['2013-06-09', 192.1],
          ['2013-06-08', 193.4],
          ['2013-06-07', 192.5]
*/

?>
