DROP DATABASE IF EXISTS banco;
CREATE DATABASE IF NOT EXISTS banco;
USE banco;
CREATE TABLE Cidade(
id INT AUTO_INCREMENT,
nome VARCHAR(50),
estado VARCHAR(50),
PRIMARY KEY (id)
);

CREATE TABLE Pessoa(
id INT AUTO_INCREMENT,
nome VARCHAR(50),
email VARCHAR(50),
endereco VARCHAR(50),
bairro VARCHAR(50),
cep VARCHAR(8),
id_cidade int,
PRIMARY KEY (id),
CONSTRAINT FK_PessoaCidade foreign key (id_cidade) references Cidade(id)
);

CREATE TABLE Animal(
id int auto_increment,
nome VARCHAR(50),
especie VARCHAR(50),
raca VARCHAR(50),
dtnasc DATE,
castrado BOOL,
id_pessoa int, 
PRIMARY KEY(id),
CONSTRAINT FK_AnimalPessoa foreign key (id_pessoa) references Pessoa(id)
);
