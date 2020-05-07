CREATE DATABASE tecnoStore CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE tecnoStore;

/* ******* CREACIÓN DE TABLAS ******* */

CREATE TABLE estado(
    idEstado TINYINT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nombreEstado VARCHAR(100) NOT NULL
);

CREATE TABLE rol(
    idRol TINYINT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nombreRol VARCHAR(100) NOT NULL,
    /* FK */
    idEstado TINYINT DEFAULT 1
);

CREATE TABLE usuario(
    idUsuario INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    cedula INT UNSIGNED UNIQUE NOT NULL,
    nombre VARCHAR(255) NOT NULL,
    apellido VARCHAR(255) NOT NULL,
    email VARCHAR(255),
    contrasena VARCHAR(100) NOT NULL,
    /* FK */
    idRol TINYINT DEFAULT 3,
    idEstado TINYINT DEFAULT 1

);

CREATE TABLE producto(
    idProducto INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nombreProducto VARCHAR(255) NOT NULL ,
    precio INT NOT NULL,
    imgProducto VARCHAR(500),
    descripcion VARCHAR(255) NOT NULL,
    /* FK */
    idSubcategoria INT NOT NULL,
    idEstado TINYINT DEFAULT 1

);

CREATE TABLE categoria(
    idCategoria INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nombreCategoria VARCHAR(100) NOT NULL,
    descripcionCategoria VARCHAR(100) DEFAULT 'Sin descripción',
    /* FK */
    idEstado TINYINT DEFAULT 1
);

CREATE TABLE subcategoria(
    idSubcategoria INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nombreSubcategoria VARCHAR(100) NOT NULL,
    descripcionSubcategoria VARCHAR(100) DEFAULT 'Sin descripción',
    /* FK */
    idCategoria INT NOT NULL,
    idEstado TINYINT DEFAULT 1

);

/* Relacion rol y estado*/
ALTER TABLE rol ADD CONSTRAINT fk_rol_estado FOREIGN KEY (idEstado) REFERENCES estado (idEstado)
ON DELETE CASCADE ON UPDATE CASCADE;



/* Relacion usuario y estado*/
ALTER TABLE usuario ADD CONSTRAINT fk_usuario_estado FOREIGN KEY (idEstado) REFERENCES estado (idEstado)
ON DELETE CASCADE ON UPDATE CASCADE;

/* Relacion usuario y rol*/
ALTER TABLE usuario ADD CONSTRAINT fk_usuario_rol FOREIGN KEY (idRol) REFERENCES rol (idRol)
ON DELETE CASCADE ON UPDATE CASCADE;



/* Relacion producto y estado*/
ALTER TABLE producto ADD CONSTRAINT fk_producto_estado FOREIGN KEY (idEstado) REFERENCES estado (idEstado)
ON DELETE CASCADE ON UPDATE CASCADE;

/* Relacion producto y subcategoria*/
ALTER TABLE producto ADD CONSTRAINT fk_producto_subcategoria FOREIGN KEY (idSubcategoria) REFERENCES subcategoria (idSubcategoria)
ON DELETE CASCADE ON UPDATE CASCADE;


/* Relacion categoria y estado*/
ALTER TABLE categoria ADD CONSTRAINT fk_categoria_estado FOREIGN KEY (idEstado) REFERENCES estado (idEstado)
ON DELETE CASCADE ON UPDATE CASCADE;


/* Relacion subcategoria y estado*/
ALTER TABLE subcategoria ADD CONSTRAINT fk_subcategoria_estado FOREIGN KEY (idEstado) REFERENCES estado (idEstado)
ON DELETE CASCADE ON UPDATE CASCADE;

/* Relacion subcategoria y categoria*/
ALTER TABLE subcategoria ADD CONSTRAINT fk_subcategoria_categoria FOREIGN KEY (idCategoria) REFERENCES categoria (idCategoria)
ON DELETE CASCADE ON UPDATE CASCADE;


/* *******INSERCIÓN DE DATOS******* */

INSERT INTO estado (nombreEstado)
    VALUES ('Activo'), ('Inactivo');


INSERT INTO rol (nombreRol)
    VALUES ('SuperAdministrador'), ('Vendedor'), ('Cliente');


INSERT INTO usuario (cedula, nombre, apellido, email, contrasena, idRol) 
VALUES (1007392820, 'Cristian', 'Arevalo Perdomo', 'tiancamilo@gmail.com', '1234', 1), 
        (1020073928, 'Estefania', 'Gomez Rodriguez', 'estefani@gmail.com', '0987', 2),
        (1092820073, 'Camilo', 'Perdomo Arevalo', 'camiloperdomo@gmail.com', '0000', 3);
