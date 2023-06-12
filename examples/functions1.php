&lt;?php<br />
//Source: https://www.demo2s.com/php/php-function-arguments.html<br />
//Function arguments<br />
echo &quot;Function arguments:\r\n&quot;;<br />
	function a($input)<br />
	{<br />
	    echo &quot;$input[0] + $input[1] = &quot;, $input[0]+$input[1];<br />
	}<br />
	a(array(1,2));<br />
<br />
	function a_func(<br />
	    $first_arg,<br />
	    $second_arg,<br />
	    $test,<br />
	    $arg_with_default = 5,<br />
	    $again = &#039;a default string&#039;,<br />
	    // This trailing comma was not permitted before 8.0.0.<br />
	){<br />
	    echo &quot;\r\n&quot; . $first_arg . &quot; &quot; . $second_arg . &quot; &quot; . $test . &quot; &quot; . $arg_with_default . &quot; &quot; . $again . &quot;\r\n&quot;;<br />
	}<br />
<br />
	a_func(&quot;lets&quot;,&quot;make&quot;,&quot;number&quot;);<br />
<br />
//Passing arguments by reference to Function<br />
echo &quot;Passing arguments by reference to Function:\r\n&quot;;<br />
	function add_some_extra(&amp;$string)<br />
	{<br />
	    $string .= &#039; end.&#039;;<br />
	}<br />
	$str = &#039;start, &#039;;<br />
	add_some_extra($str);<br />
	echo $str . &quot;\r\n&quot;;<br />
<br />
//User-defined functions<br />
echo &quot;User-defined functions:\r\n&quot;;<br />
	function foo($arg_1, $arg_2, /* ..., */ $arg_n)<br />
	{<br />
	    echo &quot;Example User-defined function.\n&quot;;<br />
	    $x = $arg_1 . &quot; &quot; . $arg_2 . &quot; &quot; . $arg_n . &quot;\r\n&quot;;<br />
	    return $x;<br />
	}<br />
	echo &quot;Calling foo() here\n&quot;;<br />
	echo foo(1,2,3);<br />
<br />
//Conditional functions<br />
echo &quot;Conditional functions:\r\n&quot;;<br />
	$makefoo2 = true;<br />
<br />
/* We can&#039;t call foo2() from here<br />
   since it doesn&#039;t exist yet,<br />
   but we can call bar() */<br />
<br />
	bar();<br />
<br />
	if ($makefoo2) { //Set to true earlier.<br />
	  echo &quot;Making foo2 function here\n&quot;;<br />
	  function foo2()<br />
	  {<br />
	    echo &quot;I don&#039;t exist until program execution reaches me.\n&quot;;<br />
	  }<br />
	}<br />
<br />
/* Now we can safely call foo2()<br />
   since $makefoo2 evaluated to true */<br />
<br />
	if ($makefoo2) {foo2();} //If makefoo2 is true, call foo2.<br />
<br />
	function bar()<br />
	{<br />
	  echo &quot;Inside bar() function here\n&quot;;<br />
	  echo &quot;I exist immediately upon program start.\n&quot;;<br />
	}<br />
<br />
//Functions within functions<br />
echo &quot;Functions within functions:\r\n&quot;;<br />
	function foo3()<br />
	{<br />
	  echo &quot;Creating bar2() function here\n&quot;;<br />
	  function bar2()<br />
	  {<br />
	    echo &quot;I don&#039;t exist until foo3() is called.\n&quot;;<br />
	  }<br />
	}<br />
	/* We can&#039;t call bar2() yet since it doesn&#039;t exist. */<br />
<br />
	foo3();<br />
<br />
	/* Now we can call bar2(), foo3()&#039;s processing has made it accessible. */<br />
<br />
bar2();<br />
<br />
<br />
/*All functions and classes in PHP have the global scope.<br />
<br />
All functions and classes can be called outside a function even if they were defined inside and vice versa.<br />
<br />
PHP does not support function overloading, nor is it possible to undefine or redefine previously-declared functions.<br />
<br />
Function names are case-insensitive for the ASCII characters A to Z.<br />
<br />
Both variable number of arguments and default arguments are supported in functions.<br />
<br />
It is possible to call recursive functions in PHP.*/<br />
<br />
//Recursive functions<br />
echo &quot;Recursive functions:\r\n&quot;;<br />
	function recursion($a)<br />
	{<br />
	    if ($a &lt;= 20) {<br />
	        echo &quot;$a.\n&quot;;<br />
	        recursion($a + 1);<br />
	    }<br />
	}<br />
<br />
	recursion(14); //Passing 14 to recursion();<br />
<br />
?&gt;<br />
