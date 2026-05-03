<?php echo " &lt;?php<br />
// ----------------------------------------------------------------------------<br />
// Script Author: Robert Holland<br />
// Script Name: oop_pdo_database_class1.php<br />
// Creation Date: Sat Apr 25 2026 20:33:02 GMT-0700 (MST)<br />
// Last Modified:<br />
// Copyright (c)2026<br />
// Version: 1.0.0<br />
// Purpose: Database connection class that can dynamically produce data in FETCH_ASSOC, FETCH_NUM, and FETCH_BOTH format by<br />
// passing the requested format to the fetch and fetchAll methods.<br />
// ----------------------------------------------------------------------------<br />
<br />
class Database<br />
{<br />
    private &#36;pdo;<br />
    private &#36;stmt;<br />
<br />
    public function __construct(<br />
    //Pass authentication when connection is instantiated instead of here. This enables connecting to multiple databases.<br />
    //Example: Duplicating application data entries in two separate databases;<br />
        string &#36;host = &#039;&#039;,<br />
        string &#36;dbName = &#039;&#039;,<br />
        string &#36;user = &#039;&#039;,<br />
        string &#36;pass = &#039;&#039;,<br />
    string &#36;charset = &#039;utf8mb4&#039;<br />
    ) {<br />
        &#36;dsn = &quot;mysql:host=&#36;host;dbname=&#36;dbName;charset=&#36;charset&quot;;<br />
<br />
        &#36;options = [<br />
            PDO::ATTR_ERRMODE            =&gt; PDO::ERRMODE_EXCEPTION,<br />
            PDO::ATTR_DEFAULT_FETCH_MODE =&gt; PDO::FETCH_ASSOC, // Default fallback<br />
            PDO::ATTR_EMULATE_PREPARES   =&gt; false,<br />
        ];<br />
<br />
      //Catch errors during the connection process.<br />
        try {<br />
            &#36;this-&gt;pdo = new PDO(&#36;dsn, &#36;user, &#36;pass, &#36;options);<br />
        } catch (PDOException &#36;e) {<br />
            throw new Exception(&quot;Connection failed: &quot; . &#36;e-&gt;getMessage());<br />
        }<br />
    }<br />
<br />
    public function query(string &#36;sql, array &#36;params = []): self<br />
    {<br />
    	try { //Catch errors in the database query process.<br />
    		//SQLSTATE ERRORS: https://www.ibm.com/docs/en/db2-for-zos/13.0.0?topic=codes-sqlstate-values-common-error<br />
        &#36;this-&gt;stmt = &#36;this-&gt;pdo-&gt;prepare(&#36;sql);<br />
<br />
        foreach (&#36;params as &#36;param =&gt; &#36;value) {<br />
        //In PDO, positional placeholders are 1-indexed (starting at 1), but PHP arrays are 0-indexed (starting at 0). When your foreach loop runs, it tries to bind the first value to index 0, and PDO throws a fit because it&#039;s looking for position 1.<br />
        // Fix for &quot;WHERE IN&quot; Clause: If the key is a number (positional), add 1 to match PDO&#039;s 1-indexing<br />
            //Check if &#36;key is integer first.<br />
            &#36;key = is_int(&#36;param) ? &#36;param + 1 : &#36;param;<br />
            &#36;type = match (true) {<br />
                is_int(&#36;value)  =&gt; PDO::PARAM_INT,<br />
                is_bool(&#36;value) =&gt; PDO::PARAM_BOOL,<br />
                is_null(&#36;value) =&gt; PDO::PARAM_NULL,<br />
                default         =&gt; PDO::PARAM_STR,<br />
            };<br />
            &#36;this-&gt;stmt-&gt;bindValue(&#36;key, &#36;value, &#36;type);<br />
        }<br />
<br />
        &#36;this-&gt;stmt-&gt;execute();<br />
      } catch (PDOException &#36;e) {<br />
        // Check for the Duplicate Entry error code (1062)<br />
//        if (&#36;e-&gt;errorInfo[1] == 1062) { //This works<br />
        if (&#36;e-&gt;errorInfo[0] == 23000) { //This works<br />
            // Instead of just echoing, you might want to exit or return a status<br />
            die(&quot;Constraint Violation: The data already exists in the database.&lt;br /&gt;&lt;button onclick=&#039;window.location.reload();&#039;&gt;Refresh Page&lt;/button&gt;&quot;);<br />
        } else {<br />
            // Rethrow or handle other database errors (like table not found)<br />
die(&quot;Database Error: &quot; . &#36;e-&gt;getMessage()) . &quot; &quot;;<br />
        }<br />
    }<br />
    return &#36;this;<br />
    }<br />
<br />
    /**<br />
     * Updated fetchAll to accept a custom fetch mode<br />
     */<br />
    public function fetchAll(int &#36;fetchMode = null): array<br />
    {<br />
        // Use the passed mode, or fall back to the constructor default<br />
        return &#36;this-&gt;stmt-&gt;fetchAll(&#36;fetchMode ?? PDO::FETCH_ASSOC);<br />
    }<br />
<br />
    /**<br />
     * Updated fetch to accept a custom fetch mode<br />
     */<br />
    public function fetch(int &#36;fetchMode = null)<br />
    {<br />
        return &#36;this-&gt;stmt-&gt;fetch(&#36;fetchMode ?? PDO::FETCH_ASSOC);<br />
    }<br />
<br />
    public function rowCount(): int<br />
    {<br />
        return &#36;this-&gt;stmt-&gt;rowCount();<br />
    }<br />
<br />
    public function lastInsertId(): string<br />
    {<br />
        return &#36;this-&gt;pdo-&gt;lastInsertId();<br />
    }<br />
}<br />
<br />
/*<br />
----------------<br />
How to use:<br />
Key Improvements Explained<br />
Dependency Injection: By passing credentials into the __construct, you can keep your passwords in a .env or config file instead of hardcoding them inside the logic.<br />
<br />
The match Expression: Replaced the switch(true) with PHP 8&#039;s match for cleaner, more readable type-matching.<br />
<br />
Method Chaining: By returning &#36;this in the query() method, you can execute a query and fetch results in a single line.<br />
<br />
Automatic Binding: Instead of calling bind() for every single variable, we pass an array to the query() method. This reduces boilerplate code significantly.<br />
<br />
utf8mb4: Updated the charset from utf8 to utf8mb4 to support emojis and better character sets.<br />
<br />
Basic Setup<br />
<br />
    &#36;db = new Database(&#039;localhost&#039;, &#039;my_app&#039;, &#039;db_user&#039;, &#039;secure_password&#039;);<br />
<br />
    If your application connects to multiple databases, you can use a password array to avoid typing your database credentials in many files.<br />
    I put my database credentials in the oop_pdo_database_class1.php file which is included in other PHP files that need a database connection.<br />
<br />
		You can also put your credentials in an array and pass it to the class constructor.<br />
    Example credential array:<br />
    &#36;pw0 = [&#039;192.168.1.5&#039;, &#039;prod_db&#039;, &#039;admin&#039;, &#039;SuperSecret123!&#039;];<br />
    &#36;pw0 = [&#039;localhost&#039;, &#039;prod_db&#039;, &#039;admin&#039;, &#039;SuperSecret123!&#039;];<br />
<br />
    How to use the password array when passing credentials to the constructor.<br />
    The &quot;Splat&quot; Operator is best for this specific request.<br />
    If you store your credentials in an array, you can use the ... (splat) operator.<br />
    This &quot;unpacks&quot; the array into the individual variables the constructor expects.<br />
<br />
    Instantiate a new database connection using the password array:<br />
    &#36;db = new Database(...&#36;pw0);<br />
<br />
    If you need to display the content of &#36;pw0:<br />
    Use implode(&quot;,&quot;,&#36;pw0) to display the contents of &#36;pw0.<br />
<br />
----------------<br />
<br />
Reference Table of PDO Constants<br />
Mode PDO Constant Description<br />
Assoc PDO::FETCH_ASSOC [&#039;column&#039; =&gt; &#039;value&#039;]<br />
Num PDO::FETCH_NUM [0 =&gt; &#039;value&#039;]<br />
Both PDO::FETCH_BOTH Both name and number keys<br />
Obj PDO::FETCH_OBJ Returns an anonymous object (&#36;row-&gt;column)<br />
<br />
Important Notes on lastInsertId():<br />
a. Timing is Everything: You must call lastInsertId() immediately after the query() call that performs the insert. If you run another query (even a SELECT) before calling it, you might get unpredictable results depending on your database driver.<br />
<br />
b. Auto-Increment Required: This only works if your table has an AUTO_INCREMENT primary key column.<br />
<br />
c. Return Type: The method returns a string. Even though IDs are usually numbers in the database, PDO returns them as strings to avoid issues with large integers that might exceed PHP&#039;s integer limit.<br />
<br />
d. PostgreSQL Users: If you ever switch from MySQL to PostgreSQL, you usually have to pass the name of the sequence as a string to the method: &#36;db-&gt;lastInsertId(&#039;users_id_seq&#039;). For MySQL, you leave it empty.<br />
<br />
// 6d. When to use rowCount() instead?<br />
If you are doing an UPDATE or DELETE, lastInsertId() won&#039;t help you. Instead, use the rowCount() method you already have in your class:<br />
<br />
*/"; ?>