<?php
echo "<a href='https://www.youtube.com/watch?v=vqqUGNdRow8' target='_blank'>Lesson1 Youtube Video</a><br />";
echo "<a href='pdo_tutorial_queryA.php'>Go to PDO Tutorial Lesson 2</a><br />";
echo "<img src='lesson1_pdo_tutorial_connect.png'><br />";
echo "<a href='pdo_tutorial_createdb.sql'>Create database file</a><br />
<p>
CREATE DATABASE testdb;<br />
USE testdb;<br />

CREATE TABLE `names` (<br />
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,<br />
  `firstname` varchar(100) DEFAULT NULL,<br />
  `lastname` varchar(100) DEFAULT NULL,<br />
  `postcode` varchar(100) DEFAULT NULL,<br />
  PRIMARY KEY (`id`)<br />
) ENGINE=InnoDB;<br />
<br />
insert into names (firstname, lastname, postcode) values<br />
('Andy','Smith','SN13QA'),<br />
('Belinda','Tomkins','TR458Y'),<br />
('Colin','Edwards','SW11AA'),<br />
('Dippy','Donut','No fixed abode'),<br />
('Emma','McElroy','ED237YH'),<br />
('Freddie','Frankenstein','FL191TY'),<br />
('Godfrey','Gorbals','GY12BUK'),<br />
('Hettie','Hatrack','SE999RW');<br />
</p>
";