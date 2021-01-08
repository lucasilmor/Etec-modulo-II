create database dbProdutos CHARACTER SET utf8 COLLATE utf8_general_ci;

use dbProdutos;

create table tbProdutos(
codPro int not null auto_increment,
nomePro varchar(100),
categoriaPro varchar(100),
marcaPro varchar(100),
precoPro float,
estoquePro int,
primary key(codPro))ENGINE=InnoDB DEFAULT CHARSET=utf8 DEFAULT COLLATE utf8_unicode_ci;