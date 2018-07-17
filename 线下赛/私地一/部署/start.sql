drop database if exists web1;
create database web1;
use web1;
create table if not exists `user`(
	`uid` int(10) unique primary key auto_increment ,
	`uname` varchar(40) not null,
	`pwd` varchar(40) not null)ENGINE=InnoDB DEFAULT CHARSET=utf8;

insert into `user`(uname,pwd) values ('iscc_7980',md5('testaaaasdas51235125qwedwqdwd'));
CREATE USER 'web1'@'localhost' IDENTIFIED BY 'li!!@$cheng';
GRANT all privileges ON web1.* TO 'web1'@'localhost';									 
	