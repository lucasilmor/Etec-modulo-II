Create database dbVideoGame;

Create table TipoLocal(
idTipoLocal integer,
Descricao_TipoLocal varchar(30)
);

Create table endereco(
idEndereco integer,
TipoLocal_idTipoLocal integer,
Pessoa_idPessoa integer,
logradouro_endereco varchar(70),
Numero_Endereco integer,
complemento_endereco varchar(100),
bairro_endereco integer,
CEP_endereco varchar(30),
estado_endereco char(2)
);

Create table Contato(
idContato integer,
TipoLocal_idTipoLocal Integer,
TipoLocal_idPessoa integer,
telefone_contato varchar(13),
Maill_contato varchar(30)
);

Create table Pessoa(
idPessoa integer,
TipoPessoa_idTipoPessoa integer,
nome_pessoa varchar(80),
RG_pessoa varchar(10),
CPF_pessoa varchar(14)
);

Create table TipoPessoa(
idTipoPessoa integer,
Descricao_TipoPessoa varchar(20)
);

Create table Cliente(
idCliente integer,
Pessoa_idPessoa integer,
Pai_cliente varchar(80),
mae_cliente varchar(80),
nick_cliente varchar(12),
Senha_cliente varchar(8)
);

Create table Funcionario(
idFuncionario integer,
Pessoa_idPessoa integer,
sexo char(1),
Idade integer,
);

Create table Aluguel(
idAluguel integer,
Funcionario_idFuncionario integer,
Videogame_idVideoGame integer,
Cliente_idCliente integer,
jogos_idJogos integer,
valor_aluguel real,
data_aluguel date
);

create table Jogos(
idJogos integer,
nome_jogo varchar(30),
Descricao_jogo varchar(120),
genero_jogo varchar(20),
Produtora_jogo varchar(40)
);

Create table VideoGame(
idVideoGame integer,
Modelo_VideoGame varchar(20),
NS_VideoGame varchar(24)
);