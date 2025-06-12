&lt;?php<br />
// ----------------------------------------------------------------------------<br />
// Script Author: Robert Holland<br />
// Script Name: db_backup_script.php<br />
// Creation Date: Fri Nov 17 2023 07:03:27 GMT-0700 (MST)<br />
// Last Modified: 2025-06-12 10:20:27<br />
// Version: 1.0.2<br />
// Purpose: Generate MariaDB database backup statements (This script only generates non-system database backup statements. However,<br />
// you can modify it to include the system databases (information_schema, performance_schema, mysql, sys)).<br />
// ----------------------------------------------------------------------------<br />
<br />
include&#039;t4.php&#039;;<br />
<br />
&#36;dbshow = new Connection(); //Instantiate a new connection.<br />
&#36;dbshow-&gt;myQuery(&quot;show databases;&quot;); //The databases shown will depend on the privileges of the user running the statement.<br />
&#36;rows = &#36;dbshow-&gt;All();<br />
<br />
echo &quot;The following system databases (information_schema, performance_schema, mysql, sys) are &lt;b&gt;NOT&lt;/b&gt; included in this mysqldump script.&lt;br /&gt;&lt;br /&gt;&quot;;<br />
echo &quot;Dump the output of this PHP script into a shell script (php -f db_backup_script.php &gt; db_backup.sh).&lt;br /&gt;&lt;br /&gt;&quot;;<br />
echo &quot;TimeStamp=`date +\&quot;%Y%m%d%H%M%S%Z\&quot;`&lt;br /&gt;&quot;;<br />
<br />
&#36;dbusername = &quot;TheDB_Username&quot;;<br />
&#36;ThePassword = &quot;The Password&quot;;<br />
function myfunction(&#36;value,&#36;key)<br />
{<br />
global &#36;dbusername; //Variable is defined outside of the function so it has to be global to work inside the function.<br />
global &#36;ThePassword;<br />
echo &quot;mysqldump -u &quot; . &#36;dbusername . &quot; -p\&quot;&quot;. &#36;ThePassword . &quot;\&quot; -c -e &quot; . &#36;value . &quot; &gt; \&#36;TimeStamp.DBDump.&quot; . &#36;value . &quot;.`hostname`.sql&lt;br /&gt;&quot;;<br />
echo &quot;tar -zcvf \&#36;TimeStamp.DBDump.&quot; . &#36;value . &quot;.`hostname`.sql.gz \&#36;TimeStamp.DBDump.&quot; . &#36;value . &quot;.`hostname`.sql&lt;br /&gt;&quot;;<br />
}<br />
<br />
// Remove these system databases from the backup script.<br />
// information_schema, mysql, performance_schema, sys<br />
&#36;i=count(&#36;rows);<br />
for(&#36;x = 0; &#36;x &lt; &#36;i; &#36;x++){<br />
&#36;y=&#36;rows[&#36;x];<br />
// array_diff to exclude system databases from the generated output.<br />
// If you would like to include the system databases in the generated mysqldump statements, simply delete the desired database name from the array below.<br />
&#36;y = array_diff(&#36;y, array(&quot;information_schema&quot;, &quot;performance_schema&quot;,&quot;mysql&quot;,&quot;sys&quot;));<br />
array_walk(&#36;y,&quot;myfunction&quot;);<br />
}<br />
?&gt;