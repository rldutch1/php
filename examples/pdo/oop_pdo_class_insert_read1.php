<?php
echo "
<html>
<head><title></title></head>
<body>
<&#63;php<br />
//How to write prepare and execute statements in OOP PDO?<br />
//https://stackoverflow.com/questions/42551050/how-to-write-prepare-and-execute-statements-in-oop-pdo<br />
<br />
class Connection<br />
{<br />
//Sometimes the host can cause (Fatal error: Uncaught Error: Call to a member function prepare) if you are using a DNS name for the host. Try using a loopback 127.0.0.1 address if you are experiencing issues.<br />
    private \$host = \"TheServerName\";<br />
    private \$dbName = \"TheDatabaseName\";<br />
    private \$user = \"TheUserName\";<br />
    private \$pass = \"ThePassWord\";<br />
    private \$charset = 'utf8';<br />
<br />
    private \$dbh;<br />
    private \$error;<br />
    private \$stmt;<br />
<br />
    //connection<br />
    public function __construct()<br />
    {<br />
        \$dsn     = \"mysql:host=\" . \$this->host . \";dbname=\" . \$this->dbName . \";charset=\" . \$this->charset;<br />
        \$options = array(<br />
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,<br />
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,<br />
            //PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_BOTH,<br />
            //PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_NUM,<br />
            PDO::ATTR_EMULATE_PREPARES => false<br />
        );<br />
<br />
        try {<br />
            // setup connection<br />
            \$this->dbh = new PDO(\$dsn, \$this->user, \$this->pass, \$options);<br />
        }<br />
        //catch any errors<br />
        //There is a cool looking function called MakePrettyException on this webpage https://www.php.net/manual/en/exception.gettrace.php<br />
        catch (PDOException \$e) {<br />
            \$this->error = \$e->getMessage();<br />
            //\$this-&gt;error = var_dump(\$e-&gt;getTrace());<br />
        }<br />
<br />
    }<br />
<br />
    //prepare statement<br />
    public function myQuery(\$query)<br />
    {<br />
        \$this->stmt = \$this->dbh->prepare(\$query);<br />
    }<br />
<br />
    //bind values<br />
    public function bind(\$param, \$value, \$type = null)<br />
    {<br />
        if (is_null(\$type)) {<br />
            switch (true) {<br />
                case is_int(\$value):<br />
                    \$type = PDO::PARAM_INT;<br />
                    break;<br />
                case is_bool(\$value):<br />
                    \$type = PDO::PARAM_BOOL;<br />
                    break;<br />
                case is_null(\$value):<br />
                    \$type = PDO::PARAM_NULL;<br />
                    break;<br />
                default:<br />
                    \$type = PDO::PARAM_STR;<br />
            }<br />
        }<br />
        //actual value binding<br />
        \$this->stmt->bindValue(\$param, \$value, \$type);<br />
    }<br />
    //execute statement<br />
    public function run()<br />
    {<br />
        return \$this->stmt->execute();<br />
    }<br />
<br />
		//Return a single row of data.<br />
    public function SingleRow(){<br />
        \$this->run();<br />
        return \$this->stmt->fetch();<br />
    }<br />
<br />
		//Return multiple rows of data.<br />
		public function All(){<br />
          \$this->run();<br />
          return \$this->stmt->fetchall();<br />
    }<br />
<br />
		//Return last_InsertId.<br />
          public function lastInsertId(){<br />
          return \$this->dbh->lastInsertId();<br />
		}<br />
<br />
}
<br />
<br />
?>";

echo "</body></html>";
