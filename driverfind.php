<?php
//Find the available PHP PDO database drivers.
print_r(PDO::getAvailableDrivers());
$json = json_encode(PDO::getAvailableDrivers());
echo " ";
echo $json;
echo " ";
?>
