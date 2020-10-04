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
-rwxrwxrwx 1 rob sambashare  1806608 Oct 10  2018 '00000000_2018-10-10_08.20.15_I_N420.mp3'$'\r'
-rwxrwxrwx 1 rob sambashare  5201912 May 28  2019 '2019-02-01_11.08.39_Leah_Holland_6025262907_O_N420.mp3'$'\r'
-rwxrwxrwx 1 rob sambashare    53897 May 28  2019 '2019-02-01_12.47.15_St._Joes_Operator_6024063000_I_N420.mp3'$'\r'
-rwxrwxrwx 1 rob sambashare 53261348 May 28  2019 '2019-02-01_17.34.52_Vernon_C._Holland_III_6144773476_I_N420.mp3'$'\r'
-rwxrwxrwx 1 rob sambashare  1276018 May 28  2019 '2019-02-02_13.38.02_7349455322_O_N420.mp3'$'\r'
-rwxrwxrwx 1 rob sambashare   191852 May 28  2019 '2019-02-02_17.54.32_American_Home_Shield_8007764663_O_N420.mp3'$'\r'
-rwxrwxrwx 1 rob sambashare   533368 May 28  2019 '2019-02-02_19.11.30_Home_Home_6025950068_I_N420.mp3'$'\r'
-rwxrwxrwx 1 rob sambashare   137138 May 28  2019 '2019-02-02_19.32.48_Home_Home_6025950068_I_N420.mp3'$'\r'
-rwxrwxrwx 1 rob sambashare    48650 May 28  2019 '2019-02-03_18.51.43_4803595834_I_N420.mp3'$'\r'

*/

?>
