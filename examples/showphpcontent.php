<?php
echo "
&lt;?php<br />
\$dollarsign = chr(36);<br />
//echo \$dollarsign . &quot;&lt;br /&gt;&quot;;<br />
echo str_replace(&quot;\\$&quot;,$dollarsign,nl2br(htmlentities(file_get_contents( &quot;PHPFileNameToDisplay.php&quot; )))); // get the contents, and echo it out.<br />
//echo base64_decode(file_get_contents( &quot;jquery.dataTables.min.js.b64&quot; )); // get the contents, and echo it out.<br />
//echo base64_encode(file_get_contents( &quot;jquery.dataTables.min.js&quot; )); // get the contents, and echo it out.<br />
?&gt;<br />
";
?>