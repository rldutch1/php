<html>
<!--22:54 of 5.Exploring Data Types.mp4 -->
	<head>
		<title>Numbers: Integers</title>
	</head>
	<body>
	<?php
	$var1 = 3;
	$var2 = 4;
	?>
	Basic Math: <?php echo ((1 + 2 + $var1) * $var2) / 2 - 5; ?>
	<br />
	+=: <?php $var2 += 4; echo $var2; //concatination using += ?> <br /> 
	-=: <?php $var2 -= 4; echo $var2; //concatination using += ?> <br /> 
	*=: <?php $var2 *= 3; echo $var2; //concatination using += ?> <br /> 
	/=: <?php $var2 /= 4; echo $var2; //concatination using += ?> <br /> 
	<br />
			
	Increment: <?php $var2 ++; echo $var2; //concatination using += ?> <br /> 
	Decrement: <?php $var2 --; echo $var2; //concatination using += ?> <br /> 

	</body>
</html>

