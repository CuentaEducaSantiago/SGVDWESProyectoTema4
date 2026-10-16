USE DBSGVDWESProyectoTema4;
CREATE TABLE T02_DEPARTAMENTO(
    T02_CodDepartamento PRIMARY KEY VARCHAR(3),
    T02_DescDepartamento CHAR(255) not null,
    T02_FechaCreacionDepartamento DATETIME  default current_timestamp,
    T02_VolumenDeNegocio FLOAT default 0,
    T02_FechaBajaDepartamento DATETIME default current_timestamp);
INSERT INTO T02_Departamento () VALUES
  ('ADM', 'Administración', '2024-01-15 09:00:00', 125000.00, NULL),
  ('COM', 'Comercial',      '2024-01-15 09:00:00', 240000.00, NULL),
  ('FIN', 'Finanzas',       '2024-01-15 09:00:00', 180000.00, '2024-07-28 10:00:00'),
  ('TEC', 'Tecnología',     '2024-01-15 09:00:00', 310000.00, NULL),
  ('OPT', 'Optimizaciones',       '2024-01-15 09:00:00', 180000.00, '2024-07-28 10:00:00'),
  ('INV', 'Inversiones',     '2024-01-15 09:00:00', 310000.00, NULL),
  ('VEN', 'Ventas',         '2024-01-15 09:00:00', 275000.00, NULL);