<?php
echo "<br />
&lt;?php<br />
//Fastest Way to Check if MYSQL Table Exists in PHP<br />
//https://stackoverflow.com/questions/9898610/displaying-all-table-names-in-php-from-mysql-database<br />
<br />
\$query = \$db-&gt;prepare(\"show tables from THEDatabase like '%whatever%'\");<br />
\$query-&gt;execute();<br />
<br />
while(\$rows = \$query-&gt;fetch(PDO::FETCH_ASSOC)){<br />
     var_dump(\$rows);<br />
}<br />
?&gt;
";
?>