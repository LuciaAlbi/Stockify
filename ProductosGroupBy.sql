SELECT p.ref, p.marca, p.modelo, p.f_rota
        FROM productos p
        JOIN esta e ON p.ref = e.ref
        WHERE e.almacen_id = 3 GROUP BY p.ref