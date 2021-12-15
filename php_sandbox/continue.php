<html>
<!-- 7.Control Structures Part 2 Loops.mp4 -->
<!-- 17:51 continue -->

	<head>
		<title>Loops: continue</title>
		
	</head>
	<body>
	<?php
		for ($count=0; $count <= 10; $count++) {
			if ($count == 5) {
				continue; //Tells PHP to skip back to the top when $count = 5 and ignore the "echo $count" statement below it.
				//This loop will output all of the numbers between 0 and 10, skipping 5. 
			}
			echo $count . ". <br />";
		}
	?>
</body>
</html>