<?php
echo "
&lt;?php<br />
//How to write prepare and execute statements in OOP PDO?<br />
//https://stackoverflow.com/questions/42551050/how-to-write-prepare-and-execute-statements-in-oop-pdo<br />
//https://stackoverflow.com/questions/18679448/pdo-class-is-this-technically-correct<br />
<br />
include'oop_pdo_class_insert_read1.php';<br />
<br />
<br />
\$users = new Connection(); //Instantiate a new connection.<br />
//Insert user data.<br />
//\$users-&gt;myQuery('INSERT INTO users (userid, first_name, last_name, gender) VALUES(:uid,:fname,:lname,:gender)');<br />
//\$users-&gt;bind(':uid', 118); //bind each value<br />
//\$users-&gt;bind(':fname', 'Happy'); // bind<br />
//\$users-&gt;bind(':lname', 'Holland');<br />
//\$users-&gt;bind(':gender', 1);<br />
//Execute the query.<br />
//if(\$users-&gt;run()){<br />
//<br />
//echo \"record inserted\";<br />
//\$lastid = \$users->lastInsertId(); //Getting the last inserted ID<br />
//echo \"Last ID = \" . \$lastid . \"\\r\\n\";<br />
//}<br />
<br />
////Retrieve a single row of data from the database using the SingleRow method.<br />
//\$users-&gt;myQuery(\"SELECT table_name, is_updatable FROM information_schema.views WHERE is_updatable = :is_updatable\");<br />
//\$users-&gt;bind(':is_updatable','YES');<br />
//\$row = \$users-&gt;SingleRow();<br />
<br />
  //echo '&lt;pre&gt;';<br />
  //print_r(\$row);<br />
  //echo '&lt;/pre&gt;';<br />
<br />
  ////Works1:<br />
  //foreach(\$row as \$key){<br />
  //	echo \"\$key: \r\n\"; //Values separated by carriage return.<br />
  //}<br />
<br />
  ////Works2:<br />
  //foreach(\$row as \$key){<br />
  //	echo \"\$key,\"; //Values separated by a comma.<br />
  //}<br />
<br />
  ////Works3:<br />
  //foreach(\$row as \$key =&gt; \$value){<br />
  //	echo \"\$key: \$value\r\n\";<br />
  //}<br />
<br />
////Retrieve multiple rows of data from the database using the All method.<br />
//\$users-&gt;myQuery(\"show databases;\");<br />
//\$users-&gt;myQuery(\"SELECT table_name, is_updatable FROM information_schema.views WHERE is_updatable = :is_updatable\");<br />
//\$users-&gt;bind(':is_updatable','YES');<br />
//\$rows = \$users-&gt;All();<br />
<br />
  //echo '&lt;pre&gt;';<br />
  //print_r(\$rows);<br />
  //echo '&lt;/pre&gt;';<br />
