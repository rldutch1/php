https://www.w3schools.com/php/php_filter.asp
Runtime Configurations
The behavior of these functions is affected by settings in php.ini:
  Name: filter.default
  Description: Filter all $_GET, $_POST, $_COOKIE, $_REQUEST and $_SERVER data by this filter. Accepts the name of the filter you like to use by default. See the filter list for the list of the filter names
  Default: "unsafe_raw"
  Changeable: PHP_INI_PERDIR

  Name: filter.default_flags
  Description: Default flags to apply when the default filter is set. This is set to FILTER_FLAG_NO_ENCODE_QUOTES by default for backwards compatibility reasons
  Default: NULL
  Changeable: PHP_INI_PERDIR

PHP 5 Filter Functions:
  filter_has_var() -	Checks if a variable of a specified input type exist
  filter_id() -	Returns the filter ID of a specified filter name
  filter_input() -	Gets an external variable (e.g. from form input) and optionally filters it
  filter_input_array() -	Gets external variables (e.g. from form input) and optionally filters them
  filter_list() -	Returns a list of all supported filters
  filter_var_array() -	Gets multiple variables and filter them
  filter_var() -	Filters a variable with a specified filter

PHP 5 Predefined Filter Constants:
  Constant:	FILTER_VALIDATE_BOOLEAN
  	ID:	258
  	Description: Validates a boolean
  Constant:	FILTER_VALIDATE_EMAIL
  	ID:	274
  	Description: Validates an e-mail address
  Constant:	FILTER_VALIDATE_FLOAT
  	ID:	259
  	Description: Validates a float
  Constant:	FILTER_VALIDATE_INT
  	ID:	257
  	Description: Validates an integer
  Constant:	FILTER_VALIDATE_IP
  	ID:	275
  	Description: Validates an IP address
  Constant:	FILTER_VALIDATE_REGEXP
  	ID:	272
  	Description: Validates a regular expression
  Constant:	FILTER_VALIDATE_URL
  	ID:	273
  	Description: Validates a URL
  Constant:	FILTER_SANITIZE_EMAIL
  	ID:	517
  	Description: Removes all illegal characters from an e-mail address
  Constant:	FILTER_SANITIZE_ENCODED
  	ID:	514
  	Description: Removes/Encodes special characters
  Constant:	FILTER_SANITIZE_MAGIC_QUOTES
  	ID:	521
  	Description: Apply addslashes()
  Constant:	FILTER_SANITIZE_NUMBER_FLOAT
  	ID:	520
  	Description: Remove all characters, except digits, +- and optionally .,eE
  Constant:	FILTER_SANITIZE_NUMBER_INT
  	ID:	519
  	Description: Removes all characters except digits and + -
  Constant:	FILTER_SANITIZE_SPECIAL_CHARS
  	ID:	515
  	Description: Removes special characters
  Constant:	FILTER_SANITIZE_FULL_SPECIAL_CHARS
  Constant:	FILTER_SANITIZE_STRING
  	ID:	513
  	Description: Removes tags/special characters from a string
  Constant:	FILTER_SANITIZE_STRIPPED
  	ID:	513
  	Description: Alias of FILTER_SANITIZE_STRING
  Constant:	FILTER_SANITIZE_URL
  	ID:	518
  	Description: Removes all illegal character from s URL
  Constant:	FILTER_UNSAFE_RAW
  	ID:	516
  	Description: Do nothing, optionally strip/encode special characters
  Constant:	FILTER_CALLBACK
  	ID:	1024
  	Description: Call a user-defined function to filter data

//List the filters:
  <?php
  foreach (filter_list() as $id =>$filter) {
      echo '<tr><td>' . $filter . '</td><td>' . filter_id($filter) . '</td></tr>';
  }
  ?>

<?php
//Sanitize a String
//The following example uses the filter_var() function to remove all HTML tags from a string:
$str = "<h1>Hello World!</h1>";
$newstr = filter_var($str, FILTER_SANITIZE_STRING);
echo $newstr;
?>

<?php
//Tip: filter_var() and Problem With 0
//In the example above, if $int was set to 0, the function above will return "Integer is not valid". To solve this problem, use the code below:
$int = 0;

if (filter_var($int, FILTER_VALIDATE_INT) === 0 || !filter_var($int, FILTER_VALIDATE_INT) === false) {
    echo("Integer is valid");
} else {
    echo("Integer is not valid");
}
?>

<?php
//Validate an IP Address
//The following example uses the filter_var() function to check if the variable $ip is a valid IP address:
$ip = "127.0.0.1";

if (!filter_var($ip, FILTER_VALIDATE_IP) === false) {
    echo("$ip is a valid IP address");
} else {
    echo("$ip is not a valid IP address");
}
?>

<?php
//Sanitize and Validate an Email Address
//The following example uses the filter_var() function to first remove all illegal characters from the $email variable, then check if it is a valid email address:
$email = "john.doe@example.com";

// Remove all illegal characters from email
$email = filter_var($email, FILTER_SANITIZE_EMAIL);

// Validate e-mail
if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
    echo("$email is a valid email address");
} else {
    echo("$email is not a valid email address");
}
?>

<?php
//Sanitize and Validate a URL
//The following example uses the filter_var() function to first remove all illegal characters from a URL, then check if $url is a valid URL:
$url = "https://www.w3schools.com";

// Remove all illegal characters from a url
$url = filter_var($url, FILTER_SANITIZE_URL);

// Validate url
if (!filter_var($url, FILTER_VALIDATE_URL) === false) {
    echo("$url is a valid URL");
} else {
    echo("$url is not a valid URL");
}
?>