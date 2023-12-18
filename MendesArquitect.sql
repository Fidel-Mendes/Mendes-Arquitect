DROP database if exists Mendes_Arquitect;
CREATE SCHEMA Mendes_Arquitect default character SET utf8 collate utf8_unicode_ci;
USE Mendes_Arquitect;

create table Estado (
UF Varchar (2) NOT NULL,
nome varchar (30),
primary key (UF)
);

create table imagem (
id int not null auto_increment primary key,
nome varchar (220),
caminho varchar (100),
data_upload DATETIME
);

create table Especializacao_Arq (
Identificador_Especialidade INT not null AUTO_INCREMENT,
Nome_Especialidade VARCHAR (35),
primary key (Identificador_Especialidade)
);

create table Usuario (
email varchar (50) not null,
n_senha varchar (20) not null,
cpf varchar (14) not null,
nome varchar (30) not null,
data_nascim DATE not null, 
telefone_celular varchar (16) ,
UF_estado_usuario varchar (2),
cidade varchar (20),
rua varchar (30),
complemento varchar (25),
num_casa varchar (5),
primary key (cpf),
foreign key (UF_estado_usuario) references Estado (UF));

create table imagem_usuario (
id int not null auto_increment primary key,
nome varchar (220),
caminho varchar (100),
data_upload DATETIME,
cpf_usuario VARCHAR (14)
);

create table imagens_curtidas (
id int not null auto_increment,
caminho varchar (100),
cpf_usuario varchar (14),
foreign key (cpf_usuario) references Usuario (cpf),
primary key (id) 
);

create table Tipo_Proj (
ID_TipoProj INT NOT NULL AUTO_INCREMENT,
Nomenclatura VARCHAR (25),
primary key (ID_TipoProj)
);

create table Arquiteto (
Registro_CAUBR varchar (10) not null,
email varchar (100),
n_pass varchar (20) not null, 
telefone_celular varchar (16),
cpf varchar (14) not null, 
nome varchar (30) not null,
text_sobre_mim varchar (250) null,
Id_Espec_Arquiteto INT,
primary key (Registro_CAUBR),
foreign key (Id_Espec_Arquiteto) references Especializacao_Arq (Identificador_Especialidade)
);

/*INSERT INTO Arquiteto (Id_Espec_Arquiteto) VALUES (1);*/

create table Projeto (
ID_projeto int not null auto_increment,
nome varchar (20),
Area_terreno Varchar (15),
Area_Construida VARCHAR (15),
Ano_Projeto VARCHAR (4),
ID_Tipo_Proj INT,
FK_RC_Arquiteto varchar (10),
primary key (ID_projeto),
foreign key (ID_Tipo_Proj) references Tipo_Proj (ID_TipoProj),
foreign key (FK_RC_Arquiteto) references Arquiteto (Registro_CAUBR)
);

create table Avaliacao (
Protocolo INT not null auto_increment, 
texto_usuario varchar (250) not null,
FK_Cpf_Usuario varchar (14),
FK_RC_Arquiteto  varchar (6),
primary key (Protocolo),
foreign key (FK_Cpf_Usuario) references Usuario (cpf),
foreign key (FK_RC_Arquiteto) references Arquiteto (Registro_CAUBR)
);

create table Ideias_Salvas (
Cod_Ideia INT NOT NULL AUTO_INCREMENT, 
cpf_usuario varchar (14), 
Registro_CAUBR_Arquiteto varchar (6),
primary key (Cod_Ideia), 
foreign key (cpf_usuario) references Usuario (cpf),
foreign key (Registro_CAUBR_Arquiteto) references Arquiteto (Registro_CAUBR)
);

