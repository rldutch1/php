<?php
 echo "&lt;?php<br />
// ----------------------------------------------------------------------------<br />
// Script Author: Robert Holland <br />
// Script Name: index.php<br />
// Creation Date: Wed Oct 11 2023 06:44:46 GMT-0700 (MST)<br />
// Last Modified: <br />
// Copyright (c)2024<br />
// Version: 1.0.0 <br />
// Purpose: Display Brother sewing machine videos.<br />
// ----------------------------------------------------------------------------<br />
//Multiple file extensions:<br />
//foreach (glob(&quot;{*.pdf,*.jpg,*.txt,*.mp4,*.zip}&quot;,GLOB_BRACE ) as &#36;file) {<br />
//echo &quot;&lt;a href=&#039;&quot; . &#36;file . &quot;&#039; target=&#039;_blank&#039;&gt;&quot; . &#36;file . &quot;&lt;/a&gt;&lt;br /&gt;&quot;;<br />
//}<br />
//Multiple file extensions:<br />
echo &quot;<br />
&lt;html&gt;&lt;head&gt;&lt;style&gt;&lt;/style&gt;&lt;/head&gt;&lt;body&gt;<br />
&lt;br /&gt;&lt;img src=&#039;./img/CS7000X.webp&#039; /&gt;&lt;br /&gt;&lt;br /&gt;<br />
&quot;;<br />
foreach (glob(&quot;{./videos/*.mp4,./videos/*.webm}&quot;,GLOB_BRACE ) as &#36;file) {<br />
	//echo &quot;&lt;a href=&#039;&quot; . &#36;file . &quot;&#039; target=&#039;_blank&#039;&gt;&quot; . &#36;file . &quot;&lt;/a&gt;&lt;br /&gt;&quot;;<br />
	<span style='color: #3366ff;'>&#36;ext = pathinfo(&#36;file, PATHINFO_EXTENSION);</span><br />
		&#36;vidname=&quot;&lt;br /&gt;&quot; . str_replace(&quot;./videos/&quot;, &quot;&quot;, &#36;file) . &quot;&lt;br /&gt;&quot;;<br />
		&#36;vidname=str_replace(&quot;.mkv&quot;,&quot;&quot;,&#36;vidname);<br />
		&#36;vidname=str_replace(&quot;.webm&quot;,&quot;&quot;,&#36;vidname);<br />
		&#36;vidname=str_replace(&quot;_&quot;,&quot; &quot;,&#36;vidname);<br />
	echo &quot;<br />
    &lt;video width=&#039;520&#039; height=&#039;340&#039; controls&gt;<br />
     &lt;source src=&#039;&quot; . &#36;file . &quot;&#039; type=video/&quot; . <span style='color: #3366ff;'>&#36;ext</span> . &quot;&gt;<br />
    &lt;/video&gt;<br />
    &quot; . &#36;vidname . &quot;&quot;;<br />
}<br />
echo &quot;&lt;br /&gt;&lt;/body&gt;&lt;/html&gt;&quot;;<br />
?&gt;<br />
";
?>