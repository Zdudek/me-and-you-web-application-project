insert into person (userName, password, firstName, lastName, phoneNumber, gender, birthDate, address, city, st, zipCode)
values ('sriley0@eventbrite.com', 'Hbo9HfMcz9I1', 'Susan', 'Riley', '5555555555', 'Female', '1986-04-19', '34 Bank Dr', 'Manchester', 'NH', '03102');

insert into person (userName, password, firstName, lastName, phoneNumber, gender, birthDate, address, city, st, zipCode)
values ('lburke1@google.fr', 'iqNv9ciiOBg', 'Lawrence', 'Burke', '5555555556', 'Male', '1986-05-19', '34 City Rd', 'Bedford', 'MA', '03134');

insert into person (userName, password, firstName, lastName, phoneNumber, gender, birthDate, address, city, st, zipCode)
values ('mstone2@netscape.com', 'UJQ2gR2', 'Marie', 'Stone', '5555555557', 'Female', '1986-06-19', '34 Howard Dr', 'Hooksett', 'PA', '03178');

insert into person (userName, password, firstName, lastName, phoneNumber, gender, birthDate, address, city, st, zipCode)
values ('tfuller3@microsoft.com', 'cnDVU1RJx', 'Tammy', 'Fuller', '5555555558', 'Female', '1985-10-19', '34 Tree Rd', 'Candia', 'OH', '03136');

insert into person (userName, password, firstName, lastName, phoneNumber, gender, birthDate, address, city, st, zipCode)
values ('bmills4@nbcnews.com', 'oNeamSXqBA', 'Betty', 'Mills', '5555555559', 'Female', '1983-07-15', '34 Fort Way', 'Trexlertown', 'GA', '03101');

insert into person (userName, password, firstName, lastName, phoneNumber, gender, birthDate, address, city, st, zipCode)
values ('aprice5@wufoo.com', '7rWjXR', 'Adam', 'Price', '5555555560', 'Male', '1986-06-18', '34 Boon Dr', 'Allentown', 'NH', '03107');

insert into person (userName, password, firstName, lastName, phoneNumber, gender, birthDate, address, city, st, zipCode)
values ('khunt6@newyorker.com', 'fjiPPrZ1SUzB', 'Keith', 'Hunt', '5555555561', 'Male', '1989-01-22', '34 Frank St', 'Londonderry', 'VA', '03109');

insert into person (userName, password, firstName, lastName, phoneNumber, gender, birthDate, address, city, st, zipCode)
values ('ncarroll7@drupal.org', 'M3Q8f9j', 'Nicole', 'Carroll', '5555555562', 'Female', '1982-03-09', '34 Teepee Dr', 'Merrimack', 'CO', '03104');

insert into person (userName, password, firstName, lastName, phoneNumber, gender, birthDate, address, city, st, zipCode)
values ('jfowler8@51.la', 'bv4E969C', 'Joan', 'Fowler', '5555555563', 'Female', '1984-11-19', '32 Grass St', 'Hudson', 'NH', '03172');

insert into person (userName, password, firstName, lastName, phoneNumber, gender, birthDate, address, city, st, zipCode)
values ('twilliamson9@elegantthemes.com', 'BzmQiu', 'Todd', 'Williamson', '5555555564', 'Male', '1986-08-19', '50 Poppins Dr', 'Nashua', 'NH', '03123');

/* Test sample data for entering duplicate entries */
insert into matches (userName1, userName2, matchCriteria)
values ('sriley0@eventbrite.com', 'lburke1@google.fr', 'name');

insert into matches (userName1, userName2, matchCriteria)
values ('sriley0@eventbrite.com', 'lburke1@google.fr', 'name');

insert into matches (userName1, userName2, matchCriteria)
values ('lburke1@google.fr', 'sriley0@eventbrite.com', 'name');

select * from person;

SELECT * FROM person INNER JOIN emails ON person.UserName = emails.UserName;
