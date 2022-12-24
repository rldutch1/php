<?php
echo "
&lt;?php<br />
//Check an array of data for alphabets and digits.<br />
\$strings = array('AbCd1zyZ9', 'foo!#\$bar');<br />
foreach (\$strings as \$testcase) {<br />
    if (ctype_alnum(\$testcase)) {<br />
        echo \"The string \$testcase consists of all letters or digits.\n&lt;br /&gt;\";<br />
    } else {<br />
        echo \"The string \$testcase does not consist of all letters or digits.\n&lt;br /&gt;\";<br />
    }<br />
}<br />
?&gt;<br />
<br />
&lt;?php<br />
//Check a variable for alphabets and digits.<br />
\$testcase = '-123';<br />
    if (ctype_alnum(\$testcase)) {<br />
        echo \"The string \$testcase consists of all letters or digits.\n&lt;br /&gt;\";<br />
    } else {<br />
        echo \"The string \$testcase does not consist of all letters or digits.\n&lt;br /&gt;\";<br />
    }<br />
<br />
?&gt;<br />
<br />
&lt;?php<br />
//Check a variable for alphabets.<br />
\$testcase = 'ABC';<br />
    if (ctype_alpha(\$testcase)) {<br />
        echo \"The string \$testcase consists of all letters.\n&lt;br /&gt;\";<br />
    } else {<br />
        echo \"The string \$testcase does not consist of all letters.\n&lt;br /&gt;\";<br />
    }<br />
<br />
?&gt;<br />
<br />
&lt;?php<br />
//Check a variable for numbers.<br />
\$testcase = '123';<br />
    if (ctype_digit(\$testcase)) {<br />
        echo \"The string \$testcase consists of all digits.\n&lt;br /&gt;\";<br />
    } else {<br />
        echo \"The string \$testcase does not consist of all digits.\n&lt;br /&gt;\";<br />
    }<br />
<br />
?&gt;<br /><br />
";

//Check an array of data for alphabets and digits.
$strings = array('AbCd1zyZ9', 'foo!#$bar');
foreach ($strings as $testcase) {
    if (ctype_alnum($testcase)) {
        echo "The string $testcase consists of all letters or digits.\n<br />";
    } else {
        echo "The string $testcase does not consist of all letters or digits.\n<br />";
    }
}
?>

<?php
//Check a variable for alphabets and digits.
$testcase = '-123';
    if (ctype_alnum($testcase)) {
        echo "The string $testcase consists of all letters or digits.\n<br />";
    } else {
        echo "The string $testcase does not consist of all letters or digits.\n<br />";
    }

?>

<?php
//Check a variable for alphabets.
$testcase = 'ABC';
    if (ctype_alpha($testcase)) {
        echo "The string $testcase consists of all letters.\n<br />";
    } else {
        echo "The string $testcase does not consist of all letters.\n<br />";
    }

?>

<?php
//Check a variable for numbers.
$testcase = '123';
    if (ctype_digit($testcase)) {
        echo "The string $testcase consists of all digits.\n<br />";
    } else {
        echo "The string $testcase does not consist of all digits.\n<br />";
    }
echo "<br /><br />";
?>