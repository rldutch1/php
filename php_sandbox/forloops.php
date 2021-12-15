<html>
<!-- 7.Control Structures Part 2 Loops.mp4 -->
<!-- 07:07 For Loops -->
<?php 
/*
Syntax: 
	for (expr1, expr2, expr3)
		statement;
		
	expr1 is only evaluated at the very beginning of the loop once.
	expr2 is evaluated at the beginning of every loop. 
	expr3 is what happens at the end of each and every loop. 
	
Syntax restated: 
	for (initial, test, each)
		statement;
	
	initial: is the initial value we are giving where we are initializing something.
	test: is the test we are performing each time and as long as it is true the loop will continue.
	each: is the action that will be performed at the end of every loop before looping back to the top and doing the test again.
*/
?>
	<head>
		<title>Loops: for</title>
		
	</head>
	<body>
	<?php
		for ($count=0; $count <= 10; $count++) {
			echo "Count is: " . $count . ", <br />";
			}
	?>
</body>
</html>