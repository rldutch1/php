<?php
//Source: https://www.php.net/manual/en/function.glob.php

echo "
<html>
<head><title></title></head>
<body>
<&#63;php<br />
//Display the current filename: <br />
# echo \"This filename is: \" . basename(__FILE__) . \"&lt;br /&gt;&lt;br /&gt;\"; <br />
 <br />
//Use \"glob\" to collect filenames in a directory and display them: <br />
        //Single File extension: <br />
        foreach(glob(\"*.pdf\") as \$file) { <br />
                echo \"&lt;a href='\" . \$file . \"' target='_blank'&gt;\" . \$file . \"&lt;/a&gt;&lt;br /&gt;\"; <br />
        } <br />
         <br />
        //Multiple file extensions: <br />
        foreach (glob(\"{*.pdf,*.jpg,*.txt,*.mp4,*.zip}\",GLOB_BRACE ) as \$file) { <br />
                echo \"&lt;a href='\" . \$file . \"' target='_blank'&gt;\" . \$file . \"&lt;/a&gt;&lt;br /&gt;\"; <br />
        } <br />
         <br />
        //Multiple file extensions on AIX: <br />
        foreach (array_merge(glob(\"*.pdf\"),glob(\"*.jpg\"),glob(\"*.txt\")) as \$file) {  <br />
                echo \"&lt;a href='\" . \$file . \"' target='_blank'&gt;\" . \$file . \"&lt;/a&gt;&lt;br /&gt;\"; <br />
        } <br />
?> <br />
";

//$xyz = htmlspecialchars("<a href='test'>Test</a><br />", ENT_QUOTES);
echo "<br /><hr /><br />";

//Display the current filename:
# echo "This filename is: " . basename(__FILE__) . "<br /><br />";

//Use "glob" to collect filenames in a directory and display them:
        //Single File:
        foreach(glob('*.pdf') as $file) {
                echo "<a href='" . $file . "' target='_blank'>" . $file . "</a><br />";
        }
        //Multiple files:
        foreach (glob("{*.pdf,*.jpg,*.txt,*.mp4,*.zip}",GLOB_BRACE ) as $file) {
                echo "<a href='" . $file . "' target='_blank'>" . $file . "</a><br />";
        }
        //Multiple files on AIX:
        foreach (array_merge(glob("*.pdf"),glob("*.PDF"),glob("*.jpg"),glob("*.JPG"),glob("*.txt")) as $file) { 
                echo "<a href='" . $file . "' target='_blank'>" . $file . "</a><br />";
        }
echo "</body></html>";
?>
