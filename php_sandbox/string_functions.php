<html>
<!--15:08 of 5.Exploring Data Types.mpp4 -->
	<head>
		<title>String Functions</title>
	</head>
	<body>
	<?php
		$firstString = "The quick red fox";
		$secondString = " jumps over the lazy brown dog.";
	?>
	<?php
		$thirdString = $firstString;
		$thirdString .= $secondString; //Concatination
		echo $thirdString;"<br />" 
	?>
<br />
	Lowercase: <?php echo strtolower($thirdString); ?><br />
	Uppercase: <?php echo strtoupper($thirdString); ?><br />
	Uppercase first-letter: <?php echo ucfirst($thirdString); ?><br />
	Uppercase each word: <?php echo ucwords($thirdString); ?><br />
	<br />
	Length = : <?php echo strlen($thirdString); ?><br />
	Trim: <?php echo $fourthString = $firstString . trim($secondString); ?><br />
	Find: <?php echo strstr($thirdString, "brown"); ?><br />
	Replace by string: <?php echo str_replace("quick", "super-fast", $thirdString); ?><br />
	<br />
	Repeat: <?php echo str_repeat($thirdString, 2); ?><br />
	Make substring: <?php echo substr($thirdString, 5, 10); ?><br />
	Find position: <?php echo strpos($thirdString, "brown"); ?><br />
	Find character: <?php echo strchr($thirdString, "z") ?><br />
	<br />

	</body>
</html>

