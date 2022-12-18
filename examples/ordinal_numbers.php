<?php
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

for ($i = 1; $i <= 10000; $i++){
  echo addOrdinalNumberSuffix($i) . "\t";
  if ($i % 10 == 0) {
    echo "\n";
  }
}

?>