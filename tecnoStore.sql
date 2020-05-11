CREATE DATABASE tecnoStore CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE tecnoStore;

/* ******* CREACIÓN DE TABLAS ******* */

CREATE TABLE Status(
    idStatus TINYINT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nameStatus VARCHAR(100) NOT NULL
);

CREATE TABLE Role(
    idRole TINYINT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nameRole VARCHAR(100) NOT NULL,
    /* FK */
    idStatus TINYINT DEFAULT 1
);

CREATE TABLE Person(
    idPerson INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    identification INT UNSIGNED UNIQUE NOT NULL,
    names VARCHAR(255) NOT NULL,
    lastNames VARCHAR(255) NOT NULL,
    email VARCHAR(255),
    pass VARCHAR(100) NOT NULL,
    /* FK */
    idRole TINYINT DEFAULT 3,
    idStatus TINYINT DEFAULT 1

);

CREATE TABLE Category(
    idCategory INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nameCategory VARCHAR(100) NOT NULL,
    descriptionCategory VARCHAR(100) DEFAULT 'Sin descripción',
    /* FK */
    idStatus TINYINT DEFAULT 1
);

CREATE TABLE SubCategory(
    idSubCategory INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nameSubCategory VARCHAR(100) NOT NULL,
    descriptionSubCategory VARCHAR(100) DEFAULT 'Sin descripción',
    /* FK */
    idCategory INT NOT NULL,
    idStatus TINYINT DEFAULT 1

);

CREATE TABLE Product(
    idProduct INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nameProduct VARCHAR(255) NOT NULL ,
    price INT NOT NULL,
    imgProduct VARCHAR(500),
    descriptionProduct VARCHAR(255) NOT NULL,
    /* FK */
    idSubCategory INT NOT NULL,
    idStatus TINYINT DEFAULT 1

);


/* Relacion rol y estado*/
ALTER TABLE Role ADD CONSTRAINT fk_role_status FOREIGN KEY (idStatus) REFERENCES Status (idStatus)
ON DELETE CASCADE ON UPDATE CASCADE;



/* Relacion usuario y estado*/
ALTER TABLE Person ADD CONSTRAINT fk_person_status FOREIGN KEY (idStatus) REFERENCES Status (idStatus)
ON DELETE CASCADE ON UPDATE CASCADE;

/* Relacion usuario y rol*/
ALTER TABLE Person ADD CONSTRAINT fk_person_role FOREIGN KEY (idRole) REFERENCES Role (idRole)
ON DELETE CASCADE ON UPDATE CASCADE;

/* Relacion categoria y estado*/
ALTER TABLE Category ADD CONSTRAINT fk_category_status FOREIGN KEY (idStatus) REFERENCES Status (idStatus)
ON DELETE CASCADE ON UPDATE CASCADE;


/* Relacion subcategoria y estado*/
ALTER TABLE SubCategory ADD CONSTRAINT fk_subCategory_status FOREIGN KEY (idStatus) REFERENCES Status (idStatus)
ON DELETE CASCADE ON UPDATE CASCADE;

/* Relacion subcategoria y categoria*/
ALTER TABLE SubCategory ADD CONSTRAINT fk_subCategory_category FOREIGN KEY (idCategory) REFERENCES Category (idCategory)
ON DELETE CASCADE ON UPDATE CASCADE;

/* Relacion producto y estado*/
ALTER TABLE Product ADD CONSTRAINT fk_product_status FOREIGN KEY (idStatus) REFERENCES Status (idStatus)
ON DELETE CASCADE ON UPDATE CASCADE;

/* Relacion producto y subcategoria*/
ALTER TABLE Product ADD CONSTRAINT fk_product_subCategory FOREIGN KEY (idSubCategory) REFERENCES SubCategory (idSubCategory)
ON DELETE CASCADE ON UPDATE CASCADE;


/* *******INSERCIÓN DE DATOS******* */

INSERT INTO Status (nameStatus)
    VALUES ('Activo'), ('Inactivo');


INSERT INTO Role (nameRole)
    VALUES ('SuperAdministrador'), ('Vendedor'), ('Cliente');


INSERT INTO Person (identification, names, lastNames, email, pass, idRole) 
VALUES (1007392820, 'Cristian', 'Arevalo Perdomo', 'tiancamilo@gmail.com', '1234', 1), 
        (1020073928, 'Estefania', 'Gomez Rodriguez', 'estefani@gmail.com', '0987', 2),
        (1092820073, 'Camilo', 'Perdomo Arevalo', 'camiloperdomo@gmail.com', '0000', 3);
INSERT INTO Person (identification, names, lastNames, email, pass) 
VALUES (1039282007, 'Jose', 'Lopez Gutierrez', 'joseLopez@gmail.com', '1234'), 
        (1023928007, 'Maria Isabel', 'Alvarez Torres', 'mariaIsabel@gmail.com', '0987'),
        (1730928200, 'Danilo', 'Dueñas Prieto', 'danilo@gmail.com', '0000');


INSERT INTO Category (nameCategory) values ('Iphone'),('Asus'),('Lenovo');
INSERT INTO Category (nameCategory, descriptionCategory) values ('HP', 'Hewlett-Packard');

INSERT INTO SubCategory (nameSubCategory, idCategory) 
    VALUES  ('Computador portatil', 1), ('Computador de mesa', 1), ('Tablet', 1), ('Moviles', 1), ('Relojes', 1),
            ('Computador portatil', 2), ('Computador de mesa', 2), ('Tablet', 2), ('Moviles', 2), ('Relojes', 2),
            ('Computador portatil', 3), ('Computador de mesa', 3), ('Tablet', 3), ('Moviles', 3), ('Relojes', 3),
            ('Computador portatil', 4), ('Computador de mesa', 4), ('Tablet', 4), ('Moviles', 4), ('Relojes', 4);

INSERT INTO Product (nameProduct, price, descriptionProduct, idSubCategory) 
    VALUES ('Portátil Asus x507-5', 1300000, 'Portatil Asus x507-5 8GB Windows 10 1TB 21 5" Azul', 2),
            ('Portátil Asus x407ua-bv385', 1100000, 'Portátil Asus (x407ua-bv385) 14" Pulgadas Intel Core I3', 2),
            ('Portátil HP 14-ax104la', 1200000, 'Computador Portátil HP 14" Pulgadas Intel Celeron - 4 GB Ram - Disco Duro 64 Gb - Azul', 4);


/* ******** Inner join para traer todos los datos de (usuario+rol+estado)******** 
SELECT cedula, CONCAT(usu.nombre, " ", usu.apellido) AS nombreCompleto, email, contrasena, nombreRol, nombreEstado  FROM usuario as usu 
    INNER JOIN rol AS rol ON usu.idRol = rol.idRol
    INNER JOIN estado AS est ON usu.idEstado = est.idEstado;
*/ 

/* ******** Inner join para traer todos los datos de (producto+subcategoria+categoria) ********      
SELECT pro.nombreProducto, pro.precio, pro.imgProducto, pro.descripcion, sub.nombreSubcategoria, sub.descripcionSubcategoria, cat.nombreCategoria, cat.descripcionCategoria, cat.idEstado
    FROM producto AS pro
    INNER JOIN subcategoria AS sub ON pro.idSubcategoria = sub.idSubcategoria
    INNER JOIN categoria AS cat ON sub.idCategoria = cat.idCategoria;
*/  
