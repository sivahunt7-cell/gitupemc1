CREATE DATABASE menswear_db;

USE menswear_db;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(100),
    password VARCHAR(100)
);

CREATE TABLE products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    contact VARCHAR(50),
    wear_type VARCHAR(50),
    image VARCHAR(255)
);
