&lt;?php<br />
$string = &quot;Hello World&quot;;<br />
echo &quot;\$string = \&quot;Hello World\&quot;;\r\n&quot;;<br />
echo &quot;01. count_chars($string,3) = &quot; . count_chars($string,3) . &quot;\r\n&quot;; //This Function will count how many different characters are in string<br />
echo &quot;02. crc32($string) = &quot; . crc32($string) . &quot;\r\n&quot;; //CRC32 Hash Calculation<br />
echo &quot;03. crypt($string, \&quot;Hello World Order\&quot;) = &quot; . crypt($string, &quot;Hello World Order&quot;) . &quot;\r\n&quot;; //One Way Hash Calculation<br />
echo &quot;04. ($string) = &quot; . ($string) . &quot;\r\n&quot;; //prints PHP String on page<br />
echo &quot;05. lcfirst($string) = &quot; . lcfirst($string) . &quot;\r\n&quot;; //will return this string but with first character lowercase<br />
echo &quot;06. md5($string) = &quot; . md5($string) . &quot;\r\n&quot;; //will calculate hash for this string<br />
echo &quot;07. metaphone($string) = &quot; . metaphone($string) . &quot;\r\n&quot;; //Calculate the metaphone key of a string<br />
echo &quot;08. ord($string) = &quot; . ord($string) . &quot;\r\n&quot;; //Returns the ASCII value of the first character of a string<br />
echo &quot;09. sha1($string) = &quot; . sha1($string) . &quot;\r\n&quot;; //will calculate hash for this string<br />
echo &quot;10. soundex($string) = &quot; . soundex($string) . &quot;\r\n&quot;; //Calculate the soundex key of a string<br />
echo &quot;11. strlen($string) = &quot; . strlen($string) . &quot;\r\n&quot;; //will tell you length of PHP string<br />
echo &quot;12. strrev($string) = &quot; . strrev($string) . &quot;\r\n&quot;; //will print this string reverse<br />
echo &quot;13. strtolower($string) = &quot; . strtolower($string) . &quot;\r\n&quot;; //will convert string to lowercase letters<br />
echo &quot;14. strtoupper($string) = &quot; . strtoupper($string) . &quot;\r\n&quot;; //will convert string to UPERCASE letters<br />
echo &quot;15. str_repeat($string.\&quot; \&quot;, 2) = &quot; . str_repeat($string.&quot; &quot;, 2) . &quot;\r\n&quot;; //Will Repeat a string (2 times in this case) . &quot;\r\n&quot;;<br />
echo &quot;16. str_rot13($string) = &quot; . str_rot13($string) . &quot;\r\n&quot;; //Perform the rot13 transform on a string<br />
echo &quot;17. str_shuffle($string) = &quot; . str_shuffle($string) . &quot;\r\n&quot;; //Will randomly mix/shufle characters from string<br />
echo &quot;18. ucfirst($string) = &quot; . ucfirst($string) . &quot;\r\n&quot;; //will return this string but with first character UPPERCASE<br />
?&gt;<br />
