<?php echo " &lt;?php<br />
// ----------------------------------------------------------------------------<br />
// Script Author: Robert Holland<br />
// Script Name: oop_pdo_database_class2a.php<br />
// Creation Date: Thu Sep 24 2026 20:12:47 GMT-0700 (MST)<br />
// Last Modified:<br />
// Copyright (c)2026<br />
// Version: 1.0.0<br />
// Purpose: Show CRUD examples with Try/Catch using oop_pdo_database_class1.php.<br />
// ----------------------------------------------------------------------------<br />
// Paste the table below into a separate HTML file to view PHP output examples.<br />
// ----------------------------------------------------------------------------<br />
//<br />
//<table border='1'><caption>Mode - Access - Output</caption>
//<tr><td>Fetch Mode</td><td>Access Syntax</td><td>Output Structure Example - print_r()</td></tr>
//<tr><td>PDO::FETCH_ASSOC (Default)</td><td>&#36;row[&#039;firstname&#039;]</td><td>[&#039;firstname&#039; =&gt; &#039;Jane&#039;]</td></tr>
//<tr><td>PDO::FETCH_NUM</td><td>&#36;row[0]</td><td>[0 =&gt; &#039;Jane&#039;]</td></tr>
//<tr><td>PDO::FETCH_BOTH</td><td>&#36;row[&#039;firstname&#039;] or &#36;row[0]</td><td>[&#039;firstname&#039; =&gt; &#039;Jane&#039;, 0 =&gt; &#039;Jane&#039;]</td></tr>
//</table>
//<br />

