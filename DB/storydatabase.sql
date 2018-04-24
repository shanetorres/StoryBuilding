create database stories;

use stories;

create table Story(
storyID int,
storyText varchar(2000),
storyAuthor varchar(30),
constraint pk_storyID primary key (storyID)) ENGINE = INNODB;
