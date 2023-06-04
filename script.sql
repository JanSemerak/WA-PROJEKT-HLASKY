create database projekt;
use projekt;

CREATE TABLE users (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(50),
    username VARCHAR(25),
    email VARCHAR(50),
    password VARCHAR(75)
);

create table zaznamy(
id INT PRIMARY KEY AUTO_INCREMENT,
jmeno VARCHAR(50),
jmenoucitel VARCHAR(50),
predmet VARCHAR(50),
datum date,
hlaska VARCHAR(255)
);