<?php
echo "
<html>
<head><title></title></head>
<body>
<&#63;php<br />
//How to write prepare and execute statements in OOP PDO?<br />
//https://stackoverflow.com/questions/42551050/how-to-write-prepare-and-execute-statements-in-oop-pdo<br />
<br />
    include'OOP_PDO_Class_Insert_Read1.php';<br />
<br />
<br />
    \$users = new Connection(); //Instantiate a new connection.<br />
		//Insert user data.<br />
    \$users->myQuery('INSERT INTO users (userid, first_name, last_name, gender) VALUES(:uid,:fname,:lname,:gender)');<br />
    \$users->bind(':uid', 118); //bind each value<br />
    \$users->bind(':fname', 'Hotty'); // bind<br />
    \$users->bind(':lname', 'Holland');<br />
    \$users->bind(':gender', 1);<br />
    //Execute the query. <br />
    if(\$users->run()){<br />
<br />
        echo \"record inserted\";<br />
    }<br />
		<br />
		
		
		//Retrieve a single row of data from the database using the SingleRow method.<br />
    \$users->myQuery(\"SELECT userid, first_name, last_name, gender FROM users WHERE userid > :userid\");<br />
    \$users->bind(':userid',1);<br />
    \$row = \$users->SingleRow();<br />
    <br />
    echo '&lt;pre&gt;';<br />
    print_r(\$row);<br />
    echo '&lt;/pre&gt;';<br />
		<br />
		//Retrieve multiple rows of data from the database using the All method.<br />
		\$users->myQuery(\"SELECT * FROM users\");<br />
    \$row = \$users->All();<br />
<br />
    echo '&lt;pre&gt;';<br />
    print_r(\$row);<br />
    echo '&lt;/pre&gt;';<br />
<br />
<br />
?>";

echo "</body></html>";