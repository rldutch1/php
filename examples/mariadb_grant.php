<?php echo " &lt;?php<br />
// ----------------------------------------------------------------------------<br />
// Script Author: Robert Holland<br />
// Script Name: mariadb_grant.php<br />
// Creation Date: Fri Jan 20 2023 23:20:08 GMT-0700 (MST)<br />
// Last Modified: 20250127110825<br />
// Version: 1.1.0<br />
// Purpose: Generate MariaDB GRANT statements for databases (You will need to manually remove system DBs).<br />
// ----------------------------------------------------------------------------<br />
<br />
//How to write prepare and execute statements in OOP PDO?<br />
//https://stackoverflow.com/questions/42551050/how-to-write-prepare-and-execute-statements-in-oop-pdo<br />
//https://stackoverflow.com/questions/18679448/pdo-class-is-this-technically-correct<br />
//https://stackoverflow.com/questions/369602/deleting-an-element-from-an-array-in-php<br />
//https://stackoverflow.com/questions/4356289/php-random-string-generator/4356295#4356295<br />
<br />
include&#039;pw.php&#039;;<br />
<br />
&#36;dbshow = new Connection(); //Instantiate a new connection.<br />
&#36;dbshow-&gt;myQuery(&quot;show databases;&quot;);<br />
&#36;rows = &#36;dbshow-&gt;All();<br />
<br />
//Generate random string of specified length.<br />
function generateRandomString(&#36;length) {<br />
&#36;characters = &#039;0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ&#039;; //Random numbers and letters.<br />
//&#36;characters = &#039;abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ&#039;; //Random uppercase and lowercase letters only.<br />
//&#36;characters = &#039;abcdefghijklmnopqrstuvwxyz&#039;; //Random lowercase letters only.<br />
//&#36;characters = &#039;ABCDEFGHIJKLMNOPQRSTUVWXYZ&#039;; //Random uppercase letters only.<br />
//&#36;characters = &#039;0123456789&#039;; //Random numbers only.<br />
&#36;charactersLength = strlen(&#36;characters);<br />
&#36;randomString = &#039;&#039;;<br />
for (&#36;i = 0; &#36;i &lt; &#36;length; &#36;i++) {<br />
&#36;randomString .= &#36;characters[rand(0, &#36;charactersLength - 1)];<br />
}<br />
return &#36;randomString;<br />
}<br />
//&#36;ThePassword = generateRandomString(64); //Pass the number of random characters to generate.<br />
//echo &#36;ThePassword . &quot;\r\n&quot;;<br />
<br />
function myfunction(&#36;value,&#36;key)<br />
{<br />
&#36;dbusername = &quot;TheDatabaseUserName&quot;;<br />
&#36;ThePassword = generateRandomString(8); //Random 8 characters.<br />
//echo &quot;The key &#36;key has the value &#36;value. &quot;;<br />
//echo &quot;CREATE USER &#039;&#36;dbusername&#039;@&#039;%&#039; IDENTIFIED VIA mysql_native_password USING &#039;&#36;ThePassword&#039;; &lt;br /&gt;&quot;;<br />
echo &quot;LOCAL: &lt;br /&gt;&amp;nbsp;&amp;nbsp;GRANT USAGE ON &#36;value.* TO &#039;&#36;dbusername&#039;@&#039;localhost&#039; REQUIRE NONE WITH MAX_QUERIES_PER_HOUR 0 MAX_CONNECTIONS_PER_HOUR 0 MAX_UPDATES_PER_HOUR 0 MAX_USER_CONNECTIONS 0; GRANT ALL PRIVILEGES ON `&#36;value`.* TO &#039;&#36;dbusername&#039;@&#039;localhost&#039;; GRANT ALL PRIVILEGES ON `&#36;value\_%`.* TO &#039;&#36;dbusername&#039;@&#039;localhost&#039;; &lt;br /&gt;<br />
REMOTE: &lt;br /&gt;&amp;nbsp;&amp;nbsp;GRANT USAGE ON &#36;value.* TO &#039;&#36;dbusername&#039;@&#039;%&#039; REQUIRE NONE WITH MAX_QUERIES_PER_HOUR 0 MAX_CONNECTIONS_PER_HOUR 0 MAX_UPDATES_PER_HOUR 0 MAX_USER_CONNECTIONS 0; GRANT ALL PRIVILEGES ON `&#36;value`.* TO &#039;&#36;dbusername&#039;@&#039;%&#039;; GRANT ALL PRIVILEGES ON `&#36;value\_%`.* TO &#039;&#36;dbusername&#039;@&#039;%&#039;; &lt;br /&gt;&lt;br /&gt;&quot;;<br />
<br />
//Remote DB User Example:<br />
//GRANT USAGE ON TheDatabaseName.* TO &#039;machform&#039;@&#039;%&#039; REQUIRE NONE WITH MAX_QUERIES_PER_HOUR 0 MAX_CONNECTIONS_PER_HOUR 0 MAX_UPDATES_PER_HOUR 0 MAX_USER_CONNECTIONS 0;<br />
//GRANT ALL PRIVILEGES ON `TheDatabaseName`.* TO &#039;machform&#039;@&#039;%&#039;;<br />
//GRANT ALL PRIVILEGES ON `TheDatabaseName\_%`.* TO &#039;machform&#039;@&#039;%&#039;;<br />
<br />
//Local DB User Example:<br />
//GRANT USAGE ON TheDatabaseName.* TO &#039;machform&#039;@&#039;localhost&#039; REQUIRE NONE WITH MAX_QUERIES_PER_HOUR 0 MAX_CONNECTIONS_PER_HOUR 0 MAX_UPDATES_PER_HOUR 0 MAX_USER_CONNECTIONS 0;<br />
//GRANT ALL PRIVILEGES ON `TheDatabaseName`.* TO &#039;machform&#039;@&#039;localhost&#039;;<br />
//GRANT ALL PRIVILEGES ON `TheDatabaseName\_%`.* TO &#039;machform&#039;@&#039;localhost&#039;;<br />
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