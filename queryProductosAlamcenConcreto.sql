SELECT p.ref, p.marca, p.modelo, u.zona, u.pasillo, u.estanteria, u.altura
FROM productos p
JOIN esta e ON p.ref = e.ref
JOIN ubicacion u ON e.Id_ubi = u.Id_ubi
WHERE e.almacen_id = 1;