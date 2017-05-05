CREATE TABLE niveis_acessos(
  id INT(11) NOT NULL AUTO_INCREMENT,
    nome_nivel VARCHAR(255) NOT NULL,
    constraint pk_niveis_acessos primary key(id)
);

CREATE TABLE usuarios (
  id INT(11) NOT NULL AUTO_INCREMENT,
  nome VARCHAR(255) NOT NULL,
  email VARCHAR(255) NOT NULL,
  usuario VARCHAR(10) NOT NULL,
    senha INT(10) NOT NULL,
    data_criacao DATE NOT NULL,
    data_modificacao DATE,
    nivel_acesso_id int(11) NOT NULL,
    constraint pk_usuario primary key(id),
    constraint fk_niveis_acessos foreign key(nivel_acesso_id) references niveis_acessos(id)
);


CREATE TABLE clientes (
  id int(11) NOT NULL AUTO_INCREMENT,
  nome varchar(255) NOT NULL,
  cpf_cnpj varchar(14) NOT NULL,
  nascimento date NOT NULL,
  endereco varchar(255) NOT NULL,
  bairro varchar(100) NOT NULL,
  cep int(8) NOT NULL,
  cidade varchar(100) NOT NULL,
  estado varchar(100) NOT NULL,
  telefone int(13) NOT NULL,
  celular int(13) NOT NULL,
  data_criacao date NOT NULL,
  data_modificacao date,
  constraint pk_clientes primary key(id)
);