require_once(&quot;oop_pdo_database_class1.php&quot;);<br />
<br />
try {<br />
    &#36;db = new Database(...&#36;pw0);<br />
} catch (Exception &#36;e) {<br />
    die(&quot;Database Connection Error: &quot; . &#36;e-&gt;getMessage());<br />
}<br />
<br />
echo &quot;-------------------------------------------------------------------------------------------------------------&quot;;<br />
<br />
//Example Insert:<br />
try {<br />
    &#36;sql = &quot;INSERT INTO customers_test (firstname, middlename, lastname, address1, address2, city, state, zip, country, phone, email)<br />
            VALUES (:firstname, :middlename, :lastname, :address1, :address2, :city, :state, :zip, :country, :phone, :email)&quot;;<br />
&#36;namex = &quot;Robert&quot;;<br />
    &#36;params = [<br />
        &#039;firstname&#039;  =&gt; &#36;namex,<br />
        &#039;middlename&#039; =&gt; &#039;A.&#039;,<br />
        &#039;lastname&#039;   =&gt; &#039;Doe&#039;,<br />
        &#039;address1&#039;   =&gt; &#039;123 Main St&#039;,<br />
        &#039;address2&#039;   =&gt; &#039;Suite 100&#039;,<br />
        &#039;city&#039;       =&gt; &#039;Phoenix&#039;,<br />
        &#039;state&#039;      =&gt; &#039;AZ&#039;,<br />
        &#039;zip&#039;        =&gt; &#039;85001&#039;,<br />
        &#039;country&#039;    =&gt; &#039;USA&#039;,<br />
        &#039;phone&#039;      =&gt; &#039;555-123-4568&#039;,<br />
        &#039;email&#039;      =&gt; &#36;namex . &#039;.doe@example.com&#039;<br />
    ];<br />
<br />
    // Execute the insertion<br />
    &#36;db-&gt;query(&#36;sql, &#36;params);<br />
<br />
    // Fetch the ID of the newly inserted customer<br />
    &#36;newCustomerId = &#36;db-&gt;lastInsertId();<br />
<br />
    echo &quot;Customer inserted successfully with ID: &quot; . &#36;newCustomerId;<br />
<br />
} catch (Exception &#36;e) {<br />
    echo &quot;Insert Error: &quot; . &#36;e-&gt;getMessage();<br />
}<br />
<br />
echo &quot;-------------------------------------------------------------------------------------------------------------&quot;;<br />
<br />
//Example read single row:<br />
try {<br />
    &#36;sql = &quot;SELECT id, fullname, email, fulladdress FROM customers_test WHERE id = :id&quot;;<br />
<br />
    // Using chaining: query() returns self, so fetch() can be called immediately<br />
    &#36;customer = &#36;db-&gt;query(&#36;sql, [&#039;id&#039; =&gt; 1])-&gt;fetch();<br />
<br />
    if (&#36;customer) {<br />
        echo &quot;Customer Name: &quot; . &#36;customer[&#039;fullname&#039;] . &quot;&lt;br&gt;&quot;;<br />
        echo &quot;Email: &quot; . &#36;customer[&#039;email&#039;];<br />
    } else {<br />
        echo &quot;Customer not found.&quot;;<br />
    }<br />
<br />
} catch (Exception &#36;e) {<br />
    echo &quot;Read Error: &quot; . &#36;e-&gt;getMessage();<br />
}<br />
<br />
echo &quot;-------------------------------------------------------------------------------------------------------------&quot;;<br />
<br />
// Single row using FETCH_NUM:<br />
try {<br />
    &#36;sql = &quot;SELECT * FROM customers_test&quot;;<br />
<br />
    // Pass PDO::FETCH_NUM into fetch()<br />
    &#36;customer = &#36;db-&gt;query(&#36;sql)-&gt;fetch(PDO::FETCH_NUM);<br />
<br />
    if (&#36;customer) {<br />
        // Access columns by their 0-based position in the SELECT statement<br />
        echo &quot;ID: &quot; . &#36;customer[0] . &quot;&lt;br&gt;&quot;;         // &#039;id&#039; column<br />
        echo &quot;First Name: &quot; . &#36;customer[1] . &quot;&lt;br&gt;&quot;; // &#039;firstname&#039; column<br />
        echo &quot;Last Name: &quot; . &#36;customer[2] . &quot;&lt;br&gt;&quot;;  // &#039;lastname&#039; column<br />
        echo &quot;Email: &quot; . &#36;customer[3];               // &#039;email&#039; column<br />
    }<br />
} catch (Exception &#36;e) {<br />
    echo &quot;Fetch Error: &quot; . &#36;e-&gt;getMessage();<br />
}<br />
<br />
echo &quot;-------------------------------------------------------------------------------------------------------------&quot;;<br />
<br />
// Single specified row using FETCH_NUM:<br />
try {<br />
    &#36;sql = &quot;SELECT id, firstname, lastname, email FROM customers_test WHERE id = :id&quot;;<br />
<br />
    // Pass PDO::FETCH_NUM into fetch()<br />
    &#36;customer = &#36;db-&gt;query(&#36;sql, [&#039;id&#039; =&gt; 1])-&gt;fetch(PDO::FETCH_NUM);<br />
<br />
    if (&#36;customer) {<br />
        // Access columns by their 0-based position in the SELECT statement<br />
        echo &quot;ID: &quot; . &#36;customer[0] . &quot;&lt;br&gt;&quot;;         // &#039;id&#039; column<br />
        echo &quot;First Name: &quot; . &#36;customer[1] . &quot;&lt;br&gt;&quot;; // &#039;firstname&#039; column<br />
        echo &quot;Last Name: &quot; . &#36;customer[2] . &quot;&lt;br&gt;&quot;;  // &#039;lastname&#039; column<br />
        echo &quot;Email: &quot; . &#36;customer[3];               // &#039;email&#039; column<br />
    }<br />
} catch (Exception &#36;e) {<br />
    echo &quot;Fetch Error: &quot; . &#36;e-&gt;getMessage();<br />
}<br />
<br />
echo &quot;-------------------------------------------------------------------------------------------------------------&quot;;<br />
<br />
//Example read multiple specified rows:<br />
try {<br />
    &#36;sql = &quot;SELECT id, fullname, phone, state FROM customers_test WHERE state = :state AND active_ind = :active&quot;;<br />
<br />
    &#36;customers = &#36;db-&gt;query(&#36;sql, [<br />
        &#039;state&#039;  =&gt; &#039;AZ&#039;,<br />
        &#039;active&#039; =&gt; 1<br />
    ])-&gt;fetchAll();<br />
