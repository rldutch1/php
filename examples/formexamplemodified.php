<?php 

$data='
$Fname = $_POST["Fname"];
$Lname = $_POST["Lname"];
$gender = $_POST["gender"];
$food = $_POST["food"];
$quote = $_POST["quote"];
$education = $_POST["education"];
$TofD = $_POST["TofD"];
if (!isset($_POST["submit"])) 
{ // if page is not submitted to itself echo the form
?>
<html>

<head> 
<title>Personal INFO</title> 
</head> 
<body> 
<form method="post" action=""> 
First Name:<input type="text" size="12" maxlength="12" name="Fname"><br /> 
Last Name:<input type="text" size="12" maxlength="36" name="Lname"><br /> 
Gender:<br />
Male:<input type="radio" value="Male" name="gender"><br />
Female:<input type="radio" value="Female" name="gender"><br />
Please choose your favorite foods:<br />
Steak:<input type="checkbox" value="Steak" name="food[]"><br />
Pizza:<input type="checkbox" value="Pizza" name="food[]"><br />
Chicken:<input type="checkbox" value="Chicken" name="food[]"><br />
<textarea rows="5" cols="20" name="quote" wrap="physical">Enter your favorite quote!</textarea><br />
Select a Level of Education:<br />
<select name="education">
<option value="Jr.High">Jr.High</option>
<option value="HighSchool">HighSchool</option>
<option value="College">College</option></select><br />
Select your favorite time of day:<br />
<select name="TofD" size="3">
<option value="Morning">Morning</option>
<option value="Day">Day</option>
<option value="Night">Night</option></select><br />
<input type="submit" value="submit" name="submit">
</form>

<?php
} else { 
echo "Hello, ".$Fname." ".$Lname.".<br />";
echo "You are ".$gender.", and you like ";
foreach ($food as $f) {
echo $f."<br />";
}
echo "<i>".$quote."</i><br />";
echo "Your favorite time is ".$TofD.", and you passed ".$education."!<br />";
}
?>
</body>
</html>';

echo nl2br(htmlentities($data)) . "<br /><hr />";

$Fname = $_POST["Fname"];
$Lname = $_POST["Lname"];
$gender = $_POST["gender"];
$food = $_POST["food"];
$quote = $_POST["quote"];
$education = $_POST["education"];
$TofD = $_POST["TofD"];
if (!isset($_POST["submit"])) 
{ // if page is not submitted to itself echo the form
?>
<html>

<head> 
<title>Personal INFO</title> 
</head> 
<body> 
<form method="post" action=""> 
First Name:<input type="text" size="12" maxlength="12" name="Fname"><br /> 
Last Name:<input type="text" size="12" maxlength="36" name="Lname"><br /> 
Gender:<br />
Male:<input type="radio" value="Male" name="gender"><br />
Female:<input type="radio" value="Female" name="gender"><br />
Please choose your favorite foods:<br />
Steak:<input type="checkbox" value="Steak" name="food[]"><br />
Pizza:<input type="checkbox" value="Pizza" name="food[]"><br />
Chicken:<input type="checkbox" value="Chicken" name="food[]"><br />
<textarea rows="5" cols="20" name="quote" wrap="physical">Enter your favorite quote!</textarea><br />
Select a Level of Education:<br />
<select name="education">
<option value="Jr.High">Jr.High</option>
<option value="HighSchool">HighSchool</option>
<option value="College">College</option></select><br />
Select your favorite time of day:<br />
<select name="TofD" size="3">
<option value="Morning">Morning</option>
<option value="Day">Day</option>
<option value="Night">Night</option></select><br />
<input type="submit" value="submit" name="submit">
</form>

<?php
} else { 
echo "Hello, ".$Fname." ".$Lname.".<br />";
echo "You are ".$gender.", and you like ";
foreach ($food as $f) {
echo $f."<br />";
}
echo "<i>".$quote."</i><br />";
echo "Your favorite time is ".$TofD.", and you passed ".$education."!<br />";
}
?>
</body>
</html>
