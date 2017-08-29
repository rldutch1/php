<?php
//http://stackoverflow.com/questions/25712045/connect-pdo-with-oracle-database
//Haven't tested this yet.

$tns = "
(DESCRIPTION =
    (ADDRESS_LIST =
      (ADDRESS = (PROTOCOL = TCP)(HOST = localhost)(PORT = 1521))
    )
    (CONNECT_DATA =
      (SERVICE_NAME = orcl)
    )
  )
       ";

try {
    $conn = new PDO("oci:dbname=".$tns, 'customsearch', 'babaji');
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo 'Connected to database';
} catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}

?>
