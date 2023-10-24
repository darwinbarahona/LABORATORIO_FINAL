//CRUD LISTA DE COMPRAS

//Create, read, update and delete se emplean para manipular la lista 
//de compras conectada esta a una tabla compras en base de datos mysql
//Para la creacion de base de datos se utiliza la siguiente sentencia 

create database aplicacioncompras;

use aplicacioncompras;

create table compras (
  id int,
  compra varchar(255),
  realizado tinyint
);

