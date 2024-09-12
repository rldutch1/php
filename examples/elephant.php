<html>
<style>
#elephant {
font-size: 640px;
margin-top: 100px;
margin-bottom: 100px;
margin-right: 150px;
margin-left: 80px;
}
</style>
<body>

&lt;html&gt;<br />
&lt;style&gt;<br />
#elephant {<br />
font-size: 640px;<br />
margin-top: 100px;<br />
margin-bottom: 100px;<br />
margin-right: 150px;<br />
margin-left: 80px;<br />
}<br />
&lt;/style&gt;<br />
&lt;body&gt;<br />
&lt;?php<br />
$str = chr(240) . chr(159) . chr(144) . chr(152);<br />
echo &quot;&lt;span id=&#039;elephant&#039;&gt;&quot; . $str . &quot;&lt;/span&gt;&quot;;<br />
?&gt;<br />
&lt;/body&gt;<br />
&lt;/html&gt;

<?php
$str = chr(240) . chr(159) . chr(144) . chr(152);
echo "<br /></br /><span id='elephant'>" . $str . "</span>";
?>

</body>
</html> 