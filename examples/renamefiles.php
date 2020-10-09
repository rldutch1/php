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
			echo "mv \"" . $file . "\" " . 
			//str_replace(" ", "_", $file) . //Remove spaces.
			//str_replace(",", "", str_replace(" ", "_", $file)) . //Remove spaces and commas.
			//str_replace("=", "", str_replace(",", "", str_replace(" ", "_", $file))) . //Remove spaces, commas, equal signs.
			//str_replace(";", "", str_replace("=", "", str_replace(",", "", str_replace(" ", "_", $file)))) . //Remove spaces, commas, equal signs, semi-colons.
			//str_replace("'", "", str_replace(";", "", str_replace("=", "", str_replace(",", "", str_replace(" ", "_", $file))))) . //Remove spaces, commas, equal signs, semi-colons, apostrophes.
			//str_replace("(", "", str_replace("'", "", str_replace(";", "", str_replace("=", "", str_replace(",", "", str_replace(" ", "_", $file)))))) .  //Remove spaces, commas, equal signs, semi-colons, apostrophes, left parethesis.
			//str_replace(")", "", str_replace("(", "", str_replace("'", "", str_replace(";", "", str_replace("=", "", str_replace(",", "", str_replace(" ", "_", $file))))))) .  //Remove spaces, commas, equal signs, semi-colons, apostrophes, left parethesis, right parenthesis.
			str_replace("$", "", str_replace(")", "", str_replace("(", "", str_replace("'", "", str_replace(";", "", str_replace("=", "", str_replace(",", "", str_replace(" ", "_", $file)))))))) . //Remove spaces, commas, equal signs, semi-colons, apostrophes, left parethesis, right parenthesis, dollar sign.
			"<br />"; // DO NOT USE \r\n BECAUSE IT WILL PUT A CARRIAGE RETURN IN THE FILENAME!
		}
		//The rename utility is useful for removing the carriage return on files. rename $'\r' '' *.txt*
		//https://unix.stackexchange.com/questions/189784/remove-newlines-in-file-names
	}

/*
NOTE: I got rid of the carriage return by zipping the files up and unzipping them.
*/

?>
