CREATE DATABASE evaluacion;

use evaluacion;

CREATE TABLE marca (

     id_marca int AUTO_INCREMENT,
     nombre_marca varchar (100) not null,
     primary key(id_marca)

);

CREATE TABLE modelo (
     id_modelo int AUTO_INCREMENT,
     nombre_modelo varchar (100) not null,
     stock_modelo int not null,
     precio_unidad int not null,
     id_marca int not null,
     primary key(id_modelo)

);


CREATE TABLE ventas (

     id_ventas int AUTO_INCREMENT,
     cantidad_venta int not null,
     total_venta int not null,
     fecha_venta date not null,
     id_modelo int not null,
     primary key(id_ventas)

);


---Relaciones---

alter table modelo add
constraint fk_marca
foreign key (id_marca)
references marca (id_marca);

alter table ventas add
constraint fk_modelo
foreign key (id_modelo)
references modelo (id_modelo);


----insert marca----

Insert into marca (nombre_marca) values ('Ford');
Insert into marca (nombre_marca) values ('Subaru');
Insert into marca (nombre_marca) values ('Porsche');

---- insert modelo---

---ford----

INSERT INTO modelo (id_modelo, nombre_modelo, stock_modelo, precio_unidad, id_marca) VALUES (NULL, 'Bronco 1995', '30', '34000000', '1');
INSERT INTO modelo (id_modelo, nombre_modelo, stock_modelo, precio_unidad, id_marca) VALUES (NULL, 'Focus', '20', '46000000', '1');
INSERT INTO modelo (id_modelo, nombre_modelo, stock_modelo, precio_unidad, id_marca) VALUES (NULL, 'Fiesta Titanium', '40', '52000000', '1');

---- subaru----

INSERT INTO modelo (id_modelo, nombre_modelo, stock_modelo, precio_unidad, id_marca) VALUES (NULL, 'Impresa 1.5 Gl', '10', '28500000', '2');
INSERT INTO modelo (id_modelo, nombre_modelo, stock_modelo, precio_unidad, id_marca) VALUES (NULL, 'BRZ', '20', '114000000', '2');
INSERT INTO modelo (id_modelo, nombre_modelo, stock_modelo, precio_unidad, id_marca) VALUES (NULL, 'Levorg', '10', '135000000', '2');

--- porsche -----

INSERT INTO modelo (id_modelo, nombre_modelo, stock_modelo, precio_unidad, id_marca) VALUES (NULL, '718 Cayman S', '30', '172000000', '3');
INSERT INTO modelo (id_modelo, nombre_modelo, stock_modelo, precio_unidad, id_marca) VALUES (NULL, '718 Spyder', '10', '155000000', '3');
INSERT INTO modelo (id_modelo, nombre_modelo, stock_modelo, precio_unidad, id_marca) VALUES (NULL, '911 Carrera', '20', '335000000', '3');

----insert ventas-----
INSERT INTO ventas (id_ventas, cantidad_venta, total_venta, fecha_venta, id_modelo) VALUES (NULL, '2', '68000000', '2022-09-01', '1');
INSERT INTO ventas (id_ventas, cantidad_venta, total_venta, fecha_venta, id_modelo) VALUES (NULL, '3', '342000000', '2022-08-18', '5');
INSERT INTO ventas (id_ventas, cantidad_venta, total_venta, fecha_venta, id_modelo) VALUES (NULL, '1', '335000000', '2022-07-03', '9');

---



----Select Lista-----

select v.fecha_venta, m.nombre_marca, m.id_marca, mo.nombre_modelo, mo.id_modelo, v.cantidad_venta, mo.precio_unidad, v.total_venta, v.id_modelo, mo.id_marca from ventas as v, marca as m, modelo as mo where v.id_modelo=mo.id_modelo and mo.id_marca=m.id_marca;

