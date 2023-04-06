CREATE DATABASE cml;
USE cml;

CREATE TABLE usuario(
idUser INT AUTO_INCREMENT PRIMARY KEY,
primeiroNomeUser VARCHAR(20),
ultimoNomeUser 	VARCHAR(20),
emailInstUser VARCHAR(60),
senhaUser VARCHAR(20),
confirmSenhaUser VARCHAR(20),
rmUser INT,
dddUser VARCHAR(2) CHECK (ddd REGEXP '^[0-9]+$'),
celularUser VARCHAR(9) CHECK (celular REGEXP '^[0-9]+$')
);

CREATE TABLE instituicao(
idInst INT AUTO_INCREMENT PRIMARY KEY,
nomeInst VARCHAR(50),
cepInst VARCHAR(9),
cidadeInst VARCHAR(20),
bairroInst VARCHAR(15),
ruaInst VARCHAR(50),
numeroInst INT,
contInst INT
);

CREATE TABLE livro(
idLivro INT AUTO_INCREMENT PRIMARY KEY,
tituloLivro VARCHAR(50),
autorLivro VARCHAR(40),
editoraLivro VARCHAR(40),
generoLivro VARCHAR(15),
statusLivro VARCHAR(10),
prateleiraLivro VARCHAR(2),

);

SELECT * FROM usuario;