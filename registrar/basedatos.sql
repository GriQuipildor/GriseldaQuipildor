create database registrar;
use registrar;
CREATE TABLE usuario(
    id int(11) NOT NULL auto_increment,
    nombre  varchar(100) NOT NULL,
    apellido varchar(100) NOT NULL,
    email varchar(100) NOT NULL,
    password varchar(100) NOT NULL,
    PRIMARY KEY  (id)
);