<?php echo " &lt;?php<br />
// ----------------------------------------------------------------------------<br />
// Script Author: Robert Holland<br />
// Script Name: mariadb_mysqldump.php<br />
// Creation Date: Thu May 14 2026 23:49:37 GMT-0700 (MST)<br />
// Last Modified:<br />
// Copyright (c)2026<br />
// Version: 1.0.0<br />
// Purpose: Generate a MariaDB/MySQL dump script that creates database backups in 3 different formats.<br />
// ----------------------------------------------------------------------------<br />
include&#039;t4.php&#039;;<br />
&#36;dbshow = new Connection(); //Instantiate a new connection.<br />
try {<br />
&#36;dbshow-&gt;myQuery(&quot;show databases;&quot;);<br />
} catch (PDOException &#36;e) {<br />
if (&#36;e-&gt;errorInfo[1] == 1062) {<br />
echo &quot;&lt;div class=&#039;alert&#039;&gt;....&lt;/div&gt;&quot;;<br />
} else {<br />
echo &quot;Unexpected error: &quot; . &#36;e-&gt;getMessage();<br />
}<br />
}<br />
<br />
&#36;rows = &#36;dbshow-&gt;All();<br />
<br />
echo &quot;TimeStamp=`date +&amp;quot;%Y%m%d%H%M%S%Z&amp;quot;`&lt;br /&gt;&quot;;<br />
function myfunction(&#36;value,&#36;key)<br />
{<br />
&#36;dbusername = &quot;USERNAME&quot;;<br />
&#36;ThePassword = &quot;XXXXXXXXXX&quot;; //Random 8 characters.<br />
<br />
//Generate a backup in 3 different formats:<br />
echo &quot;mysqldump -u&#36;dbusername -p&amp;quot;&#36;ThePassword&amp;quot; -c -e &#36;value &amp;gt; &amp;#36;TimeStamp.DBDump.&#36;value.`hostname`.sql&lt;br /&gt;&quot;;<br />
echo &quot;rar a -r -rr &amp;#36;TimeStamp.DBDump.&#36;value.`hostname`.sql.rar &amp;#36;TimeStamp.DBDump.&#36;value.`hostname`.sql&lt;br /&gt;&quot;;<br />
echo &quot;tar -zcvf &amp;#36;TimeStamp.DBDump.&#36;value.`hostname`.sql.tar.gz &amp;#36;TimeStamp.DBDump.&#36;value.`hostname`.sql&lt;br /&gt;&quot;;<br />
}<br />
<br />
&#36;i=count(&#36;rows);<br />
for(&#36;x = 0; &#36;x &lt; &#36;i; &#36;x++){<br />
&#36;y=&#36;rows[&#36;x]; //Reduce the array.<br />
//array_diff to remove critical databases from the output (information_schema, mysql, performance_schema, sys).<br />
//sys - The sys database is in MySQL not MariaDB.<br />
//This prevents accidentally assigning permissions to critical system databases.<br />
&#36;y = array_diff(&#36;y, array(&quot;information_schema&quot;, &quot;performance_schema&quot;,&quot;mysql&quot;,&quot;sys&quot;));<br />
array_walk(&#36;y,&quot;myfunction&quot;);<br />
}<br />
<br />
?&gt;"; ?>