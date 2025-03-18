create database techflow;

use database techflow;

create table perfil(
    id int primary key,
    nome varchar(100) not null
);


create table usuario(
    id int primary key,
    nome varchar(100) not null,
    telefone varchar(14) not null,
    email varchar(100),
    senha varchar(100),
    perfil_id int not null,
    foreign key (perfil_id) references perfil(id)
);


create table chamado(
    id int primary key,
    titulo varchar(100) not null,
    descricao varchar(45) not null,
    usuario_solicitante_id int not null,
    usuario_atendente_id int,
    risco_id int not null,
    status_id int not null,
    setor_id int not null,
    foreign key (usuario_solicitante_id) references usuario(id),
    foreign key (usuario_atendente_id) references usuario(id),
    foreign key (risco_id) references risco(id),
    foreign key (status_id) references status(id),
    foreign key (setor_id) references setor(id)
);

create table status(
    id int primary key,
    nome varchar(100) not null,
    cor varchar(100) null
);

create table risco(
    id int primary key,
    nome varchar(100) not null,
    cor varchar(100) not null
);

create table midia(
    id int primary key,
    midia varchar(100) not null
);

create table setor(
    id int primary key,
    nome varchar(45) not null
);

create table chamado_midia(
	id INT PRIMARY KEY,
    chamado_id int not null,
    midia_id int not null,
    foreign key (chamado_id) references chamado(id),
    foreign key (midia_id) references midia (id)
);

