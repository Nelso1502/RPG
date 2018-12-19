create table heroi (id serial,nome varchar(50),força float, agilidade float, 
vida float ,precisao integer,jogando boolean, classe varchar(50), povo varchar (50), reino varchar(50));

create table jogador (id serial, id_heroi integer, dinheiro float
, experiência integer, nível integer, objetivos varchar)

create table item(id serial, nome varchar(50), descricao varchar, valor float, tipo varchar(50), jogador integer)