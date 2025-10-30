drop database kanban_db;
create database kanban_db;
use kanban_db;

create table usuarios (
	id_usuario int primary key auto_increment not null,
    nome_usuario varchar(45) not null,
	email_usuario varchar(45) not null
);

create table tarefas (
	id_tarefa int primary key auto_increment not null,
    fk_usuario int not null,
    descricao_tarefa varchar(200) not null,
	nome_setor varchar(45) not null,
    prioridade ENUM('baixa', 'média', 'alta') not null,
    data_cadastro TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    prioridade_tarefa ENUM('a fazer', 'fazendo', 'pronto') DEFAULT 'a fazer',
    FOREIGN KEY (fk_usuario) REFERENCES usuarios(id_usuario)
    
);