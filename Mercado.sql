create database Mercado;
use Mercado;

create table Estoque(
	codigo int not null primary key auto_increment,
    produto varchar(100) not null,
    quantidade int not null,
    preco float not null
) Engine = InnoDB;

create table Cliente(
	codigo int not null primary key auto_increment,
    nome varchar(100) not null,
    telefone varchar(15) not null,
    endereco varchar(50) not null,
    cpf varchar(11) not null,
    quantidadeCompras int not null,
    totalComprado float not null
) Engine = InnoDB;


select * from Estoque;
select * from Cliente;