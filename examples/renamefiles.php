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
$data="
<&#63;php<br />
//Rename files and remove spaces, commas, equal signs, semi-colons, apostrophes, etc.:
	foreach(glob(&#034;{*.amr,*.AMR,*.mp3,*.MP3}&#034;,GLOB_BRACE ) as &#36;file) {
		if (strpos(&#36;file, &#34; &#34;) > 0) { //If there are more than 0 spaces in the name.
			&#36;x = &#34;mv \&#34;&#34; . &#36;file . &#34;\&#34; &#34;;
			&#36;y = str_replace(&#34; &#34;, &#34;_&#34;, &#36;file); //Remove spaces.
			&#36;y = str_replace(&#34;,&#34;, &#34;&#34;, &#36;y); //Remove commas.
			&#36;y = str_replace(&#34;=&#34;, &#34;&#34;, &#36;y); //Remove equals.
			&#36;y = str_replace(&#34;;&#34;, &#34;&#34;, &#36;y); //Remove semi-colons.
			&#36;y = str_replace(&#34;&#39;&#34;, &#34;&#34;, &#36;y); //Remove apostrophes.
			&#36;y = str_replace(&#34;(&#34;, &#34;&#34;, &#36;y); //Remove left parenthesis.
			&#36;y = str_replace(&#34;)&#34;, &#34;&#34;, &#36;y); //Remove right prenthesis.
			&#36;y = str_replace(&#34;&#36;&#34;, &#34;&#34;, &#36;y); //Remove dollar signs.
			&#36;y = str_replace(&#34;[&#34;, &#34;&#34;, &#36;y); //Remove left brackets.
			&#36;y = str_replace(&#34;]&#34;, &#34;&#34;, &#36;y); //Remove right brackets.
			&#36;y = str_replace(&#34;&&#34;, &#34;&#34;, &#36;y); //Remove ampersands.
			&#36;y = str_replace(&#34;&#96;&#34;, &#34;&#34;, &#36;y); //Remove accent aigou.
			&#36;y = str_replace(&#34;._&#34;, &#34;_&#34;, &#36;y); //Remove period underscore.

			echo &#34;mv &#34; . &#36;x . &#34; &#34; . &#36;y . &#34;&lt;br /&gt;&#34;;
			// DO NOT USE &#92;r&#92;n BECAUSE IT WILL PUT A CARRIAGE RETURN IN THE FILENAME!
		}
		//The built-in Linux rename utility is useful for removing the carriage return on files.
		//Usage: <b>rename &#36;&#39;&#92;r&#39; &#39;&#39; *.txt*</b>
		//https://unix.stackexchange.com/questions/189784/remove-newlines-in-file-names
		//php -f renamefiles.php > ~/public_html/rename.html
		//Rename files that start with a dash or hyphen, use a double-dash:
		//&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mv -- -filename.txt filename.txt
	}

/*
NOTE: I got rid of the carriage return by zipping the files up and unzipping them.
*/
?>";
echo $data=nl2br($data);

//Rename files and remove spaces, commas, equal signs, semi-colons, apostrophes.:
	foreach(glob("{*.amr,*.AMR,*.mp3,*.MP3}",GLOB_BRACE ) as $file) {
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
			$y = str_replace("`", "", $y); //Remove accent aigou.
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
