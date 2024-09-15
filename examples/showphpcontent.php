<?php
echo "
&lt;?php<br />
echo &quot;&lt;?php\r\necho \&quot;\r\n&quot;;<br />
&#36;filename=nl2br(htmlentities(file_get_contents( &quot;PHPFileNameToDisplay.php&quot; )));<br />
&#36;pattern = &#039;/\&#36;/i&#039;; //Find the dollar sign.<br />
echo preg_replace(&#36;pattern, &#039;&amp;#36;&#039;, &#36;filename); //Replace the dollar sign with the html equivalent.<br />
echo &quot;\&quot;;\r\n?&gt;&quot;;<br />
<br />
//Miscellaneous:<br />
//echo base64_decode(file_get_contents( &quot;jquery.dataTables.min.js.b64&quot; )); // get the contents, and echo it out.<br />
//echo base64_encode(file_get_contents( &quot;jquery.dataTables.min.js&quot; )); // get the contents, and echo it out.<br />
?&gt;";
?>
