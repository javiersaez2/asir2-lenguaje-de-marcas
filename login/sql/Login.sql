CREATE DATABASE IF NOT EXISTS asir2_web;

use asir2_web;

CREATE TABLE IF NOT EXISTS users (
    user VARCHAR(50) NOT NULL PRIMARY KEY,
    pass VARCHAR(250)
);

/* 
user: javi 
password: admin 
*/
INSERT INTO users (user, pass)
VALUES ('javi', ' $2y$10$NbqaEHuR9EFyBbahZVKxo.Vk8W3VFupbRc0Xr/EO3.2qMZtpPnMmu');