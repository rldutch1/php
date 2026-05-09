<?php echo " &lt;?php<br />
// ----------------------------------------------------------------------------<br />
// Script Author: Robert Holland<br />
// Script Name: oop_pdo_database_class2.php<br />
// Creation Date: Sat Apr 25 2026 20:36:41 GMT-0700 (MST)<br />
// Last Modified:<br />
// Copyright (c)2026<br />
// Version: 1.1.0<br />
// Purpose: Examples using the Database class.<br />
// ----------------------------------------------------------------------------<br />
<br />
/*<br />
Wrap the queries in a try catch for these reasons:<br />
Atomicity: If the first query fails (duplicate entry), the code immediately jumps to the catch block. It skips the second query entirely. In your original code, the script might have tried to continue even after the first error, leading to &quot;broken&quot; or partial data.<br />
<br />
Code Reuse: You can use this same Database class for a login script, a registration script, or a blog post. Each script can handle its own errors (e.g., &quot;Email taken&quot; vs &quot;Slug exists&quot;) without you having to change the class code.<br />
<br />
Readability: The main logic reads like a story: &quot;Try to do A and B. If anything goes wrong, do C.&quot;<br />
*/<br />
date_default_timezone_set(&quot;America/Phoenix&quot;);<br />
echo &quot;Phoenix, AZ Time: &quot; . date(&quot;Y-m-d H:i:s&quot;) . &quot;&lt;br /&gt;&quot;;<br />
<br />
include(&#039;oop_pdo_cleaner_database_class1.php&#039;);<br />
//CONNECTION EXAMPLES:<br />
&#36;db = new Database(...&#36;pw0);<br />
//&#36;db = new Database(&#039;localhost&#039;, &#039;test&#039;, &#039;testuser&#039;, &#039;Th3Pa55word!&#039;);<br />
<br />
//1. FETCH ASSOC Example:<br />
echo &quot; &lt;br /&gt; &lt;br /&gt;Row 1: &lt;br /&gt;&quot;;<br />
try {<br />
&#36;id = 230;<br />
&#36;row1 = &#36;db-&gt;query(&quot;SELECT * FROM minecraft WHERE<br />
id = :id&quot;, [&#039;id&#039; =&gt; &#36;id])<br />
-&gt;fetch(PDO::FETCH_ASSOC);<br />
//echo &quot;&lt;strong&gt;Success! - (1. FETCH ASSOC Example)&lt;/strong&gt;&quot;;<br />
} catch (PDOException &#36;e) {<br />
// This block catches errors from ANY of the queries above fail.<br />
if (&#36;e-&gt;errorInfo[1] == 1062) {<br />
echo &quot;&lt;strong&gt;Oops!&lt;/strong&gt; Some message to the user (1. FETCH ASSOC Example).&quot;;<br />
} else {<br />
echo &quot;&lt;strong&gt;System Error:&lt;/strong&gt; (1. FETCH ASSOC Example)&quot; . &#36;e-&gt;getMessage();<br />
}<br />
}<br />
<br />
//1. FETCH_ASSOC Display:<br />
echo &#36;row1[&#039;id&#039;] . &quot; &quot; . &#36;row1[&#039;coordinate&#039;] . &quot; &quot; . &#36;row1[&#039;description&#039;] . &quot; &quot; . &#36;row1[&#039;tstamp&#039;] . &quot; &quot; . &#36;row1[&#039;active_ind&#039;] . &quot; &lt;br /&gt;&quot;;<br />
<br />
//2. FETCH NUM Example:<br />
echo &quot; &lt;br /&gt; &lt;br /&gt;Row 2: &lt;br /&gt;&quot;;<br />
try {<br />
&#36;row2 = &#36;db-&gt;query(&quot;SELECT * FROM minecraft WHERE id = :id&quot;, [&#039;id&#039; =&gt; 230])-&gt;fetch(PDO::FETCH_NUM);<br />
//echo &quot;&lt;strong&gt;Success! - (2. FETCH NUM Example)&lt;/strong&gt;&quot;;<br />
} catch (PDOException &#36;e) {<br />
// This block catches errors from ANY of the queries above fail.<br />
if (&#36;e-&gt;errorInfo[1] == 1062) {<br />
echo &quot;&lt;strong&gt;Oops!&lt;/strong&gt; Some message to the user (2. FETCH NUM Example).&quot;;<br />
} else {<br />
echo &quot;&lt;strong&gt;System Error:&lt;/strong&gt; (2. FETCH NUM Example)&quot; . &#36;e-&gt;getMessage();<br />
}<br />
}<br />
<br />
//2. FETCH_NUM Display:<br />
echo &#36;row2[0] . &quot; &quot; . &#36;row2[1] . &quot; &quot; . &#36;row2[2] . &quot; &quot; . &#36;row2[3] . &quot; &quot; . &#36;row2[4] . &quot; &lt;br /&gt;&quot;;<br />
<br />
//3. FETCH BOTH:<br />
echo &quot; &lt;br /&gt; &lt;br /&gt;Row 3: &lt;br /&gt;&quot;;<br />
try {<br />
&#36;row3 = &#36;db-&gt;query(&quot;SELECT * FROM minecraft WHERE id = :id&quot;, [&#039;id&#039; =&gt; 230])-&gt;fetch(PDO::FETCH_BOTH);<br />
//echo &quot;&lt;strong&gt;Success! - (3. FETCH BOTH: Example)&lt;/strong&gt;&quot;;<br />
} catch (PDOException &#36;e) {<br />
// This block catches errors from ANY of the queries above fail.<br />
if (&#36;e-&gt;errorInfo[1] == 1062) {<br />
echo &quot;&lt;strong&gt;Oops!&lt;/strong&gt; Some message to the user (3. FETCH BOTH: Example).&quot;;<br />
} else {<br />
echo &quot;&lt;strong&gt;System Error:&lt;/strong&gt; (3. FETCH BOTH: Example)&quot; . &#36;e-&gt;getMessage();<br />
}<br />
}<br />
<br />
//3. FETCH BOTH Display:<br />
echo &#36;row3[0] . &quot; &quot; . &#36;row3[&#039;coordinate&#039;] . &quot; &quot; . &#36;row3[2] . &quot; &quot; . &#36;row3[&#039;tstamp&#039;] . &quot; &quot; . &#36;row3[4] . &quot; &lt;br /&gt;&quot;;<br />
<br />
//4. FETCHALL BOTH:<br />
echo &quot; &lt;br /&gt; &lt;br /&gt;Row 4: &lt;br /&gt;&quot;;<br />
try {<br />
&#36;row4 = &#36;db-&gt;query(&quot;SELECT * FROM minecraft WHERE id &gt; :id&quot;, [&#039;id&#039; =&gt; 0])-&gt;fetchAll(PDO::FETCH_BOTH);<br />
//echo &quot;&lt;strong&gt;Success! - (4. FETCHALL BOTH: Example)&lt;/strong&gt;&quot;;<br />
} catch (PDOException &#36;e) {<br />
// This block catches errors from ANY of the queries above fail.<br />
if (&#36;e-&gt;errorInfo[1] == 1062) {<br />
echo &quot;&lt;strong&gt;Oops!&lt;/strong&gt; Some message to the user (4. FETCHALL BOTH: Example).&quot;;<br />
} else {<br />
echo &quot;&lt;strong&gt;System Error:&lt;/strong&gt; (4. FETCHALL BOTH: Example)&quot; . &#36;e-&gt;getMessage();<br />
}<br />
}<br />
<br />
//4. FETCHALL BOTH Display:<br />
foreach (&#36;row4 as &#36;row) {<br />
echo &#36;row[&#039;id&#039;] . &quot; &quot; . &#36;row[1] . &quot; &quot; . &#36;row[2] . &quot; &quot; . &#36;row[&#039;tstamp&#039;] . &quot; &quot; . &#36;row[4] . &quot; &lt;br /&gt;&quot;;<br />
}<br />
<br />
//5. FETCHALL BOTH Using LIKE:<br />
echo &quot; &lt;br /&gt; &lt;br /&gt;Row 5: &lt;br /&gt;&quot;;<br />
try {<br />
&#36;row5 = &#36;db-&gt;query(&quot;SELECT * FROM minecraft WHERE id &gt; :id and description like :description&quot;, [&#039;id&#039; =&gt; 0, &#039;description&#039; =&gt; &#039;%House&#039;])-&gt;fetchAll(PDO::FETCH_BOTH);<br />
//echo &quot;&lt;strong&gt;Success! - (5. FETCHALL BOTH Using LIKE: Example)&lt;/strong&gt;&quot;;<br />
} catch (PDOException &#36;e) {<br />
// This block catches errors from ANY of the queries above fail.<br />
if (&#36;e-&gt;errorInfo[1] == 1062) {<br />
echo &quot;&lt;strong&gt;Oops!&lt;/strong&gt; Some message to the user (5. FETCHALL BOTH Using LIKE: Example).&quot;;<br />
} else {<br />
echo &quot;&lt;strong&gt;System Error:&lt;/strong&gt; (5. FETCHALL BOTH Using LIKE: Example)&quot; . &#36;e-&gt;getMessage();<br />
}<br />
}<br />
<br />
//FETCHALL BOTH Using LIKE Display:<br />
foreach (&#36;row5 as &#36;row) {<br />
echo &#36;row[&#039;id&#039;] . &quot; &quot; . &#36;row[1] . &quot; &quot; . &#36;row[2] . &quot; &quot; . &#36;row[&#039;tstamp&#039;] . &quot; &quot; . &#36;row[4] . &quot; &lt;br /&gt;&quot;;<br />
}<br />
<br />
//6. FETCHALL BOTH WITH OPERATORS:<br />
//You can chain several of these together in a single statement.<br />
//Just ensure your &#36;params array matches every placeholder you defined in the string.<br />
echo &quot; &lt;br /&gt; &lt;br /&gt;Row 6: &lt;br /&gt;&quot;;<br />
try {<br />
&#36;row6 = &#36;db-&gt;query(&quot;SELECT * FROM minecraft WHERE id &gt; :id<br />
and tstamp = :tstamp<br />
and coordinate = :coordinate<br />
and description = :description<br />
and active_ind = :inactive<br />
or active_ind = :active&quot;,<br />
[&#039;id&#039; =&gt; &#039;240&#039;,<br />
&#039;tstamp&#039; =&gt; &#039;2026-04-15 10:12:25&#039;,<br />
&#039;coordinate&#039; =&gt; &#039;sdfsdfsd&#039;,<br />
&#039;description&#039; =&gt; &#039;asfsds&#039;,<br />
&#039;inactive&#039; =&gt; 0,<br />
&#039;active&#039; =&gt; 1])-&gt;fetchAll(PDO::FETCH_BOTH);<br />
//echo &quot;&lt;strong&gt;Success! - (6. FETCHALL BOTH WITH OPERATORS: Example)&lt;/strong&gt;&quot;;<br />
} catch (PDOException &#36;e) {<br />
// This block catches errors from ANY of the queries above fail.<br />
if (&#36;e-&gt;errorInfo[1] == 1062) {<br />
echo &quot;&lt;strong&gt;Oops!&lt;/strong&gt; Some message to the user (6. FETCHALL BOTH WITH OPERATORS: Example).&quot;;<br />
} else {<br />
echo &quot;&lt;strong&gt;System Error:&lt;/strong&gt; (6. FETCHALL BOTH WITH OPERATORS: Example)&quot; . &#36;e-&gt;getMessage();<br />
}<br />
}<br />
<br />
//FETCHALL BOTH WITH OPERATORS Display:<br />
foreach (&#36;row6 as &#36;row) {<br />
echo &#36;row[&#039;id&#039;] . &quot; &quot; . &#36;row[1] . &quot; &quot; . &#36;row[2] . &quot; &quot; . &#36;row[&#039;tstamp&#039;] . &quot; &quot; . &#36;row[4] . &quot; &lt;br /&gt;&quot;;<br />
}<br />
<br />
//7. FETCHALL BOTH WITH OPERATORS and &#36;PARAMS array:<br />
echo &quot; &lt;br /&gt; &lt;br /&gt;Row 7: &lt;br /&gt;&quot;;<br />
&#36;row7 = &quot;SELECT * FROM minecraft<br />
WHERE tstamp != :tstamp<br />
AND (id &gt; :id OR description = :description)&quot;;<br />
<br />
&#36;row7_params = [<br />
&#039;tstamp&#039; =&gt; &#039;2026-04-15 10:12:25&#039;,<br />
&#039;id&#039; =&gt; &#039;2&#039;,<br />
&#039;description&#039; =&gt; &#039;asfsds&#039;<br />
];<br />
<br />
try {<br />
&#36;results = &#36;db-&gt;query(&#36;row7, &#36;row7_params)-&gt;fetchAll(PDO::FETCH_BOTH); //Defaults to PDO::FETCH_ASSOC.<br />
//echo &quot;&lt;strong&gt;Success! - (7. FETCHALL BOTH WITH OPERATORS and &#36;PARAMS array: Example)&lt;/strong&gt;&quot;;<br />
} catch (PDOException &#36;e) {<br />
// This block catches errors from ANY of the queries above fail.<br />
if (&#36;e-&gt;errorInfo[1] == 1062) {<br />
echo &quot;&lt;strong&gt;Oops!&lt;/strong&gt; Some message to the user (7. FETCHALL BOTH WITH OPERATORS and &#36;PARAMS array: Example).&quot;;<br />
} else {<br />
echo &quot;&lt;strong&gt;System Error:&lt;/strong&gt; (7. FETCHALL BOTH WITH OPERATORS and &#36;PARAMS array: Example)&quot; . &#36;e-&gt;getMessage();<br />
}<br />
}<br />
<br />
//var_dump(&#36;results);<br />
<br />
//echo &#039;&lt;pre&gt;&#039;;<br />
//print_r(&#36;results);<br />
//echo &#039;&lt;/pre&gt;&#039;;<br />
<br />
//FETCH USING &#36;params array to pass values display:<br />
foreach (&#36;results as &#36;result) {<br />
//echo &#36;result[0] . &quot; &quot; . &#36;result[1] . &quot; &quot; . &#36;result[2] . &quot; &quot; . &#36;result[3] . &quot; &quot; . &#36;result[4] . &quot; &lt;br /&gt;&quot;;<br />
echo &#36;result[&#039;id&#039;] . &quot; &quot; . &#36;result[1] . &quot; &quot; . &#36;result[&#039;description&#039;] . &quot; &quot; . &#36;result[3] . &quot; &quot; . &#36;result[&#039;active_ind&#039;] . &quot; &lt;br /&gt;&quot;;<br />
}<br />
<br />
//8. Where IN Clause Example:<br />
//FETCH Passing IN Clause array (numbers).<br />
//Retrieving rows with these ID&#039;s.<br />
echo &quot; &lt;br /&gt; &lt;br /&gt;Row 8: &lt;br /&gt;&quot;;<br />
&#36;ids = [148, 159, 198, 212];<br />
<br />
//Counting the number of items in the &#36;ids array starting at zero and assigning a questionmark to each item found.<br />
&#36;placeholders = implode(&#039;,&#039;, array_fill(0, count(&#36;ids), &#039;?&#039;));<br />
<br />
//Adding questionmark placeholders to the query to avoid SQL injection.<br />
&#36;thequerywithplaceholders = &quot;SELECT * FROM minecraft WHERE id IN (&#36;placeholders)&quot;;<br />
<br />
//Passing the &#36;ids in the IN Clause to the query.<br />
try {<br />
&#36;row8 = &#36;db-&gt;query(&#36;thequerywithplaceholders, &#36;ids)-&gt;fetchAll();<br />
//echo &quot;&lt;strong&gt;Success! - (8. Where IN Clause Example: Example)&lt;/strong&gt;&quot;;<br />
} catch (PDOException &#36;e) {<br />
// This block catches errors from ANY of the queries above fail.<br />
if (&#36;e-&gt;errorInfo[1] == 1062) {<br />
echo &quot;&lt;strong&gt;Oops!&lt;/strong&gt; Some message to the user (8. Where IN Clause Example: Example).&quot;;<br />
} else {<br />
echo &quot;&lt;strong&gt;System Error:&lt;/strong&gt; (8. Where IN Clause Example: Example)&quot; . &#36;e-&gt;getMessage();<br />
}<br />
}<br />
<br />
//Iterate through the ouput and display.<br />
foreach(&#36;row8 as &#36;result) {<br />
echo &#36;result[&#039;id&#039;] . &quot; &quot; . &#36;result[&#039;coordinate&#039;] . &quot; &quot; . &#36;result[&#039;description&#039;] . &quot; &quot; . &#36;result[&#039;tstamp&#039;] . &quot; &quot; . &#36;result[&#039;active_ind&#039;] . &quot; &lt;br /&gt;&quot;;<br />
}<br />
<br />
//9. FETCH Passing IN Clause array (strings).<br />
echo &quot; &lt;br /&gt; &lt;br /&gt;Row 9: &lt;br /&gt;&quot;;<br />
//Retrieving rows with these ID&#039;s.<br />
&#36;description = [&#039;House on hill&#039;, &#039;House in meadow&#039;, &#039;Hole in mountain&#039;, &#039;Lake with horses.&#039;];<br />
<br />
//Counting the number of items in the &#36;description array starting at zero.<br />
&#36;placeholders = implode(&#039;,&#039;, array_fill(0, count(&#36;description), &#039;?&#039;));<br />
<br />
//Adding questionmark placeholders to the query to avoid SQL injection.<br />
&#36;thequerywithplaceholders = &quot;SELECT * FROM minecraft WHERE description IN (&#36;placeholders) order by id&quot;;<br />
<br />
//Passing the &#36;description in the IN Clause to the query.<br />
try {<br />
&#36;row9 = &#36;db-&gt;query(&#36;thequerywithplaceholders, &#36;description)-&gt;fetchAll();<br />
//echo &quot;&lt;strong&gt;Success! - (8. Where IN Clause Example: Example)&lt;/strong&gt;&quot;;<br />
} catch (PDOException &#36;e) {<br />
// This block catches errors from ANY of the queries above fail.<br />
if (&#36;e-&gt;errorInfo[1] == 1062) {<br />
echo &quot;&lt;strong&gt;Oops!&lt;/strong&gt; Some message to the user (9. FETCH Passing IN Clause array (strings): Example).&quot;;<br />
} else {<br />
echo &quot;&lt;strong&gt;System Error:&lt;/strong&gt; (9. FETCH Passing IN Clause array (strings): Example)&quot; . &#36;e-&gt;getMessage();<br />
}<br />
}<br />
<br />
//Iterate through the ouput and display.<br />
foreach(&#36;row9 as &#36;result) {<br />
echo &#36;result[&#039;id&#039;] . &quot; &quot; . &#36;result[&#039;coordinate&#039;] . &quot; &quot; . &#36;result[&#039;description&#039;] . &quot; &quot; . &#36;result[&#039;tstamp&#039;] . &quot; &quot; . &#36;result[&#039;active_ind&#039;] . &quot; &lt;br /&gt;&quot;;<br />
}<br />
<br />
/*<br />
Add a working version of this example.<br />
<br />
Example: Combining IN with other operators<br />
If you want to use named placeholders and an IN clause together, you have to be careful with the order. It&#039;s often easiest to stick to all positional placeholders:<br />
<br />
PHP<br />
&#36;categoryIds = [2, 4];<br />
&#36;minPrice = 50;<br />
<br />
&#36;placeholders = implode(&#039;,&#039;, array_fill(0, count(&#36;categoryIds), &#039;?&#039;));<br />
<br />
// We put &#36;minPrice at the end of the array to match its position in the SQL<br />
&#36;sql = &quot;SELECT * FROM products WHERE category_id IN (&#36;placeholders) AND price &gt; ?&quot;;<br />
&#36;params = array_merge(&#36;categoryIds, [&#36;minPrice]);<br />
<br />
&#36;results = &#36;db-&gt;query(&#36;sql, &#36;params)-&gt;fetchAll();<br />
*/<br />
<br />
//10. Example Insert with lastInsertID().<br />
//If the try fails, the last insert ID will not be generated and no orphaned data will be inserted into the minecraft_check table.<br />
&#36;something_unique = &quot;Phoenix, AZ Time: &quot; . date(&quot;Y-m-d H:i:s&quot;); //Unique data for testing.<br />
echo &quot; &lt;br /&gt; &lt;br /&gt;Row 10: &lt;br /&gt;&quot;;<br />
try {<br />
//Insert data into the database table (coordinate and description must be unique.<br />
&#36;db-&gt;query(<br />
&quot;INSERT INTO minecraft (coordinate, description) VALUES (:coordinate, :description)&quot;,<br />
[<br />
&#039;coordinate&#039; =&gt; &#039;123,456,789.13&#039;,<br />
//&#039;description&#039; =&gt; &#039;m_id table23&#039; //Change this to avoid a constraint violation.<br />
&#039;description&#039; =&gt; &#36;something_unique<br />
]<br />
);<br />
<br />
//Get last inserted ID:<br />
&#36;last_id = &#36;db-&gt;lastInsertId();<br />
&#36;x = &#36;last_id;<br />
echo &quot;Last ID is: &quot; . &#36;x . &quot;&lt;br /&gt;&quot;;<br />
<br />
//Use the last inserted ID from the minecraft table and insert it into the m_id column of the minecraft_check table.<br />
&#36;db-&gt;query(<br />
&quot;INSERT INTO minecraft_check (m_id, description) VALUES (:m_id, :description)&quot;,<br />
[<br />
&#039;m_id&#039; =&gt; &#36;last_id,<br />
&#039;description&#039; =&gt; &#039;Something cool.&#039;<br />
]<br />
);<br />
} catch (PDOException &#36;e) {<br />
if (&#36;e-&gt;errorInfo[0] == 23000) {<br />
echo &quot;&lt;div class=&#039;alert&#039;&gt;That coordinate is already logged!&lt;/div&gt;&quot;;<br />
} else {<br />
echo &quot;Unexpected error: &quot; . &#36;e-&gt;getMessage();<br />
}<br />
}<br />
<br />
// 11. Example using rowCount() to display number of rows deleted (added).<br />
//Delete rows to keep the table from getting too large (testing).<br />
//Im deleting from the minecraft table because there is a foreign key cascade constraint that will delete the corresponding row in the minecraft_check table.<br />
echo &quot; &lt;br /&gt; &lt;br /&gt;Row 11: &lt;br /&gt;&quot;;<br />
&#36;db-&gt;query(&quot;DELETE FROM minecraft WHERE id &gt; :id&quot;, [&#039;id&#039; =&gt; 400]);<br />
echo &#36;db-&gt;rowCount() . &quot; row(s) were removed. &lt;br /&gt;&quot;;<br />
<br />
/*<br />
A Cleaner Way (Recommended)<br />
Usually, you want your Database class to be &quot;dumb&quot; and just pass the error up to your main script. This allows you to show a nice HTML alert instead of just a raw echo.<br />
<br />
1. Keep the Class &quot;Clean&quot;:<br />
Let the query method throw the error.<br />
<br />
2. Catch it where you use it:<br />
<br />
PHP<br />
try {<br />
&#36;db-&gt;query(<br />
&quot;INSERT INTO minecraft (coordinate, description) VALUES (:coordinate, :description)&quot;,<br />
[&#039;coordinate&#039; =&gt; &#039;123&#039;, &#039;description&#039; =&gt; &#039;test&#039;]<br />
);<br />
} catch (PDOException &#36;e) {<br />
if (&#36;e-&gt;errorInfo[1] == 1062) {<br />
echo &quot;&lt;div class=&#039;alert&#039;&gt;That coordinate is already logged!&lt;/div&gt;&quot;;<br />
} else {<br />
echo &quot;Unexpected error: &quot; . &#36;e-&gt;getMessage();<br />
}<br />
}<br />
This way, if the first query fails, the script jumps to the catch block and never attempts the second query (minecraft_check), preventing orphaned data or further crashes.<br />
*/"; ?>
