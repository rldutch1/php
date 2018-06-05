<?php
if(!session_id()) session_start(); //If session has not been started, start it.
//print_r(session_id());
include('header.php');
echo "The database connection string has been combined with lesson 2. ";
echo "Below is the MySQL and MSSQL query to create the \"stibbard\" table.<br />
<br /><div class='section1'>MySQL Query</div><br />
DROP DATABASE IF EXISTS stibbard;<br />
CREATE DATABASE stibbard;<br />
USE stibbard;<br />
CREATE TABLE stibbard (<br />
  id int(11) unsigned NOT NULL AUTO_INCREMENT,<br />
  firstname varchar(100) NOT NULL,<br />
  lastname varchar(100) NOT NULL,<br />
  postcode varchar(20) NOT NULL,<br />
  PRIMARY KEY (id),<br />
  KEY id (id)<br />
) ENGINE=InnoDB;<br />
<br /><div class='section1'>MySQL Query to create stibbard user and grant access to stibbard database.</div><br />
-- Make sure the database has been created first.<br />
-- Create local user.<br />
CREATE USER 'stibbard'@'localhost' IDENTIFIED BY 'stibbard';<br />
GRANT ALL PRIVILEGES ON stibbard.* TO 'stibbard'@'localhost' WITH GRANT OPTION;<br />
-- Create remote user.<br />
CREATE USER 'stibbard'@'%' IDENTIFIED BY 'stibbard';<br />
GRANT ALL PRIVILEGES ON stibbard.* TO 'stibbard'@'%' WITH GRANT OPTION;<br />
-- Tell the server to reload the GRANT TABLES.<br />
FLUSH PRIVILEGES;<br />
<br /><div class='section1'>Microsoft SQL Query</div><br />
CREATE DATABASE stibbard;<br />
USE stibbard;<br />
CREATE TABLE stibbard (<br />
  id int identity(1,1) primary key,<br />
  firstname varchar(100) NOT NULL,<br />
  lastname varchar(100) NOT NULL,<br />
  postcode varchar(20) NOT NULL,<br />
  PRIMARY KEY (id),<br />
) ENGINE=InnoDB;<br />
<br /><div class='section1'>Partial insert statement</div><br />
insert into stibbard (firstname, lastname, postcode) values <br />
('Robert','Holland','12345'), <br />
('Stanley','Holland','12345'), <br />
('Vernon','Holland III','12345'), <br />
('Jeanette','Holland','12345'), <br />
('Leah','Holland','12345'), <br />
('Jason','Holland','12345'), <br />
('Keira','Holland','12345'), <br />
('Aiko','Holland','12345'), <br />
('Umptyfratz','Holland','12345'); <br />
<br /><div class='section1'>Full insert statement</div><br />
insert into stibbard (firstname, lastname, postcode) values ('Robert','Holland','12345'); <br />
insert into stibbard (firstname, lastname, postcode) values ('Stanley','Holland','12345'); <br />
insert into stibbard (firstname, lastname, postcode) values ('Vernon','Holland III','12345'); <br />
insert into stibbard (firstname, lastname, postcode) values ('Jeanette','Holland','12345'); <br />
insert into stibbard (firstname, lastname, postcode) values ('Leah','Holland','12345'); <br />
insert into stibbard (firstname, lastname, postcode) values ('Jason','Holland','12345'); <br />
insert into stibbard (firstname, lastname, postcode) values ('Keira','Holland','12345'); <br />
insert into stibbard (firstname, lastname, postcode) values ('Aiko','Holland','12345'); <br />
insert into stibbard (firstname, lastname, postcode) values ('Umptyfratz','Holland','12345'); <br />
";


include('footer.php');
?>