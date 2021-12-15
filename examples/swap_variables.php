<?php
/*
Source: https://stackoverflow.com/questions/3541730/is-there-a-php-function-for-swapping-the-values-of-two-variables
I remember learning the swap3 version in high school when I was taking basic programming. It comes in handy when you want to subtract two numbers and you need to have the larger number on top. Ex: if($x < $y) {swap($x,$y);}
*/

//Stackoverflow comments say that swap1 is not very useful and only works on numbers.
function swap1($x,$y) {
    $x ^= $y ^= $x ^= $y;
    return $x . "<->" . $y . "\r\n";
}

//Stackoverflow comments say that swap2 is too slow because of the list() function call.
function swap2($x,$y) {
    list($x,$y) = array($y,$x);
    return $x . "<->" . $y . "\r\n";
}

//Stackoverflow comments say this is the best and fastest one even though it has more lines.
function swap3($x,$y) {
    $tmp=$x;
    $x=$y;
    $y=$tmp;
    return $x . "<->" . $y . "\r\n";
}

echo swap1(4,8);
echo swap2(4,8);
echo swap3(4,8);


?>
