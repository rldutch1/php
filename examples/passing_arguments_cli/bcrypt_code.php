&lt;?php<br />
/**<br />
 * We just want to hash our password using the current DEFAULT algorithm.<br />
 * This is presently BCRYPT, and will produce a 60 character result.<br />
 *<br />
 * Beware that DEFAULT may change over time, so you would want to prepare<br />
 * By allowing your storage to expand past 60 characters (255 would be good)<br />
 */<br />
<br />
//Source: http://php.net/manual/en/function.password-hash.php<br />
<br />
$filename = $argv[0];<br />
<br />
    if (!empty($argv[1]) &amp;&amp; !empty($argv[2])){<br />
		$username = $argv[1];<br />
		$password = $argv[2];<br />
    $hashedpass = password_hash($password, PASSWORD_BCRYPT); //The password_hash function returns a string that contains both the hash and the salt.<br />
    echo &quot;The username is: \&quot;&quot; . $username . &quot;\&quot; and password is: \&quot;&quot; . $hashedpass . &quot;\&quot;\r\n&quot;;<br />
    echo &quot;\r\n&quot;;<br />
    echo &quot;update webusers set password = &#039;&quot; . $hashedpass . &quot;&#039; where username = &#039;&quot; . $username . &quot;&#039;;\r\n&quot;;<br />
    echo &quot;\r\n&quot;;<br />
<br />
<br />
    	if (password_verify($password, $hashedpass)){<br />
    	echo &quot;Password verified, access granted!\r\n&quot;;<br />
    	}<br />
    	else{<br />
    		echo &quot;Password not verified, access denied!\r\n&quot;;<br />
    	}<br />
		}<br />
		else {<br />
			echo &quot;Username and/or password are blank. Please try again.\r\n&quot;;<br />
			echo &quot;Example: php -f bcrypt.php Username Password \r\n&quot;;<br />
		}<br />
?&gt;