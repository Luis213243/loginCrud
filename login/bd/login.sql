create database loginCrud;
use loginCrud;

create table t_usuarios (id_nombre int auto_increment,
						nombre varchar(255),
						ApellidoP varchar(255),
						ApellidoM varchar(255),
						correo varchar(255),
						 usuario varchar(255),
						 password varchar(255),
						 primary key(id_usuario)
						 );