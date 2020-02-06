/*Crear base de datos*/
CREATE DATABASE IF NOT EXISTS asir2_web2;

/*Usar la bases de datos*/
use asir2_web2;

/*Crear table*/
CREATE TABLE IF NOT EXISTS users (
    user VARCHAR(50) NOT NULL PRIMARY KEY,
    pass VARCHAR(250)
);

/*Crear usuario*/
CREATE USER 'javis2' IDENTIFIED BY 'Admin123';

/*Dar todos los privilegios al usuario*/
GRANT ALL PRIVILEGES ON *.* TO 'javis2'@'localhost';