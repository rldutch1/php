<?php
//	foreach(glob('*.mp3') as $file) {
//		echo str_replace(" ", "_", $file) . "\r\n";
//	}

//	foreach(glob('*.mp3') as $file) {
//		if (strpos("Hello world!", "world") > 7) {
//		echo strpos("Hello world!", "world"); // outputs 6
//		}
//		//echo str_replace(" ", "_", $file) . "\r\n";
//	}

//Rename files and remove spaces, commas, equal signs, semi-colons, apostrophes.:
	foreach(glob('*.txt') as $file) {
		if (strpos($file, " ") > 0) { //If there are more than 0 spaces in the name.
			$x = "mv \"" . $file . "\" "; 
			$y = str_replace(" ", "_", $file); //Remove spaces.
			$y = str_replace(",", "", $y); //Remove commas.
			$y = str_replace("=", "", $y); //Remove equals.
			$y = str_replace(";", "", $y); //Remove semi-colons.
			$y = str_replace("'", "", $y); //Remove apostrophes.
			$y = str_replace("(", "", $y); //Remove left parenthesis.
			$y = str_replace(")", "", $y); //Remove right prenthesis.
			$y = str_replace("$", "", $y); //Remove dollar signs.
			$y = str_replace("[", "", $y); //Remove left brackets.
			$y = str_replace("]", "", $y); //Remove right brackets.
			$y = str_replace("&", "", $y); //Remove ampersands.
			$y = str_replace("", "", $y); //Remove accent aigou.
			$y = str_replace("._", "_", $y); //Remove period underscore.
			
			echo $x . " " . $y . "<br />"; // DO NOT USE \r\n BECAUSE IT WILL PUT A CARRIAGE RETURN IN THE FILENAME!
		}
		//The rename utility is useful for removing the carriage return on files. rename $'\r' '' *.txt*
		//https://unix.stackexchange.com/questions/189784/remove-newlines-in-file-names
	}

/*
NOTE: I got rid of the carriage return by zipping the files up and unzipping them.
*/

?>
