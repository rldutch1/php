<?php
if($_POST)
{
$name=$_POST['name'];
$username=$_POST['username'];
$password=$_POST['password'];
$gender=$_POST['gender'];
//mysql_query="SQL insert statement.......";
mysql_query="insert into table (name, username, password, gender) values ($_POST[name],$_POST[username],$_POST[password],$_POST[gender])";
}else { }
?>
