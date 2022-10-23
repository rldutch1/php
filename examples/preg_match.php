//https://stackoverflow.com/questions/27682957/preg-match-in-php-with-space-underscore-dash-and-dot

	if (!preg_match("/^[a-zA-Z-0-9']*$/", $_POST["database_username"])) //Allow only letters, numbers including spaces.
        {
            $error .= '<li>Only letters, Numbers in username allowed</li>';
        }
        else
        {
            $formdata['database_username'] = trim($_POST["database_username"]);
        }

	if (!preg_match("/^[a-zA-Z0-9-_. ]+$/", $_POST["database_username"])) //Allow letters, numbers, underscore, dash, and periods. No spaces.
        {
            $error .= '<li>Only letters, numbers, underscore, dash, and periods in username allowed</li>';
        }
        else
        {
            $formdata['database_username'] = trim($_POST["database_username"]);
        }


	if (!preg_match("/^[\w\s\.-]*$/", $_POST["database_username"])) //Allow anything include empty string (useless except for testing).
        {
            $error .= '<li>You should never see this because anything is allowed.</li>';
        }
        else
        {
            $formdata['database_username'] = trim($_POST["database_username"]);
        }
