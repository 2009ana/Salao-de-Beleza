CREATE DATABASE AdocaoPets;
USE AdocaoPets;

CREATE TABLE Usuario(
    id_usuario INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(50),
    email VARCHAR(50),
    telefone VARCHAR(20),
    endereco VARCHAR(60)
);

CREATE TABLE Pets (
    id_pet INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100),
    especie VARCHAR(50),
    idade INT,
    pelagem VARCHAR(20),
    sexo INT,
    status VARCHAR(20) DEFAULT 'Disponível'
);

CREATE TABLE Adotantes (
    id_adotante INT AUTO_INCREMENT PRIMARY KEY,
    id_usuario INT NOT NULL,
    FOREIGN KEY (id_usuario) REFERENCES Usuario(id_usuario)
);

CREATE TABLE Adocoes (
    id_adocao INT AUTO_INCREMENT PRIMARY KEY,
    id_pet INT,
    id_adotante INT,
    data_adocao DATE,
    status VARCHAR(20) DEFAULT 'Em análise',
    FOREIGN KEY (id_pet) REFERENCES Pets(id_pet),
    FOREIGN KEY (id_adotante) REFERENCES Adotantes(id_adotante)
);