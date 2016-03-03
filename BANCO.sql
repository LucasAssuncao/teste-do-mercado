CREATE DATABASE lucasassuncao13
USE lucasassuncao13

CREATE TABLE tbl_mercadoria(
cod_mercadoria INT AUTO_INCREMENT PRIMARY KEY,
tipo_mercadoria VARCHAR(50) NOT NULL,
nome_mercadoria VARCHAR(255) NOT NULL,
quantidade INT NOT NULL,
preco DECIMAL (5,2) NOT NULL,
tipoNegocio VARCHAR(255) NOT NULL
);