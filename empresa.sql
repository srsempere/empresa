DROP TABLE IF EXISTS departamentos CASCADE;

CREATE TABLE departamentos (
     id           bigserial    PRIMARY KEY
   , codigo       numeric(2)   NOT NULL UNIQUE
   , denominacion varchar(255) NOT NULL
);

-- FIXTURES (DATOS DE PRUEBA)
INSERT INTO departamentos (codigo, denominacion)
    VALUES (10, 'Informática'),
           (20, 'Administrativo'),
           (30, 'Prevención'),
           (40, 'Laboratorio'),
           (50, 'Automoción');
