-- rodar no MySQL (phpMyAdmin ou terminal) antes de usar as questoes 15 e 16
CREATE DATABASE IF NOT EXISTS lista_php;
USE lista_php;

CREATE TABLE IF NOT EXISTS usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    telefone VARCHAR(20)
);
