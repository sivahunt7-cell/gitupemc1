CREATE DATABASE textiles_db;
USE textiles_db;

CREATE TABLE users(
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(80),
    email VARCHAR(80) UNIQUE,
    password VARCHAR(255)
);

CREATE TABLE sarees(
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    price INT,
    image VARCHAR(200),
    description TEXT
);

INSERT INTO sarees(name, price, image, description) VALUES
('Soft Silk Saree', 2500, 'silk.jpg', 'Beautiful traditional soft silk saree'),
('Cotton Saree', 1200, 'cotton.jpg', 'Lightweight pure cotton saree'),
('Designer Saree', 3500, 'designer.jpg', 'Premium designer saree for special occasions');
