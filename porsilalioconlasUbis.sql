

drop table if exists esta;
drop table if exists ubicacion;
CREATE TABLE Ubicacion (
Id_ubi INT PRIMARY KEY auto_increment, 
zona VARCHAR(10),
pasillo VARCHAR(3),
estanteria VARCHAR(3),
altura VARCHAR(1),
id_almacen INT,
FOREIGN KEY (id_almacen) references almacen(id_almacen),
Unique (zona, pasillo, estanteria, altura,id_almacen)
);
CREATE TABLE esta (
	ref VARCHAR(30),
    almacen_id INT,
    Id_ubi INT,
    primary key(ref,almacen_id,Id_ubi),
    FOREIGN KEY (almacen_id) references almacen(id_almacen),
	FOREIGN KEY (ref) REFERENCES productos(ref),
    FOREIGN KEY (Id_ubi) references ubicacion(Id_ubi)
);