CREATE DATABASE public_library;
use DATABASE public_library;

CREATE TABLE books (
	id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
	title VARCHAR(255) NOT NULL
);

INSERT INTO books
(title, writer, releasedate, availability)
VALUES
("The Data Chronicles", "Cassandra Queryman", "2023-04-15", "in stock"),
("Nulls and Joins: A Love Story", "Norman Set Theory", "2024-02-28", "Pre-order"),
("The Algorithmic Odyssey", "Ada Code", "2026-07-12", "Available for pre-order"),
("Syntax and Serendipity", "Harper Compiler", "2027-03-20", "Out of stock"),
("The Index Saga", "Olivia Key", "2025-09-10", "Out of stock");