

<!DOCTYPE html>
<html>
<body>

<?php
$str = "This is nice";
echo strlen($str)."<br>"; // Using strlen() to return the string length
echo substr_count($str,"is")."<br>"; // The number of times "is" occurs in the string
echo substr_count($str,"is",2)."<br>"; // The string is now reduced to "is is PHP"
echo substr_count($str,"is",3)."<br>"; // The string is now reduced to "s is PHP"
echo substr_count($str,"is",3,3)."<br>"; // The string is now reduced to "s i"

//Example from my dbimages.php file reading the first five characters: 	if(substr($imageType,0,5) == "image"){do some work} //if the first five characters equals 'image' do some work.
?>

</body>
</html>