&lt;?php<br />
// ----------------------------------------------------------------------------<br />
// Script Author: Robert Holland<br />
// Script Name: db_backup_script.php<br />
// Creation Date: Fri Nov 17 2023 07:03:27 GMT-0700 (MST)<br />
// Last Modified: 20231125105000<br />
// Version: 1.0.1<br />
// Purpose: Generate MariaDB database backup statements (This script only genrates non-system database backup statements. However,<br />
// you can modify it to include the system databases).<br />
// ----------------------------------------------------------------------------<br />
<br />
include&#039;t4.php&#039;;<br />
<br />
$dbshow = new Connection(); //Instantiate a new connection.<br />
$dbshow-&gt;myQuery(&quot;show databases;&quot;); //The databases shown will depend on the privileges of the user running the statement.<br />
$rows = $dbshow-&gt;All();<br />
<br />
function myfunction($value,$key)<br />
{<br />
$dbusername = &quot;TheUserName&quot;;<br />
$ThePassword = &quot;ThePassword&quot;;<br />
<br />
echo &quot;TimeStamp=`date +\&quot;%Y%m%d%H%M%S%Z\&quot;`&lt;br /&gt;&quot;;<br />
echo &quot;mysqldump -u{$dbusername} -p{$ThePassword} -c -e $value &gt; \$TimeStamp.DBDump.$value.`hostname`.sql&lt;br /&gt;&quot;;<br />
echo &quot;echo \&quot;Compressing Database Dump. Please wait...\&quot;&lt;br /&gt;&quot;;<br />
echo &quot;tar -zcvf \$TimeStamp.DBDump.$value.`hostname`.sql.gz \$TimeStamp.DBDump.$value.`hostname`.sql&lt;br /&gt;&lt;br /&gt;&quot;;<br />
}<br />
// Remove these critical system databases from the output.<br />
// information_schema, mysql, performance_schema, sys<br />
$i=count($rows);<br />
for($x = 0; $x &lt; $i; $x++){<br />
$y=$rows[$x];<br />
// array_diff to exclude system databases from the generated output.<br />
// If you would like to include the system databases in the generated mysqldump statements, simply delete the desired database name from the array below.<br />
$y = array_diff($y, array(&quot;information_schema&quot;, &quot;performance_schema&quot;,&quot;mysql&quot;,&quot;sys&quot;));<br />
array_walk($y,&quot;myfunction&quot;);<br />
}<br />
?&gt;