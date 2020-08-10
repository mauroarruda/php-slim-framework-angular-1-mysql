/*-----------------SCRIPT DE CRIAÇÃO DO BANCO E TABELA-----------------*/
/*Create database*/
CREATE DATABASE  IF NOT EXISTS `usuarios` USE `usuarios`;

/*excluir tabela se existir*/
DROP TABLE IF EXISTS `tb_usuarios`;

/*tabela tb_usuarios*/
create table tb_usuarios
(
	id_usuario	int auto_increment primary key,
    nome_usuario char(200),
    email_usuario char(100),
    senha_usuario char(8),
    cpf_usuario char(11),
    login_usuario char(11)

);

/*------------------------FUNÇÕES CRUD---------------------------------*/

/*inserção de teste--com login copiando o valor do cpf*/
INSERT INTO tb_usuarios (nome_usuario,email_usuario,senha_usuario,cpf_usuario,login_usuario)
VALUES('Mauro','mauro@ok.com',MD5('mysenha'),'12345678900',cpf_usuario);

/*atualizar*/
UPDATE tb_usuarios
SET nome_usuario = 'atualizado',
    email_usuario = 'atualizado',
    senha_usuario = 'atualizado',
    cpf_usuario = 'atualizado',
    login_usuario = cpf_usuario
WHERE id_usuario = 1;

/*deletar*/
DELETE FROM tb_usuarios WHERE id_usuario = 1;

/*lista todos */
SELECT * FROM tb_usuarios;

/* Query dos 10 usuarios */
SELECT 
	id_usuario,
    nome_usuario,
    email_usuario,
    senha_usuario,    
    cpf_usuario,
    login_usuario
FROM tb_usuarios
GROUP BY 
	id_usuario,
    nome_usuario,
    email_usuario,
    senha_usuario,    
    cpf_usuario,
    login_usuario
LIMIT 10;