<br />
  /*<br />
  &lt;pre&gt;Array<br />
  (<br />
      [0] =&gt; Array<br />
          (<br />
              [TABLE_NAME] =&gt; vw_customer_display_nodocs<br />
              [IS_UPDATABLE] =&gt; YES<br />
          )<br />
<br />
      [1] =&gt; Array<br />
          (<br />
              [TABLE_NAME] =&gt; vw_ffl_book1<br />
              [IS_UPDATABLE] =&gt; YES<br />
          )<br />
<br />
      [2] =&gt; Array<br />
          (<br />
              [TABLE_NAME] =&gt; vw_ffl_book2<br />
              [IS_UPDATABLE] =&gt; YES<br />
          )<br />
<br />
      [3] =&gt; Array<br />
          (<br />
              [TABLE_NAME] =&gt; vw_ffl_bustax_docs<br />
              [IS_UPDATABLE] =&gt; YES<br />
          )<br />
<br />
      [4] =&gt; Array<br />
          (<br />
              [TABLE_NAME] =&gt; vw_ffl_license_docs<br />
              [IS_UPDATABLE] =&gt; YES<br />
          )<br />
<br />
      [5] =&gt; Array<br />
          (<br />
              [TABLE_NAME] =&gt; vw_ffl_ntn_inv_num<br />
              [IS_UPDATABLE] =&gt; YES<br />
          )<br />
<br />
      [6] =&gt; Array<br />
          (<br />
              [TABLE_NAME] =&gt; vw_ffl_weapondocs<br />
              [IS_UPDATABLE] =&gt; YES<br />
          )<br />
<br />
      [7] =&gt; Array<br />
          (<br />
              [TABLE_NAME] =&gt; vw_fflbook_transaction_number<br />
              [IS_UPDATABLE] =&gt; YES<br />
          )<br />
<br />
      [8] =&gt; Array<br />
          (<br />
              [TABLE_NAME] =&gt; vw_ffl_not_disposed<br />
              [IS_UPDATABLE] =&gt; YES<br />
          )<br />
<br />
      [9] =&gt; Array<br />
          (<br />
              [TABLE_NAME] =&gt; vw_ffl_disposed<br />
              [IS_UPDATABLE] =&gt; YES<br />
          )<br />
<br />
  )<br />
  */<br />
<br />
  //var_dump(\$rows)<br />
<br />
  ////https://www.w3schools.com/php/php_arrays_multidimensional.asp<br />
  ////Works1:<br />
  //  echo \$rows[0]['TABLE_NAME'] . \"\r\n\";<br />
<br />
  ////Works:<br />
  //foreach (\$rows[0] as \$key[0] =&gt; \$value) {<br />
  //    echo \"\$key[0]: \$value\n\";<br />
  //}<br />
<br />
  ////Works2:<br />
  //function myfunction(\$value,\$key)<br />
  //	{<br />
  //	echo \"The key \$key has the value \$value.\r\n\";<br />
  //	}<br />
  //  \$i=count(\$rows);<br />
  //  for(\$x = 0; \$x &lt; \$i; \$x++){<br />
  //		array_walk(\$rows[\$x],\"myfunction\");<br />
  //	}<br />
<br />
  ////Works3:<br />
  //	\$x=0;<br />
  //	\$i=count(\$rows);<br />
  //	while (\$x&lt;\$i){<br />
  //	//echo \$x;<br />
  //		echo \$rows[\$x]['TABLE_NAME'] . \"\r\n\";<br />
  //		\$x++;<br />
  //	}<br />
<br />
  ////Works4:<br />
  //  \$x=0;<br />
  //  \$i=count(\$rows);<br />
  //  while (\$x&lt;\$i){<br />
  //  	//echo \$x;<br />
  //  	foreach(\$rows[\$x] as \$key =&gt; \$value){<br />
  //  	echo \"\$key: \$value \r\n\";<br />
  //  	};<br />
  //  	\$x++;<br />
  //  }<br />
<br />
  ////Works5:<br />
  //  \$i=count(\$rows);<br />
  //  for(\$x = 0; \$x &lt; \$i; \$x++){<br />
  //  	foreach(\$rows[\$x] as \$key =&gt; \$value){<br />
  //  	echo \"\$key: \$value \r\n\";<br />
  //  	}<br />
  //  }<br />
<br />
  ////Works6:<br />
  //  \$i=count(\$rows);<br />
  //  for(\$x = 0; \$x &lt; \$i; \$x++){<br />
  //  	echo \$rows[\$x]['TABLE_NAME'] . \"\r\n\";<br />
  //  }<br />
<br />
	////Works7:<br />
	//  \$i=count(\$rows);<br />
	//  for(\$x = 0; \$x &lt; \$i; \$x++){<br />
	//	 	echo \$rows[\$x]['TABLE_NAME'] . \" \" . \$rows[\$x]['IS_UPDATABLE'] . \"\r\n\";<br />
	//  }<br />
<br /><br />

?&gt;<br />

";
?>
