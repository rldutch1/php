&lt;?php<br />
<br />
	function dateShow() { //Show the current date on the webpage.<br />
		$dateshow = date(&quot;l jS \of F Y h:i:s A&quot;) . &quot;&lt;br&gt;&quot;;<br />
		return $dateshow;<br />
	}<br />
echo &quot;GMT: &quot; . dateShow() . &quot;\r\n&quot;;<br />
<br />
$dt = new DateTime();<br />
$dt-&gt;setTimezone(new DateTimeZone(&#039;America/New_York&#039;));<br />
$dt-&gt;setTimestamp(-46777879);<br />
echo &quot;Date X is: &quot; . $dt-&gt;format(&#039;F j, Y @ G:i&#039;) . &quot;\r\n&quot;;<br />
<br />
//https://stackoverflow.com/questions/20288789/php-date-with-timezone<br />
$tz = &#039;America/New_York&#039;;<br />
$timestamp = time();<br />
$dt = new DateTime(&quot;now&quot;, new DateTimeZone($tz)); //first argument &quot;must&quot; be a string<br />
$dt-&gt;setTimestamp($timestamp); //adjust the object to correct timestamp<br />
echo $tz .&quot; date/time is: &quot; . $dt-&gt;format(&#039;Y-m-d H:i:s&#039;) . &quot;\r\n&quot;;<br />
<br />
//Pass the timezone and time format to the tzone function:<br />
//Example: tzone(&quot;America/Phoenix&quot;,&quot;Y-m-d h:i:s&quot;);<br />
function tzone($tz,$fmt) {<br />
//$tz = &#039;Europe/London&#039;;<br />
$timestamp = time();<br />
$dt = new DateTime(&quot;now&quot;, new DateTimeZone($tz)); //first argument &quot;must&quot; be a string<br />
$dt-&gt;setTimestamp($timestamp); //adjust the object to correct timestamp<br />
//echo $tz .&quot; date/time is: &quot; . $dt-&gt;format(&#039;Y-m-d H:i:s&#039;);<br />
$zz = $tz .&quot; date/time is: &quot; . $dt-&gt;format($fmt);<br />
return $zz;<br />
}<br />
echo &quot;TZone: &quot; . tzone(&quot;America/Phoenix&quot;,&quot;l jS \of F Y h:i:s A&quot;) . &quot;\r\n&quot;;<br />
echo &quot;TZone: &quot; . tzone(&quot;America/Phoenix&quot;,&quot;Y-M-d H:i:s A&quot;) . &quot;\r\n&quot;;<br />
echo &quot;TZone: &quot; . tzone(&quot;America/Phoenix&quot;,&quot;Y-m-d h:i:s&quot;) . &quot;\r\n&quot;;<br />
echo &quot;TZone: &quot; . tzone(&quot;America/Phoenix&quot;,&quot;YmdHism&quot;) . &quot;\r\n&quot;;<br />
<br />
//$t = microtime(true);<br />
$t = &quot;1968-07-08 10:07:00.000&quot;;<br />
$now = DateTime::createFromFormat(&#039;U.u&#039;, sprintf(&#039;%f&#039;, $t));<br />
echo &quot;ZZZZ: &quot; . $now = $now-&gt;format(&quot;H:i:s.v&quot;) . &quot;\r\n&quot;;<br />
<br />
$test = &#039;Fri, 15 Jan 2016 15:14:10 +0800&#039;;<br />
echo &quot;Test variable: &quot; . (new DateTime($test))-&gt;format(&quot;Y-m-d H:i:s&quot;) . &quot;\r\n&quot;;<br />
?&gt;<br />
