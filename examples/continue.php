<?php
echo "
&lt;?php<br />
for (\$count=0; \$count &lt;= 10; \$count++) {<br />
if (\$count  % 2 != 0) {<br />
continue; //Tells PHP to skip back to the top when \$count equals the number you specify and ignore the &quot;echo \$count&quot; statement below it.<br />
//This loop will ignore numbers with a remainder not equal to zero and echo even numbers between 0 and 10.<br />
}<br />
echo \$count . &quot;. \r\n&quot;;<br />
}<br />
?&gt;
";
?>