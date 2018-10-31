DROP DATABASE YOUANDME;

CREATE DATABASE YOUANDME;

USE YOUANDME;

CREATE TABLE person (
  userName VARCHAR(50) NOT NULL PRIMARY KEY,
  password VARCHAR(30) NOT NULL,
  firstName VARCHAR(30) NOT NULL,
  lastName VARCHAR(30) NOT NULL,
  phoneNumber VARCHAR(10) NOT NULL,
  gender VARCHAR(6) NOT NULL,
  birthDate DATE NOT NULL,
  address VARCHAR(50) NOT NULL,
  city VARCHAR(15) NOT NULL,
  state_ VARCHAR(30) NOT NULL,
  zip_code INT(5) NOT NULL,
  dateTimeStamp TIMESTAMP
);

CREATE TABLE matches (
  userName VARCHAR(30) NOT NULL PRIMARY KEY,
  matchUserName VARCHAR(30) NOT NULL,
  dateTimeStamp TIMESTAMP,
  foreign key (userName) references person(userName)
);

CREATE TABLE searches (
  searchID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  userName VARCHAR(50) NOT NULL,
  firstName VARCHAR(30) NOT NULL,
  lastName VARCHAR(30) NOT NULL,
  dateTimeStamp TIMESTAMP,
  foreign key (userName) references person(userName)
);

CREATE TABLE emails (
  searchID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  email VARCHAR(30) NOT NULL,
  dateTimeStamp TIMESTAMP,
  foreign key (searchID) references searches(searchID)
);

CREATE TABLE phones (
  searchID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  phone INT(9) NOT NULL,
  dateTimeStamp TIMESTAMP,
  foreign key (searchID) references searches(searchID)
);

insert into person (userName, password, firstName, lastName, phoneNumber, gender, birthDate)
values ('sriley0@eventbrite.com', 'Hbo9HfMcz9I1', 'Susan', 'Riley', '5555555555', 'Female', '1986-04-19');

insert into person (userName, password, firstName, lastName, phoneNumber, gender, birthDate)
values ('lburke1@google.fr', 'iqNv9ciiOBg', 'Lawrence', 'Burke', '5555555556', 'Male', '1986-05-19');

insert into person (userName, password, firstName, lastName, phoneNumber, gender, birthDate)
values ('mstone2@netscape.com', 'UJQ2gR2', 'Marie', 'Stone', '5555555557', 'Female', '1986-06-19');

insert into person (userName, password, firstName, lastName, phoneNumber, gender, birthDate)
values ('tfuller3@microsoft.com', 'cnDVU1RJx', 'Tammy', 'Fuller', '5555555558', 'Female', '1985-10-19');

insert into person (userName, password, firstName, lastName, phoneNumber, gender, birthDate)
values ('bmills4@nbcnews.com', 'oNeamSXqBA', 'Betty', 'Mills', '5555555559', 'Female', '1983-07-15');

insert into person (userName, password, firstName, lastName, phoneNumber, gender, birthDate)
values ('aprice5@wufoo.com', '7rWjXR', 'Adam', 'Price', '5555555560', 'Male', '1986-06-18');

insert into person (userName, password, firstName, lastName, phoneNumber, gender, birthDate)
values ('khunt6@newyorker.com', 'fjiPPrZ1SUzB', 'Keith', 'Hunt', '5555555561', 'Male', '1989-01-22');

insert into person (userName, password, firstName, lastName, phoneNumber, gender, birthDate)
values ('ncarroll7@drupal.org', 'M3Q8f9j', 'Nicole', 'Carroll', '5555555562', 'Female', '1982-03-09');

insert into person (userName, password, firstName, lastName, phoneNumber, gender, birthDate)
values ('jfowler8@51.la', 'bv4E969C', 'Joan', 'Fowler', '5555555563', 'Female', '1984-11-19');

insert into person (userName, password, firstName, lastName, phoneNumber, gender, birthDate)
values ('twilliamson9@elegantthemes.com', 'BzmQiu', 'Todd', 'Williamson', '5555555564', 'Male', '1986-08-19');

insert into searches (userName, firstName, lastName)
values ('sriley0@eventbrite.com', 'Marie', 'Stone');

insert into searches (userName, firstName, lastName)
values ('lburke1@google.fr', 'Tammy', 'Fuller');

insert into searches (userName, firstName, lastName)
values ('aprice5@wufoo.com', 'Betty', 'Mills');

insert into matches (userName, matchUserName)
values ('sriley0@eventbrite.com', 'mstone2@netscape.com');

insert into matches (userName, matchUserName)
values ('lburke1@google.fr', 'tfuller3@microsoft.com');

insert into matches (userName, matchUserName)
values ('aprice5@wufoo.com', 'bmills4@nbcnews.com');

select * from person;
select * from searches;
select * from matches;
