<?php
/*
Source: https://stackoverflow.com/questions/5612656/generating-unique-random-numbers-within-a-range-php
Purpose: If you ever need to randomly select a certain amount of numbers from a range of numbers.
*/

//Shuffle the numbers.
$numbers = range(1, 20); //Creating an array of numbers from 1-20.
shuffle($numbers); //Shuffling the numbers.

//Used in a function.
function UniqueRandomNumbersWithinRange($min, $max, $quantity) {//$quantity is how many numbers you want to return.
    $numbers = range($min, $max); //Creating an array of numbers from $min to $max.
    shuffle($numbers); //Shuffling the numbers.
    return array_slice($numbers, 0, $quantity);
}

/* The array_slice function explained. Source: https://www.w3schools.com/php/func_array_slice.asp
The array_slice() function returns selected parts of an array.
Syntax:
  array_slice(array,start,length,preserve)

  array -	Required. Specifies an array that will be evaluated.
  start	- Required. Numeric value. Specifies where the function will start the slice. 0 = the first element. If this value is set to a negative number, the function will start slicing that far from the last element. -2 means start at the second last element of the array.
  length - Optional. Numeric value. Specifies the length of the returned array. If this value is set to a negative number, the function will stop slicing that far from the last element. If this value is not set, the function will return all elements, starting from the position set by the start-parameter.
  preserve - Optional. Specifies if the function should preserve or reset the keys. Possible values:
  true -  Preserve keys
  false - Default. Reset keys
*/

print_r(UniqueRandomNumbersWithinRange(1,20,5)); //Create an array of 20 numbers, shuffle them, then print 5 of them starting at position zero in the array.

echo json_encode(UniqueRandomNumbersWithinRange(1,20,5)) . "\r\n";

?>
