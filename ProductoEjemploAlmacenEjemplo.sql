SELECT count(*)

FROM productos p

JOIN esta e ON p.ref = e.ref

JOIN ubicacion u ON e.Id_ubi = u.Id_ubi

WHERE e.almacen_id = 2 AND p.ref = '00003';

