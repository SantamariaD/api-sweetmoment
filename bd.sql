/*CREAR BASE DE DATOS*/
CREATE DATABASE IF NOT EXISTS sweetmoment;

USE sweetmoment;

/* INICIO TABLA DE USUARIOS */
CREATE TABLE usuarios(
    id              INT(255) auto_increment not null,
    nombre          VARCHAR (50) NOT NULL,
    telefono        INT (10) NOT NULL,
    contrasena      VARCHAR (50) NOT NULL,
    email           VARCHAR (50) NOT NULL,
    verificacion    VARCHAR (50) DEFAULT NULL,
    created_at      datetime DEFAULT NULL,
    updated_at      datetime DEFAULT NULL,
    CONSTRAINT pk_usuario PRIMARY KEY(id)
    /* CONSTRAIN fk_tabla1_tabla2 FOREIGN KEY(campo tabla1) REFERENCES tabla2(campo tabla2)  */
)ENGINE=InnoDb;
/* FIN TABLA DE USUARIOS */

/* INICIO TABLA DE PRODUCTOS */
CREATE TABLE productos(
    id              INT(255) auto_increment not null,
    nombre          VARCHAR (50) NOT NULL,
    cantidad        INT (10) NOT NULL,
    precio      VARCHAR (50) NOT NULL,
    created_at      datetime DEFAULT NULL,
    updated_at      datetime DEFAULT NULL,
    CONSTRAINT pk_usuario PRIMARY KEY(id)
    /* CONSTRAIN fk_tabla1_tabla2 FOREIGN KEY(campo tabla1) REFERENCES tabla2(campo tabla2)  */
)ENGINE=InnoDb;
/* FIN TABLA DE PRODUCTOS */

