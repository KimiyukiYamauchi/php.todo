grant all on myapp.* to 'myappuser'@'localhost' identified by 'myapppass';
flush privileges;

create database myapp;

use myapp;

create table todos (
  id int primary key auto_increment,
  is_done tinyint(1) default 0,
  title text default null
);

insert into todos(is_done, title)
values (0, 'aaa'), (1, 'bbb'), (0, 'ccc');