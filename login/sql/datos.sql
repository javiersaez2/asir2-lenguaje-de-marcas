
CREATE DATABASE IF NOT EXISTS asir2_crud;

use asir2_crud;

CREATE TABLE IF NOT EXISTS blog (
    id MEDIUMINT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(100) NOT NULL,
    info VARCHAR(250) NOT NULL,
    img VARCHAR(100)
);


INSERT INTO blog (title, info, img)
VALUES ('Nombre 1', 'Informacion 1','irudia01.png'); 

INSERT INTO blog (title, info, img)
VALUES ('Nombre 2', 'Informacion 2','irudia02.png'); 