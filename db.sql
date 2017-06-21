CREATE DATABASE casestudy;


CREATE TABLE contact (
    PersonID int NOT NULL AUTO_INCREMENT primary key,
    name varchar(100),
    email varchar(100),
    mobile varchar(10),
    message varchar(255)
);
