#DROP DATABASE examen;
CREATE DATABASE examen;

USE examen;

CREATE TABLE alumnos(
id INT AUTO_INCREMENT,
    nombre VARCHAR(200),
    dni CHAR(9) UNIQUE NOT NULL,
    nota DECIMAL(4,2) CHECK (nota > 0.0),
    PRIMARY key(id)
);

INSERT INTO alumnos VALUES(NULL, "Pedro Gómez", "11111111A", 5.67);
INSERT INTO alumnos VALUES(NULL, "Natalia Rodríguez", "2222222B", 9.23);
INSERT INTO alumnos VALUES(NULL, "Ricardo García", "3333333C", 7.02);
