CREATE DATABASE cloth_sales;
USE cloth_sales;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(100),
    email VARCHAR(150) UNIQUE,
    password VARCHAR(255)
);
