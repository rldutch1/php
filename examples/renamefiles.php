<?php echo " &lt;?php<br />
<br />
//Rename files and remove spaces, commas, equal signs, semi-colons, apostrophes, etc.:<br />
//foreach(glob(&quot;{*.amr,*.AMR,*.mp3,*.MP3}&quot;,GLOB_BRACE ) as &#36;file) {<br />
foreach(glob(&quot;{*.png}&quot;,GLOB_BRACE ) as &#36;file) {<br />
if (strpos(&#36;file, &quot; &quot;) &gt; 0) { //If there are more than 0 spaces in the name.<br />
&#36;x = &quot;mv \&quot;&quot; . &#36;file . &quot;\&quot; &quot;;<br />
&#36;y = str_replace(&quot; &quot;, &quot;_&quot;, &#36;file); //Remove spaces.<br />
&#36;y = str_replace(&quot;,&quot;, &quot;&quot;, &#36;y); //Remove commas.<br />
&#36;y = str_replace(&quot;=&quot;, &quot;&quot;, &#36;y); //Remove equals.<br />
&#36;y = str_replace(&quot;;&quot;, &quot;&quot;, &#36;y); //Remove semi-colons.<br />
&#36;y = str_replace(&quot;&#039;&quot;, &quot;&quot;, &#36;y); //Remove apostrophes.<br />
&#36;y = str_replace(&quot;(&quot;, &quot;&quot;, &#36;y); //Remove left parenthesis.<br />
&#36;y = str_replace(&quot;)&quot;, &quot;&quot;, &#36;y); //Remove right prenthesis.<br />
&#36;y = str_replace(&quot;&#36;&quot;, &quot;&quot;, &#36;y); //Remove dollar signs.<br />
&#36;y = str_replace(&quot;[&quot;, &quot;&quot;, &#36;y); //Remove left brackets.<br />
&#36;y = str_replace(&quot;]&quot;, &quot;&quot;, &#36;y); //Remove right brackets.<br />
&#36;y = str_replace(&quot;&amp;&quot;, &quot;&quot;, &#36;y); //Remove ampersands.<br />
&#36;y = str_replace(&quot;`&quot;, &quot;&quot;, &#36;y); //Remove accent aigou.<br />
&#36;y = str_replace(&quot;._&quot;, &quot;_&quot;, &#36;y); //Remove period underscore.<br />
<br />
//echo &quot;mv &quot; . &#36;x . &quot; &quot; . &#36;y . &quot;&lt;br /&gt;&quot;;<br />
echo &#36;x . &quot; &quot; . &#36;y . &quot;&lt;br /&gt;&quot;;<br />
// DO NOT USE \r\n BECAUSE IT WILL PUT A CARRIAGE RETURN IN THE FILENAME!<br />
}<br />
//The built-in Linux rename utility is useful for removing the carriage return on files.<br />
//Usage: rename &#36;&#039;\r&#039; &#039;&#039; *.txt*<br />
//https://unix.stackexchange.com/questions/189784/remove-newlines-in-file-names<br />
//php -f renamefiles.php &gt; ~/public_html/rename.html<br />
//Rename files that start with a dash or hyphen, use a double-dash:<br />
//     mv -- -filename.txt filename.txt<br />
}<br />
<br />
/*<br />
NOTE: I got rid of the carriage return by zipping the files up and unzipping them.<br />
*/<br />
?&gt;"; ?>