<?php
if(!session_id()) session_start(); //If session has not been started, start it.
include('header.php');
include('connect.php');
echo "<a href='https://www.youtube.com/watch?v=7Rt-wXLud7o'>MySQL PDO Tutorial Lesson 8 - Insert, update and delete records.</a><br />";
echo "<br />
<div class='grey'>
function generateRandomString(\$length = 5) {<br />
    \$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';<br />
    \$charactersLength = strlen(\$characters);<br />
    \$randomString = '';<br />
    for (\$i = 0; \$i < \$length; \$i++) {<br />
        \$randomString .= \$characters[rand(0, \$charactersLength - 1)];<br />
    }<br />
    return \$randomString;<br />
}<br />
\$randomname = generateRandomString();<br />
</div><br />
\$insert=\$handler->prepare(\"insert into stibbard (firstname, lastname, postcode) values (?, ?, ?);\");<br />
\$insert->bindValue(1,\$randomname);<br />
\$insert->bindValue(2,'Holland');<br />
\$insert->bindValue(3,'12345');<br />
\$insert->execute();<br />
";

function generateRandomString($length = 5) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
$randomname = generateRandomString();

$insert=$handler->prepare("insert into stibbard (firstname, lastname, postcode) values (?, ?, ?);");
$insert->bindValue(1,$randomname);
$insert->bindValue(2,'Holland');
$insert->bindValue(3,'12345');
$insert->execute();

echo "<div class='section1'>Insert statement with parameters.</div><br />";
echo "<div class='grey'>No data output from this query. See table generated in lesson 3 for results.";
echo "</div>";

echo "<br />
\$insert=\$handler->prepare(\"insert into stibbard (firstname, lastname, postcode) values (:firstname, :lastname, :postcode);\");<br />
\$insert->bindValue(':firstname',\$randomname);<br />
\$insert->bindValue(':lastname','Holland');<br />
\$insert->bindValue(':postcode','12345');<br />
\$insert->execute();<br />
";
//The query below works perfectly fine and is not needed. It is displayed on the web page.
//$insert=$handler->prepare("insert into stibbard (firstname, lastname, postcode) values (:firstname, :lastname, :postcode);");
//$insert->bindValue(':firstname',$randomname);
//$insert->bindValue(':lastname','Holland');
//$insert->bindValue(':postcode','12345');
//$insert->execute();

echo "<div class='section1'>Insert statement with named parameters.</div><br />";
echo "<div class='grey'>No data output from this query. See table generated in lesson 3 for results.<br />";
echo "</div><br />";

echo "<br />
\$update=\$handler->prepare(\"update stibbard set postcode = :postcode where id = :id\");<br />
\$update->bindValue(':id','1',PDO::PARAM_INT); //Data type is integer, needed PARAM_INT, otherwise it threw an error.<br />
\$update->bindValue(':postcode','54321');<br />
\$update->execute();<br />
";

echo "<div class='section1'>Update statement with named parameters.</div><br />";
echo "<div class='grey'>No data output from this query.<br />";
echo "</div>";

$update=$handler->prepare("update stibbard set postcode = :postcode where id = :id");
$update->bindValue(':id','1',PDO::PARAM_INT); //Data type is integer, needed PARAM_INT, otherwise it threw an error.
$update->bindValue(':postcode','54321');
$update->execute();

echo "<br />
\$update=\$handler->prepare(\"delete from stibbard where firstname = :firstname;\");<br />
\$update->bindValue(':firstname','Umptyfratz');<br />
\$update->execute();<br />
";

echo "<div class='section1'>Delete statement with named parameters.</div><br />";
echo "<div class='grey'>No data output from this query.<br />";
echo "</div>";

//The query below works perfectly fine and is not needed. It is displayed on the web page.
//$update=$handler->prepare("delete from stibbard where firstname = :firstname;");
//$update->bindValue(':firstname','Umptyfratz');
//$update->execute();

include('footer.php');
?>