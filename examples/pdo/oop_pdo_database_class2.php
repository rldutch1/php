<?php echo " &lt;?php<br />
// ----------------------------------------------------------------------------<br />
// Script Author: Robert Holland<br />
// Script Name: oop_pdo_database_class2.php<br />
// Creation Date: Sat Apr 25 2026 20:36:41 GMT-0700 (MST)<br />
// Last Modified:<br />
// Copyright (c)2026<br />
// Version: 1.0.0<br />
// Purpose: Examples using the Database class.<br />
// ----------------------------------------------------------------------------<br />
<br />
include(&#039;oop_pdo_database_class1.php&#039;);<br />
//CONNECTION EXAMPLES:<br />
&#36;db = new Database(&#039;localhost&#039;, &#039;TheDataBaseName&#039;, &#039;TheUserName&#039;, &#039;ThePa55w0rd&#039;);<br />
&#36;id = 230;<br />
//1. FETCH ASSOC:<br />
&#36;row1 = &#36;db-&gt;query(&quot;SELECT * FROM minecraft WHERE<br />
id = :id&quot;, [&#039;id&#039; =&gt; &#36;id])<br />
-&gt;fetch(PDO::FETCH_ASSOC);<br />
<br />
//1. FETCH_ASSOC:<br />
echo &quot; &lt;br /&gt; &lt;br /&gt;Row 1: &lt;br /&gt;&quot;;<br />
echo &#36;row1[&#039;id&#039;] . &quot; &quot; . &#36;row1[&#039;coordinate&#039;] . &quot; &quot; . &#36;row1[&#039;description&#039;] . &quot; &quot; . &#36;row1[&#039;tstamp&#039;] . &quot; &quot; . &#36;row1[&#039;active_ind&#039;] . &quot; &lt;br /&gt;&quot;;<br />
<br />
//2. FETCH NUM:<br />
&#36;row2 = &#36;db-&gt;query(&quot;SELECT * FROM minecraft WHERE id = :id&quot;, [&#039;id&#039; =&gt; 230])-&gt;fetch(PDO::FETCH_NUM);<br />
<br />
//FETCH_NUM:<br />
echo &quot; &lt;br /&gt; &lt;br /&gt;Row 2: &lt;br /&gt;&quot;;<br />
echo &#36;row2[0] . &quot; &quot; . &#36;row2[1] . &quot; &quot; . &#36;row2[2] . &quot; &quot; . &#36;row2[3] . &quot; &quot; . &#36;row2[4] . &quot; &lt;br /&gt;&quot;;<br />
<br />
//3. FETCH BOTH:<br />
&#36;row3 = &#36;db-&gt;query(&quot;SELECT * FROM minecraft WHERE id = :id&quot;, [&#039;id&#039; =&gt; 230])-&gt;fetch(PDO::FETCH_BOTH);<br />
<br />
//FETCH_BOTH:<br />
echo &quot; &lt;br /&gt; &lt;br /&gt;Row 3: &lt;br /&gt;&quot;;<br />
echo &#36;row3[0] . &quot; &quot; . &#36;row3[&#039;coordinate&#039;] . &quot; &quot; . &#36;row3[2] . &quot; &quot; . &#36;row3[&#039;tstamp&#039;] . &quot; &quot; . &#36;row3[4] . &quot; &lt;br /&gt;&quot;;<br />
<br />
//4. FETCHALL BOTH:<br />
&#36;row4 = &#36;db-&gt;query(&quot;SELECT * FROM minecraft WHERE id &gt; :id&quot;, [&#039;id&#039; =&gt; 0])-&gt;fetchAll(PDO::FETCH_BOTH);<br />
<br />
//FETCHALL_BOTH:<br />
echo &quot; &lt;br /&gt; &lt;br /&gt;Row 4: &lt;br /&gt;&quot;;<br />
foreach (&#36;row4 as &#36;row) {<br />
echo &#36;row[&#039;id&#039;] . &quot; &quot; . &#36;row[1] . &quot; &quot; . &#36;row[2] . &quot; &quot; . &#36;row[&#039;tstamp&#039;] . &quot; &quot; . &#36;row[4] . &quot; &lt;br /&gt;&quot;;<br />
}<br />
<br />
//5. FETCHALL BOTH Using LIKE:<br />
&#36;row5 = &#36;db-&gt;query(&quot;SELECT * FROM minecraft WHERE id &gt; :id and description like :description&quot;, [&#039;id&#039; =&gt; 0, &#039;description&#039; =&gt; &#039;%House&#039;])-&gt;fetchAll(PDO::FETCH_BOTH);<br />
<br />
//FETCHALL BOTH Using LIKE:<br />
echo &quot; &lt;br /&gt; &lt;br /&gt;Row 5: &lt;br /&gt;&quot;;<br />
foreach (&#36;row5 as &#36;row) {<br />
echo &#36;row[&#039;id&#039;] . &quot; &quot; . &#36;row[1] . &quot; &quot; . &#36;row[2] . &quot; &quot; . &#36;row[&#039;tstamp&#039;] . &quot; &quot; . &#36;row[4] . &quot; &lt;br /&gt;&quot;;<br />
}<br />
<br />
//6. FETCHALL BOTH WITH OPERATORS:<br />
//You can chain several of these together in a single statement.<br />
//Just ensure your &#36;params array matches every placeholder you defined in the string.<br />
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
<br />
//FETCHALL BOTH WITH OPERATORS:<br />
echo &quot; &lt;br /&gt; &lt;br /&gt;Row 6: &lt;br /&gt;&quot;;<br />
foreach (&#36;row6 as &#36;row) {<br />
echo &#36;row[&#039;id&#039;] . &quot; &quot; . &#36;row[1] . &quot; &quot; . &#36;row[2] . &quot; &quot; . &#36;row[&#039;tstamp&#039;] . &quot; &quot; . &#36;row[4] . &quot; &lt;br /&gt;&quot;;<br />
}<br />
<br />
//7. FETCHALL BOTH WITH OPERATORS and &#36;PARAMS array:<br />
&#36;row7 = &quot;SELECT * FROM minecraft<br />
WHERE tstamp != :tstamp<br />
AND (id &gt; :id OR description = :description)&quot;;<br />
<br />
&#36;params = [<br />
&#039;tstamp&#039; =&gt; &#039;2026-04-15 10:12:25&#039;,<br />
&#039;id&#039; =&gt; &#039;2&#039;,<br />
&#039;description&#039; =&gt; &#039;asfsds&#039;<br />
];<br />
<br />
&#36;results = &#36;db-&gt;query(&#36;row7, &#36;params)-&gt;fetchAll(PDO::FETCH_BOTH); //Defaults to PDO::FETCH_ASSOC.<br />
<br />
//var_dump(&#36;results);<br />
<br />
//echo &#039;&lt;pre&gt;&#039;;<br />
//print_r(&#36;results);<br />
//echo &#039;&lt;/pre&gt;&#039;;<br />
<br />
//FETCH USING &#36;params array to pass values:<br />
echo &quot; &lt;br /&gt; &lt;br /&gt;Row 7: &lt;br /&gt;&quot;;<br />
foreach (&#36;results as &#36;result) {<br />
//echo &#36;result[0] . &quot; &quot; . &#36;result[1] . &quot; &quot; . &#36;result[2] . &quot; &quot; . &#36;result[3] . &quot; &quot; . &#36;result[4] . &quot; &lt;br /&gt;&quot;;<br />
echo &#36;result[&#039;id&#039;] . &quot; &quot; . &#36;result[&#039;coordinate&#039;] . &quot; &quot; . &#36;result[&#039;description&#039;] . &quot; &quot; . &#36;result[&#039;tstamp&#039;] . &quot; &quot; . &#36;result[&#039;active_ind&#039;] . &quot; &lt;br /&gt;&quot;;<br />
}<br />
<br />
//8. Where IN Clause Example:<br />
//FETCH Passing IN Clause array (numbers).<br />
echo &quot; &lt;br /&gt; &lt;br /&gt;Row 8: &lt;br /&gt;&quot;;<br />
//Retrieving rows with these ID&#039;s.<br />
&#36;ids = [148, 159, 198, 212];<br />
<br />
//Counting the number of items in the &#36;ids array starting at zero.<br />
&#36;placeholders = implode(&#039;,&#039;, array_fill(0, count(&#36;ids), &#039;?&#039;));<br />
<br />
//Adding questionmark placeholders to the query to avoid SQL injection.<br />
&#36;thequerywithplaceholders = &quot;SELECT * FROM minecraft WHERE id IN (&#36;placeholders)&quot;;<br />
<br />
//Passing the &#36;ids in the IN Clause to the query.<br />
&#36;row8 = &#36;db-&gt;query(&#36;thequerywithplaceholders, &#36;ids)-&gt;fetchAll();<br />
<br />
//Iterate through the ouput and display.<br />
foreach(&#36;row8 as &#36;result) {<br />
echo &#36;result[&#039;id&#039;] . &quot; &quot; . &#36;result[&#039;coordinate&#039;] . &quot; &quot; . &#36;result[&#039;description&#039;] . &quot; &quot; . &#36;result[&#039;tstamp&#039;] . &quot; &quot; . &#36;result[&#039;active_ind&#039;] . &quot; &lt;br /&gt;&quot;;<br />
}<br />
<br />
//9. FETCH Passing IN Clause array (strings).<br />
echo &quot; &lt;br /&gt; &lt;br /&gt;Row 9: &lt;br /&gt;&quot;;<br />
//Retrieving rows with these ID&#039;s.<br />
&#36;ids = [&#039;House on hill&#039;, &#039;House in meadow&#039;, &#039;Hole in mountain&#039;, &#039;Lake with horses.&#039;];<br />
<br />
//Counting the number of items in the &#36;ids array starting at zero.<br />
&#36;placeholders = implode(&#039;,&#039;, array_fill(0, count(&#36;ids), &#039;?&#039;));<br />
<br />
//Adding questionmark placeholders to the query to avoid SQL injection.<br />
&#36;thequerywithplaceholders = &quot;SELECT * FROM minecraft WHERE description IN (&#36;placeholders) order by id&quot;;<br />
<br />
//Passing the &#36;ids in the IN Clause to the query.<br />
&#36;row9 = &#36;db-&gt;query(&#36;thequerywithplaceholders, &#36;ids)-&gt;fetchAll();<br />
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
&#36;db-&gt;query(<br />
&quot;INSERT INTO minecraft (coordinate, description) VALUES (:coordinate, :description)&quot;,<br />
[<br />
&#039;coordinate&#039; =&gt; &#039;123,456,789.13&#039;,<br />
&#039;description&#039; =&gt; &#039;m_id table18&#039; //Change this to avoid a constraint violation.<br />
]<br />
);<br />
<br />
// 10a. Capture the ID generated by the database<br />
&#36;last_id = &#36;db-&gt;lastInsertId();<br />
echo &quot;Coordinate and description created successfully with ID: &quot; . &#36;last_id . &quot; &lt;br /&gt;&quot;;<br />
<br />
// 11. Use that ID to insert a record into a related table (e.g., user_settings)<br />
&#36;db-&gt;query(<br />
&quot;INSERT INTO minecraft_check (m_id, description) VALUES (:m_id, :description)&quot;,<br />
[<br />
&#039;m_id&#039; =&gt; &#36;last_id,<br />
&#039;description&#039; =&gt; &#039;Something cool.&#039;<br />
]<br />
);<br />
<br />
// 12. Example using rowCount() to display number of rows deleted (added).<br />
&#36;db-&gt;query(&quot;DELETE FROM minecraft_check WHERE m_id &gt; :m_id&quot;, [&#039;m_id&#039; =&gt; 234]);<br />
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