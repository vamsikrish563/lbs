CREATE TABLE books(
	ID int NOT NULL AUTO_INCREMENT,
	bookname varchar(15) NOT NULL,
	author varchar(15) NOT NULL,
	copies int(10),
	
	PRIMARY KEY (ID)
);