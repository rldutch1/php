<?php

//PHP: Row Count

//http://php.net/manual/en/pdostatement.rowcount.php

//https://stackoverflow.com/questions/883365/row-count-with-pdo

 

$sql = "SELECT COUNT(*) FROM fruit WHERE calories > 100";

if ($res = $conn->query($sql)) {

 

    /* Check the number of rows that match the SELECT statement */

    if ($res->fetchColumn() > 0) {

 

        /* Issue the real SELECT statement and work with the results */

        $sql = "SELECT name FROM fruit WHERE calories > 100";

 

        foreach ($conn->query($sql) as $row) {

            print "Name: " .  $row['NAME'] . "\n";

        }

    }

    /* No rows matched -- do something else */

    else {

        print "No rows matched the query.";

    }

}

 

$res = null;

$conn = null;

?>

 

Another Working Example:

<?php

/*

*Program Author: Robert Holland

*Program Name: packagecheck.php

*Creation Date:  Wednesday, March 29, 2017  17:06:37

*Last Modified:

*Copyright: (c)  Wednesday, March 29, 2017

*Purpose: Connect to Microsoft Access database using PHP PDO.

*Source: http://stackoverflow.com/questions/13787686/accdb-and-pdo-php-connection-error

*Test Data Bash:

*                             T1: php -f packagecheck.php 996500,1297730,995600,1296150; cat packagecheck.txt

*                             T2: php -f packagecheck.php 99650,129773,99560,129615; cat packagecheck.txt

*Test Data Windows:

                                T1: php -f packagecheck.php 9965000,12977300,9956000,12961500 & type packagecheck.txt

                                T2: php -f packagecheck.php 996500,1297730,995600,1296150 & type packagecheck.txt

*/

 

$filename= basename(__FILE__,'.php') .".txt";

if (isset($argv[1])){

                $argument1 = $argv[1];

 

try {

   $handler = new PDO("odbc:Driver={Microsoft Access Driver (*.mdb, *.accdb)};Dbq=//phx00027/unix/CSM/Database Management/CIDB.MDB;");

    }

catch(PDOException $e)

    {

    echo $e->getMessage();

    }

 

//Checking the row count.

$count = "SELECT COUNT(*) as NAME FROM EUC_EnvPkg WHERE EUC_EnvPkg.PkgNum in ({$argument1})";

if ($res = $handler->query($count)) {

                                                                $dataout = fopen($filename, "w") or die("Unable to open file!");

 

    /* Check the number of rows that match the SELECT statement */

    if ($res->fetchColumn() > 0) {

 

        /* Issue the real SELECT statement and work with the results */

                                                                //It was easier to setup the query in MSAcess then copy and paste it here.

                                                                $query=$handler->query("SELECT DISTINCT(EUC_EnvPkg.PkgNum) AS Package_Num, EUC_EnvPkg.pkgversion AS Version, EUC_Env.EnvName AS Domain, EUC_EnvPkg.InstallDate, EUC_PkgDefinition.PkgName, EUC_PkgType.PkgTypeDescription

                                                                FROM (EUC_EnvPkg INNER JOIN EUC_Env ON EUC_EnvPkg.Env_id = EUC_Env.Env_id) INNER JOIN (EUC_PkgDefinition INNER JOIN EUC_PkgType ON EUC_PkgDefinition.PkgTypeCd = EUC_PkgType.PkgTypeCd) ON EUC_EnvPkg.PkgNum = EUC_PkgDefinition.PkgNum

                                                                WHERE (((EUC_EnvPkg.PkgNum) in (". $argument1 ."))) order by EUC_EnvPkg.PkgNum, EUC_Env.EnvName;");

                                                                $query->execute();

                                                                $txt = "";

                                                                                foreach($query as $r){

                                                                                                //echo "Package Number: " . $r[0] . "\r\nPackage Version: " . $r[1] . "\r\nDomain: " . $r[2] . "\r\nInstall Date: " . $r[3] . "\r\nPackage Name: " . $r[4] . "\r\nPackage Type: " . $r[5] . "\r\n\r\n";

                                                                                                //file_put_contents($filename, "Package Number: " . $r[0] . "\r\nPackage Version: " . $r[1] . "\r\nDomain: " . $r[2] . "\r\nInstall Date: " . $r[3] . "\r\nPackage Name: " . $r[4] . "\r\nPackage Type: " . $r[5] . "\r\n\r\n",0);

                                                                                                $txt .="Package Number: " . $r[0] . "\r\n Package Version: " . $r[1] . "\r\n      Domain: " . $r[2] . "\r\n Install Date: " . $r[3] . "\r\n          Package Name: " . $r[4] . "\r\n   Package Type: " . $r[5] . "\r\n\r\n";

                                                                                }

                                                                fwrite($dataout, $txt);

                                                                echo "Data written to " . $filename . ".\r\n";

                                                                //Show all package numbers begin:

                                                                //  $query=$handler->query("SELECT DISTINCT(EUC_EnvPkg.PkgNum) AS Package_Num, EUC_EnvPkg.pkgversion AS Version FROM EUC_EnvPkg;");

 

                                                                //            foreach($query as $r){

                                                                //                            echo "Package Number: " . $r[0] . "\r\nPackage Version: " . $r[1] . "\r\n\r\n";

                                                                //            }

                                                                //Show all package number end:

 

                                                                /*** close the database connection ***/

                                                                $handler = null;

    }

    /* No rows matched -- do something else */

    else {

        print "No rows matched the package number(s) {$argument1}.";

        fwrite($dataout, "No rows matched the package number(s) {$argument1}.");

    }

}

}

else {

                $argument1 = 0;

                echo "**No data supplied.**\r\n Enter a single package number or many separated by a comma with no spaces.\r\n";

                echo "   Example: php -f " . basename(__FILE__) . " 12345,54321,23451,31245\r\n";

                echo " Data will be written to " . $filename . ".";

}

?>
