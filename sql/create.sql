create table heroi (id serial,nome varchar(50),força float, agilidade float, 
vida float ,precisao integer,jogando boolean, classe varchar(50), povo varchar (50), reino varchar(50),img varchar);

create table jogador (id serial, id_heroi integer, dinheiro float
, experiência integer, nível integer, objetivos varchar);

create table grupo (id serial, id_jogador, id_heroi1, id_heroi2, id_heroi3, id_heroi4, id_heroi5,);

create table item(id serial, nome varchar(50), descricao varchar, valor float, tipo varchar(50), jogador1 integer,
jogador2 integer,jogador3 integer,jogador4 integer,jogador5 integer,jogador6 integer, unico boolean, img varchar);
