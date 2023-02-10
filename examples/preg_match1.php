//https://stackoverflow.com/questions/27682957/preg-match-in-php-with-space-underscore-dash-and-dot<br />
<br />
	if (!preg_match(&quot;/^[a-zA-Z-0-9&#039;]*$/&quot;, $_POST[&quot;database_username&quot;])) //Allow only letters, numbers including spaces.<br />
        {<br />
            $error .= &#039;&lt;li&gt;Only letters, Numbers in username allowed&lt;/li&gt;&#039;;<br />
        }<br />
        else<br />
        {<br />
            $formdata[&#039;database_username&#039;] = trim($_POST[&quot;database_username&quot;]);<br />
        }<br />
<br />
	if (!preg_match(&quot;/^[a-zA-Z0-9-_. ]+$/&quot;, $_POST[&quot;database_password&quot;])) //Allow letters, numbers, underscore, dash, and periods. No spaces.<br />
        {<br />
            $error .= &#039;&lt;li&gt;Only letters, numbers, underscore, dash, and periods in password allowed&lt;/li&gt;&#039;;<br />
        }<br />
        else<br />
        {<br />
            $formdata[&#039;database_password&#039;] = trim($_POST[&quot;database_password&quot;]);<br />
        }<br />
<br />
<br />
	if (!preg_match(&quot;/^[\w\s\.-]*$/&quot;, $_POST[&quot;database_password&quot;])) //Allow anything include empty string (useless except for testing).<br />
        {<br />
            $error .= &#039;&lt;li&gt;You should never see this because anything is allowed for the password.&lt;/li&gt;&#039;;<br />
        }<br />
        else<br />
        {<br />
            $formdata[&#039;database_password&#039;] = trim($_POST[&quot;database_password&quot;]);<br />
        }<br />
