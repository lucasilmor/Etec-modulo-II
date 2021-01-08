Create database dbVideoGame;

Create table TipoLocal(
idTipoLocal integer not null identity,
Descricao_TipoLocal varchar(30),
primary key(idTipoLocal)
);

Create table endereco(
idEndereco integer not null identity,
TipoLocal_idTipoLocal integer not null,
Pessoa_idPessoa integer not null,
logradouro_endereco varchar(70) not null,
Numero_Endereco integer not null,
complemento_endereco varchar(100),
bairro_endereco integer not null,
CEP_endereco varchar(30) not null,
estado_endereco char(2) not null,
cidade_endereco varchar(30) not null,
primary key(idEndereco),
foreing key (TipoLocal_idTipoLocal) references TipoLocal (idTipoLocal),
foreing key (Pessoa_idPessoa) references Pessoa (idPessoa) 
);

Create table Contato(
idContato integer not null identity,
TipoLocal_idTipoLocal Integer not null,
Pessoa_idPessoa integer not null identity,
telefone_contato varchar(13) not null,
Mail_contato varchar(30),
primary key(idContato),
foreing key (TipoLocal_idTipoLocal) references TipoLocal (idTipoLocal),
foreing key (Pessoa_idPessoa) references Pessoa (idPessoa) 
);

Create table Pessoa(
idPessoa integer not null identity,
TipoPessoa_idTipoPessoa integer not null,
nome_pessoa varchar(80) not null,
RG_pessoa varchar(10) not null unique,
CPF_pessoa varchar(14) not null unique,
primary key(idPessoa),
foreing key (TipoPessoa_idTipoPessoa) references TipoPessoa (idTipoPessoa)
);

Create table TipoPessoa(
idTipoPessoa integer not null identity,
Descricao_TipoPessoa varchar(20),
primary key(idTipoPessoa)
);

Create table Cliente(
idCliente integer not null identity,
Pessoa_idPessoa integer not null,
Pai_cliente varchar(80),
mae_cliente varchar(80),
nick_cliente varchar(12) unique not null,
Senha_cliente varchar(8) not null,
primary key(idCliente),
foreing key(Pessoa_idPessoa) references Pessoa (idPessoa)
);

Create table Funcionario(
idFuncionario integer not null identity,
Pessoa_idPessoa integer not null,
sexo char(1) not null,
Idade integer not null,
primary key(idFuncionario),
foreing key(Pessoa_idPessoa) references Pessoa (idPessoa)
);

Create table Aluguel(
idAluguel integer not null identity,
Funcionario_idFuncionario integer not null,
Videogame_idVideoGame integer not null,
Cliente_idCliente integer not null,
jogos_idJogos integer not null,
valor_aluguel real not null,
data_aluguel date not null,
primary key(idAluguel),
foreing key(Funcionario_idFuncionario) references Funcionario (idFuncionario),
foreing key(Videogame_idVideogame) references VideoGame (idVideoGame),
foreing key(Cliente_idCliente) references Cliente (idCliente),
foreing key(jogos_idJogos) references Jogos (idJogos)
);

create table Jogos(
idJogos integer not null identity,
nome_jogo varchar(30) not null,
Descricao_jogo varchar(120),
genero_jogo varchar(20) not null,
Produtora_jogo varchar(40) not null,
primary key(idJogos) 
);

Create table VideoGame(
idVideoGame integer not null identity,
Modelo_VideoGame varchar(20) not null,
NS_VideoGame varchar(24) not null,
primary key(idVideoGame)
);