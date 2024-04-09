<?php
echo "
&lt;?php<br />
echo nl2br(htmlentities(file_get_contents( &quot;PHPfiletodisplay.php&quot; ))); // get the contents, and echo it out.<br />
?&gt;<br />
";
?>