-- Área dos Inserts -- 
INSERT INTO Estado (nome, UF) VALUES ("Acre", "AC");
INSERT INTO Estado (nome, UF) VALUES ("Alagoas", "AL");
INSERT INTO Estado (nome, UF) VALUES ("Amapá", "AP");
INSERT INTO Estado (nome, UF) VALUES ("Amazonas", "AM");
INSERT INTO Estado (nome, UF) VALUES ("Bahia", "BA");
INSERT INTO Estado (nome, UF) VALUES ("Ceara", "CE");
INSERT INTO Estado (nome, UF) VALUES ("Distrito Federal", "DF");
INSERT INTO Estado (nome, UF) VALUES ("Espírito Santo", "ES");
INSERT INTO Estado (nome, UF) VALUES ("Goiás", "GO");
INSERT INTO Estado (nome, UF) VALUES ("Maranhão", "MA");
INSERT INTO Estado (nome, UF) VALUES ("Mato Grosso", "MT");
INSERT INTO Estado (nome, UF) VALUES ("Mato Grosso do Sul", "MS");
INSERT INTO Estado (nome, UF) VALUES ("Minas Gerais", "MG");
INSERT INTO Estado (nome, UF) VALUES ("Pará", "PA");
INSERT INTO Estado (nome, UF) VALUES ("Paraíba", "PB");
INSERT INTO Estado (nome, UF) VALUES ("Pernambuco", "PE");
INSERT INTO Estado (nome, UF) VALUES ("Piauí", "PI");
INSERT INTO Estado (nome, UF) VALUES ("Rio de Janeiro", "RJ");
INSERT INTO Estado (nome, UF) VALUES ("Rio Grande do Norte", "RN");
INSERT INTO Estado (nome, UF) VALUES ("Rio Grande do Sul", "RS");
INSERT INTO Estado (nome, UF) VALUES ("Rondônia", "RO");
INSERT INTO Estado (nome, UF) VALUES ("Roraima", "RR");
INSERT INTO Estado (nome, UF) VALUES ("Santa Catarina", "SC");
INSERT INTO Estado (nome, UF) VALUES ("São Paulo", "SP");
INSERT INTO Estado (nome, UF) VALUES ("Sergipe", "SE");
INSERT INTO Estado (nome, UF) VALUES ("Tocantins", "TO");

INSERT INTO Especializacao_Arq VALUES 
(NULL, "Arquiteto Urbano"),
(NULL, "Arquiteto Rural"),
(NULL, "Arquiteto Residencial"),
(NULL, "Arquiteto Geral");

INSERT INTO Tipo_Proj VALUES 
(NULL, "Urbano"),
(NULL, "Comercial"),
(NULL, "Residêncial"),
(NULL, "Design de Interiores"),
(NULL, "Industrial");

INSERT INTO Arquiteto (Registro_CAUBR, email, n_pass, telefone_celular, cpf, nome, text_sobre_mim, Id_Espec_Arquiteto) 
VALUES (
"C170728-0",
"BelliniMendes@outlook.com",
"Arquitc_Mends13",
"112779-4662",
"898.089.940-83",
"Rafael Bellini",
null,
4
),
(
"C147896-0",
"FernandaMendes@outlook.com",
"Arquitc_Mends13",
"111478-4752",
"458.458.411-14",
"Fernanda Melo",
null,
4
),
(
"C874622-0",
"FabrícioMendes@outlook.com",
"Arquitc_Mends13",
"111474-4444",
"874.221.215-02",
"Fabrício Kurmann",
null,
4
),
(
"C777414-0",
"RobertaMendes@outlook.com",
"Arquitc_Mends13",
"114785-2142",
"777.555.441-20",
"Roberta Marroni",
null,
4
),
(
"C88874-0",
"BrunaMendes@outlook.com",
"Arquitc_Mends13",
"111234-2145",
"152.541.128-69",
"Bruna Pontinelli",
null,
4
);

INSERT INTO Projeto (
ID_projeto,
nome,
Area_terreno,
Area_Construida,
Ano_Projeto,
ID_Tipo_Proj,
FK_RC_Arquiteto
)
VALUES (
NULL, 
"Residêncial R&R",
"334,72m2",
"1 000, 00m2",
"2020",
3,
"C874622-0"
),
(
NULL, 
"Residêncial J&B",
"500,72m2",
"800, 00m2",
"2018",
3,
"C777414-0"
),
(
NULL,
"Residêncial M&T",
"600,72m2",
"400, 50m2",
"2022",
3,
"C147896-0"
),
(
NULL,
"Design V&T",
"600,72m2",
"400, 50m2",
"2019",
4,
"C147896-0"
);

