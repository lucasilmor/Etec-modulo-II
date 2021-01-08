drop database dbUsuarios;

create database dbUsuarios;

use dbUsuarios;

Create table tbUsuarios (
codUsu int not null auto_increment,
nomeUsu varchar(50),
loginUsu varchar(30) unique,
senhaUsu varchar(40),
primary key (codUsu));

