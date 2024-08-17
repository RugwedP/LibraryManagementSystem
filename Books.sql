show databases;
create database Books;
use Books;
show tables;
CREATE TABLE Books (
  id INT AUTO_INCREMENT primary key,
  bookId int unique,
  title VARCHAR(255),
  author VARCHAR(255),
  publisher VARCHAR(255),
  publishedYear INT,
  quantity INT,
  price DECIMAL(10, 2)
);
select * from Books;
drop table Books;
select * from borrowed_books;
drop table borrowed_books;