INSERT INTO  imagem (`nome`,`Caminho`)
VALUES
  ("Proj2_Img1.jpg","arquivos/Proj2_Img1.jpg"),
  ("Proj2_Img2.jpg","arquivos/Proj2_Img2.jpg"),
  ("Proj2_Img3.jpg","arquivos/Proj2_Img3.jpg"),
  ("Proj2_Img4.jpg","arquivos/Proj2_Img4.jpg"),
  ("Proj2_Img5.jpg","arquivos/Proj2_Img5.jpg"),
  ("Proj3_Img1.jpg","arquivos/Proj3_Img1.jpg"),
  ("Proj3_Img2.jpg","arquivos/Proj3_Img2.jpg"),
  ("Proj3_Img3.jpg","arquivos/Proj3_Img3.jpg"),
  ("Proj3_Img4.jpg","arquivos/Proj3_Img4.jpg"),
  ("Proj3_Img5.png","arquivos/Proj3_Img5.png"),
  ("Proj3_Img6.png","arquivos/Proj3_Img6.png"),
  ("Proj4_Img1.jpg","arquivos/Proj4_Img1.jpg"),
  ("Proj4_Img2.png","arquivos/Proj4_Img2.png"),
  ("Proj4_Img3.png","arquivos/Proj4_Img3.png"),
  ("Proj4_Img4.png","arquivos/Proj4_Img4.png"),
  ("Proj4_Img5.png","arquivos/Proj4_Img5.png"),
  ("Proj4_Img6.png","arquivos/Proj4_Img6.png"),
  ("Proj5_Img1.jpg","arquivos/Proj5_Img1.jpg"),
  ("Proj5_Img2.jpg","arquivos/Proj5_Img2.jpg"),
  ("Proj5_Img3.jpg","arquivos/Proj5_Img3.jpg"),
  ("Proj5_Img4.jpg","arquivos/Proj5_Img4.jpg"),
  ("Proj5_Img5.jpg","arquivos/Proj5_Img5.jpg"),
  ("Proj5_Img6.jpg","arquivos/Proj5_Img6.jpg"),
  ("Proj6_Img1.jpg","arquivos/Proj6_Img1.jpg"),
  ("Proj6_Img2.jpg","arquivos/Proj6_Img2.jpg"),
  ("Proj6_Img3.jpg","arquivos/Proj6_Img3.jpg"),
  ("Proj6_Img4.jpg","arquivos/Proj6_Img4.jpg"),
  ("Proj6_Img5.jpg","arquivos/Proj6_Img5.jpg"),
  ("Proj7_Img1.jpg","arquivos/Proj7_Img1.jpg"),
  ("Proj7_Img2.jpg","arquivos/Proj7_Img2.jpg"),
  ("Proj7_Img3.jpg","arquivos/Proj7_Img3.jpg"),
  ("Proj7_Img4.jpg","arquivos/Proj7_Img4.jpg"),
  ("Proj7_Img5.jpg","arquivos/Proj7_Img5.jpg"),
  ("Proj7_Img6.jpg","arquivos/Proj7_Img6.jpg"),
  ("Proj8_Img1.jpg","arquivos/Proj8_Img1.jpg"),
  ("Proj8_Img2.jpg","arquivos/Proj8_Img2.jpg"),
  ("Proj8_Img3.jpg","arquivos/Proj8_Img3.jpg"),
  ("Proj8_Img4.jpg","arquivos/Proj8_Img4.jpg"),
  ("Proj8_Img5.jpg","arquivos/Proj8_Img5.jpg"),
  ("Proj8_Img6.jpg","arquivos/Proj8_Img6.jpg"),
  ("Proj9_Img1.jpg","arquivos/Proj9_Img1.jpg"),
  ("Proj9_Img2.jpg","arquivos/Proj9_Img2.jpg"),
  ("Proj9_Img3.jpg","arquivos/Proj9_Img3.jpg"),
  ("Proj9_Img4.jpg","arquivos/Proj9_Img4.jpg"),
  ("Proj9_Img5.jpg","arquivos/Proj9_Img5.jpg"),
  ("Proj9_Img6.jpg","arquivos/Proj9_Img6.jpg");

SELECT * FROM Usuario;
SELECT * FROM imagem;
SELECT * FROM imagem_usuario;

set sql_safe_updates = 0;

delete from Usuario;

/*
----- CRUD aleatórios ----- 
delete from Arquiteto where Registro_CAUBR = "C170728-0";
select * from Arquiteto;
SELECT * FROM Estado;
delete from Arquiteto WHERE Registro_CAUBR = "B170728-0";
delete from Especializacao_Arq where id = ;
SELECT * FROM PROJETO;
select * from tipo_proj;
SET FOREIGN_KEY_CHECKS = 0;
*/

