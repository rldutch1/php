<html>
<head>
<title>
</title></head>
<style>
</style>
<body>
<!-- <a href="Arizona State University Wrestling Photo.png">Arizona State University Wrestling Photo</a><br /> -->
<img src="Arizona State University Wrestling Photo.png" width="320px" height="240px" /><br />
<?php

//https://stackoverflow.com/questions/14366928/how-to-return-just-file-name-using-glob-in-php
//https://www.php.net/manual/en/function.pathinfo.php

//Create video links for all files in directory.
	foreach(glob('videos/PHP_OOP_Login_Register_System_*') as $file) {
		if (strpos($file, ".") > 0) { //If the file has a period (usually before the extension).
			$filext = pathinfo($file);
			echo "
			<video width=\"320\" height=\"240\" controls>" .
			"<source src=\"" . $file . "\" type=\"video/" . $filext['extension'] . "\">" .
			"Your browser does not support the video tag." .
			"</video><br />";
		}
	}

//Another way to display specific files:
  $files = glob("*.{avi,mp4,mts,php,png,PNG}", GLOB_BRACE);
   foreach($files as $file)
   echo $file. "<br />";


/*
  <?php
  $directory = Yii::getPathOfAlias('webroot').'/uploads/';
  $working_dir = getcwd();
  chdir($directory);
  $files = glob("*.{jpg,JPG,jpeg,JPEG,png,PNG}", GLOB_BRACE);
   foreach($files as $file)
   echo $file;
  chdir($working_dir);
  ?>
*/

/*
$pathinfo = pathinfo('/dir/test.tar.gz');
echo 'Directory Name is: '.$pathinfo['dirname'];
echo 'Basename is: '.$pathinfo['basename'];
echo 'Extension is: '.$pathinfo['extension'];
echo 'Filename is: '.$pathinfo['filename'];
*/
?>

</body>
</html>

