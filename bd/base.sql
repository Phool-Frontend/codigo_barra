create database codigo_barra;

use codigo_barra;

CREATE TABLE `codigo_barra`,`t_productos`(
    `id_producto` INT NOT NULL AUTO_INCREMENT,
    `nombre` VARCHAR (45) NULL,
    `codigo` INT     NULL,
    PRIMARY KEY (`id_producto`));