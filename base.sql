drop database if exists empleados;
create database empleados;
use empleados;
create table empleados(
    id int not null auto_increment,
    nombre varchar(250) not null,
    correo varchar(250) not null,
    primary key(id)
);