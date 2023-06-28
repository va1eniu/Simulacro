-- SQLBook: Code
CREATE DATABASE Alquilartemis;

use Alquilartemis;



CREATE TABLE usuario(
    id_usuario INT primary key AUTO_INCREMENT,
    nombres VARCHAR(50) NOT NULL,
    contraseña VARCHAR(50)
 
);

CREATE TABLE empleados(
    id_empleados INT primary key AUTO_INCREMENT,
    nombres VARCHAR(50) NOT NULL
 
);

CREATE TABLE productos(
    id_producto INT primary key AUTO_INCREMENT,
    nombres VARCHAR(50) NOT NULL,
    precio INT (20)
 
);

CREATE TABLE empresa(
    id_empresa INT primary key AUTO_INCREMENT,
    nombres VARCHAR(50) NOT NULL
 
);





CREATE TABLE cotizacion(
    id_cotizacion INT primary key AUTO_INCREMENT,
    empleado VARCHAR(50) NOT NULL,
    empresa VARCHAR(50) NOT NULL,
    producto VARCHAR(50) NOT NULL,
    fecha DATE ,
    fecha_entrega DATE ,
    total INT (50)
);


CREATE TABLE Alquiler(
    id_Alquiler INT primary key AUTO_INCREMENT,
    cliente VARCHAR(50) NOT NULL,
    producto VARCHAR(50) NOT NULL,
    obra VARCHAR(50) NOT NULL,
    precio_dia VARCHAR(50) NOT NULL,
    fecha_salida DATE ,
    fecha_entrega DATE ,
    total INT (50)
);


CREATE TABLE Deboluciones(
    id_Deboluciones INT primary key AUTO_INCREMENT,
    id_Alquiler  INT,
    fecha DATE ,
    total INT (50),
    detalles VARCHAR(50) NOT NULL
    
);

CREATE TABLE Inventario(
    id_inventario INT primary key AUTO_INCREMENT,
    id_producto INT (20),
    nombre_producto  VARCHAR (50),
    cantida_Entrada  INT (20) ,
    cantida_salida  INT (20),
    fecha DATE 

    
);





INSERT INTO empleados (id_empleados, nombres)
VALUES (1,"alejandro Masias Caseres");

INSERT INTO empleados (id_empleados, nombres)
VALUES (2,"Valetina Perez");

INSERT INTO productos (id_producto, nombres,precio)
VALUES (1,"taladro",5000),
(2,"pala",2000),
(3,"Martillo",2000);

INSERT INTO empresa (id_empresa, nombres)
VALUES (1,"Contrutor"),
(2,"kil-Monter"),
(3,"Caltol");




INSERT INTO cotizacion (id_cotizacion, empleado,empresa,producto,fecha,fecha_entrega,total)
VALUES (1,"alejandro Masias Caseres","Contrutor","taladro",'2023-06-11 13:45:00','2023-06-11 13:45:00',5000);
