Source: https://blog.hubspot.com/website/php-array-functions<br />
64 PHP Array Functions &amp; Constants to Bookmark<br />
Learn More About HubSpot&#039;s Free CMS Software<br />
Clint Fontanella<br />
Updated: July 18, 2024<br />
<br />
Published: November 20, 2023<br />
<br />
An array is a collection of values like integers, strings, or even other arrays. Arrays group elements together, making them easy to manage, modify, and manipulate.<br />
php array functions <br />
As you&#039;ll see from the list below, there are tons of array functions in PHP and it&rsquo;s tough to keep track of them all. That&rsquo;s why we&rsquo;ve put together this cheat sheet so you can quickly reference your options as you program different projects.<br />
Build your website with HubSpot&#039;s Free CMS Software<br />
From creating arrays to calculating with them, this post serves as a handy resource for all of your PHP array needs.<br />
<br />
Table of Contents:<br />
<br />
Creating Arrays<br />
Comparing Arrays<br />
Modifying Arrays<br />
Array Calculations &amp; Returns<br />
Array Constants<br />
PHP Array Functions<br />
Here&rsquo;s a complete list of PHP array functions. We know there are a lot, so check out the quick links and table of contents above if you&rsquo;re looking for a specific one.<br />
<br />
Creating Arrays<br />
1. array()<br />
The array() function is used to create an array.<br />
<br />
Example:<br />
<br />
&lt;?php<br />
$fruits = array(&quot;apple&quot;, &quot;banana&quot;, &quot;cherry&quot;);<br />
echo &quot;Fruits: &quot;;<br />
foreach ($fruits as $fruit) {<br />
echo $fruit . &quot; &quot;;<br />
}<br />
?&gt;<br />
<br />
Output:<br />
<br />
Fruits: apple banana cherry<br />
<br />
2. array_combine()<br />
The array_combine() function creates a new array by combining two arrays where one array provides keys and the other provides values.<br />
<br />
Example:<br />
<br />
&lt;?php<br />
$keys = array(&quot;a&quot;, &quot;b&quot;, &quot;c&quot;);<br />
$values = array(1, 2, 3);<br />
$combined = array_combine($keys, $values);<br />
echo &quot;Combined Array: &quot;;<br />
foreach ($combined as $key =&gt; $value) {<br />
echo &quot;[$key =&gt; $value] &quot;;<br />
}<br />
?&gt;<br />
<br />
Output:<br />
<br />
Combined Array: [a =&gt; 1] [b =&gt; 2] [c =&gt; 3]<br />
<br />
3. array_chunk()<br />
array_chunk() splits an array into bits of a specified size and returns a multi-dimensional array with those bits.<br />
<br />
Example:<br />
<br />
&lt;?php<br />
$numbers = array(1, 2, 3, 4, 5, 6, 7, 8);<br />
$chunks = array_chunk($numbers, 3);<br />
echo &quot;Chunks of Array: &quot;;<br />
foreach ($chunks as $chunk) {<br />
echo &quot;[&quot; . implode(&quot;, &quot;, $chunk) . &quot;] &quot;;<br />
}<br />
?&gt;<br />
<br />
Output:<br />
<br />
Chunks of Array: [1, 2, 3] [4, 5, 6] [7, 8]<br />
<br />
4. compact()<br />
The compact() function creates an array by using variables as keys and their values as the corresponding array values.<br />
<br />
Example:<br />
<br />
&lt;?php<br />
$name = &quot;John&quot;;<br />
$age = 30;<br />
$info = compact(&quot;name&quot;, &quot;age&quot;);<br />
echo &quot;Info Array: &quot;;<br />
foreach ($info as $key =&gt; $value) {<br />
echo &quot;[$key =&gt; $value] &quot;;<br />
}<br />
?&gt;<br />
<br />
Output:<br />
<br />
Info Array: [name =&gt; John] [age =&gt; 30]<br />
<br />
5. range()<br />
range() generates an array containing a start and an end value, with optional step increments.<br />
<br />
Example:<br />
<br />
&lt;?php<br />
$even_numbers = range(2, 10, 2);;<br />
echo &quot;Even Numbers: &quot;;<br />
foreach ($even_numbers as $number) {<br />
echo $number . &quot; &quot;;<br />
}<br />
?&gt;<br />
<br />
Output:<br />
<br />
Even Numbers: 2 4 6 8 10<br />
<br />
6. list()<br />
The list() function is used to assign values to a list of variables from an array. It&#039;s often used in conjunction with functions like explode() or preg_match() to extract values from arrays easily.<br />
<br />
Example:<br />
<br />
&lt;?php<br />
$info = array(&quot;John&quot;, &quot;Doe&quot;, 30);<br />
list($first_name, $last_name, $age) = $info;<br />
echo &quot;First Name: &quot; . $first_name . &quot;; &quot;;<br />
echo &quot;Last Name: &quot; . $last_name . &quot;; &quot;;<br />
echo &quot;Age: &quot; . $age . &quot;; &quot;;<br />
?&gt;<br />
Output:<br />
<br />
First Name: John Last Name: Doe Age: 30<br />
<br />
7. array_fill()<br />
array_fill() creates an array with a specified number of elements, each having the same value.<br />
<br />
Example:<br />
<br />
&lt;?php<br />
$filledArray = array_fill(0, 3, &quot;hello&quot;);<br />
echo &quot;Filled Array: &quot;;<br />
foreach ($filledArray as $item) {<br />
echo $item . &quot; &quot;;<br />
}<br />
?&gt;<br />
<br />
Output:<br />
<br />
Filled Array: hello hello hello<br />
<br />
8. array_fill_keys()<br />
array_fill_keys() creates an array using specified keys and the same value for each key.<br />
<br />
Example:<br />
<br />
&lt;?php<br />
$keys = array(&quot;a&quot;, &quot;b&quot;, &quot;c&quot;);<br />
$filledArray = array_fill_keys($keys, &quot;hello&quot;);<br />
echo &quot;Filled Array with Keys: &quot;;<br />
foreach ($filledArray as $key =&gt; $value) {<br />
echo &quot;[$key =&gt; $value] &quot;;<br />
}<br />
?&gt;<br />
<br />
Output:<br />
<br />
Filled Array with Keys: [a =&gt; hello] [b =&gt; hello] [c =&gt; hello]<br />
<br />
9. array_flip()<br />
array_flip() flips the keys and values of an array, creating a new array where the original values become keys, and the original keys become values.<br />
<br />
Example:<br />
<br />
&lt;?php<br />
$fruits = array(&quot;apple&quot;, &quot;banana&quot;, &quot;cherry&quot;);<br />
$flipped = array_flip($fruits);<br />
echo &quot;Flipped Array: &quot;;<br />
foreach ($flipped as $key =&gt; $value) {<br />
echo &quot;[$key =&gt; $value] &quot;;<br />
}<br />
?&gt;<br />
<br />
Output:<br />
<br />
Flipped Array: [apple =&gt; 0] [banana =&gt; 1] [cherry =&gt; 2]<br />
<br />
10. array_slice()<br />
array_slice() extracts a portion of an array based on a starting index and length, creating a new array containing the selected elements.<br />
<br />
Example:<br />
<br />
&lt;?php<br />
$fruits = array(&quot;apple&quot;, &quot;banana&quot;, &quot;cherry&quot;, &quot;date&quot;, &quot;fig&quot;);<br />
$slice = array_slice($fruits, 1, 3);<br />
echo &quot;Sliced Array: &quot;;<br />
foreach ($slice as $item) {<br />
echo $item . &quot; &quot;;<br />
}<br />
?&gt;<br />
<br />
Output:<br />
<br />
Sliced Array: banana cherry date<br />
<br />
Comparing Arrays<br />
11. array_diff()<br />
array_diff() calculates the difference between two or more arrays and returns an array containing the values that are present in the first array but not in the other arrays.<br />
<br />
Example:<br />
<br />
&lt;?php<br />
$arr1 = array(&quot;a&quot;, &quot;b&quot;, &quot;c&quot;);<br />
$arr2 = array(&quot;b&quot;, &quot;c&quot;, &quot;d&quot;);<br />
$difference = array_diff($arr1, $arr2);<br />
echo &quot;Array Difference: &quot;;<br />
foreach ($difference as $item) {<br />
echo $item . &quot; &quot;;<br />
}<br />
?&gt;<br />
<br />
Output:<br />
<br />
Array Difference: a<br />
<br />
12. array_diff_key()<br />
array_diff_key() computes the difference of arrays using keys for comparison and returns an array containing values from the first array whose keys are not present in the other arrays.<br />
<br />
Example:<br />
<br />
&lt;?php<br />
$arr1 = array(&quot;a&quot; =&gt; 1, &quot;b&quot; =&gt; 2, &quot;c&quot; =&gt; 3);<br />
$arr2 = array(&quot;b&quot; =&gt; 2, &quot;c&quot; =&gt; 4, &quot;d&quot; =&gt; 5);<br />
$difference = array_diff_key($arr1, $arr2);<br />
echo &quot;Array Difference by Key: &quot;;<br />
foreach ($difference as $key =&gt; $value) {<br />
echo &quot;[$key =&gt; $value] &quot;;<br />
}<br />
?&gt;<br />
<br />
Output:<br />
<br />
Array Difference by Key: [a =&gt; 1]<br />
<br />
13. array_diff_assoc()<br />
array_diff_assoc() computes the difference of arrays with an additional index check.<br />
<br />
Example:<br />
<br />
&lt;?php<br />
$arr1 = array(&quot;a&quot; =&gt; 1, &quot;b&quot; =&gt; 2, &quot;c&quot; =&gt; 3);<br />
$arr2 = array(&quot;b&quot; =&gt; 2, &quot;c&quot; =&gt; 4, &quot;d&quot; =&gt; 5);<br />
$difference = array_diff_assoc($arr1, $arr2);<br />
echo &quot;Array Difference (assoc): &quot;;<br />
foreach ($difference as $key =&gt; $value) {<br />
echo &quot;[$key =&gt; $value] &quot;;<br />
}<br />
?&gt;<br />
<br />
Output:<br />
<br />
Array Difference (assoc): [a =&gt; 1] [c =&gt; 3]<br />
<br />
14. array_intersect()<br />
The array_intersect() function calculates the intersection of two or more arrays and returns an array containing values that are present in all input arrays.<br />
<br />
Example:<br />
<br />
&lt;?php<br />
$arr1 = array(&quot;a&quot;, &quot;b&quot;, &quot;c&quot;);<br />
$arr2 = array(&quot;b&quot;, &quot;c&quot;, &quot;d&quot;);<br />
$intersection = array_intersect($arr1, $arr2);<br />
echo &quot;Array Intersection: &quot;;<br />
foreach ($intersection as $item) {<br />
echo $item . &quot; &quot;;<br />
}<br />
?&gt;<br />
<br />
Output:<br />
<br />
Array Intersection: b c<br />
<br />
15. array_intersect_assoc()<br />
array_intersect_assoc() computes the intersection of arrays with an additional index check, comparing both values and keys.<br />
<br />
Example:<br />
<br />
&lt;?php<br />
$arr1 = array(&quot;a&quot; =&gt; 1, &quot;b&quot; =&gt; 2, &quot;c&quot; =&gt; 3);<br />
$arr2 = array(&quot;b&quot; =&gt; 2, &quot;c&quot; =&gt; 4, &quot;d&quot; =&gt; 5);<br />
$intersection = array_intersect_assoc($arr1, $arr2);<br />
echo &quot;Array Intersection (assoc): &quot;;<br />
foreach ($intersection as $key =&gt; $value) {<br />
echo &quot;[$key =&gt; $value] &quot;;<br />
}<br />
?&gt;<br />
<br />
Output:<br />
<br />
Array Intersection (assoc): [b =&gt; 2]<br />
<br />
16. array_intersect_key()<br />
array_intersect_key() computes the intersection of arrays using keys for comparison and returns an array containing values from the first array that have matching keys in the other arrays.<br />
<br />
Example:<br />
<br />
&lt;?php<br />
$arr1 = array(&quot;a&quot; =&gt; 1, &quot;b&quot; =&gt; 2, &quot;c&quot; =&gt; 3);<br />
$arr2 = array(&quot;b&quot; =&gt; 2, &quot;c&quot; =&gt; 4, &quot;d&quot; =&gt; 5);<br />
$intersection = array_intersect_key($arr1, $arr2);<br />
echo &quot;Array Intersection by Key: &quot;;<br />
foreach ($intersection as $key =&gt; $value) {<br />
echo &quot;[$key =&gt; $value] &quot;;<br />
}<br />
?&gt;<br />
<br />
Output:<br />
<br />
Array Intersection by Key: [b =&gt; 2] [c =&gt; 3]<br />
<br />
17. array_key_exists()<br />
array_key_exists() checks if a specified key exists and returns true if the key is found, and false otherwise.<br />
<br />
Example:<br />
<br />
&lt;?php<br />
$person = array(&quot;name&quot; =&gt; &quot;John&quot;, &quot;age&quot; =&gt; 30, &quot;country&quot; =&gt; &quot;USA&quot;);<br />
$exists = array_key_exists(&quot;age&quot;, $person);<br />
echo &quot;Key &#039;age&#039; Exists: &quot; . ($exists ? &quot;Yes&quot; : &quot;No&quot;);<br />
?&gt;<br />
Output:<br />
<br />
Key &#039;age&#039; Exists: Yes<br />
<br />
18. in_array()<br />
The in_array() function checks if a specified value exists in an array. It returns true if the value is found, and false if otherwise.<br />
<br />
Example:<br />
<br />
&lt;?php<br />
$fruits = array(&quot;apple&quot;, &quot;banana&quot;, &quot;cherry&quot;);<br />
$result = in_array(&quot;banana&quot;, $fruits);<br />
echo &quot;Value &#039;banana&#039; Exists: &quot; . ($result ? &quot;Yes&quot; : &quot;No&quot;);<br />
?&gt;<br />
<br />
Output:<br />
<br />
Value &#039;banana&#039; Exists: Yes<br />
<br />
19. array_search<br />
array_search() looks for a value in an array and returns the corresponding key if the value is found. If the value is not found, it returns false.<br />
<br />
Example:<br />
<br />
&lt;?php<br />
$fruits = array(&quot;apple&quot;, &quot;banana&quot;, &quot;cherry&quot;);<br />
$key = array_search(&quot;banana&quot;, $fruits);<br />
echo &quot;Key for &#039;banana&#039;: &quot; . $key;<br />
?&gt;<br />
<br />
Output:<br />
<br />
Key for &#039;banana&#039;: 1<br />
<br />
20. array_count_values()<br />
The array_count_values() function counts the frequency of values in an array and returns an associative array where the keys are the unique values from the input array.<br />
<br />
Example:<br />
<br />
&lt;?php<br />
$numbers = array(1, 2, 2, 3, 3, 3);<br />
$counted = array_count_values($numbers);<br />
echo &quot;Counted Values: &quot;;<br />
foreach ($counted as $value =&gt; $count) {<br />
echo &quot;$value: $count, &quot;;<br />
}<br />
?&gt;<br />
<br />
Output:<br />
<br />
Counted Values: 1: 1, 2: 2, 3: 3,<br />
<br />
Modifying Arrays<br />
21. array_merge()<br />
The array_merge() function merges two or more arrays into a single array.<br />
<br />
Example:<br />
<br />
&lt;?php<br />
$arr1 = array(&quot;a&quot;, &quot;b&quot;);<br />
$arr2 = array(&quot;c&quot;, &quot;d&quot;);<br />
$merged = array_merge($arr1, $arr2);<br />
echo &quot;Merged Array: &quot;;<br />
foreach ($merged as $item) {<br />
echo $item . &quot; &quot;;<br />
}<br />
?&gt;<br />
<br />
Output:<br />
<br />
Merged Array: a b c d<br />
<br />
22. array_merge_recursive()<br />
array_merge_recursive() is used to merge multidimensional arrays.<br />
<br />
Example:<br />
<br />
&lt;?php<br />
$arr1 = array(&quot;a&quot; =&gt; &quot;apple&quot;, &quot;b&quot; =&gt; &quot;banana&quot;);<br />
$arr2 = array(&quot;b&quot; =&gt; &quot;blueberry&quot;, &quot;c&quot; =&gt; &quot;cherry&quot;);<br />
$merged = array_merge_recursive($arr1, $arr2);<br />
echo &quot;Merged Array (Recursive): &quot;;<br />
foreach ($merged as $key =&gt; $value) {<br />
echo &quot;[$key =&gt; $value] &quot;;<br />
}<br />
?&gt;<br />
Output:<br />
<br />
[&quot;a&quot; =&gt; &quot;apple&quot;, &quot;b&quot; =&gt; [&quot;banana&quot;, &quot;blueberry&quot;], &quot;c&quot; =&gt; &quot;cherry&quot;]<br />
<br />
23. array_replace()<br />
array_replace() replaces the values of the first array with the values from the second array for matching keys.<br />
<br />
Example:<br />
<br />
&lt;?php<br />
$arr1 = array(&quot;a&quot; =&gt; &quot;apple&quot;, &quot;b&quot; =&gt; &quot;banana&quot;);<br />
$arr2 = array(&quot;b&quot; =&gt; &quot;blueberry&quot;, &quot;c&quot; =&gt; &quot;cherry&quot;);<br />
$replaced = array_replace($arr1, $arr2);<br />
echo &quot;Replaced Array: &quot;;<br />
foreach ($replaced as $key =&gt; $value) {<br />
echo &quot;[$key =&gt; $value] &quot;;<br />
}<br />
?&gt;<br />
<br />
Output:<br />
<br />
Replaced Array: [a =&gt; apple] [b =&gt; blueberry] [c =&gt; cherry]<br />
<br />
24. array_push()<br />
array_push() adds one or more elements to the end of an array.<br />
<br />
Example:<br />
<br />
&lt;?php<br />
$fruits = array(&quot;apple&quot;, &quot;banana&quot;);<br />
array_push($fruits, &quot;cherry&quot;, &quot;date&quot;);<br />
echo &quot;Updated Array: &quot;;<br />
foreach ($fruits as $fruit) {<br />
echo $fruit . &quot; &quot;;<br />
?&gt;<br />
<br />
Output:<br />
<br />
Updated Array: apple banana cherry date<br />
<br />
25. array_reduce()<br />
array_reduce() reduces an array to a single value using a callback function.<br />
<br />
Example:<br />
<br />
&lt;?php<br />
$numbers = array(1, 2, 3, 4, 5);<br />
$sum = array_reduce($numbers, function ($carry, $item) {<br />
return $carry + $item;<br />
});<br />
<br />
echo &quot;Sum of Numbers: &quot; . $sum;<br />
<br />
?&gt;<br />
<br />
Output:<br />
<br />
Sum of Numbers: 15<br />
<br />
26. array_pop()<br />
The array_pop() function removes and returns the last element from an array.<br />
<br />
Example:<br />
<br />
&lt;?php<br />
$fruits = array(&quot;apple&quot;, &quot;banana&quot;, &quot;cherry&quot;);<br />
$lastFruit = array_pop($fruits);<br />
echo &quot;Last Fruit Removed: &quot; . $lastFruit;<br />
?&gt;<br />
<br />
Output:<br />
<br />
Last Fruit Removed: cherry<br />
<br />
27. array_shift()<br />
The array_shift() function removes and returns the first element from an array.<br />
<br />
Example:<br />
<br />
&lt;?php<br />
$fruits = array(&quot;apple&quot;, &quot;banana&quot;, &quot;cherry&quot;);<br />
$firstFruit = array_shift($fruits);<br />
echo &quot;First Fruit Removed: &quot; . $firstFruit;<br />
?&gt;<br />
<br />
Output:<br />
<br />
First Fruit Removed: apple<br />
<br />
28. array_unshift()<br />
array_unshift() adds one or more elements to the beginning of an array.<br />
<br />
Example:<br />
<br />
&lt;?php<br />
$fruits = array(&quot;banana&quot;, &quot;cherry&quot;);<br />
array_unshift($fruits, &quot;apple&quot;, &quot;date&quot;);<br />
echo &quot;Updated Array: &quot;;<br />
foreach ($fruits as $fruit) {<br />
echo $fruit . &quot; &quot;;<br />
}<br />
?&gt;<br />
<br />
Output:<br />
<br />
Updated Array: apple date banana cherry<br />
<br />
29. arsort()<br />
arsort() sorts an associative array in descending order, preserving key-value associations.<br />
<br />
Example:<br />
<br />
&lt;?php<br />
$fruits = array(&quot;banana&quot; =&gt; 2, &quot;cherry&quot; =&gt; 1, &quot;apple&quot; =&gt; 3); arsort($fruits);<br />
echo &quot;Sorted Array (Reverse): &quot;;<br />
foreach ($fruits as $key =&gt; $value) {<br />
echo &quot;[$key =&gt; $value] &quot;;<br />
}<br />
?&gt;<br />
<br />
Output:<br />
<br />
Sorted Array (Reverse): [apple =&gt; 3] [banana =&gt; 2] [cherry =&gt; 1]<br />
<br />
30. asort()<br />
asort() sorts an associative array in ascending order.<br />
<br />
Example:<br />
<br />
&lt;?php<br />
$fruits = array(&quot;banana&quot; =&gt; 2, &quot;cherry&quot; =&gt; 1, &quot;apple&quot; =&gt; 3); asort($fruits);;<br />
echo &quot;Sorted Array: &quot;;<br />
foreach ($fruits as $key =&gt; $value) {<br />
echo &quot;[$key =&gt; $value] &quot;;<br />
}<br />
?&gt;<br />
<br />
Output:<br />
<br />
Sorted Array: [cherry =&gt; 1] [banana =&gt; 2] [apple =&gt; 3]<br />
<br />
31. rsort()<br />
rsort() sorts an indexed array in descending order.<br />
<br />
Example:<br />
<br />
&lt;?php<br />
$numbers = array(5, 3, 1, 4, 2);<br />
rsort($numbers);<br />
echo &quot;Reverse Sorted Numbers: &quot;;<br />
foreach ($numbers as $number) {<br />
echo $number . &quot; &quot;;<br />
}<br />
?&gt;<br />
<br />
Output:<br />
<br />
Reverse Sorted Numbers: 5 4 3 2 1<br />
<br />
32. usort()<br />
usort() sorts an indexed array using a user-defined comparison function.<br />
<br />
Example:<br />
<br />
&lt;?php<br />
$numbers = array(5, 3, 1, 4, 2);<br />
usort($numbers, function($a, $b) {<br />
return $a - $b;<br />
});<br />
echo &quot;Sorted Numbers (User-Defined): &quot;;<br />
foreach ($numbers as $number) {<br />
echo $number . &quot; &quot;;<br />
}<br />
?&gt;<br />
<br />
Output:<br />
<br />
Sorted Numbers (User-Defined): 1 2 3 4 5<br />
<br />
33. array_multisort()<br />
array_multisort() performs a multi-dimensional sorting of an array.<br />
<br />
Example:<br />
<br />
&lt;?php<br />
$names = array(&quot;John&quot;, &quot;Alice&quot;, &quot;Bob&quot;);<br />
$ages = array(30, 25, 35);<br />
array_multisort($names, $ages);<br />
echo &quot;Sorted Names: &quot;;<br />
foreach ($names as $name) {<br />
echo $name . &quot; &quot;;<br />
}<br />
echo &quot;; &quot;;<br />
echo &quot;Sorted Ages: &quot;;<br />
foreach ($ages as $age) {<br />
echo $age . &quot; &quot;;<br />
}<br />
?&gt;<br />
<br />
Output:<br />
<br />
Sorted Names: Alice Bob John ; Sorted Ages: 25 35 30  <br />
<br />
34. shuffle()<br />
shuffle() randomly shuffles the elements of an array.<br />
<br />
Example:<br />
<br />
&lt;?php<br />
$cards = array(&quot;A&quot;, &quot;2&quot;, &quot;3&quot;, &quot;4&quot;, &quot;5&quot;);<br />
shuffle($cards);<br />
echo &quot;Shuffled Cards: &quot;;<br />
foreach ($cards as $card) {<br />
echo $card . &quot; &quot;;<br />
}<br />
?&gt;<br />
<br />
Output:<br />
<br />
Shuffled Cards: 5 2 3 A 4<br />
<br />
35. natsort()<br />
This function sorts an array using a &quot;natural order&quot; algorithm, which is useful for sorting arrays with numbers.<br />
<br />
Example:<br />
<br />
&lt;?php<br />
$fruits = array(&quot;apple10&quot;, &quot;apple2&quot;, &quot;apple1&quot;);<br />
natsort($fruits);<br />
echo &quot;Naturally Sorted Fruits: &quot;;<br />
foreach ($fruits as $fruit) {<br />
echo $fruit . &quot; &quot;;<br />
}<br />
?&gt;<br />
<br />
Output:<br />
<br />
Naturally Sorted Fruits: apple1 apple2 apple10<br />
<br />
36. array_filter()<br />
array_filter() filters the elements of an array using a callback function and returns a new array containing only the elements that pass the callback&#039;s test.<br />
<br />
Example:<br />
<br />
&lt;?php<br />
$numbers = array(1, 2, 3, 4, 5);<br />
$filtered = array_filter($numbers, function($n) {<br />
return $n % 2 == 0; // Filter even numbers.<br />
});<br />
echo &quot;Filtered Numbers (Even): &quot;;<br />
foreach ($filtered as $number) {<br />
echo $number . &quot; &quot;;<br />
}<br />
?&gt;<br />
<br />
Output:<br />
<br />
Filtered Numbers (Even): 2 4<br />
<br />
37. array_pad()<br />
array_pad() pads an array to a specified length with a specified value.<br />
<br />
Example:<br />
<br />
&lt;?php<br />
$numbers = array(1, 2, 3);<br />
$padded = array_pad($numbers, 5, 0);<br />
echo &quot;Padded Numbers: &quot;;<br />
foreach ($padded as $number) {<br />
echo $number . &quot; &quot;;<br />
}<br />
?&gt;<br />
<br />
Output:<br />
<br />
Padded Numbers: 1 2 3 0 0<br />
<br />
38. array_map()<br />
array_map() applies a callback function to each element of an array and returns a new array containing the results of the callback function for each element.<br />
<br />
Example:<br />
<br />
&lt;?php<br />
$numbers = array(1, 2, 3, 4, 5);<br />
$squared = array_map(function($n) {<br />
return $n * $n;<br />
}, $numbers);<br />
echo &quot;Squared Numbers: &quot;;<br />
foreach ($squared as $number) {<br />
echo $number . &quot; &quot;;<br />
}<br />
?&gt;<br />
<br />
Output:<br />
<br />
Squared Numbers: 1 4 9 16 25<br />
<br />
39. array_change_key_case()<br />
This function changes the case of keys in an array to either lowercase or uppercase.<br />
<br />
Example:<br />
<br />
&lt;?php<br />
$fruits = array(&quot;apple&quot; =&gt; 2, &quot;Banana&quot; =&gt; 3, &quot;CHERRY&quot; =&gt; 1);<br />
$lowercaseKeys = array_change_key_case($fruits, CASE_LOWER);<br />
echo &quot;Array with Lowercase Keys: &quot;;<br />
foreach ($lowercaseKeys as $key =&gt; $value) {<br />
echo &quot;[$key =&gt; $value] &quot;;<br />
}<br />
?&gt;<br />
<br />
Output:<br />
<br />
Array with Lowercase Keys: [apple =&gt; 2] [banana =&gt; 3] [cherry =&gt; 1]<br />
<br />
40. array_reverse()<br />
The reverse array function reverses the order of elements in an array.<br />
<br />
Example:<br />
<br />
&lt;?php<br />
$fruits = array(&quot;apple&quot;, &quot;banana&quot;, &quot;cherry&quot;);<br />
$reversed = array_reverse($fruits);<br />
echo &quot;Reversed Fruits: &quot;;<br />
foreach ($reversed as $fruit) {<br />
echo $fruit . &quot; &quot;;<br />
}<br />
?&gt;<br />
<br />
Output:<br />
<br />
Reversed Fruits: cherry banana apple<br />
<br />
41. array_splice()<br />
array_splice() removes a portion of an array and replaces it with new elements. It can also return the removed elements as a new array.<br />
<br />
Example:<br />
<br />
&lt;?php<br />
$fruits = array(&quot;apple&quot;, &quot;banana&quot;, &quot;cherry&quot;, &quot;date&quot;, &quot;fig&quot;);<br />
$removed = array_splice($fruits, 2, 2, array(&quot;grape&quot;, &quot;kiwi&quot;));<br />
echo &quot;Updated Fruits: &quot;;<br />
foreach ($fruits as $fruit) {<br />
echo $fruit . &quot; &quot;;<br />
}<br />
echo &quot;; &quot;;<br />
echo &quot;Removed Fruits: &quot;;<br />
foreach ($removed as $fruit) {<br />
echo $fruit . &quot; &quot;;<br />
}<br />
?&gt;<br />
<br />
Output:<br />
<br />
Updated Fruits: apple banana grape kiwi fig ; Removed Fruits: cherry date<br />
<br />
42. array_unique()<br />
array_unique() removes duplicate values from an array and returns a new array with only the unique values.<br />
<br />
Example:<br />
<br />
&lt;?php<br />
$numbers = array(1, 2, 3, 2, 4, 5, 5);<br />
$uniqueNumbers = array_unique($numbers);;<br />
echo &quot;Unique Numbers: &quot;;<br />
foreach ($uniqueNumbers as $number) {<br />
echo $number . &quot; &quot;;<br />
}<br />
?&gt;<br />
<br />
Output:<br />
<br />
Unique Numbers: 1 2 3 4 5<br />
<br />
43. array_walk()<br />
array_walk() applies a user-defined callback function to each element of an array.<br />
<br />
Example:<br />
<br />
&lt;?php<br />
$fruits = array(&quot;apple&quot;, &quot;banana&quot;, &quot;cherry&quot;);<br />
array_walk($fruits, function(&amp;$value) {<br />
$value = strtoupper($value);<br />
});<br />
echo &quot;Modified Fruits: &quot;;<br />
foreach ($fruits as $fruit) {<br />
echo $fruit . &quot; &quot;;<br />
}<br />
?&gt;<br />
<br />
Output:<br />
<br />
Modified Fruits: APPLE BANANA CHERRY<br />
<br />
Array Calculations &amp; Returns<br />
44. array_keys()<br />
array_keys() returns all the keys or a subset of keys from an associative array.<br />
<br />
Example:<br />
<br />
&lt;?php<br />
$fruits = array(&quot;apple&quot; =&gt; 2, &quot;banana&quot; =&gt; 3, &quot;cherry&quot; =&gt; 1);<br />
$keys = array_keys($fruits);<br />
echo &quot;Array Keys: &quot;;<br />
foreach ($keys as $key) {<br />
echo $key . &quot; &quot;;<br />
}<br />
?&gt;<br />
<br />
Output:<br />
<br />
Array Keys: apple banana cherry<br />
<br />
45. array_column()<br />
array_column() extracts the values from a single column of a multi-dimensional array and returns an array containing those values.<br />
<br />
Example:<br />
<br />
&lt;?php<br />
$people = array(<br />
array(&quot;name&quot; =&gt; &quot;John&quot;, &quot;age&quot; =&gt; 30),<br />
array(&quot;name&quot; =&gt; &quot;Alice&quot;, &quot;age&quot; =&gt; 25),<br />
array(&quot;name&quot; =&gt; &quot;Bob&quot;, &quot;age&quot; =&gt; 35)<br />
);<br />
$names = array_column($people, &quot;name&quot;);<br />
echo &quot;Names: &quot;;<br />
foreach ($names as $name) {<br />
echo $name . &quot; &quot;;<br />
}<br />
?&gt;<br />
<br />
Output:<br />
<br />
Names: John Alice Bob<br />
<br />
46. array_rand()<br />
array_rand() returns one or more random keys from an array.<br />
<br />
Example:<br />
<br />
&lt;?php<br />
$fruits = array(&quot;apple&quot;, &quot;banana&quot;, &quot;cherry&quot;, &quot;date&quot;, &quot;fig&quot;);<br />
$randomKey = array_rand($fruits);<br />
echo &quot;Random Key: &quot; . $randomKey;<br />
?&gt;<br />
<br />
Output:<br />
<br />
Random Key: 4<br />
<br />
47. array_product()<br />
This function calculates the product of all the values in an array.<br />
<br />
Example:<br />
<br />
&lt;?php<br />
$numbers = array(1, 2, 3, 4, 5);<br />
$product = array_product($numbers);<br />
echo &quot;Product of Numbers: &quot; . $product;<br />
?&gt;<br />
<br />
Output:<br />
<br />
Product of Numbers: 120<br />
<br />
48. array_sum()<br />
array_sum() calculates the sum of all the values in an array.<br />
<br />
Example:<br />
<br />
&lt;?php<br />
$numbers = array(1, 2, 3, 4, 5);<br />
$sum = array_sum($numbers);<br />
echo &quot;Sum of Numbers: &quot; . $sum;<br />
?&gt;<br />
<br />
Output:<br />
<br />
Sum of Numbers: 15<br />
<br />
49. count()<br />
count() returns the number of elements in an array.<br />
<br />
Example:<br />
<br />
&lt;?php<br />
$fruits = array(&quot;apple&quot;, &quot;banana&quot;, &quot;cherry&quot;);<br />
$count = count($fruits);<br />
echo &quot;Number of Fruits: &quot; . $count;<br />
?&gt;<br />
<br />
Output:<br />
<br />
Number of Fruits: 3<br />
<br />
50. current()<br />
current() returns the current element&#039;s value in an array.<br />
<br />
Example:<br />
<br />
&lt;?php<br />
$fruits = array(&quot;apple&quot;, &quot;banana&quot;, &quot;cherry&quot;);<br />
$current = current($fruits);<br />
echo &quot;Current Fruit: &quot; . $current;<br />
?&gt;<br />
<br />
Output:<br />
<br />
Current Fruit: apple<br />
<br />
51. key()<br />
key() returns the current element&#039;s key in an array.<br />
<br />
Example:<br />
<br />
&lt;?php<br />
$fruits = array(&quot;apple&quot;, &quot;banana&quot;, &quot;cherry&quot;);<br />
$key = key($fruits);<br />
echo &quot;Current Key: &quot; . $key;<br />
?&gt;<br />
<br />
Output:<br />
<br />
Current Key: 0<br />
<br />
52. extract()<br />
The extract function imports variables into the current symbol table from an associative array, using the array keys as variable names and values as variable values.<br />
<br />
Example:<br />
<br />
&lt;?php<br />
$person = array(&quot;name&quot; =&gt; &quot;John&quot;, &quot;age&quot; =&gt; 30);<br />
extract($person);<br />
echo &quot;Name: &quot; . $name . &quot;, Age: &quot; . $age;<br />
?&gt;<br />
<br />
Output:<br />
<br />
Name: John, Age: 30<br />
<br />
53. next()<br />
This function advances the internal pointer of an array to the next element and returns that element&#039;s value.<br />
<br />
Example:<br />
<br />
&lt;?php<br />
$fruits = array(&quot;apple&quot;, &quot;banana&quot;, &quot;cherry&quot;);<br />
$nextFruit = next($fruits);<br />
echo &quot;Next Fruit: &quot; . $nextFruit;<br />
?&gt;<br />
<br />
Output:<br />
<br />
Next Fruit: banana<br />
<br />
54. prev()<br />
prev() moves the internal pointer of an array to the previous element and returns that element&#039;s value.<br />
<br />
Example:<br />
<br />
&lt;?php<br />
$fruits = array(&quot;apple&quot;, &quot;banana&quot;, &quot;cherry&quot;);<br />
end($fruits);<br />
$prevFruit = prev($fruits);<br />
echo &quot;Previous Fruit: &quot; . $prevFruit;<br />
?&gt;<br />
<br />
Output:<br />
<br />
Previous Fruit: banana<br />
<br />
55. end()<br />
end() moves the internal pointer of an array to the last element and returns that element&#039;s value.<br />
<br />
Example:<br />
<br />
&lt;?php<br />
$fruits = array(&quot;apple&quot;, &quot;banana&quot;, &quot;cherry&quot;);<br />
 $lastFruit = end($fruits);<br />
echo &quot;Last Fruit: &quot; . $lastFruit;<br />
?&gt;<br />
<br />
Output:<br />
<br />
Last Fruit: cherry<br />
<br />
56. reset()<br />
reset() moves the internal pointer of an array to the first element and returns that element&#039;s value.<br />
<br />
Example:<br />
<br />
&lt;?php<br />
$fruits = array(&quot;apple&quot;, &quot;banana&quot;, &quot;cherry&quot;);<br />
$firstFruit = reset($fruits);<br />
echo &quot;First Fruit: &quot; . $firstFruit;<br />
?&gt;<br />
<br />
Output:<br />
<br />
First Fruit: apple<br />
<br />
57. each()<br />
each() returns the current key-value pair from an array and advances the internal pointer to the next element. Note: This function has been removed in PHP versions 7.2 and later &ndash; try using foreach instead.<br />
<br />
Example:<br />
<br />
&lt;?php<br />
$fruits = array(&quot;apple&quot;, &quot;banana&quot;, &quot;cherry&quot;);<br />
$pair = each($fruits);<br />
echo &quot;Key: &quot; . $pair[&#039;key&#039;] . &quot;, Value: &quot; . $pair[&#039;value&#039;];<br />
?&gt;<br />
<br />
Output:<br />
<br />
Key: 0, Value: apple<br />
<br />
Key: 1, Value: banana<br />
<br />
Key: 2, Value: cherry<br />
<br />
58. file()<br />
file() reads an entire file into an array, with each line of the file as an element in the array.<br />
<br />
Example:<br />
<br />
&lt;?php<br />
$lines = file(&quot;example.txt&quot;);<br />
foreach ($lines as $line) {<br />
echo $line . &quot;\n&quot;;<br />
}<br />
?&gt;<br />
<br />
Output:<br />
<br />
$lines is an array with each line of the file as an element<br />
<br />
PHP Array Constants<br />
59. SORT_ASC<br />
This constant specifies ascending order.<br />
<br />
Example:<br />
<br />
&lt;?php<br />
$numbers = array(5, 3, 1, 4, 2);<br />
sort($numbers, SORT_ASC);<br />
foreach ($numbers as $number) {<br />
echo $number . &quot; &quot;;<br />
}<br />
?&gt;<br />
<br />
Output:<br />
<br />
1 2 3 4 5<br />
<br />
60. SORT_DESC<br />
This constant specifies descending order.<br />
<br />
Example:<br />
<br />
&lt;?php<br />
$numbers = array(5, 3, 1, 4, 2);<br />
rsort($numbers, SORT_DESC);<br />
foreach ($numbers as $number) {<br />
echo $number . &quot; &quot;;<br />
}<br />
?&gt;<br />
<br />
Output:<br />
<br />
5 4 3 2 1<br />
<br />
61. SORT_NUMERIC<br />
This constant indicates that elements should be treated as numeric values when sorting. It ensures that the values are compared numerically rather than as strings.<br />
<br />
Example:<br />
<br />
&lt;?php<br />
$values = array(&quot;10&quot;, &quot;2&quot;, &quot;25&quot;, &quot;7&quot;);<br />
sort($values, SORT_NUMERIC);<br />
foreach ($values as $value) {<br />
echo $value . &quot; &quot;;<br />
}<br />
?&gt;<br />
<br />
Output:<br />
<br />
2 7 10 25<br />
<br />
62. SORT_REGULAR<br />
This constant indicates that elements should be compared in their original data types without any special treatment as numbers or strings.<br />
<br />
Example:<br />
<br />
&lt;?php<br />
$values = array(&quot;10&quot;, &quot;2&quot;, &quot;25&quot;, &quot;7&quot;);<br />
sort($values, SORT_REGULAR);<br />
foreach ($values as $value) {<br />
echo $value . &quot; &quot;;<br />
}<br />
?&gt;<br />
<br />
Output:<br />
<br />
2 7 10 25<br />
<br />
63. CASE_LOWER<br />
This constant specifies that keys should be converted to lowercase.<br />
<br />
Example:<br />
<br />
&lt;?php<br />
$fruits = array(&quot;Apple&quot; =&gt; &quot;red&quot;, &quot;Banana&quot; =&gt; &quot;yellow&quot;);<br />
$lowercaseKeys = array_change_key_case($fruits, CASE_LOWER);<br />
foreach ($lowercaseKeys as $key =&gt; $value) {<br />
echo &quot;Key: &quot; . $key . &quot;, Value: &quot; . $value . &quot;\n&quot;;<br />
}<br />
?&gt;<br />
<br />
Output:<br />
<br />
Key: apple, Value: red<br />
<br />
Key: banana, Value: yellow<br />
<br />
64. CASE_UPPER<br />
This constant specifies that keys should be converted to uppercase.<br />
<br />
Example:<br />
<br />
&lt;?php<br />
$fruits = array(&quot;apple&quot; =&gt; &quot;red&quot;, &quot;banana&quot; =&gt; &quot;yellow&quot;);<br />
$uppercaseKeys = array_change_key_case($fruits, CASE_UPPER);<br />
foreach ($uppercaseKeys as $key =&gt; $value) {<br />
echo &quot;Key: &quot; . $key . &quot;, Value: &quot; . $value . &quot;\n&quot;;<br />
}<br />
?&gt;<br />
<br />
Output:<br />
<br />
Key: APPLE, Value: red<br />
<br />
Key: BANANA, Value: yellow<br />
