create database stories;

use stories;

create table Story(
storyID int not null AUTO_INCREMENT,
storyText varchar(2000),
storyAuthor varchar(30),
storyTitle varchar(30),
constraint pk_storyID primary key (storyID)) ENGINE = INNODB;
