<?php
echo '<?php<br />
  function addOrdinalNumberSuffix($num) {<br />
    if (!in_array(($num % 100),array(11,12,13))){<br />
      switch ($num % 10) {//If less than 4 add appropriate ending.<br />
        // Handle 1st, 2nd, 3rd<br />
        case 1:  return $num."st";<br />
        case 2:  return $num."nd";<br />
        case 3:  return $num."rd";<br />
      }<br />
    } //else put th at the end.<br />
    return $num."th";<br />
  }<br />
<br />
for ($i = 1; $i &lt;= 100; $i++){<br />
  echo addOrdinalNumberSuffix($i) . "\t";<br />
  if ($i % 10 == 0) {<br />
    echo "\n";<br />
  }<br />
<br />}<br />
<br />
?><br /><hr />';

 //http://www.if-not-true-then-false.com/2010/php-1st-2nd-3rd-4th-5th-6th-php-add-ordinal-number-suffix/
  function addOrdinalNumberSuffix($num) {
    if (!in_array(($num % 100),array(11,12,13))){
      switch ($num % 10) {//If less than 4 add appropriate ending.
        // Handle 1st, 2nd, 3rd
        case 1:  return $num.'st';
        case 2:  return $num.'nd';
        case 3:  return $num.'rd';
      }
    } //else put th at the end.
    return $num.'th';
  }

for ($i = 1; $i <= 100; $i++){
  echo addOrdinalNumberSuffix($i) . "\t";
  if ($i % 10 == 0) {
    echo "\n";
  }
}

?>