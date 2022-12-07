show databases;
use seng333;

create table Student(user_id varchar(10), matric_no varchar(10), Full_name varchar(40), email varchar(30), department varchar(30));
insert into student values("100", "20/0989", "Ahmed Johnson Musa", "musa304@gmail.com", "software engineering"),
("101", "21/0439", "Chinedu Chima David", "cchima@yahoo.com", "Computer Science"),
("100", "20/0989", "Olaniyi Olaoluwa Chris", "olaniyi74@gmail.com", "Political Science"),
("100", "20/0989", "Fatomilola David Itauma", "davefato@gmail.com", "Software Engineering");

update student set user_id="102" where full_name = "Olaniyi Olaoluwa Chris";
update student set user_id="103" where full_name = "Fatomilola David Itauma";

Alter table student
add primary key(user_id, matric_no);


create table Books(Book_ID varchar(10), Title varchar(20), Price float, category varchar(20), Authors varchar(30));
Alter table Books
add primary key(Book_id);
insert into Books values("B190", "Tales by the moonlight", 2500.00, "Thriller", "Ben Akpororo"),
("B210", "A Song of Ice and Fire", 25000.00, "Thriller, Action, Fiction", "David Wood, Chris Pratt"),
("B290", "Emeka and the King's Peacock", 500.50, "Comedy", "Ben Akpororo"),
("B470", "Introduction to Chemistry", 4500.00, "Science, Education", "Angela Hopkins");

create Table Staff(staff_if varchar(10) PRIMARY KEY, Full_name varchar(30));
insert into staff values("S103", "Amusan Rachel Ifeoluwa"),
("S105", "Anibi Adetoye Hamzat"),
("S203", "Duyile Samuel Akinwande"),
("S109", "Adebose Temilade Favour");

create Table Complaints(Complaint_id varchar(10) PRIMARY KEY, Date datetime, Book_id varchar(10), USER_ID varchar(10), Description longtext);

Alter table complaints modify column Date date;

Alter table Complaints ADD constraint foreign key(Book_id) references Books(Book_ID);
Alter table Complaints ADD constraint foreign key(User_id) references Student(User_ID);

create table Collection_info (ID varchar(10), Book_ID varchar(10), staff_id varchar(10), Collection_date date, fine float, Due_date date, Return_date date);

Alter table collection_info ADD constraint foreign key(Book_id) references Books(Book_ID);
Alter table collection_info ADD constraint foreign key(staff_id) references Staff(staff_if);


