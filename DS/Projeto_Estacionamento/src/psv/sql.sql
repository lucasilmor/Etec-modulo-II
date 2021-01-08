create database dbestacionamento;

use dbestacionamento;

create table carro( placa char(7) not null, cor varchar(20), descricao varchar(100), primary key(placa));

create table user(nome varchar(30), usuario varchar(15), senha varchar(12), nv_acesso int);