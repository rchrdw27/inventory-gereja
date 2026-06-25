CREATE DATABASE inventaris;
USE inventaris;

CREATE TABLE items (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    code VARCHAR(50),
    stock INT,
    location VARCHAR(100)
);

CREATE TABLE borrowings (
    id INT AUTO_INCREMENT PRIMARY KEY,
    item_id INT,
    borrower_name VARCHAR(100),
    status VARCHAR(20)
);

CREATE TABLE damages (
    id INT AUTO_INCREMENT PRIMARY KEY,
    item_id INT,
    description TEXT,
    status VARCHAR(20)
);
