<?php
echo "
&lt;?php<br />
// ----------------------------------------------------------------------------<br />
// Script Author: Robert Holland<br />
// Script Name: mariadb_grant.php<br />
// Creation Date: Fri Jan 20 2023 23:20:08 GMT-0700 (MST)<br />
// Last Modified: 20230120232231<br />
// Version: 1.0.0<br />
// Purpose: Generate MariaDB GRANT statements for databases (You will need to manually remove system DBs).<br />
// ----------------------------------------------------------------------------<br />
<br />
//How to write prepare and execute statements in OOP PDO?<br />
//https://stackoverflow.com/questions/42551050/how-to-write-prepare-and-execute-statements-in-oop-pdo<br />
//https://stackoverflow.com/questions/18679448/pdo-class-is-this-technically-correct<br />
//https://stackoverflow.com/questions/369602/deleting-an-element-from-an-array-in-php<br />
//https://stackoverflow.com/questions/4356289/php-random-string-generator/4356295#4356295<br />
<br />
include&#039;connect.php&#039;;<br />
<br />
\$dbshow = new Connection(); //Instantiate a new connection.<br />
\$dbshow-&gt;myQuery(&quot;show databases;&quot;);<br />
\$rows = \$dbshow-&gt;All();<br />
<br />
//Generate random string of specified length.<br />
  function generateRandomString(\$length) {<br />
    \$characters = &#039;0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ&#039;;<br />
    //\$characters = &#039;abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ&#039;; //Random uppercase and lowercase letters only.<br />
    //\$characters = &#039;abcdefghijklmnopqrstuvwxyz&#039;; //Random lowercase letters only.<br />
    //\$characters = &#039;ABCDEFGHIJKLMNOPQRSTUVWXYZ&#039;; //Random uppercase letters only.<br />
    //\$characters = &#039;0123456789&#039;; //Random numbers only.<br />
    \$charactersLength = strlen(\$characters);<br />
    \$randomString = &#039;&#039;;<br />
  for (\$i = 0; \$i &lt; \$length; \$i++) {<br />
    \$randomString .= \$characters[rand(0, \$charactersLength - 1)];<br />
  }<br />
    return \$randomString;<br />
  }<br />
//\$ThePassword = generateRandomString(64); //Pass the number of random characters to generate.<br />
//echo \$ThePassword . &quot;\\r\\n&quot;;<br />
<br />
function myfunction(\$value,\$key)<br />
 {<br />
 	\$dbusername = &quot;XXXXX&quot;;<br />
 	\$ThePassword = generateRandomString(8); //Random 8 characters.<br />
 //echo &quot;The key \$key has the value \$value. &quot;;<br />
 echo &quot;CREATE USER &#039;\$dbusername&#039;@&#039;%&#039; IDENTIFIED VIA mysql_native_password USING &#039;\$ThePassword&#039;; \\r\\n&quot;;<br />
 echo &quot;GRANT USAGE ON \$value.* TO &#039;\$dbusername&#039;@&#039;%&#039; REQUIRE NONE WITH MAX_QUERIES_PER_HOUR 0 MAX_CONNECTIONS_PER_HOUR 0 MAX_UPDATES_PER_HOUR 0 MAX_USER_CONNECTIONS 0; GRANT ALL PRIVILEGES ON `\$value`.* TO &#039;\$dbusername&#039;@&#039;%&#039;; GRANT ALL PRIVILEGES ON `\$value\_%`.* TO &#039;\$dbusername&#039;@&#039;%&#039;; \\r\\n&quot;;<br />
 //Example:<br />
 //GRANT USAGE ON robdba3.* TO &#039;robdba5&#039;@&#039;%&#039; REQUIRE NONE WITH MAX_QUERIES_PER_HOUR 0 MAX_CONNECTIONS_PER_HOUR 0 MAX_UPDATES_PER_HOUR 0 MAX_USER_CONNECTIONS 0; GRANT ALL PRIVILEGES ON `robdba3`.* TO &#039;robdba5&#039;@&#039;%&#039;; GRANT ALL PRIVILEGES ON `robdba3\_%`.* TO &#039;robdba5&#039;@&#039;%&#039;;<br />
 }<br />
 \$i=count(\$rows);<br />
 for(\$x = 0; \$x &lt; \$i; \$x++){<br />
 	\$y=\$rows[\$x]; //Reduce the array.<br />
 	//array_diff to remove critical databases from the output.<br />
 	//This prevents accidentally assigning permissions to critical system databases.<br />
 	\$y = array_diff(\$y, array(&quot;information_schema&quot;, &quot;performance_schema&quot;,&quot;mysql&quot;));<br />
 array_walk(\$y,&quot;myfunction&quot;);<br />
 }<br />
<br />
//Remove these critical system databases from the output.<br />
 //information_schema<br />
 //mysql<br />
 //performance_schema<br />
<br />
?&gt;<br />
";
?>
