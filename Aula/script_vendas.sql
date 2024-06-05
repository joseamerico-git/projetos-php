#CRIAÇÃO DO BANCO DE DADOS.
        #BANCO
CREATE DATABASE BD;

USE DB;


#CRIAÇÃO DAS TABELA(s) USUARIO, PRODUTO, CLIENTE, VENDA E ITEM_VENDA

CREATE TABLE IF NOT EXISTS `users` (

  `id` int(11) NOT NULL AUTO_INCREMENT,

  `name` varchar(50) CHARACTER SET latin1 NOT NULL,

  `email` varchar(150) CHARACTER SET latin1 NOT NULL,

  `mobile` varchar(20) CHARACTER SET latin1 NOT NULL,

  `address` varchar(255) CHARACTER SET latin1 NOT NULL,

  PRIMARY KEY (`id`)

) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=56 ;

 

INSERT INTO `users` (`id`, `name`, `email`, `mobile`, `address`) VALUES

(1, 'Al-Amin Khan', 'al@min.com', '6546464', 'Dhaka,Bangladesh'),

(2, 'Sahed Bhuiyan', 's@hed.com', '987979', 'Khulna, Bangladesh'),

(3, 'Mamun', 'm@mun.com', '1234', 'Dhaka, Bangladesh'),

(9, 'foysal', 'foysal@yahoo.com', '1234556', 'Dhaka, Bangladesh.');




CREATE TABLE PRODUTO(
ID INTEGER NOT NULL AUTO_INCREMENT PRIMARY KEY,
NOME VARCHAR(30),
DESCRICAO VARCHAR(30),
VALOR NUMERIC (10,2));

INSERT INTO PRODUTO (ID,NOME,DESCRICAO,VALOR) 
VALUES 
(NULL,'Bicicleta aquática xv','modelo 1.00',1000),
(NULL,'Esteira aquática xv','modelo 1.00',2000),
(NULL,'Boia aquática xv','modelo 1.00',3000),
(NULL,'Bike aquática xv','modelo 1.00',500);


CREATE TABLE CLIENTE (
ID INTEGER NOT NULL AUTO_INCREMENT PRIMARY KEY,
NOME VARCHAR(30),
CPF VARCHAR(20));


INSERT INTO CLIENTE(ID,NOME,CPF)
VALUES
(NULL,'José Américo','311.105.048-37'),
(NULL,'David Jose','311.105.048-37'),
(NULL,'Joaquim','311.105.048-37'),
(NULL,'João Pedro','311.105.048-37');

CREATE TABLE VENDA (
ID INTEGER NOT NULL AUTO_INCREMENT PRIMARY KEY,
DATA_VENDA DATETIME,
DESCONTO NUMERIC(10,2),
TOTAL NUMERIC(10,2));

INSERT INTO VENDA(ID,DATA_VENDA,DESCONTO,TOTAL)
VALUES
(NULL,CURRENT_DATE,5,5000),
(NULL,CURRENT_DATE,5,11000),
(NULL,CURRENT_DATE,5,2300),
(NULL,CURRENT_DATE,5,8000);




CREATE TABLE ITEM_VENDA(
VENDA INTEGER NOT NULL,
PRODUTO INTEGER NOT NULL,
CONSTRAINT VENDA_FK FOREIGN KEY (VENDA)REFERENCES VENDA(ID),
CONSTRAINT PRODUTO_FK FOREIGN KEY (PRODUTO)REFERENCESPRODUTO(ID));

INSERT INTO ITEM_VENDA(VENDA,PRODUTO)
VALUES
(1,1),
(1,2),
(1,3),
(2,1),
(2,3);	  
#******************************
          #PRODUTO
		  #	
SELECT *FROM PRODUTO;
#
#*******************************
          #CLIENTE
		  #
SELECT *FROM CLIENTE;
#
#*******************************
          #VENDA
		  #	
SELECT *FROM VENDA;
#
#*******************************
          #ITEM_VENDA
		  #	
SELECT *FROM ITEM_VENDA;
#
#*******************************

		  






 

