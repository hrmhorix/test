drop database if exists sampledb;
create database sampledb;
use sampledb;

create table sample_test(
No int,
name varchar(50),
age int,
mail varchar(50)
);


insert into sample_test value(1,"Yamada",21,"xxx@yahoo.co.jp");
insert into sample_test value(2,"Sato",39,"yyy@google.com");
insert into sample_test value(3,"Harada",44,"zzz@yahoo.co.jp");