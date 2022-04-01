<?php
//https://www.if-not-true-then-false.com/2010/php-remove-last-character-from-string/

$string = "This is test string..";
echo $string . "\n";

// substr function
echo "substr: " . substr($string, 0, -1);

echo "\n";

// mb_substr multibyte version
echo "mb_substr: " . mb_substr($string, 0, -1);

echo "\n";

// substr_replace function
echo "substr_replace: " . substr_replace($string ,"",-1);

echo "\n";

// rtrim function
echo "rtrim: " . rtrim($string, ".") . ".";

echo "\n";
?>