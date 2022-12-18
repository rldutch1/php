<?php

$handle = fopen("testing.html", "r");

if ($handle) {

    while (($line = fgets($handle)) !== false) {

        // process the line read.

				echo htmlspecialchars($line);

    }
    fclose($handle);

} else {

    echo "error opening the file.";

}

?>