USE stockify;
SELECT * FROM almacen WHERE id_almacen IN ( SELECT id_almacen FROM ubicacion WHERE id_ubi IN (SELECT id_ubi FROM esta WHERE ref= '00002') )