<br />
    foreach (&#36;customers as &#36;row) {<br />
        echo &quot;ID: {&#36;row[&#039;id&#039;]} | Name: {&#36;row[&#039;fullname&#039;]} | State: {&#36;row[&#039;state&#039;]}&lt;br&gt;&quot;;<br />
    }<br />
<br />
} catch (Exception &#36;e) {<br />
    echo &quot;Read Error: &quot; . &#36;e-&gt;getMessage();<br />
}<br />
<br />
echo &quot;-------------------------------------------------------------------------------------------------------------&quot;;<br />
<br />
//Example read all rows:<br />
try {<br />
    &#36;sql = &quot;SELECT * FROM customers_test&quot;;<br />
<br />
    &#36;customers = &#36;db-&gt;query(&#36;sql)-&gt;fetchAll();<br />
<br />
    foreach (&#36;customers as &#36;row) {<br />
        echo &quot;ID: {&#36;row[&#039;id&#039;]} | Name: {&#36;row[&#039;fullname&#039;]} | State: {&#36;row[&#039;state&#039;]}&lt;br&gt;&quot;;<br />
    }<br />
<br />
} catch (Exception &#36;e) {<br />
    echo &quot;Read Error: &quot; . &#36;e-&gt;getMessage();<br />
}<br />
<br />
echo &quot;-------------------------------------------------------------------------------------------------------------&quot;;<br />
<br />
//Example fetching multiple rows using FETCH_NUM.<br />
try {<br />
    &#36;sql = &quot;SELECT id, fullname, phone FROM customers_test WHERE state = :state&quot;;<br />
<br />
    // Pass PDO::FETCH_NUM into fetchAll()<br />
    &#36;customers = &#36;db-&gt;query(&#36;sql, [&#039;state&#039; =&gt; &#039;AZ&#039;])-&gt;fetchAll(PDO::FETCH_NUM);<br />
<br />
    foreach (&#36;customers as &#36;row) {<br />
        // [0] = id, [1] = fullname, [2] = phone<br />
        echo &quot;ID: {&#36;row[0]} | Name: {&#36;row[1]} | Phone: {&#36;row[2]}&lt;br&gt;&quot;;<br />
    }<br />
} catch (Exception &#36;e) {<br />
    echo &quot;Fetch Error: &quot; . &#36;e-&gt;getMessage();<br />
}<br />
<br />
echo &quot;-------------------------------------------------------------------------------------------------------------&quot;;<br />
<br />
//Reading multiple rows using FETCH_BOTH:<br />
try {<br />
    &#36;sql = &quot;SELECT id, firstname, lastname, state FROM customers_test WHERE id = :id&quot;;<br />
<br />
    // Pass PDO::FETCH_BOTH into fetch()<br />
    &#36;customer = &#36;db-&gt;query(&#36;sql, [&#039;id&#039; =&gt; 1])-&gt;fetch(PDO::FETCH_BOTH);<br />
<br />
    if (&#36;customer) {<br />
        // Access using column names:<br />
        echo &quot;Name (by name): &quot; . &#36;customer[&#039;firstname&#039;] . &quot; &quot; . &#36;customer[&#039;lastname&#039;] . &quot;&lt;br&gt;&quot;;<br />
<br />
        // OR access using numeric indices:<br />
        echo &quot;Name (by index): &quot; . &#36;customer[1] . &quot; &quot; . &#36;customer[2] . &quot;&lt;br&gt;&quot;;<br />
<br />
        // Demonstrating both keys exist in the same array:<br />
        echo &quot;State via name: &quot; . &#36;customer[&#039;state&#039;] . &quot; | State via index [3]: &quot; . &#36;customer[3];<br />
    }<br />
} catch (Exception &#36;e) {<br />
    echo &quot;Fetch Error: &quot; . &#36;e-&gt;getMessage();<br />
}<br />
<br />
echo &quot;-------------------------------------------------------------------------------------------------------------&quot;;<br />
<br />
//Read all specified rows using FETCH_BOTH:<br />
try {<br />
    &#36;sql = &quot;SELECT id, fullname, fulladdress FROM customers_test WHERE active_ind = :active&quot;;<br />
<br />
    // Pass PDO::FETCH_BOTH into fetchAll()<br />
    &#36;customers = &#36;db-&gt;query(&#36;sql, [&#039;active&#039; =&gt; 1])-&gt;fetchAll(PDO::FETCH_BOTH);<br />
<br />
    foreach (&#36;customers as &#36;row) {<br />
        // Mix and match key access as needed<br />
        echo &quot;Customer ID {&#36;row[0]} ({&#36;row[&#039;fullname&#039;]}): {&#36;row[&#039;fulladdress&#039;]}&lt;br&gt;&quot;;<br />
    }<br />
} catch (Exception &#36;e) {<br />
    echo &quot;Fetch Error: &quot; . &#36;e-&gt;getMessage();<br />
}<br />
<br />
echo &quot;-------------------------------------------------------------------------------------------------------------&quot;;<br />
<br />
//Example IN clause:<br />
try {<br />
    // Array of target IDs<br />
    &#36;ids = [1, 2, 5, 8];<br />
<br />
    // Generate positional placeholders (?, ?, ?, ?)<br />
    &#36;placeholders = implode(&#039;,&#039;, array_fill(0, count(&#36;ids), &#039;?&#039;));<br />
<br />
    &#36;sql = &quot;SELECT id, fullname, state, active_ind<br />
            FROM customers_test<br />
            WHERE id IN (&#36;placeholders)&quot;;<br />
<br />
    // Pass the array of IDs directly; the class automatically handles 1-indexing for positional bindings<br />
    &#36;customers = &#36;db-&gt;query(&#36;sql, &#36;ids)-&gt;fetchAll();<br />
<br />
    foreach (&#36;customers as &#36;customer) {<br />
        echo &quot;ID: &quot; . &#36;customer[&#039;id&#039;] . &quot; - &quot; . &#36;customer[&#039;fullname&#039;] . &quot;&lt;br&gt;&quot;;<br />
    }<br />
<br />
} catch (Exception &#36;e) {<br />
    echo &quot;IN Clause Error: &quot; . &#36;e-&gt;getMessage();<br />
}<br />
<br />
echo &quot;-------------------------------------------------------------------------------------------------------------&quot;;<br />
<br />
//Example update:<br />
try {<br />
    &#36;sql = &quot;UPDATE customers_test<br />
            SET address1 = :address1,<br />
                city = :city,<br />
                zip = :zip,<br />
                email = :email<br />
            WHERE id = :id&quot;;<br />
<br />
    &#36;params = [<br />
        &#039;address1&#039; =&gt; &#039;456 Oak Ave&#039;,<br />
        &#039;city&#039;     =&gt; &#039;Tempe&#039;,<br />
        &#039;zip&#039;      =&gt; &#039;85281&#039;,<br />
        &#039;email&#039;    =&gt; &#039;jane.updated@example.com&#039;,<br />
        &#039;id&#039;       =&gt; 1<br />
    ];<br />
<br />
    &#36;dbStmt = &#36;db-&gt;query(&#36;sql, &#36;params);<br />
<br />
    // Get total rows affected<br />
    &#36;rowsUpdated = &#36;dbStmt-&gt;rowCount();<br />
    echo &quot;Rows updated: &quot; . &#36;rowsUpdated;<br />
<br />
} catch (Exception &#36;e) {<br />
    echo &quot;Update Error: &quot; . &#36;e-&gt;getMessage();<br />
}<br />
<br />
echo &quot;-------------------------------------------------------------------------------------------------------------&quot;;<br />
<br />
//Example soft delete (setting active_ind to zero):<br />
try {<br />
    &#36;sql = &quot;UPDATE customers_test SET active_ind = 0 WHERE id = :id&quot;;<br />
<br />
    &#36;rowsAffected = &#36;db-&gt;query(&#36;sql, [&#039;id&#039; =&gt; 1])-&gt;rowCount();<br />
    echo &quot;Customer deactivated. Rows affected: &quot; . &#36;rowsAffected;<br />
<br />
} catch (Exception &#36;e) {<br />
    echo &quot;Soft Delete Error: &quot; . &#36;e-&gt;getMessage();<br />
}<br />
<br />
echo &quot;-------------------------------------------------------------------------------------------------------------&quot;;<br />
<br />
//Example hard delete:<br />
try {<br />
    &#36;sql = &quot;DELETE FROM customers_test WHERE id = :id&quot;;<br />
<br />
    &#36;rowsAffected = &#36;db-&gt;query(&#36;sql, [&#039;id&#039; =&gt; 2])-&gt;rowCount();<br />
    echo &quot;Customer permanently deleted. Rows affected: &quot; . &#36;rowsAffected;<br />
<br />
} catch (Exception &#36;e) {<br />
    echo &quot;Delete Error: &quot; . &#36;e-&gt;getMessage();<br />
}<br />
<br />
echo &quot;-------------------------------------------------------------------------------------------------------------&quot;;<br />
//The customers_test table used in this example:<br />
&#36;customers_test_table = &quot;<br />
customers_test | CREATE TABLE `customers_test` (<br />
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,<br />
  `customer_info` varchar(300) GENERATED ALWAYS AS (concat(`id`,&#039; &#039;,`firstname`,&#039; &#039;,`middlename`,&#039; &#039;,`lastname`,&#039; &#039;,`address1`,&#039; &#039;,`address2`,&#039; &#039;,`city`,&#039; &#039;,`state`,&#039; &#039;,`zip`)) VIRTUAL,<br />
  `firstname` varchar(100) NOT NULL,<br />
  `middlename` varchar(100) NOT NULL,<br />
  `lastname` varchar(100) NOT NULL,<br />
  `fullname` varchar(200) GENERATED ALWAYS AS (concat(`firstname`,_utf8mb3&#039; &#039;,`middlename`,_utf8mb3&#039; &#039;,`lastname`)) VIRTUAL,<br />
  `lastfirstaddress` varchar(200) GENERATED ALWAYS AS (concat(`lastname`,&#039;, &#039;,`firstname`,&#039; (&#039;,`address1`,&#039; &#039;,`address2`,&#039; &#039;,`city`,&#039; &#039;,`zip`,&#039;)&#039;)) VIRTUAL,<br />
  `address1` varchar(100) NOT NULL,<br />
  `address2` varchar(100) DEFAULT &#039;&#039;,<br />
  `city` varchar(100) NOT NULL,<br />
  `state` varchar(2) NOT NULL,<br />
  `zip` varchar(20) NOT NULL,<br />
  `country` varchar(100) DEFAULT NULL,<br />
  `fulladdress` text GENERATED ALWAYS AS (concat(`address1`,_utf8mb3&#039; &#039;,`address2`,_utf8mb3&#039; &#039;,`city`,_utf8mb3&#039; &#039;,`state`,_utf8mb3&#039; &#039;,`zip`)) VIRTUAL,<br />
  `id_fname_addr` varchar(300) GENERATED ALWAYS AS (concat(`id`,&#039; - &#039;,`fullname`,&#039; - &#039;,`fulladdress`)) VIRTUAL,<br />
  `phone` text DEFAULT NULL,<br />
  `email` text DEFAULT NULL,<br />
  `active_ind` int(11) NOT NULL DEFAULT 1,<br />
  PRIMARY KEY (`id`),<br />
  KEY `state` (`state`)<br />
) ENGINE=InnoDB;<br />
&quot;;<br />
echo &#36;customers_test_table;<br />
<br />
?&gt;"; ?>