<?php
/*
*Program Author: Robert Holland
*Program Name: cidb.mdb.php.php
*Creation Date:  Wednesday, March 29, 2017  17:06:37
*Last Modified:
*Copyright: (c)  Wednesday, March 29, 2017
*Purpose: Connect to Microsoft Access database using PHP PDO.
*Source: http://stackoverflow.com/questions/13787686/accdb-and-pdo-php-connection-error
*/

if (isset($argv[1])){
	$argument1 = $argv[1];

$filename="cidb.output.txt";

try {
   $handler = new PDO("odbc:Driver={Microsoft Access Driver (*.mdb, *.accdb)};Dbq=//phx00027/unix/CSM/Database Management/CIDB.MDB;");

//I cheated by setting up the query in MSAcess then copying and pasting it here.
   $query=$handler->query("SELECT DISTINCT(EUC_EnvPkg.PkgNum) AS Package_Num, EUC_EnvPkg.pkgversion AS Version, EUC_Env.EnvName AS Domain, EUC_EnvPkg.InstallDate, EUC_PkgDefinition.PkgName, EUC_PkgType.PkgTypeDescription
FROM (EUC_EnvPkg INNER JOIN EUC_Env ON EUC_EnvPkg.Env_id = EUC_Env.Env_id) INNER JOIN (EUC_PkgDefinition INNER JOIN EUC_PkgType ON EUC_PkgDefinition.PkgTypeCd = EUC_PkgType.PkgTypeCd) ON EUC_EnvPkg.PkgNum = EUC_PkgDefinition.PkgNum
WHERE (((EUC_EnvPkg.PkgNum) in (". $argument1 ."))) order by EUC_EnvPkg.PkgNum, EUC_Env.EnvName;");
$dataout = fopen($filename, "w") or die("Unable to open file!");
$txt = "";
	foreach($query as $r){
		//echo "Package Number: " . $r[0] . "\r\nPackage Version: " . $r[1] . "\r\nDomain: " . $r[2] . "\r\nInstall Date: " . $r[3] . "\r\nPackage Name: " . $r[4] . "\r\nPackage Type: " . $r[5] . "\r\n\r\n";
		//file_put_contents($filename, "Package Number: " . $r[0] . "\r\nPackage Version: " . $r[1] . "\r\nDomain: " . $r[2] . "\r\nInstall Date: " . $r[3] . "\r\nPackage Name: " . $r[4] . "\r\nPackage Type: " . $r[5] . "\r\n\r\n",0);
		$txt .="Package Number: " . $r[0] . "\r\nPackage Version: " . $r[1] . "\r\nDomain: " . $r[2] . "\r\nInstall Date: " . $r[3] . "\r\nPackage Name: " . $r[4] . "\r\nPackage Type: " . $r[5] . "\r\n\r\n";
	}
		fwrite($dataout, $txt);

//Show all package numbers begin:
//  $query=$handler->query("SELECT DISTINCT(EUC_EnvPkg.PkgNum) AS Package_Num, EUC_EnvPkg.pkgversion AS Version FROM EUC_EnvPkg;");

//	foreach($query as $r){
//		echo "Package Number: " . $r[0] . "\r\nPackage Version: " . $r[1] . "\r\n\r\n";
//	}
//Show all package number end:

/*** close the database connection ***/
    $handler = null;
}

catch(PDOException $e)
    {
    echo $e->getMessage();
    }

}
else {
	$argument1 = 0;
	echo "No data supplied. Enter a single package number or many separated by a comma.\r\n";
	echo "Example: cidb.mdb.php 12345,54321,23451,31245\r\n";
	echo "Data will be written to cidb.output.txt";
}

?>
