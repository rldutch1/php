<?php echo " &lt;?php<br />
include_once(&#039;connect.php&#039;);<br />
<br />
&#36;filenames = new Connection(); //Instantiate a new connection.<br />
<br />
//Filename cleanup: Rename files and remove spaces, commas, equal signs, semi-colons, apostrophes, etc.:<br />
//foreach(glob(&quot;{*.amr,*.AMR,*.mp3,*.MP3}&quot;,GLOB_BRACE ) as &#36;file) {<br />
foreach(glob(&quot;{*.mp3}&quot;,GLOB_BRACE ) as &#36;file) {<br />
if (strpos(&#36;file, &quot; &quot;) &gt; 0) { //If there are more than 0 spaces in the name.<br />
  /*<br />
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
  */<br />
//echo &quot;mv &quot; . &#36;x . &quot; &quot; . &#36;y . &quot;&lt;br /&gt;&quot;;<br />
//echo &#36;x . &quot; &quot; . &#36;y . &quot;&lt;br /&gt;&quot;;<br />
<br />
// WHEN REDIRECTING TO A FILE, DO NOT USE &quot;&#92;&#114;&#92;&#110;&quot; BECAUSE IT WILL PUT A CARRIAGE RETURN IN THE FILENAME!<br />
}<br />
&#36;a = str_replace(&quot;CALLU_&quot;,&quot;&quot;,&#36;file);<br />
&#36;a = str_replace(&quot;_Private.mp3&quot;,&quot;&quot;,&#36;a);<br />
&#36;a = str_replace(&quot;_&quot;,&quot; &quot;,&#36;a);<br />
&#36;b = explode(&#039; &#039;,&#36;a);<br />
&#36;c = date_create(&#36;b[0] . &quot; &quot; . str_replace(&quot;-&quot;,&quot;:&quot;,&#36;b[1]));<br />
&#36;d = date_format(&#36;c, &quot;Y-m-d H:i:s&quot;);<br />
&#36;e = date_format(&#36;c, &quot;YmdHis&quot;); //Military time.<br />
<br />
/*<br />
//Echo query to see what it looks like.<br />
	echo &quot;insert into call_u (orig_filename, call_dt_tm, new_filename) values (&#039;&quot; .<br />
	&#36;file . &quot;&#039;,&#039;&quot; .<br />
	&#36;d . &quot;&#039;,&#039;&quot; .<br />
	&#36;e . &quot;_CALLU_Private.mp3&#039;,&quot; .<br />
	&quot;&#039;mv &quot; . &#36;file . &quot; &quot; . &#36;e . &quot;_CALLU_Private.mp3&#039;);\r\n&quot;;<br />
*/<br />
<br />
//Add named parameters to query begin:<br />
	&#36;FileQ = &quot;insert into call_u (orig_filename, call_dt_tm, new_filename) values (&quot; .<br />
	&quot;:orig_filename,&quot; .<br />
	&quot;:call_dt_tm,&quot; .<br />
	&quot;:new_filename);&quot;;<br />
//Add named parameters to query end:<br />
<br />
//Testing begin.<br />
//echo &#36;FileQ . &quot;\r\n&quot;;<br />
//echo &#36;file . &quot; &quot; . &#36;d . &quot; &quot; . &#36;e . &quot;_CALLU_Private.mp3&quot;;<br />
//Testing end.<br />
<br />
////Insert user data.<br />
&#36;filenames-&gt;myQuery(&#36;FileQ);<br />
&#36;filenames-&gt;bind(&#039;:orig_filename&#039;, &#36;file); //bind each value<br />
&#36;filenames-&gt;bind(&#039;:call_dt_tm&#039;, &#36;d); // bind<br />
&#36;filenames-&gt;bind(&#039;:new_filename&#039;, &#36;e . &#039;_CALLU_Private.mp3&#039;);<br />
//Execute the query.<br />
if(&#36;filenames-&gt;run()){<br />
<br />
//&#36;lastid = &#36;filenames-&gt;lastInsertId(); //Get the last inserted ID<br />
//echo &quot;ID of record inserted: &quot; . &#36;lastid . &quot;.\r\n&quot;;<br />
}<br />
}<br />
?&gt;"; ?>