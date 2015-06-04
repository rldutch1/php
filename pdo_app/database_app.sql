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
('Pippa','This is a message from Pippa.','2015-03-16 00:11:27'),
('Mindy','This is a message from Mindy.','2015-03-16 00:11:30'),
('Monica','This is a message from Monica.','2015-03-16 00:11:34');

