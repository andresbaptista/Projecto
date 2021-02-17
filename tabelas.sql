#--------------------- TABELA EQUIPAMENTO ---------------------

SET FOREIGN_KEY_CHECKS = 0; #Se isto não está aqui dá erro por causa da chave estrangeira.
DROP TABLE IF EXISTS Equipamento;

CREATE TABLE Equipamento (
	IdEquipamento INT NOT NULL AUTO_INCREMENT,
	Nome VARCHAR(30) NOT NULL,
	IdCategoria SMALLINT NOT NULL,
	Designacao VARCHAR(100) NOT NULL,
	Fabricante VARCHAR(20) NOT NULL,
	Proprietario VARCHAR (50) NOT NULL,
	Email VARCHAR (50) NOT NULL,
	Telemovel INT,
	# Disponibilidade BIT,
	Imagem VARCHAR (50) NOT NULL,
	PRIMARY KEY (idEquipamento)
);

#--------------------- TABELA CATEGORIA ---------------------

SET FOREIGN_KEY_CHECKS = 0; #Se isto não está aqui dá erro por causa da chave estrangeira.
DROP TABLE IF EXISTS Categoria;

CREATE TABLE Categoria (
	IdCategoria SMALLINT NOT NULL,
	NomeCategoria VARCHAR(10) NOT NULL,
	PRIMARY KEY (IdCategoria)
);

INSERT INTO Categoria(IdCategoria, NomeCategoria)
VALUES 
	('1', 'Cama'),
	('2', 'Cadeiras'),
	('3', 'Bengalas');

#-------------------- TABELA VOLUTARIO --------------------

SET FOREIGN_KEY_CHECKS = 0;
DROP TABLE IF EXISTS Voluntario;

CREATE TABLE Voluntario (
	Nome VARCHAR (50) NOT NULL,
	Morada VARCHAR (100) NOT NULL,
	CodPostal VARCHAR (10) NOT NULL,
	Localidade VARCHAR (20) NOT NULL,
	CC INT NOT NULL,
	NIF INT NOT NULL,
	DataNasc DATE NOT NULL,
	Email VARCHAR (50) NOT NULL,
	Telefone INT NOT NULL,
	Verifica DATETIME NOT NULL,
	PRIMARY KEY (CC)
);


ALTER TABLE Equipamento
	ADD FOREIGN KEY (IdCategoria) REFERENCES Categoria(IdCategoria);