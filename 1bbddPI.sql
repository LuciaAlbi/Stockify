DROP DATABASE IF EXISTS stockify;
CREATE DATABASE stockify CHARACTER SET utf8mb4; 
USE stockify;

CREATE TABLE almacen (
id_almacen INT PRIMARY KEY auto_increment,
direccion VARCHAR(100),
capacidad INT,
cp VARCHAR(5),
tlf VARCHAR(20),
nombre VARCHAR(30)
);

CREATE TABLE ubicacion (
Id_ubi INT PRIMARY KEY auto_increment, 
zona VARCHAR(10),
pasillo int,
estanteria int,
altura int,
id_almacen INT,
FOREIGN KEY (id_almacen) references almacen(id_almacen),
Unique (zona, pasillo, estanteria, altura,id_almacen)
);


CREATE TABLE empleado (
userId INT PRIMARY KEY, 
securePwd VARCHAR(100),
userPwd VARCHAR(20),
nombre VARCHAR(30) UNIQUE,
almacen_id INT,
FOREIGN KEY (almacen_id) REFERENCES almacen(id_almacen)
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

CREATE TABLE incidencias(
fecha_hora datetime,
descripcion VARCHAR(500),
almacen_id INT,
ref VARCHAR(30),
PRIMARY KEY (fecha_hora, almacen_id, ref),
FOREIGN KEY (almacen_id) references almacen(id_almacen),
FOREIGN KEY (ref) REFERENCES productos(ref)
);

CREATE TABLE esta (
	ref VARCHAR(30),
    almacen_id INT,
    Id_ubi INT unique,
    primary key(ref,almacen_id,Id_ubi),
    FOREIGN KEY (almacen_id) references almacen(id_almacen),
	FOREIGN KEY (ref) REFERENCES productos(ref),
    FOREIGN KEY (Id_ubi) references ubicacion(Id_ubi)
);

CREATE TABLE mueve(
    idMov INT auto_increment PRIMARY KEY,
    fecha DATE,
    cant INT,
    id_almacen INT,
    idProducto VARCHAR (40),
    realizado bool,
    FOREIGN KEY (id_almacen) REFERENCES almacen (id_almacen),
    FOREIGN KEY (idProducto) REFERENCES productos (ref)
);
