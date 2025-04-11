<?php echo " &lt;?php<br />
/* Works:<br />
Source: https://www.w3schools.com/php/php_file_open.asp<br />
The feof() function checks if the &quot;end-of-file&quot; (EOF) has been reached.<br />
The feof() function is useful for looping through data of unknown length.<br />
The example below reads the &quot;x.txt&quot; file line by line, until end-of-file is reached:<br />
<br />
Modes   Description:<br />
r       Open a file for read only. File pointer starts at the beginning of the file<br />
w       Open a file for write only. Erases the contents of the file or creates a new file if it doesn&#039;t exist. File pointer starts at the beginning of the file<br />
a       Open a file for write only. The existing data in file is preserved. File pointer starts at the end of the file. Creates a new file if the file doesn&#039;t exist<br />
x       Creates a new file for write only. Returns FALSE and an error if file already exists<br />
r+      Open a file for read/write. File pointer starts at the beginning of the file<br />
w+      Open a file for read/write. Erases the contents of the file or creates a new file if it doesn&#039;t exist. File pointer starts at the beginning of the file<br />
a+      Open a file for read/write. The existing data in file is preserved. File pointer starts at the end of the file. Creates a new file if the file doesn&#039;t exist<br />
x+      Creates a new file for read/write. Returns FALSE and an error if file already exists<br />
*/<br />
<br />
&#36;fname = &quot;.Mortgage_Statement.pdf&quot;;<br />
&#36;myfile = fopen(&quot;read_text_file_fopen_feof_fgets1.txt&quot;, &quot;r&quot;) or die(&quot;Unable to open file!&quot;);<br />
// Output one line until end-of-file<br />
while(!feof(&#36;myfile)) {<br />
  &#36;date = fgets(&#36;myfile);<br />
//  print_r (explode(&quot;,&quot;,&#36;date));<br />
  &#36;y = (explode(&quot;\r\n&quot;,&#36;date)); //Separate the data by carriage return.<br />
  &#36;y = (explode(&#039;&quot;,&quot;&#039;,&#36;date)); //The delimeter is double-quote comma double-quote.<br />
  echo &#36;y[0] . &quot;,&quot; . &#36;y[1] . &quot;,&quot; . &#36;y[2] . &quot;\r\n&quot;;<br />
//print_r(&#36;y);<br />
//var_dump(&#36;y);<br />
//foreach (&#36;y[0] as &#36;key[0] =&gt; &#36;value) {<br />
// echo &quot;&#36;key[0]: &#36;value &quot;;<br />
//}<br />
<br />
//  &#36;z = &#36;y[0].[0]; // . &quot; &quot; . &#36;y[1];<br />
//  echo date(&#039;Ymd&#039;, strtotime(&#36;z)). &#36;fname . &quot;\r\n&quot;;<br />
}<br />
fclose(&#36;myfile);<br />
?&gt;<br />
"; ?>