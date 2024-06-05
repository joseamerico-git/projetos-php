CREATE DATABASE VET;
USE VET;

CREATE TABLE VETERINARIO(
VET_CRV CHAR(5) NOT NULL PRIMARY KEY,
VET_CPF CHAR(11),
VET_NOME VARCHAR(50),
VET_CELULAR CHAR(11),
VET_END VARCHAR(50));

CREATE TABLE ANIMAIS(
ANI_CODIGO INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
ANI_ALERGICO CHAR(1),
ANI_NOME VARCHAR(50),
ANI_TIPO VARCHAR(50),
ANI_IDADE INT,
ANI_RACA VARCHAR(50));


CREATE TABLE CONSULTA (
CON_CODIGO INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
CON_DIAGNOSTICO VARCHAR(50),
CON_DATA DATE,
CON_HORA TIME,
VET_CRV CHAR(5) NOT NULL,
ANI_CODIGO INT NOT NULL,
CONSTRAINT CONSULTA_VET_FK FOREIGN KEY (VET_CRV) REFERENCES VETERINARIO(VET_CRV),
CONSTRAINT CONSULTA_ANI_FK FOREIGN  KEY (ANI_CODIGO) REFERENCES ANIMAIS (ANI_CODIGO));


INSERT INTO VETERINARIO (VET_CRV, VET_CPF,VET_NOME,VET_CELULAR,VET_END) VALUES
('007',"31110504837","DR JAMES","997668008","RUA XV DE NOVEMBRO, 123 CENTRO ASSIS-SP");

SELECT *FROM VETERINARIO;

INSERT INTO ANIMAIS(ANI_ALERGICO, ANI_NOME,ANI_TIPO,ANI_IDADE,ANI_RACA) VALUES
('S', "TOCAIA","AVE",5,"CALOPSITA");

SELECT *FROM ANIMAIS;

INSERT INTO CONSULTA (CON_DIAGNOSTICO, CON_DATA, CON_HORA,VET_CRV, ANI_CODIGO) VALUES 
("SEM PENAS",'2019-11-10','10:00',7,1);

SELECT *FROM CONSULTA;
 