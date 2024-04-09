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
<br />
  if (!empty($argv[1]) &amp;&amp; !empty($argv[2])){<br />
	$password = $argv[1];<br />
	$hashedpass = $argv[2]; //Use single quotes if you want to paste the hash here or at the CLI.<br />
    	if (password_verify($password, $hashedpass)){<br />
			echo &quot;Password verified, access granted!\r\n&quot;;<br />
    	}<br />
    	else{<br />
    		echo &quot;Password not verified, access denied!\r\n&quot;;<br />
    	}<br />
	}<br />
	else {<br />
		echo &quot;Username and/or password are blank. Please try again.\r\n&quot;;<br />
		echo &quot;Example: php -f bcrypt_verify.php Holland &#039;\$2y\$10\$xfxl5pY6CP0TGE6CoKmOlO/aYxFo00eptwG4MZKnvo2DXaNM6bBPi&#039; \r\n&quot;;<br />
	}<br />
?&gt;<br />
