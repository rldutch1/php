<html>
<!-- 7.Control Structures Part 2 Loops.mp4 -->
<!-- -->
	<head>
		<title>Loops: while</title>
		
	</head>
	<body>
	<?php
		$count = 0;
		while ($count <= 10) {
				echo "count is " . $count . ". <br />";
				$count++;
			}
		echo "<br />Count: {$count} <br /> <br />---------- <br />";

		$count = 0;
		while ($count <= 10) {
				if ($count == 5) {
					echo "FIVE <br />";
					}
				else
				echo "count is " . $count . ". <br />";
				$count++;
			}
		echo "<br />Count: {$count}";
	?>
</body>
</html>