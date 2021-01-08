insert into TipoLocal(Descricao_TipoLocal) values('Residencial');
insert into TipoLocal(Descricao_TipoLocal) values('Comercial');
insert into TipoLocal(Descricao_TipoLocal) values('Pessoal');

insert into Jogos(nome_jogo, Descricao_jogo, genero_jogo, Produtora_jogo)
values('Snoopy', 'Jogo de ação com cachorro,fases', 'Ação', 'Top Games Kid');

insert into Jogos(nome_jogo, Descricao_jogo, genero_jogo, Produtora_jogo)
values('Super Mario', '', 'Ação', 'Top Games Kid');

insert into Jogos(nome_jogo, Descricao_jogo, genero_jogo, Produtora_jogo)
values('Copa do Mundo 2010-África do Sul', 'Competição Futebolística', 'Futebol', 'Top Games Kid');

insert into Jogos(nome_jogo, Descricao_jogo, genero_jogo, Produtora_jogo)
values('FIFA', 'Simulador do EA Sports', 'Futebol', 'Top Games Kid');

insert into Jogos(nome_jogo, Descricao_jogo, genero_jogo, Produtora_jogo)
values('Homem Aranha', 'Versão TEEN', 'Ação', 'Top Games Kid');

insert into Jogos(nome_jogo, Descricao_jogo, genero_jogo, Produtora_jogo)
values('LetsLearn', 'Jogo para praticar inglês', 'Educativo', 'Top Games Kid');

insert into Jogos(nome_jogo, Descricao_jogo, genero_jogo, Produtora_jogo)
values('Capitão Améerica', '', 'Ação', 'Top Games Kid');

insert into VideoGame(Modelo_VideoGame, NS_VideoGame)
values('XBOX360', 'XB91054125');

insert into VideoGame(Modelo_VideoGame, NS_VideoGame)
values('Playstation 3 Slim', 'SO85E5689');

insert into VideoGame(Modelo_VideoGame, NS_VideoGame)
values('Sony PSP', 'SOF5821289');

insert into VideoGame(Modelo_VideoGame, NS_VideoGame)
values('Sony PS Vita WI-FI Bundle', 'SOG782290');

insert into VideoGame(Modelo_VideoGame, NS_VideoGame)
values('PlayStation 2 Slim', 'SO5A0999');

insert into VideoGame(Modelo_VideoGame, NS_VideoGame)
values('Nintendo Wii', 'NINFF0051486');

insert into VideoGame(Modelo_VideoGame, NS_VideoGame)
values('PlayStation 4 Slim', 'SO85E4125');

insert into TipoPessoa(Descricao_TipoPessoa)
values('cliente');

insert into TipoPessoa(Descricao_TipoPessoa)
values('Funcionário');

Insert into Pessoa(nome_pessoa, RG_pessoa, CPF_Pessoa)
values('Alexandre Araújo, 3597848-9', 35987489601);


Insert into Pessoa(nome_pessoa, RG_pessoa, CPF_Pessoa)
values('Giomar de Oliveira, 2657945-8', 26597520944);


Insert into Pessoa(nome_pessoa, RG_pessoa, CPF_Pessoa)
values('Bruno Correa, 4875204-0', 35987489601);


Insert into Pessoa(nome_pessoa, RG_pessoa, CPF_Pessoa)
values('Jonathan Almeida, 3978459-9', 39874548407);


Insert into Pessoa(nome_pessoa, RG_pessoa, CPF_Pessoa)
values('Ricardo Lopes, 4587457-1', 29874587915);


insert into Cliente(Pai_cliente, mae_cliente, nick_cliente, Senha_cliente)
values('', '', 'bcorrea', '159874');

insert into Cliente(Pai_cliente, mae_cliente, nick_cliente, Senha_cliente)
values('', '', 'jalmeida', '854789');


insert into Funcionario(sexo, Idade)
values('M', 22);


insert into Funcionario(sexo, Idade)
values('M', 19);

insert into Funcionario(sexo, Idade)
values('F', 19);


insert into Contato(telefone_contato, Mail_contato)
values(1156662008, aaraujo@ig.com.br);


insert into Contato(telefone_contato, Mail_contato)
values(1156691587, alearaujo@uol.com.br);


insert into Contato(telefone_contato, Mail_contato)
values(1156698877, goliveira@terra.com.br);


insert into Contato(telefone_contato, Mail_contato)
values(11998770028, bcorrea@ig.com.br);


insert into Contato(telefone_contato, Mail_contato)
values(11998887900, jalmeida@bol.com.br);


insert into Contato(telefone_contato, Mail_contato)
values(1156637895, rlopes@hotmail.com.br);


insert into endereco(logradouro_endereco, Numero_Endereco,
 complemento_endereco, bairro_endereco, CEP_endereco, estado_endereco,
 Cidade_enderco)
values('Rua Demonte Risco', 220, '', 'Interlagos', '04814-578', 'São Paulo', 'SP');


insert into endereco(logradouro_endereco, Numero_Endereco,
 complemento_endereco, bairro_endereco, CEP_endereco, estado_endereco,
 Cidade_enderco)
values('Rua Nascimento de Moraes', 51, '', 'Progresso', '04922-510', 'São Paulo', 'SP');


insert into endereco(logradouro_endereco, Numero_Endereco,
 complemento_endereco, bairro_endereco, CEP_endereco, estado_endereco,
 Cidade_enderco)
values('Praça Montes Claros', 15, 'A', 'Progresso', '04914-000', 'São Paulo', 'SP');


insert into endereco(logradouro_endereco, Numero_Endereco,
 complemento_endereco, bairro_endereco, CEP_endereco, estado_endereco,
 Cidade_enderco)
values('Av. Primavera', 1010, '', 'Primavera', '04010-100', 'São Paulo', 'SP');


insert into endereco(logradouro_endereco, Numero_Endereco,
 complemento_endereco, bairro_endereco, CEP_endereco, estado_endereco,
 Cidade_enderco)
values('Rua Marinez', 2, '', 'Orion', '04878-879', 'São Paulo', 'SP');


insert into Aluguel(valor_aluguel, data_aluguel)
values(17.86, 20/01/2004);


insert into Aluguel(valor_aluguel, data_aluguel)
values(17.86, 09/01/2013);


insert into Aluguel(valor_aluguel, data_aluguel)
values(17.86, 04/01/2013);


insert into Aluguel(valor_aluguel, data_aluguel)
values(19.5, 03/03/20013);

