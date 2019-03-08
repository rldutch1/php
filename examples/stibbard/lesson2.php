<?php
if(!session_id()) session_start(); //If session has not been started, start it.
include('header.php');
echo "

<div>
<p>
<a href='https://www.youtube.com/watch?v=4nMonWzCb6Y'>MySQL PDO Tutorial Lesson 2 - Error catching</a><br /><br />
<div class='section1'>Lesson 2: The Try/Catch method in the connection file.</div> <br />
try { <br />
	\\\\Example: \$handler = new PDO('mysql:host=localhost;dbname=TheDatabaseName;charset=utf8', 'TheUsername', 'ThePassword!'); //Setting the handler. See next line if this line fails. <br />
	\$handler = new PDO('mysql:host=localhost;dbname=stibbard;charset=utf8', 'stibbard', 'stibbard'); //Setting the handler. See next line if this line fails. <br />
	\$handler->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //Setting the attributes for the handler that we want to see if there is an exception error. <br />
} <br />
//global \$handler <br />
catch(PDOException \$e) { //Return the PDO exception and naming it \$e. <br />
//	echo 'Caught'; <br />
//	die('Sorry database problem.'); //Production message. <br />
	echo \$e->getMessage(); //Show specific error message. Development. <br />
} <br />
</p>
</div>";
include('footer.php');
?>