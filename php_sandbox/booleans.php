<!-- 51:25 5.Exploring Data Types.mp4 -->
<html>
	<head>
		<title>Booleans and NULL</title>
	</head>
	<body>
	<?php 
		$bool1 = true;
		$bool2 = false;
		
	?>
	<?php
		echo '$bool1:' . $bool1 . "<br />";
		echo '$bool2:' . $bool2 . "<br />";
	?>
	<br />
	<?php
		$var1 = 3;
		$var2 = "cat";
		$var4 = 0; //Testing the "empty" function on this below. The number zero is empty. Zero is nothing. Should display 1.
		$var5 = "0"; //Testing the "empty" function on this below. The string 0 is empty. Zero is nothing. Should display 1.
		$var6 = "4"; //Testing the "empty" function on this below. The string 4 is not empty. Should display 1.
		$var7 = NULL; //Nothing should display 1 below.
	?>
	$var1 is set; <?php echo isset($var1); ?><br />
	$var2 is set; <?php echo isset($var2); ?><br />
	$var3 is set; <?php echo isset($var3); ?><br />
	<?php unset($var1); ?>	
	$var1 is set; <?php echo isset($var1); ?><br />
	$var2 is set; <?php echo isset($var2); ?><br />
	$var3 is set; <?php echo isset($var3); ?><br />
	<br />
	$var1 empty: <?php echo empty($var1); ?><br />
	$var4 empty; <?php echo empty($var4); ?><br />
	$var5 empty; <?php echo empty($var5); ?><br />
	$var6 empty; <?php echo empty($var6); ?><br />
	$var7 empty; <?php echo empty($var7); ?><br />

	</body>
</html>

