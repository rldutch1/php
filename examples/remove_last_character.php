<?php

//Source: https://www.if-not-true-then-false.com/2010/php-remove-last-character-from-string/
echo "
&lt;?php<br />
//https://www.if-not-true-then-false.com/2010/php-remove-last-character-from-string/<br />
<br />
\$string = &quot;This is test string..&quot;;<br />
echo \$string . &quot;\\n&quot;;<br />
<br />
// substr function<br />
echo &quot;substr: &quot; . substr(\$string, 0, -1);<br />
<br />
echo &quot;\\n&quot;;<br />
<br />
// mb_substr multibyte version<br />
echo &quot;mb_substr: &quot; . mb_substr(\$string, 0, -1);<br />
<br />
echo &quot;\\n&quot;;<br />
<br />
// substr_replace function<br />
echo &quot;substr_replace: &quot; . substr_replace(\$string ,&quot;&quot;,-1);<br />
<br />
echo &quot;\\n&quot;;<br />
<br />
// rtrim function<br />
echo &quot;rtrim: &quot; . rtrim(\$string, &quot;.&quot;) . &quot;.&quot;;<br />
<br />
echo &quot;\\n&quot;;<br />
?&gt;
";

echo "<br /><br />";
$string = "This is test string..";
echo $string . "<br />";

// substr function
echo "substr: " . substr($string, 0, -1);

echo "<br />";

// mb_substr multibyte version
echo "mb_substr: " . mb_substr($string, 0, -1);

echo "<br />";

// substr_replace function
echo "substr_replace: " . substr_replace($string ,"",-1);

echo "<br />";

// rtrim function
echo "rtrim: " . rtrim($string, ".") . ".";

echo "<br />";
?>

