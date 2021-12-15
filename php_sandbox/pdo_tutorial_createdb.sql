
CREATE DATABASE testdb;
USE testdb;

CREATE TABLE `names` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `firstname` varchar(100) DEFAULT NULL,
  `lastname` varchar(100) DEFAULT NULL,
  `postcode` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB;

insert into names (firstname, lastname, postcode) values
('Andy','Smith','SN13QA'),
('Belinda','Tomkins','TR458Y'),
('Colin','Edwards','SW11AA'),
('Dippy','Donut','No fixed abode'),
('Emma','McElroy','ED237YH'),
('Freddie','Frankenstein','FL191TY'),
('Godfrey','Gorbals','GY12BUK'),
('Hettie','Hatrack','SE999RW');
