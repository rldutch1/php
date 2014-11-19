<html>
<!-- 7.Control Structures Part 2 Loops.mp4 -->
<!-- 20:54 break -->

	<head>
		<title>Loops: break</title>
		
	</head>
	<body>
	<?php
		for ($count = 0; $count <= 10; $count++) {
		if ($count == 5) {
			echo "<br />"; break;
			}		
			echo $count . ". <br />";
		}

//Another example

		for ($count = 0; $count <= 10; $count++) {
		if ($count == 10) {
			echo $count . "... <br />"; break;
		
		}
		else {echo $count . ". <br />";}
		}
		
		?>
</body>
</html>