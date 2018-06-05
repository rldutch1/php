create database app;
use app;
create table guestbook (id int(11) unsigned auto_increment primary key, name varchar(100) not null, message text not null, posted datetime not null)engine=innodb;

-- Create local user.
CREATE USER 'app_user'@'localhost' IDENTIFIED BY 'app_userp';
GRANT ALL PRIVILEGES ON app.* TO 'app_user'@'localhost' WITH GRANT OPTION;
-- Create remote user.
CREATE USER 'app_user'@'%' IDENTIFIED BY 'app_userp';
GRANT ALL PRIVILEGES ON app.* TO 'app_user'@'%' WITH GRANT OPTION;
-- Tell the server to reload the GRANT TABLES.
FLUSH PRIVILEGES;

insert into guestbook (name, message, posted) values
('Mindy','This is a message from Mindy.','1993-05-23 00:00:00'),
('Pippa','This is a message from Pippa.','1995-05-13 00:00:00'),
('Monica','This is a message from Monica.','1995-10-14 00:00:00'),
('Jeanette','This is a message from Jeanette.','1999-02-13 00:00:00');

