create database dbcadclientes;

use dbcadclientes;

create table clientes(
ID int not null auto_increment,
Nome varchar(100),
TelRes varchar(20),
TelCom varchar(20),
Cel varchar(20),
Email varchar(100),
primary key(ID));


Create table tbEmpresas(
codEmp int not null auto_increment,
nomeEmp varchar(100),
CNPJ varchar(20) unique,
razaoSocial varchar(100),
primary key(codEmp));


