<?php

//Echo HTML/Text from a function;
//https://stackoverflow.com/questions/528445/is-there-any-way-to-return-html-in-a-php-function-without-building-the-return
//http://phpfiddle.org/lite/code/ejs4-r3ua
function noMoreStrings() {
?>
<q>this works pretty fine, too</q>
no echo needed
<?php
echo "/r/n";}
noMoreStrings();
?>