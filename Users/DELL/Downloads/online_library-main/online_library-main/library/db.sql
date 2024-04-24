-- CREATE DATABASE public_library;
use public_library;

-- Drop the existing books table
DROP TABLE IF EXISTS books;

-- Recreate the books table with the desired structure
CREATE TABLE books (
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    title VARCHAR(255) NOT NULL,
    writer VARCHAR(255) NOT NULL,
    releasedate VARCHAR(255) NOT NULL,
    availability VARCHAR(255) NOT NULL
);

INSERT INTO books
(title, writer, releasedate, availability)
VALUES
("The Data Chronicles", "Cassandra Queryman", "2023-04-15", "in stock"),
("Nulls and Joins: A Love Story", "Norman Set Theory", "2024-02-28", "Pre-order"),
("The Algorithmic Odyssey", "Ada Code", "2026-07-12", "Available for pre-order"),
("Syntax and Serendipity", "Harper Compiler", "2027-03-20", "Out of stock"),
("The Index Saga", "Olivia Key", "2025-09-10", "Out of stock");

CREATE TABLE users (
id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
email VARCHAR(350) NOT NULL, 
password VARCHAR(255) NOT NULL
);

INSERT INTO users 
(email, password)
VALUES
("josifs53@gmail.com", "Priekskars123$"),
("vezis12@gmail.com", "Skriesana321!")