INSERT INTO usuario (cedula, nombre, apellido, email, contrasena) 
VALUES (1039282007, 'Jose', 'Lopez Gutierrez', 'joseLopez@gmail.com', '1234'), 
        (1023928007, 'Maria Isabel', 'Alvarez Torres', 'mariaIsabel@gmail.com', '0987'),
        (1730928200, 'Danilo', 'Dueñas Prieto', 'danilo@gmail.com', '0000');


INSERT INTO categoria (nombreCategoria) values ('Iphone'),('Asus'),('Lenovo'),('HP', 'Hewlett-Packard');
INSERT INTO categoria (nombreCategoria, descripcionCategoria) values ('HP', 'Hewlett-Packard');

INSERT INTO subcategoria (nombreSubcategoria, idCategoria) 
    VALUES  ('Computador portatil', 1), ('Computador de mesa', 1), ('Tablet', 1), ('Moviles', 1), ('Relojes', 1),
            ('Computador portatil', 2), ('Computador de mesa', 2), ('Tablet', 2), ('Moviles', 2), ('Relojes', 2),
            ('Computador portatil', 3), ('Computador de mesa', 3), ('Tablet', 3), ('Moviles', 3), ('Relojes', 3),
            ('Computador portatil', 4), ('Computador de mesa', 4), ('Tablet', 4), ('Moviles', 4), ('Relojes', 4);

INSERT INTO producto (nombreProducto, precio, descripcion, idSubcategoria) 
    VALUES ('Portátil Asus x507-5', 1300000, 'Portatil Asus x507-5 8GB Windows 10 1TB 21 5" Azul', 2),
            ('Portátil Asus x407ua-bv385', 1100000, 'Portátil Asus (x407ua-bv385) 14" Pulgadas Intel Core I3', 2),
            ('Portátil HP 14-ax104la', 1200000, 'Computador Portátil HP 14" Pulgadas Intel Celeron - 4 GB Ram - Disco Duro 64 Gb - Azul', 4);


/* ******** Inner join para traer todos los datos de (usuario+rol+estado)******** */ 
SELECT cedula, CONCAT(usu.nombre, " ", usu.apellido) AS nombreCompleto, email, contrasena, nombreRol, nombreEstado  FROM usuario as usu 
    INNER JOIN rol AS rol ON usu.idRol = rol.idRol
    INNER JOIN estado AS est ON usu.idEstado = est.idEstado;
/* ******** Inner join para traer todos los datos de (producto+subcategoria+categoria) ******** */       
SELECT pro.nombreProducto, pro.precio, pro.imgProducto, pro.descripcion, sub.nombreSubcategoria, sub.descripcionSubcategoria, cat.nombreCategoria, cat.descripcionCategoria, cat.idEstado
    FROM producto AS pro
    INNER JOIN subcategoria AS sub ON pro.idSubcategoria = sub.idSubcategoria
    INNER JOIN categoria AS cat ON sub.idCategoria = cat.idCategoria;





/* MongoDB */

/* 

use mitienda -> crear o usar x base de datos
db -> muestra la bd en la que estamos actualmente 
show dbs -> muestra todas la bds utilizadas


Manera implicita
    db.usuarios.insert({
        "Cedula": "1008382829",
        "Nombre": "Cristian Camilo",
        "Clave": "1234567890",
        "País": "Colombia"
    })
    usuarios es igual a la colección 
    documento es toda la información dentro de los {}

Manera explicita
    db.createCollection("productos")

    Mostar colecciones de la db
    show collections

    Eliminar Colección
    db.productos.drop()


    use mitienda
    db.dropDatabase()

    show.dbs

    Ver documentos de una colección de forma ordenada
    db.db

    db.productos.update({
        "id": "1"
    },
    {
        set: {'valor': 20.45}
    }
    )
    Si queremos acttualizar todos los que cumplan con la condición agregamos un tercer parametro:
    { multi: true}

    Eliminar un documento
    db.productos.deleteOne({
        "id": "1"
    })

    db.productos.find({
        "valor": 15.0
    })

filtar productos menores a 16
    db.productos.find({
        "valor": {$lt: 16.0}
    })


Menor que           { "valor": {$lt: 15} }
Menor o igual que   { "valor": {$lte: 15} }
Mayor que           { "valor": {$gt: 15} }
Mayor o igual que   { "valor": {$gte: 15} }
No es igual         { "valor": {$ne: 0} }

Operador OR: 
{
    $OR: [
        {key1: value1}, {key2: value2}
    ]
}

Operador AND+OR:
{
    key1: value:1,
    $or: [{  key 2: {$lt: value2}, {key3: value3} }]
}

{_id: "5eb1b1c5393bc9a214718975", $or: [{ car: "BMW"}, {_id: "5eb1b1c5393bc9a214718975"}] }


Limitar la cantidad de consultas
db.productos.find().limit(1)

db.productos.find()sort({"valor": "1"})

1: De menor a mayor 
-1: De menor a mayor
*/