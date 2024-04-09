<?php
echo "
&lt;?php<br />
for (\$count=0; \$count &lt;= 10; \$count++) {<br />
if (\$count  % 2 != 0) {<br />
continue; //Tells PHP to skip back to the top when \$count = 5 and ignore the &quot;echo \$count&quot; statement below it.<br />
//This loop will output all of the numbers between 0 and 10, skipping 5.<br />
}<br />
echo \$count . &quot;. \r\n&quot;;<br />
}<br />
?&gt;
<br />
<br />
&lt;?php<br />
// Recursive function to check whether<br />
// the number is Even or Odd <br />
// https://www.geeksforgeeks.org/php-check-number-even-odd/<br />
function check(\$number){<br />
    if(\$number == 0)<br />
        return 1;<br />
    else if(\$number == 1)<br />
        return 0;<br />
    else if(\$number&lt;0)<br />
        return check(-\$number);<br />
    else<br />
        return check(\$number-2);        <br />
}<br />
  <br />
// Driver Code<br />
\$number = -39;<br />
if(check(\$number))<br />
    echo &quot;Even&quot;;<br />
else<br />
    echo &quot;Odd&quot;;<br />
?&gt;<br />
<br />
<br />
&lt;?php<br />
// PHP code to check whether the number <br />
// is Even or Odd using Bitwise Operator<br />
// https://www.geeksforgeeks.org/php-check-number-even-odd/<br />
function check(\$number)<br />
{<br />
      <br />
    // One<br />
    \$one = 1;<br />
      <br />
    // Bitwise AND<br />
    \$bitwiseAnd = \$number &amp; \$one;<br />
      <br />
    if(\$bitwiseAnd == 1)<br />
    {<br />
        echo &quot;Odd&quot;; <br />
    }<br />
    else{<br />
        echo &quot;Even&quot;;<br />
    }<br />
}<br />
  <br />
// Driver Code<br />
\$number = 39;<br />
check(\$number)<br />
?&gt;<br />
";
?>

