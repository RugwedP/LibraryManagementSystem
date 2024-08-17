show databases;
create database studentData;
use studentData;
show tables;
create table student(
	id int auto_increment primary key,
    fullName varchar(255) not null,
    branch varchar(255) not null,
    phoneNumber bigint not null unique,
    prn int not null unique
);
ALTER TABLE student    
MODIFY prn bigint; 

CREATE TABLE borrowed_books (
    student_name varchar(255) not null,
    prn int not null,
    book_id INT,
    borrow_date DATE,
    return_date date,
    FOREIGN KEY (book_id) REFERENCES Books(id)
);
ALTER TABLE borrowed_books    
MODIFY prn bigint; 

select * from student;
drop table student;

