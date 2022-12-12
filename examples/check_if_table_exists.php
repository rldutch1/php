Fastest Way to Check if MYSQL Table Exists in PHP
https://smallbusiness.chron.com/read-element-attribute-java-xml-jdom-26692.html


Dynamic PHP pages give you the option to choose a MySQL table dynamically from which to query. You must ensure that the table exists before running a query on the table. PHP has a quick function that returns all available tables on the server; you use this function to identify if your selected table exists.

1.
Right-click the PHP file you want to use to identify the existing table. Click "Open With" and select your PHP editor.

2.
Connect to the MySQL database. The following code connects to a database server named "myserver:"

mysql_connect('myserver', 'user', 'password')

3.
Retrieve a list of tables from the database. The following code assigns a list of tables in the "database" database to the "tables" variable:

$table = mysql-list-tables("database");

4.
Identify if a table exists. The following code loops through each table and determines if a table named "mytable" exists:

while ($row = mysql_fetch_row($table)) { if ($row == "mytable") { echo "Table exists"; } }