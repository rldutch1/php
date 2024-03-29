<?php

$stack1 = array("orange", "banana"); 
array_push($stack1, "apple", "raspberry"); 
//print_r($stack1);

//Loop through the array.
foreach($stack1 as $stacksingle){
	echo $stacksingle . "<br />";
}
echo "<br /><br />";
$stack2 = array(1, 2);
$rlhxxx = array('1, 2');
$array = $rlhxxx;
array_push($stack2, $array, 4, 5);
print_r($stack2);

//Loop Through an Associative Array
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
foreach($age as $x => $x_value) {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
}
echo "<br><br>";
$weight = [
    'Pete' => 75, 
    'Benjamin' => 89,
    'Jonathan' => 101,
    'Robert' => 200
  ];
echo "Sort an associative array in descending order, according to the value:<br />arsort(\$weight)<br />";
arsort($weight); //Reverse sort. Do not: $x = arsort($weight);. print_r will produce a 1.
print_r($weight);
echo "<br><br>";

$weight = array(
    'Pete' => 75, 
    'Benjamin' => 89,
    'Jonathan' => 101,
    'Robert' => 200
  );
echo "Sort an associative array in descending order, according to the value:<br />asort(\$weight)<br />";
asort($weight); //Do not: $x = arsort($weight);. print_r will produce a 1.
print_r($weight);
echo "<br><br>";

$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
arsort($age);
print_r($age);
echo "<br><br>";

echo "get_declared_classes() below:<br />";
$theclasses = get_declared_classes();
sort($theclasses);
//print_r($theclasses);
foreach($theclasses as $class){
	echo json_encode($class);
}
?>
