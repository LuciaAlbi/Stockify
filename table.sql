DROP DATABASE IF EXISTS stockify;
CREATE DATABASE stockify CHARACTER SET utf8mb4; 
USE stockify;

CREATE TABLE Ubicacion (
Id_ubi INT PRIMARY KEY auto_increment, 
zona VARCHAR(10),
pasillo VARCHAR(3),
estanteria VARCHAR(3),
altura VARCHAR(3)
);

CREATE TABLE Almacen (
id_almacen INT PRIMARY KEY,
direccion VARCHAR(100),
capacidad INT,
cp VARCHAR(5),
tlf VARCHAR(20),
nombre VARCHAR(30)
);

CREATE TABLE Empleado (
userId INT PRIMARY KEY, 
securePwd VARCHAR(50),
userPwd VARCHAR(20),
nombre VARCHAR(30),
Almacen_id INT,
FOREIGN KEY (Almacen_id) REFERENCES Almacen(id_almacen)
);

CREATE TABLE productos(
    ref VARCHAR(30) PRIMARY KEY,
    p_compra INT,
    p_venta INT,
    marca VARCHAR (40),
    modelo VARCHAR (40),
    peso FLOAT,
    f_rota VARCHAR (40),
    dimensiones INT,
    proveedor VARCHAR (40),
    color VARCHAR(20)
);

CREATE TABLE mueve(
    idMOv INT auto_increment PRIMARY KEY,
    fecha DATE,
    cant INT,
    id_almacen INT,
    idProducto VARCHAR (40),
    CONSTRAINT pk_id_almacen FOREING KEY (id_almacen) REFERENCES Almacen (id_almacen),
    CONSTRAINT pk_id_producto FOREING KEY (idProducto) REFERENCES productos (ref)

);