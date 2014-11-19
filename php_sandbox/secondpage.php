<html>

<head>
<title>Second Page
</title>
</head>

<body>
	<?php
	//PHP takes everything that comes after the questionmark in the URL from the firstpage.php and puts it into an array that can be used in this page (secondpage.php). This is called a Super Global variable that is immediately available to the secondpage.php before it is loaded. 
                echo "<pre>";
			print_r($_GET);
			$id = $_GET['id'];
			$name = $_GET['name'];
			echo "<br /><strong>" . $id . ": {$name}</strong>";
                echo "</pre>"; //The print_r will show nothing at first.
		//You will have to manually type in http://localhost/php/php_sandbox/secondpage.php?id=1 to see the results in the array unless you echo the $id.

//What do you do if the $name or $id actually has an ampersand(&) or a questionmark(?) as a value? 
//9:42

//RAW encoding
			$string = "Robert Holland";
			echo urlencode($string) . "<br />"; //In most browsers will put a plus sign between words. 
			echo rawurlencode($string) . "<br />"; //In most browsers will put a percent twenty to represent a space between words.
	//When should you use either urlencode or rawurlencode? 
		//If you are generating a dynamic link that a user will need to click on then you should use rawurlencode for anything that comes before the questionmark.
		//You will want to use urlencode for everything that comes after the questionmark.
		

        ?>
	
</body>

</html>

